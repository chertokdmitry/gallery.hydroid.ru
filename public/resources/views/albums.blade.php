@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            Albums
        </div>

        <div>
            <table>
                <tr>
                    <td>
                        <a href="/albums/create">
                            <button type="button" class="btn btn-warning">+ add</button>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author ID</th>
                    <th>Description</th>
                </tr>

                @foreach ($items as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>
                            <a href="/albums/view/{{ $item->id }}">
                                {{ $item->name }}
                            </a>
                        </td>
                        <td>
                            {{ $item->description }}
                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>
@endsection
