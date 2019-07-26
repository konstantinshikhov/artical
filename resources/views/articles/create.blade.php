@extends('layouts.app')

@section('content')
    <h1>Create article</h1>
    <div class="container">

        <form action="{{route('articles.store')}}" class="form-horizontal" method="post">
            {{csrf_field()}}
            {{-- Form include --}}
            @include('articles.partials.form')
            <input type="hidden" name="created_by" value="{{Auth::id()}}">
            <input type="submit" class="btn btn-primary" value="Create">
        </form>
    </div>
@endsection