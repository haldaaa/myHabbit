@extends ('layout')



@section('contenu')

<!-- Debut div formulaire tache -->

<div class="col-md-6"> 
  <form method="POST" action="/create-task">
  @csrf
    <div class="form-group row">
      <label class="col-4 col-form-label" for="taskName">Nom de la tâche</label> 
        <div class="col-8">
          <input id="taskName" name="taskName" placeholder="Se brosser les dents" type="text" class="form-control">
        </div>
    </div>

      <div class="form-group row">
        <label for="familleName" class="col-4 col-form-label">Famille / Activité</label> 
        <div class="col-8">
          <select id="familleName" name="familleName" class="custom-select" aria-describedby="familleNameHelpBlock">
            <option value="rabbit">Rabbit</option>
            <option value="duck">Duck</option>
            <option value="fish">Fish</option>
          </select> 
          <span id="familleNameHelpBlock" class="form-text text-muted">Hygiène, sport, formation...</span>
        </div>
      </div>

      <div class="form-group row">
        <label for="taskWhen" class="col-4 col-form-label">Périodicité</label> 
          <div class="col-8">
            <select id="taskWhen" name="periodicite" class="custom-select">
              <option value="Jour">Jour</option>
              <option value="Semaine">Semaine</option>
              <option value="Mois">Mois</option>
            </select>
          </div>
        </div>

      <div class="form-group row">
        <label for="taskDescription" class="col-4 col-form-label">Description de la tache</label> 
          <div class="col-8">
            <textarea id="taskDescription" name="taskDescription" cols="40" rows="3" class="form-control" aria-describedby="taskDescriptionHelpBlock"></textarea> 
            <span id="taskDescriptionHelpBlock" class="form-text text-muted">Se brosser au moins 5min</span>
          </div>
      </div>

        <div class="form-group row">
          <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
          </div>          
        </div>
    </form> <!-- Fin formulaire task -->


    @isset($nombre_task)
      <p> Nombre totales de taches : {{ $nombre_task }} </p>

      @foreach($tasks as $task)
        <h2>{{$task->taskName}}</h2>
        <p> Id  : {{$task->id}}
        <p> Famille/Activité: {{$task->familleName}} </p>
        <p> Périodicité: {{$task->taskWhen}} </p>
        <p> Description: {{$task->taskDescription}} </p>
    

        <form action="{{ route('task.destroy', $task->id) }}" method="post">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger btn-sm">Delete</button>
        </form>


        <hr />
      @endforeach

    @endisset
  </div> <!-- Fin Div formulaire tache colmd6 -->
</br> </br> </br> </br>
  
  




     


@endsection
