<?php
session_start();
require("header.php");
require("checkUser.php")
?>
<head>
<style>
body
{background-color:brown;}
h1 {
  font-size: 52px;
  font-family: Courier;
  text-align: center;
  font-family: Courier New, Courier, monospace;
}
section {
  min-height: 90vh;
  padding-top: 10px;
  padding-bottom: 10px;
  color: #fff;
  background-color: #34addb;
  bottom: 10px;
}
.well {
  margin-right: 100px;
  margin-left: 100px;
}
.results {
  margin-top: 10%;
}
.random {
  text-align: center;
}
footer {
  background-color: black;
  color: gray;
  line-height: 20px;
  padding-top: 10px;
  padding-bottom: 6px;
  position: relative;
  text-align: center;
  font-family: cursive, sans-serif;
}
.search-position {
  position: absolute;
  left: 50%;
  top: 20%;
  transform: translate(-50%, -50%);
}

/* Search Bar CSS */

#search {
  -webkit-appearance: none;
  font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
  width: 24px;
  padding: 0 10px;
  height: 24px;
  font-size: 14px;
  color: #666;
  line-height: 24px;
  border: 0;
  border-radius: 50px;
  box-shadow: 0 0 0 1px rgba(0, 150, 200, .5), inset 0 2px 5px rgba(0, 100, 150, .3), 0 2px 0 rgba(255, 255, 255, .6);
  position: relative;
  z-index: 5;
  -webkit-transition: .3s ease;
  -moz-transition: .3s ease;
}

/* When clicked */

#search:focus {
  outline: none;
  width: 200px;
}
.search-icon {
  margin: 50px auto 0 -50%;
  left: 50%;
  z-index: 4;
  position: relative;
  padding: 5px;
  line-height: 0;
  border-radius: 100px;
  background: #b9ecfe;
  background-image: -webkit-linear-gradient(#dbf6ff, #b9ecfe);
  background-image: -moz-linear-gradient(#dbf6ff, #b9ecfe);
  display: inline-block;
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, .6), 0 2px 5px rgba(0, 100, 150, .4);
}
.search-icon:hover {
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, .6), 0 2px 3px 2px rgba(100, 200, 255, .5);
}
.search-icon:after {
  content: '';
  display: block;
  position: absolute;
  width: 5px;
  height: 20px;
  background: #b9ecfe;
  bottom: -10px;
  right: -3px;
  border-radius: 0 0 5px 5px;
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  box-shadow: inset 0 -1px 0 rgbA(255, 255, 255, .6), -2px 2px 2px rgba(0, 100, 150, .4);
}
.search-icon:hover:after {
  box-shadow: inset 0 -1px 0 rgba(255, 255, 255, .6), -2px 2px 2px 1px rgba(100, 200, 255, .5);
}
</style>

</head>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Wikipedia Viewer</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <section>
    <div class="container-fluid">
      <h1>Wikipedia Viewer</h1>
      <article class="search-position">
        <p class="search-icon">
          <input name="search" id="search" type="search">
        </p>
      </article>
      <article class="random">
        <a href="https://en.wikipedia.org/wiki/Special:Random" target="_blank">
          <button type="button" class="btn btn-primary">Random Article!</button>
        </a>
        </articles>
        <article class="results">
        </article>
    </div>
  </section>
  <footer>
    <p>Copyright � 2017 Designed by  IT and CS students of Valley View University. All Rights Reserved</p>
    <p>
      <a href="fos@vvu,edu,gh">
        <i class="fa fa-envelope fa-fw"></i>
      </a>
      <a href="https://github.com/jaysin19/valley-view-university-information-technology-discussion-forum" target='_blank'>
        <i class="fa fa-github fa-fw"></i>
      </a>
          
    </p>
  </footer>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
  <script src="res/json.js"></script>

</body>

</html>
