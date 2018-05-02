<div class="modal fade" tabindex="-1" role="dialog" id="modal-orina">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            @include('evaluacionmedica.examenes.encabezado')
            <form action="" id="" method="post">
            <div class="modal-body ">
                {{csrf_field()}}

                <div class="row form-horizontal">
                    <div class="col-md-12">
                        <label for=""><h5><u> <strong>E. MACROSCOPIO</strong></u></h5></label>
                    </div>

                  <div class="col-md-12">
                    <div class="form-horizontal">
                      <div class="form-group">
                       <label for="inputEmail3" class="col-sm-4 control-label">Color:</label>
                       <div class="col-sm-6">
                         <select class="form-control" name="">
                           <option value=""></option>
                         </select>
                       </div>
                     </div>
                     <div class="form-group">
                      <label for="inputEmail3" class="col-sm-4 control-label">Aspecto:</label>
                      <div class="col-sm-6">
                        <select class="form-control" name="">
                          <option value=""></option>
                        </select>
                      </div>
                    </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                      <label for=""><h5><u> <strong>E. BIOQUIMICO</strong> </u> </h5></label>
                  </div>
                  <div class="col-md-12">
                    <div class="form-horizontal">
                      <div class="form-group">
                       <label for="inputEmail3" class="col-sm-4 control-label">Densidad:</label>
                       <div class="col-sm-6">

                          <input type="text" class="form-control">

                       </div>
                       <label for="inputEmail3" class=" control-label text-left text-danger"><strong>1001-1035</strong> </label>
                     </div>
                     <div class="form-group">
                      <label for="inputEmail3" class="col-sm-4 control-label">PH:</label>
                      <div class="col-sm-6">

                         <input type="text" class="form-control">

                      </div>
                      <label for="inputEmail3" class=" control-label text-danger"><strong>4.6 - 8.0</strong> </label>
                    </div>

                    <div class="form-group">
                     <label for="inputEmail3" class="col-sm-4 control-label">Glucosa:</label>
                     <div class="col-sm-6">
                       <div class="input-group">
                        <input type="text" class="form-control">
                          <div class="input-group-addon">mg/dL</div>
                      </div>
                     </div>
                  </div>
                   <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Bilirrubinas:</label>
                    <div class="col-sm-6">
                      <div class="input-group">
                       <input type="text" class="form-control">
                       <div class="input-group-addon">mg/dL</div>
                     </div>
                    </div>
                  </div>
                  <div class="form-group">
                   <label for="inputEmail3" class="col-sm-4 control-label">Cuerpos Cetónicos:</label>
                   <div class="col-sm-6">
                     <div class="input-group">
                      <input type="text" class="form-control">
                          <div class="input-group-addon">mg/dL</div>
                    </div>
                   </div>
                 </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Protéinas:</label>
                  <div class="col-sm-6">
                    <div class="input-group">
                     <input type="text" class="form-control">
  <div class="input-group-addon">mg/dL</div>
                   </div>
                  </div>
                </div>
                <div class="form-group">
                 <label for="inputEmail3" class="col-sm-4 control-label">Urobanógeno:</label>
                 <div class="col-sm-6">
                   <div class="input-group">
                    <input type="text" class="form-control">
  <div class="input-group-addon">mg/dL</div>
                  </div>
                 </div>
               </div>
               <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Nitritos:</label>
                <div class="col-sm-6">
                  <div class="input-group">
                   <input type="text" class="form-control">
  <div class="input-group-addon">mg/dL</div>
                 </div>
                </div>
              </div>
              <div class="form-group">
               <label for="inputEmail3" class="col-sm-4 control-label">Hemoglobina:</label>
               <div class="col-sm-6">
                 <div class="input-group">
                  <input type="text" class="form-control">
  <div class="input-group-addon">Eri/uL</div>
                </div>
               </div>
       </div>
             <div class="form-group">
              <label for="inputEmail3" class="col-sm-4 control-label">Sangre:</label>
              <div class="col-sm-6">
                <div class="input-group">
                 <input type="text" class="form-control">
  <div class="input-group-addon">mg/dL</div>
               </div>
              </div>
            </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                      <label for=""><h5><u> <strong>E. MICROSCOPICO</strong> </u> </h5></label>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                     <label for="inputEmail3" class="col-sm-4 control-label">Leucocitos:</label>
                     <div class="col-sm-6">
                       <div class="input-group">
                        <input type="text" class="form-control">
         <div class="input-group-addon">Cel/Cam</div>
                      </div>
                     </div>
                   </div>
                   <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Hematies:</label>
                    <div class="col-sm-6">
                      <div class="input-group">
                       <input type="text" class="form-control">
        <div class="input-group-addon">Cel/Cam</div>
                     </div>
                    </div>
                  </div>
                  <div class="form-group">
                   <label for="inputEmail3" class="col-sm-4 control-label">Celulas Eptellales:</label>
                   <div class="col-sm-6">
                     <div class="input-group">
                      <input type="text" class="form-control">
       <div class="input-group-addon">Cel/Cam</div>
                    </div>
                   </div>
                 </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Cilindros:</label>
                  <div class="col-sm-6">

                     <input type="text" class="form-control">

                  </div>
                </div>
                <div class="form-group">
                 <label for="inputEmail3" class="col-sm-4 control-label">Cristales:</label>
                 <div class="col-sm-6">

                    <input type="text" class="form-control">

                 </div>
               </div>
               <div class="form-group">
                <label for="inputEmail3" class="col-sm-4 control-label">Germenes:</label>
                <div class="col-sm-6">

                   <input type="text" class="form-control">

                </div>
              </div>
              <div class="form-group">
               <label for="inputEmail3" class="col-sm-4 control-label">Filamentos Mucoides:</label>
               <div class="col-sm-6">

                  <input type="text" class="form-control">

               </div>
             </div>
             <div class="form-group">
              <label for="inputEmail3" class="col-sm-4 control-label">Otros:</label>
              <div class="col-sm-6">
                <div class="input-group">
                 <input type="text" class="form-control">
                        <div class="input-group-addon">PATOLOGICO</div>
               </div>
              </div>
            </div>
            <div class="form-group">
             <label for="inputEmail3" class="col-sm-4 control-label">CONCLUSION ORINA:</label>
             <div class="col-sm-6">
                <select class="form-control" name="">
                  <option value="">NR</option>
                </select>
             </div>
          </div>


                  </div>

                </div>


            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-12 text-right">
                        <a href="" class="btn btn-sm btn-success" data-dismiss="modal">GUARDAR</a>
                        <a href="" class="btn btn-sm btn-info" data-dismiss="modal">TERMINAR</a>

                        <a href="" class="btn btn-sm btn-warning" data-dismiss="modal">Volver</a>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
