<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .cars-container {
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="cars-container">
        <h2>{{ $model }}</h2>
        <img src="{{ $image }}" alt="">
    </div>

</body>
</html>