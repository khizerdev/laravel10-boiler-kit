@extends('admin.layouts.app')

@section('title')

Dashboard

@stop

@section('css')



@endsection


@section('content')


<div class="card">
    <div class="card-header">
        <h5>Account Details</h5>
    </div>
    <div class="card-body">
        <!--<form method="post" name="enq" action="#" enctype="multipart/form-data">-->
            <input type="hidden" name="_token" value="QDbYpCfwCB1nFerUd0kONK6nvSRzsvi8zHmWXEK5">                                                    <div class="row">
                <div class="form-group col-md-6 mb-2">
                    <label>Name <span class="required">*</span></label>
                    <input required="" class="form-control square" name="fname" value="{{auth()->user()->name}}" type="text">
                </div>
        
                <div class="form-group col-md-6 mb-2">
                    <label>Email Address <span class="required">*</span></label>
                    <input required="" class="form-control square" name="email" type="email" value="{{auth()->user()->email}}">
                </div>
                <div class="form-group col-md-12 mb-2">
                    <label>Current Password <span class="required">*</span></label>
                    <input class="form-control square" name="old_password" type="password">
                </div>
                <div class="form-group col-md-12 mb-2">
                    <label>New Password <span class="required">*</span></label>
                    <input class="form-control square" name="password" type="password">
                </div>
                <div class="form-group col-md-12 mb-2">
                    <label>Confirm Password <span class="required">*</span></label>
                    <input class="form-control square" name="password_confirmation" type="password">
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" name="submit" value="Submit">Save</button>
                </div>
            </div>
        <!--</form>-->
    </div>
</div>

@endsection



@section('scripts')



@parent

@endsection