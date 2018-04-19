<!DOCTYPE html>
<html lang="en">

<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>Team SpiderMonkeys!</title>
 <meta name="description" content="Homepage of the Spidermonkeys" />
 <meta name="robots" content="index,follow" />
 <meta name="language" content="en" />
 <meta name="content-language" content="en" />
 <meta name="page-topic" content="IT, Technology, Programming" />
 <meta name="page-type" content="Homepage" />
 <meta name="audience" content="all" />
 <meta name="revisit-after" content="28 days" />
 <meta name="author" content="Coffeeman">
 <!--<base href="https://teamspidermonkeys.us/" /> -->
 <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
 <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
 <link href="../css/tsm.css" rel="stylesheet" type="text/css">
 <link href="hos.css" rel="stylesheet" type="text/css">
 <!-- fancy seeing you here -->
 <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

 <!-- IE8 support for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
 <style type="text/css">
    .change::-webkit-input-placeholder {
    /* WebKit, Blink, Edge */
        color: #C7C7CD;
    }
    .change:-moz-placeholder {
    /* Mozilla Firefox 4 to 18 */
        color: #C7C7CD;
        opacity: 1;
    }
    .change::-moz-placeholder {
    /* Mozilla Firefox 19+ */
        color: #C7C7CD;
        opacity: 1;
    }
    .change:-ms-input-placeholder {
    /* Internet Explorer 10-11 */
        color: #C7C7CD;
    }
 </style>
<script type="text/javascript">
function searchString(str) {
	var xmlhttp;
	if (window.XMLHttpRequest) {	//Code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	} else {	//code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			document.getElementById("story").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","hos.php?t=" + Math.random() + "&q=" + str, true);
	xmlhttp.send();
}
</script>

</head>
<body id="page-top" class="index">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">Team Spider Monkeys</a>
            </div>
            <form class="navbar-form navbar-right" role="search">
                <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>
                <div class="form-group">
                    <input type="text" id="searchInput" onclick="searchString(this.value)" onkeyup="searchString(this.value)" class="form-control change" style="color:black;" placeholder="Search">
                </div>
            </form>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<section id="achievements" class="docs section">
    <div class="container">
        <div class="docs-inner">
         <div class="text-center">
            <i class="fa fa-trophy fa-10x"></i>

        </div>

       <ul id="story" class="cbp_tmtimeline">
<?php>
include 'hos.php';
?>
</ul>


</div>
</div>

</section>

  <footer class="text-center">

            <div class="footer-below">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            Copyright &copy; 2017 - Made with love. </div>

                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="../js/bootstrap.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="../js/classie.js"></script>
        <script src="../js/cbpAnimatedHeader.js"></script>
        <script src="../js/freelancer.js"></script>
        <script src="../js/jqBootstrapValidation.js"></script>
        <script src="../js/contact_me.js"></script>

    </body>

    </html>

