<!DOCTYPE html>
<head>
	<title>Tile Installer - Bathrooms, Kitchens | Brock Barber</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="Tile Installation, Mid Michigan, St. Johns, Lansing, Bathroom Tile, Kitchen Tile, Kitchen Flooring, Fireplace installation, Glass Tile, Limestone, Marble, Granite, Travertine, Slate, Mosaic, Porcelain, Ceramic, Glass Block"/>
	<link rel="icon" href="http://www.brockbarber.com/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="css/resets.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/mainstyles.css" media="all" />	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-33278939-1']);
		_gaq.push(['_trackPageview']);
		
		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head>

<body class="estimateform">
	<div id="header">
		<?php define('TMPL_PATH', '/home/rachelmflowers/brockbarber.com/templates'); ?>
		<?php include(TMPL_PATH .'/navheader.php') ?>
	<!-- END HEADER DIV --></div>
	<div id="ContentBox">
		<div id="mainContent" class="clearfix">
		<p><em>Fields marked with an asterisk * are required.</em></p>
		<form method="post" action="http://www.brockbarber.com/formmail.php" name="Estimate Form" enctype="multipart/form-data">
			<input type="hidden" name="env_report" value="REMOTE_HOST,REMOTE_ADDR,HTTP_USER_AGENT,AUTH_TYPE,REMOTE_USER"/>
			<!-- STEP 2: Put your email address in the 'recipients' value.
                         Note that you also have to allow this email address in the
                         $TARGET_EMAIL setting within formmail.php!
            -->
			<input type="hidden" name="recipients" value="barberbrock77/*/gmail.com, rachelmflowers/*/gmail.com"/>
			<input type="hidden" name="required" value="EmailAddr:Your email address,FullName:Your name,Phone:Your phone number,"/>
			<input type="hidden" name="subject" value="NEW Estimate Request!"/>
			<input type="hidden" name="derive_fields" value="email=EmailAddr,realname=FullName"/>
			<!--<input type="hidden" name="good_url" value="http://www.brockbarber.com/templates/good_sub.html"/>
			<input type="hidden" name="bad_url" value="http://www.brockbarber.com/fmbadhandler.php"/>
			<input type="hidden" name="bad_template" value="http://www.brockbarber.com/Templates/bad_sub.html"/>-->
			<input type="hidden" name="mail_options" value="NoEmpty"/>
			<input type="hidden" name="this_form" value="http://www.brockbarber.com/form.html"/>
			<table>
				<tr>
					<td>*Please enter your name: <input type="text" name="FullName"/></td>
				</tr>
				<tr>
					<td>*Please enter your phone number: <input type="tel" name="Phone"/></td>
				</tr>
				<tr>
					<td>*Please enter your email address: <input type="email" name="EmailAddr"/></td>
				</tr>
				<tr>
					<td colspan="2">Please select the service you are interested in: <select name="ServiceList">
						<option value="Tile Installation">Tile Installation</option>
						<option value="Countertop Installation">Countertop Installation</option>
						<option value="Patio Installation">Patio Installation</option>
						<option value="Glass Block Installation">Glass Block Installation</option>
						<option value="Kitchen">Kitchen</option>
						<option value="Bathroom">Bathroom</option>
						<option value="Residential">Residential</option>
						<option value="Commercial">Commercial</option>
						<option value="Other">Other</option>
						</select>
					</td>
				</tr>
				<tr><td>Please briefly describe your project:</td></tr>
				<tr><td colspan="2"><textarea name="mesg" rows="10" cols="70"></textarea></td></tr>
				<tr>
					<td>Best way to contact you: Email <input name="Best way to Contact" type="checkbox" value="Email"/> &nbsp; Phone <input name="Best way to Contact" type="checkbox" value="Phone"/> &nbsp; Either <input name="Best way to Contact" type="checkbox" value="Either (phone or email)"/></td>
				</tr>
				<tr>
					<td>Best time to contact you: Morning <input name="Time to Contact" type="checkbox" value="Morning"/> &nbsp; Afternoon <input name="Time to Contact" type="checkbox" value="Afternoon"/> &nbsp; Evening <input name="Time to Contact" type="checkbox" value="Evening"/></td>	
				</tr>			
				<tr><td><input type="submit" value="Submit"/></td></tr>
				</table>
			</form>
				<!-- END MAINCONTENT DIV --></div>
	<!-- END CONTENTBOX DIV --></div>
	<?php include(TMPL_PATH .'/footer.php') ?>
	</body>
</html>
