@extends('admin.layouts.header')
@section('content')
<!-- Content area -->
<div class="content">

    <!-- Form horizontal -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">problem</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body">
            <form class="form-horizontal" action="{{ url('admin/problems/update') }}" method="post"  enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $problem->id }}">

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
                                        <input type="text" class="form-control" name="title_ar" placeholder="enter title" required value="{{ $problem->title_ar }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Content (Ar)</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="content_ar" placeholder="enter content" required value="{{ $problem->content_ar }}">

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Long Content (Ar)</label>
                                    <div class="col-lg-10">
                                        <textarea type="text" rows="5" cols="5" class="form-control summernote" required name="long_content_ar" placeholder="enter description">
                                            {{ $problem->long_content_ar }}
                                        </textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="english-tab">
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Title (En)</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="title_en" placeholder="enter title" required value="{{ $problem->title_en }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Content (En)</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="content_en" placeholder="enter content" required value="{{ $problem->content_en }}">

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Long Content (En)</label>
                                    <div class="col-lg-10">
                                        <textarea type="text" rows="5" cols="5" class="form-control summernote" required name="long_content_en" placeholder="enter description">
                                            {{ $problem->long_content_en }}
                                        </textarea>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane" id="data-tab">

                        <div class="form-group">
                            <label class="control-label col-lg-2">Image</label>
                            <div class="col-lg-10">
                                <img src="{{ asset('images/'.resizeImage($problem->icon, 50, 50))}}" width="100px" />
                                <input type="file" class="form-control file-styled" name="file" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Url</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control file-styled" name="url" value="{{$problem->url}}">
                            </div>
                        </div>
                        <div id="other-persons" class="form-group">
                            <div id="main-photos" >   
                                @foreach ($problem->photo as $key => $photo)
                                    
                                    <div id="another-photo{{ $key }}" class="form-group row-index">
                                        <label class="control-label col-lg-2 row-index"> Add More Photo </label>
                                        <div class="col-lg-10">
                                            <img src="{{ asset('images/'.resizeImage($photo, 50, 50))}}" width="100px" />
                                    
                                            <input type="file" class="form-control file-styled" name="photo[{{$key}}]" >
                                            <a data-remove="{{$key}}" class="btn btn-danger remove btn-icon"><i class="icon-trash"></i></a>
                                            <input type ="hidden" name="photoName[{{$key}}]" value="{{$photo}}">
                                        </div>  
                                    </div>
                                @endforeach
                            </div>
                            
                            <div class="text-left">
                                <button class="btn btn-primary" type="button" id="addMainPhotos">+ Add Main Photos </button>
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


<script>
    var rowIdx3 = {{ count($problem->photo) }}; 

    $('#addMainPhotos').on('click', function () { 
        $('#main-photos').append(
            `<div id="another-photo${rowIdx3}" class="form-group row-index">
                <label class="photo-label col-lg-2 row-index">{{ __('Add Main Photos') }}</label>
                <div class="col-lg-10">
                    <input type="file" class="form-control file-styled" name="photo[${rowIdx3}]" >
                    <a data-remove="${rowIdx3}" class="btn btn-danger remove btn-icon"><i class="icon-trash"></i></a>
                </div>    
            </div>`
        ); 

        rowIdx3++;
    }); 
    $('#main-photos').on('click', '.remove', function () { 
        var child = $(this).closest('div').nextAll(); 
        var dataRemove = $(this).attr('data-remove');
        $(`#another-photo${dataRemove}`).remove();

    }); 
</script>

@include('admin.layouts.footer')


</div>
<!-- /content area -->
  @endsection
