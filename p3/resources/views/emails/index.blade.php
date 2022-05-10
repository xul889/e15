@extends('layouts.main')

@section('content')
{{-- table to show emails title content --}}
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($emails as $email)
        <tr>
            <th scope="row">{{ $email->id }}</th>
            <td>{{ $email->title }}</td>
            <td>{{ $email->content }}</td>
            <td>{{ $email->created_at }}</td>
            <td>{{ $email->updated_at }}</td>
            <td>
                <a href="/emails/{{ $email->id }}" test="{{$email->title}}" class="btn btn-primary">View</a>
                <a href="/emails/{{ $email->id }}/send" class="btn btn-warning">Send</a>
                
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection

