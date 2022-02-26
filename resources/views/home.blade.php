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
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/c26c8bd214.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.min.js"
        integrity="sha512-VCHVc5miKoln972iJPvkQrUYYq7XpxXzvqNfiul1H4aZDwGBGC0lq373KNleaB2LpnC2a/iNfE5zoRYmB4TRDQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>


<body style="font-family: 'Quicksand', sans-serif; background: #002153;">
     
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-3 mx-auto" style="    width: 12rem;">
                    <img src="../../img/logoprodeescalon.png" class="img-fluid" alt="">

                </div>
            </div>

        <h1 class="text-center text-white">Inscricpción:</h1>
        <form  action="/jugador" method="POST">
            @csrf
        <div class="row">
            <div class="col-sm-5 mx-auto mt-4">
                <input type="text" class="form-control" name="nombre" placeholder="Nombre">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5 mx-auto mt-4">
                <input type="text" class="form-control" name="apellido" placeholder="Apellido">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5 mx-auto mt-4">
                <input type="number" class="form-control" name="celular" placeholder="Celular">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5 mx-auto mt-4">
                <input type="email" class="form-control" name="email" placeholder="E-mail">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-sm-3 mx-auto">
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Inscribirme</button>
                  </div>
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
