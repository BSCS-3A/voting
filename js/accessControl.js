$(document).ready(function(){
    $("#lastnamesearch").keyup(function(){
        var lastname = $(this).val();
        if(lastname != ''){
            $.ajax({
                url:'../database/lastnamesearch.php',
                method:'post', 
                data:{query:lastname},
                success:function(response){
                    $(".lastname-list").html(response);
                    $(".lastname-list").show();
                    console.log(response);
                }
            });
        }
        else{
            $(".lastname-list").html('');
        }
    });