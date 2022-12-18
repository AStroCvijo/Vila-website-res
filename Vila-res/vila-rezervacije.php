<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Rezervacija</title>
    <link rel="stylesheet" href="vila-reservacije.css" />

    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
      }
      body {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        background: #B4DBBB;
      }
      .container {
        position: relative;
        max-width: 700px;
        width: 100%;
        background: #fff;
        padding: 25px;
        border-radius: 8px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
      }
      .container header {
        font-size: 1.5rem;
        color: #333;
        font-weight: 500;
        text-align: center;
      }
      .container .form {
        margin-top: 30px;
      }
      .form .input-box {
        width: 100%;
        margin-top: 20px;
      }
      .input-box label {
        color: #333;
      }
      .form :where(.input-box input, .select-box) {
        position: relative;
        height: 50px;
        width: 100%;
        outline: none;
        font-size: 1rem;
        color: #707070;
        margin-top: 8px;
        border: 1px solid #ddd;
        border-radius: 6px;
        padding: 0 15px;
      }
      .input-box input:focus {
        box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
      }
      .container .input-box .input-time {
        position: relative;
        height: 50px;
        width: 100%;
        outline: none;
        font-size: 1rem;
        color: #707070;
        margin-top: 8px;
        border: 1px solid #ddd;
        border-radius: 6px;
        padding: 0 15px;
      }
      .form .column {
        display: flex;
        column-gap: 15px;
      }
      .form .gender-box {
        margin-top: 20px;
      }
      .gender-box h3 {
        color: #333;
        font-size: 1rem;
        font-weight: 400;
        margin-bottom: 8px;
      }
      .form :where(.gender-option, .gender) {
        display: flex;
        align-items: center;
        column-gap: 50px;
        flex-wrap: wrap;
      }
      .form .gender {
        column-gap: 5px;
      }
      .gender input {
        accent-color: rgb(19, 136, 45);
      }
      .form :where(.gender input, .gender label) {
        cursor: pointer;
      }
      .gender label {
        color: #707070;
      }
      .address :where(input, .select-box) {
        margin-top: 15px;
      }
      .select-box select {
        height: 100%;
        width: 100%;
        outline: none;
        border: none;
        color: #707070;
        font-size: 1rem;
      }
      .form button {
        height: 55px;
        width: 100%;
        color: #fff;
        font-size: 1rem;
        font-weight: 400;
        margin-top: 30px;
        border: none;
        cursor: pointer;
        transition: all 0.2s ease;
        background: #B4DBBB;
      }
      .form button:hover {
        background: #67C077;
      }
      @media screen and (max-width: 500px) {
        .form .column {
          flex-wrap: wrap;
        }
        .form :where(.gender-option, .gender) {
          row-gap: 15px;
        }
      }

    </style>

  </head>
  <body>
    
    <section class="container">
      <header>Rezervacija</header>

      <form action="vila-rezervacije.html" class="form" method="POST">
        <div class="input-box">
          <label>Puno ime</label>
          <input name="ime" type="text" placeholder="Unesite puno ime" maxlength="30" required />
        </div>

        <div class="input-box">
          <label>Email Adresa</label>
          <input name="email" type="email" placeholder="Unesite Email Adresu" maxlength="60" />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Broj telefona</label>
            <input name="telefon" type="number" placeholder="Unesite broj telefona" maxlength="20" required />
          </div>
          <div class="input-box">
            <label>Datum</label>
            <input type="date" placeholder="Unesite datum" name="datum" required />
          </div>
          <div class="input-box">
            <label>Vrijeme</label>
            <select class="input-time" name="vrijeme" id="">
              <option value="09">9</option>
              <option value="11">11</option>
              <option value="13">13</option>
              <option value="15">15</option>
            </select>
          </div>
        </div>
        
        <div class="column">
          <div class="input-box">
            <label>Vrsta tretmana</label>
            <select class="input-time" name="vrsta_tretmana" id="">
              <option value="DEPLIACIJA">DEPLIACIJA</option>
              <option value="MANIKIR I PEDIKIR">MANIKIR I PEDIKIR</option>
              <option value="MASAŽA">MASAŽA</option>
              <option value="LICE">LICE</option>
              <option value="NJEGUJUĆI TRETMANI">NJEGUJUĆI TRETMANI</option>
              <option value="DEPLIACIJA">DEPLIACIJA</option>
              <option value="HIGIJENSKI TRETMAMANI">HIGIJENSKI TRETMAMANI</option>
            </select>
          </div>
        </div>

        <div class="input-box">
          <label>Napomena</label>
          <input name="napomena" type="text" placeholder="Unesite napomenu / opciono" maxlength="250" />
        </div>

        <div class="gender-box">
          <h3>Pol</h3>
          <div class="gender-option">
            <div class="gender">
              <input type="radio" id="check-male" name="gender" checked value="žensko"/>
              <label for="check-male">žensko</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-female" name="gender" value="muško"/>
              <label for="check-female">muško</label>
            </div>
          </div>
        </div>

        <button>Pošalji zahtjev</button>

        <?php
          if(isset($_POST['datum']) and isset($_POST['vrijeme']))
          {
            $ime=$_POST['ime'];
            $email=$_POST['email'];
            $telefon=$_POST['telefon'];
            $vrsta=$_POST['vrsta_tretmana'];
            $napomena=$_POST['napomena'];
            $pol=$_POST['gender'];
            $dat=$_POST['datum'];
            $time=$_POST['vrijeme'];
            $datetime="";
            $datetime=$datetime.$dat." ".$time.":00:00";


            $con = mysql_connect("localhost", "root", "");
            $db = mysql_select_db("vila-rezervacije", $con) or die("error");
            $query = "INSERT INTO rezervacije
            VALUES ('$datetime','$ime','$email','$telefon','$vrsta','$napomena','$pol')";
            mysql_query("SET NAMES utf8");
            if(mysql_query($query)){
              echo"Zahtjev poslat!";
            }
            else
            {
              echo"Termin je zauzet!"; 
            }

          }
        ?>

      </form>

    </section>
  </body>
</html>