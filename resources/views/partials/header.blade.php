<header>

    {{-- sezione sinistra con menu  --}}

    <ul class="d-flex gap-2">

        <li>

            <a href="{{ route("donna") }}">
                Donna
            </a>

        </li>

        <li>

            <a href="{{ route("uomo") }}">
                Uomo
            </a>

        </li>

        <li>

            <a href="{{ route("bambini") }}">
                Bambini
            </a>

        </li>

    </ul>


    {{-- sezione centrale, logo --}}

    <div class="text-center">

        <a href="{{ route("home") }}">

            <img class="logo" src="{{ Vite::asset("resources/img/boolean-logo.png")}}" alt="loogo boolean">

        </a>

    </div>

    {{-- sezione icone --}}

    <div class="d-flex gap-2">

        <div class="icon-container">

            {{-- icona user --}}

            <a href="" id="userIcon" class="icon">

                <i class="fa fa-user"></i>

            </a>

            {{-- menu a tendina per icona user --}}

            <div class="dropdown-content">

                <a href="">Profilo</a>
                <a href="">Impostazioni</a>
                <a href="">Esci</a>
             
            </div>

        </div>

        {{-- icona favorites --}}

        <div class="icon-container">

            <a href="" id="favoritesIcon" class="icon">

                <i class="fa fa-heart"></i>

            </a>

            {{-- menu a tendina preferiti --}}

            <div class="dropdown-content">

                <a href="">Preferiti</a>

               
            </div>

        </div>

        {{-- icona carrello --}}

        <div class="icon-container">

            <a href="">

                <i class="fa fa-shopping-cart"></i>

            </a>

            {{-- menu a tendina per carrello --}}
            <div class="dropdown-content">

                <a href="">Vai al carrello</a>
                <a href="">Acquista subito</a>
                
            </div>

        </div>

    </div>
 
</header>

