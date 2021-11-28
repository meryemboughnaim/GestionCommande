<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $user= User::find(Auth()->user()->id);
        
        return view('profil.profil',compact('user'));
        
       
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
       
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
            $users = User::findOrfail($id);
            DB::commit();
            return response()->json($users, 200);
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
        DB::beginTransaction();
           
                $user = User::findOrfail($id);
                if($request->photo){
                    
            $imageName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('assets/images'),$imageName);
                $user->update([
                    'name'  =>  $request->name,
                    'email'  =>  $request->email,
                    'phone'  =>  $request->phone,
                    'photo' =>$imageName,
                    'adresse'  =>  $request->adresse,
                ]);}
                else{
                    $user->update([
                        'name'  =>  $request->name,
                        'email'  =>  $request->email,
                        'phone'  =>  $request->phone,
                        'adresse'  =>  $request->adresse,
                    ]);
                }
                DB::commit();
            // }
            $response['status']     = 'success';
            $response['title']      = 'Succès';
            $response['message']    = 'User updated successfully! ...';
        return  redirect()->route('profil.index')->with('notification',$response);

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
