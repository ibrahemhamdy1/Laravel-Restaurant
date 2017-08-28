@extends('layouts.app')

@section('content')
<div class="panel panel-default">

<div class="panel-heading">add new  meal</div>
    <div class="panel-body">
    <div class="col-lg-12">

                    {!! Form::open(array('route'=>'Meals.store','files'=>true))!!}
                        <div class="form-group col-lg-3">
                            {!!Form::text('title',null,array('required','class'=>'form-control','placeholder'=>'meal Title'))!!}

                        </div>


                        <div class="form-group col-lg-3">
                            {!!Form::number('price',null,array('required','class'=>'form-control','placeholder'=>'Mueu Price'))!!}

                        </div>

                        <div class="form-group col-lg-3">
                            {!! Form::select('status',['1'=>'Active','0'=>'inactive'],null,array('required','class'=>'form-control','placeholder'=>'meal Status'))!!}
                        </div>
                        <div class="form-group col-lg-3">
                            {!! Form::file('image',array('required','class'=>'form-control','placeholder'=>'meal Status'))!!}
                        </div>
                        <div class="form-group col-lg-12">
                            {!!Form::textarea('description',null,array('required','class'=>'form-control','placeholder'=>'meal Descripation'))!!}
                        </div>
                        <div class="form-group">
                          @foreach($menus as $menu)
                           @if(count($menu->items)> 0)
                            <div class="form-group col-lg-6 MenuItem">
                                <h4>{{$menu->title}}</h4>
                                <ul>
                                    @foreach($menu->items as  $item)
                                        <li>
                                        <input type="checkbox" name="items[]" value="{{$item->id}}">
                                        <input type="number" name="discount[{{$item->id}}]" class="discount">
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
                            {!! Form::submit('add',array('class'=>'btn  btn-primary'))!!}
                        </div>
                    {!! Form::close() !!}
    </div>  
</div>
@endsection