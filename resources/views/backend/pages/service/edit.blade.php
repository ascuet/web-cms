@extends('backend.layouts.default')
@section('content')
<ol class="breadcrumb">
	<li class="breadcrumb-item">
	  <a href="{{ URL::to('/dashboard') }}">Dashboard</a>
	</li>
	<li class="breadcrumb-item">
	  <a href="{{ URL::to('/services') }}">All Services</a>
	</li>
	<li class="breadcrumb-item active">Edit Service</li>
</ol>

<div class="card mb-3">
	<div class="card-header">
	  <i class="fas fa-table"></i>
	  Edit Service
	</div>
	<div class="card-body">
	  <form method="post" action="{{ route('service-update',['id'=>$data->id]) }}" enctype="multipart/form-data">
	  	{{ csrf_field() }}
	    <div class="form-row">
	      <div class="form-group col-md-6">
	        <label>Title</label>
	        <input type="text" value="{{ $data->title }}" class="form-control" name="title" placeholder="Title">
	      </div>
	    </div>
	    <div class="form-group">
	      <label>Description</label>
	      <textarea name="description" class="form-control" rows="5">{{ $data->description }}</textarea>
	    </div>
	    <div class="form-group">
	      <label>Image</label>
	      <br>
	      <img src="{{ asset('uploads/service/'.$data->image_url) }}" width="200" alt="">
	      <input type="file" name="filename" class="form-control">
	      <input type="hidden" name="hdn_image_url" value="{{ $data->image_url }}">
	    </div>
	    <div class="form-group">
	      <label>Sort Order</label>
	      <input type="number" value="{{ $data->sort_order }}" name="sort_order" class="form-control">
	    </div>
	    <div class="form-group">
	      <div class="form-check">
	        <input class="form-check-input" type="checkbox" name="status" {{ ($data->status) ? 'checked' : '' }} >
	        <label class="form-check-label">Active</label>
	      </div>
	    </div>
	    <button type="submit" class="btn btn-primary">Update</button>
	    <a class="btn btn-danger text-light" href="{{ route('services') }}">Cancel</a>
	  </form>
	</div>
</div>
@stop