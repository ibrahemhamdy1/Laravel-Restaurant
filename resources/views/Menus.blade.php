@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
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
                            <td>{{$menu->id}}</td>
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
