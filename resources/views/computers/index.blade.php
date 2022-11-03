@extends('layout')
@section('title','computers')
@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center">
        <h1>computers</h1>
    </div>

    <div>
        @if (count($computers)>0)
            
        
        <ul>
        @foreach ($computers as $computer)
        <a href="{{route('computers.show', ['computer' => $computer['id']]) }}">
            <li>
            
            <p>{{$computer['name']}} ({{$computer['origin']}}) - {{$computer['price']}}$</p>
            
            </li>
        </a>
        @endforeach  
        </ul>
        @else
        <p>There is no Computers to display</p>
        @endif
    </div>

    
</div>
@endsection