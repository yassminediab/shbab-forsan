@extends('admin.layouts.header')
@section('content')
<!-- Content area -->
<div class="content">

    <!-- Form horizontal -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Contact</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body">
            <form class="form-horizontal" action="{{ url('admin/contact/update') }}" method="post"  enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $contact->id }}">
                <div class="tab-content">
                    <div class="tab-pane active" id="general-tab">
                        <div class="tab-content">
                                <div class="form-group">
                                    <label class="control-label col-lg-2">First Name</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="fname" placeholder="enter first name" required value="{{ $contact->fname }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-lg-2">Last Name</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="lname" placeholder="enter last name" required value="{{ $contact->lname }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-lg-2">Phone</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="phone" placeholder="enter phone" required value="{{ $contact->phone }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-lg-2">Message</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="message" placeholder="enter message" required value="{{ $contact->message }}">
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
