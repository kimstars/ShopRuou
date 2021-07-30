@extends('layouts.admin')

@section('title')
<title>Home</title>
@endsection 

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

   @include('partials.content-header',['name'=>'Home','key'=>'Home'])

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
              <a href="{{route('categories.create')}}" class="btn btn-success float-right m-2">Thêm</a>
          </div>
           <div class="col-md-12">
             Trang Chu
          </div>
       


        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 @endsection 