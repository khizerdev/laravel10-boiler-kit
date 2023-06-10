@extends('admin.layouts.app')

@section('title')

SEO Setting

@stop

@section('css')

@endsection
@section('content')


<div class="card">
    <form class="card-body" action="{{route('admin.settings.update')}}" method="post">
        @csrf
        <div class="form-group mb-3">
            <label>Site Meta Author</label>
            <input type="text" name="site_meta_title" class="form-control" placeholder="Site Meta Author" value="{{$setting->site_meta_title}}" required>
        </div>
        <div class="form-group mb-3">
            <label>Site Meta Tags</label>
            <textarea name="site_meta_tags" class="form-control" rows="4" placeholder="Site Meta Tags" required>{{$setting->site_meta_tags}}</textarea>
                <small class="info-text d-block mt-2">separate tags by comma (,)</small>
        </div>
        <div class="form-group mb-3">
            <label>Site Meta Keywords</label>
            <textarea name="site_meta_keywords" class="form-control" rows="4" placeholder="Site Meta Keywords" required>{{$setting->site_meta_keywords}}</textarea>
            <small class="info-text d-block mt-2">separate tags by comma (,)</small>
        </div>
        <div class="form-group">
            <label>Site Meta Description</label>
            <textarea name="site_meta_description" class="form-control" rows="4" placeholder="Site Meta Description" required>{{$setting->site_meta_description}}</textarea>
        </div>
        <button class="btn btn-primary mt-4">Update</button>
    </form>
    
</div>


@endsection