@extends('admin.layouts.app')

@section('title')

Create User

@stop

@section('css')

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

@endsection

@section('content')
<div class="card">
    <div class="card-header">
        Create User
    </div>

    <div class="card-body">
        <form autocomplete="off" action="{{ route("admin.users.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group  mb-3 {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Name*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($user) ? $user->name : '') }}" required>
                @if($errors->has('name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </em>
                @endif
            </div>
            <div class="form-group mb-3 {{ $errors->has('email') ? 'has-error' : '' }}">
                <label for="email">Email*</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email', isset($user) ? $user->email : '') }}" required>
                @if($errors->has('email'))
                    <em class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </em>
                @endif
            </div>
            <div class="form-group mb-3 {{ $errors->has('password') ? 'has-error' : '' }}">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
                @if($errors->has('password'))
                    <em class="invalid-feedback">
                        {{ $errors->first('password') }}
                    </em>
                @endif
            </div>
            <div class="form-group mb-3 {{ $errors->has('roles') ? 'has-error' : '' }}">
                <label for="roles">Roles*
                    <!--<span class="btn btn-info btn-xs select-all">{{ trans('global.select_all') }}</span>-->
                    <!--<span class="btn btn-info btn-xs deselect-all">{{ trans('global.deselect_all') }}</span>-->
                </label>
                <select name="roles[]" id="roles" class="form-control select2"  required>
                    @foreach($roles as $id => $roles)
                        <option value="{{ $id }}" {{ (in_array($id, old('roles', [])) || isset($user) && $user->roles->contains($id)) ? 'selected' : '' }}>{{ $roles }}</option>
                    @endforeach
                </select>
                @if($errors->has('roles'))
                    <em class="invalid-feedback">
                        {{ $errors->first('roles') }}
                    </em>
                @endif
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="Save">
            </div>
        </form>


    </div>
</div>
@endsection

@section('scripts')

<script>
    $('#roles').change(function () {
        console.log($(this).val())
    if ($(this).val() == "user") {
        $('select[name=company_id]').attr("required", "true");
    } else {
     
        $('select[name=company_id]').removeAttr("required");
    }
});
</script>

@endsection