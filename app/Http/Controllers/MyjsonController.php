<?php

namespace App\Http\Controllers;
use App\Group;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MyjsonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    
     
        
        
        
        
 $group = new Group([
            'groups' =>  json_encode($request->show )
         
        ]);
        
        
        
        
          $user = Auth::user();
         
          return     $user->id;  //$user::find();
              
              //->roles()->orderBy('description')->withCount('role')->get();
        
        
 
        $id = DB::table('groups')->insertGetId(
    ['groups' =>  json_encode($request->show )]
);
        
        return $id;
       // $group->save();   
        
    $array = Group::whereJsonContains('groups->name', 'User 1')->get();
       // var_dump(json_decode($array));
   // $get_result_arr = json_decode($array, true);

 return response()->json([  $array[0]->groups]);
        
        
        dd('');
       return array_pluck($array, 'groups->name');
        
   return response()->json([
            'message' =>$request->show
        ], 201);
   
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
