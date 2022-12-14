@extends('layout')
@section('title','create computer')
@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-8">
        <h1>create new computer</h1>
    </div>
    <div class="flex justify-center pt-8">
        <form action="{{route('computers.store')}}" method="post" class="from bg-white p-6 border-1">
            @csrf
            <div>
                <label for="computer-name">Computer Name</label>
                <input id="computer-name" name="computer-name" value="{{old('computer-name')}}" type="text">
                @error('computer-name')
                    <div class="form-error">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="computer-origin">Computer Origin</label>
                <input id="computer-origin" name="computer-origin" value="{{old('computer-origin')}}" type="text">
                @error('computer-origin')
                    <div class="form-error">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="computer-price">Computer Price</label>
                <input id="computer-price" name="computer-price" value="{{old('computer-price')}}" type="text">
                @error('computer-price')
                    <div class="form-error">{{$message}}</div>
                @enderror
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>

</div>
@endsection