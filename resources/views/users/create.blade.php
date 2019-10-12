@extends('layouts')
@section('contents')
<div class="content-wrapper">
    <section class="content container-fluid">
        <form action="{{ route('users.store') }}" method="Post">
            @csrf
            <label for="">Name:</label> <input type="text" name="name">
            <label for="">Email:</label> <input type="text" name="email">
            <label for="">Birthday:</label>  <input type="text" name="birthday">
            <label for="">Phone Number:</label>  <input type="text" name="phone_number">
            <label for="">Password:</label>  <input type="password" name="password">
            <input type="submit" value="submit">
        </form>
    </section>
</div>

@endsection
