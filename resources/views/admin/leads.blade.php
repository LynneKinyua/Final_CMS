@extends('admin.layouts.app')

@section('content')

<div class="row">
    <button class="btn btn-success btn-sm" id="add-leads-btn">Add a Lead</button>
</div>
    <div class="row">       
        @foreach ($leads as $leads)
            <div class="col-md-3 offset-md-2">
                <a href="{{ route('admin.adminleads', ['id' => $leads->id]) }}" style="text-decoration: none; color: black">                    
                    <div class="card mt-3">
                        <div class="card-header">
                            {{ $lead->name }}
                        </div>
                        <div class="card-body">
                            <h6>Phone: {{ $leads->phone }}</h6>
                            <h6>Email: {{ $leads->email }}</h6>
                        </div>
                    </div>                    
                </a>
            </div>
        @endforeach
    </div>
@endsection