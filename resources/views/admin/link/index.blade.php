@extends('admin.layouts.header')
@section('content')
    <!-- Content area -->
    <div class="content">
        <!-- Basic responsive table -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">View link</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>
            <div class="page-header page-header-default">

                <br>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>title</th>
                        <th>edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ $link->link }}</td>
                        <td class="text-center">
                            <ul class="icons-list">
                                <li class="text-primary-600">
                                    <a href="{{ url('admin/link/'.$link->id.'/edit') }}">
                                        <i class="icon-pencil7"></i>
                                    </a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /basic responsive table -->

        <!-- Footer -->
        <div class="footer text-muted">
            &copy; 2020. <a href="#">Doctor</a> by <a href="{{ url('/') }}" target="_blank">Eugene Kopyov</a>
        </div>
        <!-- /footer -->

    </div>
    <!-- /content area -->
@endsection
