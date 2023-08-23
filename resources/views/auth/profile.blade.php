@extends('layouts.app') <!-- Assurez-vous d'avoir un layout principal -->

@section('content')
<div class="profile-container">
    <div class="profile-header">
        <div>
            <img src="/path/to/user/avatar.jpg" alt="User Avatar" class="profile-avatar">
            <h2>{{ Auth::user()->name ?? 'Nom non disponible' }}</h2>
        </div>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="logout-button">Déconnexion</button>
        </form>
    </div>


    <div class="profile-section">
        <h3>Mes annonces artisanales</h3>

        @forelse($artisanale as $artisanales)
        <ul>
            <li>
                <strong>{{ $artisanales->nom ?? 'Nom non disponible' }}</strong> - {{ $artisanales->description ?? 'Description non disponible' }}
            </li>
        </ul>
        @empty
        <p>Vous n'avez pas encore publié d'annonces artisanales.</p>
        @endforelse
    </div>

    <div class="profile-section">
        <h3>Mes offres d'emploi</h3>

        @forelse($offreemploi as $offreemploie)
        <ul>
            <li>
                <strong>{{ $offreemploie->titre ?? 'Titre non disponible' }}</strong> - {{ $offreemploie->description ?? 'Description non disponible' }}
            </li>
        </ul>
        @empty
        <p>Vous n'avez pas encore publié d'offres d'emploi.</p>
        @endforelse
    </div>
</div>
@endsection
