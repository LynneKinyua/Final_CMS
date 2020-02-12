@extends('admin.layouts.app')

    
@section('content')

<div class="row">
    <div class="card">
        <div class="card-header">Client Information</div>
        <div class="card-body"></div>
        <button class="btn btn-success btn-sm" id="add-leads-btn">Add a Client</button>
        @component('admin.layouts.components.forms.add_clients')
        @endcomponent
    </div>
</div>
@endsection