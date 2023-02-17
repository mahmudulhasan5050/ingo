
@include('admin.header')
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Event List</h4>
                                <a type="button" href="{{ url('/admin/ingoevent/create') }}"
                                    class="btn btn-primary btn-round ml-auto">
                                    <i class="fa fa-plus"></i>
                                    Add Event

                                </a>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover">

                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Event</th>
                                                <th>Start Date</th>
                                                <th>Start Time</th>
                                                <th>End Date</th>
                                                <th>End Time</th>
                                                <th>Venue</th>
                                                <th>Age Restriction</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($ingoEvent as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item["event"] }}</td>
                                                <td>{{ $item["start_date"] }}</td>
                                                <td>{{ $item["start_time"] }}</td>
                                                <td>{{ $item["end_date"] }}</td>
                                                <td>{{ $item["end_time"] }}</td>
                                                <td>{{ $item["venueid"] }}</td>
                                                <td>{{ $item["age_restriction"] }}</td>
                                                <td>
                                                    <a href="{{ url('/admin/ingoevent/' . $item["id"]) }}" title="View Event"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                    <a href="{{ url('/admin/ingoevent/' . $item["id"] . '/edit') }}" title="Edit Event"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                                    <form method="POST" action="{{ url('/admin/ingoevent/' . $item["id"]) }}" accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Venue" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
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
@include('admin.footer')
