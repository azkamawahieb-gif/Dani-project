
<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
</head>
<body>

    <h2>Form Login</h2>

    <form action="/auth/login" method="POST">
        @csrf

        <label>Username:</label>
        <input type="text" name="username">

        <br><br>

        <label>Password:</label>
        <input type="password" name="password">

        <br><br>

        <button type="submit">Submit</button>
    </form>

</body>
</html>
