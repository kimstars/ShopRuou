<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Components\Recusive;
use App\Category;
use Storage;
use App\Traits\StorageImageTrait;
class AdminProductController extends Controller
{
    use StorageImageTrait;
    private $category;
    public function __construct(Category $category)
    {
        $this->category= $category;
    }
    public function index()
    {
        return view('admin.product.index');
    }
    public function create()
    {
        $htmlOption=$this->getCategpory($parentId='');
        return view('admin.product.add',compact('htmlOption'));   
    }
     public function getCategpory($parentId)
    {
         $data = $this->category->all();
        $recursive = new Recusive($data);

       $htmlOption= $recursive->categoryRecusive($parentId);
       return $htmlOption;
    }
    public function store(Request $request)
    {
        $dataUpload = $this->storageTraitUpload($request,'feature_img_path','product');
        
        dd($dataUpload);
    }

}
