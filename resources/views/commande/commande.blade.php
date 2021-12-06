@extends('home')

@section('content')

<table class="footable table table-stripped toggle-arrow-tiny default breakpoint footable-loaded" data-page-size="15">
    <thead>
                                   
         <tr>

           <th data-toggle="true" class="footable-visible footable-first-column footable-sortable">Order<span class="footable-sort-indicator"></span></th>
            <th data-hide="all" class="footable-sortable">Description<span class="footable-sort-indicator"></span></th>
             <th data-hide="phone" class="footable-visible footable-sortable">Date<span class="footable-sort-indicator"></span></th>
            <th data-hide="phone" class="footable-visible footable-sortable">Product<span class="footable-sort-indicator"></span></th>
            <th data-hide="phone" class="footable-visible footable-sortable">User<span class="footable-sort-indicator"></span></th>


        </tr>
                                
     </thead>
    <tbody>
        @foreach($order as $ord)
         <tr class="footable-even" >
              <td class="footable-visible footable-first-column">
                {{$ord->id}}
             </td>
                <td class="footable-visible">
                {{$ord->description}}                  
                </td>
                                   
                <td class="footable-visible">
                {{$ord->date_order}}        
                 </td>
                  <td class="footable-visible">
                  {{$ord->product_id}}      
                 </td>
                 <td class="footable-visible">
                 {{$ord->user_id}} 
                 </td>
         </tr>
                                                                
            @endforeach
   

    </tbody>
                                <tfoot>
                               
                                </tfoot>
</table>
                
                    
@endsection