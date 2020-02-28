<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title }} | Jukebox Admin</title>

  <link rel="stylesheet" href={{ asset( 'css/app.css' ) }}>
</head>
<body>

    <nav>
    <a href="{{action('AuthorController@create') }}">New author</a>
    </nav>
    <h1>@yield('headline')</h1>

    @yield('content')




  
</body>
</html>