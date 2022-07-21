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
    <title>Meals</title>
  </head>
  <body>
    <header class="header">
      <a href="main.html">
        <img class="logo" alt="graphic era logo" src="COLLEGELOGO.jpg" />
      </a>
      <nav class="main-nav">
        <ul class="main-nav-list">
          <li><a class="main-nav-link" href="meals.html">Daily Meals</a></li>

          <li><a class="main-nav-link" href="about.html">About Us</a></li>

          <li><a class="main-nav-link nav-cta" href="#">Section 1</a></li>
        </ul>
      </nav>
    </header>

    <section class="section-meals">
      <div class="container">
        <span class="subheading">Meals</span>
        <h1 class="heading-primary">"Daily meals that boosts your limit"</h1>
      </div>
      <div class="container grid grid--3--cols">
        <div class="meal">
          <img src="m1.jpg" class="meal-img" alt="Monday menu" />
          <span class="tag">Monday</span>
          <p class="meal-title">Routine</p>
          <ul class="meal-attributes">
            <li class="meal-attribute">Morning:- Paratha & Dahi</li>
            <li class="meal-attribute">
              Lunch:-Rice,Dal,veg Sabji,Salad & Raita
            </li>
            <li class="meal-attribute">Snack Break:- Poha & Tea</li>
            <li class="meal-attribute">Dinner:- Roti, Dal & Sabji</li>
          </ul>
        </div>
        <div class="meal">
          <img src="m2.jpg" class="meal-img" alt="Tuesday menu" />
          <span class="tag">Tuesday</span>
          <p class="meal-title">Routine</p>
          <ul class="meal-attributes">
            <li class="meal-attribute">Morning:- Idli & Sambhar</li>
            <li class="meal-attribute">
              Lunch:-Rice,Dal,veg Sabji,Salad & papad
            </li>
            <li class="meal-attribute">Snack Break:- Toast & Tea/Rasna</li>
            <li class="meal-attribute">Dinner:- Roti, Dal, Sabji & custard</li>
          </ul>
        </div>
        <div class="meal">
          <img src="m3.jpg" class="meal-img" alt="Wednesday menu" />
          <span class="tag">Wednesday</span>
          <p class="meal-title">Routine</p>
          <ul class="meal-attributes">
            <li class="meal-attribute">
              Morning:- Omelete Bread/ Butter Bread
            </li>
            <li class="meal-attribute">
              Lunch:-Rice,Dahi curry, Soya sabji & Salad
            </li>
            <li class="meal-attribute">Snack Break:- Tikki & Tea/Rasna</li>
            <li class="meal-attribute">Dinner:- Roti,Rice, Dal & Sabji</li>
          </ul>
        </div>

        <div class="meal">
          <img src="m4.jpg" class="meal-img" alt="Thursday menu" />
          <span class="tag">Thursday</span>
          <p class="meal-title">Routine</p>
          <ul class="meal-attributes">
            <li class="meal-attribute">Morning:- Dosa & Sambhar</li>
            <li class="meal-attribute">Lunch:-Rice,curry,Aloo Sabji & Salad</li>
            <li class="meal-attribute">Snack Break:- Pasta & Tea/Rasna</li>
            <li class="meal-attribute">Dinner:- Roti,Rice, Rajma & Sabji</li>
          </ul>
        </div>

        <div class="meal">
          <img src="m5.jpeg" class="meal-img" alt="Friday menu" />
          <span class="tag">Friday</span>
          <p class="meal-title">Routine</p>
          <ul class="meal-attributes">
            <li class="meal-attribute">Morning:- Paneer Paratha & dahi</li>
            <li class="meal-attribute">
              Lunch:-Rice,Dal, Besan sabji, Raita & Salad
            </li>
            <li class="meal-attribute">Snack Break:- Fries & Tea/Rasna</li>
            <li class="meal-attribute">Dinner:- Roti,Rice, Dal & Mix veg</li>
          </ul>
        </div>

        <div class="meal">
          <img src="m6.jpg" class="meal-img" alt="Saturday menu" />
          <span class="tag">Saturday</span>
          <p class="meal-title">Routine</p>
          <ul class="meal-attributes">
            <li class="meal-attribute">Morning:- Puri & Aloo Sabji</li>
            <li class="meal-attribute">
              Lunch:-Rice,Dahi curry,Roti, Soya sabji & Salad
            </li>
            <li class="meal-attribute">Snack Break:- Maggi & Tea/Rasna</li>
            <li class="meal-attribute">
              Dinner:- Roti,Rice, Chana dal, Sabji & Gulab Jamun
            </li>
          </ul>
        </div>

        <div class="meal">
          <img src="m7.jpg" class="meal-img" alt="Sunday menu" />
          <span class="tag">Sunday</span>
          <p class="meal-title">Routine</p>
          <ul class="meal-attributes">
            <li class="meal-attribute">Morning:- Chhole Bhature</li>
            <li class="meal-attribute">
              Lunch:-Pulav, Aloo sabji, Raita & Salad
            </li>
            <li class="meal-attribute">Snack Break:- Chips & Tea/Rasna</li>
            <li class="meal-attribute">
              Dinner:- Roti,Rice, Dal & Paneer Sabji/Chicken
            </li>
          </ul>
        </div>
      </div>
    </section>
  </body>
</html>
