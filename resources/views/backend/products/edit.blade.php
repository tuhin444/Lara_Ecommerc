 @extends('backend.layouts.master')
 @section('title','Edit Product')
@section('content')

         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                <i class="fa fa-product-hunt" aria-hidden="true"></i>
               </div>
               <div class="header-title">
                  <h1>Edit Product</h1>
                  <small>Edit product</small>
               </div>
            </section>
            <!-- Main content -->
            
               @if(Session::has('flash_message_error'))
            <div class="alert alert-sm alert-danger alert-block" role="alert">
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
               <strong>{!! session('flash_message_error') !!}</strong>
            </div>
            @endif
            
            @if(Session::has('flash_message_success'))
            <div class="alert alert-sm alert-success alert-block" role="alert">
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
               <strong>{!! session('flash_message_success') !!}</strong>
            </div>
            @endif


            <section class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonlist"> 
                              <a class="btn btn-add " href="{{url('admin/view-product')}}"> 
                              <i class="fa fa-list"></i>  Product List </a>  
                           </div>
                        </div>
                        <div class="panel-body">
                          
                  <form class="col-sm-6" enctype="multipart/form-data" action="{{url('/admin/edit-product',$productDetails->id)}}" method="post"> 
                     @csrf
                     
                      <div class="form-group">
                        <label>Under Category</label>
                        <select name="category_id" id="category_id" class="form-control">
                           <?php echo $categories_dropdown; ?>
                        </select>
                     </div> 
                    
                      <div class="form-group">
                         <label>Product Name</label>
                         <input type="text" class="form-control" placeholder="Enter Product Name" name="product_name" id="product_name" value="{{$productDetails->name}}" required>
                      </div>
                      <div class="form-group">
                         <label>Product Code</label>
                         <input type="text" class="form-control" placeholder="Enter Product Code" name="product_code" id="product_code" value="{{$productDetails->code}}" required>
                      </div>
                      <div class="form-group">
                         <label>Product Color</label>
                         <input type="text" class="form-control" placeholder="Enter Product Color" name="product_color" id="product_color" value="{{$productDetails->color}}" required>
                      </div>
                      <div class="form-group">
                         <label>Product Description</label>
                         <textarea name="product_description" id="product_description" class="form-control">
                           {{$productDetails->description}}
                         </textarea>
                      </div>
                      
                      <div class="form-group">
                         <label>Product Price</label>
                         <input type="text" class="form-control" placeholder="Enter Price" name="product_price" id="product_price" value="{{$productDetails->price}}" required>
                      </div>


                      <div class="form-group">
                        <label>Picture upload</label>
                        <input type="file" name="image">
                      <input type="hidden" name="current_image" value="{{$productDetails->image}}">
                      @if(!empty($productDetails->image))
                    <img style="width:100px;margin-top:10px;" src="{{asset('/uploads/products/'.$productDetails->image)}}"> 
                    @endif 

                     </div>

                      <div class="reset-button">
                         <input type="submit" class="btn btn-success" value="Add Product">
                      </div>
                   </form>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- /.content -->
         </div>
    @endsection    