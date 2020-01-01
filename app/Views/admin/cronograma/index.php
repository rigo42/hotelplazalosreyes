<?php 
if(isset($_GET['page'])){
    $page = urldecode(strip_image_tags(encode_php_tags($_GET['page'])));
}else{
    $page = 1;
}

if(isset($_GET['search'])){
    $search = urldecode(strip_image_tags(encode_php_tags($_GET['search'])));
}else{
    $search = "";
}
?>
<div class="page-wrapper">

    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Cronograma</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Inicio</a></li>
                            <li class="breadcrumb-item active">Cronograma</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="el-card-item">
            <div class="page-breadcrumb">
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="search" name="search" class="form-control" placeholder="Buscar..." value="<?php echo $search ?>">
                        <div class="input-group-append estado seleccionado" data-estado="1">
                            <span class="input-group-text" title="Ver activos" style="cursor: pointer;"><i class="fas fa-check-circle"></i></span>
                        </div>
                        <div class="input-group-append estado" data-estado="0">
                            <span class="input-group-text" title="Ver inactivos" style="cursor: pointer;"><i class="fas fa-window-close"></i></span>
                        </div>
                        <div class="input-group-append nuevo" data-nuevo="<?php echo base_url() ?>cronograma/nuevo">
                            <span class="input-group-text" title="Nuevo" style="cursor: pointer;"><i class="fas fa-plus"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div id="cuerpoPagina" 
             data-url="<?php echo base_url(); ?>cronograma/mostrar" 
             data-page="<?php echo $page; ?>"
             data-search="<?php echo $search; ?>">
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        titlePage("#menuCronograma","Cronograma");
        
        var id = "#cuerpoPagina";
        var url = $(id).attr("data-url");
        var page = $(id).attr("data-page");
        var estado = $(".seleccionado").attr('data-estado');
        var search = $(id).attr("data-search");
        var datos = {
            estado:estado,
            search:search,
            page: page
        };
        ajaxMostrarBasico(datos,url,id);
    });
    
</script>

	

