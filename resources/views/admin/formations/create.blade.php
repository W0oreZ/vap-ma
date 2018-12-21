@extends('layouts.admin')
@section('title')
    Formations
@endsection

@section('subtitle')
    Ajouter Une Nouvelle Formation
@endsection
@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Ajouter Une Nouvelle Formation</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="POST" enctype="multipart/form-data" action="{{route('formations.store')}}">
            @csrf
            <div class="box-body">
            <div class="form-group">
                <label for="nominput">Nom</label>
                <input type="text" class="form-control" name="name" id="nominput" placeholder="Enter le NOM de la formation">
            </div>
            <div class="form-group">
                <label for="descriptionInput">Description</label>
                <input type="text" class="form-control" name="description" id="descriptionInput" placeholder="Enter un text descriptif de la formation">
            </div>
            <div class="form-group">
                <label for="priceInput">Prix</label>
                <input type="number" class="form-control" name="price" id="priceInput" placeholder="Enter le prix de la formation en DH">
            </div>
            <div class="form-group">
                <label for="fileInput">Image de Couverture</label>
                <input type="file" name="image" id="fileInput">

                <p class="help-block">Choisissez une image descriptif de la formation.</p>
            </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
            <button type="submit" class="btn btn-primary">Valider</button>
            </div>
        </form>
    </div>
@endsection