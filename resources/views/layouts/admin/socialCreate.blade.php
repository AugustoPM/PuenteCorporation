

@include('layouts/adminparts.menu')
  <div class="content-wrapper">
    <div class="container-fluid">
       <div class="col-12 justify-content-center">
     
       <div class="col-md-8">
    
    <h1 class="page-header">
        New Text
     </h1>

<form action="{{ route('social') }}" method="POST" enctype="multipart/form-data">
{!! csrf_field() !!} <!--  asi evitamos que un robot use nuestro formulario -->
{!! method_field('POST') !!}



<div class="form-group has-feedback">
<input type="text" class="form-control" id="icon" name="icon" 
placeholder="icon" value="{{ old('icon') }}">
</div>


<div class="form-group has-feedback">
<textarea class="form-control" id="text" name="text" placeholder="text">{{ old('text') }}</textarea>
</div>



<button class="form-control btn btn-primary">
Send
</button>
</form>

</div>


      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    @include('layouts/adminparts.footer')










              