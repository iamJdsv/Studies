<?php include 'header.php'; ?>
<body>
  <header>
    <h1>Mes projets</h1>
  </header>

  <div class="dummy"></div>
  <div id="wrapper">
    <div id="intro">
        <h1>Oscar</h1>
        <p>Votre assistant dans tous vos projets</p>
        <img src="images/loading_spinner.gif" alt="" />
      </div>
  </div>
  <h2>Visualisez-ici tous vos projets</h2>
  <div id='outer'>
      <div id="main" >
          <a id="voiture" href="projet.php">Mini Countryman
          <div id="Projet1"></div></a>
          <a id="appartement" href="">Appartement
          <div id="Projet2"></div></a>
          <a id="roadtrip" href="">Road Trip en Asie
          <div id="Projet3"></div></a>
      </div>
  </div>

  <a id="add" href="nouveau.php"><img src="images/Symbole_Plus_couleur.png" alt="Ajouter un nouveau projet" /></a>

  <script type="text/javascript">
    setTimeout(function() {
        $('#wrapper').fadeOut('fast');
    }, 3000);
  </script>

  <script language="JavaScript">
    start();

    function onClick1() {
      deselect();
      Projet1.attr("class", "selectedRadial");
    }

    function onClick2() {
      deselect();
      Projet2.attr("class", "selectedRadial");
    }

    function onClick3() {
      deselect();
      Projet3.attr("class", "selectedRadial");
    }

    function labelFunction(val, min, max) {

    }


    function start() {

      var rp1 = radialProgress(document.getElementById('Projet1'))
        .diameter(150)
        //Ici la valeure rendue est calculée à partir du coût de la voiture
        .value((25000/30000)*100)
        .render();

      var rp2 = radialProgress(document.getElementById('Projet2'))
        .diameter(150)
        .value(47)
        .render();

      var rp3 = radialProgress(document.getElementById('Projet3'))
        .diameter(150)
        .value(18)
        .render();

    }
  </script>

</body>

</html>
