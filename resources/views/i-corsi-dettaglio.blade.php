<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hackademy 72</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
    <link rel="stylesheet" href="/css/style.css">

  </head>
  <body>


  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('homepage')}}">Hackademy 72</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('chi-siamo-studenti')}}">Gli studenti</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('i-corsi')}}">I nostri corsi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>



<div class="container fluid p-5 bg-secondary text-center">

    <div class="row justify-content-center">

        <div class="col-12">

            <h1 class="display-1">
                dettaglio corso
            </h1>
        </div>

    </div>

</div>



<div class="container my-5">
  <div class="row justify-content-center">

  

    <div class="col-12 col-md-3">

          <div class="card">
            <img src="https://picsum.photos/200/300" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$corso['nome']}} </h5>
                <p class="card-text">{{$corso['insegnante']}}</p>
                <p class="card-text">{{$corso['lezione']}}</p>
                <a href="{{route('i-corsi')}}" class="btn btn-primary">indietro</a>
            </div>
          </div>
        
    </div>

   

  </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  
    <script src="/js/script.js"></script>

</body>
</html>