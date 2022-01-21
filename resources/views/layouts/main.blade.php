<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NewsAgregator | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Ninth navbar example">
        <div class="container-xl">
            <a class="navbar-brand" href="{{route('home::index')}}">NewsAgregator</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07XL" aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample07XL">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->routeIs('home::index')) ? 'active' : '' }}" aria-current="page" href="{{route('home::index')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->routeIs('news::index') || request()->routeIs('news::show')) ? 'active' : '' }}" href="{{route('news::index')}}">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->routeIs('category::index') || request()->routeIs('category::show')) ? 'active' : '' }}" href="{{route('category::index')}}">Category</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ (request()->is('admin*')) ? 'active' : '' }}" href="#" id="dropdown07XL" data-bs-toggle="dropdown" aria-expanded="false">Admin</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown07XL">
                            <li><a class="dropdown-item {{ (request()->routeIs('admin::index')) ? 'active' : '' }}" href="{{route('admin::index')}}">Dashboard</a></li>
                            <li><a class="dropdown-item {{ (request()->routeIs('admin::news')) ? 'active' : '' }}" href="{{route('admin::news')}}">Create news</a></li>
                            <li><a class="dropdown-item {{ (request()->routeIs('admin::category')) ? 'active' : '' }}" href="{{route('admin::category')}}">Create category</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<main>
    <section>
        <div class="container">
            @yield('content')
        </div>
    </section>
</main>
<footer>

</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
