@extends('layouts.app')
@section('content')

            <div class="panel panel-default">
          
<div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">Items 
              <a href="Items/create">
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
                        @foreach($items as $item)
                            <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->title}}</td>
                            <td>{{$item->description}}</td>
                             <td>{{ $item->status }}</td>
                            <td><img class="img-responsive menuThumb"src="{{$item->image}}"></td>
                            <td>{{$item->user->name}}</td>
                            <td>
                             {!! Form::open(['method'=>'DELETE','route'=>['Items.destroy',$item->id]]) !!}
                            {!! Form::submit('X',['class'=>'btn btn-denger']) !!}
                            {!! Form::close() !!}
                             
                            </td>
                            <td>
                            <a href="Items/{{$item->id}}/edit"><span class="glyphicon glyphicon-edit"></span></a>
                            
                            </td>
                            </tr>
                        @endforeach
                        </tbody>
                </table>
                
                    <p>{{$item->title}}</p>
                   
                
    </div>
</div>
@endsection
