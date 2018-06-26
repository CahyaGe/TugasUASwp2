<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin Page</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/el-lib.css">
	<link rel="stylesheet" href="css/fab-style.css" type="text/css">

	<script src="js/el-lib.min.js"></script>
	<script src="js/bootstrap.min.js"></script>



	<style>
@charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic);
@import url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css);
html {
  box-sizing: border-box;
}

*,
*:before,
*:after {
  box-sizing: inherit;
}

body {
  background: #f1f2f7;
  font-family: "Open Sans", arial, sans-serif;
  color: darkslategray;
  position: absolute;
}

body.login {
  background-color: white;
  max-width: 500px;
  margin: 10vh auto;
  padding: 1em;
  height: auto;
}

/* general utility classes */
.warn {
  color: #bf7764;
}

/* header */
header[role="banner"] {
  background: white;
  box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.15);
}
header[role="banner"] h1 {
  margin: 0;
  font-weight: 300;
  padding: 1rem;
}
header[role="banner"] h1:before {
  content: "\f248";
  font-family: FontAwesome;
  padding-right: 0.6em;
  color: turquoise;
}
header[role="banner"] .utilities {
  width: 100%;
  background: slategray;
  color: #ddd;
}
header[role="banner"] .utilities li {
  border-bottom: solid 1px rgba(255, 255, 255, 0.2);
}
header[role="banner"] .utilities li a {
  padding: 0.7em;
  display: block;
}

/* header */
.utilities a:before {
  content: "\f248";
  font-family: FontAwesome;
  padding-right: 0.6em;
}

.logout a:before {
  content: "";
}

.users a:before {
  content: "";
}

nav[role="navigation"] {
  background: #2a3542;
  color: #ddd;
  /* icons */
}
nav[role="navigation"] li {
  border-bottom: 1px solid rgba(255, 255, 255, 0.08);
}
nav[role="navigation"] li a {
  color: #ddd;
  text-decoration: none;
  display: block;
  padding: 0.7em;
}
nav[role="navigation"] li a:hover {
  background-color: rgba(255, 255, 255, 0.05);
}
nav[role="navigation"] li a:before {
  content: "\f248";
  font-family: FontAwesome;
  padding-right: 0.6em;
}
nav[role="navigation"] .dashboard a:before {
  content: "";
}
nav[role="navigation"] .write a:before {
  content: "";
}
nav[role="navigation"] .edit a:before {
  content: "";
}
nav[role="navigation"] .comments a:before {
  content: "";
}
nav[role="navigation"] .users a:before {
  content: "";
}

/* current nav item */
.current, .dashboard .dashboard a,
.write .write a,
.edit .edit a,
.comments .comments a,
.users .users a {
  background-color: rgba(255, 255, 255, 0.1);
}

footer[role="contentinfo"] {
  background: slategray;
  color: #ddd;
  font-size: 0.8em;
  text-align: center;
  padding: 0.2em;
}

/* panels */
.panel {
  background-color: white;
  color: darkslategray;
  -webkit-border-radius: 0.3rem;
  -moz-border-radius: 0.3rem;
  -ms-border-radius: 0.3rem;
  border-radius: 0.3rem;
  margin: 1%;
}
.panel > h2, .panel > ul {
  margin: 1rem;
}

/* typography */
a {
  text-decoration: none;
  color: inherit;
}

h2,
h3,
h4 {
  font-weight: 300;
  margin: 0;
}

h2 {
  color: #1eb6a7;
}

b {
  color: lightsalmon;
}

.hint {
  color: lightslategray;
}

/* lists */
ul,
li {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

main li {
  position: relative;
  padding-left: 1.2em;
  margin: 0.5em 0;
}
main li:before {
  content: "";
  position: absolute;
  width: 0;
  height: 0;
  left: 0;
  top: 0.3em;
  border-left: solid 10px #dde;
  border-top: solid 5px transparent;
  border-bottom: solid 5px transparent;
}

/* forms */
form input,
form textarea,
form select {
  width: 100%;
  display: block;
  border: solid 1px #dde;
  padding: 0.5em;
}
form input:after,
form textarea:after,
form select:after {
  content: "";
  display: table;
  clear: both;
}
form input[type="checkbox"],
form input[type="radio"] {
  display: inline;
  width: auto;
}
form label,
form legend {
  display: block;
  margin: 1em 0 0.5em;
}
form input[type="submit"] {
  background: turquoise;
  border: none;
  border-bottom: solid 4px #21ccbb;
  padding: 0.7em 3em;
  margin: 1em 0;
  color: white;
  text-shadow: 0 -1px 0 #21ccbb;
  font-size: 1.1em;
  font-weight: bold;
  display: inline-block;
  width: auto;
  -webkit-border-radius: 0.5em;
  -moz-border-radius: 0.5em;
  -ms-border-radius: 0.5em;
  border-radius: 0.5em;
}
form input[type="submit"]:hover {
  background: khaki;
  border: none;
  border-bottom: solid 4px #eadc5f;
  padding: 0.7em 3em;
  margin: 1em 0;
  color: white;
  text-shadow: 0 -1px 0 #eadc5f;
  font-size: 1.1em;
  font-weight: bold;
  display: inline-block;
  width: auto;
  -webkit-border-radius: 0.5em;
  -moz-border-radius: 0.5em;
  -ms-border-radius: 0.5em;
  border-radius: 0.5em;
}



@media screen and (min-width: 600px) {
  html,
  body {
    height: 100%;
  }

  header[role="banner"] {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 99;
    height: 75px;
  }
  header[role="banner"] .utilities {
    position: absolute;
    top: 0;
    right: 0;
    background: transparent;
    color: darkslategray;
    width: auto;
  }
  header[role="banner"] .utilities li {
    display: inline-block;
  }
  header[role="banner"] .utilities li a {
    padding: 0.5em 1em;
  }

  nav[role="navigation"] {
    position: fixed;
    width: 150px;
    top: 75px;
    bottom: 0px;
    left: 0px;
  }

  main[role="main"] {
    margin: 75px 0 30px 150px;
  }
  main[role="main"]:after {
    content: "";
    display: table;
    clear: both;
  }

  .panel {
    margin: 1% 0 0 1%;
    float: left;
    width: 100%;
  }
  .panel:after {
    content: "";
    display: table;
    clear: both;
  }

  .box, .onethird, .twothirds {
    padding: 1rem;
  }

  .onethird {
    width: 33.333%;
    float: left;
  }

  .twothirds {
    width: 66%;
    float: left;
  }

  footer[role="contentinfo"] {
    clear: both;
    margin-left: 200px;
  }
}


	</style>

	</head>
	<body>
	<header role="banner">
  <h1>Ruang Dosen</h1>
  <ul class="utilities">
    <li class="logout warn"><a href="logout.php">Log Out</a></li>
  </ul>
</header>

<nav role='navigation'>
  <ul class="main">
    <li class="dashboard"><a href="#"><b class="dis" id="1">Home</b></a></li>
    <li class="edit"><a href="#"><b class="dis" id="2">List Nilai</b></a></li>
    <li class="write"><a href="#"><b class="dis" id="3">Tambah Data</b></a></li>
  </ul>
</nav>

<main role="main">

		<div id="eta"></div>

</main>
</body>
 
<script>
 $(document).ready(function(){
      $('.dis').each(function(){
        $(this).on('click', function(){
      var menu = $(this).attr('id');
      if(menu == "1"){
      $('#eta').load('apage.html');           
      }else if(menu == "2"){
        $('#eta').load('list.php');            
      }else if(menu == "3"){
        $('#eta').load('add.php');           
      }
    });
    });
  $('#eta').load('list.php');
  });
</script>
</html>