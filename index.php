<!-- TO DO
Add social media buttons
Add github source links
Add Testimonials
Add contact information
-->
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="Description" content="Full Stack Web Application Developer for small businesses. Works with HTML, CSS, PHP, and Javascript.">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">

		<title>Web Application Developer | Osei Quashie</title>

		<!-- CSS Stylesheets -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/style.css">

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat|Poiret+One|Raleway|Poppins&display=swap" rel="stylesheet">

		<!-- Icons -->
		<script src="https://kit.fontawesome.com/9fb397285d.js"></script>

		<!-- Favicon -->
		<link rel="icon" href="./img/proqweb-favicon.jpg">

	</head>
	<body>

	<header>
	    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
	    	<div class="container">

		        <a class="navbar-brand" href="./index.php"><img src="img/ProqLogo2.png"></a>
		        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="navbar-toggler-icon"></span>
		        </button>

				<div class="collapse navbar-collapse" id="navbarNav">
					<div class="navbar-nav ml-auto">
						<a class="nav-item nav-link" href="#Portfolio">Portfolio</a>
						<a class="nav-item nav-link" href="#Hire">Contact</a>
					</div>
				</div><!-- #navbarNav -->

			</div><!-- .container -->
	    </nav>
	</header>

	<main>
    
	    <section id="About" class="text-center">

	    	<h1>Problem Solver</h1> 
			<h1>Web Application Developer</h1>

			<img src="img/osei-quashie-web-developer.jpg" alt="osei-quashie" class="image-circle">

			<br><br>

			<h1>Osei Quashie</h1>
			

			<br><br>


			<a href="#Hire"><button class="btn button-link btn-lg">Hire Me</button></a>

	    </section>

	    <div class="contact-info row text-center">
			<div class="col-md-3 contact-item"><a href="mailto:oq@proqweb.com"><i class="fas fa-envelope"></i> oq@proqweb.com</a></div>
			<div class="col-md-3 contact-item"><a href="tel:6025524941"><i class="fas fa-phone"></i> 6025524941</a></div>
			<div class="col-md-3 contact-item"><a href="https://www.linkedin.com/in/osei-quashie/"><i class="fab fa-linkedin"></i> LinkedIn</a></div>
			<div class="col-md-3 contact-item"><a href="https://github.com/Osimba"><i class="fab fa-github"></i> Github</a></div>
		</div>

	    <section class="text-center experiences">
			<h2>My Experience</h2>
			<br>
			<p>I specialize in developing web applications in PHP, but have been exposed to a variety of different technologies.</p>
			<br><br>

	    	<div class="row container">

				<div class="col-md-4">
					<h3>Front-End</h3>
					<p>HTML5</p>
					<p>CSS3</p>
					<p>JavaScript</p>
					<p>JQuery</p>
					<p>Bootstrap</p>
					<p>API | Ajax</p>
				</div>

				<div class="col-md-4">
					<h3>Back-End</h3>
					<p>PHP</p>
					<p>SQL</p>
					<p>MySQL | MongoDB</p>
					<p>NodeJS</p>
					<p>Express</p>
					<p>Java</p>
					<p>RESTful Web Services</p>
				</div>

				<div class="col-md-4">
					<h3>Tools</h3>
					<p>Git | Github</p>
					<p>Dropbox</p>
					<p>Composer | NPM</p>
					<p>Sublime | VSCode</p>
					<p>SSH</p>
					<p>PostMan</p>
				</div>

			</div>

	    </section>

    <section id="Portfolio" class="client-work text-center">
      
      <h2>Client Work</h2>


      <div class="row project-row container">

        <div class="col-lg-4 project-img">
          <h3><strong>Coin and History</strong></h3>
          <img src="img/coin-history-filter.JPG">
        </div>
        
        <div class="col project-details">
          
          <p><strong>Client Problem:</strong></p>
          <p>Needed a way to search and filter through coins and display them depending on search criteria.</p>
          <br>
          <p><strong>Solution:</strong></p>
          <p>Created a database that stores the information for each coin.</p>
          <p>Developed a way to search and filter through coins in the database using criteria specified by the client. Only displaying the coins that match the selection of the user.</p>
          <p>Users are now able easily find the specified coin and be taken to the page with more information.</p>
          <p><strong>Technologies Used:</strong></p>
          <p>HTML5, CSS3, Bootstrap, JavaScript, Ajax, PHP, MySQL</p>

          <a class="project-link"><button class="btn btn-lg" disabled>In Progress...</button></a>

        </div>

        
      </div> <!-- project-row -->

      <hr class="divider">

      <div class="row project-row container">

      	<div class="col-lg-4 project-img project-even-sm">
          <h3><strong>Preaching Dashboard</strong></h3>
          <img src="img/az-preaching-chart.JPG">
        </div>

        <div class="col project-details">
          
          <p><strong>Client Problem:</strong></p>
          <p>Local church needed a way to track the amount of people that are being preached to daily to see if they are reaching their goals.</p>
          <p>Needed to track, interested recipients, uninterested and baptisms for each individual church as well as the total number for all churches.</p>
          <p>Wanted to see the results displayed in a chart.</p>
          <p>Required a way for members to input the amounts seperately and for the numbers to be updated in real time.</p>
          <br>
          <p><strong>Solution:</strong></p>
          <p>Created a database that contained each church's name, and preaching count information and displayed this information with Google Charts.</p>
          <p>Provided a form field for users to input the numbers for the desired church.</p>
          <p><strong>Technologies Used:</strong></p>
          <p>HTML5, CSS3, JavaScript, Google Charts, PHP, MySQL</p>

          <a class="project-link"><button class="btn button-link btn-lg" disabled>Check it out*</button></a>
          <p class="text-center">*Link disabled due to client's request to keep site private while in use.</p>

        </div>

        <div class="col-lg-4 project-img project-even-lg">
          <h3><strong>Preaching Dashboard</strong></h3>
          <img src="img/az-preaching-chart.JPG">
        </div>
        
      </div> <!-- project-row -->


      <hr class="divider">
      

      <div class="row project-row container">

        <div class="col-lg-4 project-img">
          <h3><strong>Jitseasy</strong></h3>
          <img src="img/jitseasy-filter-open.JPG">
        </div>

        <div class="col project-details">
          
          <p><strong>Client Problem:</strong></p>
          <p>Filter selections did not display child categories in a clear way.</p>
          <p>Filter items are very numerous and needed their own search field.</p>
          <br>
          <p><strong>Solution:</strong></p>
          <p>Created a search field that filters the items in each category. Only displaying the items that contain the words entered.</p>
          <p>Users are now able easily find their selection without having to scroll through a long list each time.</p>
          <p>Indented the items that were children to better distinguish them from their parent categories.</p>
          <p><strong>Technologies Used:</strong></p>
          <p>HTML5, CSS3, JavaScript</p>

          <a href="https://www.jitseasy.com/" class="project-link"><button class="btn button-link btn-lg">Check it out</button></a>

        </div>

      </div> <!-- project-row -->


    </section>

    <section class="testimonials text-center">
      <h2>Testimonials</h2>
      <div class="row container">
      	<div class="col-sm-12">
      		<img class="image-circle client-image" src="img/client-garyberger.bmp">
      		<p class="t-details">Osei Quashie was one of the best freelancers that I have ever hired. Quashie has the skill sets and communicates very well. He was able to fix my issues quickly and accurately and exceeded my expectations in every regard. I highly recommend him for your professional needs.
      		<br><span class="author">-Berger, Gary</span></p>
      	</div>
      </div>
    </section>

    <section class="personal-projects text-center">
    	<h2>Personal Projects</h2>

    	<div class="row">
			<div class="arrows left"><span>&#10094;</span></div>
			<div class="thumbnails">

				<ul class="slider">
        			<li><a href="02" target="_blank"><img src="img/portfolio-image-02.png" alt="php-store-and-blog">
        				<p class="proj-info">Created a mock website for a client. Also has an online store and a blog. Product data for the store is pulled from a MySQL database. <br>Used: HTML, CSS, PHP, MySQL.</p>
        			</a></li>
			        <li><a href="03" target="_blank"><img src="img/portfolio-image-03.png" alt="picture-slider"><p class="proj-info">Created a slider that has a featured picture amoung a gallery of pictures. The featured picture changes to the selected image. Not responsive. <br>Used: HTML, CSS, Javascript.</p></a></li>
			        <li><a href="05" target="_blank"><img src="img/portfolio-image-05.png" alt="simon-game"><p class="proj-info">Created the original Simon game. <br>Used: HTML, CSS, Javascript, JQuery.</p></a></li>
			        <li><a href="06" target="_blank"><img src="img/portfolio-image-06.png" alt="tic-tac-toe-game"><p class="proj-info">Created the Tic Tac Toe game against an unbeatable computer. <br>Used: HTML, CSS, Javascript, JQuery.</p></a></li>
			        <li><a href="07" target="_blank"><img src="img/portfolio-image-07.png" alt="pomodoro-clock"><p class="proj-info">Created a Pomodoro Clock that allows the user to adjust the work and break times. <br>Used: HTML, CSS, Javascript, JQuery.</p></a></li>
			        <li><a href="08" target="_blank"><img src="img/portfolio-image-08.png" alt="calculator"><p class="proj-info">Created a basic calculator. <br>Used: HTML, CSS, Javascript, JQuery.</p></a></li>
			        <li><a href="09" target="_blank"><img src="img/portfolio-image-09.png" alt="twitch-tv"><p class="proj-info">Created an interface that displays Twitch.tv profile information. The user can also toggle the list to view online, offline or all. <br>Used: HTML, CSS, Javascript, JQuery, Twitch.tv API.</p></a></li>
			        <li><a href="10" target="_blank"><img src="img/portfolio-image-10.png" alt="wikipedia-search"><p class="proj-info">Created interface that displays a list of wikipedia articles related to what the user searched. <br>Used: HTML, CSS, Javascript, JQuery, Wikipedia API.</p></a></li>
			        <li><a href="11" target="_blank"><img src="img/portfolio-image-11.png" alt="local-weather-app"><p class="proj-info">Created interface that displays the user's location, temperature, and wind speed/direction. <br>Used: HTML, CSS, Javascript, JQuery, Weather API.</p></a></li>
			        <li><a href="12" target="_blank"><img src="img/portfolio-image-12.png" alt="random-quote-generator"><p class="proj-info">Created interface that shows a random quote when the user clicks a button. The user can also tweet the quote. <br>Used: HTML, CSS, Javascript, JQuery, Random Quote API, Twitter API.</p></a></li>
			        <li><a href="13" target="_blank"><img src="img/portfolio-image-13.png" alt="tribute-page"><p class="proj-info">Created a simple tribute page. <br>Used: HTML, CSS.</p></a></li>
			    </ul>


			</div>
			<div class="arrows right"><span>&#10095;</span></div>
		</div>

    </section>

    <section id="Hire" class="contact text-center container">
		<h2>Contact</h2>
		<p>I value my clients.</p> 
		<p>If you have any questions or would like to request my services directly, you can email me or just fill out the form and I will get back to you.</p>

		<p>EMAIL: <a href="mailto:oq@proqweb.com">oq@proqweb.com</a></p>




		<form method="post" action="./send-message"><br>
    

			<div class="row">
				
				<div align="center" class="form-group center-block col-12">

					<input type="text" name="name" class="form-control" placeholder="Name" value="">

				</div>

				<div align="center" class="form-group center-block col-12">

					<input type="email" name="email" class="form-control" placeholder="Email" value="">

				</div>

				<div align="center" class="form-group center-block col-12">

					<textarea class="form-control" name="message"></textarea>

				</div><br>



				<input type="submit" name="submit" class="btn btn-lg button-link" value="Request Services"> 

			</div>


		</form> <!--- /form--><br><br>


    </section>

  </main>




  <script type="text/javascript" src="main.js"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
  <footer>
    Copyright &copy; Osei Quashie<br>
    All Rights Reserved
  </footer>
</html>
