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
            // 'color' => 'max:20|min:3',
            'price' => 'required|max:20|min:3',
            'description' => 'required|max:500|min:5',
            'product_image' => 'required',
            //'product_image.*' => 'image|mimes:jpeg,png,jpg|max:10000'
        ]);
        //$validate['product_image'] = json_encode($validate['product_image']);
            //  dd($validate);
             //dd($validate['product_image']);
            if($request->hasFile('product_image')) {
                $product = Product::create([
                    'title' => $validate['title'],
                    'category' => $validate['category'],
                    'size' => $validate['size'],
                    // 'color' => $validate['color'],
                    'price' => $validate['price'],
                    'description' => $validate['description']
                ]);
                foreach($request->file('product_image') as $image) {
                    $destinationPath = 'product_images/'.$validate['category'];
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
        $product->size = $request->get('size');
        $product->color = $request->get('color');
        $product->price = $request->get('price');
        $product->description = $request->get('description');
        $product->save();
        
        if($request->hasFile('image_file')) {
            foreach($request->file('image_file') as $image) {
                $destinationPath = 'product_images/'.$request->category;
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

        $getImage = 'product_images/'.$request->category.'/'.$projectImage->image_file;
       // dd($getImage);
            if (File::exists($getImage)) {
                File::delete($getImage);
            }
            
        $image = $request->file('image_file');
        if(!empty($image)){
            $destinationPath = 'product_images/'.$request->category;
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
        if($request->hasFile('image_file')) {
            foreach($request->file('image_file') as $image) {
                $destinationPath = 'product_images/'.$request->category;
                $filename = $request->product_id.time().$image->getClientOriginalName();
                $image->move($destinationPath, $filename);

                ProjectImage::create([
                    'product_id' => $request->product_id,
                    'image_file' => $filename
                ]);
                // $image->save($images);
            }
        }
        return back()->with('success', 'Project Images was successfully added.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
