<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="{{asset('./app.css')}}" />

        <title>Laravel</title>
    </head>

    <body class="antialiased">

            <div class="container c-1">
    <nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"> <img src="{{asset('./images/logo.svg')}}" /> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Company</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Pages</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Portofolio</a>
        </li>
        <li class="nav-item">
          <button class="btn btn1 btn-primary">Join</button>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="row r1">
    <div class="col-6">
        <h1>Turn Your Ideas into a <span>Success.</span> </h1>
        <p>Front's feature-rich designed demo pages help you create the best possible product.</p>
        <button class="btn btn-primary">Get Started</button>
        <a href="#">Learn More > </a>
    </div>
    <div class="col-6 r1-2">

    </div>

</div>

<div class="d-2">
    <h2>Learn to develop sites with components<br/> and design systems</h2>
    <p class="learn"><i class="bi bi-check-lg"></i>Asynchronous collaboration <i class="bi bi-check-lg"></i>Updates and announcements <i class="bi bi-check-lg"></i>Training and team building </p>
    <div class="row">
        <div class="col-4">
            <div class="card">
                <img src="{{asset('./images/cimg1.jpg')}}" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Front App </h5>
                  <label>Front App is an easier way to search on Android.</label>
                  <p class="card-text">> Advanced Analytic<br/> > Digital Marketing<br/> > Orginization  </p>
                  <hr/>
                  <a href="#">Learn More > </a>
                </div>
              </div>
        </div>
        <div class="col-4">
            <div class="card">
                <img src="{{asset('./images/cimg2.jpg')}}" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Front Chat </h5>
                  <label>Front Chat is a new way to communicate with your team.</label>
                  <p class="card-text">> Cost Transformation<br/> > Customer Experience<br/> > Mergers and Acquisitions  </p>
                  <hr/>
                  <a href="#">Learn More > </a>
                </div>
              </div>
        </div>
        <div class="col-4">
            <div class="card">
                <img src="{{asset('./images/cimg3.jpg')}}" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Front Calendar </h5>
                  <label>Discover an easier way to manage contacts, sales and grow lasting relationships.</label>
                  <p class="card-text">> Enterprise Technology<br/> > Private Equity<br/> > Sustainability  </p>
                  <hr/>
                  <a href="#">Learn More > </a>
                </div>
              </div>
        </div>
    </div>
</div>



</div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>
