<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>
@extends('home')

@section('content')
<div class="text-right">
<button class="btn btn-outline-primary" data-toggle="modal" data-target="#productadd"  >Ajouter</button>
</div>
<!-- add product -->
<div class="modal fade" id="productadd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{url('products')}}" method="POST"  enctype="multipart/form-data">
        @csrf
      <div class="modal-body">
      
  <div class="form-group">
    <label for="exampleInputEmail1">Product name :</label>
    <input type="text" class="form-control" name="labe" id="label"  placeholder="Enter product name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Picture</label>
    <input type="file" class="form-control-file" name="photo" id="photo">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <textarea  class="form-control" id="description" name="description" placeholder="Enter description"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Price</label>
    <input type="number" class="form-control" id="price" name="price"  placeholder="Enter price">
  </div>
 
  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit"  class="btn btn-primary">Add</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- end add product -->
<!-- search -->
<div class="ibox-content m-b-sm border-bottom">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="col-form-label" for="product_name">Product Name</label>
                            <input type="text" id="product_name" name="product_name" value="" placeholder="Product Name" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="col-form-label" for="price">Description</label>
                            <input type="text" id="price" name="price" value="" placeholder="Price" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="col-form-label" for="quantity">Price</label>
                            <input type="text" id="quantity" name="quantity" value="" placeholder="Quantity" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="col-form-label" for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="1" selected="">Enabled</option>
                                <option value="0">Disabled</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- end search -->
                <!-- affichage -->
                <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">

                            <table class="footable table table-stripped toggle-arrow-tiny default breakpoint footable-loaded" data-page-size="15">
                                <thead>
                                   
                                <tr>

                                    <th data-toggle="true" class="footable-visible footable-first-column footable-sortable">Product Name<span class="footable-sort-indicator"></span></th>
                                    <th data-hide="all" class="footable-sortable">Description<span class="footable-sort-indicator"></span></th>
                                    <th data-hide="phone" class="footable-visible footable-sortable">Price<span class="footable-sort-indicator"></span></th>
                                    <th class="text-right footable-visible footable-last-column" data-sort-ignore="true">Action</th>

                                </tr>
                                
                                </thead>
                                <tbody>
                                @foreach($products as $item)
                                <tr class="footable-even" style="">
                                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>
                                      {{$item->labe}}
                                    </td>
                                    <td class="footable-visible">
                                        {{$item->description}}
                                    </td>
                                   
                                    <td class="footable-visible">
                                    <code>    {{$item->price}}</code>
                                    </td>
                                   
                                
                                    <td class="text-right footable-visible footable-last-column">
                                        <div class="btn-group">
                                            <a href="products/{{$item->id}}" class="btn btn-primary btn-xs">View</a>
                                            <a class="btn btn-outline-secondary btn-xs" data-toggle="modal" data-target="#productedit"  >Edit</a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                
                                <!-- end affichage -->
                                <!-- edit product -->
        <div class="modal fade" id="productedit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  
                                <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{url('products')}}" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
      
  <div class="form-group">
    <label for="exampleInputEmail1">Product name :</label>
    <input type="email" class="form-control" id="name"  placeholder="Enter product name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Picture</label>
    <input type="file" class="form-control-file" id="photo">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <textarea  class="form-control" id="description"  placeholder="Enter description"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Price</label>
    <input type="number" class="form-control" id="price"  placeholder="Enter price">
  </div>
 
  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a type="button"  class="btn btn-primary">Edit</a>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- end edit product -->
   

                                </tbody>
                                <tfoot>
                                <tr>
                                    
                                </tr>
                                </tfoot>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
            </div>
            
@endsection
</body>
</html>
