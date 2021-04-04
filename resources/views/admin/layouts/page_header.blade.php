<!-- Page header -->
<div class="page-header page-header-default">
    <div class="page-header-content">
        <div class="page-title">
            <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">{{ $pageTitle }}</span></h4>
        </div>
    </div>

    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="{{ url('admin') }}"><i class="icon-home2 position-left"></i> Home</a></li>
            <li><a href="{{ url('admin/'.$modelName ) }}">{{ $pageTitle }}</a></li>
            <li class="active">view</li>
        </ul>
    </div>
</div>
<!-- /page header -->
<!-- Content area -->
<div class="content">

    <!-- Page length options -->
    <div class="panel panel-flat">
        <div class="panel-heading" style="overflow: hidden;">
            <h5 class="panel-title pull-left">View {{ $pageTitle }}</h5>
          @if($modelName != 'contact' && $modelName != 'volunteers'&& $modelName != 'video' && $modelName != 'aboutUs'
          && $modelName != 'volunteer/section' && $modelName != 'testimonial/section' && $modelName!='pageSettings' && $modelName != 'event/section' && $modelName != 'blog/section' &&  $modelName != 'case/section' &&  $modelName != 'problem/section' && $modelName != 'footer' && $modelName != 'About' && $modelName != 'socialMedia' )
            <a href="{{ url('admin/'.$modelName.'/create') }}"  class="pull-right btn btn-primary"> Add {{ $modelName }}</a>
          @endif
        </div>
