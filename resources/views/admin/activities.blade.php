@extends('admin.layouts.app')


@section('content')

    <div class="row">
        <div class="card">
            <div class="card-header">Activities</div>
            <div class="card-body"></div>
            <button class="btn btn-success btn-sm" id="add-activities-btn">Weekly Activities</button>
            @component('admin.layouts.components.forms.add_activities')
            @endcomponent
        </div>

    </div>
@endsection
