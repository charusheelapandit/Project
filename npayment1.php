<html>
<head>
<title>*Janseva Parivar*</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="/vendor/formvalidation/dist/js/formValidation.min.js"></script>
  <script src="/vendor/formvalidation/dist/js/framework/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/account-opening-form.css"/>
  
  
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
      <!--  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
  
</head>
<body>
<div id="wrap">
  <div id="masthead">
    <h2>Janseva Parivar Bachat Gat</h2>
    <div  align="right">
    <b  id="welcome"> Welcome : <i><?php echo $login_session; ?></i></b>
    <b id="logout"><a href="logout.php" > Log Out</a></b>
    </div>
    <div id="menucontainer">
      <div id="menunav">
        <ul>
          <li><a href="home.php" ><span>Home</span></a></li>
          <li><a href="viewmemberdetails.php"><span>View Bachat Gat</span></a></li>
           <li><a href="openUpdate.php" ><span>Create Member</span></a></li>
          <li><a href="#" ><span>View Members</span></a></li>
          <li><a href="payment1.php" class="current"><span>Payments</span></a></li>
          <li><a href="#"><span>About Us</span></a></li>
          <li><a href="viewprofile.html"><span>Profile</span></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

    <br><br>
    <form class="form-horizontal" action ="#" method="post">
    <div>
    <div class="container padding-top-10">
<div class="panel panel-default">
<div class="panel-heading">
<br> <br>
          Payment Details
        </div>
        <div class="panel-body">
                   <div class="form-group" border="solid">
              <label class="control-label col-md-2 col-md-offset-2" for="mid">Member Id :</label>
			  
              <div class="col-md-2">    
                <input id="mid" name="mid" type="text" placeholder="Member Id" class="form-control " >
              </div>
              </div>
			  
	<script type='text/javascript'>
		$("#mid").on('change',function(){
			var mid = $(this).val();
			window.memid = mid;
			$.post("comput_share_penalty.php", 'mid='+mid , function(response) {
				var data = JSON.parse(response);
				document.getElementById("mname").value = data.name[0];
				var select = document.getElementById("scheme");
				for(var i = 0; i < data.scheme.length; i++) {
					var option = document.createElement('option');
					option.text = option.value = data.scheme[i];
					select.add(option, 0);
				}
                
            });
			
		});
		</script>
        <div class="form-group">
             <label class="control-label padding-top-10 col-md-2 col-md-offset-2" for="father/husband_name">Scheme:</label>
			  
		<div class="col-md-2">        
		
			<select name="scheme" value="scheme"  id= "scheme" >
			<option value="Select">Select</option>
			</select>             
       </div>  
        </div>    
		<script type='text/javascript'>
		$("#scheme").on('change',function(){
			
			alert('scheme changed');
			window.amt = 0;
			var mid = document.getElementById("mid").value;
			
			var scheme = $(this).val();
			window.schm = scheme;
			
			switch(parseInt(scheme))
									{
									case 1:
										amt = 100;
										break;
									case 2:
										amt = 500;
										break;
									case 3:
										amt = 1000;
										break;
									}
									alert(amt);
			
			document.getElementById("share").value = amt;
			alert("mid is"+mid);
			$.post("comput_share_penalty.php", {mid:mid,scheme:scheme,id:'scheme' }, function(response1) {
                console.log(response1);
				var data = JSON.parse(response1);
                console.log(response1);
				document.getElementById("tshare").value = data.send1;
				document.getElementById("tpen").value = data.send2;
				window.tshare = data.send1;
				window.tpen = data.send2;
				
				
				});
                
            });
		</script>
              
            <div class="form-group">
              <label class="control-label padding-top-10 col-md-2 col-md-offset-2" for="father/husband_name">Member Name:</label>
			  
			  
			  
			  
							<div class="col-md-2">    
               					 <input id="mname" name="mname" type="text" placeholder="Member Name" class="form-control "  id = "mname">
              				</div>    
              				
				   
              				              
            </div>
             <div class="form-group">
							<label class="col-md-4 control-label margin-bottom:20" for="month">For the Month:</label>
							<div class="col-md-2"> 
							<select class="form-control" id="mon" name="mon" >
							<option value="Select">Select</option>
							<option value="1">January</option>
							<option value="2">February</option>
							<option value="3">March</option>
							<option value="4">April</option>
							<option value="5">May</option>
							<option value="6">June</option>
							<option value="7">July</option>
							<option value="8">August</option>
							<option value="9">September</option>
							<option value="10">October</option>
							<option value="11">November</option>
							<option value="12">December</option>

							</select>             </div> </div>
								
		<div class="form-group">						
							</div>
                                                        
                            <label class="col-md-4 control-label margin-bottom:20" for="year">For the Year:</label>
							<div class="col-md-2"> 
							<select class="form-control" id="year" name="year">
							<option value="Select">Select</option>
							<option>2017</option>
							<option>2016</option>
                                                        <option>2015</option>
							<option>2014</option>
                                                        <option>2013</option>
							<option>2012</option>
                                                        <option>2011</option>
							<option>2010</option>
                                        	</select> 
								
								
							</div>
                                                        
                                                        
                                                        
						</div> 
            <div class="form-group">
              <label class=" col-md-4 control-label  margin-bottom:20" for="recno">Receipt No.:</label>

              <div class="col-md-4">    
                <input id="recno" name="recno" type="text"  class="form-control " />
              </div>
            </div>


            <script type="application/javascript">

              function isNumberKey(evt)
              {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
         {
            return false;
         }
         return true;
              }

          </script>


            <div class="form-group">
              <label class=" col-md-4 control-label  margin-bottom:20" for="Share">Share Amount:</label>


              <div class="col-md-4">    
              
                <input id="share" name="share" type="text" onkeypress="return isNumberKey(event)" class="form-control " >
              </div>
            </div>
              <div class="form-group">
              <label class=" col-md-4 control-label  margin-bottom:20" for="rdate">Receipt Date:</label>

              <div class="col-md-4">    
                <input id="rdate" name="rdate" type=date class="form-control " />
              </div>
            </div>
            
            
			       
            <div class="form-group">
              <label class=" col-md-4 control-label  margin-bottom:20"  for="Total Share Amount to be paid">Total Share Amount to be paid:</label>
             	<div class="col-md-4">   	
                <input id="tshare" name="tshare" onkeypress="return isNumberKey(event)" type="text"  class="form-control " >
              </div>
            </div>
     
								
            <div class="form-group">
              <label class=" col-md-4 control-label  margin-bottom:20" for="Total Penalty Amount to be paid">Total Penalty Amount to be paid:</label>

              <div class="col-md-4">    
                <input id="tpen" name="tpen" type="text" onkeypress="return isNumberKey(event)" class="form-control " >
              </div>
            </div>
            <div class="form-group">
              <label class=" col-md-4 control-label  margin-bottom:20" for="Pay Share ">Pay Share Amount:</label>

              <div class="col-md-4">    
                <input id="payshare" name="payshare" onkeypress="return isNumberKey(event)" type="text"  class="form-control "  />
              </div>
            </div>
           
             <div class="form-group">
              <label class=" col-md-4 control-label  margin-bottom:20" for="Pay Penalty Amount ">Pay Penalty Amount:</label>

              <div class="col-md-4">    
                <input id="paypenalty" name="paypenalty"  type="text"  class="form-control " />
              </div>
            </div>
            
            </div>
            </div>
     </div>
	 <script type='text/javascript'>
	 var month,year,recno,share,rdate,pshare,ppenalty;
	 
	 $("#mon").on('change',function(){
	 month = $(this).val();
	 });
	 
	 $("#year").on('change',function(){
	 year = $(this).val();
	 });
	 
	 $("#recno").on('change',function(){
	 recno = $(this).val();
	 });
	 
	
	 
	 $("#rdate").on('change',function(){
	 rdate = $(this).val();
	 });
	 
	 $("#payshare").on('change',function(){
	 pshare = $(this).val();
	 });
	 
	 $("#paypenalty").on('change',function(){
			
			share = window.amt;
			ppenalty = $(this).val();
			debugger;
			$.post("comput_share_penalty.php", {scheme:window.schm,mid:window.memid,ppenalty:ppenalty,pshare:pshare,rdate:rdate,share:share,recno:recno,year:year,month:month,tshare:window.tshare,tpen:window.tpen }, function(response1) {
                console.log(response1);
				var data = JSON.parse(response1);
                console.log(response1);
//				alert('success executed');
                document.getElementById("tshare").value = data.send1;
				document.getElementById("tpen").value = data.send2;
//				alert(data.send1);
//				alert(data.send2);
				
				
				});
			
	 });//end of onchange
	 </script>
    
     <input type="submit" value="View Account Details" name="View Account"> </input>
     <input type="submit" value="    OK    " name="Ok"> </input>
    

     <input type="Reset" value=" Reset " name="Reset"> </input>
 	 <input type="button" value=" Insert " name="Insert" onclick="insertval()"> </input>

  
    </form>
  <div id="footer"> 
   <a href="Link">homepage</a> | <a href="mailto:ksuresh005@gmail.com">contact</a> | <a href="http://validator.w3.org/check?uri=referer">html</a> 
</div>
<div align=center>Janseva </div>

</body>


</html>
