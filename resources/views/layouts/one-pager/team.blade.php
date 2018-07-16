
<div class="template-blog-style-1 section-class-scroll" id="team" >
  <div class="container"id="team">
    <div class="row justify-content-center">
      <div class="col-12 justify-content-center text-center">
        <h2 class="template-heading wow cd-headline slide" data-wow-duration="1s" data-wow-delay=".5s">
							<span>Our </span>
							<span class="cd-words-wrapper"><b class="is-visible">Team</b></span>
				</h2>
        <p class="wow" data-wow-duration="1s" data-wow-delay=".8s">Most companies would give your the management team’s academic and work history. While our CVs might impress you (hopefully) that is not our style. Here is the truth about the team that runs Puente Corporation.</p>
      </div>
    </div>
    <div class="row">
      
      @foreach($teams as $team)
        <div class="card col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 wow fadeInLeft">
          <img class="card-img-top" src="images/{{ $team->img}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">{{ $team->name }}</h5>
            <p class="card-text">{{ $team->message }}</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">{{ $team->cargo }}</small>
          </div>
        </div> 
        @endforeach
      
    </div>
  </div>
</div>






























<!--




<div class="template-blog-style-1 section-class-scroll" id="team" >
  <div class="container">
    <div class="row p-b d-flex justify-content-center">
      <div class="col-md-6 col-md-offset-3 text-center">
        <h2 class="template-heading wow" data-wow-duration="1s" data-wow-delay=".5s">Our Management Team</h2>
        <p class="wow" data-wow-duration="1s" data-wow-delay=".8s">Most companies would give your the management team’s academic and work history. While our CVs might impress you (hopefully) that is not our style. Here is the truth about the team that runs Puente Corporation.</p>
      </div>
    </div>
     <div class="row p-b">
      
    @foreach($teams as $team)
    
    <div class="col-md-4 col-sm-12 col-lg-4 col-12 col-xl-4 card">
        <div class="template-post wow fadeInLeft"  data-wow-duration="1s" data-wow-delay=".1s">
          <div class="template-post-image">
            <div class="template-overlay"></div>	
            <div class="template-category"><a href="#">{{ $team->name }}</a></div>	
            <img src="images/img_same_dimension_2.jpg" alt="Image" class="img-responsive img-fluid">
          </div>
          <div class="template-post-text">
            <h3><a href="#">{{ $team->cargo }}</a></h3>
            <p>{{ $team->message }}</p>
          </div>
        </div>
    </div>
   
    @endforeach
    </div>
    </div>

    
    
    
  </div>
</div>--> 