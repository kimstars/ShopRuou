<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;
use App\Components\Recusive;

class CategoryController extends Controller
{
    private $category;
    public function __construct(Category $category)
    {
        $this->category =$category;
    }

    public function create()
    {
    
       $htmlOption=$this->getCategpory(0);
       return view('admin.category.add',compact('htmlOption'));
    }

    

    public function index()
    {
        $categories = $this->category->latest()->paginate(5);
        return view('admin.category.index',compact('categories'));
    }
    public function store(Request $request)
    {
        $this->category->create([
            'name'=> $request->name,
            'parent_id'=>$request->parent_id,
            'slug' => $request->name
        ]);
        return redirect()->route('categories.index');
    }

    public function getCategpory($parentId)
    {
         $data = $this->category->all();
        $recursive = new Recusive($data);

       $htmlOption= $recursive->categoryRecusive($parentId);
       return $htmlOption;
    }

    public function edit($id)
    {
        $category =$this->category->find($id);
        $htmlOption =$this->getCategpory($category->parent_id);
       
        return view('admin.category.edit',compact('category', 'htmlOption'));
    }

    public function update($id,Request $request)
    {
          $this->category->find($id)->update([
            'name'=> $request->name,
            'parent_id'=>$request->parent_id,
            'slug' => $request->name
          ]);    

          return redirect()->route('categories.index');  
    }
    public function delete($id)
    {
        $this->category->find($id)->delete();
        return redirect()->route('categories.index');
    }

}
