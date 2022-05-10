@extends('layouts.main')
@section('content')
    {{-- create email page --}}
    <div class="container">
        <div class="row">
                @if(count($errors) > 0)
                <ul class='alert'>
                @foreach ($errors->all() as $error)
                    <li class="alert-danger">{{ $error }}</li>
                @endforeach
                    </ul>
                 @endif
            <div class="col-md-12">
                <form action="/emails" method="POST">
                    @csrf
                    @method('POST')
                    <label for="title">Title</label>
                    <input type="text" name="title" value='{{old('title')}}'' class="form-control" placeholder="Title" >
                    <label for="content">Content</label>
                    <textarea name="content" class="form-control" value='{{old('content')}}'' placeholder="Content" ></textarea>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
                {{-- go back --}}
                <a href="/" class="btn btn-primary">Go Back</a>
            </div>
        </div>
    </div>
@endsection
