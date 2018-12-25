<div class="col-md-4 col-sm-6 col-xs-6">
    <div class="product product-single">
        <div class="product-thumb">
            <a href="{{route('annonce.show',$annonce->id)}}">
                <button class="main-btn quick-view"><i class="fa fa-search-plus"></i>Afficher les details</button></a>
            <img src="{{$annonce->primaryImage()}}" alt="primaryImage"
                width='200' height='400'>

        </div>
        <div class="product-body">
            <h3 class="product-price" id="{{$annonce->id}}"><a href="{{route('annonce.show',$annonce->id)}}">
                    {{$annonce->title}}</a></h3>
            <div class="product-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o empty"></i>
            </div>
            <h2 class="product-name"><a href="#">
                    {{$annonce->ville->name}}</a></h2>
            <div class="product-btns">
                <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart" href="{{route('annonce.show',$annonce->id)}}"></i>
                    Go to Page</button>
            </div>
        </div>
    </div>
</div>
