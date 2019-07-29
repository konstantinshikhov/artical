@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @if (!Auth::guest() && Auth::user()->id == $article->created_by)
                <form action="{{route('articles.edit',['id'=>$article->id])}}" method="post">
                    {{csrf_field()}}
                    <button class="btn btn-primary pull-right" type="submit">Edit</button>
                </form>
                <form action="{{route('articles.destroy',['id'=>$article->id])}}" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-primary pull-right" type="submit">Delete</button>
                </form>
            @endif
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
                    <a href="{{route('articles.edit',['id'=>$article->id])}}">
                        <h2 class="post-title">
                            {{$article->title}}
                        </h2>
                    </a>
                    <h3 class="post-subtitle">
                        {{$article->description}}
                    </h3>

                    <p class="post-meta">Posted by <a href="#">{{$article->created_user}}</a> {{$article->created_at}}</p>
                </div>
                <hr>
            </div>
        </div>
    </div>
@endsection