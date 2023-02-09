<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>FINANCEIRO</h2>
            </div>

            <!-- Widgets -->
            
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                LANÇAMENTOS FINANCEIROS
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" data-toggle="modal" data-target="#defaultModal">Incluir (+)</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Descrição</th>
                                            <th>Valor</th>
                                            <th align="center">Id Registro</th>
                                            <th>Tipo</th>
                                            <th>Data Lancam</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>                                        
                                        
										
										<?php
										
										require_once 'config\dbconfig.php';
										
										
										$query = "SELECT DESCRICAO, VALOR, TIPO, ID_LANCAMENTOS, DATALANCAMENTO FROM LANCAMENTOS";
										$stmt = sqlsrv_query( $conn, $query);
										
										
										while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC)) {
    										$descricao = $row['DESCRICAO'];
    										$valor = $row['VALOR'];
    										$tipo = $row['TIPO'];
    										$data = $row['DATALANCAMENTO'];
											$id = $row['ID_LANCAMENTOS'];
										
										
										
										?>
										
										
                                       
                                        <tr>
                                            <td><?php echo $descricao ?></td>
                                            <td><?php echo $valor ?></td>
                                            <td><?php echo $id ?></td>
                                            <td><?php echo $tipo ?></td>
                                            <td><?php echo $data ?></td>
                                            <td><button type="button" class="btn btn-default waves-effect">
                                    				<a href="editar_lancamentos.php?id=<?php echo $id;?>"><i class="material-icons">edit</i></a>
                                				</button>
												<button type="button" class="btn btn-default waves-effect">
                                    				<a href="excluir_lancamentos.php?id=<?php echo $id;?>"<a><i class="material-icons">delete</i></a>
                                				</button>
												<button type="button" class="btn btn-default waves-effect">
													<a href="#" data-toggle="modal" data-target="#docModal" data-id="<?php echo $id;?>"><i class="material-icons">cloud_upload</i></a>
													
                                				</button>
											</td>
                                        </tr>
                                        
										<?php
											
										}
										?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
				
            </div>
            <!-- #END# CPU Usage -->
			

            
        </div>
	
	<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">LANÇAMENTO FINANCEIRO</h4>
                        </div>
                        <div class="modal-body">
                            
                            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                       
                        <div class="body">
                            <form action="insert_lancamentos" method="POST">
                                <label for="email_address">Descrição</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="descricao" name="descricao" class="form-control" placeholder="Faça a descrição do lançamento">
                                    </div>
                                </div>
                                <label for="password">Valor</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="valor" name="valor" class="form-control" placeholder="R$ 0,00">
                                    </div>
                                </div>
								
								<div class="form-group">
                                    <p>
                                        <b>TIPO</b>
                                    </p>
                                    <select class="form-control show-tick" id="tipo" name="tipo">
                                        <option>--Selecione o Tipo--</option>
                                        <option value="R">Reseita</option>
                                        <option value="D">Despesa</option>
                                    </select>
                                </div>
								
								<div class="form-group">
                                    <h2 class="card-inside-title">Data Lançamento</h2>
                                    <div class="form-group">
                                        <div class="form-line" id="bs_datepicker_container">
                                            <input type="text" class="form-control" placeholder="Escolha uma data..." id="datalancamento" name="datalancamento">
                                        </div>
                                    </div>
                                </div>
								
								
                                <button type="submit" value="Cadastrar" class="btn btn-primary m-t-15 waves-effect">LOGIN</button>
                            </form>                 

                        </div>
                    </div>
                </div>
            </div>

            
                



            

            





                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link waves-effect">SALVAR</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">FECHAR</button>
                        </div>
                    </div>
                </div>
            </div>
	






<div class="modal fade" id="docModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="docModalLabel">UPLOAD DOCUMENTO</h4>
                        </div>
                        <div class="modal-body">
                            
                            <div class="row clearfix">
                
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                FILE UPLOAD - DRAG & DROP OR WITH CLICK & CHOOSE
                                <small>Taken from <a href="http://www.dropzonejs.com/" target="_blank">www.dropzonejs.com</a></small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form action="pages/uploadfinanceiro.php" id="frmFileUpload" class="dropzone" method="post" enctype="multipart/form-data">
                                <div class="dz-message">
                                    <div class="drag-icon-cph">
                                        <i class="material-icons">touch_app</i>
                                    </div>
                                    <h3>Drop files here or click to upload.</h3>
                                    <em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em>
                                </div>
								<label for="email_address">Descrição</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="descricao" name="descricao" class="form-control" placeholder="Faça a descrição do lançamento">
                                    </div>
                                </div>
                                <label for="password">Valor</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="valor" name="valor" class="form-control" placeholder="R$ 0,00">
                                    </div>
                                </div>
								
								<div class="form-group">
                                    <p>
                                        <b>TIPO</b>
                                    </p>
                                    <select class="form-control show-tick" id="tipo" name="tipo">
                                        <option>--Selecione o Tipo--</option>
                                        <option value="R">Reseita</option>
                                        <option value="D">Despesa</option>
                                    </select>
                                </div>
								
								<div class="form-group">
                                    <h2 class="card-inside-title">Data Lançamento</h2>
                                    <div class="form-group">
                                        <div class="form-line" id="bs_datepicker_container">
                                            <input type="text" class="form-control" placeholder="Escolha uma data..." id="datalancamento" name="datalancamento">
                                        </div>
                                    </div>
                                </div>
                                <div class="fallback">
                                    <input name="image" type="file" multiple />
                                </div>
								<button type="submit" value="Upload" name="submit" class="btn btn-primary m-t-15 waves-effect">UOLOAD</button>
                            </form>
                        </div>
                    </div>
                </div>	
								
								
								
								
								
								
            </div>
							
							
							
							
							

            
                



            

            





                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link waves-effect">SALVAR</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">FECHAR</button>
                        </div>
                    </div>
                </div>
            </div>










	
	
	
	
    </section> 
<script>
$('#docModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget);
  var id = button.data('id');

  // Use o ID para fazer o que precisar
});
</script>
    <!-- Bootstrap Core Js -->
    <!-- <script src="plugins/bootstrap/js/bootstrap.js"></script> -->

    <script src="js/pages/forms/basic-form-elements.js"></script>


    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <script src="plugins/autosize/autosize.js"></script>
    
<!-- Multi Select Plugin Js -->
    <script src="plugins/multi-select/js/jquery.multi-select.js"></script>

    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Custom Js -->
    <!-- <script src="js/admin.js"></script> -->
    <script src="js/pages/tables/jquery-datatable.js"></script>

     <!-- Moment Plugin Js -->
    <script src="plugins/momentjs/moment.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>

<!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

<script src="js/pages/forms/advanced-form-elements.js"></script>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>

<!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

    
