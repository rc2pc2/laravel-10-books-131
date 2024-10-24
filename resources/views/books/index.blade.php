@extends("layouts.app")

@section("page-title", "Books index")

{{--
"id" => 3
"title" => "Il Nome della Rosa"
"author" => "Umberto Eco"
"publication_year" => 1980
"genre" => "Giallo Storico"
"cover_image_url" => "https://m.media-amazon.com/images/I/71e0SzoKp3L.jpg"
"description" => "Un romanzo storico ambientato nel Medioevo..."
"created_at" => "2024-10-24 11:36:58"
"updated_at" => "2024-10-24 11:38:31" --}}

@section("main-content")
    <div class="container">
        <div class="row">
            @forelse ( $books as $book )
            <div class="col-4">
                <article class="single-book card">
                    {{-- <img src="{{ $book->cover_image_url }}" alt="" class="card-img-top"> --}}
                    <div class="card-body">
                        <h2 class="card-title">{{ $book->title }}</h2>
                        <h3 class="card-subtitle">{{ $book->author }}</h3>
                        <p class="card-text">Genre: {{ $book->genre }}</p>
                        <p class="card-text">Genre: {{ $book->description }}</p>
                    </div>
                </article>
            </div>
            @empty
            <div class="col-12">
                <h2>
                    No books are available at the moment...
                </h2>
            </div>
            @endforelse
        </div>
    </div>
    <article>
        <h2>
            Books index
        </h2>
    </article>
@endsection
