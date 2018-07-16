<div class="template-features-style-1 section-class-scroll" style="background-image: url(images/full_4.jpg);" data-stellar-background-ratio="1" data-stellar-vertical-offset="0">
			<div class="template-overlay"></div>
			<div class="container" style="z-index: 3; position: relative;">
				<div class="row p-b d-flex justify-content-center">
					<div class="col-md-8 col-md-offset-2 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s" id="work">
						<h2 class="cd-headline letters rotate-3">
							<span>How We Work</span>
							<span class="cd-words-wrapper"><b class="is-visible">strategy</b><b>identity</b><b>design</b></span>
						</h2>
					</div>
				</div>
				<div class="row">
					<div class="template-features">
					@foreach($works as $work)


						<div class="template-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">					
							<div class="icon"><i class="icon-{{ $work->icon }}"></i></div>
							<h3>{{ $work->title}}</h3>
							{!!html_entity_decode($work->text)!!}
						</div>
						
						@endforeach

					</div>
				</div>
			</div>
		</div>