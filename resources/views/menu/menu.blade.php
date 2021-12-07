<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
@extends('home')
@section('content')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    

        <div class="col-md-8 col-lg-12">
            <div class="">
                <div class="">
                    <ul class="nav nav-tabs navtab-custom">
                        <li class="active">
                            <a href="#profile" data-toggle="tab">
                                <span class="visible-md"><i class="fa fa-cutlery"></i></span>
                                <span class="hidden-md">Menu</span>
                            </a>
                        </li>
                    </ul>
                        <div class="tab-pane active" id="profile">
                            <div class="row">
                                @foreach($product as $pro)
                                <div class="col-sm-4 mt-5" >
                                    <div class="gal-detail thumb">
                                            <img style="width: 100%; height:200px;" src="/assets/images/{{$pro->photo}}" class="thumb-img rounded" alt="work-thumbnail">
                                            
                                        <h4 class="text-center">{{$pro->labe}}</h4>
                                        <div class="ga-border"></div>
                                        <p class=" text-center">{{$pro->price}} DH</p>
                                        <div class="text-center">
                                                <button type="button" class="btn btn-info"><i class="fa fa-shopping-cart"></i> Ajouter au panier </button>
                                        </div>
                                    </div>
                                </div>
                               @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->

@endsection
</body>
</html>
