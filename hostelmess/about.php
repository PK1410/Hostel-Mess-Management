<?php
  session_start();
  if(!isset($_SESSION['name']))
  {
    header("Location: login.php");
    return;
  }
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/reuse.css" />
    <link rel="stylesheet" href="CSS/style.css" />
    <title>About Us</title>
  </head>
  <body>
    <header class="header">
      <a href="main.html">
        <img class="logo" alt="graphic era logo" src="COLLEGELOGO.jpg" />
      </a>
      <nav class="main-nav">
        <ul class="main-nav-list">
          <li><a class="main-nav-link" href="meals.html">Daily Meals</a></li>

          <li><a class="main-nav-link" href="#">About Us</a></li>
         
          <li><a class="main-nav-link nav-cta" href="#">Section 1</a></li>
        </ul>
      </nav>
    </header>
    <section class="Section-hero">
      <div class="hero">
        <div class="hero-text-box">
          <h1 class="heading-primary">
            "About Graphic Era University":-
          </h1>
          <p class="hero-description">
            Graphic Era (Deemed to be University) is the culmination of the hard work of its visionary founder, Prof. (Dr.) Kamal Ghanshala, who had the dream to change the destiny of thousands of youth through quality and holistic education. In 1993, he embarked on the mission to transform the higher education landscape of the Doon Valley with twenty-nine thousand rupees in his pocket and loads of determination in his heart. His vision gained concrete shape in 1996 in the form of the Graphic Era Institute of Technology (GEIT).
          </p>
          <p class="hero-description">
            In 2008, the Institute was accorded the status of Deemed University under Section 3 of the UGC Act, 1956 vide Notification F.9-48/2007-U.3 (A) dated August 14, 2008 and approved by the Ministry of Human Resource Development, Government of India. In 2015, Graphic Era University was accredited by NAAC with grade ‘A.’ In July 2022, Graphic Era (Deemed to be University) was conferred All-India Rank 64 in the Engineering Category, All India Rank 65 in Management Category, and All India Rank 74 in the University Category in the MHRD NIRF (National Institutional Ranking Framework) Rankings and retained its position consecutively for the third year amongst top 100 universities of India.


          </p>
          <p class="hero-description">
            The premier university has acquired transnational dimensions through student exchange and knowledge-sharing programs with many foreign universities and has been acclaimed and honored at international forums for its brilliance in upholding the highest standards of education. It has taken big initiative in engineering programs by getting into partnerships with Tata Technologies and IBM to create next age engineering professionals through industry collaborations. It hosts Technology Business Incubator that provides support for technology-based entrepreneurship.
          </p>
          <p class="hero-description">
            At present, Graphic Era (Deemed to be University) has innumerable students on its rolls, pursuing education in different disciplines, ranging from engineering, science, business, management, commerce, hospitality to humanities and social sciences. The alumni of Graphic Era can be encountered worldwide in marquee brands like Apple, Google, Microsoft, HSBC, to name a few, and in the service of the nation in all wings of the Armed Forces. GEU stands tall as a leading university in Uttarakhand ranked amongst the top 75 Universities of the country and as an abode of learning and excellence, setting new benchmarks in all parameters of assessment like teaching, learning, research, graduation outcome, outreach, industrial presence and more, for Indian Institutions of higher education.

 
          </p>
        </div>
        <div class="hero-img-box">
          <img
            src="gehu.webp"
            class="hero-img"
            alt="Students of hostel enjoying food"
          />
        </div>
      </div>
  </body>
</html>
