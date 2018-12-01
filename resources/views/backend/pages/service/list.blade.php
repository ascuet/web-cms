@extends('backend.layouts.default')
@section('content')
<ol class="breadcrumb">
	<li class="breadcrumb-item">
	  <a href="{{ URL::to('/dashboard') }}">Dashboard</a>
	</li>
	<li class="breadcrumb-item active">
	  <a href="#">All Services</a>
	</li>
</ol>
<div class="card mb-3">
	<div class="card-header">
	  <i class="fas fa-table"></i>
	  All Services
	  <span><a style="float: right;" href="{{ URL::to('/service-add') }}" class="btn btn-primary">Add <i class="fa fa-plus"></i></a></span>

	</div>

	<div class="card-body">
	  <div class="table-responsive">
	    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	      <thead>
	        <tr>
	          <th>Title</th>
	          <th>Description</th>
	          <th>Image</th>
	          <th>Sort Order</th>
	          <th>Status</th>
	        </tr>
	      </thead>
	      <tfoot>
	        <tr>
	          <th>Title</th>
	          <th>Description</th>
	          <th>Image</th>
	          <th>Sort Order</th>
	          <th>Status</th>
	        </tr>
	      </tfoot>
	      <tbody>
	      	@if(count($data))
				@foreach($data as $d)
					<tr>
						<td>{{ $d->title }}</td>
						<td>{{ $d->description }}</td>
						<td>
							@if($d->image_url)
								<img width="200" src="{{ asset('uploads/service/').'/'.$d->image_url }}" alt="">
							@else
								<span>No Image</span>
							@endif
							
						</td>
						<td>{{ $d->sort_order }}</td>
						<td>{{ ($d->status)==1 ? 'Active' : 'Inactive' }}</td>
					</tr>
				@endforeach
	      	@endif
	      </tbody>
	    </table>
	  </div>
	</div>
	
</div>
@stop