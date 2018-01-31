<?php
#Register.php

?>

<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       <meta name="viewport" content="width=device-width, initial-scale=1">
	
	   <style>
               @font-face{
        font-family: 'Billy Ohio';
        src: url(http://engineering.apssdc.in/i2e/font/billy.woff) format('woff');
    }
  
     @font-face {
            font-family: 'droid_sansregular';
            src: url(http://engineering.apssdc.in/i2e/font/DroidSans-webfont.woff);
        }
             p,h2{text-align: center;
          font-family: 'Billy Ohio';}
          container{
              background-color: #000;
              }
              body{
                  background-image: url('/img/ghost.jpg');
                  background-size: cover;
                 
                 
		background-attachment: fixed;
                
              }
              .footer{
                  background-color: black;
                 
              }
              a{
                  text-decoration: none;
              }
              navbar{ 
              text-align: center;}
              h4{font-size: 15px;}
              #footer {
		background-color: #000;
		color: white;
		padding: 5px 0 4px 0;
		position: relative;
	}
      </style>
    
    
    


	
	<title>	Registration samyak</title>
</head>
<body">
  
<nav class=" navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        
                    </button> 
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li class="navbar-brand"><h4 style="font-family:'Billy Ohio'; font-size: 30px" >Samyak-2k18</h4></li>
                    </ul>
                </div>
                                
                <div class="collapse navbar-collapse" id="mynav">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="indexm.php"><h4><span class="glyphicon glyphicon-home"> Home</span></h4></a></li>
                        <li><a href="form.php"><h4><span class="glyphicon glyphicon-edit"> Register</span></h4></a></li>
                    </ul>
                  
                </div> 
                
            </div>            
        </nav>
    
    <br><br>
        <div class="fluid">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h1 style="font-family:'Billy Ohio'; text-align:center">Samyak Registration </h1>
                        </div>
                        <div class="panel-body">
                    
                    <form name="register" action="insert2.php" method="post" enctype="multipart/form-data">
					 <form onsubmit="return validateform()">
                        <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input type="text" class="form-control" name="firstname" pattern="[a-zA-Z\s]+" required>
                        </div
                        
                           <div class="form-group">
                              <label for="lastname">Last Name</label>
                              <input type="text" class="form-control" name="lastname" pattern="[a-zA-Z\s]+" required>
                              
                            <br>
                        <div class="form-group">
                            <label for="email">Mail</label>
                            <input type="email" class="form-control" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="contact">Mobile</label>
                           <input type="mobile" class="form-control" name="mobile" pattern="[0-9]{10}" required>
                        </div>
                            <div class="form-group">
                            <label for="regno">Roll Number</label>
                            <input type="text" class="form-control" name="regno" pattern="[a-zA-Z0-9]+" required>
                        </div>
                            
							
                                      <div class="form-group">
                                      <label for="year">Year</label>
                                     <input type="text" class="form-control" name="year" placeholder="Enter year of study, i.e[1 or 2 or 3 or 4]" pattern="[1-4]{1}" required>
                                   </div>
								 
							
                            
                        <div class="form-group">
                            <label for="college">College</label>
                            <input type="text-area" class="form-control" name="college" required>
                        </div>
                                         
                         <div class="form-group">  
                             <label for="branch" style="font-size: 18px">Choose your Branch</label><br>
                            <select name="branch" enabled="enabled" id="group">
                                <option>--Select-- </option>
                                <option>Computer Science & Engineering</option>
                                <option>Electrical & communication Engineering</option>
                                <option>Elecrical & Electronics Engineering</option>
                                <option>Mechanical Engineering</option>
                                <option>Civil Engineering</option>
                            </select>
                         </div>
                          <div class="form-group"> 
                            <label for="events" style="font-size: 18px">Select the Events</label><br>
                            <input type="checkbox" name="topics[]" value="Paper presentation" id='paper' onclick="Paperalert()" />
                            <label for="paper">Paper Presentation     </label>
                            
                             <br>
                            
                               <input type="checkbox" name="topics[]" value="poster presentation" id='poster' onclick="Posteralert()"/>
                                     <label for="paper">Poster Presentation</label>
                            
                           
                            <br>
                            <input type="checkbox" name="topics[]" value="project expo" id='expo' onclick="expoalert()"/>
                            <label for="paper">Project Expo       </label><br>
                            <input type="checkbox" name="topics[]" value="spot events" id='spot' onclick="spotalert()"/>
                            <label for="paper">Spot Events</label>
                            
                          </div>
                            <br>
                        <button type="submit" class="btn btn-primary btn-block" value="submit">Submit</button>
                        
                        
                    </form>
		 </form>
                </div>
                    </div>
                    
            </div>
        </div>
            </div>
        
            
            <div class="footer">
                <footer id="container-fluid">
                      <div class="container-fluid">
                             <br>
                             <p id="mani" style="text-align:center; color: whitesmoke;font-size: 20px">&copy; Samyak-2k18</p>
			 </div>
                </footer>
               </div>
       
<script type="text/javascript">
    	function Paperalert()      
	{      
		if(document.register.paper.checked == true)      
		{      
		alert("You have selected Paper Presentation.!! Please upload your abstract..");  
		document.register.uploadpap.disabled=false;
		 
		}
                else{ document.register.uploadpap.disabled=true;}
                   
	}      
	function Posteralert()      
	{      
		if(document.register.poster.checked == true)      
		{      
			
			alert("You have selected Poster Presentation.!! Please upload your abstract.."); 
			document.register.uploadpos.disabled=false;
		}else{document.register.uploadpos.disabled=true;}   
	} 
	function expoalert()      
	{      
		if(document.register.expo.checked == true)      
		{      
			alert("You have selected Project Expo.!!");      
		}      
	} 	
	function spotalert()      
	{      
		if(document.register.spot.checked == true)      
		{      
			alert("You have selected Spot Events.!!");      
		}      
	} 

	function valid()
	{
		
		if(document.sub.onclick==true){prompt("Do you want Submit and Register for Sapience");}
		return validateform();
	}
		

</script>
</body>
</html>
