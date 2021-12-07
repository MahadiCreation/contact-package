<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
</head>
<body>
    <h1>Contact Us Any Time</h1>
    <form action="{{ route('contact') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Your name Please">
        <input type="email" name="email" id="email" placeholder="Enter Your email here">
        <textarea name="message" cols="30" rows="10" placeholder="Type your message here"></textarea>
        <button type="submit">Sent Message</button>
    </form>
</body>
</html>