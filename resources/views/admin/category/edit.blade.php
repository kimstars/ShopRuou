@extends('layouts.admin')

@section('title')
<title>Home</title>
@endsection 

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   @include('partials.content-header',['name'=>'category','key'=>'edit'])

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
      <div class="col-md-6">
         <form action="{{route('categories.update',['id'=>$category->id])}}" method="post">
              @csrf
              <div class="form-group">
                <label>Tên loại rượu</label>
                <input type="text" class="form-control" 
                name="name" 
                value="{{$category->name}}" 

                placeholder="Nhập tên loại rượu"/>                
              </div>
               <div class="form-group">
                <label>Chọn loại rượu</label>
                <select class="form-control" name="parent_id">
                  <option value="0">Chọn loại rượu</option>
                  {!! $htmlOption !!}
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