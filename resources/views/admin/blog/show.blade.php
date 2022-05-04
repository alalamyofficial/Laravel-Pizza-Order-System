@extends('admin.layout')
@section('content')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            
            <div class="d-flex">
                <h2 class="mr-5">Blog</h2>
                <a href="{{route('admin.blog.create')}}" class="mb-1 btn btn-sm btn-success">
                    Add New
                </a>
            </div>

        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Image</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    @foreach($blogs as $blog)
                    <tr>
                        <td scope="row">{{$loop->index+1}}</td>
                        <td>{{$blog->title}}</td>
                        <td><img src="{{asset($blog->image)}}" 
                        width="100px"
                        alt="{{$blog->title}}"></td>
                        <td>{{$blog->body}}</td>

                        <td>
                            <form action="{{route('admin.blog.destroy',$blog->id)}}" >
                            @csrf 
                            @method('delete')

                                <a href="{{route('admin.blog.edit',$blog->id)}}" class="mb-1 btn btn-sm btn-success">
                                Edit
                                </a>
                                <button type="button" class="mb-1 btn btn-sm btn-danger">
                                Delete
                                </button>
                            </form>
                        </td>

                    </tr>
                    @endforeach
 
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection