<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title>Services Page</title>

	<link rel="stylesheet" type="text/css" href="services.css">
</head>
<body>


	<div class="container">

		<?php require_once('navbar.php'); ?>

		<br>

		<div class="row">
			<div class="col-12">
				<p>Computer Guys (not geeks) is a service-oriented Computer and Network support firm serving greater Maryland. With industry and technical expertise exceeding 25 years, we can help you with any computer or network related issue. Our mission is to provide prompt professional service and fast problem resolution. Let's get right to it - if you have a computer or networking problem or need, you've come to the right place.  We offer an absolutely no-risk guarantee that you won't find anywhere else!!  Make an appointment and tell us what your problem is.  We will solve that problem or you pay nothing (details here).  That's right!  You read that correctly but it's worth repeating: We will solve your computer problem or you pay nothing!  Just try to get that guarantee somewhere else.  If the "geeks" can't fix it, you'll pay twice.</p>
			</div>
		</div>

		<!-- Make into a table -->
		<div class="row" td style="text-align: left">
			<div class="col-12">
				<h3>Services Offered & Prices</h3>
				<table class="table table-striped">
					<tr>
						<th style="width: 25%">Services Offered</th>
						<th>Description</th>
					</tr>

					<!-- Unsure how to get only the first column to be centered and vertically aligned; could use help -->
					<tr>
						<td style="text-align: center" class="align-middle">Upgrades</td>
						<td>Frustrated with outdated mainframes and computers that look the same since the 1990s? We can assist you with upgrading your home or business' desktops and laptops to the newest technology out there.</td>
					</tr>
					<tr>
						<td style="text-align: center" class="align-middle">Networking</td>
						<td>We are equipped to assist you with any type of wireless or wired networking that you may need to do for your home or office.</td>
					<tr>
						<td style="text-align: center" class="align-middle">Resource Sharing</td>
						<td>The Computer Guys can setup local networks to ensure that all of your internet-connected devices, such as printers and televisions are available and secure 24/7!</td>
					</tr>
					<tr>
						<td style="text-align: center" class="align-middle">Backups & Data Recovery</td>
						<td>Concerned about losing data? We can help! The Computer Guys are equipped with the equipment and expertise to ensure that your backups and data recovery processes will go smoothly and without incident.</td>
					</tr>
					<tr>
						<td style="text-align: center" class="align-middle">Computer Booting</td>
						<td>Computer won't start? Check that it's plugged in, then give us a call! The Computer Guys are experts in diagnosing issues with computers not starting or booting up correctly.</td>
					</tr>
					<tr>
						<td style="text-align: center" class="align-middle">Software Glitches & Blue Screens</td>
						<td>We aren't just experts in hardware, but software too! We can diagnose your software glitches and fix blue screen errors faster than anyone.</td>
					</tr>
					<tr>
						<td style="text-align: center" class="align-middle">Internet Connectivity</td>
						<td>If you are experiencing difficulty with your home or business' network, we can help! The Computer Guys have expertise in diagnosing internet connectivity issues, setting up routers, installing VPNs on your devices, and upgrading existing networks.</td>
					</tr>
					<tr>
						<td style="text-align: center" class="align-middle">Adware/Spyware/Viruses</td>
						<td>Concerned that your devices or network may have been infected with malware? We've got you covered! The Computer Guys are experts in removing any type of malware and restoring your computer fully!</td>
					</tr>
				</table>
			</div>
		</div>

		<div class="row">
			<div class="col-6">

				<h3>Business Customers</h3>
				<p>Businesses with to 1 - 20 computers benefit the most from our services. Why is that? Well, we’re an incident-based service firm. Firms that use our services don’t usually have a dedicated IT staff and enjoy enormous savings by requesting help on an as-needed basis only. So, we help you keep your IT overhead very low by keeping your computers and network up and running without a costly payroll expense.</p>

				<p>Computer Guys also outshines other service firms in the area of service contracts. The short answer is we don’t offer one. Whether you call us once a week, once a month or once a year, your costs are the same. We don’t force you to pay monthly retainer fees or to guess what level of future service you might require. We offer the same low hourly service rates no matter what level of service you require.  Other firms strive to keep you tethered to their bottom line with monthly contract fees. Our goal is to make you as self-sufficient as possible at the lowest possible cost.</p>
			</div>
			<div class="col-6">
				<h3>Residential Customers</h3>

				<p>Residential computer users usually need help on only a very occasional basis. The most common problems we see are computers infected with spyware and adware usually as the result of inadvertent downloads of rogue software or the use of file-sharing programs such as Kazaa, Limewire, Bearshare, Ares, etc. Of course, you may have a number of other needs including upgrades, networking and internet issues. We can help with any and all of these issues.</p>

				<p>When we service your computer for any reason, we check it and clean it of any and all spyware software which may be slowing it down or causing excessive popup advertising. In addition, we do all Windows software updates and provide you with a document that explains how spyware is acquired and how to easily avoid it in the future. Recognizing the needs of home users, we offer evening and weekend appointments to get you back up and running as quickly as possible.  No need to lug that computer to some shop. We'll come to you.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-6">
				<h3>On-Site Service</h3>
				<p>We will come to your residence or place of business to service your computer / network.  All service calls have an initial charge of $95 which includes the first 1/2 hour of service.  Additional time is billed at $95.00 per hour in 1/4 hour increments.  Compare this to most other firms charging $115.00 - $140.00 per hour plus $99 just to drive to your door and ring your doorbell.</p>

				<p>Most problems can be resolved on-site.  However, in a small number of cases, problems presented to us require that we take your computer to our shop in order to properly service it.  This is most often the case when a computer is heavily infected with viruses or does not properly boot up. Even those problems are most often repaired on-site immediately. But other problems can also mandate that we service it off-site and it is not possible to guarantee that all problems can be addressed on-site. If off-site service is necessary, the technician will alert you to this requirement at the time of service. In this case (and with your consent), we will take your computer off-site for service and return it at an agreed upon time.  If you do not consent to off-site service, you will be charged for the time spent with no guarantee of any problem resolution.</p>
			</div>
			<div class="col-6">
				<h3>Remote Support</h3>

				<p>With industry and technical expertise exceeding 31 years, we can help you with any computer problem.  Our mission is to provide prompt professional service and fast problem resolution.  And with today's technology, it doesn't matter where you are located.  We can fix it remotely ... right over the internet.  Because there is no travel involved, we can do it inexpensively and we pass the savings on to you.  Tell us what your problem is.  We will then connect to your computer from our call center and fix that problem for you.  Our flat price of $129 is all you pay.  No extra charges for extra time or especially difficult problems.  Plus, you have no risk.  We guarantee we will fix your problem or you pay nothing.  That's right!</p>

				<p>Then, how does it work?  Very simple ...

					1) Call us at 410-COMPUTER (410-266-7883) and tell us you would like a remote computer support session.  A "Computer Guy" will ask you to explain the problem.  If your problem can be solved using remote computer support, we will initiate a support session (or schedule one for a convenient time).

					2) After initiating a remote session, we will process your payment of $129.  For remote computer support sessions, we accept all major credit cards (or debit cards).  You will then be asked to read and agree to our terms of service.



					3) Our "Computer Guy" will then solve the problem you specified.  This process may take some time ... possibly up to several hours for serious problems.  You will be able to observe everything we do on your computer and can do so or just ignore us and go about your business.  If for any reason, we are unable to solve your problem remotely, your payment will be immediately refunded.

				That's it!  Don't sit around waiting for a technician to come to your home or business.  Get it fixed now.</p>
			</div>
		</div>




	</div>	

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>