<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
  </head>


  <body>
  <nav class="navbar navbar-expand-lg bg-primary  fixed-top  ">
  <div class="container">
    <a class="navbar-brand h1 " href="#">AGENG TECH STORE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>


      <div class="offcanvas-body">
      
        <ul class="navbar-nav justify-content-center flex-grow-1 p-0">
        <form class="d-flex mt-0" role="search">
    
          <input class="form-control me-0" type="search" placeholder="Search" aria-label="Search">
          
          <button class="btn btn-outline-primary" type="submit">Search</button>
          </ul>
          
        </form>
      

          <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-right flex-grow-1 pe-3">

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">contact</a>
          </li>
          </ul>

          </ul>
        <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-cart3 h4 "></i></a>
          </li>
          </ul>
      </div>
    </div>
  </div>
</nav>

@yield('content')


<footer class= "bg-info-subtle mt-5 p-0">
<div class="d-flex justify-content-center"> 
<a class="m-3 fs-3 mb-0 text-primary" href="#"><i class="bi bi-instagram"></i></a>
<a class="m-3 fs-3 mb-0 text-primary" href="#"><i class="bi bi-twitter"></i></a>
<a class="m-3 fs-3 mb-0 text-primary" href="#"><i class="bi bi-youtube"></i></a>
<a class="m-3 fs-3 mb-0 text-primary" href="#"><i class="bi bi-whatsapp"></i></a>
</div>
<div class="d-flex justify-content-center">
<a class="m-3 nav-link fw lighter" href="#">Home</a>
<a class="m-3 nav-link fw lighter" href="#">Product</a>
<a class="m-3 nav-link fw lighter" href="#">Contact</a>
<a class="m-3 nav-link fw lighter" href="#">cart</a>
</div >

<p class="text-center">copyright &copy; 2024,design by.AGENG TECH_STORE</p>

</footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
  </body>
</html>