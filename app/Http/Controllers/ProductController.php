<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required|max:20|min:3',
            'category' => 'required',
            'size' => 'required',
            'stock' => 'required',
            'color' => 'required',
            'price' => 'required|max:20|min:3',
            'discounted' => 'required|max:20|min:3',
            'description' => 'required|max:500|min:5',
            'product_image' => 'required',
        ]);

            if($request->hasFile('product_image')) {
                $product = Product::create([
                    'title' => $validate['title'],
                    'description' => $validate['description'],
                    'category' => $validate['category'],
                    'stock' => $validate['stock'],
                    'color' => implode(',', $validate['color']),
                    'discounted' => $validate['discounted'],
                    'size' => implode(',', $validate['size']),
                    'price' => $validate['price']
                ]);

                foreach($request->file('product_image') as $image) {
                    $destinationPath = public_path('product_images/'.$validate['category']);
                    $filename = $validate['category'].time().$image->getClientOriginalName();
                    $image->move($destinationPath, $filename);
    
                    $productImage = new ProductImage([
                        'image_file' => $filename,
                        'category' => $validate['category']
                    ]);
                    $product->images()->save($productImage);
                }

                return back()->with('success', ucwords($validate['title']).' have been added to stock.');
            }
        
            return back()->with('error', 'Something went wrong. Try again!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $product = Product::findOrFail($product->id);
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product = Product::findOrFail($product->id);
        // $product = $request->validate([
        //     'title' => 'required|max:20|min:3',
        //     'category' => 'required',
        //     'model' => 'required|max:50|min:3',
        //     'version' => 'required|max:50|min:3',
        //     'manufacturer' => 'required|max:50|min:3',
        //     'price' => 'required|max:20|min:3',
        //     'description' => 'required|max:500|min:5',
        //     'status' => 'required'
        // ]);
        
        $product->title = $request->get('title');
        $product->category = $request->get('category');
        $product->stock = $request->get('stock');
        $product->size = implode(',', $request->get('size'));
        $product->color = implode(',', $request->get('color'));
        $product->price = $request->get('price');
        $product->discounted = $request->get('discounted');
        $product->description = $request->get('description');
        $product->save();
        
        if($request->hasFile('image_file')) {
            foreach($request->file('image_file') as $image) {
                $destinationPath = public_path('product_images/'.$request->category);
                $filename = $request->product_id.time().$image->getClientOriginalName();
                $image->move($destinationPath, $filename);

                ProductImage::create([
                    'product_id' => $product->id,
                    'image_file' => $filename,
                    'category' => $product->category
                ]);
                // $image->save($images);
            }
        }

        return back()->with('success', ucwords($product->title).' have been updated.');
    }

    public function updateImage(Request $request){
        $projectImage = ProductImage::where('id', $request->id)->first();
        
        $this->validate($request, [
            'image_file' => 'required|image|mimes:jpeg,png,jpg|max:10000'
        ]);

        $getImage = public_path('product_images/'.$request->category.'/'.$projectImage->image_file);
       // dd($getImage);
            if (File::exists($getImage)) {
                File::delete($getImage);
            }
            
        $image = $request->file('image_file');
        if(!empty($image)){
            $destinationPath = public_path('product_images/'.$request->category);
            $filename = $projectImage->category.time().$image->getClientOriginalName();
            $image->move($destinationPath, $filename);
            $projectImage->update([
                'image_file'   => $filename,
            ]);
            
        }
        return back()->with('success', 'Image updated successfully.');
    }

    public function uploadMoreProductImage(Request $request){
        
        $request->validate([
            'product_id' => 'required',
            'category' => 'required',

        ]);
        // dd("hello");
        if($request->hasFile('more_image_file')) {
            foreach($request->file('more_image_file') as $image) {
                $destinationPath = public_path('product_images/'.$request->category);
                $filename = $request->product_id.time().$image->getClientOriginalName();
                $image->move($destinationPath, $filename);

                ProductImage::create([
                    'product_id' => $request->product_id,
                    'image_file' => $filename,
                    'category' => $request->category,
                ]);
                // $image->save($images);
            }
            return back()->with('success', 'Project Images was successfully added.');
        }
        return back()->with('success', 'Project Images was NOT successfully added.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function deleteProduct(Request $request, $id)
    {
        $getProduct = Product::findOrFail($id);
        if ($getProduct->images) {
        foreach($getProduct->images as $image){
            //  dd($image);
            $image_path = public_path('/product_images/'.$getProduct->category.'/'.$image->image_file);
            
            if(File::exists($image_path)) {
                File::delete($image_path);
            }
            $image->delete();
            }
            $getProduct->delete();
            return back()->with('success', 'Product was successfully deleted.');
        }
        
        return back()->with('error', 'Something went wrong...');
    }
}
