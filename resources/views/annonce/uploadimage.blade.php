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
<div class="container">
    <div class="white-bg payment-wrapper">
        <div class="col-md-12 mb-40">
            <h6 class="mt-20">AJOUTEZ JUSQU'À 6 PHOTOS (<span id="coaj">@{{counter}}</span> IMAGES RESTANTES)</h6>
            <span class="photos" id="uploaded_images">
                <span v-for="image in images">
                    <div class="photo">
                        <a class="remove" v-on:click="deleteimg"><i class="fa fa-trash"></i></a>
                        <div class="photo-inner">
                            <div class="photo-image">
                                <img class="img" v-bind:src="image.path">
                            </div>
                            <div class="photo-foot">
                                <div class="checkbox"><label class="form-label ml-1">
                                    <input type="radio" name="images" v-bind:value="image.path" id="vap-thum-20181211-153233-952084944" checked=""><span class="label-text">Photo principale</span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </span>
            </span>
            <span id="loader"></span>

            <div class="photo fileinput fileinput-new" id="uploader" style="display: inline-block;">
                <span class="btn-upload">
                    <i class="fa fa-camera"></i>
                    <i class="fa fa-plus-circle"></i>
                    <input type="file" name="files" id="files" v-on:change="uploading" accept="image/jpeg,image/gif,image/png,image/bmp">
                    <div id="remaining-images" class="blue-badge">Ajouter</div>
                </span>
            </div>
            <div class="row">
                <div class="col-2 p-0">
                    <i class="fa fa-camera fa-3x mr-2"></i>
                </div>
                <div class="col-10 p-0">
                    <p class="mt-20 "> Savez vous que les annonces avec photos sont 10 fois plus consultés que celles qui n'en ont pas !</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="{{asset('js/vue.js')}}"></script>
    <script src="{{asset('eshop/js/upluadfile.js')}}"></script>

@endsection