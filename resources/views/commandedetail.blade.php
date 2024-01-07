@extends ('layout')


@section('contenu')



<div class="col-md-6">
    <p> Page Detail commande  </p>
  
    <p><strong>ID Commande :</strong> {{ $commande->id }}</p>
    <p><strong>Nom du Commercial :</strong> {{ $commande->commerciaux->nomCommercial }}</p> {{-- Assurez-vous que 'nom' est correct --}}
    <p><strong>Nom du Client :</strong> {{ $commande->clients->nomClient }}</p>

    <h1>Produits Commandés</h1>
    <ul>
        @foreach($commande->detailCommande as $detail)
            <li>{{ $detail->produits->nomProduit }}  -  Quantité : {{ $detail->quantite }} , Total : {{ $detail->sous_total }}€ ,  Prix unitaire : {{ $detail->prixProduit}}€ .</li> 
        
        @endforeach
    </ul>

</div>
@endsection
