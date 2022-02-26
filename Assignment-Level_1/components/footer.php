<footer class="footer">
  <?php
    function copyright()
    {
      $release_year = 2019;
      $current_year = date('Y');
      if ($release_year == $current_year) {
        $final = "&copy $current_year";
      } else {
        $final = "&copy $release_year - $current_year";
      }
      return $final;
    }
  ?>
  <div>
    <ul class="container footer-links">
      <li><i class="fa-solid fa-file-lines"></i> <a href="">Termeni si conditii</a></li>
      <li><i class="fa-solid fa-bars"></i> <a href="">Conditii generale de paricipare la programe</a></li>
      <li><i class="fa-solid fa-lock"></i> <a href="">Protectia datelor cu caracter personal</a></li>
    </ul>
  </div>
</footer>