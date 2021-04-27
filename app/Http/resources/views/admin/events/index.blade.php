@extends('admin.layouts.header')
@section('content')
@include('admin.layouts.page_header')
        <table class="table datatable-basic data-table">
        <thead>
            <tr>
                <th>id</th>
                <th>Title</th>
                <th>Location</th>
                <th>Date</th>
                <th width="100px">Actions</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
    </div>
    <!-- /page length options -->

    @include('admin.layouts.footer')

</div>
<!-- /content area -->
@endsection

@section('scripts')
<script type="text/javascript">
  $(function () {
    
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('events.index') }}",
        columns: [
            {data: 'DT_RowIndex', orderable: false, searchable: false},
            {data: 'title_en'},
            {data: 'location_en'},
            {data: 'date'},
            {data: 'action',  orderable: false, searchable: false}
        ]
    });
    
  });
</script>
@endsection