@extends('adminpanel.layouts.app')

@section('title-meta')
    <title>{{ config('app.name') }} | Bookings List</title>

    <meta name="description" content="this is description">
@endsection

@section('other-css')
    <!-- datatable -->
    <link href="{{ asset('adminpanel') }}/css/plugins/dataTables/datatables.min.css" rel="stylesheet">
@endsection

@section('content')
    <div id="page-wrapper" class="gray-bg">

        <div class="row border-bottom">
            @include('adminpanel.partials.header')
        </div>

        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-sm-4">
                <h2>Bookings Management</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="#">Bookings</a>
                    </li>
                    <li class="active">
                        <strong>List</strong>
                    </li>
                </ol>
            </div>
            <div class="col-sm-8">
                <div class="title-action">
                    {{-- <a href="{{ route('admin.bookings.create') }}" class="btn btn-primary">+ Create New</a> --}}
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>List of bookings.</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Tour</th>
                                            <th>Persons</th>
                                            <th>Date</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            <th>Payment</th>
                                            <th>Booked At</th>
                                            <th>Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bookings as $booking)
                                            <tr class="gradeX" id="row-{{ $booking->id }}">
                                                <td>{{ $booking->id }}</td>
                                                <td>{{ $booking->name }}</td>
                                                <td>{{ $booking->email }}</td>
                                                <td>{{ $booking->phone }}</td>
                                                <td>{{ $booking->tour->title }}</td>
                                                <td>{{ $booking->no_of_guests }}</td>
                                                <td>{{ $booking->date }}</td>
                                                <td>{{ $booking->price }}</td>
                                                <td>{{ $booking->status }}</td>
                                                <td>Not Completed</td>
                                                <td>{{ $booking->created_at }}</td>
                                                {{-- @if ($booking->is_active)
                                                <td>Public</td>
                                                @else
                                                <td>Private</td>
                                                @endif --}}
                                                </td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        {{-- <a href="{{ route('admin.bookings.edit', $booking) }}"
                                                            class="btn-white btn btn-xs">Edit</a> --}}
                                                        <button onclick="deleteRecord({{ $booking->id }})"
                                                            class="btn-white btn btn-xs">Delete</button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Tour</th>
                                            <th>Persons</th>
                                            <th>Date</th>
                                            <th>Price</th>
                                            <th>Payment</th>
                                            <th>Status</th>
                                            <th>Booked At</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        @include('adminpanel.partials.footer')

    </div>
@endsection


@section('custom-script')
    <!-- Sweet alert -->
    <script src="{{ asset('adminpanel') }}/js/plugins/sweetalert/sweetalert.min.js"></script>
    <!-- datatables -->
    <script src="{{ asset('adminpanel') }}/js/plugins/dataTables/datatables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.dataTables-example').DataTable({
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    // {extend: 'copy'},
                    // {extend: 'csv'},
                    // {extend: 'excel', title: 'ExampleFile'},
                    // {extend: 'pdf', title: 'ExampleFile'},

                    {
                        extend: 'print',
                        customize: function(win) {
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                        }
                    }
                ]

            });



        });

        function deleteRecord(id) {
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this record !",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false
            }, function() {
                $.ajax({
                    method: 'DELETE',
                    data: {
                        "_token": "{{ csrf_token() }}"
                    },
                    url: "{{ route('admin.bookings.destroy', '') }}/" + id,
                    success: function(response) {
                        console.log(response);
                        if (response.success) {
                            swal("Deleted!", "Your record has been deleted.", "success");
                            $("#row-" + id).remove();
                        } else if (response.error) {
                            swal("Error !", response.error, "error");
                        } else {
                            log.
                            swal("Error !", "Not Authorize | Logical Error", "error");
                        }
                    },
                    error: function(response) {
                        swal("Error!", "Cannot delete !", "error");
                    }
                });

            });

        }
    </script>

    <script>
        var Success = `{{ \Session::has('success') }}`;
        var Error = `{{ \Session::has('error') }}`;

        if (Success) {
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 7000
                };
                toastr.success('Success Message', `{{ \Session::get('success') }}`);
            }, 1300);
        } else if (Error) {
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 4000
                };
                toastr.error('Failure Message', `{{ \Session::get('error') }}`);
            }, 1300);
        }
    </script>
@endsection
