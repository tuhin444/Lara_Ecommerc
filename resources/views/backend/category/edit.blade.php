@extends('backend.layouts.master')
@section('title','Add Category')
@section('content')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
        <i class="fa fa-product-hunt" aria-hidden="true"></i>
       </div>
       <div class="header-title">
          <h1>Add Category</h1>
          <small>Add Category</small>
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
                      <a class="btn btn-add " href="{{url('admin/view-category')}}"> 
                      <i class="fa fa-list"></i>  Category List </a>  
                   </div>
                </div>
                <div class="panel-body">
                  
          <form class="col-sm-6" action="{{url('/admin/add-category')}}" method="Post"> 
             @csrf
            
              <div class="form-group">
                 <label>Category Name</label>
                 <input type="text" class="form-control" placeholder="Enter Category Name" name="category_name" id="category_name" required value="{{$categoryDetails->name}}">
              </div>
              <div class="form-group">
                         <label>Parent Category</label>
                         <select name="parent_id" id="parent_id" class="form-control">
                             <option value="0">Parent Category</option>
                             @foreach($levels as $val)
                         <option value="{{$val->id}}" @if($val->id==$categoryDetails->parent_id) selected @endif>{{$val->name}}</option>
                             @endforeach
                         </select>
                      </div>
              <div class="form-group">
                 <label>Category Url</label>
                 <input type="text" class="form-control" placeholder="Enter Product Color" name="category_url" id="category_url" required value="{{$categoryDetails->url}}">
              </div>
              <div class="form-group">
                 <label>Category Description</label>
                 <textarea name="category_description" id="category_description" class="form-control">
                   {{$categoryDetails->description}}
                 </textarea>
              </div>
              
            
              <div class="reset-button">
                 <input type="submit" class="btn btn-success" value="Add Category">
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