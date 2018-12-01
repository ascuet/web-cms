@extends('backend.layouts.default')
@section('content')
<ol class="breadcrumb">
	<li class="breadcrumb-item">
	  <a href="{{ URL::to('/dashboard') }}">Dashboard</a>
	</li>
	<li class="breadcrumb-item">
	  <a href="{{ URL::to('/posts') }}">All Posts</a>
	</li>
	<li class="breadcrumb-item active">Add Post</li>
</ol>

<div class="card mb-3">
	<div class="card-header">
	  <i class="fas fa-table"></i>
	  Add Post
	</div>
	<div class="card-body">
	  <form method="post" action="{{ URL::to('post-store') }}">
	  	{{ csrf_field() }}
	    <div class="form-row">
	      <div class="form-group col-md-6">
	        <label>Title</label>
	        <input type="text" class="form-control" name="title" placeholder="Title">
	      </div>
	    </div>
	    <div class="form-group">
	      <label>Description</label>
	      <textarea name="description" class="form-control" name="description" rows="5"></textarea>
	    </div>
	    

	    <div class="form-group">
	      <div class="form-check">
	        <input class="form-check-input" type="checkbox" checked name="status">
	        <label class="form-check-label" >
	          Active
	        </label>
	      </div>
	    </div>
	    <button type="submit" class="btn btn-primary">Add</button>
	  </form>
	</div>
</div>
@stop