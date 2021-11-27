
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
        },
        error: function(result,status,error) {
            swal("Erreur", "Quelque chose s'est mal passé. Veuillez réessayer ou contactez IT! \n"+result.status+" "+result.statusText+"\n\n"+result.responseText, "error");
        },

    });

}
function updateUser()
{
    let id=$('#user_id').val();
   
                $("#form_user_update").submit();
                var data = $("#form_user_update").serialize();
         
}