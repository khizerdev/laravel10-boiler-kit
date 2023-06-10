@extends('admin.layouts.app')

@section('title')

Site Setting

@stop

@section('css')

@endsection
@section('content')

<div class="card">
    <form class="card-body" action="{{route('admin.settings.update_site')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="col-12 mb-3">
            Site logo  <br><br>
            <img src="{{asset($setting->site_logo ?? '')}}" class="img-fluid" alt=""> <br><br>
            <input type="file" name="site_logo">
        </div>
        <div class="col-12">
            Site Favicon  <br><br>
            <img src="{{asset($setting->favicon ?? '')}}" class="img-fluid" alt=""> <br><br>
            <input type="file" name="favicon">
        </div>
        <button class="btn btn-primary mt-4">Update</button>
    </form>
</div>


@endsection