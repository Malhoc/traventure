@extends('adminpanel.layouts.app')

@section('title-meta')
    <title>{{ config('app.name') }} | Product Create</title>

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
                <h2>Blog Management</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Blog</a>
                    </li>
                    <li class="active">
                        <strong>Create</strong>
                    </li>
                </ol>
            </div>
            <div class="col-sm-8">
                <div class="title-action">
                    <a href="{{ route('admin.blogs.index') }}" class="btn btn-primary">Show List</a>
                </div>
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="wrapper wrapper-content animated fadeInRight ecommerce">

            <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab-1">Basic Info</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-2">Images</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-3">SEO</a></li>
                            {{-- <li class=""><a data-toggle="tab" href="#tab-4"> Images</a></li> --}}
                        </ul>

                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane active">
                                <div class="panel-body">

                                    <form id="blogForm" class="form-horizontal" method="POST"
                                        action="{{ route('admin.blogs.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group @error('title') has-error @enderror"><label
                                                class="col-sm-2 control-label">Title:</label>
                                            <div class="col-sm-10"><input id="title" value="{{ old('title') }}"
                                                    name="title" required type="text" placeholder="Unique"
                                                    class="form-control">
                                                @error('title')
                                                    <span class="help-block m-b-none">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="form-group @error('author_name') has-error @enderror"><label
                                                class="col-sm-2 control-label">Author:</label>
                                            <div class="col-sm-10"><input id="author_name" value="{{ old('author_name') }}"
                                                    name="author_name" required type="text" placeholder="Unique"
                                                    class="form-control">
                                                @error('author_name')
                                                    <span class="help-block m-b-none">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>

                                        <div class="form-group @error('summary') has-error @enderror"><label
                                                class="col-sm-2 control-label">Summary:</label>
                                            <div class="col-sm-10"><input id="summary" value="{{ old('summary') }}"
                                                    name="summary" required type="text" placeholder="short summary .."
                                                    class="form-control">
                                                @error('summary')
                                                    <span class="help-block m-b-none">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>

                                        <div class="form-group"><label class="col-sm-2 control-label">Description:</label>
                                            <div class="col-sm-10">
                                                <textarea id="description" name="description" type="text" required class="summernote">
                                                        {{ old('description') }}
                                                    </textarea>
                                            </div>
                                        </div>

                                        <div class="hr-line-dashed"></div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Visible</label>

                                            <div class="col-sm-10 @error('is_active') has-error @enderror ">
                                                <select id="is_active" name="is_active" class="form-control m-b" required>
                                                    <option selected value="1">Public</option>
                                                    <option value="0">Private</option>
                                                </select>
                                                t
                                            </div>
                                        </div>


                                        <div class="hr-line-dashed"></div>

                                        <div class="form-group">
                                            <div class="col-sm-4 col-sm-offset-2">
                                                <button class="btn btn-primary" type="submit">Save Blog</button>
                                            </div>
                                        </div>



                                </div>
                            </div>
                            <div id="tab-2" class="tab-pane">
                                <div class="panel-body">


                                    <fieldset form="blogForm" class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">jpeg, jpg, png</label>

                                        </div>
                                        <div class="form-group"><label class="col-sm-2 control-label">Thumbnail Image
                                                (350x236):</label>
                                            <div class="col-sm-10"><input name="thumbnail" accept=".png, .jpg, jpeg."
                                                    type="file" class="form-control" placeholder="jpeg, jpg, png ...">
                                            </div>
                                        </div>
                                        <div class="form-group"><label class="col-sm-2 control-label">Full Image
                                                (750x440):</label>
                                            <div class="col-sm-10"><input name="image" accept=".png, .jpg, jpeg."
                                                    type="file" class="form-control" placeholder="jpeg, jpg, png ...">
                                            </div>
                                        </div>

                                    </fieldset>
                                    <div class="hr-line-dashed"></div>

                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-2">
                                            <button class="btn btn-primary" type="submit">Save Blog</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div id="tab-3" class="tab-pane">
                                <div class="panel-body">

                                    <fieldset form="blogForm" class="form-horizontal">
                                        <div class="form-group"><label class="col-sm-2 control-label">Meta Tag
                                                Title:</label>
                                            <div class="col-sm-10"><input name="meta_tag_title" type="text"
                                                    class="form-control" placeholder="..."></div>
                                        </div>
                                        <div class="form-group"><label class="col-sm-2 control-label">Meta Tag
                                                Keywords:</label>
                                            <div class="col-sm-10"><input name="meta_tag_keywords" type="text"
                                                    class="form-control" placeholder="Lorem, Ipsum, has, been"></div>
                                        </div>
                                        <div class="form-group"><label class="col-sm-2 control-label">Meta Tag
                                                Description:</label>
                                            <div class="col-sm-10"><input name="meta_tag_description" type="text"
                                                    class="form-control" placeholder="Sheets containing Lorem"></div>
                                        </div>
                                    </fieldset>
                                    <div class="hr-line-dashed"></div>

                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-2">
                                            <button class="btn btn-primary" type="submit">Save Blog</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                            <div id="tab-4" class="tab-pane">
                                <div class="panel-body">

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-stripped">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        Image preview
                                                    </th>
                                                    <th>
                                                        Image url
                                                    </th>
                                                    <th>
                                                        Sort order
                                                    </th>
                                                    <th>
                                                        Actions
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <img src="img/gallery/2s.jpg">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" disabled
                                                            value="http://mydomain.com/images/image1.png">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" value="1">
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-white"><i class="fa fa-trash"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="img/gallery/1s.jpg">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" disabled
                                                            value="http://mydomain.com/images/image2.png">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" value="2">
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-white"><i class="fa fa-trash"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="img/gallery/3s.jpg">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" disabled
                                                            value="http://mydomain.com/images/image3.png">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" value="3">
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-white"><i class="fa fa-trash"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="img/gallery/4s.jpg">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" disabled
                                                            value="http://mydomain.com/images/image4.png">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" value="4">
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-white"><i class="fa fa-trash"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="img/gallery/5s.jpg">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" disabled
                                                            value="http://mydomain.com/images/image5.png">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" value="5">
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-white"><i class="fa fa-trash"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="img/gallery/6s.jpg">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" disabled
                                                            value="http://mydomain.com/images/image6.png">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" value="6">
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-white"><i class="fa fa-trash"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="img/gallery/7s.jpg">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" disabled
                                                            value="http://mydomain.com/images/image7.png">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" value="7">
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-white"><i class="fa fa-trash"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
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
    <script>
        $(document).ready(function() {

            $('.summernote').summernote({
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['fontsize', ['fontsize']],
                    ['fontname', ['fontname']],
                    ['height', ['height']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']],
                ],
            });

        });
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
