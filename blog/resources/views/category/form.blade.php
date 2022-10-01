@extends('layout')

@section('form')
{{--    <form action="/order/store" method="post">--}}
{{--        <input type="hidden" value="{{$category->id}}" name="id">--}}
{{--        <div class="">--}}
{{--            <label for="title" class="form-label">Title</label>--}}
{{--            <input type="text" id="title" name="title" value="{{$category->title}}">--}}
{{--        </div>--}}
{{--        <div class="mb-3">--}}
{{--            <label for="slug" class="form-label">Slug</label>--}}
{{--            <input type="text"  id="slug" name="slug" value="{{$category->slug}}">--}}
{{--        </div>--}}

{{--        <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--    </form>--}}




    <h1></h1>
    <form action="/category/store" method="POST">
        <input type="text" name="title" value="{{$category->title}}">
        <input type="text" name="slug" value="{{$category->slug}}">
        <input type="submit" value="{{$category->id ? 'Update' : 'Create'}}">
    </form>
@endsection