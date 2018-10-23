@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            Новый альбом
        </div>
        <div>
            <form method="POST" action="/albums">
                @csrf
                <label for="name">Название</label>
                <input type="text"
                       class="form-control"
                       id="name"
                       name="name"
                       placeholder=" Название">
                <br><br>
                <label for="description">Описание</label>
                <input type="text"
                       class="form-control"
                       id="description"
                       name="description"
                       placeholder=" Описание">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection