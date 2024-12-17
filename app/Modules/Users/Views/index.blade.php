<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log in</title>
</head>
<body>
    <form action="{{ route('user.login') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="name" name="name">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password">
        <br>
        <button type="submit">Log in</button>
    </form>
</body>
</html>