<?php
  session_start();
  $db = mysqli_connect('localhost','root','');
  $connectdb = mysqli_select_db($db,'pandacuisine');
  $query = "select * from tablecount";
  $execution = mysqli_query($db,$query);
  $row= mysqli_fetch_assoc($execution);
  $tableCount = $row['tc'];
  $total = 200;
  $remaining = $total - $tableCount;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking | panda's restaurant</title>
    <link rel="stylesheet" href="./reset.css">
    <link rel="stylesheet" href="./globalstyle.css">
    <link rel="stylesheet" href="./components.css">
    <!--aos css-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>
<body>
    <!--nav section-->
    <div class="nav">
        <div class="container">
         <div class="nav__wrapper">
             <a href="./index.html" class="logo" >
                <img src="./images/loggo.jpg"  alt="panda's cuisine">
             </a>
             <nav>
                 <div class="nav__icon">
                    <svg
  xmlns="http://www.w3.org/2000/svg"
  width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <line x1="3" y1="12" x2="21" y2="12" />
  <line x1="3" y1="6" x2="21" y2="6" />
  <line x1="3" y1="18" x2="21" y2="18" />
                    </svg> 
                 </div>
                 <div class="nav__bgoverlay"></div>
                <ul class="nav__list">
                    <div class="nav__close">
                        <svg
  xmlns="http://www.w3.org/2000/svg"
  width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <line x1="18" y1="6" x2="6" y2="18" />
  <line x1="6" y1="6" x2="18" y2="18" />
</svg>
                    </div>
                    <div class="nav__list__wrapper">
                        <li><a href="./index.html" class="nav__link">Home</a></li>
                        <li><a href="./menu.html" class="nav__link">menu</a></li>
                        <li><a href="./about.html" class="nav__link">about</a></li>
                        <li><a href="./contact.html" class="nav__link">contact</a></li>
                        <li><a href="./booking.php" class="btn primary-btn">booktable</a></li>
                    </div>
                </ul>
             </nav>
         </div>   
        </div>
    </div>

    <!--End nav section-->
 <!-- Booking Section -->
 <section id="form">
  <div class="container">
    <h3 class="form__tittle">Book Table</h3>
    <div class="form__wrapper">
      <form name="booking" method="POST" action="bookingpost.php" target="_blank">
        <div class="form__group">
          <label for="firstName">First Name</label>
          <input type="text" id="firstName" name="FirstName" required>
        </div>
        <div class="form__group">
          <label for="lastName">Last Name</label>
          <input type="text" id="lastName" name="LastName" required>
        </div>
        <div class="form__group">
          <label for="email">Email</label>
          <input type="email" id="email" name="Email" required>
        </div>
        <div class="form__group">
          <label for="tableType">Table Type</label>
          <select name="TableType" id="tableType" required>
            <option selected disabled>Choose</option>
            <option value="small(2 persons)">Small</option>
            <option value="medium(4 persons)">Medium</option>
            <option value="large(8 persons)">Large</option>
          </select>
        </div>
        <div class="form__group">
          <label for="guestNumber">Guest Remaining<?php echo $remaining?></label>
          <input type="number" id="guestNumber" name="GuestNumber" min="1" max="20" required>
        </div>
        <div class="form__group">
          <label for="placement">Placement</label>
          <select name="Placement" id="placement">
            <option selected disabled>Choose</option>
            <option value="outdoor">Outdoor</option>
            <option value="indoor">Indoor</option>
            <option value="rooftop">rooftop</option>
          </select>
        </div>
        <div class="form__group">
          <label for="date">Date</label>
          <input type="date" id="demo" name="Date" required>
        </div>
        <div class="form__group">
          <label for="time">time</label>
          <input type="time" id="time" name="Time" required>
        </div>
        <div class="form__group form__group__full">
          <label for="note">Note</label>
          <textarea name="Note" id="note" rows="4"></textarea>
        </div>
        <button type="submit" class="btn primary-btn">Book Table</button>
      </form>
    </div>
  </div>
</section>
<!-- End Booking Section -->
  <!--footer-->
  <footer>
    <div class="container">
      <div class="footer__wrapper">
        <div class="footer__col1">
          <p class="footer__desc">
            Fresh and delicious traditional Indian food to delight the whole family.
          </p>
          <div class="footer__social">
            <h4 class="footer__social__title">follow us</h4>
            <ol>
              <li>
                <a href="#">
                <svg
  xmlns="http://www.w3.org/2000/svg"
  width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
</svg>
                  </a>
                </li>
             <li>
                <a href="#">
                <svg
  xmlns="http://www.w3.org/2000/svg"
  width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
  <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
  <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
</svg>
                    </a>
                 </li> 
              <li>
                <a href="#">
                <svg
  xmlns="http://www.w3.org/2000/svg"
  width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" />
</svg>
                </a>        
              </li>
            </ol>                                 
          </div>                                
        </div>
        <div class="footer__col2">
          <h3 class="footer__text__tittle">
            links
          </h3>
          <ol class="footer__text">
            <li>
              <a href="./index.html">home</a>
            </li>
            <li>
              <a href="./menu.html">menu</a>
            </li>
            <li>
              <a href="./booking.html">book table</a>
            </li>
            <li>
              <a href="./about.html">about us</a>
            </li>
            <li>
              <a href="./contact.html">contact</a>
            </li>
            <li>
              <a href="#">privacy policy</a>
            </li>
          </ol>
        </div>
        <div class="footer__col3">
          <h3 class="footer__text__tittle">
            support
          </h3>
          <ol class="footer__text">
            <li>
              <a href="./contact.html">contact</a>
            </li>
            <li>
              <a href="#">support center</a>
            </li>
            <li>
              <a href="#">feedback</a>
            </li>
          </ol>
        </div>
        <div class="footer__col4">
          <h3 class="footer__text__tittle">
            contact
          </h3>
          <ol class="footer__text">
            <li>
              <a href="tel:+918249370151">+918249370151</a>
            </li>
            <li>
              <a href="mail:sagarpanda@gmail.com">sagarpanda@gmail.com</a>
            </li>
            <li>
              <a href="#">berhampur, odisha, india</a>
            </li>
          </ol>
        </div>
      </div>

    </div>
  </footer>
  <div id="copyright">
    <div class="container">
      <p class="copyright__text">
        © copyright 2021 panda's restaurant | all rights reserved
      </p>
    </div>
  </div>
  <!--end footer-->
  <!--aos script-->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <!--custom script-->
  <script src="./main.js"></script>
  <script>
    var date=new Date();
    var tdate=date.getDate();
    var month = date.getMonth()+1;
    if(month<10) {
      month = "0"+month;
    }
    if(tdate<10) {
      tdate = "0"+tdate;
    }
    var year = date.getUTCFullYear();
    var mindate = year + "-"+month+"-"+tdate;
    document.getElementById("demo").setAttribute('min',mindate);
    
  </script>
</body>
</html>