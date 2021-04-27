@extends('admin.layouts.header')
@section('content')
<!-- Content area -->
<div class="content">

    <!-- Form horizontal -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Event</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body">
            <form class="form-horizontal" action="{{ url('admin/events/store') }}" method="post"  enctype="multipart/form-data">
                {{ csrf_field() }}
                
                <ul class="nav nav-tabs nav-tabs-highlight">
                    <li class="active"><a href="#general-tab" data-toggle="tab">Genral</a></li>
                    <li><a href="#data-tab" data-toggle="tab">Data</span></a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="general-tab">
                        <ul class="nav nav-tabs nav-tabs-highlight">
                            <li class="active"><a href="#arabic-tab" data-toggle="tab"><img src="{{ asset('assets/img/flags/ar.png') }}"> Arabic</a></li>
                            <li><a href="#english-tab" data-toggle="tab"><img src="{{ asset('assets/img/flags/en.png') }}"> English</span></a></li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="arabic-tab">
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Title (Ar)</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="title_ar" placeholder="enter title" required value="{{ old('title_ar') }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-lg-2">Content (Ar)</label>
                                    <div class="col-lg-10">
                                        <textarea type="text" value="{{ old('content_ar') }}" rows="5" cols="5" class="summernote form-control" required name="content_ar" placeholder="enter description"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-lg-2">Location (Ar)</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" value="{{ old('location_ar') }}" required name="location_ar" placeholder="enter location ar">
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="english-tab">
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Title (En)</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="title_en" placeholder="enter title" required value="{{ old('title_en') }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-lg-2">Content (En)</label>
                                    <div class="col-lg-10">
                                        <textarea type="text" value="{{ old('content_en') }}" rows="5" cols="5" class="summernote form-control" required name="content_en" placeholder="enter description">
                                            
                                        </textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-lg-2">Location (En)</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" value="{{ old('location_en') }}" required name="location_en" placeholder="enter location en">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="data-tab">
                        <div class="form-group">
                            <label class="control-label col-lg-2">Date</label>
                            <div class="col-lg-10">
                                <input type="date" class="form-control" required name="date" placeholder="enter date">
                            </div>
                        </div>                        

                        <div class="form-group">
                            <label class="control-label col-lg-2">image</label>
                            <div class="col-lg-10">
                                <input type="file" class="form-control file-styled" name="file" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Price</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="price" placeholder="enter price">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Time From</label>
                            <div class="col-lg-10">
                                <input type="time" class="form-control" required name="time_from" placeholder="enter time from">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Time To</label>
                            <div class="col-lg-10">
                                <input type="time" class="form-control" required name="time_to" placeholder="enter time to">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Organizer</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" required name="organizer" placeholder="enter organizer">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Contact</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="contact" placeholder="enter contact">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-lg-2">Lat</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="lat" placeholder="enter latitute">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-lg-2">Lng</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="lng" placeholder="enter langitute">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- /form horizontal -->

@include('admin.layouts.footer')
      

</div>
<!-- /content area -->
  @endsection
