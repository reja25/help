<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Home Rental Management |</title>
	<link rel="stylesheet" href="{{url('assets/bootstrap.css')}}" />
	<link rel="stylesheet" href="{{url('assets/style.css')}}" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 <script src="{{ asset('js/app.js') }}"></script>
	 <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->

</head>


<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<img src="{{url('assets/logo.png')}}" alt="" width="10%" />
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('renter') }}">Dashboard<span class="sr-only">(current)</span></a>
      </li>
     <li class="nav-item">
       <a class="nav-link" href="{{ url('add') }}">Create Renter</a>
      </li>
	  <li class="nav-item">
         <a class="nav-link" href="{{ url('show') }}">Renter List</a>
      </li>
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="download" aria-expanded="false">Rent<span class="caret"></span></a>
	  <div class="dropdown-menu" aria-labelledby="download">
		<a class="dropdown-item" href="{{ url('addh') }}">Add rent</a>
		<a class="dropdown-item" href="{{ url('him') }}">Show Rent</a>
	  </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="download" aria-expanded="false">Payment<span class="caret"></span></a>
            <div class="dropdown-menu" aria-labelledby="download">
                <a class="dropdown-item" href="{{ url('add_mrp') }}">Add Monthly payemnt</a>
                <a class="dropdown-item" href="{{ url('mrp') }}">Show Monthly payemnt</a>
            </div>
        </li>
    </ul>


    <form class="form-inline my-2 my-lg-0" action="{{ route('logout') }}" method="POST">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>&nbsp;&nbsp;

    </form>
	<div class="dropdown">
		 <a style="color:#fff;" id="logDropdown" class="btn btn-danger dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->name }} <span class="caret"></span>
          </a>

		<div class="dropdown-menu dropdown-menu-right" aria-labelledby="logDropdown">
			<a class="dropdown-item" href="{{ route('logout') }}"
			   onclick="event.preventDefault();
				document.getElementById('logout-form').submit();">
				{{ __('Logout') }}
			</a>

			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				@csrf
			</form>
		</div>
		</div>
  </div>
</nav>
