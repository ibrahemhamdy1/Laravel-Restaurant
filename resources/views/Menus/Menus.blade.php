@extends('layouts.app')
@section('content')

            <div class="panel panel-default">
          
<div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">Menus  
              <a href="Menus/create">
                <span class="glyphicon glyphicon-plus pull-right"></span>
              </a>
              </div>
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
                <div class="paginatios col-lg-12">
                {!!$menus->render()!!}
                </div>                   
                
    </div>
</div>
@endsection
