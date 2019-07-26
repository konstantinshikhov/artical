@extends('layouts.app')

@section('content')
<h1>Новости</h1>

<!-- Main Content -->
<div class="container">
    @if (!Auth::guest())
    <a href="{{route('articles.create')}}" class="btn btn-primary pull-right">Create Ad</a>
    @endif
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            @forelse($articles as $article)
            <div class="post-preview">
                <a href="{{route('articles.edit',$article)}}">
                    <h2 class="post-title">
                        {{$article->title}}
                    </h2>
                </a>
                    <h3 class="post-subtitle">
                        {{$article->description}}
                    </h3>

                <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> {{$article->created_at}}</p>
            </div>
            @empty
                <div class="post-preview">Объявления отсутствуют</div>
            @endforelse
            <hr>
            {{--<div class="post-preview">--}}
                {{--<a href="post.html">--}}
                    {{--<h2 class="post-title">--}}
                        {{--I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.--}}
                    {{--</h2>--}}
                {{--</a>--}}
                {{--<p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 18, 2014</p>--}}
            {{--</div>--}}
            {{--<hr>--}}
            {{--<div class="post-preview">--}}
                {{--<a href="post.html">--}}
                    {{--<h2 class="post-title">--}}
                        {{--Science has not yet mastered prophecy--}}
                    {{--</h2>--}}
                    {{--<h3 class="post-subtitle">--}}
                        {{--We predict too much for the next year and yet far too little for the next ten.--}}
                    {{--</h3>--}}
                {{--</a>--}}
                {{--<p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on August 24, 2014</p>--}}
            {{--</div>--}}
            {{--<hr>--}}
            {{--<div class="post-preview">--}}
                {{--<a href="post.html">--}}
                    {{--<h2 class="post-title">--}}
                        {{--Failure is not an option--}}
                    {{--</h2>--}}
                    {{--<h3 class="post-subtitle">--}}
                        {{--Many say exploration is part of our destiny, but it’s actually our duty to future generations.--}}
                    {{--</h3>--}}
                {{--</a>--}}
                {{--<p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on July 8, 2014</p>--}}
            {{--</div>--}}
            <hr>
            <!-- Pager -->
            <ul class="pagination">
               {{$articles->links()}}
            </ul>
        </div>
    </div>
</div>

<hr>

@endsection