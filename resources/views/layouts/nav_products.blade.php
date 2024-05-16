<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Add your custom styles here */
    </style>
</head>
<body>

<!-- Navigation-->
<nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
       
            <a class="nav-link active" aria-current="page" href="/products">
                <button class="btn btn-info text-bold">Home</button>
            </a>
    
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                 <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/cat/create">
                        <button class="btn btn-info text-bold">Add Category</button>
                    </a>
                </li> 
               
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/products/create">
                        <button class="btn btn-info text-bold">Add Product</button>
                    </a>
                </li>


                <li class="nav-item mx-5 px-5">
                    <a class="nav-link active" aria-current="page" href="/dashboard">
                        <button class="btn bg-white text-dark text-bold">Back to Dashbord</button>
                    </a>
                </li> 
            </ul>
            
            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}" class="d-flex">
                @csrf
                <button class="btn btn-danger text-bold" type="submit">Log Out</button>
            </form>
        </div>
    </div>
</nav>

@if($message=Session::get('success'))
<div class="alert alert-success alert-block">
  <strong>{{$message}}</strong>
</div>


@endif
@yield('main')


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>