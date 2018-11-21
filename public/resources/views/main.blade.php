@extends('layouts.app')

@section('content')
    <div class="row">

            @foreach ($items as $item)

                @if ($photo = $item->photos->last()) @endif

            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img class="card-img-top" src="/public/photos/{{ $photo['url'] }}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">{{ $item->name }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="/album/{{ $item->id }}" class="btn btn-sm btn-outline-secondary">Просмотр</a>

                            </div>
                            <small class="text-muted"> {{ $item->photos->count() }}</small>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
    </div>

    {{ $items->links() }}
@endsection
