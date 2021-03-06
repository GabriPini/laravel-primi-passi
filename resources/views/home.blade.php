<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel-primi-passi</title>
</head>
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
</style>

<body>

    <header class="flex-center">
        <div class="links">
            <a href="{{route('home')}}">Home</a>
            <a href="{{route('fav')}}">Favourites</a>

        </div>
    </header>

    <h1 class="text-center">{{$greetings}}</h1>
    <h2 class="text-center">made by {{$name}}</h2>

</body>

</html>