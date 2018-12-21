@extends('layouts.admin')
@section('title')
    Formations
@endsection

@section('subtitle')
    List des Formation disponible
@endsection
@section('content')
    <div class="col-xs-12">
        <div class="box">
        <div class="box-header">
            <h3 class="box-title">Formations List</h3>
            <a href="{{route('formations.create')}}" class="btn btn-success m-l-20"><i class="fa fa-plus"></i></a>


            <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
            </div>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>PRIX</th>
                    </tr>
                    @foreach ($formations as $formation)
                        <tr>
                            <td>{{$formation->id}}</td>
                            <td>
                                <img src="{{asset('images\formations\\').$formation->image}}" alt="{{$formation->name}}">
                            </td>
                            <td>{{$formation->name}}</td>
                            <td>{{$formation->description}}</td>
                            <td>{{$formation->prix}}</td>
                            <td>
                                <a href="#" class="btn btn-block btn-warning btn-flat">Edit</a>
                            </td>
                            <td>
                                <a href="#" class="btn btn-block btn-danger btn-flat">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</div>
@endsection