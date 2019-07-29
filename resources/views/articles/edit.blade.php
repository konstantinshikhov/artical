@extends('layouts.app')

@section('content')
    <h1 class="text-center">Create article</h1>
    <div class="container">
        @if (!Auth::guest() && Auth::user()->id == $article->created_by)
            <form action="{{route('articles.destroy',$article)}}" method="post"
                  onsubmit="if(confirm('Удалить?')){return true}else{return false}">
                <input type="hidden" name="_method" value="DELETE">
                {{csrf_field()}}
               <button class="btn btn-primary pull-right" type="submit">Delete</button>
            </form>

        @endif
        <form action="{{route('articles.update',$article)}}" class="form-horizontal" method="post">
            {{csrf_field()}}
            {{-- Form include --}}
            @include('articles.partials.form')
            <input type="hidden" name="_method" value="put">
            <input type="submit" class="btn btn-primary" value="Save">
        </form>
    </div>
@endsection