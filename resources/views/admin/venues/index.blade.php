@include('admin.header')
<div class="main-panel">
    <div class="content">
        <div class="page-inner">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Venue List</h4>
                                <a type="button" href="{{ url('/admin/venue/create') }}"
                                    class="btn btn-primary btn-round ml-auto">
                                    <i class="fa fa-plus"></i>
                                    Add Venue

                                </a>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Address</th>
                                            <th>City</th>
                                            <th>Country</th>
                                            <th>State</th>
                                            <th>Phone</th>
                                            <th>HomePage</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($venue as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item["title"] }}</td>
                                        <td>{{ $item["address"] }}</td>
                                        <td>{{ $item["city"] }}</td>
                                        <td>{{ $item["country"] }}</td>
                                        <td>{{ $item["state"] }}</td>
                                        <td>{{ $item["phone"] }}</td>
                                        <td>{{ $item["homepage"] }}</td>
                                        <td>
                                            <a href="{{ url('/admin/venue/' . $item["id"]) }}" title="View Venues"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/admin/venue/' . $item["id"] . '/edit') }}" title="Edit Venue"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/admin/venue/' . $item["id"]) }}" accept-charset="UTF-8" style="display:inline">
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
