@extends('layouts.app')

@section('content')
<div class="panel panel-default">

<div class="panel-heading">add new  item</div>
    <div class="panel-body">
    <div class="col-lg-12">

                    {!! Form::open(array('route'=>'Items.store','files'=>true))!!}
                        <div class="form-group col-lg-4">
                            {!!Form::text('title',null,array('required','class'=>'form-control','placeholder'=>'item Title'))!!}

                        </div>


                        <div class="form-group col-lg-4">
                            {!!Form::select('menu_id',$menus,null,array('required','class'=>'form-control','placeholder'=>'Choose Item   Menu '))!!}

                        </div>

                        <div class="form-group col-lg-4">
                            {!! Form::select('status',['1'=>'Active','0'=>'inactive'],null,array('required','class'=>'form-control','placeholder'=>'item Status'))!!}
                        </div>
                        <div class="form-group col-lg-12">
                            {!!Form::textarea('description',null,array('required','class'=>'form-control','placeholder'=>'item Descripation'))!!}
                        </div>
                        <div class="form-group col-lg-4">
                            {!!Form::number('price',null,array('required','class'=>'form-control','placeholder'=>'Mueu Price'))!!}

                        </div>
                        <div class="form-group col-lg-4">
                            {!! Form::file('image',array('required','class'=>'form-control','placeholder'=>'item Status'))!!}
                        </div>
                        <div class="form-group col-lg-2">
                            {!! Form::submit('add',array('class'=>'btn  btn-primary'))!!}
                        </div>
                    {!! Form::close() !!}
    </div>  
</div>
@endsection