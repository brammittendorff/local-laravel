@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @foreach ($questions as $question)
                            <h5 class="card-title">{{ $question->question }}</h5>
                            <p class="card-text">{{ $question->description }}</p>

                            <form method="POST" action="{{ route('login') }}">
                                @foreach ($question->answers as $key => $answer)
                                <div class="form-group row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="answer" id="radio{{ $key }}" value="option{{ $key }}">
                                        <label class="form-check-label" for="radio{{ $key }}">
                                            {{ $answer->answer }}
                                        </label>
                                    </div>
                                </div>
                                @endforeach
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Opslaan') }}
                                </button>
                            </form>
                        @endforeach

                        <hr>

                        {{ $questions->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
