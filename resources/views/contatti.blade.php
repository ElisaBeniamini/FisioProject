<x-layout>
    <div class="container py-5">
        <h1 class="text-center mb-5">Contatti</h1>

        <!-- Contatti del Fisioterapista -->
        <div class="row mb-5">
            <div class="col-md-6">
                <h2>Contatti del Fisioterapista</h2>
                <p><strong>Nome:</strong> Pinco Pallino</p>
                <p><strong>Telefono:</strong> +39 123 456 7890</p>
                <p><strong>Email:</strong> fisioterapista@example.com</p>
                <p><strong>Indirizzo:</strong> Via dei puffi, Italia</p>
            </div>
            <div class="col-md-6">
                <img src="https://via.placeholder.com/600x400" class="img-fluid" alt="Fisioterapista">
            </div>
        </div>

        <!-- Form di Invio Richiesta di Consulenza -->
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2 class="text-center mb-4">Richiesta di Consulenza</h2>
                <form>
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" id="name" placeholder="Inserisci il tuo nome"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Inserisci la tua email"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Telefono</label>
                        <input type="tel" class="form-control" id="phone"
                            placeholder="Inserisci il tuo numero di telefono" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Descrizione Patologia</label>
                        <textarea class="form-control" id="description" rows="5" placeholder="Descrivi la tua patologia" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Invia Richiesta</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
