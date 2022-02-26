<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ProdeEscalon :: Bienvenida</title>
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
</head>

<body style="font-family: 'Quicksand', sans-serif;  background: #002153;">

    <div class="container pt-5 mt-5">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-3 mx-auto" style="    width: 12rem;">
                    <img src="../../img/logoprodeescalon.png" class="img-fluid" alt="">

                </div>
            </div>
        <h1 class="text-center text-white">¿Qué modalidad de juego queres?</h1>
        @foreach ($jugador as $jugador)
            <form action="jugador/{{ $jugador->id }}" method="POST">
                @method('put')
                @csrf
        @endforeach
        <div class="row" style="display: flex;">
            <div class="col-sm-6" style="width: 50%">
                <div class="card mx-auto">
                    <img src="{{ asset('img/1.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="text-uppercase text-center" style="color:#006778">$500,00</h4>
                        <div class="form-check form-switch p-0">
                                    <input class="form-check-input" name="porfecha" style="margin-left: 40%;" type="checkbox"
                                        id="flexSwitchCheckChecked">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" style="width: 50%"> 
                <div class="card mx-auto">
                    <img src="{{ asset('img/2.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="text-uppercase text-center" style="color:#006778">$250,00</h4>
                        <div class="form-check form-switch p-0">
                                    <input class="form-check-input" name="porronda" style="margin-left: 40%;" type="checkbox"
                                        id="flexSwitchCheckChecked">
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <p style="color:white;"><small>podes elegir una o las dos</small></p>

        <div class="row">
            <div class="col-sm-5 mx-auto text-center mt-5 mb-5">
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Pagar</button>
                  </div>
            </div>
        </div>
        </form>

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
