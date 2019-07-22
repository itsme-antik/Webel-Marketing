<?php require_once("Includes/DB.php"); ?>
<?php require_once("Includes/Functions.php"); ?>
<?php require_once("Includes/Sessions.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="Css/Styles.css">
  <title>About Us</title>
  <style media="screen">
  .heading{
      font-family: Bitter,Georgia,"Times New Roman",Times,serif;
      font-weight: bold;
       color: #005E90;
  }
  .heading:hover{
    color: #0090DB;
  }
  </style>
</head>
<body>
  <!-- NAVBAR -->
  <div style="height:10px; background:#27aae1;"></div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a href="blog.php" class="navbar-brand"> WEBEL MARKETING</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarcollapseCMS">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarcollapseCMS">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a href="Blog.php?page=1" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">About Us</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">  
        <form method="get" action="dashboard.php">
          <button type="submit" class="btn btn-info">
          <i class="fa fa-camera"></i> Sell</button>
        </form>
      </ul>
      </div>
    </div>
  </nav>
    <div style="height:10px; background:#27aae1;"></div>
    <!-- NAVBAR END -->
    <div class="container">
      <div class="row mt-4">
      <img src="https://www.webel.in/assets/images/webel-bhavan-timeline.jpg" aligne="middle" alt="Trulli" height="333">
    <p>West Bengal Electronics Industry Development Corporation Limited (WEBEL) is the government agency responsible for technology development in West Bengal, India. 
    It was incorporated in 1974 with the objective of developing the electronics industry in West Bengal. </p>
    <h2>Business Activities</h2>
    <p>Through its subsidiary companies, WEBEL commenced business with the manufacture of various electronic components and equipments. Besides its manufacturing activities, Webel has commenced infrastructural development activities for the electronics industry and in this venture, the Taratala Industrial Estate and the Salt Lake Electronics Complex took shape. WEBEL now executes prestigious turnkey projects, such as Automatic Message Switching System at the Tribhuvan International Airport in Nepal, and the Toll Collection System at Vidyasagar Setu, Kolkata. The corporation has also implemented a number of e-governance projects that includes a private optical fiber network, and the West Bengal State Wide Area Network (WBSWAN). WBSWAN forms the basic backbone of the Indian government's e-governance programme.
    WEBEL has also brought quality internet bandwidth to make rural India the back office of urban India including tele-education, telemedicine, e-governance, entertainment, as well as employment generation by way of high speed access to information and web-based communication. Riding on the basic connectivity, successful projects in the field of health care, law and order, and commercial tax applications, amongst others, have been implemented.
    The power of information technology has been harnessed to bring tangible benefits to citizens in the remote areas of the state through the telemedicine project. The project offers medical expertise from Kolkata to people visiting hospitals in districts where this quality of consultation is unavailable. Today, three referral hospitals and six nodal centers have the telemedicine facility established and the telemedicine model which Webel has established is one of its kind in the country in terms of technology and value addition.
    WEBEL has also implemented an application, the first of its kind in the country, where all 411 police stations of West Bengal has been networked, and a series of applications run on the network such as criminal tracking system, application which permit messaging and access to data at grass-root levels to track crime.
    In association with the Indian government, WEBEL has launched a distinctive IT literacy programme in secondary and higher secondary schools. In partnership with IBM, 500 secondary and higher secondary schools in West Bengal run the IT literacy programme from Class VII to Class XII. To leverage the creative talent in the State, WEBEL has set up Toonz Webel Academy, an international animation academy that produces industry-ready animators which will help fuel the growth of the animation industry in the country.
    WEBEL has developed a computerised Braille transcription system [BTS] in Indian languages that may do just that for the visually impaired. the transcription system comprises Braille-to-text software, an electronic tactile reader, automatic braille embosser, and audio-supported Braille keyboard. It addresses the requirements of Braille education in twelve vernacular languages, and enables institutions to prepare Braille material as and when required. The system covers transcription in languages such as Bangla, Hindi, Assamese, Oriya, Marathi, Gujarati, Punjabi, Tamil, Telugu, Kannada, Malayalam, Nepali and English.</p>
    </div>
        </div>
    <!-- FOOTER -->
     <footer class="bg-dark text-white">
      <div class="container">
        <div class="row">
          <div class="col">
          <p class="lead text-center">&copy;| Created by Antik Chattopadhyay |</p>
          </div>
         </div>
      </div>
    </footer>
        <div style="height:10px; background:#27aae1;"></div>
    <!-- FOOTER END-->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script>
  $('#year').text(new Date().getFullYear());
</script>
</body>
</html>
<?php //require_once("footer.php");?>