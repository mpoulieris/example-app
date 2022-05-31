<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='/css/app.css'>
</head>
<body>
  @include('includes.nav')
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{route('home')}}">LARAVEL</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('posts')}}">Home</a>
                  </li>
                  <a class="navbar-brand" href="{{route('newpost')}}">newpost</a>
              <button class="navbar-toggler" type="button"  aria-current="page" ></button>
                </ul>
                <form class="d-flex" method="GET" action="{{route('search')}}">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="q">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>


    @yield('content') 
         <!-- Footer -->
         <footer class="text-center text-lg-start bg-light text-muted">  
            <!-- Copyright -->
            
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
              © 2022 Copyright:
              <a class="text-reset fw-bold" href="MPOULIERIS">mpoulieris</a>
            </div>
            <script src="/js/app.js/"></script>
          </footer>

        </body>
        </html>