<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>

        *{
        margin: 0;
        padding: 0;
        box-sizing: 0;
    }
    body{
        color: white;
        background-size: cover;
        background-repeat: no-repeat;
        background-image: url(https://www.whatspaper.com/wp-content/uploads/2022/02/hd-baby-yoda-wallpaper-whatspaper.webp);
    }
    header{
        background-color: #0f0f0f;
        height: 60px;
    }
    .text-center {
        text-align: center;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .links>a {
        color: cornflowerblue;
        padding: 0 25px;
        font-size: 1rem;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
        cursor: pointer;
    }
    h1{
        padding-top: 30px;
    }
        .unstyled {
            list-style: none;
        }
    </style>
</head>

<body>


    <header class="flex-center">
        <div class="links ">
            <a href="{{route('home')}}">Home</a>
            <a href="{{route('fav')}}">Favourites</a>

        </div>
    </header>
    <h1 class="text-center">The favourites Movie and Series of {{ $name }} </h1>
    <ul>

        @foreach($posts as $post)
        <li class="unstyled text-center">
            <h3>{{ $post }}</h3>
        </li>
        @endforeach
    </ul>

</body>

</html>