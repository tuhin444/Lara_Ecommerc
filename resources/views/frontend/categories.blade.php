
@extends('frontend.layouts.master')
@section('content')



<!-- Start Shop Page  -->
<div class="shop-box-inner">
<div class="container">
<div class="row">
    <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
        <div class="product-categori">
            <div class="search-product">
                <form action="#">
                    <input class="form-control" placeholder="Search here..." type="text">
                    <button type="submit"> <i class="fa fa-search"></i> </button>
                </form>
            </div>
            <div class="filter-sidebar-left">
                <div class="title-left">
                    <h3>Categories</h3>
                </div>
                <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men" data-children=".sub-men">
                  

               @foreach($categorys as $cat)

                    <div class="list-group-collapse sub-men">
                        <a class="list-group-item list-group-item-action" href="#{{$cat->id}}" data-toggle="collapse" aria-expanded="true" aria-controls="{{$cat->id}}">{{$cat->name}}
                    </a>
                 
                    <div class="collapse show" id="{{$cat->id}}" data-parent="#list-group-men">
                            <div class="list-group">
                                  @foreach($cat->categories as $subcat)
                                <a href="{{url('/categori/'.$subcat->id)}}" class="list-group-item list-group-item-action active">{{$subcat->name}}</a>
                                @endforeach
                              
                            </div>
                        </div>
                     
                    </div>
             @endforeach


               
                </div>
            </div>
         

        </div>
    </div>
    <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
        <div class="right-product-box">
            <div class="product-item-filter row">
                <div class="col-12 col-sm-8 text-center text-sm-left">
                    <div class="toolbar-sorter-right">
                        <span>Sort by </span>
                        <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
                        <option data-display="Select">Nothing</option>
                        <option value="1">Popularity</option>
                        <option value="2">High Price → High Price</option>
                        <option value="3">Low Price → High Price</option>
                        <option value="4">Best Selling</option>
                    </select>
                    </div>
                    <p>Showing all 4 results</p>
                </div>
                <div class="col-12 col-sm-4 text-center text-sm-right">
                    <ul class="nav nav-tabs ml-auto">
                        <li>
                            <a class="nav-link active" href="#grid-view" data-toggle="tab"> <i class="fa fa-th"></i> </a>
                        </li>
                        <li>
                            <a class="nav-link" href="#list-view" data-toggle="tab"> <i class="fa fa-list-ul"></i> </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row product-categorie-box">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                     <h1 align="center">{{$product_name->name}}</h1>
                        <div class="row">
                          @foreach($products as $product)

                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                <div class="products-single fix">
                                    <div class="box-img-hover">
                                        <div class="type-lb">
                                            <p class="sale">Sale</p>
                                        </div>
                                           <img src="{{asset('/uploads/products/'.$product->image)}}" class="img-fluid" alt="Image">
                                        <div class="mask-icon">
                                            <ul>
                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                            </ul>
                                            <a class="cart" href="{{url('/products/'.$product->id)}}">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="why-text">
                                        <h4>{{$product->description}}</h4>
                                        <h5>$ {{$product->price}}</h5>
                                    </div>
                                </div>
                            </div>
                         @endforeach 
                            

                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="list-view">
                        <div class="list-view-box">
                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                    <div class="products-single fix">
                                        <div class="box-img-hover">
                                            <div class="type-lb">
                                                <p class="new">New</p>
                                            </div>
                                            <img src="{{asset('frontend/images/img-pro-01.jpg')}}" class="img-fluid" alt="Image">
                                            <div class="mask-icon">
                                                <ul>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                    <div class="why-text full-width">
                                        <h4>Lorem ipsum dolor sit amet</h4>
                                        <h5> <del>$ 60.00</del> $40.79</h5>
                                        <p>Integer tincidunt aliquet nibh vitae dictum. In turpis sapien, imperdiet quis magna nec, iaculis ultrices ante. Integer vitae suscipit nisi. Morbi dignissim risus sit amet orci porta, eget aliquam purus
                                            sollicitudin. Cras eu metus felis. Sed arcu arcu, sagittis in blandit eu, imperdiet sit amet eros. Donec accumsan nisi purus, quis euismod ex volutpat in. Vestibulum eleifend eros ac lobortis aliquet.
                                            Suspendisse at ipsum vel lacus vehicula blandit et sollicitudin quam. Praesent vulputate semper libero pulvinar consequat. Etiam ut placerat lectus.</p>
                                        <a class="btn hvr-hover" href="#">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-view-box">
                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                    <div class="products-single fix">
                                        <div class="box-img-hover">
                                            <div class="type-lb">
                                                <p class="sale">Sale</p>
                                            </div>
                                            <img src="images/img-pro-02.jpg" class="img-fluid" alt="Image">
                                            <div class="mask-icon">
                                                <ul>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                    <div class="why-text full-width">
                                        <h4>Lorem ipsum dolor sit amet</h4>
                                        <h5> <del>$ 60.00</del> $40.79</h5>
                                        <p>Integer tincidunt aliquet nibh vitae dictum. In turpis sapien, imperdiet quis magna nec, iaculis ultrices ante. Integer vitae suscipit nisi. Morbi dignissim risus sit amet orci porta, eget aliquam purus
                                            sollicitudin. Cras eu metus felis. Sed arcu arcu, sagittis in blandit eu, imperdiet sit amet eros. Donec accumsan nisi purus, quis euismod ex volutpat in. Vestibulum eleifend eros ac lobortis aliquet.
                                            Suspendisse at ipsum vel lacus vehicula blandit et sollicitudin quam. Praesent vulputate semper libero pulvinar consequat. Etiam ut placerat lectus.</p>
                                        <a class="btn hvr-hover" href="#">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-view-box">
                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                    <div class="products-single fix">
                                        <div class="box-img-hover">
                                            <div class="type-lb">
                                                <p class="sale">Sale</p>
                                            </div>
                                            <img src="images/img-pro-03.jpg" class="img-fluid" alt="Image">
                                            <div class="mask-icon">
                                                <ul>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                    <div class="why-text full-width">
                                        <h4>Lorem ipsum dolor sit amet</h4>
                                        <h5> <del>$ 60.00</del> $40.79</h5>
                                        <p>Integer tincidunt aliquet nibh vitae dictum. In turpis sapien, imperdiet quis magna nec, iaculis ultrices ante. Integer vitae suscipit nisi. Morbi dignissim risus sit amet orci porta, eget aliquam purus
                                            sollicitudin. Cras eu metus felis. Sed arcu arcu, sagittis in blandit eu, imperdiet sit amet eros. Donec accumsan nisi purus, quis euismod ex volutpat in. Vestibulum eleifend eros ac lobortis aliquet.
                                            Suspendisse at ipsum vel lacus vehicula blandit et sollicitudin quam. Praesent vulputate semper libero pulvinar consequat. Etiam ut placerat lectus.</p>
                                        <a class="btn hvr-hover" href="#">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
</div>
<!-- End Shop Page -->

<!-- Start Instagram Feed  -->
<div class="instagram-box">
<div class="main-instagram owl-carousel owl-theme">
<div class="item">
    <div class="ins-inner-box">
        <img src="images/instagram-img-01.jpg" alt="" />
        <div class="hov-in">
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>
<div class="item">
    <div class="ins-inner-box">
        <img src="images/instagram-img-02.jpg" alt="" />
        <div class="hov-in">
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>
<div class="item">
    <div class="ins-inner-box">
        <img src="images/instagram-img-03.jpg" alt="" />
        <div class="hov-in">
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>
<div class="item">
    <div class="ins-inner-box">
        <img src="images/instagram-img-04.jpg" alt="" />
        <div class="hov-in">
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>
<div class="item">
    <div class="ins-inner-box">
        <img src="images/instagram-img-05.jpg" alt="" />
        <div class="hov-in">
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>
<div class="item">
    <div class="ins-inner-box">
        <img src="images/instagram-img-06.jpg" alt="" />
        <div class="hov-in">
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>
<div class="item">
    <div class="ins-inner-box">
        <img src="images/instagram-img-07.jpg" alt="" />
        <div class="hov-in">
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>
<div class="item">
    <div class="ins-inner-box">
        <img src="images/instagram-img-08.jpg" alt="" />
        <div class="hov-in">
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>
<div class="item">
    <div class="ins-inner-box">
        <img src="images/instagram-img-09.jpg" alt="" />
        <div class="hov-in">
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>
<div class="item">
    <div class="ins-inner-box">
        <img src="images/instagram-img-05.jpg" alt="" />
        <div class="hov-in">
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>
</div>
</div>
<!-- End Instagram Feed  -->

<!-- Start Instagram Feed  -->
<div class="instagram-box">
<div class="main-instagram owl-carousel owl-theme">
<div class="item">
    <div class="ins-inner-box">
        <img src="{{asset('frontend/images/instagram-img-01.jpg')}}" alt="" />
        <div class="hov-in">
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>
<div class="item">
    <div class="ins-inner-box">
        <img src="{{asset('frontend/images/instagram-img-02.jpg')}}" alt="" />
        <div class="hov-in">
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>
<div class="item">
    <div class="ins-inner-box">
        <img src="{{asset('frontend/images/instagram-img-03.jpg')}}" alt="" />
        <div class="hov-in">
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>
<div class="item">
    <div class="ins-inner-box">
        <img src="{{asset('frontend/images/instagram-img-04.jpg')}}" alt="" />
        <div class="hov-in">
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>
<div class="item">
    <div class="ins-inner-box">
        <img src="{{asset('frontend/images/instagram-img-05.jpg')}}" alt="" />
        <div class="hov-in">
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>
<div class="item">
    <div class="ins-inner-box">
        <img src="{{asset('frontend/images/instagram-img-06.jpg')}}" alt="" />
        <div class="hov-in">
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>
<div class="item">
    <div class="ins-inner-box">
        <img src="{{asset('frontend/images/instagram-img-07.jpg')}}" alt="" />
        <div class="hov-in">
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>
<div class="item">
    <div class="ins-inner-box">
        <img src="{{asset('frontend/images/instagram-img-08.jpg')}}" alt="" />
        <div class="hov-in">
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>
<div class="item">
    <div class="ins-inner-box">
        <img src="{{asset('frontend/images/instagram-img-09.jpg')}}" alt="" />
        <div class="hov-in">
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>
<div class="item">
    <div class="ins-inner-box">
        <img src="{{asset('frontend/images/instagram-img-05.jpg')}}" alt="" />
        <div class="hov-in">
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>
</div>
</div>
<!-- End Instagram Feed  -->
@endsection