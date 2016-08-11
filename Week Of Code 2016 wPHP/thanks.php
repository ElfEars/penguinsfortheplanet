
<!DOCTYPE html>

<html>

<head>

    <!-- Browser tab icon -->
  <link rel="shortcut icon" type="image/x-icon" href="pb.ico" />

<title>Penguins For The Planet</title>

<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

<style type="text/css">

@import url(https://fonts.googleapis.com/css?family=Lato);

*, *:before, *:after{
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  padding: 0;
  margin: 0;
  font-family: 'Lato', sans serif;
}

/*| Navigation |*/

/*----------------------------------------------------------------------------------------------------------------------------------------------------*/

nav{
  position: relative;
  top: 0;
  left: 0;
  width: 100%;
  background: #002946;
  box-shadow: 0 3px 10px -2px rgba(0,0,0,.1);
  border: 1px solid rgba(0,0,0,.1);
}
  nav ul{
    list-style: none;
    position: relative;
    float: right;
    margin-right: 100px;
    display: inline-table;
  }
    nav ul li{
      float: left;
      -webkit-transition: all .2s ease-in-out;
      -moz-transition: all .2s ease-in-out;
      transition: all .2s ease-in-out;
    }

    nav ul li:hover{background: rgba(0,0,0,.15);}
    nav ul li:hover > ul{display: block;}
    nav ul li{
      float: left;
      -webkit-transition: all .2s ease-in-out;
      -moz-transition: all .2s ease-in-out;
      transition: all .2s ease-in-out;
    }
      nav ul li a{
        display: block; 
        padding: 30px 20px;
        color: white; 
        font-size: .9em;
        letter-spacing: 1px;
        text-decoration: none;
        text-transform: uppercase;
      }
      nav ul ul{
        display: none;
        background: #00142D;
        position: absolute; 
        top: 100%;
        box-shadow: -3px 3px 10px -2px rgba(0,0,0,.1);
        border: 1px solid rgba(0,0,0,.1);
      }
        nav ul ul li{float: none; position: relative;}
          nav ul ul li a {
            padding: 15px 30px; 
            border-bottom: 1px solid rgba(0,0,0,.05);
          }
          nav ul ul ul {
            position: absolute; 
            left: 100%; 
            top:0;
          } 
/*----------------------------------------------------------------------------------------------------------------------------------------------------*/

iframe#iframe {
	position: absolute;
	margin-top: 100px;
}

body {
  background-image: url(earth.jpg);
        -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  background-repeat: no-repeat;
}

img#penguino {
  margin: 10px;
}

p#welcome {
  font-family: 'Lato', sans serif;
  color: white;
  font-size: 30px;
  margin-top: 10px;
}

p#ptfp {
  font-family: 'Lato', sans serif;
  color: white;
  font-size: 99px;
}

p#new {
  margin-top: 125px;
  color: black;
  font-size: 50px;
}

</style>

</head>

<body>

	<nav role='navigation'>
        <img src="phome.png" width="60" height="60" id='penguino'>
  <ul>
    <li><a href="recycling.php">Home</a></li>
    <li><a href="#">Recycling?</a>
      <ul>
        <li><a href="why.html">Why Recycle?</a></li>
        <li><a href="where.html">Where to Recycle?</a></li>
        <li><a href="how.html">How to Recycle?</a></li>
      </ul>
    </li>
  </ul>
</nav>  

<center>

  <p id='welcome'>THANK YOU</p>
  <?php 

// opens pledge counter in read mode, gets data and increments it
$pledgecounter = fopen("pledgecount.txt", "r");
$pledgeno = fgets($pledgecounter, 100000)+1;
fclose($pledgecounter);
// opens pledge counter in write mode and writes new data
$pledgecounter = fopen("pledgecount.txt", "w");
fwrite($pledgecounter, $pledgeno);
fclose($pledgecounter);
// shows new pledge number and thanks pledger
echo "Now there's $pledgeno pledges!<br>";

?>



</center>


</body>

</html>