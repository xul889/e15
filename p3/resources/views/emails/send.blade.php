@extends('layouts.main')
{{-- prepare receiver before sending the email --}}
@section('content')
{{-- dd varibles --}}
{{-- @if(env('APP_DEBUG'))
    @dd($id)
@endif --}}
{{-- end dd varibles --}}
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>
                            Please input the email address of the receiver
                        </h3>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="/emails/{{$id}}/send">
                            @csrf
                            <input type="email" class="form-control" name="email" placeholder="Please input the email address of the receiver" required>
                            <br>
                            <button type="submit" class="btn btn-primary">Send the email</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection