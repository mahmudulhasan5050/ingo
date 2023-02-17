@extends('admin.venues.layout')
@section('content')
<div class="card">
  <div class="card-header"> Venue</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Title : {{ $venue->title }}</h5>
        <p class="card-text">Text : {{ $venue->venuetext }}</p>
        <p class="card-text">Address : {{ $venue->address }}</p>
        <p class="card-text">City : {{ $venue->city }}</p>
        <p class="card-text">Country : {{ $venue->country }}</p>
        <p class="card-text">State : {{ $venue->state }}</p>
        <p class="card-text">Zip : {{ $venue->zip }}</p>
        <p class="card-text">Phone : {{ $venue->phone }}</p>
        <p class="card-text">Home Page : {{ $venue->homepage }}</p>

        <a href="{{ url('/admin/venue') }}" title="Back to Venues"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Back</button></a>
  </div>
      
    </hr>
  
  </div>
</div>