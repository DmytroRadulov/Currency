@extends('layout')

@section('form')
    <h1></h1>
    <form action="/tag/store" method="POST">
        <input type="hidden" name="id" value="{{$tag->id}}">
        <input type="text" name="title" value="{{$tag->title}}">
        <input type="text" name="slug" value="{{$tag->slug}}">
        <input type="submit" value="{{$tag->id ? 'Update' : 'Create'}}">
    </form>
@endsection


