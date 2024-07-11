@extends('layout.app')

@section('title', $notification->title)

@section('content')


    <p>{{ $notification->description }}</p>
    @if ($notification->long_desccription)
        <p>{{ $notification->long_desccription}}</p>

    @endif
    <p> {{$notification-> created_at}} </p>
    <p> {{$notification-> updated_at}} </p>

    <div>
        <a href="{{ route('notifications.edit', ['id'=>$notification->id])}}">Edit</a>
    </div>

<div>
    <form action="{{ route('notifications.destroy', ['id'=>$notification->id])}}" method="POST" >

        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</div>

@endsection
