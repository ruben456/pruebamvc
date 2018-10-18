<?php
    $consecutivo = $this->session->userdata('consecutivo');                 
?>
<script>
    function formato(){
        var x = document.getElementById("presu").value;
        var usd = x.toString().replace(",",".") / 3067.13;
//        alert(Math.round(usd * 100) / 100);
        
        document.getElementById("usd").value = Math.round(usd * 100) / 100;
        x = x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        
        document.getElementById("presu").value = x;
    }
    
    function numero(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode;
        
        
        if (iKeyCode !== 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57)){
            if(iKeyCode === 44){
                return true;
            }else{
                return false;
            }
             
        }
            
        return true;
    }
    
</script>
<div class="row justify-content-md-center tarjeta">
    <div class="col col-lg-10">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Formulario 1</h5>
            </div>
            <div class="card-body">
                <form method="post" action="<?php echo base_url('formulario/guardar'); ?>">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Número del proceso</label>
                                <input type="text" class="form-control" maxlength="8" name="numPro" value="<?= $consecutivo ?>" readonly>                                                            
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Descripción</label>
                                <textarea class="form-control" rows="3" name="descp" maxlength="200" required></textarea>                                                             
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label>Sede</label>
                                <select class="form-control" name="sede" required>
                                    <option value=""></option>
                                    <option value="Bogotá">Bogotá</option>
                                    <option value="México">México</option>
                                    <option value="Perú">Perú</option>
                                </select>                            
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>Presupuesto</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">COP</div>
                                    </div>
                                    <input type="text" class="form-control" id="presu" name="presu" onblur="formato()" onkeypress="javascript:return numero(event)" required>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>Presupuesto en Dolares</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">USD</div>
                                    </div>
                                    <input type="text" class="form-control" id="usd" name="usd"  readonly>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row justify-content-md-center">
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary btn-block">Guardar</button>
                        </div>
                        <div class="col-6">
                            <a type="button" class="btn btn-danger btn-block" href="<?php echo(base_url('formulario/index')); ?>">Cancelar</a>                           
                        </div>
                    </div>
                </form>
                
                
            </div>
        </div>
    </div>
</div>
