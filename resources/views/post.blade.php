@extends('layouts')

@section('title', 'Route')

@section('content')
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
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->

    </section>
    @if(empty($posts))
        <p>No Data</p>
    @else
    <table class="table">
        <thead>
            <th>Content</th>
            <th>Users_id</th>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post['content'] }}</td>
                    <td>{{ $post['user_id'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!---->
    @endif
  </div>
  <!-- /.content-wrapper -->
@endsection
