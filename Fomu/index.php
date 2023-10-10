<?php
include "head.php";
?>
<body>
    <div class="row">
        <form class="col s12" action="form.php" method="post">
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">account_circle</i>
              <input id="icon_prefix" name="txtnombre" type="text" class="validate">
              <label for="icon_prefix">Nombre</label>
            </div>
            <div class="input-field col s6">
              <i class="material-icons prefix">account_circle</i>
              <input id="icon_telephone1" type="tel" name="txtedad" class="validate">
              <label for="icon_telephone1">Edad</label>
            </div>
            <div class="input-field col s6">
              <i class="material-icons prefix">contact_mail</i>
              <input id="icon_telephone2" type="text" name="txtcorreo" class="validate">
              <label for="icon_telephone2">Correo</label>
            </div>
            <div class="input-field col s6">
              <i class="material-icons prefix">key</i>
              <input id="icon_telephone3" type="tel" name="txtpassword" class="validate">
              <label for="icon_telephone3">Password</label>
            </div>
          </div>

          <button>Enviar</button>
        </form>
      </div>

</body>
<?php
include "footeer.php";
?>
