<div class="template-features-style-2 section-class-scroll d-flex justify-content-center" id="social" >
			<div class="container ">
				<div class="row p-b d-flex justify-content-center">
					<div class="col-md-6 col-md-offset-3 text-center">
						<h2 class="template-heading wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">Social Entrepreneurship</h2>
						<p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">At Puente Corporation we believe a business’s success is not measured by it profit, but by its social impact.</p>
					</div>
				</div>
				<div class="row">
					<?php $i = 1?>
					@foreach($socials as $social)
					<div class="col-md-4 col-sm-6 col-xs-12 col-xxs-12 template-feature wow fadeInUp equalize" data-wow-duration="1s" data-wow-delay=".{{ $i }}s">
						<div class="template-icon"><i class="icon-{{ $social->icon}}"></i></div>
						<div class="template-desc">
							<h3><span> </span></h3>
							{!!html_entity_decode($social->text)!!}
						</div>	
					</div>
					<?php $i++ ?>
					@endforeach
				<div class="clearfix visible-sm-block visible-xs-block"></div>
				</div>
			</div>
		</div>