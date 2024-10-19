@extends('layout.master')
@section('content')
<div id="wrapper" class="">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h2>Create Category</h2>
                <form action="{{route('categories.update',$category->id)}}" method="post">
                    @method("put")
                    @csrf
                    <div class="mt-4">
                        <label for="" class="form-label">Category Name</label>
                        <input type="text" name="name" id="" class="form-control" value="{{$category->name}}">
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mt-4">
                        <label for="" class="form-label">Parent Category</label>

                        <select name="parent_id" id="" class="form-control mt-4">


                         @if($category->parent_id ==null)

                            <option value="">No Parent</option>

                            @foreach($parents as $parent)

                            <option value="{{$parent->id}}">{{$parent->name}}</option>

                            @endforeach

                            @else
                            <option value="">No Parent</option>

                            @foreach($parents as $parent)
                            <option value="{{$parent->id}}" >{{$parent->name}}</option>
                            @endforeach

                            @foreach($parents as $parent)

                            @if($parent->id == $category->parent_id)

                            <option value="{{$parent->id}}" selected>{{$parent->name}}</option>
                            @endif

                            @endforeach

                            
                            


                            @endif

                        
                        </select>
                    </div>
                    <div class="mt-4">
                        <button class="btn btn-primary" type="submit">Update</button>
                        <a href="{{route('categories.index')}}" class="btn btn primary">Cancel</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection