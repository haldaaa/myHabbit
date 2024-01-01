@extends ('layout')



@section('contenu')

<div class="col-md-6">
    <p> @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }} </p>
        </div>
    @endif
    <p> Page Produit </p>
    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

@if($produits->isNotEmpty())
    <table class="table table-striped">
        <thead class="thead-light">
            <tr>
                <th scope="col">Nom du Produit</th>
                <th scope="col">Prix</th>
                <th scope="col">Total Vendu</th>
                <th scope="col">Actions</th> <!-- Colonne pour les actions -->
            </tr>
        </thead>
        <tbody>
            @foreach($produits as $produit)
                <tr>
                    <td>{{ $produit->nomProduit }}</td>
                    <td>{{ $produit->prix }}</td>
                    <td>{{ $produit->totalVendu }}</td>
                    <td>
                        <!-- Formulaire de suppression -->
                        <form action="{{ route('produit.destroy', $produit->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?');">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>Aucun produit à afficher.</p>
@endif



    <a href="{{ route('generateProduitPage') }}">Générer des produits ici</a>
</div>
    


@endsection
