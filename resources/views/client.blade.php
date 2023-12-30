@extends ('layout')



@section('contenu')

<div class="col-md-6">
    <p> @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    </p>
    <p> Page Clients </p>


@endsection
