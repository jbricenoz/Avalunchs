<html ng-app="myApp">
<meta charset="UTF-8">
<head>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="css/taskman.css"/>
  <link rel="stylesheet" href="css/autocomplete.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700" rel="stylesheet" type="text/css">

</head>
<body ng-controller="tasksController">
<div class="navbar navbar-default" id="navbar">
  <div class="container" id="navbar-container">
    <div class="navbar-header">
      <a href="#" class="navbar-brand">
       <small>
        <i class="glyphicon glyphicon glyphicon glyphicon-list"></i>
        AvaLunchs 1.1 Alfa
      </small>

      
    </a><!-- /.brand -->

  </div><!-- /.navbar-header -->
  <div class="navbar-header pull-right" role="navigation">
    <a  href="#" ng-click="addNewClicked=!addNewClicked;" class="btn btn-sm btn-danger nav-button-margin"> <i class="glyphicon glyphicon-plus"></i>&nbsp;Reservar almuerzo</a>
    <a  href="https://github.com/jbricenoz/Avalunchs.git" class="btn btn-sm btn-warning nav-button-margin"> <i class="glyphicon glyphicon-download"></i>&nbsp;Proyecto GIT</a>
  </div>
</div>
</div>

<div class="row">
 <div class="container">
 
  <div class="col-sm-8">
    <div class="animated bounceInLeft">
      <div class=" bs-callout-danger">
        <h4>Importantes Instrucciones</h4>
        <p>Seleccione el plato que desea <code>Importante!</code> Luego escribe tu nombre <code>&lt;Ejemplo: Pollo (a la plancha). Mark &gt;</code>,
          No podrá borrar el registro una vez que lo haya hecho, si no desea el platilo tachelo haciendo click sobre la linea.<br>
           <small>
      Hola: <?php echo gethostbyaddr($_SERVER['REMOTE_ADDR']); ?>, el registro será guardado con la fecha y hora: {{date | date:'yyyy-MM-dd  HH:mm'}} </small></p>
        </div>
        </div>
        <div class="animated bounceIn" ng-include src="'partials/task.html'"></div>
    </div>
    <div class="col-sm-4">
      <div class="animated bounceInRight">
       <div class="bs-callout-warning">
        <h4>Menú del almuerzo!</h4>
        <p>Telefono: <a class="danger">8703-1359</a>, Este es el número de "Mi comida Express". Por favor respetemos el horario y hagámonos responsables.</p>
      </div>
      <div class="table-responsive">
        <table class="table">
          <tbody>
            <tr>
              <td>1</td>
              <td>Pescado empanizado.</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Pescado al ajillo.</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Filete de pollo a la plancha</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Pollo sudado.</td>
            </tr>
            <tr>
              <td>5</td>
              <td>Bistec de res encebollado.</td>
            </tr>
            <tr>
              <td>6</td>
              <td>Carne desmechada (Mexicana)</td>
            </tr>
            <tr>
              <td>7</td>
              <td>Carne en trocitos.</td>
            </tr>
            <tr>
              <td>8</td>
              <td>Costilla de cerdo frita.</td>
            </tr>
            <tr class="danger">
              <td>9</td>
              <td>Arroz con pollo. (Opcional,Preguntar)</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
        
</div>
<script type="text/javascript" src="js/angular.min.js"></script>
<script type="text/javascript" src="app/app.js"></script> 
<script type="text/javascript" src="js/ui-bootstrap-tpls-0.9.0.js"></script>
<script type="text/javascript" src="app/autocomplete.js"></script>
<script type="text/javascript" src="js/angular-animate.js"></script>
</body>
</html>