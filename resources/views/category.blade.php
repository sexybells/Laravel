@extends('layouts')

@section('title', 'Category')

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

        <h3 style="text-align: center">Category</h3>
        @if(empty($posts))
            <p>No Data</p>
        @else

            <table class="table">
                <thead>
                <th>user id</th>
                <th>content</th>
                <th>Created</th>
                <th>Username</th>

                </thead>
                <tbody>

                @foreach($posts as $post)

                    <tr>
                        <td>{{ $post['user_id'] }}</td>
                        <td>{{ $post['content'] }}</td>

                        <td>{{ $post['user']['name'] }}</td>
                        <form action="{{ route('users.delete',[$user['id']] ) }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{  $user['id'] }}">
                            <td><input type="submit" value="Delete" class="btn btn-danger"></td>
                        </form>
                        <td><a href="{{ url('users/update',[ $user['id'] ]) }}" class="btn btn-primary">Update</a></td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
    <!-- /.content-wrapper -->
@endsection
