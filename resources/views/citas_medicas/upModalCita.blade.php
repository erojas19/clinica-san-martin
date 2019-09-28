<!-- notice modal -->
<div class="modal fade" id="up_evento" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header-primary">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                <h6>DETALLES DE LA CITA</h6>
            </div>
            <div class="modal-body">
                <div class="row">
        <div class="col-md-12">
            <form id="form_update_cita">
                <input id="id" name="id" hidden="true" />
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">FECHA</label>
                            <input id="fecha_inicio_e" name="fecha_inicio" type="text" class="form-control" readonly="true"/>                    
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">HORA INICIO</label>
                            <input id="hora_inicio_e" name="hora_inicio" type="text" class="form-control timepicker" />                    
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">HORA FIN</label>
                            <input id="hora_fin_e" name="hora_fin" type="text" class="form-control timepicker" />                    
                        </div>
                    </div>
                </div>
                @role('doctor')
                    <input id="doctor_id_e_up" name="doctor_id" value="{{Auth::User()->id}}" hidden="true" />
                    <div class="row">
                        <div class="col-md-12"> 
                            <div class="form-group">
                              <label class="control-label">ESPECIALIDAD</label>
                              <select id="speciality_id_e_up" name="speciality_id" class="selectpicker show-tick" data-dropup-auto="false" data-style="select-with-transition">
                                   
                              </select>
                            </div>
                        </div>
                    </div>
                @else
                @permission('leer-especialidades')
                    <div class="row">
                        <div class="col-md-6"> 
                            <div class="form-group">
                              <label class="control-label">ESPECIALIDAD</label>
                              <select id="speciality_id_e" name="speciality_id" class="selectpicker show-tick" data-dropup-auto="false" data-size="5" data-live-search="true" data-style="select-with-transition">
                                    <option value="">-- Seleccione --</option>
                                    @foreach($especialidades as $especialidad)
                                        <option value="{{ $especialidad->id }}">{{ $especialidad->nombre }}</option>
                                    @endforeach
                              </select>
                            </div>
                        </div>
                @endpermission
                @permission('leer-doctores')
                        <div class="col-md-6"> 
                            <div class="form-group">
                              <label class="control-label">DOCTOR</label>
                              <select id="doctor_id_e" name="doctor_id" class="selectpicker show-tick" data-dropup-auto="false" data-size="5" data-live-search="true" data-style="select-with-transition">
                              </select>
                            </div>
                        </div>
                    </div>
                    @endpermission
                    @endrole
                    @permission('leer-pacientes')
                    <div class="row">
                        <div class="col-md-12"> 
                            <div class="form-group">
                              <label class="control-label">PACIENTE</label>
                              <select id="paciente_id_e" name="paciente_id" class="selectpicker show-tick" data-dropup-auto="false" data-size="5" data-live-search="true" data-style="select-with-transition">
                                    <option value="">-- Seleccione --</option>
                                     @foreach($pacientes as $paciente)
                                        <option value="{{ $paciente->id }}">{{ $paciente->apellidos }} {{ $paciente->nombres }}</option>
                                    @endforeach

                              </select>
                            </div>
                        </div>
                    </div>
                @endpermission
                <div class="row">
                    <div class="col-md-12"> 
                        <div class="form-group">
                            <label class="control-label">OBSERVACIÓN</label>
                            <input id="descripcion_e" name="descripcion" type="text" class="form-control" />      
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
            </div>
            <div class="modal-footer text-center">
                <a href="#" class="btn btn-warning pull-right" data-dismiss="modal">Cancelar</a>
                <a href="#" id="delete_cita" class="btn btn-danger pull-left">Eliminar</a>
                <a href="#" id="update_cita" class="btn btn-primary pull-right">Actualizar</a>
            </div>
        </div>
    </div>
</div>
<!-- end notice modal -->