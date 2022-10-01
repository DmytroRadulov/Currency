@extends('layout')

@section('content')
    <h1>Categories</h1>
    <a class="btn btn-success" href="/category/create">Create</a>
    <table class="table">
        <tr>
            <th>Title</th>
            <th>Slug</th>
            <th>Update</th>
            <th>Delete</th>
            <th>Show</th>
        </tr>
        @foreach($categories as $category)
            <tr>
                <td>{{$category->title}}</td>
                <td>{{$category->slug}}</td>
                <td><a href="/category/{{$category->id}}/edit"
                       class="btn btn-outline-primary">update</a></td>
                <td><a href="/category/{{$category->id}}/delete"
                       class="btn btn-outline-danger">delete</a></td>
                <td><a href="/category/{{$category->id}}/show"
                       class="btn btn-outline-info">Show</a></td>
            </tr>
        @endforeach
    </table>

@endsection
