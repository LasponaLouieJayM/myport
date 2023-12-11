$(document).ready(function () {
    to_home();
 });

 function to_home(){
    $.post("pages/home/home_main.php", {}, function (data) {
         $("#content").html(data); 
 });    
}



   