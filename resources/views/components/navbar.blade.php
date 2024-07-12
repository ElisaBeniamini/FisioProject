<!-- Spinner Start ( caricamento pagina)
<div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
 Spinner End -->
<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
        <a href="{{ route('homepage') }}" class="navbar-brand p-0">
            <img src="/images/Riccardo Palazzolo1.png" width="230px" class="m-3 img-fluid" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ route('patologie') }}" class="nav-item nav-link active">Patologie</a>
                <a href="{{ route('fisioterapia') }}" class="nav-item nav-link">Fisioterapia</a>
                <a href="{{ route('domicilio') }}" class="nav-item nav-link">Domicilio</a>
                <a href="{{ route('contatti') }}" class="nav-item nav-link">Contatti</a>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar & Hero End -->
