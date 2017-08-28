@extends('layouts.app')

@section('content')
<div class="panel panel-default">

<div class="panel-heading">Edit Meals :{{$meal->title}}</div>
    <div class="panel-body">
        <div class="col-lg-8">
                    {!! Form::model($meal,array('method'=>'PATCH','action'=>['ItemsController@update',$meal->id],'files'=>true))!!}
                        <div class="form-group col-lg-4">
                            {!!Form::text('title',null,array('required','class'=>'form-control','placeholder'=>'Mueu Title'))!!}

                        </div>


                        <div class="form-group col-lg-4">
                            {!!Form::select('type',['Food'=>'Food','Hot Drinks'=>'Hot Drinks','Cold Drinks'=>'Cold Drinks'],null,array('required','class'=>'form-control','placeholder'=>'meal Type'))!!}

                        </div>

                        <div class="form-group col-lg-4">
                            {!! Form::select('status',['1'=>'Active','0'=>'inactive'],null,array('required','class'=>'form-control','placeholder'=>'meal Status'))!!}
                        </div>
                        <div class="form-group col-lg-12">
                            {!!Form::textarea('description',null,array('required','class'=>'form-control','placeholder'=>'meal Descripation'))!!}
                        </div>

                        <div class="form-group col-lg-4">
                            {!! Form::file('image',array('class'=>'form-control','placeholder'=>'meal Status'))!!}
                        </div>

                        <div class="clearfix"></div>
                        <div class="form-group">
                          @foreach($menus as $menu)
                           @if(count($menu->items)> 0)
                            <div class="form-group col-lg-6 MenuItem">
                                <h4>{{$menu->title}}</h4>
                                <ul>
                                    @foreach($menu->items as  $item)
                                        <li>
                                        <input 
                                            @if(in_array($item->id,$mealItemIDs))
                                                checked
                                            @endif
                                        type="checkbox" 
                                        name="items[]" 
                                        value="{{$item->id}}">
                                        {{$item->title}}
                                        </li>
                                    @endforeach
                                </ul> 
                            </div>
                           @endif
                          @endforeach
                        </div>
                        <div class="clearfix"></div>

                        <div class="form-group col-lg-2">
                            {!! Form::submit('Update',array('class'=>'btn  btn-primary'))!!}
                        </div>
                    {!! Form::close() !!}
                    </div>
                    <div class="col-lg-4">
                        <img src="{{asset($meal->image)}}" alt="{{$meal->title}}" class="img-responsive img-rounded" >
                    </div>
                        </div>
                    </div>
                </div>
    </div>  
</div>
@endsection