@extends('layout.master')
@section('content')
<div id="content">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-3">
                <a href="{{route('users.create')}}" class="btn btn-primary">Add New User</a>
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
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users as $user)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                            <td>
                            <form action="{{route('users.destroy',$user->id)}} "  class="d-inline"method="post">
                                @method('delete')
                            <button class="btn btn-outline-danger ml-2 rounded-pill"><i class="fa-solid fa-trash"></i></button></td>
                            </form>
                            </td>
                        </tr>
                        @empty
                        <tr>

                            <td colspan="4">
                                <span class="text-danger">*Not available User data. Empty List.</span>
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