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
  <h1>Sorry something went wrong with your submission</h1>
  <p>Please try again</p>
</div>

<footer>
  <p>This page designed by Nicole Pizza</p>
</footer>
