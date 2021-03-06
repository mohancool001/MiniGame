@extends('layouts.master')

@section('content')
		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div id="section-about" class="container-fluid page-section clearfix">

					<div class="hero-headline bottommargin">
						<h1>Welcome to Quizzler.</h1>
						<span>This is some awesome stuff about the game. Well sure if you want to add it you can.</span>
					</div>
					@if (Auth::guest())
					<a href="{{ url('/login') }}" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-log-in"></span> Login to Proceed</a>
					@else
					<a href="{{ url('/game') }}" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-play"></span> Start Playing Now</a>					
					@endif
					<div class="line topmargin-lg bottommargin-lg"></div>

					<div id="section-rules" class="page-section">

						<h2 class="bottommargin">Rules.</h2>

						<div class="row clearfix">
							<div class="clear bottommargin-sm"></div>

							<div class="col-md-12">

								<div class="accordion accordion-border clearfix">

									<div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Rule 1</div>
									<div class="acc_content clearfix">Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</div>

									<div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Rule 2</div>
									<div class="acc_content clearfix">Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum.</div>

									<div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Rule 3</div>
									<div class="acc_content clearfix">Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.</div>

								</div>

							</div>
						</div>

					</div>

					<div class="line topmargin-lg bottommargin-lg"></div>
					<div id="section-contact" class="page-section">

					<h2 class="bottommargin">Contact</h2>

						<div class="row clearfix">
							<div class="col-md-12">
								<h4>Location</h4>

								<div style="font-size: 16px;">
									<address>
										Somewhere, Somewhere<br>
										AnnaUniversity, Chennai 95.<br>
									</address>

									<div class="clear topmargin"></div>

									<abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8144087395<br>
									<abbr title="Email Address"><strong>Email:</strong></abbr> mohanrajan1996@gmail.com
								</div>
							</div>

						</div>

					</div>

				</div>

			</div>

		</section><!-- #content end -->
@endsection