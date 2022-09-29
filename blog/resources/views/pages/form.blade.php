@extends('layout')

@section('form')
    <h1></h1>
    <form action="" method="POST">
        <input type="text" name="title" value="{{$category->title}}">
        <input type="text" name="slug" value="{{$category->slug}}">
        <input type="submit" value="{{$category->id ? 'Update' : 'Create'}}">
    </form>
@endsection