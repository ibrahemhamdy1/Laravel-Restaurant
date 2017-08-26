@extends('layouts.app')

@section('content')
<div class="panel panel-default">

<div class="panel-heading">Edit Items :{{$item->title}}</div>
    <div class="panel-body">
        <div class="col-lg-8">
                    {!! Form::model($item,array('method'=>'PATCH','action'=>['MenusController@update',$item->id],'files'=>true))!!}
                        <div class="form-group col-lg-4">
                            {!!Form::text('title',null,array('required','class'=>'form-control','placeholder'=>'Mueu Title'))!!}

                        </div>


                        <div class="form-group col-lg-4">
                            {!!Form::select('type',['Food'=>'Food','Hot Drinks'=>'Hot Drinks','Cold Drinks'=>'Cold Drinks'],null,array('required','class'=>'form-control','placeholder'=>'item Type'))!!}

                        </div>

                        <div class="form-group col-lg-4">
                            {!! Form::select('status',['1'=>'Active','0'=>'inactive'],null,array('required','class'=>'form-control','placeholder'=>'item Status'))!!}
                        </div>
                        <div class="form-group col-lg-12">
                            {!!Form::textarea('description',null,array('required','class'=>'form-control','placeholder'=>'item Descripation'))!!}
                        </div>

                        <div class="form-group col-lg-4">
                            {!! Form::file('image',array('class'=>'form-control','placeholder'=>'item Status'))!!}
                        </div>
                        <div class="form-group col-lg-2">
                            {!! Form::submit('Update',array('class'=>'btn  btn-primary'))!!}
                        </div>
                    {!! Form::close() !!}
                    </div>
                    <div class="col-lg-4">
                        <img src="{{asset($item->image)}}" alt="{{$item->title}}" class="img-responsive img-rounded" >
                    </div>
                        </div>
                    </div>
                </div>
    </div>  
</div>
@endsection