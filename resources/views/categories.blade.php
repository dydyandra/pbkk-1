@extends('layouts.template')

@section('container')

    <h1>Halaman Categories</h1>
    <hr/>
    @foreach($categories as $category)
        <ul class="card">
            <li style="list-style: none" class="card-body">
                <h2><a href="/{{ $field }}/{{ $category->slug }}">{{ $category->name }}</a></h2>
            </li>
        </ul>
    @endforeach
@endsection
