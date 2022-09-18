<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <style type="text/css">
   .row .col-8{
   padding:0px;
   }
   
   .row img{
   margin:0px;
   }
   
   .topm{
   top:75px;
   position:absolute;
   }
   .intro{
   background:#DEFAFF;
  }
  
  .head-a a{
  text-decoration:none;
  color:#333;
  }
  
  .black-a{
  color:#333;
  }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container p-4">
    
    
    <div class="row mb-5">
    <div class="col-4 col-sm-2 mx-0">
    <img src="img.jpg" width="95px" height="95px"  class="rounded-circle" alt="Cinque Terre">
    </div>
    
    <div class="col-8 pt-3 mx-0 head-a">
    <a href="/?url=home" >
    <b class="fs-2 pb-0">SOIFANT</b></a>
  	<div><small class="badge bg-info topm">Web development</small></div>
    </div>
    
    
    
    <?php if($data['index'] == 'admin') : ?>
    
    <div class="mt-3 head-a" ><b>
    <a href="?url=admin" >
    <span class="fs-6 <?php if($data['page'] == 'Beranda') { echo 'border-bottom border-info border-2'; } ?>">
    PROJECT
    </span></a>
    
    <a href="?url=admin/articel" >
    <span class="fs-6 mx-3 <?php if($data['page'] == 'articel') { echo 'border-bottom border-info border-2'; } ?>">
    ARTICEL
    </span></a>
    
    
    
    </b>
    </div>
    
    <?php else :?>
    <div class="mt-3 head-a" ><b>
   <a href="?url=home/project" >
   <span class="fs-6 <?php if($data['page'] == 'project') { echo 'border-bottom border-info border-2'; } ?>">
   PROJECT
   </span></a>
   
   <a href="?url=home/articel" >
   <span class="fs-6 mx-3 <?php if($data['page'] == 'articel') { echo 'border-bottom border-info border-2'; } ?>">
   ARTICEL
   </span></a>
   
   <a href="?url=home/contack" >
   <span class="fs-6 <?php if($data['page'] == 'contack') { echo 'border-bottom border-info border-2'; } ?>">
   CONTACK
   </span></a>
   
    </b>
    </div>
    
    <?php endif ;?>
    
    </div>
    
   