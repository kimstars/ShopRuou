@extends('layouts.admin')

@section('title')
<title>Home</title>
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
              <a href="{{route('menus.create')}}" class="btn btn-success float-right m-2">Thêm</a>
          </div>
         
       <div class="col-md-12">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên Menu</th>
                    <th scope="col">Action</th>
                    
                  </tr>
                </thead>
                <tbody>
                 <!--  -->
                 @foreach($menus as $menu )

                  <tr>
                    <th scope="row">{{$menu->id}}</th>
                    <td>{{$menu->name}}</td>
                    <td>
                      <a href="{{route('menus.edit',['id'=>$menu->id])}}" class="btn btn-default">Sửa</a>
                      <a href="{{route('menus.delete',['id'=>$menu->id])}}" class="btn btn-danger">Xóa</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
          </div>

       <div class="col-md-12">
        
          {{$menus->links()}}
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