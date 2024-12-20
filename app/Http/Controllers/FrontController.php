<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use App\Models\Page;
use App\Models\Product;
use App\Models\User;
use App\Models\WishList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Gloudemans\Shoppingcart\Facades\Cart;
class FrontController extends Controller
{
    public function index()
    {

       

        session(['url.intended' => url()->previous()]);
        $featuredProducts = Product::where('is_featured','Yes')->orderBy('id','DESC')->where('status',1)->take(4)->get();
        $latestProducts = Product::orderBy('id','DESC')->where('status',1)->take(8)->get();
        return view('front.home',compact('featuredProducts','latestProducts'));
    }

    public function layout()
    {

       

        session(['url.intended' => url()->previous()]);
        $featuredProducts = Product::where('is_featured','Yes')->orderBy('id','DESC')->where('status',1)->take(4)->get();
        $latestProducts = Product::orderBy('id','DESC')->where('status',1)->take(8)->get();
        return view('front.layouts.app',compact('featuredProducts','latestProducts'));
    }
    public function addToWishList(Request $request){
        if (Auth::check() == false){

            session(['url.intended' => url()->previous()]);

            return response()->json([
                'status' => false,
            ]);
        }

        $product = Product::where('id',$request->id)->first();

        if ($product == null) {
            return response()->json([
                'status' => true,
                'message' => '<div class="alert alert-danger"><strong>'.$product->title.'</strong> not Found.</div>'
            ]);
        }

        WishList::updateOrCreate(
            [
                'user_id' => Auth::user()->id,
                'product_id' => $request->id,
            ],
            [
                'user_id' => Auth::user()->id,
                'product_id' => $request->id,
            ],
        );

        return response()->json([
            'status' => true,
            'message' => '<div class="alert alert-success"><strong>'.$product->title.'</strong> added in Your Wishlist.</div>'
        ]);
    }


    public function page($slug){
        $page = Page::where('slug',$slug)->first();
        if ($page == null) {
            abort(404);
        }
        return view('front.page',compact('page'));
    }


    public function sendContactEmail(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => ['required','max:190'],
            'email' => ['required','email'],
            'subject' => ['required','max:190'],
            'message' => ['required','max:600'],
        ]);

        if($validator->passes()){

            #send mail here
            $mailData = [
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
            ];

            $admin = User::where('id',2)->first();
            Mail::to($admin->email)->send(new ContactEmail($mailData));

            session()->flash('success','Thanks for contacting us, we will back to you soon.');
            return response()->json([
                'status' => true,
            ]);


        } else {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
            ]);
        }
    }
}