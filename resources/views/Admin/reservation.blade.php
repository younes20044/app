@extends('Admin/navbarAdmin')
@section('title')
orders | Admin
@endsection
@section('content')
<!-- Header Starts -->
<div class="content-wrapper">
         <!-- Container-fluid starts -->
         <div class="container-fluid">
<div class="row">
               <div class="col-sm-12 p-0">
                  <div class="main-header">
                     <h4>orders</h4>
                    
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
                        <h5 class="card-header-text">orders</h5>
                        
                     </div>
                     <div class="card-block">
                        <div class="row">
                           <div class="col-sm-12 table-responsive">
                              <table class="table">
                                 <thead>
                                    <tr>
                                       <th>order </th>
                                       <th>number</th>
                                       <th>price</th>
                                       <th>phone number</th>
                                       <th>user name</th>
                                       <th>Adresse</th>
                                       <th>at</th>
                                       <th>status</th>
                                       
                                       
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach($reservations as $reservation )
                                     <tr>
                                       <td>{{$reservation->food->name}}</td>
                                       <td>{{$reservation->nb}}</td>
                                       <td>{{$reservation->prix}} MAD</td>
                                       <td>{{$reservation->numero_de_telephone}}</td>
                                       <td>{{$reservation->user->first_name.' '.$reservation->user->last_name}}</td>
                                       <td><button type="button"  class="btn btn-primary waves-effect waves-light"  data-toggle="modal" data-target="#myModal2"><i class="fa-sharp fa-regular fa-eye" style="color: #ffffff;"></i></button></button></td>
                                       <td>{{$reservation->created_at}}</td>
                                       <td><a href="{{route('updateStatus',$reservation->id)}}"><button  d name="confirm" <?php if ($reservation->confimer=='yes') echo 'disabled' ?>>  <?php if ($reservation->confimer=='yes') echo 'confirm ✔';else echo 'confirm' ?></button></a></td>
                                      
                                       
                                    </tr>
                                    <div class="modal fade" id="myModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header"> <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Address</h1>
                                    
                                    </div>
                                    <div class="modal-body">
                                      <p>{{$reservation->address_reservation}}</p>                      
                                    </div>
                                    </div>
                                </div>
                                </div>
                                    @endforeach
                                   
                                

                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
                  </div>
                  </div>
                  <!-- Basic Table ends -->
                  </div>
                  </div>
            @endsection
