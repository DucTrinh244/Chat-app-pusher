<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Title</title>
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>

<body>

    <div class="top">
        <img src="https://assets.edlin.app/images/rossedlin/03/rossedlin-03-100.jpg" alt="Avatar">
        <div>
            <p>Ross Edlin</p>
            <small> Online</small>
        </div>
    </div>

    <div class="messages">
        @include('receive', ['message' => "Hey! What's up ZONEDEV"])
    </div>
    <div class="bottom">
        <form action="">
            <input type="text" name="" id="message" placeholder="Enter message..." autocomplete="off">
            <button type="submit">Send Message</button>
        </form>
    </div>
</body>

</html>
