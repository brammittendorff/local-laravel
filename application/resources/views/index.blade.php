@extends('main')

@section('title', 'Home')

@section('content')
    @parent
    <form class="form-signin" action="{{ route('home') }}">
        @csrf

        <div class="form-label-group">
            <input type="text" id="inputFirstname" class="form-control" placeholder="Voornaam" required autofocus>
            <label for="inputFirstname">Voornaam</label>
        </div>

        <div class="form-label-group">
            <input type="text" id="inputSurename" class="form-control" placeholder="Achternaam" required>
            <label for="inputSurename">Achternaam</label>
        </div>
        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Login</button>
      </form>
    </div>
@endsection
