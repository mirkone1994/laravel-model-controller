@extends('layouts.main')

@section('title', 'Movies | Movies List')

@section('content')
    <section id="moviesv">
        <div class="container">
            @forelse ($movies as $movie)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
                  <p class="card-text">{{ $movie->nationality }}</p>
                  <p>{{ $movie->date }}</p>
                  <p>{{ $movie->vote }}</p>
                </div>
              </div>
            @empty
                <h2>Nessun Film</h2>
            @endforelse
        </div>
    </section>
@endsection