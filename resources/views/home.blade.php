@extends('layout')

@section('body')
<a href="https://alphara.co.id">
    <img style="width: 350px;" src="{{ $alphara->logo[0]['permalink'] ?? '' }}" alt="">
</a>
<article class="mt-4 prose">
    {!! $page->content !!}
</article>
@endsection

