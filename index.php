<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){//ako je korisnik loginovan prebacuje ga na users.php
    header("location: users.php");
  }
?>
<?php
  include_once "header.php";
?>
  <body>
    <div class="wrapper">
      <section class="form signup">
        <header>Chat App</header>
        <form
          action="#"
          method="POST"
          enctype="multipart/form-data"
          autocomplete="off"
        >
          <div class="error-text"></div>
          <div class="name-details">
            <div class="field input">
              <label>Ime</label>
              <input
                type="text"
                name="fname"
                placeholder="Ime"
                required
              />
            </div>
            <div class="field input">
              <label>Prezime</label>
              <input
                type="text"
                name="lname"
                placeholder="Prezime"
                required
              />
            </div>
          </div>
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
              placeholder="Unesite novu sifru"
              required
            />
            <i class="fas fa-eye"></i>
          </div>
          <div class="field image">
            <label>Izaberite sliku</label>
            <input
              type="file"
              name="image"
              accept="image/x-png,image/gif,image/jpeg,image/jpg"
              required
            />
          </div>
          <div class="field button">
            <input type="submit" name="submit" value="Nastavite na Chat" />
          </div>
        </form>
        <div class="link">
          Vec imate nalog? <a href="login.php">Login now</a>
        </div>
      </section>
    </div>

    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>
  </body>
</html>
