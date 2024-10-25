@extends('layout.master')
@section('content')
<div id="content">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-3">
                <a href="{{route('compliants.create')}}" class="btn btn-primary">Add New Department</a>
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
                            <th>Anonymous</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Category</th>
                            <th>Role</th>
                            <th>Department</th>
                            <th>Title</th>
                            <th>Descriptioin</th>
                            <th>File</th>



                        </tr>
                    </thead>
                    <tbody>
                        @forelse($departments as $department)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <th>{{$department->name}}</th>
                            <th>{{$department->code}}</th>
                            <th>{{$department->phone}}</th>
                            
                            <td><a href="{{route('departments.edit',$department)}}"class="btn btn-outline-success mr-2 rounded-pill"><i class="fa-solid fa-pen-to-square"></i></a>

                            <td data-url="{{route('departments.destroy',$department->id)}}">
                            <button class="btn btn-outline-danger ml-2 rounded-pill btn-delete-Department"><i class="fa-solid fa-trash"></i></button></td>
                            </td>
                        </tr>
                        @empty
                        <tr>

                            <td colspan="4">
                                <span class="text-danger">*Not available Department data. Empty List.</span>
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