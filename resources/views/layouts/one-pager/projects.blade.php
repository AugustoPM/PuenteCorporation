

	<div class="template-project-style-2 section-class-scroll">
			<div class="container">
				<div class="row">
				
				
	        <div class="card-group">
              @foreach($teams as $team)
              <div class="card">
             
              <img class="card-img-top"  src="images/person_1.jpg" alt="">
             
              <div class="card-body">
                <h5 class="card-title">{{ $team.name }}</h5>
                <p class="card-text"><small class="text-muted">{{ $team.cargo }}</small></p>
                <p class="card-text">{{ $team.message }}</p>
              </div>
            </div>
            @endforeach
          </div>
        </div>
			</div>
	</div>