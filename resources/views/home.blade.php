@extends('layout.app')

@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aperiam assumenda autem debitis distinctio dolore doloremque dolorum enim explicabo maxime pariatur praesentium quo quod repellat saepe, sapiente sunt ullam veniam.</p>
@endsection

@section('sidebar')
    @parent
    <p>this append to the side bar</p>
@endsection