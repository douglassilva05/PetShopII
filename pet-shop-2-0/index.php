<!DOCTYPE html>
<html lang="pt">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>PetShop 2.0</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Logo</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Navbar Link</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">PetShop 2.0</h1>
      <div class="row center">
        <h5 class="header col s12 light">Um PetShop para donos exigentes!!!</h5>
      </div>
      
      <br><br>

    </div>
  </div>


  <?php
    include('enviar.php');
    ?>
        <form action="?act=save" method="POST" name="form1" >
          
          <hr>
          <input type="hidden" name="id" <?php
            // Preenche o id no campo id com um valor "value"
            if (isset($id) && $id != null || $id != "") {
                echo "value=\"{$id}\"";
            }
            ?>/>
          Nome Animal :
          <input type="text" name="nomeA" 
          <?php
            // Preenche o nome no campo nome com um valor "value"
            if (isset($nomeA) && $nomeA != null || $nomeA != ""){
                echo "value=\"{$nomeA}\"";
            }
            ?>/>
          Nome Dono :
          <input type="text" name="nomeD"
          <?php
            // Preenche o nomeD no campo nomeD com um valor "value"
            if (isset($nomeD) && $nomeD != null || $nomeD != ""){
                echo "value=\"{$nomeD}\"";
            }
            ?> />
          Contato :
         <input type="text" name="Contato"
         <?php
            // Preenche o celular no campo celular com um valor "value"
            if (isset($Contato) && $Contato != null || $Contato != ""){
                echo "value=\"{$Contato}\"";
            }
            ?> />
         <input type="submit" value="salvar"  />
         <input type="reset" value="Novo" />
         <hr>
       </form>
       <br>
       <table border="1" width="100%">
    <tr>
        <th>Nome Do Animal</th>
        <th>Dono</th>
        <th>Contato</th>
        <th>Ações</th>
    </tr>
    <?php 
    include('ler.php');
    ?>
</table>

  </body>
</html>
