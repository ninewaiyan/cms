@extends('layout.master')
@section('content')
<div id="wrapper"class="">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h2>Register</h2>
                <form action="{{route('users.store')}}" method="post">
                @csrf
                    <div class="mt-4">
                    <label for="" class="form-label">Name</label>
                    <input type="text" name="name" id="" class="form-control" value="{{ old('name') }}">
                    @error('name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>

                    <div class="mt-4">
                    <label for="" class="form-label">Email</label>
                    <input type="email" name="email" id="" class="form-control" value="{{ old('name') }}">
                    @error('name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                    
                    <div class="mt-4"> 
                    <label for="" class="form-label">Phone</label>
                    <input type="phone" name="phone" id="" class="form-control" value="{{ old('name') }}">
                    @error('name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>

                    <div class="mt-4">
                    <label for="" class="form-label">Password</label>
                    <input type="password" name="password" id="" class="form-control" value="{{ old('name') }}">
                    @error('name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                    
                    <div class="mt-4 ">
                        <button class="btn btn-primary rounded-pill">Submit</button>
                        <a href="{{route('users.index')}}" class="btn btn-secondary rounded-pill">Cancel</a>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>

@endsection