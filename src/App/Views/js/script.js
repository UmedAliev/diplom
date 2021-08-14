$(function(){

    $(".sign__btn").click(function(){

        let url = "{{ asset("/") }}";
        $.post("http://diplom/authorization", function(data, status){

             email = $("#email").val()
             password = $("#password").val()

        });

    });

});