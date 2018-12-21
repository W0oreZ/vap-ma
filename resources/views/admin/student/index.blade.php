@extends('layouts.admin')
@section('title')
    Etudiants
@endsection

@section('subtitle')
    List des Etudiants
@endsection
@section('content')
    <div class="col-xs-12">
        <div class="box">
        <div class="box-header">
            <h3 class="box-title">Students List</h3>

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
                        <th>Prenom</th>
                        <th>CIN</th>
                        <th>Date Naissance</th>
                        <th>Telephone</th>
                        <th>Adresse</th>
                    </tr>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{$student->id}}</td>
                            <td>
                                <img src="{{asset('images\students\\').$student->image}}" alt="{{$student->firstname}}">
                            </td>
                            <td>{{$student->firstname}}</td>
                            <td>{{$student->lastname}}</td>
                            <td>{{$student->cin}}</td>
                            <td>{{$student->date_naissance}}</td>
                            <td>{{$student->telephone}}</td>
                            <td>{{$student->adresse}}</td>
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