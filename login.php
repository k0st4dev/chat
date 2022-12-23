<?php
  include_once "header.php";
?>
  <body>
    <div class="wrapper">
      <section class="form login">
        <header>Chat App</header>
        <form
          action="#"
          method="POST"
          enctype="multipart/form-data"
          autocomplete="off"
        >
          <div class="error-text"></div>
          <div class="field input">
            <label>Email Adresa</label>
            <input
              type="text"
              name="email"
              placeholder="Unesite email"
              required
            />
          </div>
          <div class="field input">
            <label>Sifra</label>
            <input
              type="password"
              name="password"
              placeholder="Unesite sifru"
              required
            />
            <i class="fas fa-eye"></i>
          </div>
          <div class="field button">
            <input type="submit" name="submit" value="Nastavite na Chat" />
          </div>
        </form>
        <div class="link">
          Nemate nalog? <a href="index.php">Signup now</a>
        </div>
      </section>
    </div>

    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/login.js"></script>
  </body>
</html>
