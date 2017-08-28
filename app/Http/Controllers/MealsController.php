<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meal;
use App\Menu;
use App\MealItem;

class MealsController extends Controller
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
        $meals =Meal::paginate(4);
        return  view('Meals/Meals',compact('meals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $menus =Menu::all();
            
        return  view("meals/create",compact('menus'));
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
        $meal=Meal::create($input);
        foreach($input['items'] as  $item)
        {
            MealItem::create(['meal_id'=>$meal->id,'item_id'=>$item,'discount'=>$input['discount'][$item]]);
        }
        $menus=Menu::all();
        $mealItem =MealItem::where('meal_id',$meal->id)->get();
        $mealItemIDs=array();
        foreach($mealItem as $mealItem)
        {
            $mealItemIDs[]=$mealItem->item_id;
        }
        return view("meals.Edit",compact("meal","menus","mealItemIDs"));
    }
    public function upload($file){
        $extension =$file->getClientOriginalExtension();
        $sha1 =sha1($file->getClientOriginalName());
        $filename=date('Y-m-d-i-s')."_".$sha1.".".$extension;
        $path=public_path('/images/meals/');
        $file->move($path,$filename);
        return  'images/meals/'.$filename;
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
        $Meal=Meal::findOrFail($id);
        $meals=Menu::pluck('title','id');
    
        return view("meals.Edit",compact("Meal","meals"));
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
        Meal::findOrFail($id)->update($input);
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
       Meal::findOrFail($id)->delete();
        return  redirect()->back();
    }
}
