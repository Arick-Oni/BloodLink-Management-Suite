@extends('layout.app')

<!-- @section('title', 'Add Notification')

@section('styles')
<style>
    .error-message{
        color: red;
        font-size: 0,8rem;
    }
</style>

@endsection -->

@section('content')
    @include('form')

    <!-- <form method="POST" action=" {{ route('notifications.store') }} ">
    @csrf
    <div>
        <label for="title">
            Title
        </label>
        <input type="text" name="title" id="title" value="{{old('title')}}">
        @error('title')
            <p class="error-message">{{$message}}</p>

        @enderror
    </div>
    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description" rows="5">{{old('description')}}</textarea>
        @error('description')
            <p class="error-message">{{$message}}</p>

        @enderror
    </div>
    <div>
        <label for="long_desccription">Long Description</label>
        <textarea name="long_desccription" id="long_desccription" rows="10">{{old('long_desccription')}}</textarea>
        @error('long_desccription')
            <p class="error-message">{{$message}}</p>

        @enderror
    </div>
    <div>
        <button type="submit">Add Notification</button>
    </div>
    </form> -->
@endsection
