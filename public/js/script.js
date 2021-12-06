// user
function editUser(id)
{
    
    $.ajax({
        url: "profil/"+id+"/edit",
        type: "GET",
        contentType:'false',
        processData:'false',
        cache:'false',
        success: function(result,status) {
            $("#userupdate").modal("show");
            $("#form_user_update").attr('action', '/profil/'+id);
            $("#name").val(result.name);
            $("#email").val(result.email);
            $("#phone").val(result.phone);
            $("#adresse").val(result.adresse);
            $("#user_id").val(result.id);
        },
        error: function(result,status,error) {
        },

    });

}
function updateUser()
{
    let id=$('#user_id').val();
   
                $("#form_user_update").submit();
                var data = $("#form_user_update").serialize();
         
}
// product 

function editProduct(id)
{
    
    $.ajax({
        url: "products/"+id+"/edit",
        type: "GET",
        contentType:'false',
        processData:'false',
        cache:'false',
        success: function(result,status) {
            $("#productedit").modal("show");
            $("#form_product_update").attr('action', '/products/'+id);
            $("#product_id").val(result.id);
            $("#name").val(result.labe);
            $("#descriptionp").val(result.description);
            $("#price_p").val(result.price);
           
            // $("#photo_p").val(result.photo);
            
            
        },
        error: function(result,status,error) {
        },

    });

}
function updateProduct()
{
    
   let id=$('#product_id').val();
                 $("#form_product_update").submit();
                var data = $("#form_product_update").serialize();
                
}