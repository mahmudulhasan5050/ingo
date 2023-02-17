@extends('admin.venues.layout')
@section('content')
<div class="card">
  <div class="card-header">Add Venue</div>
  <div class="card-body">
      
      <form action="{{ url('admin/venue') }}" method="post">
        {!! csrf_field() !!}
        <label>Title</label></br>
        <input type="text" name="title" id="title" class="form-control"></br>
        <label>Text</label></br>
        <input type="text" name="venuetext" id="venuetext" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>Cityy</label></br>
        <input type="text" name="city" id="city" class="form-control"></br>
        <label>Country</label></br>
        <input type="text" name="country" id="country" class="form-control"></br>
        <label>State</label></br>
        <input type="text" name="state" id="state" class="form-control"></br>
        <label>Zip</label></br>
        <input type="text" name="zip" id="zip" class="form-control"></br>
        <label>Phone</label></br>
        <input type="text" name="phone" id="phone" class="form-control"></br>
        <label>Home Page</label></br>
        <input type="text" name="homepage" id="homepage" class="form-control"></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop