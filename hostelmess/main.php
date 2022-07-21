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
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&family=Baloo+Bhaina+2:wght@700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="CSS/reuse.css" />
    <link rel="stylesheet" href="CSS/style.css" />

    <title>Hostel Mess</title>
  </head>

  <body>
    <header class="header">
      <img class="logo" alt="graphic era logo" src="COLLEGELOGO.jpg" />

      <nav class="main-nav">
        <ul class="main-nav-list">
          <li><a class="main-nav-link" href="meals.php">Daily Meals</a></li>

          <li><a class="main-nav-link" href="about.php">About Us</a></li>

          <li><a class="main-nav-link nav-cta" href="logout.php">Log out</a></li>
        </ul>
      </nav>
    </header>

    <main>
      <section class="Section-hero">
        <div class="hero">
          <div class="hero-text-box">
            <h1 class="heading-primary">
              The second home that will support your dreams
            </h1>
            <p class="hero-description">
              The Graphic Era Hostels that will nourish your growth by providing
              you proper environmenrt for your studies. Since it will be your
              second home therefore it will look after all of your requirement
              like food, shelter, security etc. to ensure you are focused only
              towards your goal.
            </p>
            <a href="#" class="btn btn--full margin-right-sm">Hostel Booking</a>
            <a href="#" class="btn btn--outline">Learn more &rarr;</a>
            <div class="person">
              <div class="person-face">
                <img src="p1.jpg" alt="a student pic" />
                <img src="p2.jpg" alt="a student pic" />
                <img src="p3.jpg" alt="a student pic" />
                <img src="p4.jpg" alt="a student pic" />
                <img src="p5.jpg" alt="a student pic" />
                <img src="95.jpg" alt="a student pic" />
              </div>
              <p class="person-text">
                <span> Some Happy Faces</span>, who achieved there goals under
                our shield
              </p>
            </div>
          </div>

          <div class="hero-img-box">
            <img
              src="big.png"
              class="hero-img"
              alt="Students of hostel enjoying food"
            />
          </div>
        </div>
      </section>
      <section class="section-how">
        <div class="container">
          <span class="subheading"> How Food is served </span>
          <h2 class="heading-secondary">Your daily 3 times food serving</h2>
        </div>
        <!-- step 1 -->
        <div class="container grid grid--2--cols grid--center--v">
          <div class="step-text-box">
            <p class="step-number">01</p>
            <h3 class="heading-tertiary">AT MORNING:-</h3>
            <p class="step-description">
              We focus on what we feed our students on morning consist of high
              nutrients and vitamins so that they can sustain there studies
              properly during there classes in college.
            </p>
          </div>

          <div class="step-img-box">
            <img class="step-img" src="breakfast.jpg" alt="breakfast" />
          </div>
          <!-- step 2 -->
          <div class="step-img-box">
            <img class="step-img" src="lunch.jpg " alt="lunch" />
          </div>
          <div class="step-text-box">
            <p class="step-number">02</p>
            <h3 class="heading-tertiary">AT LUNCH TIME:-</h3>
            <p class="step-description">
              We provide quite refreshing and fulfilling food for lunch so that
              students can get renergized for rest of there classes till
              evening.
            </p>
          </div>
          <!-- step 3 -->
          <div class="step-text-box">
            <p class="step-number">03</p>
            <h3 class="heading-tertiary">AT DINNER TIME:-</h3>
            <p class="step-description">
              At night its important to have a meal that can be tasty and
              healthy at the same time and not tightens the stomach.
            </p>
          </div>
          <div class="step-img-box">
            <img class="step-img" src="dinner.jpg" alt="dinner" />
          </div>
        </div>
      </section>
    </main>
  </body>
</html>
