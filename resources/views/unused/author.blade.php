@extends('layouts.template')

@section('container')
    <h1>{{  $title  }}</h1>
    <h5>editor: {{ $name }} | {{ $email }}</h5>
    <hr/>
    @foreach($articles as $article)
    <div class="card my-3">
        <article class="mb-2 mx-2 card-body">
            <h3 class="card-title">
                <a href="/article/{{ $article->slug }}">
                {{ $article->title }}
                </a>                    
            </h3>
            <h6>By: <a href="/authors/{{ $article->author->username }}">{{ $article->author->name }}</a> in <a href="/categories/{{ $article->category->slug }}">{{ $article->category->name }}</a></h6>
            
            <p>{{ $article->excerpt }}</p>
        </article>
    </div>

    @endforeach
@endsection


