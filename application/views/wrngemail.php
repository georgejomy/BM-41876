<html>
<head>
	<title>Wrong Email</title>
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




 <div class="container-fluid header-color">
      <div class="container">
            <div class="row">
            	 <div class="col-md-2 col-md-offset-0  col-sm-offset-3 col-sm-6 col-sm-offset-3 col-xs-offset-2 col-xs-8 col-xs-offset-2  ">

               	<img src="<?php echo base_url(); ?>\img\flogo1.jpg" >
               	
               </div>

                <div class="col-md-2 col-md-offset-0  col-sm-offset-3 col-sm-6 col-sm-offset-3 hidden-xs ">

               	<button type="button" class="btn btn-success" style="margin-top:25px">Sign Up</button>
               	
               </div>


            </div>
      </div>   
 </div>



<?php 
foreach($data as $user){
  ?>



<section class=" bcolr">
      <div class="container">
            <div class="row">
                               



                               <div class="col-md-offset-3 col-md-6 boxcent  ">
                               	                  <span style="color:#4867aa;font-size:16;font-weight: bold;"> Facebook Login</span> <hr style="color:#4867aa"></hr>



                               

                                         <!--Start of section md area one-->
                                                  
                                                    <form role="form" method="post" action="<?php echo base_url(); ?>index.php/Welcome/loginControl">


                                                  <div class="row">
                                                  	
                                                  	<div class="col-md-4 st1"style="margin-top:10px" >
                                                  		Login Us :
                                                  	</div>
                                                  
                                                      <div class="col-md-8">

                                                  		    <div class="row">
                                                  			<div class="col-md-9">
                                                  		     
                                                               
                                                               <input text="type" name="enam" class="form-style" style="margin-top:5px">
                                                  		       </div>

                                                  		     
                                                  		     <div class="col-md-3"></div>

                                                               
                                                  	            </div>




                                                  	  </div>
                                                 

                                                 
                                                  


                                                  </div><!--end of section md area one-->

                                          






                               
                                         <!--Start of section md area two-->
                                                  



                                                  <div class="row">
                                                  	
                                                  	<div class="col-md-4 st1"style="margin-top:10px" >
                                                  		Password :
                                                  	</div>
                                                  
                                                      <div class="col-md-8">

                                                  		    <div class="row">
                                                  			<div class="col-md-9">
                                                  		     



                                                               <div class="row">
                                                                <div class="col-md-12">
                                                               
                                                            <input type="Password" name="passw" class="form-style" style="margin-top:5px">

                                                            <div class="checkbox">
                                                           <label><input type="checkbox" value=""><p style="margin-top:2px">Keep me log in</p></label>
                                                           </div>

                                                           <button type="submit" class="btn btn-primary" style="font-size:12px">Log In</button> or <a href="#">sign Up for Facebook</a>
                                                           <p style="mar">
                                                           <a href="#">forgotten password</a><p>

                                                  		          </div>
                                                              </div>





                                                             </div>

                                                  		    
                                                  		     <div class="col-md-3"></div>

                                                               
                                                  	            </div>




                                                  	  </div>
                                                 

                                                 
                                                  


                                                  </div><!--end of section md area two-->

                                          

                                    </form>







 <?php } ?> 


















                               </div>


            </div>
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


</body>
</html>