<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bloggo</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
</head>
<body>
    <header></header>

    <main>
        @yield('page-content')
    </main>

    <footer>
        <a href=""><i class="fab fa-instagram"></i>INSTAGRAM</a>
        <a href=""><i class="fab fa-facebook-square"></i>FACEBOOK</a>
        <a href=""><i class="fab fa-twitter"></i>TWITTER</a>
        <a href=""><i class="fab fa-linkedin"></i>LINKEDIN</a>
        
       
        
        
    </footer>
</body>
</html>