<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Real time chat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <link rel="stylesheet" href="chat-style.css">
</head>

<body>
    <div class="chat">
        <div class="top">
            <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar" style="width: 70px; height: 70px;">
            <div>
                <p>User 1</p>
                <small>Online</small>
            </div>
        </div>

        <div class="messages">
            @include('public.realtime-chat.receive', ['message' => 'Hello'])
        </div>

        <div class="bottom">
            <form>
                <input type="text" id="message" name="message" placeholder="Enter message..." autocomplete="off">
                <button type="submit"></button>
            </form>
        </div>
    </div>
</body>

<script>
    const pusher = new Pusher('2644c3eee517f2fa70af', {
        cluster: 'eu'
    });
    const channel = pusher.subscribe('public');

    //receive message
    channel.bind('chat', function (data) {
        $.post("/pusher-receive", {
                _token: "{{ csrf_token() }}",
                message: data.message,
            })
            .done(function(res) {
                $(".messages > .message").last().after(res);
                $(document).scrollTop($(document).height());
            });
    });

    //broadcast message
    $("form").submit(function(event) {
        event.preventDefault();
        $.ajax({
            method: "POST",
            url: "/pusher-broadcast",
            headers: {
                'X-socket-id': pusher.connection.socket_id
            },
            data: {
                _token: "{{ csrf_token() }}",
                message: $("form #message").val(),
            }
        }).done(function(res){
            $(".messages > .message").last().after(res);
            $("#form #message").val('');
            $(document).scrollTop($(document).height());
        });
    });
</script>

</html>
