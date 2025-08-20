<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h1>Form Register</h1>
    <form action="{{ route('welcome') }}" method="POST">
        @csrf
        <label>Nama Depan:</label>
        <input type="text" name="first_name" required><br><br>

        <label>Nama Belakang:</label>
        <input type="text" name="last_name" required><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>