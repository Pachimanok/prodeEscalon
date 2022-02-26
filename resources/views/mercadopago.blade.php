

<script>
    const mercadopago = require ('mercadopago');

  
});

</script>
@php

MercadoPago\SDK::setAccessToken('TEST-1782908899890379-092218-82bf271f7189f4eb1668ac84bc73f0ea-33894200');
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = 'Mi producto';
$item->quantity = 1;
$item->unit_price = 75.56;
$preference->items = array($item);
$preference->save();
@endphp


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
    <script src="https://sdk.mercadopago.com/js/v2"></script>
</head>

<body style="font-family: 'Arvo', serif;">
    
    <div class="container pt-5" style="margin-top: 8%;">
                  
        <script>
            // Agrega credenciales de SDK
              const mp = new MercadoPago('TEST-624bfaab-1ca5-4d31-853b-c3e09a2b1849', {
                    locale: 'es-AR'
              });
            
              // Inicializa el checkout
              mp.checkout({
                  preference: {
                      id: '1'
                  },
                  render: {
                        container: '.cho-container', // Indica dónde se mostrará el botón de pago
                        label: 'Pagar', // Cambia el texto del botón de pago (opcional)
                  }
            });
            </script>
            <div class="row">
                <div class="col-sm-2 mx-auto" style="text-align: center;">
                    <form action="index.php" method="POST">
                        <script src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
                            data-preference-id="1">
                        </script>
                    </form>

                </div>
            <br>
            <div class="col-sm-8 mx-auto">
                    <img src="../img/tarjetas.png" alt="" class="img-fluid">
                </div>


            </div>
        </div>

    </div>
    </div>
    </div>
    </div>
    <br>
 
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
 

</html>