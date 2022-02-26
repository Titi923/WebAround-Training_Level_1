<!-- <?php
// Email form
$errors = [];
$missing = [];
if (isset($_POST['send'])) {
  $expected = ['name', 'email', 'message', 'town'];
  $required = ['name', 'email', 'town'];
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
?> -->
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
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;700&family=Open+Sans:wght@300;400&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/54e170f569.js" crossorigin="anonymous"></script>
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
  <?php include './components/header.php'; ?>
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
                <b class="red">CADOU</b><b>
                  Cartea "DECIZII RADICALE" Editia a II-a, revizuita si
                  adaugita</b>
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
            <button class="btn--green-select" id="select-silver">SELECT</button>
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
                <strong>CADOU</strong><b>
                  Cartea "DECIZII RADICALE" Editia a II-a, revizuita si
                  adaugita</b>
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
            <button class="btn--green-select active" id="select-gold" >SELECTED</button>
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
                <strong>CADOU</strong><b>
                  Cartea "DECIZII RADICALE" Editia a II-a, revizuita si
                  adaugita</b>
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
              <b>Platesti 1 si primesti 2 bilete GOLD cu toate beneficiile
                incluse.<br />Unul pentru tine, unul pentru un invitat.</b>
            </p>
          </div>
          <div class="card-price">
            <p class="text-upper">investitia ta:</p>
            <p class="red">200 ron</p>
            <button class="btn--green-select" id="select-diamond" >SELECT</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Price -->
  <section>
    <div class="flex-center-column">
      <h2>Pretul</h2>
      <h3 class="price text-center"><span id="thePrice"></span>&nbsp;ron</h3>
    </div>
  </section>
  <!-- Price contnet -->
  <h1 class="header-margins">Te rugam sa completezi campurile,<br>pentru a putea face comanda</h1>
  <section class="container flex-center">
    <form class="contact-wrapper" method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
      <?php if ($_POST && ($suspect || isset($errors['mailfail']))) { ?>
        <span class="warning text-center">Sorry, your email could not be sent.</span>
      <?php } elseif ($errors || $missing) { ?>
        <span class="warning text-center">Va rugam completati toate campurile cu *</span>
      <?php }; ?>
      <p>
        <label for="name">*Nume:
          <?php if ($missing && in_array('name', $missing)) :
          ?>
            <span class="warning">Va rugam sa introduceti numele</span>
          <?php endif; ?>
        </label>
        <!-- Keep the input -->
        <input type="text" name="name" id="name" <?php if ($errors || $missing) { echo 'value="', htmlentities($name), ''; } ?> />
        <!-- Keep the input -->
      </p>
      <p>
        <label for="email">*Email:
          <?php if ($missing && in_array('email', $missing)) : ?>
            <span class="warning">Va rugam sa introduceti adresa de mail</span>
          <?php elseif (isset($errors['email'])) : ?>
            <span class="warning">Invalid email address</span>
          <?php endif; ?>
        </label>
        <input type="email" name="email" id="email" <?php if ($errors || $missing) { echo 'value="', htmlentities($email), '"';} ?> />
      </p>
      <p>
        <label for="message">Observatii (Optional):
        </label>
        <textarea name="message" id="message" cols="15" rows="5">
      </textarea>
      </p>
      <!-- Select Town -->
      <p>
        <label for="town">*Selectati orasul
          <?php if ($missing && in_array('town', $missing)) : ?>
            <span class="warning">Te rugam selecteaza orasul dorit.</span>
          <?php endif; ?>
        </label>
      <div class="flex-center">
        <select name="town" id="town">
          <option value="" <?php
                            if ($_POST && $town == '') :
                              echo 'selected';
                            endif; ?>>Alegeti orasul
          </option>
          <option value="Brasov" <?php
                                  if ($_POST && $town == 'Brasov') :
                                    echo 'selected';
                                  endif; ?>>Brasov
          </option>
          <option value="Bucuresti" <?php
                                    if ($_POST && $town == 'Bucuresti') :
                                      echo 'selected';
                                    endif; ?>>Bucuresti
          </option>
          <option value="Cluj-Napoca" <?php
                                      if ($_POST && $town == 'Cluj-Napoca') :
                                        echo 'selected';
                                      endif; ?>>Cluj-Napoca
          </option>
          <option value="Constanta" <?php
                                    if ($_POST && $town == 'Constanta') :
                                      echo 'selected';
                                    endif; ?>>Constanta
          </option>
          <option value="Craiova" <?php
                                  if ($_POST && $town == 'Craiova') :
                                    echo 'selected';
                                  endif; ?>>Craiova
          </option>
          <option value="Galati" <?php
                                  if ($_POST && $town == 'Galati') :
                                    echo 'selected';
                                  endif; ?>>Galati
          </option>
          <option value="Iasi" <?php
                                if ($_POST && $town == 'Iasi') :
                                  echo 'selected';
                                endif; ?>>Iasi
          </option>
          <option value="Oradea" <?php
                                  if ($_POST && $town == 'Oradea') :
                                    echo 'selected';
                                  endif; ?>>Oradea
          </option>
          <option value="Piatra-Neamt" <?php
                                        if ($_POST && $town == 'Piatra-Neamt') :
                                          echo 'selected';
                                        endif; ?>>Piatra-Neamt
          </option>
          <option value="Sibiu" <?php
                                if ($_POST && $town == 'Sibiu') :
                                  echo 'selected';
                                endif; ?>>Sibiu
          </option>
          <option value="Suceava" <?php
                                  if ($_POST && $town == 'Suceava') :
                                    echo 'selected';
                                  endif; ?>>Suceava
          </option>
          <option value="Timisoara" <?php
                                    if ($_POST && $town == 'Timisoara') :
                                      echo 'selected';
                                    endif; ?>>Timisoara
          </option>
        </select>
      </div>
      </p>
      <p>
        <input class="btn--green-select" type="submit" name="send" id="send" value="Send Messages" />
      </p>
    </form>
  </section>
  <!-- Footer -->
  <?php include './components/footer.php'; ?>
  <script src="./script/order-page.js"></script>
</body>
</html>