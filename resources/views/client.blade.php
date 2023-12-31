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
        <form action="{{ route('clients.destroy.all') }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-warning" onclick="return confirm('Êtes-vous sûr de vouloir supprimer tous les clients ?');">Supprimer Tous les Clients</button>
        </form>
        <thead class="thead-light">
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Age</th>
                <th scope="col">Sexe</th>
                <th scope="col">Pays</th>
                <th scope="col">Ville</th>
                <th scope="col">Actions</th> <!-- Colonne pour les actions -->
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
                    <td>
                        <!-- Formulaire de suppression -->
                        <form action="{{ route('client.destroy', $client->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce client ?');">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>Aucun client à afficher.</p>
@endif

</div>


@endsection
