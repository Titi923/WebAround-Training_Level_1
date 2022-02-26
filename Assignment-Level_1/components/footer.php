<footer class="footer">
  <?php
    function copyright()
    {
      $release_year = 2019;
      $current_year = date('Y');
      if ($release_year == $current_year) {
        $final = "&copy Copyright $current_year by Andy.";
      } else {
        $final = "&copy Copyright $release_year - $current_year by Andy";
      }
      return $final;
    }
    echo "<p class='text-center' >";
    echo copyright();
    echo "</p>";
  ?>
  <div>
    <ul class="container footer-links">
      <li><i class="fa-solid fa-file-lines"></i> <a href="">Termeni si conditii</a></li>
      <li><i class="fa-solid fa-bars"></i> <a href="">Conditii generale de paricipare la programe</a></li>
      <li><i class="fa-solid fa-lock"></i> <a href="">Protectia datelor cu caracter personal</a></li>
    </ul>
  </div>
</footer>