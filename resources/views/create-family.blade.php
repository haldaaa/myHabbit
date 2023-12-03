
@extends ('layout')

@section('contenu')


<div class="row">
  <div class="col-md-4">
      <form method="POST" action="/create-family">
        @csrf
          <div class="form-group row">
            <label class="col-4 col-form-label" for="taskName">Famille</label> 
              <div class="col-8">
                <input id="taskName" name="familleName" placeholder="Hygiene, Sport" type="text" class="form-control">
              </div>
          </div>

      
            <div class="form-group row">
              <label for="taskDescription" class="col-4 col-form-label">Description et objectifs</label> 
                <div class="col-8">
                  <textarea id="taskDescription" name="familleDesc" cols="40" rows="3" class="form-control" aria-describedby="taskDescriptionHelpBlock"></textarea> 
                  <span id="taskDescriptionHelpBlock" class="form-text text-muted">Se brosser au moins 5min</span>
                </div>
            </div>
      
              <div class="form-group row">
                <div class="offset-4 col-8">
                  <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>          
              </div>
          </form>
    </div>
  </div> <!-- Fin div row --> 


  <div class="row">
    <div class="col-md-6">
      @isset($family)

        @foreach($family as $myfamily)
          <p> Id : {{ $myfamily->id }} </p>  
          <h2>{{$myfamily->nom}}</h2>
          <p>{{$myfamily->familleDescription}}</p>

          @endforeach


      @endisset
  
      </div>
  </div>
    @endsection