$(function Llamar(){
    $("#btn-enviar").click(function(){
        var url = "ajax.php";
        $.ajax({
            type: "POST",
            url: url,
            data: $("#formulario1").serialize(),
            success: function(data)
            {
                $("#datos").html(data);
            }
        });
        return false;
    });
});