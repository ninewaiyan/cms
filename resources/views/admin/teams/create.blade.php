@extends('layout.master')
@section('content')
<div id="wrapper"class="">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h2>Create Team</h2>
                <form action="{{route('teams.store')}}" method="post">
                @csrf
                    <div class="mt-4">
                    <label for="" class="form-label">Name</label>
                    <input type="text" name="name" id="" class="form-control">
                    @error('name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>

                    <div class="mt-4">
                    <label for="" class="form-label">Email</label>
                    <input type="email" name="email" id="" class="form-control">
                    @error('email')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>

                    <div class="mt-4">
                    <label for="" class="form-label">Phone</label>
                    <input type="phone" name="phone" id="" class="form-control">
                    @error('phone')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>


                    <div class="mt-4">
                    <label for="" class="form-label">Role</label>
                    <select name="role_id" id="" class="form-control mt-4">
                        <option value="">Choose Role</option>
                        @foreach($roles as $role)

                        <option value="{{$role->id}}">{{$role->name}}</option>

                        @endforeach
                    </select>
                    </div >

                    <div class="mt-4">
                    <label for="" class="form-label">Department</label>
                    <select name="department_id" id="" class="form-control mt-4">
                        <option value="">Choose Department</option>
                        @foreach($departments as $department)
                        <option value="{{$department->id}}">{{$department->name}}</option>

                        @endforeach
                    </select>
                    </div >

                    <div class="mt-4">
                        <button class="btn btn-primary">Add Team</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>

@endsection