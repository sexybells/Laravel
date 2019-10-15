@extends('layouts')
@section('contents')
<div class="content-wrapper">
    <section class="content container-fluid">
        <form action="{{ route('post.edit') }}" method="POST">
            @csrf
            <input type="hidden" name="id" value={{$id}}>
   <div>

            <label >Name</label>
         <input type="text" name="title" value={{$title}}>
         <input type="text" name="content" value={{$content}}>



   </div>

            <input type="submit" value="submit">
        </form>
    </section>
</div>

@endsection
