

$(document).ready(function(){
	$("#add_to_cart").click(function(){

		$.ajax({
        url: '<?php echo ROOT_URL;?>expansion/Addtocart.php',
        type: 'POST',

        success:function(response){
           alert("Dodano do koszyka");
        }
   });
	});
});
