<!-- preloader -->
<div class="preloader-container">
		<div class="la-ball-triangle-path la-2x">
			<div></div>
			<div></div>
			<div></div>
		</div>
	</div>
	
	<div id="template-page">
                  
                  
	   <header class="header  template-nav-style-1">
	<nav class="navbar navbar-expand-lg  ">
                    <div class="logo">
                        
                    <a class="navbar-brand logo-wrap" href="#">
                        <img src="images/Logopc4.png" alt="Logo" width="300em" class="d-inline-block align-top">
                        
                        </a>
                    
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" width="500px">
                           <h2><span class="icon-menu" ></span></h2>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end float-right" id="navbarNav">
                      <ul class="navbar-nav ">
                        <li class="nav-item active">
                          <a class="nav-link" href="#story">Our Story</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#products">Our Products</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#team">Our Team</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#work">How We Work</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#social">Our Community</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#request">Request a Partnership</a>
                        </li>
												@if(Auth::check())
                    <li class="dropdown"><a href="" class="dropdown-toggle nav-item-child nav-item-hover" data-toggle="dropdown"
                            role="button"
                            aria-expanded="false"
                            aria-haspopup="true">
                            {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}" onclick="
                                    event.preventDefault();
                                    document.getElementById('logout-form').submit();">Logout</a>
                                    <form action="{{ route('logout') }}" id="logout-form" method="post">
                                    {!! csrf_field() !!}
                                    </form>
                                </li>
                                <li>
                                    <a href="{{ route('Admin') }}" >Admin</a>
                                    
                                </li>
                                @endif
                      </ul>
                    </div>
                  </nav>
    </header>
		<div class="template-cover template-cover-style-2 js-full-height section-class-scroll" data-stellar-background-ratio="0.5" data-next="yes"  style="background-image: url(images/full_1.jpg);">
		  	<span class="scroll-btn wow" data-wow-duration="1s" data-wow-delay="1.4s">
				<a href="#">
					<span class="mouse"><span></span></span>
				</a>
			</span>
			<div class="template-overlay"></div>
			<div class="template-cover-text">
				<div class="container">
					<div class="row float-right">
						<div class="col-lg-push-6 col-md-push-4 col-sm-push-0 col-md-6 full-height js-full-height">
							<div class="template-cover-intro">
							
								<h2 class="cd-headline hero-headline letters rotate-3">
									<span class="cd-words-wrapper"><b class="is-visible">{{ $header[0]->title1 }}</b><b>{{ $header[0]->title2 }}</b><b>{{ $header[0]->title3 }}</b></span>
								</h2>
					
								<h2 class="cover-text-lead-off wow" data-wow-duration="1s" data-wow-delay=".5s">
									<span class="relative fifth-border colored-lable-2 wow color-white" data-wow-duration="1s" data-wow-delay=".5s">{{ $header[0]->subtitle1 }}<span class="tape-white color-white"></span></span><span class="relative fifth-border colored-lable-2 wow fadeInUp  color-third" data-wow-duration="1.2s" data-wow-delay=".6s">{{ $header[0]->subtitle2 }}<span class="tape-white color-white"></span></span><span class="relative fifth-border colored-lable-2 wow fadeInUp  color-white" data-wow-duration="1.4s" data-wow-delay=".7s">{{ $header[0]->subtitle3 }}</span>
								</h2>
								<h2 class="cover-text-sublead wow" data-wow-duration="1s" data-wow-delay=".8s">{{ $header[0]->desc }}</h2>
								<p class="wow" data-wow-duration="1s" data-wow-delay="1.1s"><a href="#work" class="btn btn-primary btn-outline btn-lg">See Our Work</a></p>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>