<!--main content start-->
<section id="main-content">
  <section class="wrapper">
		
  	<div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-comment-o"></i> Pesan</h3>
        <ol class="breadcrumb">
          <li><i class="fa fa-comment-o"></i>Pesan</li>
        </ol>
      </div>
    </div>
		
		<div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2><i class="fa fa-globe"></i><strong>Pesan</strong></h2>
          </div>

          <div class="panel-body">
            <div class="row">
              <div class="col-md-12">
              	<form class="form-horizontal" method="post" action="Pesan">
	                <div class="form-group">
	                  <label for="plts" class="col-lg-2 control-label">Produk</label>
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

                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Device</th>
                        <th>Status Code</th>
                        <th>Type</th>
                        <th>Status Description</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>
                          <a href="Edit_Pesan"><i class="fa fa-pencil-square-o fa-2x"></i></a>
                          <a href="#" onclick="myFunction()"><i class="fa fa-trash-o fa-2x"></i></a>
                        </td>
                      </tr>

                    </tbody>
                  </table>

	                <div class="form-group">
	                  <div class="col-lg-5">
	                    <button type="button" onclick="location.href='Tambah_Pesan';" class="btn btn-primary">Tambah Baru</button>
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

<script>
function myFunction() {
    var txt;
    var r = confirm("Apakah Anda yakin ingin menghapus status ini?");
    if (r == true) {
        txt = "You pressed OK!";
    } else {
        txt = "You pressed Cancel!";
    }
    document.getElementById("demo").innerHTML = txt;
}
</script>