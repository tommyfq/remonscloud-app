<!--main content start-->
<section id="main-content">
  <section class="wrapper">
		
  	<div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-file-text"></i> List Pengelola</h3>
        <ol class="breadcrumb">
          <li><i class="fa fa-file-text"></i>List Pengelola</li>
        </ol>
      </div>
    </div>
		
		<div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2><i class="fa fa-globe"></i><strong>List Pengelola</strong></h2>
          </div>

          <div class="panel-body">
            <div class="row">
              <div class="col-md-12">
                <form class="form-horizontal" method="post" action="List_Pengelola">
                  
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Nama Site</th>
                        <th>Propinsi</th>
                        <th>Nama Pengelola</th>
                        <th>Handphone</th>
                        <th>Email</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>
                          <button type="button" onclick="location.href='Ubah_User';" class="btn btn-success"><i class="fa fa-search"></i> Ubah</button>
                          <button type="button" data-toggle="modal" data-target="#KirimPesan" class="btn btn-info"><i class="fa fa-envelope"></i> Kirim Pesan</button>
                          <button type="button" data-toggle="modal" data-target="#KirimSMS" class="btn btn-danger"><i class="fa fa-signal"></i> Kirim SMS</button>
                        </td>
                      </tr>

                    </tbody>
                  </table>
                </form>
              </div>  
            </div>
          </div>

        </div>
      </div>
    </div>
    
	</section>
</section>


<!-- Modal Kirim Pesan -->
<div id="KirimPesan" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Kirim Email</h4>
      </div>

      <div class="modal-body">

        <form role="form">

          <div class="form-group">
            <div class="row">
              <label for="plts" class="col-md-3 control-label">Penerima</label>
              <div class="col-md-9">
                <input type="text" name="plts" class="form-control">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row"> 
              <label for="plts" class="col-md-3 control-label">Tipe Pesan</label>
              <div class="col-md-9">
                <select class="form-control">
                  <option>Pemberitahuan Error</option>
                  <option>Lainnya</option>
                </select>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row"> 
              <label for="plts" class="col-md-3 control-label">Subject</label>
              <div class="col-md-9">
                <input type="text" name="plts" class="form-control">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row"> 
              <label for="plts" class="col-md-3 control-label">Isi Pesan</label>
              <div class="col-md-9">
                <textarea rows="3" class="form-control"></textarea>
              </div>
            </div>
          </div>

          <div class="form-group" align="right">
            <div class="row">
              <div class="col-md-12">
                <button type="submit" class="btn btn-success">Kirim</button>
              </div>
            </div>
          </div>

        </form>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>





<!-- Modal Kirim SMS -->
<div id="KirimSMS" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Kirim SMS</h4>
      </div>

      <div class="modal-body">

        <form role="form">

          <div class="form-group">
            <div class="row">
              <label for="plts" class="col-md-3 control-label">Penerima</label>
              <div class="col-md-9">
                <input type="text" name="plts" class="form-control">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row"> 
              <label for="plts" class="col-md-3 control-label">Tipe Pesan</label>
              <div class="col-md-9">
                <select class="form-control">
                  <option>Pemberitahuan Error</option>
                  <option>Lainnya</option>
                </select>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row"> 
              <label for="plts" class="col-md-3 control-label">Isi Pesan</label>
              <div class="col-md-9">
                <textarea rows="3" class="form-control"></textarea>
              </div>
            </div>
          </div>

          <div class="form-group" align="right">
            <div class="row">
              <div class="col-md-12">
                <button type="submit" class="btn btn-success">Kirim</button>
              </div>
            </div>
          </div>

        </form>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>