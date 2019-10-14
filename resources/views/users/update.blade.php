@extends('layouts')
@section('contents')
<div class="content-wrapper">
    <section class="content container-fluid">
        <form action="{{ route('users.edit') }}" method="POST">
            @csrf
            <input type="hidden" name="id" value={{$id}}>
   <div>

            <label >Name</label>
         <input type="text" name="name" value={{$name}}>
         <input type="text" name="email" value={{$email}}>
         <input type="text" name="birthday" value={{$birthday}}>
         <input type="text" name="phone_number" value={{ $phone_number}}>
         <input type="password" name="password" value={{ $password}}>


   </div>

            <input type="submit" value="submit">
        </form>
    </section>
</div>

@endsection
