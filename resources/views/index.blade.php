<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/estilosMenu.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="{{ asset('/css/estilos.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/perfil.css') }}" rel="stylesheet">
    <title>Smart Lock</title>
    <style>
        /* Estilos personalizados aquí */
    </style>
</head>

<body>
    @include('header')

    <div class="desbloqueo_conteiner">
        <h1>Abre tu cerradura con un click</h1>
        <div class="btn_desbloqueo_container d-flex justify-content-center align-items-center">
            <button id="rotate-button" class="z-40"><i class="bi bi-lock"></i></button>
        </div>    
    </div>

   
    <script>
        const rotateButton = document.getElementById("rotate-button");

        rotateButton.addEventListener("click", () => {
            rotateButton.style.animation = "rotate360 .7s linear";
            rotateButton.addEventListener("animationend", () => {
                rotateButton.style.animation = ""; // Eliminar la animación para que no se repita
            }, {
                once: true
            });
        });
    </script>
</body>

</html>
