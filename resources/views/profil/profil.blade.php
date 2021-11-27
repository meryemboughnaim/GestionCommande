@extends('home')
@section('content')



<!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"> -->
<div class="container">
<div class="col-md-8 col-lg-12">
<div class="text-center card-box">
  <div class="row">
    <div class="col-lg-4">
    <div class="thumb-xl member-thumb m-b-8 center-block" class="w-25">
                        <img src="https://bootdey.com/img/Content/avatar/avatar6.png"  class="img-circle img-thumbnail " alt="profile-image">
    </div>
    <div class="">
    <h4 class="m-b-6">{{$user->name}}</h4>
  
</div>
    </div>
    <div class="col-lg-6">
    <div class="text-Left pt-5 ">
                        <p class="text-muted font-13"><strong>Full Name :</strong> <span class="m-l-15">{{$user->name}}</span></p>
                        <p class="text-muted font-13"><strong>Mobile :</strong><span class="m-l-15">{{$user->phone}}</span></p>
                        <p class="text-muted font-13"><strong>Email :</strong> <span class="m-l-15">{{$user->email}}</span></p>
                        <p class="text-muted font-13"><strong>Adresse :</strong> <span class="m-l-15">{{$user->adresse}}</span></p>
         
                    </div>
    </div>
    
  </div>
  <div class="text-right">
    <a  href="javascript:editUser({{$user->id }})"  class="btn btn-info btn-sm w-sm waves-effect m-t-10 waves-light">Modifier</a>
     </div>
     <!-- modal modifier -->
     <div class="modal fade" id="userupdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update user</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
      <form action="" method="POST" id="form_user_update" autocomplete="off" enctype="multipart/form-data">
        
        @method('PUT')
        @csrf
      <div class="form-group text-left">
    <label for="exampleInputEmail1">Name :</label>
    <input type="hidden"  name="id" id="user_id">
    <input type="email" class="form-control" name="name" id="name"  placeholder="Enter product name">
  </div>
  <div class="form-group text-left">
    <label for="exampleInputEmail1">Email :</label>
    <input type="email" class="form-control" name="email" id="email"  placeholder="Enter product name">
  </div>
  <div class="form-group text-left">
    <label for="exampleInputEmail1" >Phone :</label>
    <input type="email" class="form-control" name="phone" id="phone"  placeholder="Enter product name">
  </div>
  <div class="form-group text-left">
    <label for="exampleInputEmail1" >Picture :</label>
    <input type="file" class="form-control" name="photo" id="picture"  placeholder="Enter product name">
  </div>
  <div class="form-group text-left">
    <label for="exampleInputEmail1">Adresse :</label>
    <input type="email" class="form-control" name="adresse" id="adresse"  placeholder="Enter product name">
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="javascript:updateUser()" class="btn btn-primary" >Save </a>
      </div>
      
    </div>
  </div>
</div>
     <!-- end modal -->
</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
 integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <script src="/js/script.js" />
 


@endsection