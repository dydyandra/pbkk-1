@extends('layouts.template')

@section('container')
    <h1>Halaman Author</h1>
    <hr />
    <div class="row m-2" style="">
        @foreach ($authors as $author)
            <div class="card col-3 mx-1 my-3 d-flex">
                <img src="https://buildyourspechere.com/wp-content/uploads/2020/10/placeholder-image-person-jpg.jpg" class="card-img-top" alt="...">
                <div class="class-body">
                    <h4 class="card-title"><a href="/{{ $field }}/{{ $author->username }}">{{ $author->name }}</a></h4>
                    {{-- <p class="card-text"><a href="/{{ $field }}/{{ $author->username }}">Read Author</a></p> --}}
                    <a href="/{{ $field }}/{{ $author->username }}" class="mb-3 btn btn-dark">Read</a>
                </div>
                
            </div>
            {{-- <ul>
            <li>
                <h2><a href="/{{ $field }}/{{ $author->username}}">{{ $author->name }}</a></h2>
            </li>
        </ul> --}}
        @endforeach
    </div>
@endsection
