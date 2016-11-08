@extends('layouts.app')

@section('styles')
    <style>
        a.action i {
            font-size: 45px;
        }

        a.action:hover {
            text-decoration: none;
        }
    </style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div class="alert alert-success">
                        You are logged in!
                    </div>

                    <div class="row">
                        <div class="action-wrapper">
                            <div class="col-sm-4 text-center">
                                <a href="/message" class="action"><i class="mdi mdi-message"></i>
                                    <br>
                                    Messages
                                </a>
                            </div>
                            <div class="col-sm-4 text-center">
                                <a href="" class="action"><i class="mdi mdi-view-dashboard"></i>
                                    <br>
                                    Content
                                </a>
                            </div>
                            <div class="col-sm-4 text-center">
                                <a href="" class="action"><i class="mdi mdi-account-multiple"></i>
                                    <br>
                                    Users
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
