$("#registroemp").click(function(){
    var rfc = $("#rfc2").val();
    var rfc = $("#rfc").val();
    var name = $("#name").val();
    var legalagent = $("#legalagent").val();
    var type = $("#type").val();
    var status = $("#status").val();
    var email = $("#email").val();
    var address = $("#address").val();
    var phone = $("#phone").val();
    var route = "/empresa";
    var token = $("#token").val();
    var dato = {
            rfc: rfc,
            name: name,
            legalagent: legalagent,
            type: type,
            status: status,
            email: email,
            address: address,
            phone: phone
        };

    $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'POST',
        dataType: 'json',
        data:dato,

        success:function(){
            $("#msj-success").fadeIn();
        },
        error:function(msj){
            $("#msj").html(msj.responseJSON.desc);
            $("#msj-error").fadeIn();
        }
    });

});