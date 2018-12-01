<!DOCTYPE html>
<html lang="en">
<head>
	@include('frontend.includes.head')
</head>
<body>
	<div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	        <a class="navbar-brand" href="#">DEPT of CSE</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
			    <span class="navbar-toggler-icon"></span>
			</button>
	        
	        <div class="collapse navbar-collapse" id="navbarSupportedContent">
	            @include('frontend.includes.navbar')
	        </div>
	    </nav>
	    @yield('content')
    </div>
	@include('frontend.includes.scripts')
</body>
</html>