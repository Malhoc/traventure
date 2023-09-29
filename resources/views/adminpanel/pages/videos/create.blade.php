@extends('adminpanel.layouts.app')

@section('title-meta')
    <title>{{ config('app.name') }} | video Create</title>

    <meta name="description" content="this is description">
@endsection

@section('other-css')
@endsection

@section('content')
    <div id="page-wrapper" class="gray-bg">

        <div class="row border-bottom">
            @include('adminpanel.partials.header')
        </div>

        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-sm-4">
                <h2>User Management</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('videos.index') }}">Video</a>
                    </li>
                    <li class="active">
                        <strong>Create</strong>
                    </li>
                </ol>
            </div>
            <div class="col-sm-8">
                <div class="title-action">
                    <a href="{{ route('videos.index') }}" class="btn btn-primary">Show List</a>
                </div>
            </div>
        </div>

        {{-- <div class="container pt-4">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-center">
                            <h5>Upload File</h5>
                        </div>

                        <div class="card-body">
                            <div id="upload-container" class="text-center">
                                <button id="browseFile" class="btn btn-primary">Brows File</button>
                            </div>
                            <div style="display: none" class="progress mt-3" style="height: 25px">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                                    style="width: 75%; height: 100%">75%</div>
                            </div>
                        </div>

                        <div class="card-footer p-4" style="display: none">
                            <video id="videoPreview" src="" controls style="width: 100%; height: auto"></video>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="wrapper wrapper-content ">

            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">

                        <div class="ibox-title">
                            <h5>Fill out this form to create a new Video.</h5>
                            {{-- <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-class">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div> --}}
                        </div>

                        <div class="ibox-content">
                            <form method="post" class="form-horizontal" action="{{ route('admin.videos.store') }}"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Title</label>

                                    <div class="col-sm-4">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror "
                                            name="title" value="{{ old('title') }}" required>
                                        @error('title')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <label class="col-sm-2 control-label">Description</label>

                                    <div class="col-sm-4">
                                        <input type="text"
                                            class="form-control @error('description') is-invalid @enderror "
                                            name="description" value="{{ old('description') }}"required>
                                        @error('description')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Author</label>

                                    <div class="col-sm-4">
                                        <input type="text" class="form-control @error('password') is-invalid @enderror"
                                            name="author_name" value="{{ old('author_name') }}" required>
                                        @error('author_name')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <label class="col-sm-2 control-label">Book</label>

                                    <div class="col-sm-4">
                                        <input type="text" value="{{ old('book') }}"
                                            class="form-control @error('book') is-invalid @enderror" name="book"
                                            placeholder="Optional" required>
                                        @error('book')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Narrated By</label>

                                    <div class="col-sm-4">
                                        <input type="text" class="form-control @error('password') is-invalid @enderror"
                                            name="narrated_by" value="{{ old('narrated_by') }}" required>
                                        @error('narrated_by')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <label class="col-sm-2 control-label">Video</label>

                                    <div class="col-sm-4">
                                        <input type="file" value="{{ old('video') }}"
                                            class="form-control @error('book') is-invalid @enderror" name="video"
                                            placeholder="Upload Video" required>
                                        @error('video')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                </div>

                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-primary disabledbutton" id="submitbtn" type="submit">Add
                                            Video</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        @include('adminpanel.partials.footer')

    </div>
@endsection


@section('custom-script')
    <script src="https://cdn.jsdelivr.net/npm/resumablejs@1.1.0/resumable.min.js"></script>
    <script type="text/javascript">
        let browseFile = $('#browseFile');
        let resumable = new Resumable({
            target: '{{ route('admin.videos.upload-chunk') }}',
            query: {
                _token: '{{ csrf_token() }}'
            }, // CSRF token
            fileType: ['mp4'],
            chunkSize: 10 * 1024 *
            1024, // default is 1*1024*1024, this should be less than your maximum limit in php.ini
            // headers: {
            //     'Accept': 'application/json'
            // },
            testChunks: false,
            throttleProgressCallbacks: 1,
        });

        resumable.assignBrowse(browseFile[0]);

        resumable.on('fileAdded', function(file) { // trigger when file picked

            console.log(file);
            showProgress();
            resumable.upload() // to actually start uploading.
        });
        resumable.on('complete', function(file) { // trigger when file picked
            let fileId = resumable.getIdentifier();
            const url = '{{ route('admin.videos.upload-chunk') }}'
            fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        resumableIdentifier: fileId
                    })
                })
                .then(response => {
                    return response.json();
                })
                .then(data => {
                    console.log(data);
                })
                .catch(error => {
                    console.error(error);
                });
        });

        resumable.on('fileProgress', function(file) { // trigger when file progress update
            updateProgress(Math.floor(file.progress() * 100));
        });

        resumable.on('fileSuccess', function(file, response) { // trigger when file upload complete
            response = JSON.parse(response)
            $('#videoPreview').attr('src', response.path);
            $('.card-footer').show();
        });

        resumable.on('fileError', function(file, response) { // trigger when there is any error
            console.log(file);
            console.log(response);
            alert('file uploading error.')
        });


        let progress = $('.progress');

        function showProgress() {
            progress.find('.progress-bar').css('width', '0%');
            progress.find('.progress-bar').html('0%');
            progress.find('.progress-bar').removeClass('bg-success');
            progress.show();
        }

        function updateProgress(value) {
            progress.find('.progress-bar').css('width', `${value}%`)
            progress.find('.progress-bar').html(`${value}%`)
        }

        function hideProgress() {
            progress.hide();
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
