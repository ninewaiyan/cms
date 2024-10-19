@extends('layout.master')
@section('content')
<div id="content">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-3">
                <a href="{{route('categories.create')}}" class="btn btn-primary">Add New Category</a>
            </div>
            <div class="col-md-3">
                <a href="{{route('categories.restore')}}" class="btn btn-primary">Restore All</a>
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
                            <th>Category</th>
                            <th>Parent Category</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($categories as $category)
                        <tr>
                            <td>{{++ $i}}</td>
                            <td>{{$category->name}}</td>
                            
                            
                                @if($category->parent == null)
                                <td class="text-warning">{{ 'No Parent' }}</td>
                                @else
                                <td>{{ $category->parent->name}}</td>
                                @endif
                            <td><a href="{{route('categories.edit',$category)}}"class="btn btn-outline-success mr-2 rounded-pill"><i class="fa-solid fa-pen-to-square"></i></a>

                            <form action="{{route('categories.destroy',$category->id)}} "  class="d-inline"method="post">
                                @method('delete')
                                @csrf
                            <button class="btn btn-outline-danger ml-2 rounded-pill btn-delete"><i class="fa-solid fa-trash"></i></button>
                            </form>
                            </td>
                        </tr>
                        @empty
                        <tr>

                            <td colspan="4">
                                <span class="text-danger">*Not available Category data. Empty List.</span>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>

            </di>
            
        </div>
        {{$categories->links()}}
    </div>
</div>
@endsection