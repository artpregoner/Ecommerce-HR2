<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Authentication</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f3f4f6;
    color: #333;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.container {
    text-align: center;
    border: 2px solid #4CAF50;
    padding: 40px;
    border-radius: 10px;
    background-color: #ffffff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.message {
    font-size: 24px;
    margin-bottom: 20px;
}

.login-button {
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    color: #fff;
    background-color: #4CAF50;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s;
}

.login-button:hover {
    background-color: #45a049;
}

    </style>
</head>
<body>
    <div class="container">
        <h1 class="message">HR 2 is authenticated</h1>
        <a href="{{ url('/login') }}" class="login-button">Go to Login</a>
    </div>
</body>
</html>
