<?php $this->load->helper('url');?>
<html>
    <head>
        <title>Prueba Técnica MVC</title>
        <link href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('css/style.css'); ?>" rel="stylesheet" type="text/css"/>
        <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('js/jquery-3.3.1.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('js/popper.min.js'); ?>" type="text/javascript"></script>
        
    </head>
    <body class="fondo_login">
        <div class="container">
            <div class="row justify-content-md-center login">
                <div class="col col-lg-5">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Prueba Técnica MVC</h5>
                        </div>
                        <div class="card-body">
                            <form method="post" action="<?php echo base_url('Login/login'); ?>">
                                <div class="form-group">
                                    <label>Usuario</label>
                                    <input type="text" class="form-control" name="usuario" required>
                                    
                                </div>
                                <div class="form-group">
                                    <label>Contraseña</label>
                                    <input type="password" class="form-control" name="clave" required>
                                </div>
                                <hr>
                                <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </body>
</html>
