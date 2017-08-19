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
                             <td>{{$menu->status}}</td>
                            <td>{{$menu->image}}</td>
                            <td>{{$menu->user_id}}</td>
                            <td>{{$menu->id}}</td>
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
