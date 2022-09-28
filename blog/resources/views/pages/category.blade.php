@extends('layout')

@section('content')
    <h1>Categories</h1>
    <a class="btn btn-success" href="/category/create-category.php">Create</a>
    <table class="table">
        <tr>
            <th>Title</th>
            <th>Slug</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($categories as $category)
            <tr>
                <td>{{$category->title}}</td>
                <td>{{$category->slug}}</td>
                <td><a href="/category/update-category.php?id={{$category->id}}"
                       class="btn btn-outline-primary">update</a></td>
                <td><a href="/category/delete-category.php?id={{$category->id}}"
                       class="btn btn-outline-danger">delete</a></td>
            </tr>
        @endforeach
    </table>

@endsection
    