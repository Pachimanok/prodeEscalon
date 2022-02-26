<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ProdeEscalon :: Principal</title>
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/c26c8bd214.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.min.js"
        integrity="sha512-VCHVc5miKoln972iJPvkQrUYYq7XpxXzvqNfiul1H4aZDwGBGC0lq373KNleaB2LpnC2a/iNfE5zoRYmB4TRDQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body style="font-family: 'Quicksand', sans-serif;  background: #002153;">
    <div class="container">
        @foreach ($jugador as $jugador)
        <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            <i class="fa fa-bars p-4" style="font-size: x-large;color:#0c0a81"></i>
        </a>
        <div class="card text-center" style="border:none;">
            <h4 style="
            font-weight: 600;
            color: #173781;
        ">Partidos:</h4>
         @foreach ($partidos as $partido)
         <div class="d-flex" style="">
            <div class="col-sm-10 p-2 text-secondary"  style="width: 100%"> 
                <img src="img/bandera/{{$partido->banderal}}" 
                class="img-fluid" style="max-width: 15%; padding-right: 0.5rem;" alt=""> {{$partido->local}} | {{$partido->goles_local}} - {{$partido->goles_visita}} | {{$partido->visitante}} <img src="img/bandera/{{$partido->banderav}}" class="img-fluid ml-2" style="max-width: 15%; padding-left: 0.5rem;" alt="">
                <p style="margin-top: -0.5rem;"><small style="font-size: small">{{$partido->fecha}} - {{$partido->hora}}</small></p>
                <hr>
            </div>
        </div>
         @endforeach
       
        <div class="offcanvas offcanvas-start" tabindex="-1" style="max-width: 60%; " id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">

            <button type="button" class="btn-close text-reset" style="color:#0c0a81 !important;"
                data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="row">
                <div class="col-sm-1 mx-auto">
                    <div class="text-center">
                        <img src="assets/img/avatar.png" class="rounded img-fluid"
                            style="border-radius: 50% !important;    height: 4rem;">
                        <h6 class="mb-0" style="color:#0c0a81;margin-top: 4px;"> {{$jugador->nombre}} {{$jugador->apellido}}</h6>
                        <p class="text-secondary" style="font-size: small; ">{{$jugador->puntos}} pts.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="list-group mt-5">
                    <a href="#" class="list-group-item list-group-item-action list-group-item-light"
                        style="border:none; display: flex; text-align: center;">
                        <i class="fas fa-home" style="margin-right: 2rem;"></i>
                        <p>Home</p>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-light"
                        style="border:none; display: flex; text-align: center;">
                        <i class="fas fa-chart-area" style="margin-right: 2rem;"></i>
                        <p>Prediccion</p>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-light"
                        style="border:none; display: flex; text-align: center;">
                        <i class="fas fa-cloud-sun" style="margin-right: 2rem;"></i>
                        <p>Ranking Fecha</p>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-light"
                        style="border:none; display: flex; text-align: center;">
                        <i class="fas fa-cloud-sun" style="margin-right: 2rem;"></i>
                        <p>Ranking Ronda</p>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-light"
                        style="border:none; display: flex; text-align: center;">
                        <i class="far fa-chart-bar" style="margin-right: 2rem;"></i>
                        <p>Escalon</p>
                    </a>
                    <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="ni ni-user-run"></i>
            <span>Logout</span>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
    </div>
                </div>
            </div>
        </div>
        @endforeach

    {{-- scripts --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
</body>

</html>
