@extends('admin.layout')
@section('content')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            
            <div class="d-flex">
                <h2 class="mr-5">Plates</h2>
                <a href="{{route('admin.plate.create')}}" class="mb-1 btn btn-sm btn-success">
                    Add New
                </a>
            </div>

        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Published</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($plates as $plate)
                    <tr>
                        <td scope="row">{{$loop->index+1}}</td>
                        <td>{{$plate->name}}</td>
                        <td><img src="{{asset($plate->image)}}" 
                        alt="image" width="80px"></td>
                        <td>{{$plate->description}}</td>
                        <td>$ {{$plate->price}}</td>
                        <td>
                           @if($plate->is_published)
                              <span class="text text-success">Yes</span> 
                           @else  
                              <span class="text text-danger">No</span>  
                           @endif
                        </td>
                        <td>
                            <form action="{{route('admin.plate.destroy',$plate->id)}}" >
                            @csrf 
                            @method('delete')

                                <a href="{{route('admin.plate.edit',$plate->id)}}" class="mb-1 btn btn-sm btn-success">
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