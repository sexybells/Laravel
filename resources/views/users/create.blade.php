@extends('layouts')
@section('contents')
<div class="content-wrapper">
    <section class="content container-fluid">
        <form action="{{ route('users.store') }}" method="Post">
            @csrf
            <label for="">Name:</label> <input type="text" name="name">
            <label for="">Email:</label> <input type="text" name="email">
            <label for="">Birthday:</label>  <input type="text" name="birthday">
            <input type="submit" value="submit">
        </form>
    </section>
</div>

@endsection
