@extends('admin.layouts.header')
@section('content')
<!-- Content area -->
<div class="content">

    <!-- Form horizontal -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Social Media </h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body">
            <form class="form-horizontal" action="{{ url('admin/social-media/update') }}" method="post"  enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $socialMedia->id }}">

                <div class="tab-content">
                    <div class="tab-pane active" id="general-tab">
                       

                        <div class="tab-content">
                            <div class="tab-pane active" >
                                <div class="form-group">
                                    <label class="control-label col-lg-2">{{ $socialMedia->platform }}</label>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-lg-2">Url</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="url" placeholder="enter title" required value="{{ $socialMedia->url }}">
                                    </div>
                                </div>

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
