@include('layouts/adminparts.menu')
  <div class="content-wrapper">
    <div class="container-fluid">
      
      <div class="col-12 justify-content-center">
          
      <div class="col-md-8">
    
    <h1 class="page-header">
       Our Story
         
     </h1>


<!-- <div class="alert alert-success alert-dismissible" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong>Info!</strong> 
</div> -->


   

   <a href="{{ route('Admin') }}" class="btn btn-primary">
   <i class="glyphicon glyphicon-list"></i> Back
   </a>


<hr>
<table class="table table-bordered">
<tr>
    <th>#</th>
    <th>Resume</th>
    <th>Text</th>

    
   
    <th colspan="2">Actions</th>
</tr>

@foreach($stories as $story)
                <tr>
                        <td>{{ $story->id }}</td>
                        <td>{{ $story->resume }}</td>
                        <td>{{ $story->text }}</td>
                        



                        <td>
    
                                <a href="{{ route('story.edit',$story->id) }}" class="btn btn-primary">
                                    <i class="glyphicon glyphicon-edit">Edit</i>
                                </a>
                        </td>

                </tr>


                    @endforeach


                </table>
            
        </div>
    </div>      
</div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    @include('layouts/adminparts.footer')
