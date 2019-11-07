<!--main content start-->

<section id="main-content">

  <section class="wrapper">

		

  	<div class="row">

      <div class="col-lg-12">

        <h3 class="page-header"><i class="fa fa-laptop"></i> Monitoring</h3>

        <ol class="breadcrumb">

          <li><i class="fa fa-laptop"></i>Monitoring</li>

        </ol>

      </div>

    </div>

		

		<div class="row">

      <div class="col-md-12">

        <div class="panel panel-default">

          <div class="panel-heading">

            <h2><i class="fa fa-globe"></i><strong>Pilih Data Monitoring</strong></h2>

          </div>



          <div class="panel-body">

            <div class="row">

              <div class="col-md-12">

              	<form class="form-horizontal" method="post" action="Monitoring">

	                <div class="form-group">

	                  <label for="plts" class="col-lg-2 control-label">Perangkat</label>

	                  <div class="col-lg-10">

	                    <select class="form-control m-bot15" name="device">
												<?php 
													foreach($devices as $device){
														echo "<option value=".$device['device_code'].">".$device["device_code"]." - ".$device['province']."</option>";
													} 
												?>
                    	</select>

	                  </div>

	                </div>

	                <div class="form-group">

	                  <label for="tanggal" class="col-lg-2 control-label">Pilih Tanggal</label>

	                  <div class="col-lg-10">

	                    <input type="date" name="tanggal" class="form-control">

	                  </div>

	                </div>

	                

	                <div class="form-group">

	                  <div class="col-lg-offset-2 col-lg-5">

	                    <button type="submit" class="btn btn-success">Tampilkan Report dan Grafik</button>

	                  </div>



	                  <div class="col-lg-5" align="right">

	                    <button type="button" onclick="location.href='Tambah_Perangkat';" class="btn btn-primary">Tambah Perangkat</button>

	                  </div>



	                </div>

	              </form>

              </div>  

            </div>

          </div>

        </div>

      </div>

    </div>



    <div class="row">

      <div class="col-md-12">

        <div class="panel panel-default">

          <div class="panel-heading">

            <h2><i class="fa fa-file-text-o"></i><strong>Data Monitoring</strong></h2>

          </div>

          <div class="panel-body">

            <div class="row">

              <div class="col-md-12">

              	

              	<!--tab nav start-->

		            <section class="panel">

		              <header class="panel-heading tab-bg-primary">

		                <ul class="nav nav-tabs">

		                  <li class="active">

		                    <a data-toggle="tab" href="#rekapitulasi">Rekapitulasi</a>

		                  </li>

		                  <li class="">

		                    <a data-toggle="tab" href="#inverter">Inverter Status</a>

		                  </li>

		                  <li class="">

		                    <a data-toggle="tab" href="#charger">Solar Charger Status</a>

		                  </li>

		                </ul>

		              </header>

		              <div class="panel-body">

		                <div class="tab-content">

		                  <div id="rekapitulasi" class="tab-pane active">

		                    

		                  	<div class="row">

								          <div class="col-sm-8">

								            <section class="panel">

								              <header class="panel-heading no-border">

								                Energi yang dihasilkan tanggal ...

								              </header>



								              <table class="table table-bordered">

								                <thead>

								                  <tr>

								                    <th colspan="2">PV</th>

								                    <th colspan="2">Baterry</th>

								                    <th colspan="2">Load</th>

								                  </tr>

								                </thead>



								                <tbody>

								                  <tr>

								                    <td>Charger 1</td>

								                    <td>: 1000 Kwh</td>

								                    <td>Inv 1</td>

								                    <td>: 1000 Volt</td>

								                    <td>Inverter 1</td>

								                    <td>: 1000 Kwh</td>

								                  </tr>



								                  <tr>

								                  	<td>Total</td>

								                    <td>: 1000 Kwh</td>

								                    <td>Inv 2</td>

								                    <td>: 1000 Volt</td>

								                    <td>Inverter 2</td>

								                    <td>: 1000 Kwh</td>

								                  </tr>



								                 	<tr>

								                    <td colspan="2"></td>

								                    <td>Total</td>

								                    <td>: 2000 Volt</td>

								                    <td>Inverter 3</td>

								                    <td>: 1000 Kwh</td>

								                  </tr>



								                  <tr>

								                    <td colspan="4"></td>

								                    <td>Total</td>

								                    <td>: 3000 Kwh</td>

								                  </tr>



								                </tbody>

								              </table>

								            </section>

								          </div>



								          <div class="col-sm-4">

								            <section class="panel">

								              <header class="panel-heading no-border">

								                

								              </header>

								              <table class="table table-bordered">

								                <thead>

								                  <tr>

								                    <th>Tipe Pesan</th>

								                    <th>Jumlah</th>

								                  </tr>

								                </thead>



								                <tbody>

								                  <tr>

								                    <td>Error</td>

								                    <td>0</td>

								                  </tr>



								                  <tr>

								                    <td>Warning</td>

								                    <td>0</td>

								                  </tr>



								                  <tr>

								                    <td>Unknown</td>

								                    <td>0</td>

								                  </tr>



								                </tbody>

								              </table>

								            </section>

								          </div>

								        </div>

		                  </div>



		                  <div id="inverter" class="tab-pane" style="padding-top: 10px;">

		                  	<div class="row">

								          <div class="col-sm-12">

								          	<header class="panel-heading tab-bg-primary">

							                <ul class="nav nav-tabs">

							                  <li class="active">

							                    <a data-toggle="tab" href="#inv1">INV 1</a>

							                  </li>

							                  <li class="">

							                    <a data-toggle="tab" href="#inv2">INV 2</a>

							                  </li>

							                  <li class="">

							                    <a data-toggle="tab" href="#inv3">INV 3</a>

							                  </li>

							                  <li class="">

							                    <a data-toggle="tab" href="#inv4">INV 4</a>

							                  </li>

							                  <li class="">

							                    <a data-toggle="tab" href="#inv5">INV 5</a>

							                  </li>

							                  <li class="">

							                    <a data-toggle="tab" href="#inv6">INV 6</a>

							                  </li>

							                  <li class="">

							                    <a data-toggle="tab" href="#inv7">INV 7</a>

							                  </li>

							                  <li class="">

							                    <a data-toggle="tab" href="#inv8">INV 8</a>

							                  </li>

							                  <li class="">

							                    <a data-toggle="tab" href="#inv9">INV 9</a>

							                  </li>

							                </ul>

							              </header>



							              <div class="panel-body">

							                <div class="tab-content">

							                	<div id="inv1" class="tab-pane active">

										              <table class="table table-bordered">

										                <thead>

										                  <tr>

										                    <th>Waktu</th>

										                    <th>Jenis Pesan</th>

										                    <th>Deskripsi</th>

										                  </tr>

										                </thead>



										                <tbody>

										                  <tr>

										                    <td>Charger 1</td>

										                    <td>: 1000 Kwh</td>

										                    <td>Inv 1</td>

										                  </tr>



										                  <tr>

										                  	<td>Total</td>

										                    <td>: 1000 Kwh</td>

										                    <td>Inv 2</td>

										                  </tr>



										                 	<tr>

										                    <td></td>

										                    <td>Total</td>

										                    <td>: 2000 Volt</td>

										                  </tr>



										                  <tr>

										                    <td></td>

										                    <td>Total</td>

										                    <td>: 3000 Kwh</td>

										                  </tr>



										                </tbody>

										              </table>

									            	</div>



									            	<div id="inv2" class="tab-pane">

										              <table class="table table-bordered">

										                <thead>

										                  <tr>

										                    <th>Waktu</th>

										                    <th>Jenis Pesan</th>

										                    <th>Deskripsi</th>

										                  </tr>

										                </thead>



										                <tbody>

										                  <tr>

										                    <td>1</td>

										                    <td></td>

										                    <td></td>

										                  </tr>



										                  <tr>

										                  	<td></td>

										                    <td></td>

										                    <td></td>

										                  </tr>



										                 	<tr>

										                    <td></td>

										                    <td></td>

										                    <td></td>

										                  </tr>



										                  <tr>

										                    <td></td>

										                    <td></td>

										                    <td></td>

										                  </tr>



										                </tbody>

										              </table>

									            	</div>



									            	<div id="inv3" class="tab-pane">

										              <table class="table table-bordered">

										                <thead>

										                  <tr>

										                    <th>Waktu</th>

										                    <th>Jenis Pesan</th>

										                    <th>Deskripsi</th>

										                  </tr>

										                </thead>



										                <tbody>

										                  <tr>

										                    <td>2</td>

										                    <td></td>

										                    <td></td>

										                  </tr>



										                  <tr>

										                  	<td></td>

										                    <td></td>

										                    <td></td>

										                  </tr>



										                 	<tr>

										                    <td></td>

										                    <td></td>

										                    <td></td>

										                  </tr>



										                  <tr>

										                    <td></td>

										                    <td></td>

										                    <td></td>

										                  </tr>



										                </tbody>

										              </table>

									            	</div>



							                </div>

							              </div>

								          </div>

								        </div>

		                  </div>





		                  <div id="charger" class="tab-pane">

		                  	<div class="row">

								          <div class="col-sm-12">

								            <section class="panel">

								              <table class="table table-bordered">

								                <thead>

								                  <tr>

								                    <th>Waktu</th>

								                    <th>Jenis Pesan</th>

								                    <th>Deskripsi</th>

								                  </tr>

								                </thead>



								                <tbody>

								                  <tr>

								                    <td>Charger 1</td>

								                    <td>: 1000 Kwh</td>

								                    <td>Inv 1</td>

								                  </tr>



								                  <tr>

								                  	<td>Total</td>

								                    <td>: 1000 Kwh</td>

								                    <td>Inv 2</td>

								                  </tr>



								                 	<tr>

								                    <td></td>

								                    <td>Total</td>

								                    <td>: 2000 Volt</td>

								                  </tr>



								                  <tr>

								                    <td></td>

								                    <td>Total</td>

								                    <td>: 3000 Kwh</td>

								                  </tr>



								                </tbody>

								              </table>

								            </section>

								          </div>

								        </div>

		                  </div>

		                </div>

		              </div>

		            </section>

		            <!--tab nav end-->



              </div>  

            </div>

          </div>

        </div>

      </div>

    </div>	



    <!-- <div class="row">

    	<div class="col-md-12">

    		<section class="panel">

          <header class="panel-heading">

            Line

          </header>

          <div class="panel-body text-center">

            <canvas id="canvas" height="300" width="450"></canvas>

          </div>

        </section>

    	</div>

    </div> -->


		<div class="row" >
			<div class="col-md-6">
				<canvas id="canvas_day_energy" width="2" height="1"></canvas>
			</div>
			<div class="col-md-6">
				<canvas id="canvas_day_power" width="2" height="1"></canvas>
			</div>

		</div class="row">
			<div class="col-md-12">
				<canvas id="canvas_year" width="2" height="1"></canvas>
			</div>
		</div>
    

	</section>

</section>