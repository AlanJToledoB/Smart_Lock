<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu desplegable</title>
    <link rel="stylesheet" href="css/estilosMenu.css">
    
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="sidebar">
        <div class="logo-details">
                <img src="assets/img/logo_smartlock.png" class="logo_img" alt="">
                <span class="logo-name">Smart <span class="logo-name-blue">Lock</span></span>
        </div>
        <ul class="nav-links">
            <li>
                <div class="icon-links has-submenu">
                    <a href="{{ route('index') }}">
                        <i class='bx bx-grid-alt arrow'></i>
                        <span class="link-name">Home</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link-name" href="{{ route('index') }}">Home</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="icon-links has-submenu">
                    <a href="#">
                        <i class='bx bx-collection arrow'></i>
                        <span class="link-name">Informacion</span>
                    </a>
                    <i class='bx bx-chevron-down arrow'></i>
                    <ul class="sub-menu blank">
                        <li><a class="link-name" href="{{ route('entradaySalida') }}">Entrada y Salida</a></li>
                        <li><a class="link-name" href="#">Rfids Dueños</a></li>
                        <li><a href="#">Estado Cerradura</a></li>
                    </ul>
                </div>
            </li>
            <!-- Sección Perfil -->
            <li>
                <div class="icon-links has-submenu">
                    <a href="#">
                        <i class='bx bx-user'></i>
                        <span class="link-name">Perfil</span>
                        <i class='bx bx-chevron-down arrow'></i>
                    </a>
                    <ul class="sub-menu">
                        @guest
                        <li><a href="{{ route('login') }}" class="link-name">Iniciar Sesión</a></li>
                        <li><a href="{{ route('register') }}" class="link-name">Crear Cuenta</a></li>
                        @else
                        <li><a href="{{ route('dashboard') }}" class="link-name">Panel De Administracion</a></li>
                        <li>
                            <a href="{{ route('profile.show', ['user' => Auth::user()->id]) }}" class="link-name">
                                @if (Auth::check())
                                    Mi Perfil
                                @else
                                    Mi Cuenta
                                @endif
                            </a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="link-name" style="background: none; border: none; cursor: pointer; color: #your-color-here;">Cerrar Sesión</button>
                            </form>
                        </li>
                        @endguest
                    </ul>
                </div>
            </li>
        </ul>
        <div class="profile-details">
            <img src="img/perfil2.jpg" alt="profile">
            <div class="name-job">
                @auth
                    <div class="profile-name">{{ auth()->user()->name }}</div>
                    <div class="job">{{ auth()->user()->role }}</div>
                @endauth
            </div>
            <div class="logout">
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" style="background: none; border: none; cursor: pointer;">
                            <i class='bx bx-log-out'></i>
                        </button>
                    </form>
                @endauth
            </div>
        </div>
        
        
    </div>

    <section class="home-selection">
        <div class="home-content">
            <i class='bx bx-menu'></i>
        </div>
    </section>

    <script>
        let arrows = document.querySelectorAll(".arrow");

        for (let i = 0; i < arrows.length; i++) {
            arrows[i].addEventListener("click", (e) => {
                let arrowParent = e.target.parentElement.parentElement;
                arrowParent.classList.toggle("showMenu");
            });
        }

        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");

        sidebarBtn.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        });
    </script>
    <script src="js/app.js"></script>
</body>
</html>
