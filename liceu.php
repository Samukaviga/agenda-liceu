
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Liceu Brasil">
    <meta name="author" content="Dirceu Silva">
    <meta name="theme-color" content="#0d6efd">
    <!-- Title-->
    <title>Liceu Brasil</title>
    <!-- Favicon-->
    <link rel="icon" href="img/core-img/favicon.ico">
    <!-- Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Stylesheet-->
    <link rel="stylesheet" href="style.css">
  </head>
  <style>	
table {
    margin: 20px 0 40px;
}

thead {
    background-color: #00721B;
   color: white;
   font-weight: bold;
}

td, th {
    border: 1px solid black;
    padding: 15px 8px;
}

.fcc-btn {
  background-color: #c9e5d0;
  color: white;
  padding: 15px 25px;
  text-decoration: none;
  cursor: pointer;
  border: none;
}

</style>
<script type="text/javascript">
   function getValor(data,curso_id){
     $("#hora").html("<option value='0'>Carregando horários aguarde...</option>");
     setTimeout(function(){
          $("#hora").load("hora.php",{data:data,curso_id:curso_id})
   }, 0)
};
</script>
<?php
//ini_set('display_errors', 1);
//error_reporting(E_ALL);
$hoje=date("Y-m-d");  


require_once('./env.php');

   $ref=$_GET["ref"];
   $select_cliente="select * from subscribers where id='$ref' ";
   $result_cliente=mysqli_query($conecta_liceu,$select_cliente);
   $row_cliente=mysqli_fetch_assoc($result_cliente);
   $num_row_cliente=mysqli_num_rows($result_cliente);  
   
  

   if($num_row_cliente>0){

   }else{

   }
   $curso= $row_cliente["course_1"];
   $nome= $row_cliente["name"];

   $select_curso="select * from courses where name  ='$curso' and is_active=1 LIMIT 1 ";
   $result_curso=mysqli_query($conecta_liceu,$select_curso);
   $row_curso=mysqli_fetch_assoc($result_curso);
   $num_curso=mysqli_num_rows($result_curso);  
   $id_curso = $row_curso['id'];

?>
  <body>
    <!-- Preloader-->
    <div id="preloader">
      <div class="apland-load"></div>
    </div>
    <!-- Night Mode Area-->
    <div class="night-mode-wrapper position-fixed shadow-lg d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" data-bs-placement="right" title="View dark/default mode">
      <div class="form-check p-0 m-0">
        <input class="form-check-input p-0 m-0" id="darkSwitch" type="checkbox" value="">
        <label class="form-check-label" for="darkSwitch"></label>
      </div>
      <div class="night-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
          <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"></path>
        </svg>
      </div>
      <div class="default-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
          <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"></path>
        </svg>
      </div>
    </div>
    <!-- Register Area-->
    <div class="register-area d-flex">
      <div class="register-content-wrapper d-flex align-items-center">
        <div class="register-content">
          <!-- Logo--><a class="logo" href="#"><img src="img/core-img/logo_liceus.png" alt=""></a>
       
          <p>PARABÉNS! 🥳🙏 Você GANHOU uma <b>BOLSA DE ESTUDO 100% GRÁTIS</b> no LICEU BRASIL. Agora o próximo passo é agendar sua visita para realizar a matrícula. </p>
          
          <h5 ><?php echo $nome; ?></h5>
          <p>Curso: <span ><?php echo $curso; ?></span></p>
          <!-- Form-->
          <div class="register-form">
            <form method="get" action="parabens.php">
            <input type="hidden" id="ref" name="ref" value="<?php echo $_GET['ref']; ?>">
          <input type="hidden" id="id_curso" name="id_curso" value="<?php echo $id_curso; ?>">
              <div class="form-group mb-3"><i class="lni-calendar"></i>
                <select class="form-control form-control-sm" id="data" name="data" aria-label="Grupo" onchange="getValor(this.value, <?php echo $id_curso;?> )" required>
                <?php $select_c="select data from tb_calendario_atendimento where data >'$hoje' and curso_id = '$id_curso' AND status = 1 group by data  order by data asc";
                      $result_c=mysqli_query($conecta,$select_c);
                      ?>
                      <option value="0" >Selecione a data</option>
                      <?php while($row_c = mysqli_fetch_assoc($result_c)){ ?>
                     <option value="<?php echo $row_c["data"];?>" >
                    
                    
                    <?php 
                    
                    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
                    date_default_timezone_set('America/Sao_Paulo');
                    echo utf8_encode(strftime('%d de %B de %Y, %A', strtotime($row_c["data"])));
                 
                    
                    ?></option>
                    <?php } ?>
                </select>
              </div>
              <div class="form-group mb-3"><i class="lni-alarm-clock"></i>
                <select class="form-control form-control-sm" id="hora" name="hora" aria-label="Grupo" required>
                  
                    <option value="" >Selecione o horário</option>
                    
                </select>
              </div>

 

              
           
          </div>
          <!-- Sign in via others-->
          <div class="signin-via-others">
      
            <input class="btn btn-primary w-100 mt-3" type="submit" value="AGENDAR DATA" />
          </div>
          </form>
          <p style="margin-top: 20px">
          •Escolha o melhor dia e horário para você efetivar sua matrícula na nossa unidade <br>
          •A unidade fica na Rua da Liberdade, 45 - Centro, Itaquaquecetuba. (Em frente ao ponto de ônibus - Ladeira de Itaquá).<br> 
          •Compareça no dia e hora marcados com 15 minutos de antecedência.<br>
          •Leve o RG, CPF, comprovante de endereço e protocolo de inscrição (recebido por e-mail e SMS logo após a inscrição) do contemplado com a bolsa.<br>

          <b>OBS: caso seja menor de idade, o aluno deve comparecer com o responsável.</b></p>

   
          
          
          <!-- Footer Copwrite Area-->
          <div class="footer-bottom">
            <p>Todos direitos reservados <i class="lni-heart"> </i> by  <a href="https://liceubrasil.com.br">Liceu Brasil</a></p>
          </div>
        </div>
      </div>
      <!-- Register Side Content-->
    <div class="register-side-content bg-img" style="background-image: url(img/bg-img/hero-6.jpg);"></div>
    </div>
    <!-- jQuery(necessary for all JavaScript plugins without bootstrap js)-->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/classy-nav.min.js"></script>
    <script src="js/one-page-nav.js"></script>
    <!-- All plugins activation code-->
    <script src="js/active.js"></script>
    <script src="js/dark-mode-switch.js"></script>
    <!-- <script src="adm/assets/js/agendamentos-datay.js"></script> -->
    <!-- <script src="adm/assets/js/agendamentos-datasabliceu.js"></script> --> 

    
  </body>
</html>