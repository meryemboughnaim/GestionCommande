<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Environment\Console;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        
       if($request->product_name_s && $request->price_s){
      $products= Product::where(['labe'=>$request->product_name_s,'price'=>$request->price_s])->get();
        
       }
       elseif($request->product_name_s){
        $products= Product::where('labe',$request->product_name_s)->get();
       }
       elseif($request->price_s){
        $products= Product::where('price',$request->price_s)->get();
       }
       else{
       $products= Product::all();
       }
        return view("products.products",compact("products"));
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
        // $request->validate([
        //     'labe' => 'required|string',
        //     'price' => 'required',
        // ]);
       
        if($request->photo){
           
            $imageName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('assets/images'),$imageName);
            Product::create([
                'labe'=>$request->labe,
                'description'=>$request->description,
                'price'=>$request->price,
                'photo'=>$imageName
            ]);
            }
            else{
             
                Product::create([
                    'labe'=>$request->labe,
                    'description'=>$request->description,
                    'price'=>$request->price
                ]);
            }
        return redirect()->route('products.index')->with('msg','Product Added successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $product = Product::find($id);

        return view('products.view',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        try{
            DB::beginTransaction();
            $product = Product::findOrfail($id);
            
            DB::commit();
           
            return response()->json($product, 200);
        }catch (\Exception $e){
            DB::rollBack();
            $response['status']     = 'warning';
            $response['title']      = 'Attention';
            $response['message']    = 'Circuit doesn\'t existe ! ...';
            return response()->json($response, 500);
        }
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
        
        $product = Product::findOrfail($id);
        if($request->photo_p){

            $imageName = time().'.'.$request->photo_p->extension();
            $request->photo_p->move(public_path('assets/images'),$imageName);
            $product->update([
                'labe'=>$request->name_p,
                'description'=>$request->description_p,
                'price'=>$request->price_p,
                'photo'=>$imageName
            ]);
            }
            else{
                $product->update([
                    'labe'=>$request->name_p,
                    'description'=>$request->description_p,
                    'price'=>$request->price_p
                ]);
            }
        return redirect()->route('products.index')->with('msg','Product updated successfuly');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
