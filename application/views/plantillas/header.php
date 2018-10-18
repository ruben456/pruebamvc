<?php
    $id = $this->session->userdata('ID');
    $estado = $this->session->userdata('estado');
    if($id == NULL || $estado == "Inactivo"){
        redirect('login/index');
    }                    
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Prueba Técnica MVC</title>
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <link href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('css/style.css'); ?>" rel="stylesheet" type="text/css"/>
        <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('js/jquery-3.3.1.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('js/popper.min.js'); ?>" type="text/javascript"></script>

        

        
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark justify-content-between">
            <a class="navbar-brand" href="<?php echo base_url('/formulario/index'); ?>">Prueba Técnica MVC</a>
            <a class="btn btn-danger my-2 my-sm-0" type="button" href="<?php echo base_url('/login/salir'); ?>">Salir</a>    
            

        </nav>
        <div class="container-fluid">
            


