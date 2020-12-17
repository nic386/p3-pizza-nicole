<style type="text/css">
  * {
    margin: 0;
    padding: 0;
    border: 0;
  }

  body {
    background: white;
    font-family: helvetica;
    color: black;
  }

  .container {
    max-width: 900px;
    margin: 0 auto;
    text-align: center;
    padding: 20px 10px;
  }

  header {
    text-align: center;
    background: white;
    padding: 20px 0;
  }

  nav ul li{
    display: inline;
  }

  nav a {
    text-decoration: none;
    color: white;
    background: black;
    padding: 5px;
  }

  nav a:hover {
    background: white;
    color: #ff107d;
    transition: .5s;
  }

  nav li:before {
    content: "// ";
    position: relative;
    left: -1px;
    color: white;
  }

  footer {
    background: black;
    color: white;
    text-align: center;
    padding: 20px 10px;
  }

</style>

<header>
  <nav class="navbar">
    <a href="index.html">Home</a>
    <a href="contact.html">Contact</a>
    <nav class="dropdown">
      <button class="dropbtn">Vehicles
        <i class="fa fa-caret-down"></i>
      </button>
      <nav class="dropdown-content">
        <a href="henry.html">Henry</a>
        <a href="posydon.html">Posydon</a>
        <a href="phanta.html">Phanta</a>
      </nav>
    </nav>
  </nav>
</header>

<div class="container">
	<h1>Missing fields</h1>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
		}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>

<footer>
	<p>This page designed by Nicole Pizza</p>
</footer>
