@extends('layouts.main')
@section('content')
{{-- register page --}}
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <form action="/register" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                </div>
                <div class="form-group">

                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
            {{-- go back --}}
            <a href="/" class="btn btn-primary">Go Back</a>
        </div>
    </div>
</div>
@endsection
