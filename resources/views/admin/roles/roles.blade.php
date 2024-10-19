@extends('layout.master')
@section('content')
<div id="content">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-3">
                <a href="{{route('roles.create')}}" class="btn btn-primary">Add New Roles</a>
            </div>
        </div>
        
        <div class="row mt-1">
            <di class="col-md-8">
            <div class="row">
            <div class="col-md-3"></div>
            <div class="mt-2 mb-3">
            @if($message=Session::get('success'))
            <span class="text-success">{{$message}}</span>
            @endif

         </div>

            </div>
            
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($roles as $role)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$role->name}}</td>
                            
                            
                            <td><a href="{{route('roles.edit',$role)}}"class="btn btn-outline-success mr-2 rounded-pill"><i class="fa-solid fa-pen-to-square"></i></a>

                            <form action="{{route('roles.destroy',$role->id)}} "  class="d-inline"method="post">
                                @method('delete')
                                @csrf
                            <button class="btn btn-outline-danger ml-2 rounded-pill"><i class="fa-solid fa-trash"></i></button></td>
                            </form>
                        </tr>
                        @empty
                        <tr>

                            <td colspan="4">
                                <span class="text-danger">*Not available Roles data. Empty List.</span>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </di>
        </div>
    </div>
</div>
@endsection