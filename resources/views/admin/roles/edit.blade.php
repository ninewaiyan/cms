@extends('layout.master')
@section('content')
<div id="wrapper" class="">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h2>Edit Role</h2>
                <form action="{{route('roles.update',$role->id)}}" method="post">
                    @method("put")
                    @csrf
                    <div class="mt-4">
                    <label for="" class="form-label">Name</label>
                    <input type="text" name="name" id="" class="form-control" value="{{ $role->name }}">
                    @error('name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>

                    <div class="mt-4">
                        <button class="btn btn-primary rounded-pill" type="submit">Update</button>
                        <a href="{{route('roles.index')}}" class="btn btn-secondary rounded-pill">Cancel</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection