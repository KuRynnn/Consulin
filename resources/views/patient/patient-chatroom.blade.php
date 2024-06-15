@extends('patient.patient-generics')
@section('content')
<div class="chat-container">
    <div class="chat-box">
      <div class="chat-message received">
        <p>Hello!</p>
      </div>
      <div class="chat-message sent">
        <p>Hi there!</p>
      </div>
      <div class="chat-message received">
        <p>How are you?</p>
      </div>
    </div>
    <div class="chat-input">
      <input type="text" placeholder="Type your message...">
      <button>Send</button>
    </div>
  </div>
@endsection  