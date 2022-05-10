@extends('layouts.main')
{{-- show email detail --}}
@section('content')

<div class="container"> 
    <div class="row">
        <div class="col-md-12">
            <h1>{{ $email->title }}</h1>
            <p>{{ $email->content }}</p>
            {{-- <p>{{ $email->created_at }}</p> --}}
            <p>{{ $email->updated_at }}</p>
            {{-- inline buttons --}}
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="/emails/{{ $email->id }}/edit" class="btn btn-primary">Edit</a>
                <a href="/emails/{{ $email->id }}/delete" class="btn btn-danger">Delete</a>
                  {{-- go back --}}
                <a href="/" class="btn btn-primary">Go Back</a>
            </div>
        </div>
    </div>
</div>
@endsection
