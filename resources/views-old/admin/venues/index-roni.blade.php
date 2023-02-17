
@extends('admin.venues.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Venues</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/venue/create') }}" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New Venue
                        </a>
                        <a href="{{ url('/admin') }}" class="btn btn-success btn-sm" title="Dashboard">
                            <i class="fa fa-plus" aria-hidden="true"></i> Dashboard
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
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
@endsection