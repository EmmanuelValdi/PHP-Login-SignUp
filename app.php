<?php 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!--Style CSS-->
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Netflix</title>
  </head>
  <body>
  <!--navigation-->
  <div class="container">
    <nav class="navbar navbar-light">
        <a class="navbar-brand mx-auto" href="#">
            <img src="assets/img/logo.png" width="120" height="30" alt="">
        </a>
        <a href="procesos/logout.php"><svg class="bi bi-power" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M5.578 4.437a5 5 0 1 0 4.922.044l.5-.866a6 6 0 1 1-5.908-.053l.486.875z"/>
          <path fill-rule="evenodd" d="M7.5 8V1h1v7h-1z"/>
          </svg>
        </a>
    </nav>
</div>

  <!--header-->
  <header class="masthead">
    <div class="container">
      <div class="content-center">
        <h1 class="title">See what's next.</h1>
        <h5 class="subtitle text-uppercase">Watch anywhere. Cancel anytime. </h5>
        <a href="#" class="btn btn-color btn-danger text-uppercase mt-3">join free for a month</a>
      </div>
    </div>
  </header>

  <!--section one-->
  <section class="tabs">
        <div class="tab-item">
          <svg class="bi bi-shield-slash" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path d="M1.357 3.478c-.42 3.969.87 6.928 2.423 8.911a11.192 11.192 0 0 0 2.417 2.3c.371.256.715.451 1.007.586.27.124.558.225.796.225s.527-.101.796-.225c.292-.135.636-.33 1.007-.586.466-.32.983-.74 1.502-1.263l-.707-.707a9.692 9.692 0 0 1-1.362 1.147 5.934 5.934 0 0 1-.857.5c-.116.053-.21.089-.282.11A.73.73 0 0 1 8 14.5c-.007-.001-.038-.005-.097-.023a2.273 2.273 0 0 1-.282-.111 5.934 5.934 0 0 1-.857-.5 10.197 10.197 0 0 1-2.197-2.093C3.262 10.107 2.145 7.672 2.289 4.41l-.932-.932zm11.053 6.81c.971-1.785 1.594-4.15 1.187-7.129a.454.454 0 0 0-.315-.366c-.626-.2-1.682-.526-2.725-.802C9.491 1.71 8.51 1.5 8 1.5c-.51 0-1.49.21-2.557.491a45.4 45.4 0 0 0-1.041.29l-.806-.806a52.727 52.727 0 0 1 1.591-.45C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 0 1 2.772.815c.528.168.926.623 1.003 1.184.458 3.355-.299 6.015-1.444 7.999l-.735-.735z"/>
          <path fill-rule="evenodd" d="M14.646 15.354l-14-14 .708-.708 14 14-.707.707z"/>
          </svg>
          <p class="tab-text">Cancel at any time</p>
        </div>
        <div class="tab-item">
          <svg class="bi bi-collection-play" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M14.5 13.5h-13A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5zm-13 1A1.5 1.5 0 0 1 0 13V6a1.5 1.5 0 0 1 1.5-1.5h13A1.5 1.5 0 0 1 16 6v7a1.5 1.5 0 0 1-1.5 1.5h-13zM2 3a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11A.5.5 0 0 0 2 3zm2-2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7A.5.5 0 0 0 4 1z"/>
          <path fill-rule="evenodd" d="M6.258 6.563a.5.5 0 0 1 .507.013l4 2.5a.5.5 0 0 1 0 .848l-4 2.5A.5.5 0 0 1 6 12V7a.5.5 0 0 1 .258-.437z"/>
          </svg>
          <p class="tab-text">Watch anywhere</p>
        </div>
        <div class="tab-item">
          <svg class="bi bi-tag" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M.5 2A1.5 1.5 0 0 1 2 .5h4.586a1.5 1.5 0 0 1 1.06.44l7 7a1.5 1.5 0 0 1 0 2.12l-4.585 4.586a1.5 1.5 0 0 1-2.122 0l-7-7A1.5 1.5 0 0 1 .5 6.586V2zM2 1.5a.5.5 0 0 0-.5.5v4.586a.5.5 0 0 0 .146.353l7 7a.5.5 0 0 0 .708 0l4.585-4.585a.5.5 0 0 0 0-.708l-7-7a.5.5 0 0 0-.353-.146H2z"/>
          <path fill-rule="evenodd" d="M2.5 4.5a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm2-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
          </svg>
          <p class="tab-text">Pick your price</p>
        </div>
  </section>

  <!--section-two-->
  <section class="section-tabs">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-st">
          <p class="text-st text-center">If you decide Netflix isn't for you - no problem. No commitment. Cancel online anytime.</p>
          <button class="btn btn-color">Watch Free For 30 Days</button>
        </div>
        <div class="col-md-6 col-img"></div>
          <img src="assets/img/tab-content-1.png" class="img-tab" alt="">
        </div>
      </div>
    </div>
  </section>

  <!--section three-->
  <section class="section-tabs">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p class="text-lg">
          Watch TV shows and movies anytime, anywhere — personalized for you.
          </p>
        </div>
        <div class="col-md-6">
          <a href="#" class="btn btn-color btn-lg">Watch Free For 30 Days</a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <img src="assets/img/tab-content-2-1.png" class="img-content w-100" alt="">
          <p class="text-tab text-md">
								Watch on your TV
          </p>
          <p class="text-tab text-dark">
            Smart TVs, PlayStation, Xbox, Chromecast, Apple TV, Blu-ray
            players and more.
          </p>
        </div>
        <div class="col-md-4">
          <img src="assets/img/tab-content-2-2.png" class="img-content w-100" alt="">
          <p class="text-second text-md">
						Watch instantly or download for later
          </p>
          <p class="text-tab-second text-dark">
            Available on phone and tablet, wherever you go.
          </p>
        </div>
        <div class="col-md-4">
          <img src="assets/img/tab-content-2-3.png" class="img-content w-100" alt="">
          <p class="text-thirt text-md">
            Use any computer
          </p>
          <p class="text-tab-thirt text-dark">
            Watch right on Netflix.com.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!--section four-->
  <section class="section-tabs">
    <div class="container">
    <div class="text-center">
						<p class="text-lg">
							Choose one plan and watch everything on Netflix.
						</p>
						<a href="#" class="btn btn-color btn-lg">Watch Free For 30 Days</a>
					</div>

					<table class="table table-striped table-dark table-borderless">
						<thead>
							<tr class="table-color">
								<th></th>
								<th>Basic</th>
								<th>Standard</th>
								<th>Premium</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Monthly price after free month ends on 6/19/19</td>
								<td>$8.99</td>
								<td>$12.99</td>
								<td>$15.99</td>
							</tr>
							<tr class="table-color">
								<td>HD Available</td>
								<td><svg class="bi bi-x" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708-.708l7-7a.5.5 0 0 1 .708 0z"/>
                  <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 0 0 0 .708l7 7a.5.5 0 0 0 .708-.708l-7-7a.5.5 0 0 0-.708 0z"/>
                  </svg>
                </td>
								<td><svg class="bi bi-check2" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                  </svg>
                </td>
								<td><svg class="bi bi-check2" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                  </svg>
                </td>
							</tr>
							<tr>
								<td>Ultra HD Available</td>
								<td><svg class="bi bi-x" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708-.708l7-7a.5.5 0 0 1 .708 0z"/>
                  <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 0 0 0 .708l7 7a.5.5 0 0 0 .708-.708l-7-7a.5.5 0 0 0-.708 0z"/>
                  </svg>
                </td>
                <td><svg class="bi bi-x" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708-.708l7-7a.5.5 0 0 1 .708 0z"/>
                  <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 0 0 0 .708l7 7a.5.5 0 0 0 .708-.708l-7-7a.5.5 0 0 0-.708 0z"/>
                  </svg>
                </td>
								<td><svg class="bi bi-check2" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                  </svg>
                </td>
							</tr>
							<tr class="table-color">
								<td>Screens you can watch on at the same time</td>
								<td>1</td>
								<td>2</td>
								<td>4</td>
							</tr>
							<tr>
								<td>Watch on your laptop, TV, phone and tablet</td>
								<td><svg class="bi bi-check2" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                  </svg>
                </td>
								<td><svg class="bi bi-check2" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                  </svg>
                </td>
                <td><svg class="bi bi-check2" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                  </svg>
                </td>
							</tr>
							<tr class="table-color">
								<td>Unlimited movies and TV shows</td>
								<td><svg class="bi bi-check2" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                  </svg>
                </td>
                <td><svg class="bi bi-check2" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                  </svg>
                </td>
                <td><svg class="bi bi-check2" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                  </svg>
                </td>
							</tr>
							<tr>
								<td>Cancel anytime</td>
								<td><svg class="bi bi-check2" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                  </svg>
                </td>
                <td><svg class="bi bi-check2" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                  </svg>
                </td>
                <td><svg class="bi bi-check2" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                  </svg>
                </td>
							</tr>
							<tr class="table-color">
								<td>First month free</td>
								<td><svg class="bi bi-check2" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                  </svg>
                </td>
                <td><svg class="bi bi-check2" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                  </svg>
                </td>
                <td><svg class="bi bi-check2" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                  </svg>
                </td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</section>
    </div>
  </section>

  <!--footer-->
  <footer class="foo">
    <div class="container">
      <p class="text-foo">Questions? Call 1-866-579-7172</p>
      <div class="row">
        <div class="col-md-3">
          <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Investor Relations</a></li>
            <li><a href="#">Ways To Watch</a></li>
            <li><a href="#">Corporate Information</a></li>
            <li><a href="#">Netflix Originals</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <ul>
            <li><a href="#">Help Center</a></li>
            <li><a href="#">Jobs</a></li>
            <li><a href="#">Terms Of Use</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <ul>
            <li><a href="#">Account</a></li>
            <li><a href="#">Redeem Gift Cards</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Speed Test</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <ul>
            <li><a href="#">Media Center</a></li>
            <li><a href="#">Buy Gift Cards</a></li>
            <li><a href="#">Cookie Preferences</a></li>
            <li><a href="#">Legal Notices</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>