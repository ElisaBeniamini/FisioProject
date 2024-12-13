<x-layout>
    <div class="container d-flex mt-3">
        <div class="row  header-container justify-content-center">
            <div class="col-6 header-words">
                <h1>Il tuo benessere <br> è la mia priorità</h1>
                <a href="{{ route('contatti') }}" class="button-79 ">Contatti</a>
            </div>
            <div class="col-6">
                <img class="img-fluid" src="\images\front_back_img.png" alt="">
                <button class="body-zone" style="top: 30%; left: 85%;"
                    data-description="Problemi comuni nella zona schiena includono dolori e patologie specifiche.">
                    <a class="header-ancora-corpo" href="{{ route('patologie') }}">Schiena</a>
                </button>
                <button class="body-zone" style="top: 15%; left: 80%;"
                    data-description="Problemi comuni nella zona spalle includono dolori e patologie specifiche.">Spalle</button>
                <button class="body-zone" style="top: 65%; left: 55%;"
                    data-description="Problemi comuni nella zona ginocchia includono dolori e patologie specifiche.">Ginocchia</button>
                <button class="body-zone" style="top: 45%; left: 52%;"
                    data-description="Problemi comuni nella zona polsi includono dolori e patologie specifiche.">Polsi</button>
            </div>
        </div>
    </div>

    <section class="services py-5">
        <div class="container">
            <h2 class="text-center mb-4">Servizi Offerti</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="\images\imghome.jpg" class="card-img-top" alt="Valutazione e Diagnosi">
                        <div class="card-body">
                            <h3 class="card-title">Valutazione e Diagnosi</h3>
                            <p class="card-text">Analisi approfondita delle condizioni fisiche per identificare le
                                cause
                                dei problemi di mobilità.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="\images\imghome.jpg" class="card-img-top" alt="Terapia Manuale">
                        <div class="card-body">
                            <h3 class="card-title">Terapia Manuale</h3>
                            <p class="card-text">Tecniche di manipolazione per alleviare il dolore e migliorare la
                                funzionalità adsfvsdfsdfs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="\images\imghome.jpg" class="card-img-top" alt="Riabilitazione Post-Operatoria">
                        <div class="card-body">
                            <h3 class="card-title">Riabilitazione Post-Operatoria</h3>
                            <p class="card-text">Programmi di recupero su misura per chi ha subito interventi
                                chirurgici.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Contattami</h2>
            <p class="text-center">Per maggiori informazioni o per prenotare una consulenza, visita la sezione <a
                    href="{{ route('contatti') }}">Contatti</a> del sito.</p>
        </div>
    </section>

</x-layout>
