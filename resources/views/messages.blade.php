@extends('layout.app')

@section('content')
    <h1>Messages</h1>
    @if(count($messages) > 0)
        @foreach($messages as $message)
            <ul class="list-group m-4">
                <li class="list-group-item">
                    Name: {{$message->name}}
                </li>
                <li class="list-group-item">
                    Email: {{$message->email}}
                </li>
                <li class="list-group-item">
                    Message: {{$message->message}}
                </li>
            </ul>
        @endforeach
    @endif
@endsection

@section('sidebar')
    @parent
    <p>this append to the side bar</p>
@endsection