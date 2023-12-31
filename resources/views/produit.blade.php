@extends ('layout')



@section('contenu')

<div class="col-md-6">
    <p> @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }} </p>
        </div>
    @endif
    <p> Page Produit </p>

    <a href="{{ route('generateProduitPage') }}">Générer des produits ici</a>
</div>
    


@endsection
