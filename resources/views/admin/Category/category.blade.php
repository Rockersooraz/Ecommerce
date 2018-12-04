@extends('admin.layout.app')

@section('main-section')
   
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-left: 10px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Create Category
       
      </h1>
      
    </section>


<!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">

         
            <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Titles</h3>
            </div>
            @include('includes.messages')
            <!-- /.box-header -->
            <!-- form start -->

           <form action="{{ route('category.store')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
             
              <div class="box-body">


             <div class="col-lg-offset-3 col-lg-6">
                
    
                <div class="form-group">
                  <label for="Category-Title"> Category-Title</label>
                  <input type="Text" class="form-control"  name="title" placeholder="Enter Category-Title">
                </div>
  

  
                <div class="form-group">
                  <label for="Category-Slug"> Category-Slug</label>
                  <input type="Text" class="form-control"  name="slug" placeholder="Enter Category-slug">
                </div>

           

              <!-- /.box-body -->

              <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-warning" href="{{route('category.index')}}"><i class="fa fa-arrow-left"></i>Back</a>
              </div>
            </form>
          </div>
          <!-- /.box -->

          </div>
          
            </div>

       

        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection














{{-- 
<form action="{{ route('category.store')}}" method="post" enctype="multipart/form-data">
  {{csrf_field()}}
  <fieldset>
  
    <div class="form-group">
      <label for="Inputcategory">Category</label>
      <input type="text" class="form-control" name="title"  placeholder="Enter category"><br>
    </div>

        <div class="form-group">
                  <label for="Category-Slug"> Category-Slug</label>
                  <input type="Text" class="form-control" id="slug" name="slug" placeholder="Enter Category-slug">
                </div>
    
   
 <button type="submit" class="btn btn-primary">Submit</button>
 

  </fieldset>
</form> --}}