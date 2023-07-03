
$(document).ready(function(){

    console.log('jQuery esta funcionando');

    $('#search').keyup(function(e){
       let search = $('#search').val();
       $.ajax({
           URL: 'resultados.php',
           type: 'POST',
           data: { search },
           success: function(response){
               console.log(response);
           }
       })
       
    })

});