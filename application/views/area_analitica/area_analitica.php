<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
<link href="assets/admin/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css?<?php echo time(); ?>" rel="stylesheet" />
<link href="assets/admin/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css?<?php echo time(); ?>" rel="stylesheet" />
<link href="assets/admin/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css?<?php echo time(); ?>" rel="stylesheet" />
<link href="assets/admin/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css?<?php echo time(); ?>" rel="stylesheet" />
<link href="assets/admin/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css?<?php echo time(); ?>" rel="stylesheet" />
<link href="assets/admin/plugins/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css?<?php echo time(); ?>" rel="stylesheet" />

<!-- ================== END PAGE LEVEL STYLE ================== -->

<!-- begin breadcrumb -->

<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Analisis <small> >Area  analitica</small></h1>
<!-- end page-header -->
<!-- begin panel -->
<div class="panel panel-inverse">
    <!-- begin panel-heading -->
    <div class="panel-heading">
        <h4 class="panel-title"></h4>

    </div>
    <!-- end panel-heading -->
    <!-- begin panel-body -->
    <div class="panel-body table-responsive">
        <table id="tabla_administrar_area_analitica" class="table table-striped table-bordered table-td-valign-middle" style="width:100%;">
            <thead>
                <tr>
                    <th width="1%" class="text-rap" class="text-center">ID</th>
                    <th width="98%" class="text-rap" class="text-center">NOMBRE</th>
                    <th width="1%" class="text-rap" class="text-center">OPCIONES</th>
                </tr>
            </thead>
            <tbody>

            <tbody>
        </table>
    </div>
    <!-- end panel-body -->
</div>
<!-- end panel -->
<!-- #modal-alert -->
<div class="modal fade modal_usuarios" >
    <div class="modal-dialog" style="width: 100%;max-width: 650px;">
        <div class="modal-content">

        </div>
    </div>
</div>
</div>

<div class="modal fade modal_agregar_foto_perfil" >
    <div class="modal-dialog" style="width: 100%;max-width: 800px;">
        <div class="modal-content">

        </div>
    </div>
</div>
<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script>
    App.setPageTitle('UFEJI | Administrar Usuarios');
    App.restartGlobalFunction();

    $.getScript('assets/admin/plugins/datatables.net/js/jquery.dataTables.min.js?<?php echo time(); ?>').done(function () {
        $.when(
                $.getScript('assets/admin/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js'),
                $.getScript('assets/admin/plugins/datatables.net-responsive/js/dataTables.responsive.min.js'),
                $.getScript('assets/admin/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js'),
                $.getScript('assets/admin/plugins/datatables.net-buttons/js/dataTables.buttons.min.js'),
                $.getScript('assets/admin/plugins/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js'),
                $.getScript('assets/admin/plugins/croppie/croppie.js?<?php echo time(); ?>'),
                $.getScript('assets/admin/plugins/moment/moment.js?<?php echo time(); ?>'),
                $.getScript('assets/admin/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js'),
                $.getScript('assets/admin/plugins/jquery.maskedinput/src/jquery.maskedinput.js'),
                $.getScript('assets/admin/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js'),
                $.getScript('assets/admin/plugins/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js'),
                $.Deferred(function (deferred) {
                    $(deferred.resolve);
                })
                ).done(function () {
            $.getScript('assets/admin/js/demo/table-manage-default.demo.js'),
            $.getScript('js/area_analitica/area_analitica.js?<?php echo time(); ?>'),
                    $.Deferred(function (deferred) {
                        $(deferred.resolve);
                    })
        });
    });






</script>
<!-- ================== END PAGE LEVEL JS ================== -->
