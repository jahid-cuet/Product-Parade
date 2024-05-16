<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Category::all();
        $posts=Category::orderBy('created_at','asc')->paginate(2);
        return view('layouts.Product_Explorer')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $arr=[
            "categories"=>$categories
        ];
        return view('layouts.create_product', $arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{

    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'category_id' => 'required|exists:categories,id',
        'description' => 'required|string',
        'price' => 'required|numeric|between:0.01,999999.99',
        'image' => 'nullable|image|max:2048', // Assuming you're allowing only image files and maximum size is 2MB
    ]);


    $imageName=time().'.'.$request->image->extension();
    $request->image->move(public_path('pro'),$imageName);
    // Store the product
    $product = new Product();
    $product->name = $validatedData['name'];
    $product->category_id = $validatedData['category_id'];
    $product->description = $validatedData['description'];
    $product->price = $validatedData['price'];
    $product->image=$imageName;
    
    // if ($request->hasFile('image')) {
    //     $imagePath = $request->file('image')->store('product_images');
    //     $product->image = $imagePath;
    // }

    $product->save();

    // return view('layouts.success');
    return back()->withSuccess('Product Created!!!!!');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category_id = Category::find($id);
        //  return view('layouts.show',compact('posts'));
        $posts = $category_id->products()->orderBy('created_at', 'asc')->paginate(1); // Change 10 to the desired number of posts per page
    
        return view('layouts.show',compact('posts'));
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pro=Product::where('id',$id)->first();
        return view('layouts.edit',['product'=>$pro]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            // 'category_id' => 'required|exists:categories,id',
            'description' => 'required|string',
            'price' => 'required|numeric|between:0.01,999999.99',
            'image' => 'nullable|image|max:2048', // Assuming you're allowing only image files and maximum size is 2MB
        ]);
$product=Product::where('id',$id)->first();
if(isset($request->image)){
$imageName=time().'.'.$request->image->extension();
$request->image->move(public_path('pro'),$imageName);
$product->image=$imageName;

}

$product->name=$request->name;
$product->price=$request->price;
$product->description=$request->description;
$product->save();
return back()->withSuccess('Product Updated!!!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
    public function Delete($id)
    {
    
            $pro=Product::find($id);
            if(!is_null($pro)){
                $pro->delete();
            }
            return back()->withSuccess('Product Deleted Successfully!!!!!');
        
    }
}
