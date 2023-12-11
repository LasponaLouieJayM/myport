<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/styletry.css">
  <title>Document</title>
</head>
<body> 

<div class="bg">
<nav>
      <div class="navs d-flex ">
        <a class="home m-4" style="cursor: pointer;">HOME</a>
        <a class="text-light m-4" style="cursor: pointer;" onclick="to_about()">ABOUT MYSELF</a>
        <a class="text-light m-4" style="cursor: pointer;" onclick="to_project()">PROJECT</a>
        <a class="text-light m-4" style="cursor: pointer;" onclick="to_contact()">CONTACT ME</a>
      </div>
      </nav>
<div class="ljbg">
    <img src="https://scontent.fceb1-1.fna.fbcdn.net/v/t39.30808-6/366566083_989296495516410_1571071478961839917_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeF9GeQN_YKP1vu6ErSqDFdJQSgws8Fn_GFBKDCzwWf8Yc1VL14Supq-v09g6WVR3mPcJehH6h9gjqrz43gzAdMg&_nc_ohc=vbusm72NpAwAX_ETSW8&_nc_zt=23&_nc_ht=scontent.fceb1-1.fna&oh=00_AfB43N7J28iEG7I0SZMCUQhDNpRlf1uKSqSYpNXkMu18Fg&oe=655C69D9" alt="" >
    <div class="d-flex">
        <div class="me">
          <img src="assets\img\mypic1-removebg-preview1.png" alt="" class="me">
        </div>
        <div >
         <p class="name">LOUIE JAY LASPOÑA</p> 
         <p class="prop"> PROGRAMMER & WEB DESIGNER</p>
         <h1 class="cliff-h1">Welcome to the Home Page</h1>
         <p class="ljp">This is my Portfolio</p>
        </div>
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
function to_contact(){
    $.post("pages/contact/contact_main.php", {}, function (data) {
         $("#content").html(data); 
 });    
}
</script>
</body>
</html>