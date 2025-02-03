<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite("resources/css/app.css")
    @vite("resources/js/app.js")
</head>
<body>
    <h1 class="text-7xl text-red-500">Home</h1>

    <form action="{{ route('formsubmitted') }}" method="post">
        @csrf
        <label for="fullname">Full Name</label>
        <input type="text" id="fullname" name="fullname" placeholder="Type your full name" required>
        <br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Type your email" required>
        <br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>