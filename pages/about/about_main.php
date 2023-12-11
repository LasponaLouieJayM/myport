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
        <a class="about m-4" style="cursor: pointer;">ABOUT MYSELF</a>
        <a class="text-light m-4" style="cursor: pointer;" onclick="to_project()">PROJECT</a>
        <a class="text-light m-4" style="cursor: pointer;" onclick="to_contact()">CONTACT ME</a>
      </div>
      </nav>
<h1 class="ljhead">Project</h1>
    <div class="row ">
        <div class="col" style="background-color: transparent; color: rgb(255, 255, 255);">
           <h3>HOBBIES</h3>
           <p>Playing Guitar</p>
           <p>Watching Animes and Movies</p>
           <p>Reading Some Manwha or Webtoons</p>
        </div>
        <div class="col" style="background-color: transparent; color: rgb(255, 255, 255);">
        <h3>SKILLS</h3> 
        <p>Programmer</p>
        <p>Web Designer</p>
        <p>Game Developer</p>
        </div>
        <div class="col" style="background-color: transparent; color: rgb(255, 255, 255);">
        <h3>TALENTS</h3>
        <p>Dancing</p>
        <p>Singing</p>
        <p>Guitarist</p>
        </div>
    </div>
<script>
  function to_home(){
    $.post("pages/home/home_main.php", {}, function (data) {
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
