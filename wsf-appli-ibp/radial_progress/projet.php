<?php include 'header.php'; ?>
<body>
  <header>
    <h1>Mini Countryman</h1>
    <a href="index.php">
      <div class="buttonBack">
    </div>
  </a>
  </header>

  <div class="dummy"></div>
<p>
  Visualisez-ici tous vos projets en cours
</p>
  <div id='outer'>
    <div id="main" >
      <div id="Projet1"><div id="pause" class="radial-svg "></div></div>
    </div>


  <div id="text">
    <p id="num">25 000 / 30 000 €</p>
    <p id="decembre">3 Décembre 2016</p>

    <div id="debit">
      <h2>Débit</h2>
      <p>300 € /mois<br>LCL<br>Livret A</p>
    </div>

    <div class="parametres">
      <h2>Paramètres</h2>
      <p>Prélèvement auto.<br>Rappels<br>Ordre de priorité</p>
    </div>

    <div id="pauseButton">
        <a href="#" onclick="toggle_pause('pause');"><h2 id="hellotext">Pause du projet</h2></a>
    </div>
  </div>


  <!-- Mettre en pause la progression -->
<script type="text/javascript">
    function toggle_pause(id) {
       var pause = document.getElementById(id);
       if(pause.style.display == 'block')
          pause.style.display = 'none';
          // document.getElementById("hellotext").innerHTML = "whatever";


       else
          pause.style.display = 'block';
    }
</script>

  <!-- Barre de progression radiale -->
<script language="JavaScript">
      start();
      var percentage = 10
      function onClick1() {
        deselect();
        Projet1.attr("class", "selectedRadial");
      }

      function start() {

        var rp1 = radialProgress(document.getElementById('Projet1'))
          // .label("Projet n°1")
          // .onClick(onClick1)
          .diameter(150)
          .value((25000/30000)*100)
          .render();


      }
    </script>

  </body>
</html>
