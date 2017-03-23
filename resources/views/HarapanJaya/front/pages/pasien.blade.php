<div id="app">
  <div class="page-title">
    <div class="title_left">
      <h3>DATA PASIEN</h3>
    </div>
    <div class="title_right">
      <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for...">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>
  </div>
<div class="col-md-12">
  <div class="x_panel">
    <div class="x_content">
    	<table class="table table">
            <thead>
                <tr>
                  <th>Nomer Registrasi</th>
                  <th>Nomer KK</th>
                  <th>Nomer KTP</th>
    	            <th>Nama Lengkap</th>
                  <th><a href="" class="btn btn-primary btn-xs pull-right">Add Pasien</a></th>
                </tr>
              </thead>
              <tbody>

                <tr v-for="pasien in responseData.pasien">
                  	<td>@{{ pasien.no_rim }}</td>
                    <td>@{{ pasien.no_kk }}</td>
                    <td>@{{ pasien.no_ktp }}</td>
                    <td>@{{ pasien.nama_pasien }}</td>
                </tr>
            </tbody>
        </table>
      </div>
    </div>
  </div>
</div>