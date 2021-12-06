<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotifyAdmin;
use App\Notifications\NotifyCustomer;

class GuestController extends Controller
{
   public $product;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->product = Product::all();
    }
    public function index()
    {
        $products = $this->product;
        $uniqueProduct = Product::inRandomOrder()->get();
        return view('welcome', compact('products', 'uniqueProduct'));
    }

    public function adults(){
        $products = Product::where('category', 'adults')->get();
        return view('shop.adults', compact('products'));
    }

    public function productDetails(Product $product){
        $product = Product::findOrFail($product->id);
        return view('shop.details', compact('product'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user)
    {
        $user = auth()->user();
        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'postal' => $request->postal,
            'address' => $request->address,
            'country' => $request->country
        ]);
        // $user->first_name = $request->first_name;
        // $user->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function notifyUser()
    {
        $contact = request()->validate([
            'name' => 'required|min:3|max:15',
            'email' => 'required',
            'message' => 'required|max:500|min:5'
        ]);
        $user = new User;
        $user->name = $contact['name'];
        $user->email = $contact['email'];
        $user->message = $contact['message'];
        Mail::to("tochukwuodeme@gmail.com")->send(new NotifyAdmin($user));
        $user->notify(new NotifyCustomer($user));
        return back()->with('success', 'We will contact you shortly.');
    }

    public function dashboard()
    {
        return view('customer-dashboard.index');
    }

    public function profile()
    {
        $user = auth()->user();
        return view('customer-dashboard.profile', compact('user'));
    }

    public function orderDetails()
    {
        return view('customer-dashboard.orders-details');
    }
    
    public function gallery()
    {
        $gallery = ProductImage::inRandomOrder()->get();
        return view('gallery', compact('gallery'));
    }

    public function contact(){
        $products = $this->product;
        return view('contact', compact('products'));
    }
}
