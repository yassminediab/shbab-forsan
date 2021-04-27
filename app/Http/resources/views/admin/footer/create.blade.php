@extends('admin.layouts.header')
@section('content')
<!-- Content area -->
<div class="content">

    <!-- Form horizontal -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">footer</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body">
            <form class="form-horizontal" action="{{ url('admin/footer/store') }}" method="post"  enctype="multipart/form-data">
                {{ csrf_field() }}
                
                <ul class="nav nav-tabs nav-tabs-highlight">
                    <li class="active"><a href="#general-tab" data-toggle="tab">General</a></li>
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
                                        <textarea type="text" rows="5" cols="5" class="summernote form-control" required name="content_ar" placeholder="enter description">
                                            {{ old('content_ar') }}
                                        </textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-lg-2">Address (Ar)</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="address_ar" placeholder="enter address" required value="{{ old('address_ar') }}">
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
                                        <textarea type="text" rows="5" cols="5" class="summernote form-control" required name="content_en" placeholder="enter description">
                                            {{ old('content_en') }}
                                        </textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-lg-2">Address (En)</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="address_en" placeholder="enter address" required value="{{ old('address_en') }}">
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="data-tab">
                        <div class="form-group">
                            <label class="control-label col-lg-2">{{ __('logo') }}</label>
                            <div class="col-lg-10">
                                <input type="file" class="form-control file-styled" name="file" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Email</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="email" placeholder="enter email" required value="{{ old('email') }}">
                            </div>
                        </div>

                     

                        <div class="form-group">
                            <label class="control-label col-lg-2">Phone</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="phone" placeholder="enter phone" required value="{{ old('phone') }}">
                            </div>
                        </div>

                          <!-- main links -->
                        <div id="other-persons" class="form-group">
                            <div id="main-links" >   
                            </div>
                            
                            <div class="text-left">
                                <button class="btn btn-primary" type="button" id="addMainLinks">+{{ __('Add Main Links') }}</button>
                            </div>
                        </div>
                       <!-- what we do -->
                        <div id="what" class="form-group">
                            <div id="what-we-d0-links" >   
                            </div>
                           
                            <div class="text-left">
                                <button class="btn btn-primary" type="button" id="addWhatWelinks">+{{ __('Add What We Do Links') }}</button>
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

var rowIdx = 0; 

$('#addMainLinks').on('click', function () { 
	$('#main-links').append(
        `<div id="another-participant${rowIdx}" class="form-group row-index">
            <label class="control-label col-lg-2 row-index">{{ __('Add Main Links') }}</label>
            <div class="col-lg-10">
                <input type="text" class="form-control row-index" name="main_links[${rowIdx}][name_en]" placeholder="Name (en)"/>
                <input type="text" class="form-control row-index" name="main_links[${rowIdx}][name_ar]" placeholder="Name (ar)"/>
                <input type="text" class="form-control row-index" name="main_links[${rowIdx}][url]" placeholder="url"/>				                               
                <a data-remove="${rowIdx}" class="btn btn-danger remove btn-icon"><i class="icon-trash"></i></a>
            </div>    
        </div>`
    ); 

    rowIdx++;
}); 
$('#main-links').on('click', '.remove', function () { 
    var child = $(this).closest('div').nextAll(); 
    var dataRemove = $(this).attr('data-remove');
    $(`#another-participant${dataRemove}`).remove();

}); 

var rowIdx2 = 0;
$('#addWhatWelinks').on('click', function () { 
	$('#what-we-d0-links').append(
        `<div id="another-links${rowIdx2}" class="form-group row-index">
            <label class="control-label col-lg-2 row-index">{{ __('Add What We Do  Links') }}</label>
            <div class="col-lg-10">
                <input type="text" class="form-control row-index" name="we_do[${rowIdx2}][name_en]" placeholder="Name (en)"/>
                <input type="text" class="form-control row-index" name="we_do[${rowIdx2}][name_ar]" placeholder="Name (ar)"/>
                <input type="text" class="form-control row-index" name="we_do[${rowIdx2}][url]" placeholder="url"/>				                               
                <a data-remove="${rowIdx2}" class="btn btn-danger remove btn-icon"><i class="icon-trash"></i></a>
            </div>    
        </div>`
    ); 
    rowIdx++;
}); 
$('#what-we-d0-links').on('click', '.remove', function () { 
    var child = $(this).closest('div').nextAll(); 
    var dataRemove = $(this).attr('data-remove');
    $(`#another-links${dataRemove}`).remove();

}); 
</script>
@include('admin.layouts.footer')
      

</div>
<!-- /content area -->
@endsection
