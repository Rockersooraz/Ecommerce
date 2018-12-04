
            
@extends('admin.layout.app') 
@section('headSection')
<link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection


@section('main-section')

   <div class="box">
            <div class="box-header">
              <h3 class="box-title">Available Categories</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                    <thead>
                <tr>
                  <th>id</th>
                  <th>First-Name</th>
                  <th>Last-Name</th>
                  <th>Email</th>
                 
                </tr>
                </thead>
                     
               @foreach($user as $user)
                <tbody>
                <tr>

                  <td>{{$user->id}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->lastname}}</td>
                  <td>{{$user->email}}</td>
                  
                </tr>
           
              
                 @endforeach
              </table>

              
               
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

@endsection


@section('footerSection')

 <script src="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
 <script src="{{asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
 <script>
  $(function () {
    $('#example1').DataTable()
   
  })
</script>


@endsection




