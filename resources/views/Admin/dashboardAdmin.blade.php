@extends('Admin/navbarAdmin')
@section('title')
dashboard | Admin
@endsection
@section('content')
<div class="content-wrapper">
<!-- Container-fluid starts -->
         <!-- Main content starts -->
         <div class="container-fluid">
            <div class="row">
               <div class="main-header">
                  <h4>Dashboard</h4>
               </div>
            </div>
            <!-- 4-blocks row start -->
            <div class="row dashboard-header">
               <div class="col-lg-3 col-md-6">
                  <div class="card dashboard-product">
                     <span>Users</span>
                     <h2 class="dashboard-total-products">{{$usersCount}}</h2>
                     <span class="label label-warning">users numbers</span>
                     <div class="side-box">
                        <i class="ti-users text-warning-color"></i>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="card dashboard-product">
                     <span>Visitors Today</span>
                     <h2 class="dashboard-total-products">{{$visitors}}</h2>
                     <span class="label label-primary">Views</span>
                     <div class="side-box ">
                        <i class="ti-gift text-primary-color"></i>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="card dashboard-product">
                     <span>orders today</span>
                     <h2 class="dashboard-total-products"><span>{{$orders}}</span></h2>
                     <span class="label label-success">order</span>
                     <div class="side-box">
                        <i class="ti-direction-alt text-success-color"></i>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="card dashboard-product">
                     <span>earn today</span>
                     <h2 class="dashboard-total-products"> <span>  {{$earn}}</span> MAD</h2>
                     <span class="label label-danger">earn </span>
                     <div class="side-box">
                        <i class="ti-rocket text-danger-color"></i>
                     </div>
                  </div>
               </div>
            </div>
            <!-- 4-blocks row end -->

            
               </div>
               <!-- Pie chart(Without legend) end -->
                <!-- 2-1 block start -->
            <div class="row">
              
                 
               
           
         </div>
         <!-- Main content ends -->
         <!-- Container-fluid ends -->
         </div>
         @endsection