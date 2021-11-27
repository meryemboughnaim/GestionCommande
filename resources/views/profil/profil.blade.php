@extends('home')
@section('content')


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
<div class="col-md-8 col-lg-12">
<div class="text-center card-box">
  <div class="row">
    <div class="col-lg-4">
    <div class="thumb-xl member-thumb m-b-8 center-block" class="w-25">
                        <img src="https://bootdey.com/img/Content/avatar/avatar6.png"  class="img-circle img-thumbnail " alt="profile-image">
    </div>
    <div class="">
    <h4 class="m-b-6">John J. Doe</h4>
    <button type="button" class="btn btn-info btn-sm w-sm waves-effect m-t-10 waves-light">@johndoe</button>
     </div>
    </div>
    <div class="col-lg-6">
    <div class="text-Left pt-5 ">
                        <p class="text-muted font-13"><strong>Full Name :</strong> <span class="m-l-15">Johnathan Deo</span></p>
                        <p class="text-muted font-13"><strong>Mobile :</strong><span class="m-l-15">(123) 123 1234</span></p>
                        <p class="text-muted font-13"><strong>Email :</strong> <span class="m-l-15">johndoe@bootdey.com</span></p>
                        <p class="text-muted font-13"><strong>Adresse :</strong> <span class="m-l-15">Adress ......................</span></p>
                        <p class="text-muted font-13"><strong>Location :</strong> <span class="m-l-15">USA</span></p>
                    </div>
    </div>
  </div>
</div>
</div>



@endsection