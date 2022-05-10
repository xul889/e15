@extends('layouts.main')
@section('content')
{{-- confirm deletion --}}
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="/emails/{{ $email->id }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="form-group">
                    <label for="title">Are you sure you want to delete email {{$email->title}}?</label>
                </div>
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            {{-- give up deletion --}}
            <a href="/" class="btn btn-primary">Go Back</a>

        </div>
    </div>
</div>
@endsection
