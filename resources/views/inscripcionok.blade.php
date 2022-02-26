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

        <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/c26c8bd214.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.min.js"
        integrity="sha512-VCHVc5miKoln972iJPvkQrUYYq7XpxXzvqNfiul1H4aZDwGBGC0lq373KNleaB2LpnC2a/iNfE5zoRYmB4TRDQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body style="font-family: 'Arvo', serif;">
    <div class="container pt-5 mt-5">
    <div class="row mt-5">
        <div class="col-sm-8 mx-auto">
            <div class="card" style="border:none;"> 
                <div class="card-body text-center text-success">
                    <h1 ><i class="fas fa-check"></i></h1>
                    @foreach ($jugador as $jugador)
                    <h2>{{$jugador->nombre }} {{$jugador->apellido }} te has insrcipto Correctamente!</h2>
                    <br>
                    <h1 class="text-center"> ${{ $total }}.00 </h1>
                    <p>Total Inscripcion</p>
                    <h6 class="text-secondary">Solo falta cancelar la inscripcion y descargar la aplicación:</h6>
                    <br>
                    <h6 class="text-secondary">En este boton te damos la opciones!</h6>
                    <br>
                    <a href="https://api.whatsapp.com/send?phone=54926125181288&text=Hola, me inscribi en la modalidad {{$inscripcion}} al prode. Quiero pagar!" class="btn btn-success mx-auto" style="border-radius: 50px;">Pagar</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>

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
