@extends('layout.master')
@section('content')
<div id="wrapper"class="">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h2>Create Category</h2>
                <form action="{{route('categories.store')}}" method="post">
                @csrf
                    <div class="mt-4">
                    <label for="" class="form-label">Category Name</label>
                    <input type="text" name="name" id="" class="form-control">
                    @error('name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                    <div class="mt-4">
                    <label for="" class="form-label">Parent Category</label>
                    <select name="parent_id" id="" class="form-control mt-4">
                        <option value="">No Parent</option>
                        @foreach($parents as $parent)

                        <option value="{{$parent->id}}">{{$parent->name}}</option>

                        @endforeach
                    </select>
                    </div >
                    <div class="mt-4">
                        <button class="btn btn-primary">Add Category</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>

@endsection