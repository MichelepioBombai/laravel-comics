@extends('layouts.app')

@section('title', 'comic-books')

@section('content')
<div class="bg-dark">
    <section class="container">
        <div class="row">
            @forelse($comics as $comic)
            <div class="col-3">
                <div class="card my-4 bg-dark text-white" style="width: 18rem; height: 350px; border: none;">
                    <img src=" https://picsum.photos/400/350" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $comic['title'] }}</h5>
                    </div>
                </div>

            </div>
            @empty
            <div class="col-12">
                <h2>nessun libro nella lista</h2>
            </div>
            @endforelse
        </div>
    </section>
</div>
@endsection