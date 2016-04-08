$("#registrorol").click(function(){
    var dato = $("#desc").val();
    var route = "/rol";
    var token = $("#token").val();

    $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'POST',
        dataType: 'json',
        data:{desc: dato},

        success:function(){
            $("#msj-success").fadeIn();
        },
        error:function(msj){
            $("#msj").html(msj.responseJSON.desc);
            $("#msj-error").fadeIn();
        }
    });
    

});