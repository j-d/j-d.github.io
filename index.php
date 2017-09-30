<?php
	if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE']))
			switch (strtolower(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2))) {
				case 'es':	$L = 'es'; break;
				default:	$L = 'en';
			}
	else
		$L = 'en';
	
	if (isset($_GET['es']))
		$L = 'es';
	if (isset($_GET['en']))
		$L = 'en';
	
	echo '<?xml version="1.0" encoding="iso-8859-1"?>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; iso-8859-1" />
		<meta name="keywords" content="diaz, angulo, diazangulo, jose, maria, luis, manuel, pagina, personal, personal, page" />
		<meta name="description" content="<?php echo $L == 'en' ? 'Personal page of Jose and Luis Diaz Angulo' : 'Página personal de José María y Luis M. Díaz Angulo'; ?>" />

		<title>DiazAngulo.com</title>
		<style type="text/css">
			html {
				font-family: Arial;
				font-size: 12pt;
				color: #555555;
			}
			
			a {
				text-decoration: none;
				color: #0066DD;
			}
			
			a:hover {
				text-decoration: underline;
			}
			
			a img {
				vertical-align: text-top;
			}
			
			table, td {
				vertical-align: top;
			}
			
			.leftMargin {
				padding-left: 75px;
				
			}
			
			.languages {
				text-align: right;
				color: #AAAAAA;
			}
			
			.languages a {
				color: #AAAAAA;
			}
			
			.name {
				text-align: center;
				font-size: 14pt;
			}
			
			.aftername {
				text-align: center;
				font-style: italic;
				font-size: 11pt;
			}
		</style>
	</head>

	<body>
		<div class="languages">
			<a href="?es">Español</a>
			|
			<a href="?en">English</a>
		</div>
		
		<table style="margin-left:auto; margin-right:auto;">
			<tr>
				<td colspan="3">
					<h1>DiazAngulo.com</h1>
				</td>
			</tr>
			<tr>
				<td>
					<img src="img/luis.jpg" alt="<?php echo $L == 'en' ? 'Luis Diaz Angulo' : 'Luis M. Díaz Angulo';?>" width="359" height="359" />
					<div class="name"><?php echo $L == 'en' ? 'Luis Diaz Angulo' : 'Luis M. Díaz Angulo';?></div>
					<div class="aftername">
						<?php echo $L == 'en' ? 'Researcher at' : 'Investigador en la';?> <a href="http://www.ugr.es"><?php echo $L == 'en' ? 'University of Granada' : 'Universidad de Granada';?></a><br />
						Granada
					</div>
				</td>
				<td style="width:50px;">
				</td>
				<td>
					<img src="img/jose.jpg" alt="<?php echo $L == 'en' ? 'Jose Diaz Angulo' : 'José María Díaz Angulo';?>" width="359" height="359" />
					<div class="name"><?php echo $L == 'en' ? 'Jose Diaz Angulo' : 'José María Díaz Angulo';?></div>
					<div class="aftername">
						<?php echo $L == 'en' ? 'Head of Systems at' : 'Jefe de Sistemas en';?> <a href="http://www.arkschools.org">ARK Schools</a><br />
						<?php echo $L == 'en' ? 'London' : 'Londres';?>
					</div>
				</td>
			</tr>
			<tr>
				<td class="leftMargin">
					<p>
						<a href="http://scholar.google.co.uk/citations?user=GG4ZAOgAAAAJ"><img src="img/paper.png" alt="<?php echo $L == 'en' ? 'Papers' : 'Publicaciones';?>" width="16" height="16" /></a>	
							<a href="http://scholar.google.co.uk/citations?user=GG4ZAOgAAAAJ"><?php echo $L == 'en' ? 'Papers' : 'Publicaciones';?></a>
					</p>
					<p>
						<a href="http://www.researchgate.net/profile/Luis_Angulo5/"><img src="img/researchgate.png" alt="ResearchGate" width="16" height="16" /></a>	
							<a href="http://www.researchgate.net/profile/Luis_Angulo5/">ResearchGate</a>
					</p>
					<p>
						<a href="http://www.linkedin.com/profile/view?id=156931279"><img src="img/linkedin.png" alt="LinkedIn" width="16" height="16" /></a>
							<a href="http://www.linkedin.com/profile/view?id=156931279">LinkedIn</a>
					</p>
					<p>
						<a href="http://twitter.com/#!/lmdiazangulo"><img src="img/twitter.png" alt="Twitter" width="16" height="16" /></a>	
							<a href="http://twitter.com/#!/lmdiazangulo">@lmdiazangulo</a>
					</p>
					<p>
						<a href="http://www.facebook.com/lmdiazangulo"><img src="img/facebook.png" alt="Facebook" width="16" height="16" /></a>
							<a href="http://www.facebook.com/lmdiazangulo">Facebook</a>
					</p>
					<p>
						<a href="https://plus.google.com/112698550595059288917"><img src="img/plus.png" alt="Google+" width="16" height="16" /></a>
							<a href="https://plus.google.com/112698550595059288917">Google+</a>
					</p>
					<p>
						<a href="http://www.google.com/recaptcha/mailhide/d?k=01gZWah3dyK_GQ7MGTsbe-Mw==&amp;c=wy6VzAn_uO-vNLpOO8GM3dJnYBYzUHJYa_KYiDxDDiI=" onclick="window.open('http://www.google.com/recaptcha/mailhide/d?k\07501gZWah3dyK_GQ7MGTsbe-Mw\75\75\46c\75wy6VzAn_uO-vNLpOO8GM3dJnYBYzUHJYa_KYiDxDDiI\075', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=300'); return false;" title="<?php echo $L == 'en' ? 'Show email address' : 'Muestra la dirección de correo';?>"><img src="img/email.png" alt="Email" width="16" height="16" /></a>
						<a href="http://www.google.com/recaptcha/mailhide/d?k=01gZWah3dyK_GQ7MGTsbe-Mw==&amp;c=wy6VzAn_uO-vNLpOO8GM3dJnYBYzUHJYa_KYiDxDDiI=" onclick="window.open('http://www.google.com/recaptcha/mailhide/d?k\07501gZWah3dyK_GQ7MGTsbe-Mw\75\75\46c\75wy6VzAn_uO-vNLpOO8GM3dJnYBYzUHJYa_KYiDxDDiI\075', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=300'); return false;" title="<?php echo $L == 'en' ? 'Show email address' : 'Muestra la dirección de correo';?>">Email</a>
					</p>
				</td>
				<td>
				</td>
				<td class="leftMargin">
					<p>
						<a href="http://www.linkedin.com/profile/view?id=55229858"><img src="img/linkedin.png" alt="LinkedIn" width="16" height="16" /></a>
							<a href="http://www.linkedin.com/profile/view?id=55229858">LinkedIn</a>
					</p>
					<p>
						<a href="http://twitter.com/#!/jmdiazangulo"><img src="img/twitter.png" alt="Twitter" width="16" height="16" /></a>	
							<a href="http://twitter.com/#!/jmdiazangulo">@jmdiazangulo</a>
					</p>
					<p>
						<a href="http://www.facebook.com/jmdiazangulo"><img src="img/facebook.png" alt="Facebook" width="16" height="16" /></a>
							<a href="http://www.facebook.com/jmdiazangulo">Facebook</a>
					</p>
					<p>
						<a href="https://plus.google.com/106009568255025372653"><img src="img/plus.png" alt="Google+" width="16" height="16" /></a>
							<a href="https://plus.google.com/106009568255025372653">Google+</a>
					</p>
					<p>
						<a href="http://www.google.com/recaptcha/mailhide/d?k=01gZWah3dyK_GQ7MGTsbe-Mw==&amp;c=6gyPlBZHuvQwPKvZlyP_ivLvym3IgbekqtQzwTSgCVY=" onclick="window.open('http://www.google.com/recaptcha/mailhide/d?k\07501gZWah3dyK_GQ7MGTsbe-Mw\75\75\46c\0756gyPlBZHuvQwPKvZlyP_ivLvym3IgbekqtQzwTSgCVY\075', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=300'); return false;" title="<?php echo $L == 'en' ? 'Show email address' : 'Muestra la dirección de correo';?>"><img src="img/email.png" alt="Email" width="16" height="16" /></a>
						<a href="http://www.google.com/recaptcha/mailhide/d?k=01gZWah3dyK_GQ7MGTsbe-Mw==&amp;c=6gyPlBZHuvQwPKvZlyP_ivLvym3IgbekqtQzwTSgCVY=" onclick="window.open('http://www.google.com/recaptcha/mailhide/d?k\07501gZWah3dyK_GQ7MGTsbe-Mw\75\75\46c\0756gyPlBZHuvQwPKvZlyP_ivLvym3IgbekqtQzwTSgCVY\075', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=300'); return false;" title="<?php echo $L == 'en' ? 'Show email address' : 'Muestra la dirección de correo';?>">Email</a>
					</p>
				</td>
			</tr>
		</table>
	</body>
</html>