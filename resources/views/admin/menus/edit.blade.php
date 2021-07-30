@extends('layouts.admin')

@section('title')
<title>Home</title>
@endsection 

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   @include('partials.content-header',['name'=>'Menu','key'=>'Edit'])

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
      <div class="col-md-6">
         <form action="{{route('menus.update',['id'=>$menuFollowIdEdit->id])}}" method="post">
              @csrf
              <div class="form-group">
                <label>Tên Meunu</label>
                <input type="text" class="form-control" 
                name="name" placeholder="Nhập tên menu"
                value="{{$menuFollowIdEdit->name}}" 
                />                
              </div>
               <div class="form-group">
                <label>Chọn menu</label>
                <select class="form-control" name="parent_id">
                  <option value="0">Chọn menu</option>
                  <!--  -->
                  {!! $optionSelect !!}

                </select>
              </div>

              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
    




        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 @endsection 