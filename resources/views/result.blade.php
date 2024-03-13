<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inital-scale=1.0">
        <title>Number to Text Converter</title>
    </head>

    <body>
        <h1>Conversion Results:</h1>
        <p>Number: {{ $number }}</p>
        <p>Text: {{ $words }}</p>

        <button onclick="window,location.href='/'">Back</button>
    </body>

</html>

<style>
    body {
        font-family: Arial, sans-serif;
        text-align: center;
        margin: 0;
        padding: 0;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: #f2f2f2;
    }

    h1 {
        margin-bottom: 20px;
    }

    p {
        margin-bottom: 10px;
    }

    button {
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #0056b3;
    }
</style>
