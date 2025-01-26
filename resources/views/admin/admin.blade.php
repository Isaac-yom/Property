<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>@yield('title') | Administration</title>

   
</head>
<body>
    
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Agence</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        @php
        $route = request()->route()->getName();
        @endphp
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('admin.property.index') }}" @class(['nav-link', 'active' => str_contains($route, 'property.')])>Gérer les biens</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('admin.option.index') }}" @class(['nav-link', 'active' => str_contains($route, 'option.')])>Gérer les options</a>
                </li>
            </ul>

            <div class="ms-auto">
                @auth
                    <ul class="navbar">
                        <li class="nav-item">
                            <form method="post" action="{{ route('logout') }}">
                                @csrf
                                @method('delete')
                                <button style="color: white;" class="nav-link">Se déconnecter</button>
                            </form>
                        </li>
                    </ul>
                @endauth    
            </div>

        </div>
    </div>
    </nav>

    <div class="container mt-5">

        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif 

        @yield('content')
    </div> 
</body>
</html>