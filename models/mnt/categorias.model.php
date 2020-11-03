<?php
include "conex.php";
?>
 <title> categorias</title>
<h1>  Listado de categorias </h1>
<form action="adicionar.php" id="formulario" method="POST" name="formulario">
    < class="form-group">
        <label for="codigo">
            catecod
        </label>
        <input class="form-control" id="codigo" name="codigo" placeholder="Tu codigo" required="" type="text"></input>
</div>
        <div class="form-group">
            <label for="nombre">
                catenom
            </label>
        <input class="form-control" id="nombre" name="nombre" placeholder=" Escribe tu nombre" required="" type="text"></input>
        </div>
        <div class="form-group">
             <label for="est">
                 cateest
            </label>
        <input class="form-control" id="est" name="est" placeholder="est " required="" type="text"></input>
        </div>
                        
<input class="btn btn-primary" id="enviar" name="guardar" type="submit" value="Guardar datos"/>
<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ingreso de datos</h4>
      </div>
      <div class="modal-body">
          <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
<form class="form-inline" "action="visualizar.php" method="post">
    <div class="form-group">
        <input class="form-control" id="b" name="b" placeholder="Ingrese un codigo para visualizar" type="text">
        <button type="submit" type="button" name="buscar" class="btn btn-primary" >
    visualizar categorias
  <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
</button>
</div>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
Nuevo
</button>
            
         </form>
     </div>            
    

     <table class="table table-striped col-md-4 col-xs-6">
         <thead>
             <tr>
                 <th>
                    catecod
                 </th>
                 <th>
                    catenom
                 </th>
                 <th>
                    cateest
                 </th> 
             </tr>
         </thead>
         echo '<tr>
        <td>' . $fila['catecod'] . '</td>
        <td>' . $fila['catenom'] . '</td>
        <td>' . $fila['cateest'] . '</td>
        <td>
       <a class="btn btn-info" href="update.php?id='.$fila['codigo'].'">Editar</a>
       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#update">
  Editar
</button>
<h3> Edicion de categorias </h3>
     <form action="update.php" id="formulario" method="POST" name="formulario">
         <div class="form-group">
            <label for="cod"> Codigo </label>
     <input class="form-control" id="codigo" name="codigou" placeholder="Tu codigo" required="" type="text"> </input>
         </div>
    <div class="form-group">
        <label for="asunto">cotenom </label>
        <input class="form-control" id="nombre" name="nombreu" placeholder=" nombre" required="" type="text"> </input>
     </div>
     <div class="form-group">
<label for="cotest"> est</label>
<input class="form-control" id="telefono" name="catest" placeholder="est " required="" type="text"></input>
  </div>
                        
<input class="btn btn-primary" id="enviar" name="guardar" type="submit" value="Guardar datos"/> 

