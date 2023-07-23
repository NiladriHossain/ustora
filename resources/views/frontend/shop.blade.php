@extends('frontend.master')
@section('title')
   Shop
@endsection
@section('content')
    <section>
        <div class="product-big-title-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-bit-title text-center">
                            <h2>Shop</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="single-product-area">
            <div class="zigzag-bottom"></div>
            <div class="container">
                <div class="row">
                    
                    @foreach ($allProducts as $allProduct)
                        <div class="col-md-3 col-sm-6">
                            <div class="single-shop-product">
                                <div class="product-upper"  >
                                    <img src="{{$allProduct->image}}" alt="" height="280px" width="240px" style="border: 1px solid rgb(214, 214, 214)">
                                </div>
                                <h2><a href="">{{$allProduct['title']}}</a></h2>
                                <div class="product-carousel-price">
                                    <ins class="" style="font-size: 25px;">${{$allProduct['price']}}</ins> <del class="text-danger">${{$allProduct['offer']}}</del>
                                </div>
                                
                                <div class="product-option-shop">
                                    
                                    <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70"
                                        rel="nofollow" href="#">Add to cart</a>
                                </div>
                            </div>   
                        </div>
                    @endforeach

                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="product-pagination text-center">
                            <nav>
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
