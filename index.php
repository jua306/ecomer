<!DOCTYPE html>
<?php include("database.php"); ?>
<html lang="en">
<!-- Juan Mercado practicante de arquitectos-->

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Task App</title>
  <link rel="stylesheet" href="css/bootstrapmateria.min.css">
  <meta charset="utf-8">
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css'>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="./css/estilipricipal.css">
  <link rel="stylesheet" href="./css/estiloiconos.css">


</head>
<img src="./img/banner.png" alt="" style="background-repeat: no-repeat;
        background-position: center; 
        width: 100%;">
</header>

<body>

  <br>
  <br>
  <!-- <br> -->
  <section class="pantalla">
    <h5 class="boton1">Motivo de <br> Retiro</h5>
    <form action="" class="buscardor ">
      <select class="form-select adentro " name="buscar" id="buscar" onchange="buscarCampo();">
        <option value="">Valor</option>
      </select>
    </form>
    <nav>
      <ul class="menu-horizontal">


        <li>
          <a href="https://wiktigo.emtelco.co/forma2/index.php?option=com_content&view=article&id=364:guia-comercial&catid=16&Itemid=101" target="_blank"><i class="bi bi-geo-alt"></i></a>
          <ul class="menu-vertical">
            <li class="letra"><a href="https://wiktigo.emtelco.co/forma2/index.php?option=com_content&view=article&id=364:guia-comercial&catid=16&Itemid=101" target="_blank">Guía Comercial</a></li>
          </ul>
        </li>
        <li>
          <a href="https://biblioteca.emtelco.co/tigo/ag_cmp/" target="_blank"><i class="bi bi-currency-exchange"></i></a>
          <ul class="menu-vertical">
            <li class="letra"><a href="https://biblioteca.emtelco.co/tigo/ag_cmp/" target="_blank">Comparador de ofertas</a></li>
          </ul>
        </li>
        <li>
          <a href="https://biblioteca.emtelco.co/tigo/checklist_facturamovil/checklist.php" target="_blank"><i class="bi bi-clipboard2-check"></i></a>
          <ul class="menu-vertical">
            <li class="letra"><a href="https://biblioteca.emtelco.co/tigo/checklist_facturamovil/checklist.php" target="_blank">Checklist de factura</a></li>
          </ul>
        </li>
        <li>
          <a href="https://biblioteca.emtelco.co/tigo/Conversor_de_particiones/" target="_blank"><i class="bi bi-sliders"></i></a>
          <ul class="menu-vertical">
            <li class="letra"><a href="https://biblioteca.emtelco.co/tigo/Conversor_de_particiones/" target="_blank">Multimedia de ajustes</a></li>
          </ul>
        </li>
        <li>
          <a href="http://contact.tigo.com.co/CRMPortal/auth/portal/default" target="_blank"><i class="bi bi-upc-scan"></i></a>
          <ul class="menu-vertical">
            <li class="letra"><a href="http://contact.tigo.com.co/CRMPortal/auth/portal/default" target="_blank">CRM</a></li>
          </ul>
        </li>
        <li>
          <a href="http://10.69.47.105:8081/Login.asp" target="_blank"><i class="bi bi-yelp"></i></a>
          <ul class="menu-vertical">
            <li class="letra"><a href="http://10.69.47.105:8081/Login.asp" target="_blank">CI</a></li>
          </ul>
        </li>


      </ul>
    </nav>
    <br>
    <br>
  </section>

  <section class="pantalla">

    <div class="cont1  ">

      <h5 class="boton2">¿Qué le puedes preguntar al usuario?</h5> <!--  botnon2 -->
      <p>Recuerda realizar un sondeo con el usuario para darle un mejor manejo a la objeción manifestada </p>
      <div id="containerSondeo1" class="pantalla ">
        <i class="bi bi-check2-circle" style="font-size: 3rem; color: cornflowerblue; margin: auto 5px auto 55px;"></i>
        <p class=" conten1" id="container"></p>
      </div>
      <div class="pantalla">
        <i class="bi bi-check2-circle" style="font-size: 3rem; color: cornflowerblue; margin: auto 5px auto 55px;"></i>
        <p class="conten1" id="container2"></p>
      </div>
      <h5 class="boton2">¿Cómo puede solucionar el usuario?</h5> <!--  botnon2 -->
      <p>Si el usuario no acepta la reventa de beneficios, puedes solucionarle con las siguientes alternativas:
      </p>
      <div class="pantalla">
        <i class="bi bi-check2-circle" style="font-size: 3rem; color: cornflowerblue; margin: auto 5px auto 55px;"></i>
        <p class=" conten3" id="container3"></p><br>
        <div class="fija">

          <div id="container10" class="fija2">Link</div>

        </div>
      </div>
      <div class="pantalla">
        <i class="bi bi-check2-circle" style="font-size: 3rem; color: cornflowerblue; margin: auto 5px auto 55px;"></i>
        <p class=" conten3" id="container5"></p>
        <div class="fija">

          <div id="container11" class="fija2">Link</div>

        </div>
      </div>
      <!-- <div class="pantalla">
        <i class="bi bi-check2-circle" style="font-size: 3rem; color: cornflowerblue; margin: auto 5px auto 55px;"></i>
        <p class="conten1" ></p>
      </div> -->
    </div>




    <!-- lado izquierdo -->
    <div class="cont2 ">
      <h5 class="boton2">¿Qué le puedes preguntar al usuario?</h5> <!--  botnon2 -->
      <p>Debes manejar la interacción según la intención de retiro, recuerda resaltar todos los beneficios de la oferta.</p>
      <div class="pantalla">
        <i class="bi bi-check2-circle" style="font-size: 3rem; color: cornflowerblue; margin: auto 5px auto 55px;"></i>
        <p class=" conten2" id="container4"></p>
      </div>



      <h5 class="boton2">¿Cómo puede solucionar el usuario?</h5> <!--  botnon2 -->
      <p>Recuerda que el proceso es exitoso utilizando la siguiente tipología: </p>
      <div>
        <b> <span>Tipo:</span> </b>
        <span id="container6"></span>
      </div>
      <div>
        <b><span>SubTipo:</span></b>
        <span id="container7"></span>
      </div>
      <div>
        <b> <span>Motivo:</span></b>
        <span id="container8"></span>
      </div>
      <h5 class="boton2">Observación</h5> <!--  botnon2 -->
      <div class="pantalla">
        <i class="bi bi-check2-circle" style="font-size: 3rem; color: cornflowerblue; margin: auto 5px auto 55px;"></i>
        <p class=" conten2" id="container9"></p>
      </div>
    </div>
  </section>

  <iframe class="pantalla2" src="https://icons.getbootstrap.com/" title="Iframe Example"></iframe>
</body>

</html>
<script>
  $(document).ready(function() {

    fetchTask();

    function fetchTask() {
      $.ajax({
        url: "buscar.php",
        type: "GET",
        success: function(response) {

          let template = "";
          const lists = JSON.parse(response);
          template += `<option>Hola</option>`
          lists.forEach((list) => {

            template += `
              <option value="${list.motivos}">${list.motivos}</option>
            `;
          });

          $("#buscar").html(template);
        },
      });
    }
  });

  function buscarCampo() {
    let Search = $("#buscar").val();
    $.ajax({
      url: "buscarCategoria.php",
      type: "POST",
      data: {
        Search
      },
      success: function(response) {
        let tamplate = "";
        let tamplate2 = "";
        let tamplate3 = "";
        let tamplate4 = "";
        let tamplate5 = "";
        let tamplate6 = "";
        let tamplate7 = "";
        let tamplate8 = "";
        let tamplate9 = "";
        let tamplate10 = "";
        let tamplate11 = "";

        let data = JSON.parse(response);

        data.forEach((data) => {
          tamplate += ` ${data.sondeo1} `;
          tamplate2 += ` ${data.sondeo2} `;
          tamplate3 += ` ${data.reventa} `;
          tamplate4 += ` ${data.spc1} `;
          tamplate5 += ` ${data.spc2} `;
          tamplate6 += ` ${data.tipo} `;
          tamplate7 += ` ${data.sub_tipo} `;
          tamplate8 += ` ${data.motivo} `;
          tamplate9 += ` ${data.observacion} `;
          tamplate10 += ` ${data.url1} `;
          tamplate11 += ` ${data.url2} `;

        });
        // if (template == "") {
        //   alert("solo");
        // }
        // template == "" ? $("#containerSondeo1").addClass("hide") : $("#containerSondeo1").removeClass("hide")
        
        $("#container").html(tamplate);
        $("#container2").html(tamplate2);
        $("#container3").html(tamplate3);
        $("#container4").html(tamplate4);
        $("#container5").html(tamplate5);
        $("#container6").html(tamplate6);
        $("#container7").html(tamplate7);
        $("#container8").html(tamplate8);
        $("#container9").html(tamplate9);
        $("#container10").html('<a class="fija2 " href="' + tamplate10 + '" target="_blank">Link</a>');
        $("#container11").html('<a class="fija2 " href="' + tamplate11 + '" target="_blank">Link</a>');

       if($("#container").html !==""){
        alert("ww")
       }
       else{
        alert("eeee")
       }   


        $("#task-result").show();
      },
    });
  }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>