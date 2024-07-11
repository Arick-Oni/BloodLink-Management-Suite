@extends('layout.app')

<!-- @section('title', 'Edit Notification')

@section('styles')
<style>
    .error-message{
        color: red;
        font-size: 0,8rem;
    }
</style> -->

@endsection

@section('content')
@include('form', ['id'=>$notification])

    <!-- <form method="POST" action=" {{ route('notifications.update', ['id'=>$notification->id]) }} ">
    @csrf
    @method('PUT')

    <div>
        <label for="title">
            Title
        </label>
        <input type="text" name="title" id="title" value=" {{$notification->title}} ">>
        @error('title')
            <p class="error-message">{{$message}}</p>

        @enderror
    </div>
    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description" rows="5">{{$notification->description}}</textarea>
        @error('description')
            <p class="error-message">{{$message}}</p>

        @enderror
    </div>
    <div>
        <label for="long_desccription">Long Description</label>
        <textarea name="long_desccription" id="long_desccription" rows="10">{{$notification->long_desccription}}</textarea>
        @error('long_desccription')
            <p class="error-message">{{$message}}</p>

        @enderror
    </div>
    <div>
        <button type="submit">Edit Notification</button>
    </div>
    </form> -->
@endsection
