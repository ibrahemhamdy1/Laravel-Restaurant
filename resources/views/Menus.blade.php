@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">Menus</div>

                    <div class="panel-body">
                        
                        {!! Form::open(array('files'=>true))!!}
                        <div class="form-group col-lg-4">
                        {!!Form::text('title',null,array('required','class'=>'form-control','placeholder'=>'Mueu Title'))!!}

                        </div>


                        <div class="form-group col-lg-4">
                        {!!Form::select('type',['Food'=>'Food','Hot Drinks'=>'Hot Drinks','Cold Drinks'=>'Cold Drinks'],null,array('required','class'=>'form-control','placeholder'=>'Menu Type'))!!}

                        </div>

                        <div class="form-group col-lg-4">
                        {!! Form::select('status',['1'=>'Active','0'=>'inactive'],null,array('required','class'=>'form-control','placeholder'=>'Menu Status'))!!}
                        </div>
                        <div class="form-group col-lg-12">
                        {!!Form::textarea('description',null,array('required','class'=>'form-control','placeholder'=>'Menu Descripation'))!!}
                        </div>

                        <div class="form-group col-lg-4">
                        {!! Form::file('image',array('required','class'=>'form-control','placeholder'=>'Menu Status'))!!}
                        </div>
                        <div class="form-group col-lg-4">
                        {!! Form::submit('add',array('class'=>'btn  btn-primary'))!!}
                        </div>

                        {!! Form::close() !!}
            </div>  
         </div>
        </div> 
<div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">Menus</div>
<div class="panel-body">

                <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                            <th>title</th>
                            <th>Type</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>image</th>
                            <th>Created By</th>
                            <th>Delete</th>
                            <th>Edite</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($menus as $menu)
                            <tr>
                            <td>{{$menu->id}}</td>
                            <td>{{$menu->title}}</td>
                            <td>{{$menu->type}}</td>
                            <td>{{$menu->description}}</td>
                             <td>{{ $menu->status }}</td>
                            <td><img class="img-responsive menuThumb"src="{{$menu->image}}"></td>
                            <td>{{$menu->user->name}}</td>
                            <td>
                             {!! Form::open(['method'=>'DELETE','route'=>['Menus.destroy',$menu->id]]) !!}
                            {!! Form::submit('X',['class'=>'btn btn-denger']) !!}
                            {!! Form::close() !!}
                             
                            </td>
                            <td>
                            <a href="Menus/{{$menu->id}}/edit"><span class="glyphicon glyphicon-edit"></span></a>
                            
                            </td>
                            </tr>
                        @endforeach
                        </tbody>
                </table>
                
                    <p>{{$menu->title}}</p>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
