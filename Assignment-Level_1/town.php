<?php
$errors = [];
$missing = [];
if (isset($_POST['send'])) {
  $expected = ['name', 'email', 'message'];
  $required = ['name', 'message'];
  $to = 'Petrisor Buciuta <petrisor.buciutaa@gmail.com>';
  $subject = 'Feedback from online form';
  $headers = ['From: petrisor.buciutaa@gmail.com'];
  array_push($headers, 'Cc: another@example.com', 'Content-type: text/plain; charset=utf-8');
  $authorized = '-fpetrisor.buciutaa@gmail.com';
  require './process_email.php';
  if ($mailSent) {
    header('Location: thanks.php');
    exit;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <!-- Add facebook snippet for video -->
    <title>De la obiectiv la rezultat</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;700&family=Open+Sans:wght@300;400&family=Roboto:wght@400;500;700;900&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/54e170f569.js"
      crossorigin="anonymous"
    ></script>
  </head>

  <body>
    <!-- navbar -->
    <nav>
      <ul class="navbar container">
        <li><img id="andy" src="./images/Andy_Logo.png" alt="" /></li>
        <li><img id="booe" src="./images/Booe_Camp_Logo.png" alt="" /></li>
      </ul>
    </nav>
    <!-- header -->
    <header class="container">
      <div>
        <img class="img-header" src="./images/HeaderPhoto.png" alt="" />
      </div>
    </header>
    <!-- Cards -->
    <section>
      <h2>Selecteaza un bilet</h2>
      <div class="container">
        <div class="grid grid--1x3">
          <div class="card-container">
            <div>
              <h3 id="card-silver--text">Bilet Silver</h3>
              <img class="card-img" src="./images/ticket_image.png" alt="" />
              <ul>
                <li class="list-checkmark">4,5 ore de training intensiv</li>
                <li class="list-checkmark">
                  <b class="red">CADOU</b
                  ><b>
                    Cartea "DECIZII RADICALE" Editia a II-a, revizuita si
                    adaugita</b
                  >
                </li>
                <li class="list-checkmark">
                  Manualul de curs alb-negru, cu spatii pretiparite pentru
                  notite.
                </li>
              </ul>
            </div>
            <div class="card-price">
              <p class="text-upper">investitia ta:</p>
              <p class="red">50 ron</p>
            </div>
          </div>
          <!-- Card gold -->
          <div id="gold" class="card-container">
            <div>
              <h3 id="card-gold--text">Bilet Gold</h3>
              <img class="card-img" src="./images/ticket_image.png" alt="" />
              <ul>
                <li class="list-checkmark">4,5 ore de training intensiv</li>
                <li class="list-checkmark">
                  <strong>CADOU</strong
                  ><b>
                    Cartea "DECIZII RADICALE" Editia a II-a, revizuita si
                    adaugita</b
                  >
                </li>
                <li class="list-checkmark">
                  Manualul de curs alb-negru, cu spatii pretiparite pentru
                  notite.
                </li>
                <li class="list-checkmark-yellow">
                  <strong>Varianta audio a cartii DECIZII RADICALE</strong>
                </li>
                <li class="list-checkmark-yellow">
                  <b class="yellow">Video training 4D</b> - cei 4 piloni ai
                  transformarii totale
                </li>
              </ul>
              <p class="yellow text-upper text-center"><b>important:</b></p>
              <p class="text-center">
                Platesti 1 si primesti 2 bilete GOLD cu toate beneficiile
                incluse.<br />Unul pentru tine, unul pentru un invitat.
              </p>
            </div>
            <div class="card-price">
              <p class="text-upper">investitia ta:</p>
              <p class="red">100 ron</p>
            </div>
          </div>
          <!-- Card vip -->
          <div class="card-container">
            <div>
              <h3 id="card-diamond--text">Bilet V.I.P</h3>
              <img class="card-img" src="./images/ticket_vip_img.png" alt="" />
              <ul>
                <li class="list-checkmark">
                  4,5 ore de training intensiv
                </li>
                <li class="list-checkmark">
                  <strong>CADOU</strong
                  ><b>
                    Cartea "DECIZII RADICALE" Editia a II-a, revizuita si
                    adaugita</b
                  >
                </li>
                <li class="list_checkmark_green">
                  <b class="green">Manualul de curs,</b>
                  <b>cu spatii pretiparite pentru notite</b> (color, 44 de
                  pagini)
                </li>
                <li class="list-checkmark">
                  <strong>Varianta audio a cartii DECIZII RADICALE</strong>
                </li>
                <li class="list_checkmark_green">
                  <b class="green">Video training 4D</b> - cei 4 piloni ai
                  transformarii totale
                </li>
                <li class="list-checkmark">
                  <b>Intrare in sala cu prioritate</b>
                </li>
                <li class="list-checkmark">Loc in primele randuri, central</li>
                <li class="list_checkmark_green">
                  <b class="green">Webinar de aprofundare dupa workshop</b>, cu
                  raspunsuri de la Andy pentru clarificare si implementare
                </li>
              </ul>
              <p class="green text-upper text-center"><b>important:</b></p>
              <p class="text-center">
                <b
                  >Platesti 1 si primesti 2 bilete GOLD cu toate beneficiile
                  incluse.<br />Unul pentru tine, unul pentru un invitat.</b
                >
              </p>
            </div>
            <div class="card-price">
              <p class="text-upper">investitia ta:</p>
              <p class="red">200 ron</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="container flex-center grid grid--1x3">
      <button class="btn--green-select select-silver">SELECT</button>
      <button class="btn--green-select select-gold">SELECT</button>
      <button class="btn--green-select select-diamond">SELECT</button>
    </div>
    <!-- Price contnet -->
    <h1>Te rugam sa completezi campurile,<br>pentru a putea face comanda</h1>
    <!-- <section >
  <form class="contact-wrapper" method="post" action="">
    <p>
      <label for="name">Nume
      </label>
      <input type="text" name="name" id="name"/>
    </p>
    <p>
      <label for="email">Email
      </label>
      <input type="email" name="email" id="email"/>
    </p>
    <p>
      <label for="message">Observatii (Optional)
      </label>
      <textarea name="message" id="message" rows="5">
      </textarea>
    </p>
    <p>
      <input class="btn--green-select" type="submit" name="send" id="send" value="Send Messages" />
    </p>
  </form>

</section> -->
<!-- php -->
<section class="container flex-center">
  <?php if ($_POST && ($suspect || isset($errors['mailfail']))) { ?>
    <span class="warning">Sorry, your email could not be sent.</span>
  <?php } elseif ($errors || $missing) { ?>
    <span class="warning">Please fix the item(s) indicated</span>
  <?php }; ?>
  <form class="contact-wrapper" method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
    <p>
      <label for="name">Name:
        <?php if ($missing && in_array('name', $missing)) :
        ?>
          <span class="warning">Please enter your name</span>
        <?php endif; ?>
      </label>
      <!-- Keep the input -->
      <input type="text" name="name" id="name" <?php
                                                if ($errors || $missing) {
                                                  echo 'value="', htmlentities($name), '"';
                                                } ?> />
      <!-- Keep the input -->
    </p>
    <p>
      <label for="email">Email:
        <?php if ($missing && in_array('email', $missing)) : ?>
          <span class="warning">Please enter your email</span>
        <?php elseif (isset($errors['email'])) : ?>
          <span class="warning">Invalid email address</span>
        <?php endif; ?>
      </label>
      <input type="email" name="email" id="email" <?php
                                                  if ($errors || $missing) {
                                                    echo 'value="', htmlentities($email), '"';
                                                  } ?> />
    </p>
    <p>
      <label for="message">Message:
        <?php if ($missing && in_array('message', $missing)) : ?>
          <span class="warning">Please enter your message</span>
        <?php endif; ?>
      </label>
      <textarea name="message" id="message" cols="15" rows="3">
        <?php
        if ($errors || $missing) {
          echo htmlentities($message);
        } ?>
      </textarea>
    </p>
    <p>
      <input class="btn--green-select" type="submit" name="send" id="send" value="Send Messages" />
    </p>
  </form>
</section>
    <section>
      <div class="flex-center-column">
        <h2>Pretul</h2>
        <h3 class="price text-center"><span  id="thePrice"></span>&nbsp;ron</h3>
      </div>
    </section>
    <!-- Footer -->
    <footer class="footer">
      <p class="text-center copy">&copy; Copyright 2014-2022</p>
      <div>
        <ul class="container footer-links">
          <li>
            <i class="fa-solid fa-file-lines"></i>
            <a href="">Termeni si conditii</a>
          </li>
          <li>
            <i class="fa-solid fa-bars"></i>
            <a href="">Conditii generale de paricipare la programe</a>
          </li>
          <li>
            <i class="fa-solid fa-lock"></i>
            <a href="">Protectia datelor cu caracter personal</a>
          </li>
        </ul>
      </div>
    </footer>
    <script src="./script/script.js"></script>
  </body>
</html>
