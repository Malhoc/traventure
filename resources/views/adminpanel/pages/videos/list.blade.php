@extends('adminpanel.layouts.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Videos</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Videos List</li>
                        </ol>
                    </div>
                </div>
                <a href="{{ route('admin.videos.create') }}" class="btn btn-primary">+ New Video</a>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- /.card -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">DataTable with features</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Title</th>
                                            <th>Author Name</th>
                                            <th>Book</th>
                                            <th>Description</th>
                                            <th>Narrated By</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($videos as $video)
                                        <tr>
                                            <td>{{$video->id}}</td>
                                            <td>{{$video->title}}</td>
                                            <td>{{$video->author_name}}</td>
                                            <td>{{$video->book}}</td>
                                            <td>{{$video->description}}</td>
                                            <td>{{$video->narrated_by}}</td>
                                            <td>
                                                <a href='#' class='btn btn-warning btn-sm'><i
                                                        class='fas fa-pen'></i></a>
                                                <a href='#' class='btn btn-danger btn-sm'><i
                                                        class='fas fa-trash'></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tr>
                                        <th>Id</th>
                                            <th>Title</th>
                                            <th>Author Name</th>
                                            <th>Book</th>
                                            <th>Description</th>
                                            <th>Narrated By</th>
                                            
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
