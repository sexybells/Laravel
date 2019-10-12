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

        <h3 style="text-align: center">USERS</h3>
        @if(empty($posts))
            <p>No Data</p>
        @else

            <table class="table">
                <thead>
                <th>user id</th>
                <th>content</th>
                <th>Username</th>

                </thead>
                <tbody>

                @foreach($posts as $post)

                    <tr>
                        <td>{{ $post['user_id'] }}</td>
                        <td>{{ $post['content'] }}</td>
                         <td>{{ $post['user']['name'] }}</td>


                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
    <!-- /.content-wrapper -->
@endsection
