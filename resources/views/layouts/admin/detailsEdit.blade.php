@include('layouts/adminparts.menu')
  <div class="content-wrapper">
    <div class="container-fluid">
      
      <div class="col-12 justify-content-center">
      <div class="col-md-8">
    
    <h1 class="page-header">
       Count
     </h1>

     <form action="{{ route('detail.update', $detail->id) }}" method="POST" enctype="multipart/form-data">
{!! csrf_field() !!} <!--  asi evitamos que un robot use nuestro formulario se utiliza put para poder editar el otro controlador que ya fue creado -->
{!! method_field('PUT') !!}

<div class="form-group has-feedback">
<input type="text" class="form-control" id="title" name="title" placeholder="Title " value="{{ $detail->title }}">
</div>
<div class="form-group has-feedback">
<input type="text" class="form-control" id="num" name="num" placeholder="Number" value="{{ $detail->num }}">
</div>
<div class="form-group has-feedback">
<input type="text" class="form-control" id="icon" name="icon" placeholder="icon " value="{{ $detail->icon }}">
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
