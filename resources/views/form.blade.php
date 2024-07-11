@extends('layout.app')

@section('title', isset($id)? 'Edit Notification':'Add Notification')

@section('styles')
<style>
    .error-message{
        color: red;
        font-size: 0,8rem;
    }
</style>

@endsection

@section('content')

    <form method="POST" action=" {{ isset($id) ? route('notifications.update', ['id'=> $notification ->id] ): route('notifications.store') }} ">
    @csrf
    @isset($id)
        @method("PUT")
    @endisset
    <div>
        <label for="title">
            Title
        </label>
        <input type="text" name="title" id="title" value="{{$id->title ?? old('title')}}">
        @error('title')
            <p class="error-message">{{$message}}</p>

        @enderror
    </div>
    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description" rows="5">{{$id->description ?? old('description')}}</textarea>
        @error('description')
            <p class="error-message">{{$message}}</p>

        @enderror
    </div>
    <div>
        <label for="long_desccription">Long Description</label>
        <textarea name="long_desccription" id="long_desccription" rows="10">{{$id->long_desccription ?? old('long_desccription')}}</textarea>
        @error('long_desccription')
            <p class="error-message">{{$message}}</p>

        @enderror
    </div>
    <div>
        <button type="submit">
            @isset($id)
                Update Notification
            @else
                Add Notification
            @endisset
            </button>
    </div>
    </form>
@endsection
