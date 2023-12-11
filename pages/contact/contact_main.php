<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styletry.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<nav>
      <div class="navs d-flex ">
        <a class="text-light m-4" style="cursor: pointer;" onclick="to_home()">HOME</a>
        <a class="text-light m-4" style="cursor: pointer;" onclick="to_about()">ABOUT MYSELF</a>
        <a class="text-light m-4" style="cursor: pointer;" onclick="to_project()">PROJECT</a>
        <a class="contact m-4" style="cursor: pointer;">CONTACT ME</a>
      </div>
      </nav>
      <div class="ljbg">
    <h1 class="ljhead">Contact</h1>
    <div class="row">
       <div class="col-6" style="background-color: transparent; color: rgb(255, 255, 255);">
        <h1>Facebook</h1>
        <p>https://web.facebook.com/louizky07002</p>
        <a href="https://www.facebook.com/louizky07002"><img src="https://i.pinimg.com/474x/fd/93/f0/fd93f02de56410cf1a1a233e9d2f711e.jpg" alt="" class="ljimg"></a>
       </div>
       <div class="col-6" style="background-color: transparent; color: rgb(251, 251, 251);">
        <h1>Gmail</h1>
        <p>louizkylaspona@gmail.com</p>
        <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=new"> <img src="https://i.pinimg.com/474x/c3/83/aa/c383aac9b5c231365451910306c6a341.jpg" alt="" class="ljimg"></a>
       
       </div>
    </div>
</div>
<script>
  function to_about(){
    $.post("pages/about/about_main.php", {}, function (data) {
         $("#content").html(data); 
 });    
}
function to_project(){
    $.post("pages/projects/projects_main.php", {}, function (data) {
         $("#content").html(data); 
 });    
}
function to_home(){
    $.post("pages/home/home_main.php", {}, function (data) {
         $("#content").html(data); 
 });    
}
</script>
</body>
</html>
