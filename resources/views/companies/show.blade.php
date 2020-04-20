@extends('layouts.default')
@section('content')
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-5">
                    <h2><b>{{ucfirst($data->name)}}</b></h2>
                </div>
                
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Logo</th>
                    <th>Name</th> 
                    <th>Email</th>                       
                    <th>website</th>
                    <th>Created at</th>
                    <th colspan="3">Action</th>
                </tr>
            </thead>
            <tbody>
               
                <tr>
                    <td>{{$data->id}}</td>
                    <td><a href="javascript:void(0)">
                      <img src="{{ asset('storage/'.$data->logo) }}" class="avatar" alt="Avatar" width=60px>
                    </a></td>
                    <td>{{ucfirst($data->name)}}</td>
                    <td>{{$data->email}}</td>                        
                    <td>{{$data->website}}</td>
                    <td>{{$data->created_at->diffForHumans()}}</td>
                    <td><a href="{{route('companies.index')}}" class="btn btn-info">Back</a></td>
                    
                </tr>
            </tbody>
        </table>
    </div>
</div>     
@endsection                                                                 