<div class="template-testimonial-style-2 section-class-scroll formulario" id="request">
	<div class="container">					

			
		
	
        <div id="mensaje" class="bg-info"></div> 
        <div class="row contacto justify-content-center" id="contactos">
            <div class="col-12 col-lg-12">
                <h2 class="titulo">Request a Partnership</h2>
                <p>If you would like to work with us and work with us to bridge a product to the US market send us a message below. </p>

<form action="{{ route('form') }}" method="post" class="formulario" role="form" id="form" enctype="multipart/form-data" >

{{ csrf_field()}}
<div class="form-group row">
    <div class="col-12 col-md-6">
        <label for="name">Name</label>
        <input type="text" name="name" id="name"  class="form-control" value="{{ old('name') }} ">
       
    </div>

    <div class="col-12 col-md-6">
    <label for="email">Email</label>
        <input type="email" name="email" id="email"  class="form-control" value="{{ old('email') }} ">
        
     </div>

    <div class="col-12 col-md-6">
    <label for="company">Company</label>
        <input type="text" name="company" id="company" class="form-control"  value="{{ old('company') }} ">
        
    </div>
</div>

<div class="form-group">
<label for="msg">Product Description</label>
 <textarea name="msg" id="msg" placeholder="Product Description" value="{{ old('msg') }} " class="form-control"></textarea>


<br>
					<br>

<label for="why">Why will we love you product?</label>
 <textarea name="why" id="why" placeholder="Why will we love you product?" value="{{ old('why') }} " class="form-control" ></textarea>
 
</div>

<div class="col-12 col-md-6 ">
<label for="imagen" class="align-content-left " >upload an image:</label>
    <input type="file" name="imagen" id="imagen">
 </div>

<div class="col-12 col-md-12 ">
    <input type="submit" value="Send" class="btn btn-primary" id="btn" >
    </div>

</form>
		
</div>														
</div>	
	</div>	
</div>