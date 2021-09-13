@extends('admin.admin_master')
@section('admin')

<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
     
      <section class="content">

        <!-- Basic Forms -->
         <div class="box">
           <div class="box-header with-border">
             <h4 class="box-title"> Password Change </h4>
             
           </div>
           <!-- /.box-header -->
           <div class="box-body">
             <div class="row">
               <div class="col">
                   <form method="post" action="{{route('password.update')}}" >
                    @csrf
                     <div class="row">
    
 
   <div class="form-group">
       <h5>Cureent Password <span class="text-danger"></span></h5>
       <div class="controls">
           <input type="password" name="old_password" id="current_password" class="form-control" required=""> @error('old_password')
           <span class="text-danger">{{$message}}</span>
       @enderror    
    </div>
          
     
   </div>


   <div class="form-group">
    <h5> New password<span class="text-danger"></span></h5>
    <div class="controls">
        <input type="password" name="password" id="password" class="form-control" required="">
        @error('password')
        <span class="text-danger">{{$message}}</span>
    @enderror  </div>
  
</div>

<div class="form-group">
    <h5> Confirm password<span class="text-danger"></span></h5>
    <div class="controls">
        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required=""> 
        @error('password_confirmation')
        <span class="text-danger">{{$message}}</span>
    @enderror
    </div>
  
</div>



</div>


  
 <div class="text-xs-right">
  <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
                          
                        
                       </div>
                   </form>

               </div>
               <!-- /.col -->
             </div>
             <!-- /.row -->
           </div>
           <!-- /.box-body -->
         </div>
         <!-- /.box -->

       </section>
       <!-- /.content -->
     </div>
 </div>
     
    </div>
</div>












@endsection