@extends('layouts.main')



@section('style')
    <style>
        .img {
            vertical-align: middle;
            border-style: none;
        }
        .payment-wrapper {
            padding: 30px;
        }
        .payment-wrapper .form-control {
            font-size: 15px;
        }
        .payment-wrapper .form-group label {
            font-size: 18px;
        }
        .payment-wrapper span.step {
            float:right;
            background:#fff;
            color:#999999;
            font-size:11px;
            line-height: 12px;
            border:2px solid #BBB4AB;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            margin-left:3px;
            margin-bottom: 3px;
            height: 22px;
            width: 22px;
            padding: 0;
            padding-top: 3px;
            padding-left: 7px;
        }
        .payment-wrapper span.step.active {
            background: #7F64B5;
            color: #FFF;
            border:2px solid #7F64B5;
        }
        .payment-wrapper .photo {
            vertical-align: top;
            background: #f3f3f3;
            border: 0px dashed #7F64B5;
            display: inline-block;
            max-width: 126px;
            height: 100px;
            width: 100%;
            border-radius: 4px;
            position: relative;
            margin: 0px 6px 6px 0px;
            overflow: hidden;
        }
        .payment-wrapper .photo i {
            display: block;
            margin: 10px auto 0;
            text-align: center;
            font-size: 25px;
            color: #7F64B5;
        }
        .payment-wrapper .photo .fa-plus-circle {
            position: absolute;
            font-size: 14px;
            top: 9px;
            background: #f3f3f3;
            left: 36px;
            padding: 1px 2px 1px 2px;
            border-radius: 100%;
        }
        .payment-wrapper .blue-badge,
        .payment-wrapper .btn-upload {
            font-size: 9px;
            text-transform: uppercase;
            text-align: center;
            display: block;
            padding: 5px 0;
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }
        .payment-wrapper .btn-upload {
            width: 100%;
            height: 100%;
            margin: 0 auto;
        }
        .payment-wrapper .blue-badge {
            background: #7F64B5;
            border-radius: 30px;
            letter-spacing: 2px;
            color: #fff;
            width: 90px;
            margin: 0 auto;
            height: 23px;
            font-size: 10px;
            padding: 0;
            margin-top: 18px;
            text-align: center;
        }

        .payment-wrapper .btn-upload input {
            opacity: 0;
            position: absolute;
            right: 0;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 2;
            cursor: pointer;
            font-size: 16px;
        }
        .photo .photo-image {
            height: 80px;
            border-bottom: 2px solid #ddd;
            overflow: hidden;
            text-align: center;
            font-weight: 700;
            font-size: 9px;
            color: #999;
            letter-spacing: .04em;
        }
        .photo .photo-image img{
            width: 100%;
        }
        .photos .photo .remove {
            float: right;
            position: absolute;
            right: 0;
            height: 25px;
            width: 25px;
            margin: 2px;
            padding: 2px;
            border-radius: 100%;
            background: hsla(0,0%,100%,.7);
            cursor: pointer;
        }
        .photos .photo .drag {
            position: absolute;
            height: 25px;
            width: 25px;
            margin: 2px;
            padding: 2px;
            border-radius: 100%;
            background: hsla(0,0%,100%,.7);
            cursor: move;
        }
        .photos .photo .form-label{
            font-size: 12px;
        }
        .photos .photo input[type=radio]{
            margin-left: 4px;
        }
        .photos .photo .drag i {
            display: block;
            margin: 2px 0 !important;
            font-size: 16px;
            color: #000;
            padding: 1px;
            margin: 0;
        }
        .photos .photo .remove i {
            color: rgba(255,0,0,.9);
            text-align: center;
            display: block;
            margin: 21px auto 8px;
            font-size: 18px;
            padding: 2px;
            margin: 0;
        }
    </style>
@endsection

@section('content')

<!-- BREADCRUMB -->
<div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a></li>
            <li class="active">Ajouter Votre Annonce</li>
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
            <form class="form-horizontal" action="{{route('annonce.store')}}" method="POST">@csrf
            <fieldset class="ff">

            <!-- Form Name -->
            <div class="aside">
                <div class="aside-title">
                    <h1>Deposez votre Annonce<span class=""></span></h1>
                </div>
            </div>
            <!-- /Form Name -->
            <form class="firstform" action="" method="POST" enctype="multipart/form-data">
                <!-- Text input-->
                <div class="form-group">
                <label class="col-md-4 control-label" for="titreinput">Titre</label>  
                <div class="col-md-6">
                <input id="titreinput" name="title" type="text" placeholder="Donnez un titre descriptif à votre annonce.." class="form-control input-md" required="">
                <span class="help-block">Exemple : Chaussures de running homme Adidas Glide bleues, pointure 44</span>  
                </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">Catégorie:</label>
                <div class="col-md-6">
                    <select id="selectbasic" name="categorie_id" class="form-control" required>
                        <option value="0" disabled="true" selected="true">---Choisissez une catégories---</option>
                        @foreach ($categories as $cat)
                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                        @endforeach
                    </select>
                </div>
                </div>

                <!-- Textarea -->
                <div class="form-group">
                <label class="col-md-4 control-label" for="descrip">Description :</label>
                <div class="col-md-4">       
                <input id="descrip" name="description" type="textarea" placeholder="Description..." class="form-control mt-5" required="true">             
                </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                <label class="col-md-4 control-label" for="selectville">Ville:</label>
                <div class="col-md-6">
                    <select id="selectbasic" name="ville_id" class="form-control" required>
                        <option value="0" disabled="true" selected="true">---Choisissez une Ville---</option>
                        @foreach ($villes as $v)
                            <option value="{{$v->id}}">{{$v->name}}</option>
                        @endforeach
                    </select>
                </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">Prix:</label>  
                <div class="col-md-6">
                    <input id="textinput" name="prix" type="number" placeholder="DH" class="form-control input-md" required="true"> 
                </div>
                </div>

                <!-- File Button --> 
                <div class="upfile">
                <div class="form-group">
                <div class="col-md-6">
                    @include('includes.upload_img')
                </div>
                </div>
                <!-- Select Basic -->
                <div class="form-group">
                    <div class="col-md-8">
                        <input type="submit" class="btn btn-success btn-lg" value="Valider">
                    </div>
                </div>
            </form>
        


            <!--Loging/contact section-->
            <div class="col-md-4"  id="affix">
                <div class="sidebar payment-sidebar">
                    <div class="sidebar-item mb-20" id="NeedA">
                        <div class="lp-box">
                            <i class="text-info fa fa-phone-square"></i>
                            <h4>Need Assistance?</h4>
                            <p>Our team is 24/7 at your service to help you with your booking issues or answer any related questions</p>
                            <span class="text-info font24" id="texttele">+1900 12 213 21</span>
                        </div>
                    </div>
                    @if (auth()->guest())
                        <div class="sidebar-item mb-20" id="Login">
                            <div class="lp-box">
                                <i class="text-info fa fa-lock"></i>
                                <h4>Login</h4>
                                <div>
                                <div class="form-group">
                                    <label for="show-login">Email / Username</label>
                                    <input type="text" class="form-control" value="Login" id="show-login" placeholder="Email / Username">
                                </div>
                                <div class="form-group">
                                    <label for="show-password">Password</label>
                                    <input type="password" class="form-control" value="" id="show-password" placeholder="Password">
                                </div>
                                <div class="styled-checkbox">
                                    <label class="toggle">
                                        <input type="checkbox" name="optionsCheckbox" id="optionsCheckbox1" value="option1"><span class="label-text">
                                        Rester connecter.</span>
                                    </label>
                                </div>
                                <div class="clear mb-15"></div>
                                <button type="submit" class="btn btn-primary">Login</button>
                                <div class="clear mb-10"></div>
                            </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div> 
        </div>
        <!-- /row -->
    </div><!-- /container -->
</div><!-- /section -->
@endsection

@section('scripts')
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="{{asset('js/vue.js')}}"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{asset('eshop/js/upluadfile.js')}}"></script>
<script src="{{asset('eshop/js/image-compressor.min.js')}}"></script>
@endsection