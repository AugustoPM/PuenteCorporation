<div class="container" id="products" >
				<div class="row justify-content-center">
					<div class="col-md-6 col-md-offset-3 text-center">
						<h2 class="cd-headline slide">
							<span>Our </span>
							<span class="cd-words-wrapper"><b class="is-visible">Products</b></span>
						</h2>
					</div>
				</div>
</div>

<?php $i = 0 ?>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
  @foreach ($products as $product)
  
  
    
    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $i }}" @if($product->id === 1) class="active" @endif></li>
    
    <?php $i++ ?>
    @endforeach
  </ol>
  <div class="carousel-inner">
    
    <?php $i=0 ?>
    @foreach($products as $product)
    <?php $i++ ?>
 
  <div  @if($product->id === 1) class="carousel-item active" @else class="carousel-item" @endif>
      <img class="d-block w-100" src="images/{{$product->img}}" alt="{{ $i }} slide">
    </div>
    
    
    
    @endforeach
    
    
  </div>
</div>