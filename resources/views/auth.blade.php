<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Auth</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                padding-left: 15px;
                padding-top: 15px;
            }
        </style>
    </head>
    <body>
        <form id="formID" method="post">
            <input type="text" name="emailID" placeholder="Enter E-mail"> <br> <br>
            <input type="text" name="passwordID" placeholder="Enter Password"> <br> <br>
            <input type="text" name="password2ID" placeholder="Confirm Password"> <br> <br>
            <input type="submit" name="submitID"> <br> <br>
        </form>

    </body>
</html>
