@extends('layouts')

@section('title', 'Starter')

@section('contents')
    <!-- Code -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Page Header
                <small>Optional description</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>

        <!-- Main content -->
        <!-- /.content -->

        <h3 style="text-align: center">Post</h3>
        @if(empty($posts))
            <p>No Data</p>
        @else
            <a href="{{ route('create') }}" class="btn btn-success">Create</a>
            <table class="table">
                <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Created</th>
                <th>content</th>
                <th>Username</th>


                </thead>
                <tbody>

                @foreach($posts as $post)

                    <tr>
                        <td>{{ $post['id'] }}</td>
                        <td>{{ $post['title'] }}</td>
                        <td>{{ $post['created_at'] }}</td>
                        <td>{{ $post['content'] }}</td>
                        <td>{{ $post['user']['name'] }}</td>



                        <form action="{{ route('post.delete',[$post['id']] ) }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{  $post['id'] }}">
                            <td><input type="submit" value="Delete" class="btn btn-danger"></td>
                        </form>
                        <td><a href="{{ url('post/update',[ $post['id'] ]) }}" class="btn btn-primary">Update</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
    <!-- /.content-wrapper -->
@endsection
