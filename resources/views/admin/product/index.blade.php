@extends('layouts.admin')

@section('title')
<title>Add Product</title>
@endsection 

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  @include('partials.content-header',['name'=>'menu','key'=>'List'])

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
              <a href="{{route('product.create')}}" class="btn btn-success float-right m-2">Thêm</a>
          </div>
         
       <div class="col-md-12">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên Rượu</th>
                    <th scope="col">Giá tiền</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Loại Rượu</th>
                    <th scope="col">Action</th>
                    
                  </tr>
                </thead>
                <tbody>
                 <!--  -->
                <tr>
                  <th></th>
                  <td></td>
                  <td></td>
                  <td>
                    <img src="" alt="">
                  </td>
                  <td></td>
                  <td>
                    <a href="" class="btn btn-primary">sửa</a>
                    <a href="" class="btn btn-danger">xóa</a>
                  </td>

                </tr>

                </tbody>
              </table>
          </div>

       <div class="col-md-12">
        
         
        <!--  -->
       </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 @endsection 