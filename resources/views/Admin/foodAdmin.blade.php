@extends('Admin/navbarAdmin')
@section('title')
Foods | Admin
@endsection
@section('content')
<!-- Header Starts -->
<div class="content-wrapper">
         <!-- Container-fluid starts -->
         <div class="container-fluid">
<div class="row">
               <div class="col-sm-12 p-0">
                  <div class="main-header">
                     <h4>Foods</h4>
                     
                     <!-- Trigger the modal with a button -->

<button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#myModal" style="display: inline-block; float:right ;margin-right:20px">
                     Add food
                    </button>


<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header"> <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add food</h1>
       
      </div>
      <div class="modal-body">
                         <form name="add-blog-Category-form" id="add-blog-Category-form" method="post" action="{{route('storeFood')}}"  enctype="multipart/form-data">
                         @csrf
                         <div class="form-group row">
                         <div class="form-group">
                                 <label for="name" class="form-control-label">Name</label>
                                 <input type="text" class="form-control" id="name" name="name" required placeholder="enter name">
                              </div>
                               <div class="form-group">
                                 <label for="description" class="form-control-label">Description</label>
                                 <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                              </div>
                              <div class="form-group">
                                 <label for="category" class="form-control-label">Category</label>
                                 <select class="form-control " default="il" id="category" name="category" required>
                                    <?php
                                    
                                     use App\Models\Category;
                                     $categories = Category::all();
                                    
                                    ?>
                                          <option value="" default >----select category---</option>   
                                          @foreach( $categories as $categorie)
                                            <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                                          @endforeach
                                        </select>
                              </div>
                              <div class="form-group row">
                                 <label for="file" class="col-md-2 col-form-label form-control-label">image </label>
                                 <div class="col-md-9">
                                    <label for="file"  class="custom-file">
                                                <input type="file" id="file" name="file" class="custom-file-input">
                                                <span class="custom-file-control"></span>
                                            </label>
                                          
                                 </div>
                              </div>

                              <div class="col-xs-3"  >
                            
                                 <input type="number" name="price" class="form-control" id="price" placeholder="price" min="0" required>DH
                              </div>
                             
                              
                           
                              </div>
                            
                              
                           
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary">Add</button>
             </form>        
      </div>
    </div>
  </div>
</div>
               
                  </div>
               </div>
            </div>
            <!-- Header end -->
             <!-- Row start -->
             <div class="row">
               <div class="col-sm-12">
                  <!-- Basic Table starts -->
                  <div class="card">
                     <div class="card-header">
                     
                        <h5 class="card-header-text">food</h5>
                        <!-- Button trigger modal -->
                  
                     </div>
                     <div class="card-block">
                       
                           
                             <!-- ?? card --> 
                             <div class="row row-cols-1 row-cols-md-6 g-4">                     
                                @foreach($foods as $food)
                                
                                    <div class="col">
                                       <div class="card">
                                          <img src=" {!! asset('images/food/'.$food->image) !!}" class="card-img-top" alt="{{$food->image}}">
                                          <div class="card-body">
                                          <h5 class="card-title">{{$food->name}}</h5>
                                          <p class="card-text">{{$food->description}}</p>
                                         <a href="{{route('deletefood',$food->id)}}"> <button type="button" class="btn btn-danger waves-effect waves-light" style="display:inline-block"><i class="fa-solid fa-trash"></i></button></a> <button type="button"  class="btn btn-primary waves-effect waves-light"  data-toggle="modal" data-target="#myModal2"><i class="fa-solid fa-pen"></i></button>
                     {{$food->price}} dh
                    
<div class="modal fade" id="myModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header"> <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add food</h1>
       
      </div>
      <div class="modal-body">
                         <form name="add-blog-Category-form" id="add-blog-Category-form" method="post" action="{{route('update_food',$food->id)}}"  enctype="multipart/form-data">
                         @csrf
                         <div class="form-group row">
                         <label for="id" class="form-control-label">id</label>
                         <div class="col-xs-3"  >
                            
                            <input type="number" name="id" class="form-control" id="id" placeholder="id" value="{{$food->id}}" min="0" disabled >
                         </div>
                         <div class="form-group">
                                 <label for="name" class="form-control-label">Name</label>
                                 <input type="text" class="form-control" id="name" name="name" required placeholder="enter name" value="{{$food->name}}">
                              </div>
                               <div class="form-group">
                                 <label for="description" class="form-control-label ">Description</label>
                                 <textarea class="form-control" id="description" name="description" rows="4"  required>{{$food->description}}</textarea>
                              </div>
                             
                              <div class="col-md-9">
                                    <label for="file"  class="custom-file">
                                                <input type="file" id="file" name="file" class="custom-file-input">
                                                <span class="custom-file-control"></span>
                                            </label>
                                          
                                 </div>

                              <div class="col-xs-3"  >
                            
                                 <input type="number" name="price" class="form-control" id="price" placeholder="price" value="{{$food->price}}" min="0" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; DH
                              </div>
                             
                              
                           
                              </div>
                            
                              
                           
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary">Add</button>
             </form>        
      </div>
    </div>
  </div>
</div>
      
                                       </div>
                                          
                                       </div>
                                    </div>
 
 
 

                            @endforeach
                            </div>
                            

                           
                         <!-- ?? -->
                         
                          
                    
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  <!-- Basic Table ends -->
         @endsection

        