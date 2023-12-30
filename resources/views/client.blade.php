@extends ('layout')



@section('contenu')

<div class="col-md-6">
    <p> @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }} </p>
        </div>
    @endif
</div>
    
<div class="col-md-6">
    <p> Page Clients </p>

    <a href="{{ route('generateClientPage') }}">Générer des clients ici</a>

    @if($clients->isNotEmpty())
    <table class="table table-striped">
        <thead class="thread-light">
            <tr>
                <th scope="col">Nom</th>
                <th>Age</th>
                <th>Sexe</th>
                <th>Pays</th>
                <th>Ville</th>
                <!-- Ajoutez d'autres colonnes au besoin -->
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
                <tr>
                    <td>{{ $client->nomClient }}</td>
                    <td>{{ $client->ageClient }}</td>
                    <td>{{ $client->sexeClient }}</td>
                    <td>{{ $client->paysClient }}</td>
                    <td>{{ $client->villeClient }}</td>
                    <!-- Autres données du client -->
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>Aucun client à afficher.</p>
@endif
</div>


@endsection
