<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products= Product::all();
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
        return redirect()->route('products.index');
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
        //
        $user = Product::findOrfail($id);
        $user->update([
            'labe'  =>  $request->name_p,
            'description'  =>  $request->description_p,
            'price'  =>  $request->price_p,
        ]);
        return  redirect()->route('products.index');

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
