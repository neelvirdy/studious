<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Studious</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://d396qusza40orc.cloudfront.net/startup%2Fcode%2Fbootstrap-combined.no-icons.min.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css">
    <link rel="stylesheet" href="https://d396qusza40orc.cloudfront.net/startup%2Fcode%2Fsocial-buttons.css">    
    <script src="https://d396qusza40orc.cloudfront.net/startup%2Fcode%2Fjquery.js"></script>
    <script src="https://d396qusza40orc.cloudfront.net/startup%2Fcode%2Fbootstrap.js"></script>
    <link href="http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,300,400,600,700,800" 
          rel="stylesheet" type="text/css">
    <style type="text/css">

      /* Large desktop */
      @media (min-width: 980px) { 
        body {
         padding-top: 60px;
        }
       .linediv-l {
         border-right: 1px white solid;
        }
       .linediv-r {
         border-left: 1px white solid;
       }
      }

      /* Landscape phones and down */
      @media (max-width: 480px) { 
       .copy {
         padding: 2.5% 10%;
       }
       .linediv-l {
         border-bottom: 1px white solid;
       }
       .linediv-r {
         border-top: 1px white solid;
       }
      }

      /* All form factors */

      /* Main body and headings */
      body{
        font-family: 'Open Sans', Helvetica, Arial, sans-serif;
      }
      .heading, .subheading {
        font-family: 'Ubuntu', Helvetica, Arial, sans-serif;
        text-align: center;
      }
      p.lead {
        padding-top: 1.5%;
        font-size: 24px;
        line-height: 30px;
      }
      p {
        font-size: 18px;
        line-height: 24px;
      }

      /* Video pitch and Action */
      .pitch {
        padding: 2.5% 0%;
      }
      .order {
        padding: 2% 0%;
      }
      .actions {
        background-color: #343434;
        padding: 3% 0%;
      }
      .video, .thermometer, .order, .social, .statistics {
        text-align: center;
      }
      .statistics h3, .statistics p {
        color: white;
      }

      /* Marketing Copy and Footer */
      .copy {
        padding-top: 2.5%;
        padding-bottom: 2.5%;
        text-align: justify;
      }
      .asset {
        padding: 2.5% 0%;
      }
      .footer {
        color: #cccccc;
        text-align: center;
      }
      .footer p {
        font-size: 11px;
      }
      .footer a {
        color: #ccccff;
      }

    </style>
  </head>
  <body>

    <!-- Mobile-friendly navbar adapted from example. -->
    <!-- http://twitter.github.io/bootstrap/examples/starter-template.html -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar"
                  data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Studious</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <!-- We use row-fluid inside containers to achieve a resizable layout. -->
    <!-- blogs.endjin.com/2013/04/tips-for-implementing-responsive-designs-using-bootstrap/ -->
    <!-- http://stackoverflow.com/a/12270322 -->
    <div class="container">
      <!-- Font and paired font of .heading/.subheading and body from Google Fonts -->
      <!-- www.google.com/fonts/specimen/Ubuntu -->
      <!-- www.google.com/fonts/specimen/Ubuntu#pairings -->
      <div class="row-fluid heading">
        <div class="span12">
          <h1>Studious</h1>
        </div>
      </div> 
      <div class="row-fluid subheading">
        <div class="span12">
          <!-- Special typography from Bootstrap for lead paragraph. -->
          <!-- http://twitter.github.io/bootstrap/base-css.html#typography -->
          <p class="lead">Knowledge at your fingertips.</p>
        </div>
      </div>
<div class="row-fluid subheading">
  <div class="span12">
    <form action="index.php" method="POST">
      <input type="text" name="searchBox"/>
      <input type="submit" value="Learn" name="submitButton"/>
	</form>
  </div>
</div>

<?php
    if(isset($_POST['submitButton'])){
	  $str = $_POST['searchBox'];
	  echo $str;
      $con = mysqli_connect("localhost","neelvirdy","kryptiatk1","studious");
      // Check connection
      if (mysqli_connect_errno()){
  	    echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }

	  $query = mysqli_real_escape_string($con, "SELECT content FROM phrases WHERE content LIKE '%" + $str + "%';");
	  echo $query;
      $result = mysqli_query($con,$query);

      while($row = mysqli_fetch_array($result)) {
        echo $row[0];
		echo nl2br("\n");
      }
	  echo mysqli_error($con);
      mysqli_close($con);
	}
?>

      <div class="row-fluid pitch">
        <div class="span5 offset1 video">
          <img class="img-polaroid" src="http://placehold.it/480x300">
        </div>

        <!-- We define a new 'actions' div to contain statistics, order, and share buttons.-->
        <div class="span5 actions">
          <div class="span8 offset2">
            <div class="statistics">
              <div class="span4">
                <!-- linediv-l and linediv-r give dividing lines that look
                different in horizontal and vertical layouts, illustrating
                media queries. -->
                <div class="linediv-l">
                <h3>120 </h3> <p>backers</p>
                </div>
              </div>
              <div class="span4">
                <div class="linediv-c">
                  <h3>$400 </h3> <p>of $1,000 </p>
                </div>
              </div>
              <div class="span4">
                <div class="linediv-r">
                <h3>30</h3> <p>days left</p>
                </div>
              </div>
            </div>
          </div>
          <div class="span10 offset1">
            <!-- Bootstrap progress bar -->
            <!-- http://twitter.github.io/bootstrap/components.html#progress -->
            <div class="thermometer progress active">
              <div class="bar bar-success" style="width: 40%;"></div>
              <div class="bar bar-warning" style="width: 60%;"></div>
            </div>
          </div>
          <div class="span6 offset3 order">
            <!-- Standard Bootstrap button. -->
            <!-- http://twitter.github.io/bootstrap/base-css.html#buttons -->
            <button class="btn btn-success btn-large">Donate</button>
          </div>
          <div class="span8 offset2 social">
            <!-- Social buttons are not included in default Bootstrap. -->
            <!-- See: http://noizwaves.github.io/bootstrap-social-buttons -->
            <button class="btn btn-twitter"><i class="icon-twitter"></i> | Twitter</button>
            <button class="btn btn-facebook"><i class="icon-facebook"></i> | Facebook</button>
          </div>
        </div>
      </div>

      <!-- Beyond this part the marketing copy begins. -->
      <!-- https://developer.mozilla.org/en-US/docs/Web/CSS/text-align -->
      <!-- http://twitter.github.io/bootstrap/base-css.html#images -->
      <!-- http://placehold.it -->
      <div class="row-fluid section1">
        <div class="span5 offset1 asset">
          <img class="img-polaroid" src="http://placehold.it/480x300">
        </div>
        <div class="span5 copy">
          <p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
			porta, dui sagittis hendrerit rutrum, nunc leo tempus nisl, eu
			mollis justo velit at nunc. Fusce nec egestas sem. Donec
			fringilla ante lectus, a pellentesque lacus dignissim ac. Sed
			volutpat lorem ut congue malesuada. In facilisis scelerisque
			turpis sed lacinia. Donec in orci lectus. Donec auctor semper
			quam, eget rhoncus purus fringilla id. Phasellus id nibh eu
			risus ultrices adipiscing.  Lorem ipsum dolor sit amet,
			consectetur adipiscing elit. Donec porta, dui sagittis hendrerit
			rutrum, nunc leo tempus nisl, eu mollis justo velit at
			nunc. Fusce nec egestas sem. Donec fringilla.
          </p>
        </div>
      </div>

      <div class="row-fluid section2">
        <div class="span5 offset1 copy copy-right">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
            porta, dui sagittis hendrerit rutrum, nunc leo tempus nisl, eu
            mollis justo velit at nunc. Fusce nec egestas sem. Donec
            fringilla ante lectus, a pellentesque lacus dignissim ac. Sed
            volutpat lorem ut congue malesuada. In facilisis scelerisque
            turpis sed lacinia. Donec in orci lectus. Donec auctor semper
            quam, eget rhoncus purus fringilla id. Phasellus id nibh eu
            risus ultrices adipiscing.  Lorem ipsum dolor sit amet,
            consectetur adipiscing elit. Donec porta, dui sagittis hendrerit
            rutrum, nunc leo tempus nisl, eu mollis justo velit at
            nunc. Fusce nec egestas sem. Donec fringilla.
          </p>
        </div>
        <div class="span5 asset">
          <img class="img-polaroid" src="http://placehold.it/480x300">
        </div>
      </div>

      <!-- For the FAQ, we introduce a little bit of JS, using the accordion. -->
      <!-- This brings in jquery.js and bootstrap.js as dependencies. -->
      <!-- http://twitter.github.io/bootstrap/javascript.html#collapse -->
      <div class="row-fluid faq">
          <div class="span10 offset1">
            <h3>FAQ</h3>
            <div class="accordion" id="accordion2">
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse"
                     data-parent="#accordion2" href="#collapseOne">
                    What does FAQ stand for?
                  </a>
                </div>
                <div id="collapseOne" class="accordion-body collapse">
                  <div class="accordion-inner">
                    Frequently Asked Question.
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse"
                     data-parent="#accordion2" href="#collapseTwo">
                    What's a Frequently Asked Question?
                  </a>
                </div>
                <div id="collapseTwo" class="accordion-body collapse">
                  <div class="accordion-inner">
                    A question which is commonly asked by users.
                  </div>
                </div>
              </div>
            </div>
          </div>

      </div>

      <!-- Not crucial, but we put this under a CC By-SA 3.0 license. -->
      <!-- http://creativecommons.org/licenses/ -->
      <div class="row-fluid footer">
        <div class="span12">
          <p>This work is licensed under
            the <a href="http://creativecommons.org/licenses/by-sa/3.0/">CC
              By-SA 3.0
            </a>, without all the cruft that would otherwise be
            put at the bottom of the page.</p>
        </div>
      </div>
    </div>
  </body>
</html>
