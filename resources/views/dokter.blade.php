@extends('layouts.template')

@section('container')
    <h1 class="mb-5">{{ $title }}</h1>

    @foreach($NamaDokter as $d)
    <ul class="mb-5 border-bottom pb-3">
        <li>
            <h3>{{ $d->name }}</h3>
        </li>
    </ul>

    @endforeach
@endsection