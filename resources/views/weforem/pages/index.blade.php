@extends('layouts.weforem')

@section('content')

	<header id="header">
		<div class="logo">
			<span class="icon fa-diamond"></span>
		</div>
		<div class="content">
			<div class="inner">
				<h1>WEFOREM</h1>
				<p>
					Description......
				</p>
			</div>
		</div>
		<nav>
			<ul>
				<li>
					<a href="{{ route('nexcode.home') }}">NEXCODE</a>
				</li>
				<li>
					<a href="{{ route('ndahari.home') }}">Ndahari F</a>
				</li>
			</ul>
		</nav>
	</header>

@endsection