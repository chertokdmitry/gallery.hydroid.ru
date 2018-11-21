@extends('layouts.app')

@section('content')
    <div class="row">

            @foreach ($items as $item)

                <div class="modal fade"
                     id="image{{$loop->index}}" tabindex="-1"
                     role="dialog"
                     aria-labelledby="exampleModalCenterTitle"
                     aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <img class="card-img-top" src="/public/photos/{{ $item->url }}">
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">

                        <a href="#image{{$loop->index}}" data-toggle="modal" data-target="#image{{$loop->index}}">
                            <img class="card-img-top" src="/public/photos/{{ $item->url }}">
                        </a>

                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a class="btn btn-secondary" href="#image{{$loop->index}}" data-toggle="modal" data-target="#image{{$loop->index}}">
                                        +
                                    </a>

                                </div>
                                <p class="card-text">{{ $item->name }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
    </div>
    {{ $items->links() }}
    <p>
        <br>
    </p>
    <a href="/" class="btn btn-secondary btn-lg btn-block">Вернуться</a>
@endsection
