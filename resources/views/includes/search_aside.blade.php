<div id="aside" class="col-md-3">
    <!-- aside widget -->
    <div class="aside">
        <h3 class="aside-title">Search by:</h3>
        <form action='' method='GET'>
            <label class="col-md-6 control-label" for="textinput">Titre:</label>
            <input id="textinput" name="title" type="search" placeholder="votre titre ici" class="form-control input-md">
            <br>
            <label class="col-md-6 control-label" for="textinput">Prix:</label>
            <div id="price-slider" style="margin: : 50% 0 40% 0"></div>
            <br>
            <ul class="filter-list">
                <label class="col-md-6 control-label" for="ville">Ville:</label>
                <!-- Select Basic -->
                <select id="selectbasic" name="ville" class="form-control">
                    @foreach ($villes as $vile)
                        <option value="{{$vile->id}}">{{$vile->name}}</option>
                    @endforeach
                </select>
            </ul>

            <ul class="filter-list">
                <label class="col-md-6 control-label" for="categorie_id">catégories:</label>

                <!-- Select Basic -->
                <select id="selectbasic" name="categorie_id" class="form-control">
                    @foreach ($categories as $cat)
                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                </select>
            </ul>



            <input type='submit' class="primary-btn" value='Search' />
        </form>
    </div>
    <!-- /aside widget -->

    <!-- aside widget -->

    <!-- aside widget -->

    <!-- aside widget -->

    <!-- /aside widget -->

    <!-- aside widget -->

    <!-- /aside widget -->

    <!-- aside widget -->

    <!-- /aside widget -->

    <!-- aside widget -->

    <!-- /aside widget -->

    <!-- aside widget -->
    <div class="aside">
            <h3 class="aside-title">Top Rated Product</h3>
            <!-- widget product -->
            <div class="product product-widget">
                <div class="product-thumb">
                    <img src="./img/thumb-product01.jpg" alt="">
                </div>
                <div class="product-body">
                    <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                    <h3 class="product-price">Casablanca <p class="product-old-price">Categ</p>
                    </h3>
                    <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o empty"></i>
                    </div>
                </div>
            </div>
            <!-- /widget product -->
    
            <!-- widget product -->
            <div class="product product-widget">
                <div class="product-thumb">
                    <img src="./img/thumb-product01.jpg" alt="">
                </div>
                <div class="product-body">
                    <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                    <h3 class="product-price">Safi</h3>
                    <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o empty"></i>
                    </div>
                </div>
            </div>
            <!-- /widget product -->
        </div>
        <!-- /aside widget -->

        <!-- aside widget -->
    <div class="aside">
            <h3 class="aside-title">Top Rated Product</h3>
            <!-- widget product -->
            <div class="product product-widget">
                <div class="product-thumb">
                    <img src="./img/thumb-product01.jpg" alt="">
                </div>
                <div class="product-body">
                    <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                    <h3 class="product-price">Casablanca <p class="product-old-price">Categ</p>
                    </h3>
                    <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o empty"></i>
                    </div>
                </div>
            </div>
            <!-- /widget product -->
    
            <!-- widget product -->
            <div class="product product-widget">
                <div class="product-thumb">
                    <img src="./img/thumb-product01.jpg" alt="">
                </div>
                <div class="product-body">
                    <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                    <h3 class="product-price">Safi</h3>
                    <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o empty"></i>
                    </div>
                </div>
            </div>
            <!-- /widget product -->
        </div>
        <!-- /aside widget -->

        <!-- aside widget -->
    <div class="aside">
            <h3 class="aside-title">Top Rated Product</h3>
            <!-- widget product -->
            <div class="product product-widget">
                <div class="product-thumb">
                    <img src="./img/thumb-product01.jpg" alt="">
                </div>
                <div class="product-body">
                    <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                    <h3 class="product-price">Casablanca <p class="product-old-price">Categ</p>
                    </h3>
                    <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o empty"></i>
                    </div>
                </div>
            </div>
            <!-- /widget product -->
    
            <!-- widget product -->
            <div class="product product-widget">
                <div class="product-thumb">
                    <img src="./img/thumb-product01.jpg" alt="">
                </div>
                <div class="product-body">
                    <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                    <h3 class="product-price">Safi</h3>
                    <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o empty"></i>
                    </div>
                </div>
            </div>
            <!-- /widget product -->
        </div>
        <!-- /aside widget -->

    <!-- aside widget -->
    <div class="aside">
        <h3 class="aside-title">Top Rated Product</h3>
        <!-- widget product -->
        <div class="product product-widget">
            <div class="product-thumb">
                <img src="./img/thumb-product01.jpg" alt="">
            </div>
            <div class="product-body">
                <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                <h3 class="product-price">Casablanca <p class="product-old-price">Categ</p>
                </h3>
                <div class="product-rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o empty"></i>
                </div>
            </div>
        </div>
        <!-- /widget product -->

        <!-- widget product -->
        <div class="product product-widget">
            <div class="product-thumb">
                <img src="./img/thumb-product01.jpg" alt="">
            </div>
            <div class="product-body">
                <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                <h3 class="product-price">Safi</h3>
                <div class="product-rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o empty"></i>
                </div>
            </div>
        </div>
        <!-- /widget product -->
    </div>
    <!-- /aside widget -->
</div>
<!-- /ASIDE -->
