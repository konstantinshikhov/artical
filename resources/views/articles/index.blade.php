@extends('layouts.app')

@section('content')

    <!-- Main Content -->
    <div class="container">
        @if (!Auth::guest())
            <a href="{{route('articles.create')}}" class="btn btn-primary pull-right">Create Ad</a>
        @endif
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                @forelse($articles as $article)

                    <div class="post-preview">
                        <a href="{{route('articles.show',['id'=>$article->id])}}">
                            <h2 class="post-title">
                                {{$article->title}}
                            </h2>
                        </a>
                        <h3 class="post-subtitle">
                            {{$article->description}}
                        </h3>

                        <p class="post-meta">Posted by <a
                                    href="#">{{$article->created_user}}</a> {{$article->created_at}}</p>
                    </div>
                    <hr>
                @empty
                    <div class="post-preview">Объявления отсутствуют</div>
                @endforelse
                <hr>

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