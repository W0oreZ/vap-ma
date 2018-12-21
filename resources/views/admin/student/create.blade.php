@extends('layouts.admin')
@section('title')
    Etudiants
@endsection

@section('subtitle')
    Ajouter Un Nouveau Etudiant
@endsection
@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Ajouter Un Nouveau Etudiant</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="POST" enctype="multipart/form-data" action="{{route('students.store')}}">
            @csrf
            <div class="box-body">
            <div class="form-group">
                <label for="nominput">Nom</label>
                <input type="text" class="form-control" name="firstname" id="nominput" placeholder="Enter Nom de l'etudiant">
            </div>
            <div class="form-group">
                <label for="prenomInput">Prenom</label>
                <input type="text" class="form-control" name="lastname" id="prenomInput" placeholder="Enter Prenom de l'etudiant">
            </div>
            <div class="form-group">
                <label for="cinInput">CIN</label>
                <input type="text" class="form-control" name="cin" id="cinInput" placeholder="Enter le CIN">
            </div>
            <div class="form-group">
                <label for="dateInput">Date Naissance</label>
                <input type="text" class="form-control" name="date_naissance" id="dateInput" placeholder="Enter la date de naissance (ex. 02/03/1998)">
            </div>
            <div class="form-group">
                <label for="adressInput">Adresse</label>
                <input type="text" class="form-control" name="adresse" id="adressInput" placeholder="Enter l'adresse">
            </div>
            <div class="form-group">
                <label for="telephoneInput">Telephone</label>
                <input type="number" class="form-control" name="telephone" id="telephoneInput" placeholder="Enter le Numero de telephone de l'etudiant">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="fileInput">Image de L'etudiant</label>
                <input type="file" name="image" id="fileInput">

                <p class="help-block">Choisissez l'image de l'etudiant en question.</p>
            </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
            <button type="submit" class="btn btn-primary">Valider</button>
            </div>
        </form>
    </div>
@endsection