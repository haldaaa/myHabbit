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
    <p> Page Commerciauix </p>
    <a href="{{ route('generateCommerciauxPage') }}">Générer des commerciaux ici</a>

    @if($commerciaux->isNotEmpty())
    <table class="table table-striped">
        <form action="{{ route('commerciaux.destroy.all') }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-warning" onclick="return confirm('Êtes-vous sûr de vouloir supprimer tous les commerciaux ?');">Supprimer Tous les commerciaux</button>
        </form>
        <thead class="thead-light">
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Age</th>
                <th scope="col">Sexe</th>
                <th scope="col">Pays</th>
                <th scope="col">Ville</th>
                <th scope="col">Nombre de Commandes</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($commerciaux as $commercial)
                <tr>
                    <td>{{ $commercial->nomCommercial }}</td>
                    <td>{{ $commercial->ageCommercial }}</td>
                    <td>{{ $commercial->sexeCommercial }}</td>
                    <td>{{ $commercial->paysCommercial }}</td>
                    <td>{{ $commercial->villeCommercial }}</td>
                    <td>{{ $commercial->nombreCommande }}</td>
                    <td>
                        <!-- Formulaire de suppression -->
                        <form action="{{ route('commerciaux.destroy', $commercial->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce commercial ?');">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>Aucun commercial à afficher.</p>
@endif


</div>


@endsection
