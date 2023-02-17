@extends('admin.venues.layout')
@section('content')
<div class="card">
  <div class="card-header">Edit Venue</div>
  <div class="card-body">
      
      <form action="{{ url('admin/venue/' .$venue->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$venue->id}}" id="id"/>
        <label>Title</label></br>
        <input type="text" name="title" id="title" value="{{$venue->title}}" class="form-control"></br>
        <label>Text</label></br>
        <input type="text" name="venuetext" id="venuetext" value="{{$venue->venuetext}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$venue->address}}" class="form-control"></br>
        <label>Cityy</label></br>
        <input type="text" name="city" id="city" value="{{$venue->city}}" class="form-control"></br>
        <label>Country</label></br>
        <input type="text" name="country" id="country" value="{{$venue->country}}" class="form-control"></br>
        <label>State</label></br>
        <input type="text" name="state" id="state" value="{{$venue->state}}" class="form-control"></br>
        <label>Zip</label></br>
        <input type="text" name="zip" id="zip" value="{{$venue->zip}}" class="form-control"></br>
        <label>Phone</label></br>
        <input type="text" name="phone" id="phone" value="{{$venue->phone}}" class="form-control"></br>
        <label>Home Page</label></br>
        <input type="text" name="homepage" id="homepage" value="{{$venue->homepage}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop
