@extends('layout')

@section('content')
    <h1>Tag</h1>
    <a class="btn btn-success" href="/tag/create">Create</a>
    <table class="table">
        <tr>
            <th>Title</th>
            <th>Slug</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($tags as $tag)
            <tr>
                <td>{{ $tag->title }}</td>
                <td>{{ $tag->slug }}</td>
                <td><a href="/tag/{{$tag->id}}/edit" class="btn btn-outline-primary">update</a></td>
                <td><a href="/tag/{{$tag->id}}/delete" class="btn btn-outline-danger">delete</a></td>
                <td><a href="/tag/{{$tag->id}}/show" class="btn btn-outline-info">show</a></td>
            </tr>
        @endforeach
    </table>

@endsection