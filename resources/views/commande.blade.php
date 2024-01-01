@extends ('layout')



@section('contenu')

<div class="col-md-6">
  <p> Page Commande </p>
  <a href="{{ route('generate.random.commande') }}">Générer des commandes ici</a>
  <p> @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }} </p>
    </div>
    @endif



 </div>
   
    <div class="col-md-7">

        @if($commandes->isNotEmpty())
        <table class="table table-striped">
            <thead class="thead-light">
                <tr>
                    <th scope="col">ID Commande</th>
                    <th scope="col">Nom du Commercial</th>
                    <th scope="col">Nom du Client</th>
                    <th scope="col">Détails</th>
                </tr>
            </thead>
            <tbody>
                @foreach($commandes as $commande)
                    <tr>
                        <td>{{ $commande->id }}</td>
                        <td>{{ $commande->commerciaux->nomCommercial }}</td> <!-- Assurez-vous que 'nom' est le champ correct -->
                        <td>{{ $commande->clients->nomClient }}</td>   <!-- Assurez-vous que 'nom' est le champ correct -->
                        <td>
                            <a href="{{ route('commande.details', $commande->id) }}">Voir Détails</a>
                        </td>
                        <td>
                            <!-- Formulaire de suppression -->
                            <form action="{{ route('commande.destroy', $commande->id) }}" method="POST">
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
        <p>Aucune commande à afficher.</p>
    @endif
    



    </div>



@endsection
