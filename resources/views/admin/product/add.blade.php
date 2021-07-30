@extends('layouts.admin')

@section('title')
<title>add product</title>
@endsection 

@section('css')
<link href="{{asset('vendor/select2.min.css')}}" rel="stylesheet" />
@endsection 


@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   @include('partials.content-header',['name'=>'product','key'=>'Add'])

    <!-- Main content -->
     <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
    <div class="content">
      <div class="container-fluid">
        <div class="row">
      <div class="col-md-6">
        
              @csrf
              <div class="form-group">
                <label>Tên rượu</label>
                <input type="text" class="form-control" 
                name="name" placeholder="Nhập tên rượu"/>               
              </div>
              <div class="form-group">
                <label>Giá tiền</label>
                <input type="text" class="form-control" 
                name="price" placeholder="Nhập Giá tiền"/>             
              </div>
               <div class="form-group">
                <label>Ảnh đại diện sản phẩm</label>
                <input type="file" class="form-control-file" 
                name="feature_img_path" />             
              </div>
               
               <div class="form-group">
                <label>Ảnh chi tiết sản phẩm</label>
                <input type="file" class="form-control-file" 
                name="image_path[]" />             
              </div>
               <div class="form-group">
                <label>Chọn loại rượu</label>
                <select class="form-control select2_init" name="parent_id">
                  <option value="0">Chọn loại rượu</option>
                  {!! $htmlOption !!}
                </select>
              </div>

              <div class="form-group">
                 <label>Nhập tags cho sản phẩm</label>
              <select name="tags[]" class="form-control tags_select_choose"  multiple="multiple">
               
              </select>
              </div>
              
              </div>
            
          </div>
    




        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
      <div class="col-md-12">
        <div class="form-group">
                <label>Nhập nội dung</label>
                <textarea class="form-control tinymce_editor_init" 
                name="content" rows="12"></textarea>             
        </div>
             
      </div>


     <button type="submit" class="btn btn-primary">Submit</button>
   </form>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 @endsection 


@section('js')

  



<script src="{{asset('vendor/select2.min.js')}}"></script>
<script>
  $(function () {
    $(".tags_select_choose").select2({
        tags: true,
        tokenSeparators: [',', ' ']
      });
    $(".select2_init").select2({
         placeholder: "Chọn loại rượu",
         allowClear: true
      });
    select2_init
  })
</script>


<script src="{{asset('vendor/add.js')}}"></script>
<script src="https://cdn.tiny.cloud/1/od7s0qtcimrs9ife306mlwk9ba0tepikzsmxwpj9vcjsjv00/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@endsection 
