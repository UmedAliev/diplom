$(function(){
alert("srdf")

    $("#signin").click(function(){


        let email = $("#email").val();
        let password = $("#password").val();

        let data = {
            email:email,
            password:password,
        };


        $.post("http://localhost/diplom/authorization",data ,function(){

        }).done(function(test){
            alert("sdfdg")
        });



    });

});