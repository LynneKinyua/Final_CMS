@extends('admin.layouts.app')

@section('content')

<div class="row">
    
    <div class="col-sm-12">
        {{-- Leaderboard and HUD --}}
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-header">Active FA</div>
                    <div class="card-body">
                        <h4 class="text-center">176</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-header">Top FA</div>
                    <div class="card-body">
                        <h4 class="text-center">Isabella Thumo</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-header">Total Sales of the Month</div>
                    <div class="card-body">
                        <h4 class="text-center">1078</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-header">Total Sales Value</div>
                    <div class="card-body">
                        <h4 class="text-center">£28,980.89</h4>
                    </div>
                </div>
            </div>
        </div><!-- /.row -->
        {{-- End of leaderboard --}}
        <div class="row mt-4">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">Unassigned Leads</div>
                    <ul class="list-group list-group-flush">
                        @for($i = 0; $i < 6; $i++)
                            <li class="list-group-item">
                                Prospect <span class="float-right btn btn-sm btn-success">Assign</span>
                            </li>
                        @endfor
                        <li class="list-group-item">
                            <a href="#" class="btn btn-block btn-md btn-primary">View All Unassigned Leads</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">Recent Reports</div>
                    <ul class="list-group list-group-flush">
                        @for($i = 0; $i < 6; $i++)
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-sm-4">
                                   Leads
                                </div>
                                <div class="col-sm-4">
                                    February 9th, 2020
                                </div>
                                <div class="col-sm-4">
                                    Value: £ 1,095.89
                                    <span class="float-right btn btn-sm btn-success">Details</span>
                                </div>
                            </div>
                        </li>
                        @endfor
                        <li class="list-group-item">
                            <a href="#" class="btn btn-block btn-md btn-primary">View All Recent Estimates</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.col-sm-12 -->
</div><!-- /.row -->


@endsection


      