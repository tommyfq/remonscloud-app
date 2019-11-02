<!--main content start-->
<section id="main-content">
  <section class="wrapper">
		
  	<div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-files-o"></i> Export Data</h3>
        <ol class="breadcrumb">
          <li><i class="fa fa-files-o"></i>Export Data</li>
        </ol>
      </div>
    </div>
		
		<div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2><i class="fa fa-globe"></i><strong>Option</strong></h2>
          </div>

          <div class="panel-body">
            <div class="row">
              <div class="col-md-12">
              	<form class="form-horizontal" method="post" action="Monitoring">
	                <div class="form-group">
	                  <label for="plts" class="col-lg-2 control-label">PLTS</label>
	                  <div class="col-lg-10">
	                    <select class="form-control m-bot15" name="plts">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    	</select>
	                  </div>
	                </div>

	                <div class="form-group">
	                  <label for="tanggal" class="col-lg-3 control-label">Pilih Periode</label>
	                  <div class="col-lg-5">
	                    <div class="radio">
											  <label><input type="radio" name="optradio" checked>Tahunan</label>
											</div>
											<div class="radio">
											  <label><input type="radio" name="optradio">Bulanan</label>
											</div>
											<div class="radio">
											  <label><input type="radio" name="optradio">Harian</label>
											</div>
											<div class="radio">
											  <label><input type="radio" name="optradio">Jam</label>
											</div>
	                  </div>
	                </div>

	                <div class="form-group">
	                	<label for="tanggal" class="col-lg-3 control-label">Tahun Laporan</label>
	                	<div class="col-lg-5">
	                		<select class="form-control">
	                			<option>2018</option>
	                		</select>
	                	</div>
	                </div>

	                <div class="form-group">
	                	<label for="tanggal" class="col-lg-3 control-label">Bulan Laporan</label>
	                	<div class="col-lg-5">
	                		<select class="form-control">
	                			<option>Januari</option>
	                		</select>
	                	</div>
	                </div>

	                <div class="form-group">
	                	<label for="tanggal" class="col-lg-3 control-label">Tanggal Laporan Harian</label>
	                	<div class="col-lg-5">
	                		<input type="date" name="plts" class="form-control">
	                	</div>
	                </div>

	                <div class="form-group">
	                	<label for="tanggal" class="col-lg-3 control-label">Pilih jenis laporan untuk di export</label>
	                	<div class="col-lg-5">
	                		<select class="form-control">
	                			<option>Laporan Performance Site</option>
	                			<option>Laporan Error/Warning Site</option>
	                		</select>
	                	</div>
	                </div>
	                
	                <div class="form-group">
	                  <div class="col-lg-offset-3 col-lg-5">
	                    <button type="submit" class="btn btn-success">Report Excel</button>
	                  </div>
	                </div>
	              </form>
              </div>  
            </div>
          </div>
        </div>
      </div>
    </div>
    
	</section>
</section>
