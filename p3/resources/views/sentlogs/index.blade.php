@extends('layouts.main')
@section('content')
{{-- show logs title and sent at with talbe  --}}
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Sent Logs</h1>
          
        </div>

    </div>
    {{-- show logs table --}}
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                       
                        <th scope="col">Title</th>
                        <th scope="col">Sent At</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($logs as $log)
                    <tr>
                       
                        <td>{{ $log["title"] }}</td>
                      
                        <td>{{ $log["sent_at"] }}</td>
                     
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
