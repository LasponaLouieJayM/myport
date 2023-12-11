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
        <a class="project m-4" style="cursor: pointer;">PROJECT</a>
        <a class="text-light m-4" style="cursor: pointer;" onclick="to_contact()">CONTACT ME</a>
      </div>
      </nav>
      <div class="ljbg">
    <h1 class="ljhead">Project</h1>
    <div class="row">
        <div class="col" style="background-color: transparent; color: rgb(255, 255, 255);">
           <h3>First Year</h3>
           <h4>First Semester</h4>
           <p>Simple Calculator</p>
           <img src="assets\img\Screenshot (245).png" alt="" class="ljpic">
        </div>
        <div class="col" style="background-color: transparent; color: rgb(255, 255, 255);">
            <h3>First Year</h3>
            <h4>Second Semester</h4>
            <p>Making Tetris Game</p>
            <img src="assets\img\Screenshot (246).png" alt="" class="ljpic">
        </div>
        <div class="col" style="background-color: transparent; color: rgb(255, 255, 255);">
            <h3>Second Year</h3>
            <h4>First Semester</h4>
            <p>Making Customer Feedback Web App</p>
            <img src="assets\img\Screenshot (247).png" alt="" class="ljpic">
        </div>
    </div>
</div>
<script>
  function to_about(){
    $.post("pages/about/about_main.php", {}, function (data) {
         $("#content").html(data); 
 });    
}
function to_home(){
    $.post("pages/home/home_main.php", {}, function (data) {
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
