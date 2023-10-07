@extends('adminpanel.layouts.app')

@section('title-meta')
    <title>{{ config('app.name') }} | Tour Edit</title>

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
                <h2>Tour Management</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{route('admin.tours.index')}}">Tour</a>
                    </li>
                    <li class="active">
                        <strong>Edit</strong>
                    </li>
                </ol>
            </div>
            <div class="col-sm-8">
                <div class="title-action">
                    <a href="{{ route('admin.tours.index') }}" class="btn btn-primary">Show List</a>
                </div>
            </div>
        </div>

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

                                    <form id="tourForm" class="form-horizontal" method="POST"
                                        action="{{ route('admin.tours.update', $tour) }}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group @error('title') has-error @enderror"><label
                                                class="col-sm-2 control-label">Title:</label>
                                            <div class="col-sm-10"><input id="" value="{{ $tour->title }}"
                                                    name="title" required type="text" placeholder="Unique"
                                                    class="form-control">
                                                @error('title')
                                                    <span class="help-block m-b-none">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="form-group ">
                                            <label class="col-sm-2 control-label">Price:</label>
                                            <div class="col-sm-4"><input id="price" value="{{ $tour->price }}"
                                                    name="price" required type="number" class="form-control">
                                                @error('price')
                                                    <span class="help-block m-b-none">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <label class="col-sm-2 control-label">Group Limit:</label>
                                            <div class="col-sm-4"><input id="group_limit" value="{{ $tour->group_limit }}"
                                                    name="group_limit" required type="number" class="form-control">
                                                @error('group_limit')
                                                    <span class="help-block m-b-none">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>

                                        <div class="form-group @error('duration') has-error @enderror">
                                            <label class="col-sm-2 control-label">Duration:</label>
                                            <div class="col-sm-4"><input id="duration" value="{{ $tour->duration }}"
                                                    name="duration" required type="text" class="form-control"
                                                    placeholder="e.g. 3 Days, 1 Month, 2 Weeks">
                                                @error('duration')
                                                    <span class="help-block m-b-none">{{ $message }}</span>
                                                @enderror
                                            </div>


                                            <label class="col-sm-2 control-label">Per Person Booking:</label>
                                            <div class="col-sm-4"><input id="per_person_booking_limit" value="{{ $tour->per_person_booking_limit }}"
                                                    name="per_person_booking_limit" required type="number" class="form-control"
                                                    placeholder="5">
                                                @error('per_person_booking_limit')
                                                    <span class="help-block m-b-none">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group @error('facilities') has-error @enderror"><label
                                                class="col-sm-2 control-label">Facilities:</label>
                                            <div class="col-sm-10"><input id="facilities" value="{{ $tour->facilities }}"
                                                    name="facilities" required type="text"
                                                    placeholder="comma seprated values, e.g Dinner,Extra Clothes, 3 time Food"
                                                    class="form-control">
                                                @error('facilities')
                                                    <span class="help-block m-b-none">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>

                                        <div class="form-group @error('features') has-error @enderror"><label
                                                class="col-sm-2 control-label">Features:</label>
                                            <div class="col-sm-10"><input id="features" value="{{ $tour->features }}"
                                                    name="features" required type="text"
                                                    placeholder="comma seprated values, e.g Dinner,Extra Clothes, 3 time Food"
                                                    class="form-control">
                                                @error('features')
                                                    <span class="help-block m-b-none">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>

                                        <div class="form-group @error('includes') has-error @enderror"><label
                                                class="col-sm-2 control-label">Includes:</label>
                                            <div class="col-sm-10"><input id="includes" value="{{ $tour->includes }}"
                                                    name="includes" required type="text"
                                                    placeholder="comma seprated values, e.g Dinner,Extra Clothes, 3 time Food"
                                                    class="form-control">
                                                @error('includes')
                                                    <span class="help-block m-b-none">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>

                                        <div class="form-group @error('excludes') has-error @enderror"><label
                                                class="col-sm-2 control-label">Excludes:</label>
                                            <div class="col-sm-10"><input id="excludes" value="{{ $tour->excludes }}"
                                                    name="excludes" required type="text"
                                                    placeholder="comma seprated values, e.g Dinner,Extra Clothes, 3 time Food"
                                                    class="form-control">
                                                @error('excludes')
                                                    <span class="help-block m-b-none">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Destination / Location</label>

                                            <div class="col-sm-10 @error('destination_id') has-error @enderror ">
                                                <select id="destination_id" name="destination_id"
                                                    class="form-control m-b" required>
                                                    @foreach ($destinations as $destination)
                                                    @if ($tour->destination_id == $destination->id)
                                                    <option selected value="{{ $destination->id }}">{{ $destination->name }}
                                                    </option>
                                                    @else
                                                    <option value="{{ $destination->id }}">{{ $destination->name }}
                                                    </option>
                                                    @endif

                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Category</label>

                                            <div class="col-sm-10 @error('tour_category_id') has-error @enderror ">
                                                <select id="tour_category_id" name="tour_category_id"
                                                    class="form-control m-b" required>
                                                    @foreach ($categories as $category)
                                                    @if ($tour->tour_category_id == $category->id)
                                                    <option selected value="{{ $category->id }}">{{ $category->name }}
                                                    </option>
                                                    @else
                                                    <option value="{{ $category->id }}">{{ $category->name }}
                                                    </option>
                                                    @endif

                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group @error('summary') has-error @enderror"><label
                                                class="col-sm-2 control-label">Summary:</label>
                                            <div class="col-sm-10"><input id="" value="{{ $tour->summary }}"
                                                    name="summary" required type="text" placeholder="short summary .."
                                                    class="form-control">
                                                @error('summary')
                                                    <span class="help-block m-b-none">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>

                                        <div class="form-group"><label class="col-sm-2 control-label">Description:</label>
                                            <div class="col-sm-10">
                                                <textarea id="" name="description" type="text" required class="summernote">
                                                        {{ $tour->description }}
                                                    </textarea>
                                            </div>
                                        </div>

                                        {{-- <div class="hr-line-dashed"></div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Visible</label>

                                            <div class="col-sm-10 @error('is_active') has-error @enderror ">
                                                <select id="" name="is_active" class="form-control m-b" required>
                                                    @if ($tour->is_active)
                                                        <option selected value="1">Public</option>
                                                        <option value="0">Private</option>
                                                    @else
                                                        <option value="1">Public</option>
                                                        <option selected value="0">Private</option>
                                                    @endif

                                                </select>
                                                @error('is_active')
                                                    <span class="help-block m-b-none">Select Visiblelity</span>
                                                @enderror
                                            </div>
                                        </div> --}}


                                        <div class="hr-line-dashed"></div>

                                        <div class="form-group">
                                            <div class="col-sm-4 col-sm-offset-2">
                                                <button class="btn btn-primary" type="submit">Update tour</button>
                                            </div>
                                        </div>

                                </div>
                            </div>
                            <div id="tab-2" class="tab-pane">
                                <div class="panel-body">


                                    <fieldset form="tourForm" class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">jpeg, jpg, png</label>

                                        </div>
                                        <div class="form-group"><label class="col-sm-2 control-label">Thumbnail Image
                                            (310x291):</label>
                                            <div class="col-sm-10"><input name="thumbnail" accept=".png, .jpg, jpeg."
                                                    type="file" class="form-control" placeholder="jpeg, jpg, png ...">
                                            </div>
                                        </div>
                                        <div class="form-group"><label class="col-sm-2 control-label">Full Image
                                            (1920x580):</label>
                                            <div class="col-sm-10"><input name="image" accept=".png, .jpg, jpeg."
                                                    type="file" class="form-control" placeholder="jpeg, jpg, png ...">
                                            </div>
                                        </div>

                                        <div class="form-group"><label class="col-sm-2 control-label">Gallery
                                            (770x370):</label>
                                        <div class="col-sm-10"><input name="gallery" accept=".png, .jpg, jpeg."
                                                type="file" multiple class="form-control"
                                                placeholder="jpeg, jpg, png ...">
                                        </div>
                                    </div>
                                    </fieldset>
                                    <div class="hr-line-dashed"></div>

                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-2">
                                            <button class="btn btn-primary" type="submit">Update tour</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div id="tab-3" class="tab-pane">
                                <div class="panel-body">

                                    <fieldset form="tourForm" class="form-horizontal">
                                        <div class="form-group"><label class="col-sm-2 control-label">Meta Tag
                                                Title:</label>
                                            <div class="col-sm-10"><input value="{{ $tour->meta_tag_title }}"
                                                    name="meta_tag_title" type="text" class="form-control"
                                                    placeholder="..."></div>
                                        </div>
                                        <div class="form-group"><label class="col-sm-2 control-label">Meta Tag
                                                Keywords:</label>
                                            <div class="col-sm-10"><input value="{{ $tour->meta_tag_keywords }}"
                                                    name="meta_tag_keywords" type="text" class="form-control"
                                                    placeholder="Lorem, Ipsum, has, been"></div>
                                        </div>
                                        <div class="form-group"><label class="col-sm-2 control-label">Meta Tag
                                                Description:</label>
                                            <div class="col-sm-10"><input value="{{ $tour->meta_tag_description }}"
                                                    name="meta_tag_description" type="text" class="form-control"
                                                    placeholder="Sheets containing Lorem"></div>
                                        </div>
                                    </fieldset>
                                    <div class="hr-line-dashed"></div>

                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-2">
                                            <button class="btn btn-primary" type="submit">Update tour</button>
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
@endsection
