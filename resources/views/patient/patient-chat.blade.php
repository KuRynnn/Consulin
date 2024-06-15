@extends('patient.patient-generics')
@section('content')
<div class="chat-list">
    <a href="{{ route('patient-chatroom') }}" class="chat-item">
        <div class="avatar"></div>
        <div class="chat-info">
            <div class="chat-meta">
                <span class="sender">John Doe</span>
                <span class="time">12:30 PM</span>
            </div>
            <div class="message">Hello!</div>
        </div>
    </a>
    <a href="{{ route('patient-chatroom') }}" class="chat-item">
        <div class="avatar"></div>
        <div class="chat-info">
            <div class="chat-meta">
                <span class="sender">Jane Smith</span>
                <span class="time">1:45 PM</span>
            </div>
            <div class="message">Hi there!</div>
        </div>
    </a>
</div>
@endsection
