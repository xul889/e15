@extends('layouts.main')
@section('content')
{{-- edit email details --}}
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(count($errors) > 0)
            <ul class='alert'>
            @foreach ($errors->all() as $error)
                <li class="alert-danger">{{ $error }}</li>
            @endforeach
                </ul>
             @endif
            <form action="/emails/{{ $id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" value='{{old('title', $title)}} ' id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" id="content"  name="content" rows="3">{{old('content', $content)}}? </textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection