
<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">

	@include('theme.partials.head')

	<body>

		@include('theme.partials.nav')

		@include('theme.partials.hero')

		
        {{-- Defferent content --}}
		@yield('content')

		@include('theme.partials.footer')

		@include('theme.partials.scripts')


		
	</body>

</html>
