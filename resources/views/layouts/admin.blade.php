<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-light bg-faded">
    <a class="navbar-brand" href="#">Navbar</a>
    <ul class="nav navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">About</a>
        </li>
    </ul>
    <form class="form-inline navbar-form pull-right">
        <input class="form-control" type="text" placeholder="Search">
        <button class="btn btn-success-outline" type="submit">Search</button>
    </form>
</nav>
<header>
    <div class="container">
        <div class="row">
            <div class="colo-md-6">
                @yield('content')
            </div>
        </div>
    </div>
</header>

<!-- jQuery first, then Bootstrap JS. -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
</body>
</html>
