<div class="template-counter-style-2 section-class-scroll" style="background-image: url(images/full_2.jpg);" data-stellar-background-ratio="1">
			<div class="template-overlay"></div>
			<div class="container">
				<div class="template-section-content-wrap">
					<div class="template-section-content">
						<div class="row">
							@foreach($details as $detail)
							<div class="col-md-4 text-center wow text-center" data-wow-duration="1s" data-wow-delay=".5s">
								<div class="icon">
									<i class="icon-{{ $detail->icon }}"></i>
								</div>
								<span class="template-counter js-counter" data-from="0" data-to="{{ $detail->num }}" data-speed="5000" data-refresh-interval="50"></span>
								<span class="template-counter-label">{{ $detail->title }}</span>
								
							</div>
							
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>