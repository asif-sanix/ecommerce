<!DOCTYPE html>
<html lang="en">
<head>
	@include('web.layouts.head')
</head>
<body class="animsition">
	
	<!-- Header -->
	<header>
		@include('web.layouts.header')
	</header>

   @include('web.layouts.cart')

		

    <div id="main-content">
            @section('main')
               @show
    </div>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>
  @include('web.layouts.quickview')
	
  @include('web.layouts.footerscript')


</body>
</html>