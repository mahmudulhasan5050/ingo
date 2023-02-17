
<div class="footer-main">
  <div class="footer-top">
    <div class="footer-one">
      <h5 class="footer-top-heading">KUMPPANI</h5>
      <p>INGO on ilmoittautumisjärjestelmä. Emme vastaa tapahtumista ja niiden sisällöstä. Mikäli haluat tietoa tapahtumista tai ottaa tapahtumajärjestäjään yhteyttä niin tiedot löydät tapahtuman omalta sivulta.</p>
      <p>Ilmoittautujien ja järjestäjien tiedot kerätään GDPR sääntöjä noudattaen.</p>
      <p>INGO CLOUD SERVICES / July Partners Oy 2020</p>
      <p>Y-tunnus: 0656705-9</p>
      <p>PL 255, 67101 Kokkola, Finland</p>
    </div>
    <div class="footer-two">
      <h5 class="footer-top-heading">MYYNTI JA LISÄTIEDOT</h5>
      <i style='font-size:26px' class="fa fa-envelope envelope" aria-hidden="true"></i>
      <a class="footer-email" href="#">service@ingo.fi</a>
      <div class="footer-icons">
        <a href="#"><i class="fab fa-facebook-square" style="font-size:68px;color:#D0397A"></i></a>
        <a href="#"><i class="fab fa-instagram-square" style="font-size:68px;color:#D0397A"></i></a>

      </div>
    </div>
    <div class="footer-three">
      <h5 class="footer-top-heading">SIVUKARTTA</h5>

      <ul>
        <li><a href="#">Etusivu</a></li>
        <li><a href="#">Kalenteri</a></li>
        <li><a href="#">Järjestäjille</a></li>
        <li><a href="#">Tietoa Ingosta</a></li>
        <li><a href="#">Rekisteri- ja tietosuojaselostessa</a></li>
      </ul>
    </div>
  </div>
  <hr class="footer-seperator">

  <div class="footer-bottom">
    <p class="footer-bottom-para">© INGO CLOUD SERVICES / July Partners Oy 2020</p>
  </div>

</div>



</body>

<!-- JavaScript for the eye-icon -->
<script>
    const passwordField = document.getElementsByClassName("password");
    const eyeIcon = document.getElementsByClassName("eye");
    for (let i = 0; i < passwordField.length; i++) {
      eyeIcon[i].addEventListener("click", function () {
        this.classList.toggle("fa-eye-slash");
        const type = passwordField[i].getAttribute("type") === "password" ? "text" : "password";
        passwordField[i].setAttribute("type", type);
      })
    }

  </script>
</html>

