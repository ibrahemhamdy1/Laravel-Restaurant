<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
class MenusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }


    public function index()
    {
        $menus =Menu::paginate(4);
        return  view('Menus/Menus',compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view("Menus/create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();
        if(isset($input['image'])){
                $input['image']=$this->upload($input['image']);
        }else{
                $input['image']='imges/default.jpg';
        }
        $input['user_id']= \Auth::user()->id;
        $menu= Menu::create($input);
        return view("Menus.Edit",compact("menu"));
    }
    public function upload($file){
        $extension =$file->getClientOriginalExtension();
        $sha1 =sha1($file->getClientOriginalName());
        $filename=date('Y-m-d-i-s')."_".$sha1.".".$extension;
        $path=public_path('/images/menus/');
        $file->move($path,$filename);
        return  'images/menus/'.$filename;
        dd($filename);
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
        $menu=Menu::findOrFail($id);
        return view('Menus.Edit',compact('menu'));
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
        $input=$request->all();
        if(isset($input['image'])){
                $input['image']=$this->upload($input['image']);
        
        }
        Menu::findOrFail($id)->update($input);
        return redirect ()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Menu::findOrFail($id)->delete();
        return  redirect()->back();
    }
}
