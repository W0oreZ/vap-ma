@extends('layouts.main')

@section('style')

<style>
    /* Profile container */
    .profile {
        margin: 20px 0;
    }

    /* Profile sidebar */
    .profile-sidebar {
        padding: 20px 0 10px 0;
        background: #fff;
    }

    .profile-userpic img {
        float: none;
        margin: 0 auto;
        width: 50%;
        height: 50%;
        -webkit-border-radius: 50% !important;
        -moz-border-radius: 50% !important;
        border-radius: 50% !important;
    }

    .profile-usertitle {
        text-align: center;
        margin-top: 20px;
    }

    .profile-usertitle-name {
        color: #5a7391;
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 7px;
    }

    .profile-usertitle-job {
        text-transform: uppercase;
        color: #5b9bd1;
        font-size: 12px;
        font-weight: 600;
        margin-bottom: 15px;
    }

    .profile-userbuttons {
        text-align: center;
        margin-top: 10px;
    }

    .profile-userbuttons .btn {
        text-transform: uppercase;
        font-size: 11px;
        font-weight: 600;
        padding: 6px 15px;
        margin-right: 5px;
    }

    .profile-userbuttons .btn:last-child {
        margin-right: 0px;
    }

    .profile-usermenu {
        margin-top: 30px;
    }

    .profile-usermenu ul li {
        border-bottom: 1px solid #f0f4f7;
    }

    .profile-usermenu ul li:last-child {
        border-bottom: none;
    }

    .profile-usermenu ul li a {
        color: #17b187
            /*#93a3b5*/
        ;
        font-size: 14px;
        font-weight: 400;
    }

    .profile-usermenu ul li a i {
        margin-right: 8px;
        font-size: 14px;
    }

    .profile-usermenu ul li a:hover {
        background-color: #fafcfd;
        color: #5b9bd1;
    }

    .profile-usermenu ul li.active {
        border-bottom: none;
    }

    .profile-usermenu ul li.active a {
        color: #5b9bd1;
        background-color: #f6f9fb;
        border-left: 2px solid #5b9bd1;
        margin-left: -2px;
    }

    /* Profile Content */
    .profile-content {
        padding: 20px;
        background: #fff;
        min-height: 460px;
    }

</style>

@endsection

@section('content')
<!-- BREADCRUMB -->
<div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{$profile->path()}}">Profile</li>
            <li class="active">Edit</li>
        </ul>
    </div>
</div>
<!-- /BREADCRUMB -->

<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">Profile</h3>
                </div>

                <div class="container">
                    <div class="row profile">
                        <div class="col-md-3">
                            @include('includes.profilesidebar')
                            <!-- SIDEBAR MENU -->
                            <div class="profile-usermenu">
                                <ul class="nav">
                                    <li>
                                        <a href="{{$profile->path()}}">
                                            <i class="fa fa-home"></i>
                                            Details </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-exchange"></i>
                                            Annonces </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-heart"></i>
                                            Mes Favoris </a>
                                    </li>
                                    <li class="active">
                                        <a href="#" target="_blank">
                                            <i class="fa fa-unlock"></i>
                                            Modifier Mon Profile </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-cog"></i>
                                            Parametres </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- END MENU -->
                        </div>
                        <div class="col-md-9">
                            <div class="profile-content">
                                <div class="section-title">
                                    <h3 class="title">Mettre A jour vos Informations</h3>
                                </div>
                                <form action="{{$profile->path()}}" method="PUT">@csrf
                                    <div class="form-group">
                                        <input class="input" type="text" name="first_name" value="{{$profile->first_name}}">
                                    </div>
                                    <div class="form-group">
                                        <input class="input" type="text" name="last_name" value="{{$profile->last_name}}">
                                    </div>
                                    <div class="form-group">
                                        <input class="input" type="textarea" name="description" value="{{$profile->description}}">
                                    </div>
                                    <div class="form-group">
                                        <input class="input" type="text" name="adress" value="{{$profile->address}}">
                                    </div>
                                    <div class="form-group">
                                        <input class="input" type="tel" name="telephone" value="{{$profile->telephone}}">
                                    </div>
                                    
                                        <input class="input" type="submit" value="valider">
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <center>
                    <strong>Powered by <a href="http://vap.ma" target="_blank">Abderrazak Elkhadiri</a></strong>
                </center>
                <br>
                <br>
            </div>

        </div><!-- /row -->
    </div><!-- /container -->
</div><!-- /section -->


@endsection
