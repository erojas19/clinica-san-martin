<!-- notice modal -->
<div class="modal fade" id="modal_dias" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header-red">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                <h6>AGREGAR DIAS</h6>
            </div>
            <div class="modal-body-add">
                @include('doctores.dias')
            </div>
            <div class="modal-footer text-center">
                <p align="left"><b>Observación:</b> En esta sección usted podrá ingresar los días que atenderá el doctor seleccionado</p>
                <br>
            </div>
        </div>
    </div>
</div>
<!-- end notice modal -->