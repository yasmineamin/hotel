<html>
<head>
	 <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Main | Quality control view</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/stylee.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
	<!---addtional-->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <?php
session_start();
include "qc_menu.php";?>

	<style>
		body {
    line-height: 1

background: grey;

}

ol,
ul {
    list-style: none;
}
.list {
  display: black;
  list-style-type: disc;
  margin-block-start: 1em;
  margin-block-end: 1em;
  margin-inline-start: 0px;
  margin-inline-end: 0px;
  padding-inline-start: 40px;
}
* {
    box-sizing: border-box;
    text-decoration: none
}
	button {
    padding: 0;
    border-radius: 0
}

input {
    border: 0
}
@font-face {
    font-family: ProximaNova;
    
    font-weight: 300;
    font-style: normal
}

@font-face {
    font-family: ProximaNova;
    
    font-weight: 400;
    font-style: normal
}

@font-face {
    font-family: ProximaNova;

    font-weight: 500;
    font-style: normal
}

@font-face {
    font-family: ProximaNova;
  
    font-weight: 600;
    font-style: normal
}

@font-face {
    font-family: ProximaNova;
    
    font-weight: 800;
    font-style: normal
}

@font-face {
    font-family: Marriott-Brands;
    
    font-weight: 400;
    font-style: normal
}

@font-face {
    font-family: Swiss;

    font-weight: 400;
    font-style: bold
}

@font-face {
    font-family: ProximaNova-Regular;
 
    font-style: normal;
    font-weight: 400;
  }
  div.image img,
div.image picture {
    display: block;
    width: 100%;
    max-width: 100%
}
div.captioned.image {
    position: initial;
    bottom: -40px;
}

@media(min-width:1024px){
  div.captioned.image {
      position: relative;
      bottom: auto;
  }
}
div.captioned.image img {
    z-index: 1
}

div.captioned.image p.caption {
    z-index: 3
}

@media (min-width:769px) {
    .mobile-only {
        display: none
    }
}

@media (max-width:768px) {
    .desktop-only {
        display: none
    }
}

div.slick-slider {
    box-sizing: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-touch-callout: none;
    -khtml-user-select: none;
    touch-action: pan-y;
    -webkit-tap-highlight-color: transparent
}

div.slick-list,
div.slick-slider {
    position: relative;
    display: block
}

div.slick-list {
    overflow: hidden;
    margin: 0;
    padding: 0
}

div.slick-list:focus {
    outline: none
}

div.slick-list.dragging {
    cursor: pointer;
    cursor: hand
}

div.slick-slider .slick-list,
div.slick-slider .slick-track {
    transform: translateZ(0)
}

div.slick-track {
    position: relative;
    top: 0;
    left: 0;
    display: block;
    margin-left: auto;
    margin-right: auto
}

div.slick-track:after,
div.slick-track:before {
    display: table;
    content: ""
}

div.slick-track:after {
    clear: both
}

div.slick-loading .slick-track {
    visibility: hidden
}

div.slick-slide {
    display: none;
    float: left;
    height: 100%;
    min-height: 1px
}

[dir=rtl] div.slick-slide {
    float: right
}

div.slick-slide img {
    display: block
}

div.slick-slide.slick-loading img {
    display: none
}

div.slick-slide.dragging img {
    pointer-events: none
}

div.slick-initialized div.slick-slide {
    display: block
}

div.slick-loading div.slick-slide {
    visibility: hidden
}

div.slick-vertical div.slick-slide {
    display: block;
    height: auto;
    border: 1px solid transparent
}

div.slick-arrow.slick-hidden {
    display: none
}

a {
    color: inherit;
    font-size: .inherit;
    font-weight: inherit;
    text-decoration: none
}

h1,
h2,
h4,
h5,
h6 {
    font-family: Swiss-721,Helvetica,Arial,sans-serif;
    font-weight: 600;
}


sup {
    font-size: 50%;
    vertical-align: super
}

pre {
    padding: 20px 40px;
    background-color: #ecf0f1;
    border-radius: 10px;
    color: #2c3e50;
    font-family: sans-serif;
    line-height: 1.4
}

@font-face {
  font-family: "untitled-font-2";
 
  font-weight: normal;
  font-style: normal;

}

[data-icon]:before {
  font-family: "untitled-font-2" !important;
  content: attr(data-icon);
  font-style: normal !important;
  font-weight: normal !important;
  font-variant: normal !important;
  text-transform: none !important;
  speak: none;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

[class^="icon-"]:before,
[class*=" icon-"]:before {
  font-family: "untitled-font-2" !important;
  font-style: normal !important;
  font-weight: normal !important;
  font-variant: normal !important;
  text-transform: none !important;
  speak: none;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.icon-icons-trips:before {
  content: "\61";
}
.icon-icons-loyalty:before {
  content: "\62";
}
.icon-icons-help:before {
  content: "\63";
}



body,
html {
    background: #fff;
    color: #000;
    overflow-x: hidden;
}


body,
html {
    font-family: ProximaNova, Open Sans, Gill Sans MT, Gill Sans, Corbel, Arial, sans-serif !important
}





div.copy-container{
  text-align: center;
    background: white;
    position: relative;
    padding: 20px 10px;
    margin-bottom: 30px;
}

@media(min-width:768px){
  div.copy-container{
    text-align: center;
      background: white;
      position: relative;
      padding: 50px 10px;
      margin-bottom: 40px;
        top: -20px;
  }
}
div.body-copy{
  font-size: 13px;


}

@media(min-width:768px){
  div.body-copy{
    font-size: 17px;


  }
}
div.sidebar {
    flex: 20%;
    background-color: #f4f4f4;
    right: 0;
    overflow-x: hidden;
    font-size: 16px;
    line-height: 22px;
}
div.sidebar a:hover {
  font-weight: bold;
}

@media(max-width:1023px){
  div.sidebar {
    flex: 100%;
    height: auto;
    padding-bottom: 45px;

  }
}

div.details {
  display: flex;
  clear: both;
  content: "";
}
@media(max-width:699px){
  div.details {
    display: grid;
  }
}
div.information {
  width: 50%;
  float: left;
  margin-top: auto;
  margin-bottom: auto;
  padding-top: 40px;
}
@media(max-width:699px){
  div.information {
    width: 100%;
    padding-top: 15px;
  }
}
@media(max-width:768px){
 div .information {
    margin-top: 0;
  }
}

hr.hr {
  border: 1px solid lightgrey;
}

div.sidebar-2 {

}

@media(max-width:1023px){
  div.sidebar-2 {
  display: block;
  }
}

p.info-copy {
font-size: 16px;
font-family: ProximaNova-Regular, sans-serif;
line-height: 20px;
  width: 90%;
  margin-top: 15px;
  margin-bottom: 20px;
}
h3.cover {
  font-size: 24px;
  font-family: ProximaNova semibold, sans-serif;
  line-height: 28px;
  width: 100%;
  padding-top: 10px;
}
p.face-coverings {
  font-size: 16px;
  font-family: ProximaNova-Regular, sans-serif;
  line-height: 20px;
  margin-top: 20px;
  margin-bottom: 10px;
  padding-left: 98px;
  padding-right: 98px;
}
@media(max-width: 1080px) {
  p.face-coverings {
    padding-left: 30px;
    padding-right: 30px;
  }
}
@media(max-width: 425px) {
  p.face-coverings {
    padding-left: 0px;
    padding-right: 0px;
  }
}
@media(max-width:768px){
  p.info-copy {
    width: 100%;
    font-size: 16px;
    line-height: 20px;
    padding-right: 15px;
    margin-top: 0;
  }
}

h1 {
  font-size: 3.5vw;
  font-family: swiss721BT-BoldCondensed, sans-serif;
  line-height: 3.25rem;
  padding-top: 25px;
  padding-bottom: 25px;
  text-shadow: 0 0 0.125rem #1C1C1C;
}

@media(max-width:768px){
  h1 {
    font-size: 32px;
    line-height: 39px;
    padding-top: 30px;
  }
}
@media(max-width:699px){
  h1 {
    font-size: 32px;
    line-height: 39px;
  }
}
.clean-logo {
  width: 20% !important;
  margin-left: auto;
  margin-right: auto;
}
@media(max-width:699px){
  .clean-logo {
    width: 50% !important;
  }
}
h2 {
  font-size: 32px;
  line-height: 39px;
  font-weight: 600;
  font-family: swiss721BT-BoldCondensed, sans-serif;
}
@media(max-width:768px){
  h2  {
    font-size: 28px;
    line-height: 32px;
  }
}
h3 {
  font-size: 24px;
  font-family: ProximaNova semibold, sans-serif;
  line-height: 28px;
  width: 90%;
}
@media(max-width:768px){
  h3  {
    font-size: 22px;
    line-height: 26px;
  }
}
@media(max-width:425px){
  h3  {
    font-size: 20px;
    line-height: 24px;
  }
}
h4 {
  font-size: 20px;
  font-family: ProximaNova, sans-serif;
  line-height: 24px;
}
@media(max-width:768px){
  h4  {
    font-size: 20px;
    line-height: 24px;
  }
}

div.hero-overlay{
text-align: center;
position: absolute;
color: white;

z-index: 999;
bottom: 0;
}
@media(max-width:700px){
  div.hero-overlay {

  
  }
}
@media(max-width:1024px){
  div.hero-overlay {
    padding-bottom: 65px;
	 padding-left: 97px;
  }
}
@media(max-width:1023px){
 div .hero-overlay {
   padding-left: 100px;
  padding-right: 100px;
  padding-top: 20px;
}
}
div.herocopy {
  font-size: 1.5vw;
  font-family: ProximaNova semibold, sans-serif;
  line-height: 1.8vw;
}
@media(max-width:699px){
  div.herocopy {
    font-size: 20px;
    line-height: 24px;
  }
}
@media(max-width:320px){
  div.herocopy {
    font-size: 16px;
    line-height: 20px;
  }
}
@media(min-width:700px){
  div.herocopy{
    font-size: 16px;
    line-height: 20px;
  }
}
@media(min-width:1024px){
  div.herocopy{
    font-size: 1.5vw;
    line-height: 1.8vw;
  }
}
img.downarrow {
  width: 30px !important;
  margin-right: auto;
  margin-left: auto;
}
@media(max-width:768px){
  img.downarrow {
    margin-top: -20px;
  }
}
div.row{
  padding-left: 100px;
  padding-right: 80px;
  padding-top: 25px;
  background-color: #f4f4f4;
  display: flex;
}
@media(max-width:768px){
  div.row {
    padding-left: 62px;
    padding-right: 62px;
    padding-top: 30px;
    padding-bottom: 40px;
    display: block !important;
  }
}


@media(max-width:425px){
 div .row {
    padding-left: 26px;
    padding-right: 12px;
    padding-top: 100px;
    padding-bottom: 40px;
    display: block !important;
  }
}
div.row-2{
  padding-left: 100px;
  padding-right: 100px;
  padding-top: 20px;
  background-color: #f4f4f4;
}
@media(max-width:768px){
  div.row-2 {
    padding-right: 62px;
    padding-left: 62px;
  }
}
@media(max-width:425px){
  div.row-2 {
    padding-right: 30px;
    padding-left: 30px;
  }
}
div.row-3{
  padding-left: 100px;
  padding-right: 100px;
  padding-top: 20px;
  background-color: #f4f4f4;
}
@media(max-width:768px){
  div.row-3 {
    padding-left: 62px;
    padding-right: 62px;
  }
}
@media(max-width:425px){
  div.row-3 {
    padding-left: 26px;
    padding-right: 26px;
  }
}
div.text-block {
  position: absolute;
  top: 70px;
  bottom: 20px;
  color: white;
  padding-left: 100px;
  padding-right: 20px;
  width: 55%;
  font-size: 20px;
  font-family: ProximaNova Semibold, sans-serif;
  line-height: 24px;
  height: 350px;
}
@media(max-width:1080px){
  div.text-block {
    top: 20px;
    width: 55%;
    padding-left:80px;
  }
}
@media(max-width:768px){
 div .text-block{
    position: relative;
    color: black;
    padding-left: 62px;
    padding-right: 62px;
    width: 100%;
    height: auto;
    top: 20px;
    padding-bottom: 10px;
  }
}
@media(max-width:425px){
 div .text-block{
    position: relative;
    color: black;
    padding-left: 26px;
    padding-right: 26px;
    width: 100%;
    height: auto;
  }
}
div.text-block-min {

}
p {
  line-height: 18px;
  font-family: proximanova, sans-serif;
  font-size: 14px;
  padding-top: 10px;
}
@media(max-width:768px){
  p {
    font-size: 20px;
    line-height: 24px;
  }
}
@media(min-width:1081px){
  p {
    font-size: 20px;
    line-height: 24px;
  }
}
html {
  scroll-behavior: smooth;
}
div.column-3 {
  padding-right: 30px;
  width: 33%;
}
@media(max-width:768px){
  div.column-3 {
    width: 100%;
    padding-bottom: 35px;
  }
}
@media(max-width:425px){
 div .column-3 {
    padding-right: 0px;
  }
}
div.bestrate {
  font-family: ProximaNova Regular;
  font-size: 16px;
  line-height: 20px;
  display: flex;
  width: 100%;
  padding-bottom: 35px;
}
@media(max-width:768px){
  div.bestrate {
    display: block;
  }
}
div.bestrateheader {
  width: 100%;
  background-color: #f4f4f4;
  padding-left: 100px;
  padding-top: 25px;
}
@media(max-width:768px){
  div.bestrateheader {
    padding-left: 62px;
  }
}
@media(max-width:425px){
  div.bestrateheader {
    padding-left: 26px;
  }
}
p.numeral  {
  font-size: 48px;
  line-height: 55px;
  font-family: ProximaNova Semibold, sans-serif;
  color: #707070;
}
@media(max-width:768px){
  p.numeral {
    font-size: 50px;
    line-height: 55px;
  }
}

div.row-center {
  width: 100%;
  margin-left: auto;
  margin-right: auto;
  text-align: center;
  padding-bottom: 100px;
  font-weight: bold;
  font-family: ProximaNova;
  background-color: #f4f4f4;
}
@media(max-width:768px){
 div .row-center {
    padding-top: 1px;
  }
}
div.text-block-right {
  position: absolute;
  top: 70px;
  bottom: 20px;
  color: white;
  padding-right: 80px;
  width: 45%;
  font-size: 20px;
  font-family: ProximaNova Semibold, sans-serif;
  line-height: 24px;
  float: right;
  right: 0;
  height: 350px;
}
@media(max-width:1080px){
  div.text-block-right {
    top: 20px;
  }
}
@media(max-width:768px){
  div.text-block-right{
    position: relative;
    color: black;
    padding-left: 62px;
    padding-right: 62px;
    width: 100%;
    top: 20px;
    height: auto;
  }
}
@media(max-width:425px){
  div.text-block-right{
    padding-left: 26px;
    padding-right: 26px;
  }
}
div.tabcontent {
  display: none;
  position: relative;
  background-color: #f4f4f4;
}
li {
  font-family: proximanova, sans-serif;
  font-size: 16px;
  line-height: 20px;
}
@media(max-width: 768px) {
  li {
    font-size: 16px;
    line-height: 20px;
  }
}
div.column {
  width: 25% !important;
  background-color: #f4f4f4;
}
@media(max-width: 768px){
  div.column {
    float: left;
    width: 49% !important;
    display: block !important;
    padding-top: 30px;
    padding-right: 10px;
    padding-bottom: 20px;
  }
}
@media(max-width: 425px){
  div.column {
    width: 100% !important;
    height: auto;
  }
}
@media(min-width: 464px){
  div.column {
    height: 415px;
  }
}
@media(min-width: 465px){
  div.column {
    height: 415px;
  }
}

div#image {order: 2;}
@media(max-width:768px){
  div#image {order:1;}
}
div#text  {order: 1;}
@media(max-width:768px){
  div#text {order:2;}
}
img.body-image {
		position:relative;
  width: 90%
}
@media(max-width:699px){
  img.body-image {
    width: 100%;
  }
  
}
img.hero-image {
  width: 100%
}
@media(max-width:400px) {
  img.hero-image {
    display: none;
	position:relative;
  }
}
div.coverings {
  background: #f4f4f4;
  padding: 20px;
  text-align: center;
  margin-top: 20px;
  margin-bottom: 20px;
}
table {

  border-collapse: collapse;
  width: 70%;
}

th, td {

  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

th{
background-color:gray;
}

tr:hover {background-color: coral;}
.checked {
  color: orange;
}
div.container{
	
            width: 1000px;
            background: #FFF;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, .3);
            padding: 40px 30px;
     
 
  

}
<!--
.heading {
  font-size: 25px;
  margin-right: 25px;
}

.fa {
  font-size: 25px;
}

.checked {
  color: orange;
}

/* Three column layout */
.side {
  float: left;
  width: 15%;
  margin-top: 10px;
}

.middle {
  float: left;
  width: 70%;
  margin-top: 10px;
}

/* Place text to the right */
.right {
  text-align: right;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The bar container */
.bar-container {
  width: 100%;
  background-color: #f1f1f1;
  text-align: center;
  color: white;
}

/* Individual bars */
.bar-5 {width: 60%; height: 18px; background-color: #04AA6D;}
.bar-4 {width: 30%; height: 18px; background-color: #2196F3;}
.bar-3 {width: 10%; height: 18px; background-color: #00bcd4;}
.bar-2 {width: 4%; height: 18px; background-color: #ff9800;}
.bar-1 {width: 15%; height: 18px; background-color: #f44336;}

/* Responsive layout - make the columns stack on top of each other instead of next to each other */
@media (max-width: 400px) {
  .side, .middle {
    width: 100%;
  }
  /* Hide the right column on small screens */
  .right {
    display: none;
  }
}-->
</style>
</head>
<body>

 <div id="main" role="main" class="site-container">

<div class=" carousel-component ">
	<ul class="slides">
					<li class="slide">
				<div   class="background">

					<div class="image captioned">
						<div class="hero-overlay">
						<img class="clean-logo" src="img/COVID-commitClean_logo.png" alt="TheHotel. Commitment to clean">
                              <h1>Travel With Confidence During COVID-19</h1>
                                       <div class="herocopy">We are closely monitoring the Centers for Disease Control and Prevention and World Health Organization's statements regarding the novel coronavirus (COVID-19) cases and following guidelines from these agencies and the local health departments. 
<br>
<br>
The wellbeing of our guests and associates is of paramount importance.</div> 
<br>
<br>
<a style="height:20px" href="/#commitment"><img class="downarrow" src="img/white-down-arrow-png-2.png" alt="down arrow"/></a>
</div>												<picture>
															<source srcset="https://clean.marriott.com/wp-content/uploads/2020/08/COVID-hero-desktop_16x9-1536x864.jpg, https://clean.marriott.com/wp-content/uploads/2020/08/COVID-hero-desktop_16x9-scaled.jpg 2x" media="(min-width: 1137px)">
								<source srcset="https://clean.marriott.com/wp-content/uploads/2020/08/COVID-hero-desktop_16x9-1136x639.jpg, https://clean.marriott.com/wp-content/uploads/2020/08/COVID-hero-desktop_16x9-2560x1440.jpg 2x" media="(min-width: 700px)">
														<source srcset="https://clean.marriott.com/wp-content/uploads/2020/08/COVID-hero-mobile_1x2.jpg, https://clean.marriott.com/wp-content/uploads/2020/08/COVID-hero-mobile_1x2.jpg 2x" media="(min-width: 401px)">
							<img srcset="https://clean.marriott.com/wp-content/uploads/2020/08/COVID-hero-mobile_1x2-400x766.jpg, https://clean.marriott.com/wp-content/uploads/2020/08/COVID-hero-mobile_1x2.jpg 2x" title="COVID-hero-desktop_16x9">
						</picture>
						
					</div>

					</div>
				</div>
			</li>
			</ul>
			<div class="body-copy"><div class="sidebar-2">
<div class="cn-copy-1">

<a name="commitment"></a><h2 style="text-align:center; padding-top: 40px">Commitment to Clean</h2>

<br>

<div class="intro"><h4>As we welcome you back to our hotels around the world, we are committed to providing you with a safe environment that aligns with expert protocols for working to defeat COVID-19. Consisting of in-house and outside experts in food and water safety, hygiene and infection prevention, and hotel operations, our "<span style="font-weight:bold">The Hotel Cleanliness Council</span>"  is redefining our cleaning and safety standards. We will actively monitor and evolve our solutions to ensure a continued focus on the health and safety of our guests and associates. "</h4></div>

<br>
<br>
	
	<div style="text-align:center; margin-top:15px;"><h4>"When guests check into Marriott's hotels over the next few months, they will notice a number of additions to the company's regimen designed to set an even higher standard of cleanliness for the hotels. Specific area of focus include: "</h4></div>

<div class="coverings">
<h3 class="cover">Face Coverings</h3>
<p class="face-coverings">Providing a safer environment for our guests and associates is a top priority.</p>

<p class="face-coverings">For the U.S. - fully vaccinated guests are no longer required to wear face coverings or social distance in indoor or outdoor areas of the hotel, unless required by local law. All unvaccinated Associates are required to wear face coverings when indoors.</p>

<p class="face-coverings">For Canada, face coverings are optional for guests in jurisdictions where face coverings are not required to be worn indoors. All associates in Canada will continue to be required to wear face coverings.</p>

<p class="face-coverings">For Caribbean and Latin America, face coverings are required for guests and associates in all indoor public areas.</p>
</div>

<div class="details">
  <div class="information">
     <img class="body-image" src="img/COVID-cleanSurface_3x2.jpg" alt="The hotel associate using an electrostatic sprayer to clean public areas, an example of our elevated cleanliness standards.">
  </div>
  <div class="information">
     <h3>Surface Areas and Public Spaces</h3>
<br>
  <p class="info-copy">"In public spaces, the company has added to its already rigorous cleaning protocols, requiring that surfaces are treated with hospital-grade disinfectants and that this cleaning is done with increased frequency. In guest rooms, Marriott has added to its detailed cleaning practices, requiring all surfaces to be thoroughly cleaned with hospital-grade disinfectants. In the US, wipes will be available upon guest request at the front desk."</p>
		<p class="info-copy">"These new enhanced cleaning technologies including electrostatic sprayers to sanitize surfaces throughout the hotel. We are using air purifying systems that are effective against viruses in the air and on surfaces. Learn more about our partnership with Ecolab and their products."</p>
  </div>
</div>
<div class="details">
   <div class="information" id="text">
     <h3>Guest Contact</h3>
<br>
     <p class="info-copy">"To help alleviate the risk of COVID-19 transmission through person-to-person contact, Marriott will be using signage in its lobbies to remind guests to maintain social distancing protocols and will remove or re-arrange furniture to allow more space for distancing. The company is planning to add partitions at front desks to provide an extra level of precaution for its guests and associates and is working with supply chain partners to make masks and gloves available to associates. You'll see more hand sanitizing stations around Marriott's hotels - near the entrances and front desks, elevator banks and fitness and meeting spaces. "</p>
  </div>
  <div class="information" id="image">
<img class="body-image" src="img/COVID-guestContact_3x2.jpg" alt="Bellman wearing mask and gloves at the Hotel.">
  </div>
</div>
<div class="details">
<br>
  <div class="information">
     <img class="body-image" src="img/COVID-foodSafety_3x2.jpg" alt="Lady holding paper bag and coffee wearing gloves">
  </div>
  <div class="information">
     <h3>Food Safety</h3>
<br>
     <p class="info-copy">"At The Hotel, food handlers and supervisors are trained on safe food preparation and service practices. The company's food and beverage operations are required to conduct self-inspection using its food safety standards as guidelines, and compliance is validated by independent audits. Marriott is also enhancing sanitation guidelines and training videos for associates that include hygiene and disinfecting practices. In addition, the company is modifying its operational practices for in-room dining and designing new approaches to buffets."</p>
  </div>
</div>

</div>
	

</div>
</div>
</div>

	
	
</body>
</html>


