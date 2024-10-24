@extends("layouts.app")

@section("page-title", "Pantings index")

@section("main-content")
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="py-3 fw-bold text-center">
                    Paintings:
                </h1>
            </div>
            <div class="col-12">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Artist</th>
                            <th scope="col">Title</th>
                            <th scope="col">Year</th>
                            <th scope="col">Style</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ( $paintings as $painting )
                        <tr>
                            <td>
                                {{ $painting->id }}
                            </td>
                            <td>
                                {{ $painting->artist }}
                            </td>
                            <td>
                                {{ $painting->title }}
                            </td>
                            <td>
                                {{ $painting->creation_year }}
                            </td>
                            <td>
                                {{ $painting->art_style }}
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6">No paintings are available at the moment...</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
