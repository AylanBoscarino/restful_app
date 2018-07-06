<!doctype html>
<html>
	
@include('includes.head')
<body>
	@include('includes.header')
	@yield('content')
	@include('includes.footer')
</body>
<script src="{{ mix('js/app.js') }}"></script>
<script src="{{ mix('js/scripts.js') }}"></script>
</html>