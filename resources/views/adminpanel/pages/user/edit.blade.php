@extends('adminpanel.layouts.master')

@section('title-meta')
    <title>{{ config('app.name') }} | User Edit</title>

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
                        <a href="{{route('welcome')}}">Users</a>
                    </li>
                    <li class="active">
                        <strong>Edit</strong>
                    </li>
                </ol>
            </div>
            <div class="col-sm-8">
                <div class="title-action">
                    <a href="{{ route('admin.User.index') }}" class="btn btn-primary">Show List</a>
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content ">

            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">

                        <div class="ibox-title">
                            <h5>All form elements <small>With custom checbox and radion elements.</small></h5>
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
                            <form method="POST" action="{{ route('admin.User.update', $User) }}"
                                class="form-horizontal" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group  ">

                                    <label class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10 @error('name') has-error @enderror ">
                                        <input id="" name="name" type="text" class="form-control"
                                            value="{{ $User->name }}">
                                        @error('name')
                                            <span class="help-block m-b-none">Name is Required</span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="form-group">

                                    <label class="col-sm-2 control-label">Style</label>
                                    <div class="col-sm-10">
                                        <input id="" name="style" type="text" required class="form-control"
                                            value="{{ $User->style }}">
                                        @error('style')
                                            <span class="help-block m-b-none">Name is Required</span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Industry</label>

                                    <div class="col-sm-10 @error('industry_id') has-error @enderror ">
                                        <select id="" name="industry_id" class="form-control m-b" required>
                                            <option selected disabled value="">Select Industry</option>

                                            @foreach ($industries as $industry)
                                                @if ($industry->id == $User->industry_id)
                                                    <option selected value="{{ $industry->id }}">{{ $industry->name }}
                                                    </option>
                                                @endif
                                                <option value="{{ $industry->id }}">{{ $industry->name }} </option>
                                            @endforeach

                                        </select>
                                        @error('industry_id')
                                            <span class="help-block m-b-none">Industry is Required</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">

                                    <label class="col-sm-2 control-label">Images</label>
                                    <div class="col-sm-2">
                                        <input id="" name="image1" type="file" class="form-control">
                                    </div>
                                    <div class="col-sm-2">
                                        <input id="" name="image2" type="file" class="form-control">
                                    </div>
                                    <div class="col-sm-2">
                                        <input id="" name="image3" type="file" class="form-control">
                                    </div>
                                    <div class="col-sm-2">
                                        <input id="" name="image4" type="file" class="form-control">
                                    </div>
                                    <div class="col-sm-2">
                                        <input id="" name="image5" type="file" class="form-control">
                                    </div>

                                </div>

                                <div class="hr-line-dashed"></div>


                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea id="" name="description" type="text" required class="summernote">
                                                    {{ $User->description }}
                                                </textarea>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        {{-- <button class="btn btn-white" type="submit">Cancel</button> --}}
                                        <button class="btn btn-primary" type="submit">Save changes</button>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label"></label>
                                    <div class="col-sm-10">
                                        <h2>For SEO</h2>

                                    </div>

                                </div>
                                <div class="form-group  ">

                                    <label class="col-sm-2 control-label">Meta Tags</label>
                                    <div class="col-sm-10 @error('meta_tags') has-error @enderror ">
                                        <input id="" name="meta_tags" type="text" placeholder="tag1, tag2, tag3 ..."
                                            class="form-control" value="{{ $User->meta_tags }}">
                                        @error('meta_tags')
                                            <span class="help-block m-b-none">Name is Required</span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="form-group  ">

                                    <label class="col-sm-2 control-label">Meta Description</label>
                                    <div class="col-sm-10 @error('meta_description') has-error @enderror ">
                                        <textarea name="meta_description" id="" cols="136" rows="10"
                                            placeholder="Optional"> {{ $User->meta_description }}</textarea>
                                        {{-- <span class="help-block m-b-none">Optional</span> --}}
                                    </div>

                                </div>

                                <div class="form-group">

                                    <label class="col-sm-2 control-label">Image Alt 1</label>
                                    <div class="col-sm-10 @error('image_alt_1') has-error @enderror ">
                                        <input id="" name="image_alt_1" type="text" placeholder="Optional"
                                            class="form-control" value="{{ $User->image_alt_1 }}">
                                        @error('image_alt_1')
                                            <span class="help-block m-b-none">Name is Required</span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="form-group">

                                    <label class="col-sm-2 control-label">Image Alt 2</label>
                                    <div class="col-sm-10 @error('image_alt_2') has-error @enderror ">
                                        <input id="" name="image_alt_2" type="text" placeholder="Optional"
                                            class="form-control" value="{{ $User->image_alt_2 }}">
                                        @error('image_alt_2')
                                            <span class="help-block m-b-none">Name is Required</span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="form-group">

                                    <label class="col-sm-2 control-label">Image Alt 3</label>
                                    <div class="col-sm-10 @error('image_alt_3') has-error @enderror ">
                                        <input id="" name="image_alt_3" type="text" placeholder="Optional"
                                            class="form-control" value="{{ $User->image_alt_3 }}">
                                        @error('image_alt_3')
                                            <span class="help-block m-b-none">Name is Required</span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="form-group">

                                    <label class="col-sm-2 control-label">Image Alt 4</label>
                                    <div class="col-sm-10 @error('image_alt_4') has-error @enderror ">
                                        <input id="" name="image_alt_4" type="text" placeholder="Optional"
                                            class="form-control" value="{{ $User->image_alt_4 }}">
                                        @error('image_alt_4')
                                            <span class="help-block m-b-none">Name is Required</span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="form-group">

                                    <label class="col-sm-2 control-label">Image Alt 5</label>
                                    <div class="col-sm-10 @error('image_alt_5') has-error @enderror ">
                                        <input id="" name="image_alt_5" type="text" placeholder="Optional"
                                            class="form-control" value="{{ $User->image_alt_5 }}">
                                        @error('image_alt_5')
                                            <span class="help-block m-b-none">Name is Required</span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="hr-line-dashed"></div>


                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        {{-- <button class="btn btn-white" type="submit">Cancel</button> --}}
                                        <button class="btn btn-primary" type="submit">Save changes</button>
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
@endsection
