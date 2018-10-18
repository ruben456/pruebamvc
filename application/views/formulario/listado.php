<div class="row justify-content-md-center tarjeta">
    <div class="col col-lg-10">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Procesos</h5>
                <div class="card-body">
                    <table id="example" class="table table-dark" style="table-layout: auto;">
                        <thead>
                        <tr>
                            <th>Número de proceso</th>
                            <th>Fecha de creación</th>
                            <th></th>
                        </tr>
                        </thead>
                    <tbody>
                        <?php
                        
                        $k = 0;
                        
                        while(isset($procesos[$k])){
                            
                            if(isset($procesos[$k]['numeroProceso'])){
                                $i= $k + 1;                               
                                echo('<tr>'
                                        . '<td scope="row" style="word-wrap: break-word">'.$procesos[$k]['numeroProceso'].'</td>'
                                        . '<td scope="row" style="word-wrap: break-word">'.$procesos[$k]['fechaCreacion'].'</td>'                                       
                                        . '<td scope="row" style="word-wrap: break-word"><a class="btn btn-primary btn-block" href="'.base_url('formulario/detalle/'.$procesos[$k]['numeroProceso']).'" role="button">Detalle</a></td>'
                                   . '</tr>');
                            }
                            
                            $k++;
                        }
                        ?>
                        
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
