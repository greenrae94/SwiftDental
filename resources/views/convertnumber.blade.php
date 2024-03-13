<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inital-scale=1.0">
        <title>Number to Text Converter</title>
    </head>

    <body>


        <form action="{{ url('/convert') }}" method="post">
            @csrf
            @if (session('error'))
                <div class="error">{{ session('error') }}</div>
            @endif
            <label>Enter a Number as an Integer or a Roman Numeral:</label><br>
            <input type="text" id="number" name="number"><br>
            <button type="submit">Convert</button>
        </form>
    </body>

</html>


<style>
    body {
        font-family: Arail, sans-serif;
        text-align: center;
        margin: 0;
        padding: 0;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #f2f2f2;
    }

    .container {
        width: 300px;
    }

    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    input[type="text"],
    button {
        margin-top: 10px;
        padding: 10px;
        width: 100%;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }

    button {
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #0056b3;
    }

    .error {
        color: red;
        margin-top: 10px;
        font-size: 18px;
        padding-bottom: 5px;
    }
</style>
