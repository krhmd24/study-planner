<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Planner</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            background:#f5f7fb;
        }

        .container{
            width:90%;
            max-width:1200px;
            margin:40px auto;
        }

        h1{
            margin-bottom:20px;
            color:#2f80ed;
        }
    </style>

</head>

<body>

<div class="container">

    @yield('content')

</div>

</body>
</html>