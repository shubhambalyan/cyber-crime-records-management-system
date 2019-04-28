<!DOCTYPE html>
<html>
    <head>
        <title>Cyber Crime Records Management System</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
		*{
	 	padding: 0px;
	 	margin: 0px;
	 	box-sizing: border-box;
		 }

		 .nav{
			background: black;
			color: white;
			height: 70px;
			font-family: sans-serif;

			display: flex;
			flex-wrap:wrap;
			align-items: center;
		 }

		 .nav-title{
			width: 30%;
			background: red;
			padding: 16px 40px;
			text-align: center;

		 }

		 .nav-menu{
			width: 70%;
		 }

		 .nav-menu ul{
			display: flex;
			justify-content: flex-end;
		 }

		 .nav-menu ul li{
			padding: 10px 20px;
			color: #ccc;
			font-size: 20px;
			list-style-type: none;
			cursor: pointer;
		 }

		 .nav-menu ul li:hover{
			color: #fff;
			font-weight: bold;
		 }

		/*style for responsive menu*/

		@media screen and (max-width:1000px){
			.nav{
				height: auto;
			}
			.nav .nav-title{
				text-align: left;
				width: 100%;
			}

			.nav .nav-menu{
				width: 100%;
			}
			.nav .nav-menu ul{
				justify-content: space-around;
			}

			.nav .nav-menu ul li{
				width: 20%;
				padding: 10px 0px;
				text-align: center;
				font-size: 16px;
			}
		}
		.nav-fix {
			position: fixed;
		}
		td {
		  padding-right:100px;   
		}
		</style>
    </head>
    <body>
	    <div class="nav-fix">
			<div style="background-color: black;">
				<h1 style="margin-left:50px;font-size: 50px; color:whitesmoke;font:bold;">CYBER CRIME RECORDS MANAGEMENT SYSTEM</h1> 
			</div>
			<div class="nav">
				<div class="nav-title">
					<h1><a href="loginselect.php" style="text-decoration:none; color:white;">Login</a></h1>
				</div>

				<div class="nav-menu">
					<ul>
						<li><a href="mainpage.php#one" style="text-decoration:none; color:white;">Home</a></li>
						<li><a href="mainpage.php#two" style="text-decoration:none; color:white;">Online Awareness</a></li>
						<li><a href="mainpage.php#three" style="text-decoration:none; color:white;">Links</a></li>
						<li><a href="mainpage.php#four" style="text-decoration:none; color:white;">General Tips<a></li>
					</ul>
				</div>
			</div>
		</div>
		<section id="one">
		    <img src="image1.jpeg" alt="Italian Trulli" style="width:1500px;height:700px;">
		</section>
		<section id="two"><br><br><br><br><br><br><br><br>
		    <div>
			<div>
				<div><br><br>
					<h3 style="text-align: center; font: bold 25px/30px Georgia, serif; ">ONLINE AWARENESS</h3>
				</div>
			</div>
			<div>
			    <table style="border-spacing: 15px;">
					<tr>
						<td style="text-align: center; color: #228B22; font: bold;"><h2>HACKING</h2></td>
						<td rowspan="2"><img src="hacking.jpg" alt="Hacking" style="width:400px;height:200px;"></td> 
				    </tr>
					<tr>
						<td><p>Hacking is unauthorized intrusion into a computer or a network. The person engaged in hacking activities is generally referred to as a hacker. This hacker may alter system or security features to accomplish a goal that differs from the original purpose of the system. <br><br>	Hackers employ a variety of techniques for hacking, including:<br><br><ul><li>Password cracking: the process of recovering passwords from data stored or transmitted by computer systems.</li><li>Trojan horse: serves as a back door in a computer system to allow an intruder to gain access to the system later.</li><li>Viruses: self-replicating programs that spread by inserting copies of the same program into other executable code files or documents.</li></ul></p></td> 
				    </tr>
					<tr>
						<td></td>
						<td></td> 
				    </tr>
					<tr>
					    <td rowspan="2"><img src="creditcard.jpg" alt="Credit Card" style="width:400px;height:200px;"></td>
						<td style="text-align: center; color: #228B22; font: bold;"><h2>CREDIT CARD FRAUD</h2></td>
				    </tr>
					<tr>
						<td><p>Credit card fraud is a wide-ranging term for theft and fraud committed using or involving a payment card, such as a credit card or debit card, as a fraudulent source of funds in a transaction.The purpose may be to obtain goods without paying, or to obtain unauthorized funds from an account. Credit card fraud is also an adjunct to identity theft. According to the United States Federal Trade Commission, while the rate of identity theft had been holding steady during the mid 2000s, it increased by 21 percent in 2008. However, credit card fraud, that crime which most people associate with ID theft, decreased as a percentage of all ID theft complaints for the sixth year in a row.<br><br><ul><li>BIN Attack: Credit cards are produced in BIN ranges. Where an issuer does not use random generation of the card number, it is possible for an attacker to obtain one good card number and generate valid card numbers by changing the last four numbers using a generator.</li><li>Account Takeover: An account takeover occurs when a criminal poses as a genuine customer, gains control of an account and then makes unauthorized transactions. </li></ul></p></td> 
				    </tr>
					<tr>
						<td></td>
						<td></td> 
				    </tr>
					<tr>
						<td style="text-align: center; color: #228B22; font: bold;"><h2>CYBER STALKING AND BULLYING</h2></td>
						<td rowspan="2"><img src="cyberimage.jpg" alt="Cyberstalking" style="width:400px;height:200px;"></td> 
				    </tr>
					<tr>
						<td><p>Cyberstalking is the use of the Internet or other electronic means to stalk or harass an individual, group, or organization. It may include false accusations, defamation, slander and libel. It may also include monitoring, identity theft, threats, vandalism, solicitation for sex, or gathering information that may be used to threaten, embarrass or harass.<br><br>Cyberstalking is a criminal offense under various state anti-stalking, slander and harassment laws. A conviction can result in a restraining order, probation, or criminal penalties against the assailant, including jail.</p></td> 
				    </tr>
					<tr>
						<td></td>
						<td></td> 
				    </tr>
					<tr>
					    <td rowspan="2"><img src="cphishing.jpg" alt="Phishing" style="width:400px;height:200px;"></td>
						<td style="text-align: center; color: #228B22; font: bold;"><h2>PHISHING</h2></td>
				    </tr>
					<tr>
						<td><p>Phishing is a cybercrime in which a target or targets are contacted by email, telephone or text message by someone posing as a legitimate institution to lure individuals into providing sensitive data such as personally identifiable information, banking and credit card details, and passwords.<br><br><ul><li>Spear phishing: Phishing attempts directed at specific individuals or companies have been termed spear phishing. Attackers may gather personal information about their target to increase their probability of success.</li><li>Clone phishing: Clone phishing is a type of phishing attack whereby a legitimate, and previously delivered, email containing an attachment or link has had its content and recipient address(es) taken and used to create an almost identical or cloned email.</li><li>Phone phishing: Not all phishing attacks require a fake website. Messages that claimed to be from a bank told users to dial a phone number regarding problems with their bank accounts.</li></ul></p></td> 
				    </tr>
					<tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>
				</table>
			</div>
		    </div>
		</section>
		<section id="three"><br><br><br><br><br><br><br><br>
		    <div>
			<div>
				<div><br><br>
					<h3 style="text-align: center; font: bold 25px/30px Georgia, serif; ">IMPORTANT LINKS</h3>
				</div>
			</div><br><br>
			<div>
			    <table style="border-spacing: 15px;">
					<tr>
						<td style="text-align: center; font: bold; color: #228B22;"><h1>MUMBAI POLICE</h1></td>
						<td style="text-align: center; font: bold; color: #228B22;"><h1>BENGALURU POLICE</h1></td>
						<td style="text-align: center; font: bold; color: #228B22;"><h1>DELHI POLICE</h1></td>						
				    </tr>
					<tr>
						<td style="text-align: center;"><a href="https://mumbaipolice.maharashtra.gov.in/" target="_blank" style="text-decoration:none;">https://mumbaipolice.maharashtra.gov.in</a></td>
						<td style="text-align: center;"><a href="https://www.karnataka.com/govt/online-fir-bangalore-and-e-lost-report-app/" target="_blank" style="text-decoration:none;">https://www.karnataka.com</a></td> 
						<td style="text-align: center;"><a href="http://www.delhipolice.nic.in/" target="_blank" style="text-decoration:none;">http://www.delhipolice.nic.in</a></td>
				    </tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>
					<tr>
						<td style="text-align: center; font: bold; color: #228B22;"><h1>MINISTRY OF HOME AFFAIRS</h1></td>
						<td style="text-align: center; font: bold; color: #228B22;"><h1>NATIONAL INFORMATICS CENTRE</h1></td>
						<td style="text-align: center; font: bold; color: #228B22;"><h1>CENTRAL BUREAU OF INVESTIGATION</h1></td>						
				    </tr>
					<tr>
						<td style="text-align: center;"><a href="https://mha.gov.in/" target="_blank" style="text-decoration:none;">https://mha.gov.in</a></td>
						<td style="text-align: center;"><a href="https://www.nic.in/"  target="_blank" style="text-decoration:none;">https://www.nic.in</a></td> 
						<td style="text-align: center;"><a href="http://cbi.gov.in/" target="_blank" style="text-decoration:none;">http://cbi.gov.in</a></td>
				    </tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>
					<tr>
						<td style="text-align: center; font: bold; color: #228B22;"><h1>CENTRAL ECONOMIC INTELLIGENCE BUREAU</h1></td>
						<td style="text-align: center; font: bold; color: #228B22;"><h1>NATIONAL CRIME RECORDS BUREAU</h1></td>
						<td style="text-align: center; font: bold; color: #228B22;"><h1>SECURITY SITE INFO TECH INDIA</h1></td>						
				    </tr>
					<tr>
						<td style="text-align: center;"><a href="https://www.nic.in/ceib" target="_blank" style="text-decoration:none;">https://www.nic.in/ceib</a></td>
						<td style="text-align: center;"><a href="https://www.ncrbindia.org/" target="_blank" style="text-decoration:none;">https://www.ncrbindia.org/</a></td> 
						<td style="text-align: center;"><a href="https://www.itsecurity.gov.in/" target="_blank" style="text-decoration:none;">https://www.itsecurity.gov.in/</a></td>
				    </tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>
				</table>
			</div>
		    </div>
		</section>
		<section id="four">
			<div>
			<div>
				<div><br><br>
					<h3 style="text-align: center; font: bold 25px/30px Georgia, serif; ">GENERAL TIPS</h3>
				</div>
			</div>
			<div>
			    <table style="border-spacing: 15px;">
					<tr>
						<td style="text-align: center; font: bold;"><h1>1</h1></td>
						<td style="text-align: center; font: bold;"><h1>2</h1></td> 
				    </tr>
					<tr>
						<td style="text-align: center; color: #228B22;"><h2>Preventing credit/debit card fraud</h2></td>
						<td style="text-align: center; color: #228B22;"><h2>Choose strong passwords and keep them safe.</h2></td> 
				    </tr>
					<tr bgcolor="#D3D3D3">
						<td style="text-align: center;"><p>In today's information age, your credit card information is pretty much always at risk for theft. Fortunately, you can try to avoid credit card fraud by keeping your credit card information extra safe. Always be on guard for scammers who may try to trick you into giving up your credit card details.</p></td>
						<td style="text-align: center;"><p>Keep your passwords in a safe place and try not to use the same password for every service you use online.
	                    Change passwords on a regular basis, at least every 90 days.</p></td> 
				    </tr>
					<tr>
						<td></td>
						<td></td> 
				    </tr>
					<tr>
						<td style="text-align: center; font: bold;"><h1>3</h1></td>
						<td style="text-align: center; font: bold;"><h1>4</h1></td> 
				    </tr>
					<tr>
						<td style="text-align: center; color: #228B22;"><h2>Protect your computer with security software.</h2></td>
						<td style="text-align: center; color: #228B22;"><h2>Protect your personal information.</h2></td> 
				    </tr>
					<tr bgcolor="#D3D3D3">
						<td style="text-align: center;"><p>Several types of security software are necessary for basic online security. Security software essentials include firewall and antivirus programs. A firewall is usually your computer's first line of defense-it controls who and what can communicate with your computer online.</p></td>
						<td style="text-align: center;"><p>Keep an eye out for phony email messages.Don't respond to email messages that ask for personal information.Steer clear of fraudulent Web sites used to steal personal information. Pay attention to privacy policies on Web sites and in software.</p></td> 
				    </tr>
					<tr>
						<td></td>
						<td></td> 
				    </tr>
					<tr>
						<td style="text-align: center; font: bold;"><h1>5</h1></td>
						<td style="text-align: center; font: bold;"><h1>6</h1></td> 
				    </tr>
					<tr>
						<td style="text-align: center; color: #228B22;"><h2>Avoid being scammed</h2></td>
						<td style="text-align: center; color: #228B22;"><h2>Secure mobile devices</h2></td> 
				    </tr>
					<tr bgcolor="#D3D3D3">
						<td style="text-align: center;"><p>Always think before you click on a link or file of unknown origin. Don’t feel pressured by any emails. Check the source of the message. When in doubt, verify the source. Never reply to emails that ask you to verify your information or confirm your user ID or password.</p></td>
						<td style="text-align: center;"><p>More often than not, we leave our mobile devices unattended. By activating the built-in security features you can avoid any access to personal details. Never store passwords, pin numbers and even your own address on any mobile device.</p></td> 
				    </tr>
					<tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>
				</table>
			</div>
		    </div>
		</section>
	<div class="footer" style="position: fixed; left: 0; bottom: 0; width: 100%; background-color: gray; color: white; text-align: center;">
	  <p>&copy;2017&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Saksham Balyan | Saksham Phadke</p>
	</div>
    </body>
</html>
