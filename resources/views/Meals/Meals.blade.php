@extends('layouts.app')
@section('content')

            <div class="panel panel-default">
          
<div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">Meals 
              <a href="Meals/create">
                <span class="glyphicon glyphicon-plus pull-right"></span>
              </a>
              </div>
<div class="panel-body">

                <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                            <th>id</th>

                            <th>title</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>image</th>
                            <th>Created By</th>
                            <th>Delete</th>
                            <th>Edite</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($meals as $meal)
                            <tr>
                            <td>{{$meal->id}}</td>
                            <td>{{$meal->title}}</td>
                            <td>{{$meal->description}}</td>
                            <td>{{ $meal->price }}</td>
                            <td>{{ $meal->status }}</td>
                            <td><img class="img-responsive menuThumb"src="{{$meal->image}}"></td>
                            <td>{{$meal->user->name}}</td>
                            <td>
                             {!! Form::open(['method'=>'DELETE','route'=>['Meals.destroy',$meal->id]]) !!}
                            {!! Form::submit('X',['class'=>'btn btn-denger']) !!}
                            {!! Form::close() !!}
                             
                            </td>
                            <td>
                            <a href="Meals/{{$meal->id}}/edit"><span class="glyphicon glyphicon-edit"></span></a>
                            
                            </td>
                            </tr>
                        @endforeach
                        </tbody>
                </table>
                
                {!!$meals->render()!!}
                
                
    </div>
</div>
@endsection
