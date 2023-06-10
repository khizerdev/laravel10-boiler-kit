@extends('admin.layouts.app')

@section('title')

Basic Setting

@stop

@section('css')

@endsection
@section('content')


<div class="card">
    <form class="card-body" action="{{route('admin.settings.update')}}" method="post">
        @csrf
        <div class="form-group mb-3">
            <label>Site Title</label>
            <input type="text" name="site_title" class="form-control" placeholder="Site Title" value="{{$setting->site_title}}" required>
        </div>
        <div class="form-group mb-3">
            <label>Site Tagline</label>
            <input type="text" name="site_tagline" class="form-control" placeholder="Site Tagline" value="{{$setting->site_tagline}}" required>
        </div>
        <div class="form-group mb-3">
            <label>Footer Copyright Text</label>
            <input type="text" name="footer_copyright" class="form-control" placeholder="Footer Copyright Text" value="{{$setting->footer_copyright}}" required>
        </div>
        <div class="form-group mb-3">
            <label>Topbar text</label>
            <input type="text" name="top_bar" class="form-control" placeholder="Topbar Text" value="{{$setting->top_bar}}" required>
        </div>
        <div class="form-group mb-3">
            <label>Topbar Contact</label>
            <input type="number" name="top_contact" class="form-control" placeholder="Topbar Contact" value="{{$setting->top_contact}}" required>
        </div>
        <div class="form-group mb-3">
            <label>Register Discount</label>
            <input type="number" name="register_discount" class="form-control" placeholder="Register Discount" value="{{$setting->register_discount}}" required>
        </div>
        <div class="form-group mb-3">
            <label>Footer Text</label>
            <input type="text" name="footer_text" class="form-control" placeholder="Footer Text" value="{{$setting->footer_text}}" required>
        </div>
        <div class="form-group mb-3">
            <label>Footer Address</label>
            <input type="text" name="footer_address" class="form-control" placeholder="Footer Address" value="{{$setting->footer_address}}" required>
        </div>
        <div class="form-group mb-3">
            <label>Facebook</label>
            <input type="url" name="facebook" class="form-control" placeholder="Facebook URL" value="{{$setting->facebook}}" required>
        </div>
        <div class="form-group mb-3">
            <label>Twitter</label>
            <input type="url" name="twitter" class="form-control" placeholder="Twitter URL" value="{{$setting->twitter}}" required>
        </div>
        <div class="form-group mb-3">
            <label>Instagram</label>
            <input type="url" name="instagram" class="form-control" placeholder="Instagram URL" value="{{$setting->instagram}}" required>
        </div>
        <button class="btn btn-primary mt-4">Update</button>
    </form>
    
</div>


@endsection