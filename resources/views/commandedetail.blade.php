@extends ('layout')


@section('contenu')



<div class="col-md-6">
    <p> Page Detail commande  </p>
  
    <p><strong>ID Commande :</strong> {{ $commande->id }}</p>
    <p><strong>Nom du Commercial :</strong> {{ $commande->commerciaux->nomCommercial }}</p> {{-- Assurez-vous que 'nom' est correct --}}
    <p><strong>Nom du Client :</strong> {{ $commande->clients->nomClient }}</p>
    <p> <strong> Saison : </strong> 
        
        @if($commande->detailcommande->isNotEmpty())
        {{ $commande->detailcommande->first()->saison  }} </p>
        @endif
    
    <ul>
        @foreach($commande->detailCommande as $detail)
            <li> Produit : " {{ $detail->produits->nomProduit }}  "   ------>     : {{ $detail->quantite }} unités. </li>  
            <li> Total : {{ $detail->sous_total }}€ ,  Prix unitaire : {{ $detail->prixProduit}}€ .</li>
    </br>
        @endforeach
    </ul>

</div>
@endsection
