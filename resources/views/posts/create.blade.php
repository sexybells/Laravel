@extends('layouts')
@section('contents')
<div class="content-wrapper">
    <section class="content container-fluid">
        <form action="{{ route('post.store') }}" method="Post">
            @csrf
            <label for="">Title:</label> <input type="text" name="title">
            <label for="">Content:</label> <input type="text" name="content">

            <input type="submit" value="submit">
        </form>
    </section>
</div>

@endsection
