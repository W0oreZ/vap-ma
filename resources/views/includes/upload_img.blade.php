<div class="container">
        <div class="white-bg payment-wrapper">
            <div class="col-md-12 mb-40">
                <h6 class="mt-20">AJOUTEZ JUSQU'À 6 PHOTOS (<span id="coaj">@{{counter}}</span> IMAGES RESTANTES)</h6>
                <h6 class="mt-10 is-danger">@{{message}}</h6>
                <span class="photos" id="uploaded_images">
                    <span v-for="image in images">
                        <div class="photo">
                            <a class="remove" v-on:click="deleteimg"><i class="fa fa-trash"></i></a>
                            <div class="photo-inner">
                                <div class="photo-image">
                                    <img class="img" v-bind:src="'http://vap.ma/images/tmp/'+image.path">
                                </div>
                                <div class="photo-foot">
                                    <div class="checkbox"><label class="form-label ml-1">
                                        <input type="radio" name="primary" v-bind:value="image.path" checked=""><span class="label-text">Photo principale</span></label>
                                        <input type="hidden" name="images[]" v-bind:value="image.path">
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
                <div class="row mt-10">
                    <div class="col-10 p-0">
                        <p class="mt-20 "> Savez vous que les annonces avec photos sont 10 fois plus consultés que celles qui n'en ont pas !</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    