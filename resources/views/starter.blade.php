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
        @if(empty($users))
            <p>No Data</p>
        @else
        <a href="{{ route('create') }}" class="btn btn-success">Create</a>
            <table class="table">
                <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Birthday</th>
                <th>Phone Number</th>
                <th>Post</th>
                </thead>
                <tbody>

                @foreach($users as $user)

                    <tr>
                        <td>{{ $user['name'] }}</td>
                        <td>{{ $user['email'] }}</td>
                        <td>{{ $user['birthday'] }}</td>
                        <td>{{ $user['phone_number'] }}</td>
                        <td>{{ count($user['posts']) }}</td>

                        <form action="{{ route('users.delete',[$user['id']] ) }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{  $user['id'] }}">
                            <td><input onclick="return confirm('Are you sure you want to delete this user?');" type="submit" value="Delete" class="btn btn-danger"></td>
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
