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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
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
    <form method="POST" onSubmit="return false;">
      <input type="text" value="<?php if(isset($_POST['searchBox'])){echo $_POST['searchBox'];}?>" name="searchBox" id="searchBox"/>
  </div>
</div>
<div class="row-fluid subheading">
  <div class="span12">
      <p>Depth &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Breadth</p>
  </div>
</div>
<div class="row-fluid subheading">
  <div class="span12">
      <input type="range" min="0" max="100" step="1" value="<?php if(isset($_POST['depth'])){echo $_POST['depth'];} else{echo 50;}?>" name="depth" id="depth"/>
      <input type="range" min="0" max="100" step="1" value="<?php if(isset($_POST['breadth'])){echo $_POST['breadth'];} else{echo 50;}?>" name="breadth" id="breadth"/>
	</form>
  </div>
</div>
<div id='result'>
<span id='word'></span>
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
	<script>
	$(function() {
		$('#searchBox').bind('change keyup', function(event) {
			if(event.type == 'change' || event.type == 'keyup' && /*(event.keyCode == 32 || */event.keyCode == 13)//)
				$.ajax({type: 'POST',
					url: 'search.php', 
					data: $('form').serialize(),
					success: function(response) {
						$('#result').html(response);
					}
				});
		});
		$('#depth').bind('mouseup', function(event) {
			$.ajax({type: 'POST',
					url: 'search.php', 
					data: $('form').serialize(),
					success: function(response) {
						$('#result').html(response);
					}
			});
		});
		$('#breadth').bind('mouseup', function(event) {
			$.ajax({type: 'POST',
					url: 'search.php', 
					data: $('form').serialize(),
					success: function(response) {
						$('#result').html(response);
					}
			});
		});
	});
	</script>
  </body>
</html>
