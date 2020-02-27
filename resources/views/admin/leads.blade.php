@extends('admin.layouts.app')

@section('content')

<div class="row">
    <div class="card">
        <div class="card-header">Lead Information</div>
        <div class="card-body">
            <button class="btn btn-success btn-sm" id="add-leads-btn">Add a Lead</button>
            @component('admin.layouts.components.forms.add_leads')
            @endcomponent
        </div>
    </div> 
</div>
@endsection