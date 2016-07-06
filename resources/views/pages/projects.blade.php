@extends ('layout')

@section ('main')
<div id="workPages">
	<div class="container">
		<div class="workItems">
			<span>
			Illustration and Design Projects
			</span>

			<div class="flexslider workImage marks">
				<ul class="slides">
		        	<li><img class="" src="images/triptych_1_700x540.png"></li>
		        	<li><img class="" src="images/triptych_3_700x540.png"></li>
		        	<li><img class="" src="images/triptych_2_700x540.png"></li>
		    	</ul>
	    	</div> <!-- end .flexslider -->

			<div class="workImage marks">
				<img class="" src="images/block_design_pre.png">
			</div> <!-- end .workImages -->

			<div class="workImage marks">
				<img class="" src="images/blauw-kruis_700x540.png">
			</div> <!-- end .workImages -->



			</div> <!-- end .workItem -->

		</div> <!-- end .container -->

	</div> <!-- end £workPages -->

@stop

@section ('footer')
<footer>
	<div class="footerContainer">
		<div class="footerBtn">
			<a href='/' class="goback"></a>
			<a href='/type' class="seemore"></a>
		</div> <!-- end .footerBtn -->
	</div> <!-- end .footerContainer -->
</footer>
@stop
