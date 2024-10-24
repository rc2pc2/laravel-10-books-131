@extends("layouts.app")

@section("page-title", "Superbooks index")

@section("main-content")
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="py-3 fw-bold text-center">
                    Superbooks:
                </h1>
            </div>
            <div class="col-12">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Author</th>
                            <th scope="col">Title</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ( $superbooks as $superbook )
                        <tr>
                            <td>
                                {{ $superbook->id }}
                            </td>
                            <td>
                                {{ $superbook->author }}
                            </td>
                            <td>
                                {{ $superbook->title }}
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6">No superbooks are available at the moment...</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
