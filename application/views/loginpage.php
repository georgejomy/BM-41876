<html>
<head>
	<title>Log In page</title>

  <?php $this->load->helper('url'); ?>

   <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" href="<?php echo base_url(); ?>\img\flogo1.jpg">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>/css/jquery.js"></script>
<script src="<?php echo base_url(); ?>/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/style.css">


</head>
<body>


<?php 
//foreach($data as $user){
  ?>

 <div class="container-fluid header-color">
      <div class="container">
            <div class="row">
            	 <div class="col-md-2 col-md-offset-0  col-sm-offset-3 col-sm-6 col-sm-offset-3 col-xs-offset-2 col-xs-8 col-xs-offset-2  ">

               	<img src="<?php echo base_url(); ?>\img\flogo1.jpg" class="img-responsive">
               	
               </div>

                <div class="col-md-6 col-md-offset-0  col-sm-offset-3 col-sm-6 col-sm-offset-3 hidden-xs ">

           

<div class="input-group" style="margin-top:20px">
    <input type="text" class="form-control" placeholder="Search Facebook"/>
    <span class="input-group-addon">
        <i class=" glyphicon glyphicon-search"></i>
    </span>
</div>
            
                                  
                             
               	
               </div>


               <div class="col-md-4">
                 <div class="hig">

                <img src="<?php echo $data['pro_img'];?>" style="width:30px;height:30px">
                 <span style="color:white"> <?php echo $data['f_name'];?> 
                  <?php echo $data['s_name'];?>   </span>
                   </div>

               </div>


            </div>
      </div>   
 </div>






<section class=" bcolr">
      <div class="container">
            <div class="row">
                      


                 <!--first area-->
                 <div class="col-md-2 topar">
                      
                   
                  <div class="hig">

                <img src="<?php echo $data['pro_img'];?>" style="width:25px;height:25px">
                 <span style="color:black"> <?php echo $data['f_name'];?> 
                  <?php echo $data['s_name'];?></span>
                   </div>


                    <div class="hig">

                <span class="glyphicon glyphicon-user" style="font-size:14px;margin-left:5px"></span>
                 <span style="color:black"> Edit Profile</span>
                   </div>


                 </div><!--end of first area-->
                 



                 <!--2nd area-->
               
                 





                 <div class="col-md-7 col-md-offset-0">





                <!--inner area of 2nd part-->
                   <div class="box2"> 
                 <div class="row ">

                       <div class="col-md-4">
                 <span class="glyphicon glyphicon-pencil" style="font-size:14px;margin-left:5px"></span>
                 <span style="color:#4867aa">Updates Status </span>
                 </div>
                 
                 <div class="col-md-4">
                 <span class="glyphicon glyphicon-film" style="font-size:14px;margin-left:5px"></span>
                 <span style="color:#4867aa">Add Photo\Video </span>
                 </div>
                 
                 
                 <div class="col-md-4">

                  <span class="glyphicon glyphicon-file" style="font-size:14px;margin-left:5px"></span>
                 <span style="color:#4867aa">Write\Note </span>
                 </div> 
                 
                 </div> 

                <!--end of inner area of 2nd part-->

                 
                 <hr style="margin:5 0 0 0">

                 

                 <div class="row">
                  <div class="col-md-12" style="margin-top:15px">
                 <img src="<?php echo $data['pro_img'];?>" style="width:60px;height:60px">
                 <p style="display:inline;padding-left:10px">What on your mind ?</p>
                  </div>
                 </div>
                 </div>

                 <!--2nd inner-->
                 
                 <div class="box2 higd">

 



               </div>

               </div>



                 <!--end of 2nd area-->
                 <!--3rd area-->




                 <div class="col-md-3 box2"><span style="color:#4867aa">Your add</span>
                  <hr>
                  asfasfsafasfaf

                 </div><!--end of 3rd area-->          

            
      </div>
</section>    






<footer>
      <div class="container-fluid">
        <div class="container">

     <div class="row">
       <div class=" fot-styl col-md-12 col-md-offset-0 col-xs-offset-2 col-xs-8 col-xs-offset-2 col-sm-offset-3 col-sm-6 col-sm-offset-3 ">
        English (UK) <a href="#">தமிழ்</a> <a href="#">తెలుగు</a> <a href="#">ಕನ್ನಡ</a> <a href="#">اردو</a> <a href="#">हिन्दी</a> <a href="#">മലയാളം</a> <a href="#">ਪੰਜਾਬੀ</a> <a href="#">ગુજરાતી</a>   <a href="#">বাংলা </a> 
        <HR style="border-top:1px solid #dddfe2">
       </div>


     </div>


 <div class="row">
       <div class=" fot-styl col-md-12 col-md-offset-0 col-xs-offset-2 col-xs-8 col-xs-offset-2 col-sm-offset-3 col-sm-6 col-sm-offset-3 hidden-xs">

        
       </div>


     </div>



     </div>
     </div>
    </footer>       

 <?php // }?> 
</body>
</html>