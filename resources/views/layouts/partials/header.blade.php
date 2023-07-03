
<header class="main-header">
        
    <div class="container container--flex">
        <div class="logo-container column column--50">
            <h1 class="logo">Gestión Académica Unad</h1>
        </div>
        <div class="buscar">
            <input id="search" type="text" placeholder="Buscar" required>
            <div class="btn">
                <i class="icon-buscar"></i>
            </div>
        </div>
        <div class="main-header__contactInfo column column--50">
            <p class="main-header__registro">
                <a href="{{route('registro')}}">Registrate</a>
            </p>
            <p class="main-header__ingreso">
               <a href="{{route('ingreso')}}">Ingresa</a>
            </p>
        </div>
    </div>
</header> 

<nav class="main-nav">
    <div class="container container--flex">
        <span class="icon-menu" id="btnmenu"></span>
        <ul class="menu" id="menu">
            <li class="menu__item"><a href="{{route('home')}}" class="menu__link">Inicio</a></li>
            <li class="menu__item"><a href="{{route('quienes')}}" class="menu__link">Quienes Somos</a></li>
            <li class="menu__item"><a href="{{route('noticias')}}" class="menu__link">Noticias</a></li>
            <li class="menu__item"><a href="{{route('programas')}}" class="menu__link">Programas y Cursos</a></li>
            <li class="menu__item"><a href="{{route('centros')}}" class="menu__link">Zonas y Centros</a></li>
        </ul>
        <div class="social-icon">
            <a href="" class="social-icon__link"><span class="icon-facebook"></span></a>
            <a href="" class="social-icon__link"><span class="icon-twitter"></span></a>
        </div>
    </div>
</nav>