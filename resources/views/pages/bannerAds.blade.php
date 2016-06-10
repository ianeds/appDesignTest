@extends ('layout')

@section ('main')
<div id="workPages">
	<div class="container">
		<div class="workItems">
			<span>
			Banner ads for AT&T
			</span>
			
			<div class="workImage bannerAds">
				<img class="" src="images/160x600_template.png">
			</div> <!-- end .workImages -->

			<div class="workImage bannerAds">
				<img class="" src="images/485x220_template.png">
			</div> <!-- end .workImages -->

			<div class="workImage bannerAds">
				<img class="" src="images/300x250_template.png">
			</div> <!-- end .workImages -->

			</div> <!-- end .workItem -->

		</div> <!-- end .container -->

	</div> <!-- end £workPages -->

@stop

@section ('footer')
<footer>
	<div class="footerContainer">
		<div class="footerBtn">
			<a href='/search'><img src="images/previous_btn.png" width="70" height="70"></a>
			<a href='/'><img src="images/goback_btn.png" width="70" height="70"></a>
			<a href='/posters'><img src="images/seemore_btn.png" width="70" height="70"></a>
		</div> <!-- end .footerBtn -->
	</div> <!-- end .footerContainer -->
</footer>
@stop
