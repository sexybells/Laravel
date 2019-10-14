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

        <h3 style="text-align: center">Comment</h3>
        @if(empty($comments))
            <p>No Data</p>
        @else

            <table class="table">
                <thead>
                <th>ID</th>
                <th>Created</th>
                <th>content</th>
                <th>Username</th>
                <th>Post ID</th>

                </thead>
                <tbody>

                @foreach($comments as $comment)

                    <tr>
                        <td>{{ $comment['id'] }}</td>
                        <td>{{ $comment['created_at'] }}</td>
                        <td>{{ $comment['content'] }}</td>
                        <td>{{ $comment['user']['name'] }}</td>
                        <td>{{ $comment['post']['id'] }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
    <!-- /.content-wrapper -->
@endsection
