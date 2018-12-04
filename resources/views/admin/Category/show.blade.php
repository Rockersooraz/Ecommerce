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
                  <th>title</th>
                  <th>slug</th>
                  <th>Edit</th>
                  <th>Delete</th>
                 
                </tr>
                </thead>
                     
               @foreach ($category as $c)
                <tbody>
                <tr>

                  <td>{{$c->id}}</td>
                  <td>{{$c->title}}</td>
                  <td>{{$c->slug}}</td>
                   <td><a href="{{route('category.edit',$c->id)}}"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <td>
                    <form id="delete-form-{{$c->id}}" method="post" action="{{route('category.destroy',$c->id)}}" style="display: none;">
                      {{csrf_field()}}
                      {{method_field('Delete')}}
                    </form>

                    <a onclick="
                    if(confirm('You are about to delete'))
                      {
                        event.preventDefault(); document.getElementById('delete-form-{{$c->id}}').submit();
                      }
                      else
                        {
                          event.preventDefault();
                        }">
                        <span class="glyphicon glyphicon-trash"></span></a></td>
                
               
                </tr> 
                 
                
                </tr>
           
               
                </tfoot>
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

