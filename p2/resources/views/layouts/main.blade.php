
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @yield('head')
</head>

<body>
    <div class="wrapper">
    <h1> Your Next Meal </h1>
    <p> Sometimes you might find it difficult to decide what to eat.  This is a program to help you </p>
@yield('content')

    </div>