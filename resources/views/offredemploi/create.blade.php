@extends('layouts.app')

@section('content')

<div class="container">
    @if(session('success'))
    <div id="successMessage" class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <h2>Créer une nouvelle offre d'emploi</h2>

    <form action="{{route('offre_emplois.store')}}" method="post">
        @csrf

        <div class="form-group">
            <label for="titre">Titre</label>
            <input type="text" class="form-control" id="titre" name="titre" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="6" required></textarea>
        </div>

        <div class="form-group">
            <label for="lieu">Lieu</label>
            <input type="text" class="form-control" id="lieu" name="lieu" required>
        </div>

        <div class="form-group">
            <label for="type_contrat">Type de contrat</label>
            <input type="text" class="form-control" id="type_contrat" name="type_contrat">
        </div>

        <div class="form-group">
            <label for="salaire">Salaire</label>
            <input type="text" class="form-control" id="salaire" name="salaire" required>
        </div>

        <div class="form-group">
            <label for="date_debut">Date de début</label>
            <input type="date" class="form-control" id="date_debut" name="date_debut" required>
        </div>

        <div class="form-group">
            <label for="date_fin">Date de fin</label>
            <input type="date" class="form-control" id="date_fin" name="date_fin" required>
        </div>

        <div class="form-group">
            <label for="acteur_id">Qui offre l'emploie</label>
            <select class="form-control" id="acteur_id" name="acteur_id" required>
                @foreach($acteurs as $acteur)
                <option value="{{ $acteur->id }}">{{ $acteur->nom }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Créer</button>
    </form>
</div>
<script>
    // Si le message de succès existe, le faire disparaître après 3 secondes
    if (document.getElementById('successMessage')) {
        setTimeout(function() {
            document.getElementById('successMessage').style.display = 'none';
        }, 3000);
    }
</script>
@endsection
