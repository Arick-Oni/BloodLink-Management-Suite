@extends('layout.app')
@section('title', 'All the notifications')

@section('content')
    <div>
        <a href="{{route('notifications.create')}}">Add Notification</a>
    </div>


        @forelse ($notifications as $notification)
            <div>
            <a href="{{ route('notifications.show', ['id' => $notification->id]) }}">{{ $notification->title }}</a>
            </div>
    @empty
        <div>There are no notifications!</div>
    @endforelse


    @if ($notifications->count())
        <nav>
            {{ $notifications->links() }}
        </nav>
    @endif
@endsection
