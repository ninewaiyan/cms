@extends('layout.master')
@section('content')
<div id="wrapper" class="">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h2>Edit Department</h2>
                <form action="{{route('departments.update',$department->id)}}" method="post">
                    @method("put")
                    @csrf
                    <div class="mt-4">
                    <label for="" class="form-label">Name</label>
                    <input type="text" name="name" id="" class="form-control" value="{{ $department->name }}">
                    @error('name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>

                    <div class="mt-4">
                    <label for="" class="form-label">Code</label>
                    <input type="text" name="code" id="" class="form-control" value="{{ $department->code}}">
                    @error('code')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                    
                    <div class="mt-4">
                    <label for="" class="form-label">Phone</label>
                    <input type="text" name="phone" id="" class="form-control" value="{{ $department->phone }}">
                    @error('phone')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                    <div class="mt-4">
                        <button class="btn btn-primary rounded-pill" type="submit">Update</button>
                        <a href="{{route('departments.index')}}" class="btn btn-secondary rounded-pill">Cancel</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection