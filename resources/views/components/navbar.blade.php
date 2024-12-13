<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container ">
        <a class="navbar-brand" href="{{ route('homepage') }}"> <img src="/images/Riccardo Palazzolo1.png" width="240px"
                class="m-3 img-fluid" alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mx-3">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('patologie') }}">Patologie</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('fisioterapia') }}" tabindex="-1"
                        aria-disabled="true">Fisioterapia</a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contatti') }}" tabindex="-1" aria-disabled="true">Contatti</a>
                </li>
            </ul>
        </div>
        <div>
            <a href="{{ route('contatti') }}" class="button-79 ">Prenota un visita di controllo</a>

        </div>
    </div>
    </div>
</nav>
