@extends('layouts.template')

@section('container')
<article class="my-5">
    <h3>{{ $article->title }}                   
    </h3>
    <h6>By: <a href="/authors/{{ $article->author->username }}">{{ $article->author->name }}</a> in <a href="/categories/{{ $article->category->slug }}">{{ $article->category->name }}</a></h6>

    <p class="mt-4"> {!! $article->body !!}
    </p>
</article>
@endsection
