@include('layouts/adminparts.menu')
  <div class="content-wrapper">
    <div class="container-fluid">
      
      <div class="col-12 justify-content-center">
      <div class="col-md-8">
    
    <h1 class="page-header">
    Social  Entrepreneurship
     </h1>

     <form action="{{ route('social.update', $social->id) }}" method="POST" enctype="multipart/form-data">
{!! csrf_field() !!} <!--  asi evitamos que un robot use nuestro formulario se utiliza put para poder editar el otro controlador que ya fue creado -->
{!! method_field('PUT') !!}

<div class="form-group has-feedback">
<input type="text" class="form-control" id="icon" name="icon" placeholder="icon" value="{{ $social->icon }}">
</div>



<div class="form-group has-feedback">
<textarea class="form-control" id="text" name="text" >{{ $social->text }}</textarea>
</div>



<button class="form-control btn btn-warning">
Save
</button>
</form>
      </div>
      
      
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    @include('layouts/adminparts.footer')
