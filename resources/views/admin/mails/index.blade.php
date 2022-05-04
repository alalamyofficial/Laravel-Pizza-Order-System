@extends('admin.layout')
@section('content')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            
            <div class="d-flex">
                <h2 class="mr-5">Mails</h2>
            </div>

        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
  
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Content</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    @foreach($mails as $mail)
                    <tr>
                        <td scope="row">{{$loop->index+1}}</td>
                        <td>{{$mail->name}}</td>
                        <td>{{$mail->email}}</td>
                        <td>{{$mail->subject}}</td>
                        <td>{{$mail->message}}</td>
                        <td>
                            <a class="btn btn-danger btn-sm" href="{{route('admin.mail.destroy',$mail->id)}}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
 
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection