@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Messages</div>

                <div class="panel-body">
                    <a href="/admin/message/create" class="btn btn-primary"><span class="mdi mdi-plus"></span>Create Message</a>
                    <br><br>
                    <div class="bs-responsive-table">
                        <table class="table table-bordered table-striped table-condensed">
                            <thead>
                                <tr>
                                    <th>View</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Uploaded At</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($messages as $message)
                                    <tr>
                                        <td data-title="View" class="text-center">
                                            <a href="/admin/message/{{$message->id}}"><span class="mdi mdi-more"></span></a>
                                        </td>
                                        <td data-title="First Name">{{$message->name_first}}</td>
                                        <td data-title="Last Name">{{$message->name_last}}</td>
                                        <td data-title="Email">{{$message->email}}</td>
                                        <td data-title="Phone Number">{{$message->phone_number}}</td>
                                        <td data-title="Uploaded At">{{$message->created_at}}</td>
                                        <td data-title="Delete" class="text-center">
                                            <a href="/admin/message/{{$message->id}}" class="delete"><span class="mdi mdi-close text-danger"></span></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
