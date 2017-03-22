@extends('HarapanJaya.front.layout.master')
@section('content')
<div class="right_col" role="main">
	<div class="page-title">
      <div class="title_left">
        <h3>DATA PASIEN </h3>
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

	<table class="table table-striped">
      <thead>
        <tr>
          <th width="5%">#</th>
          <th>Nama Pasien</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
        </tr>
      </tbody>
    </table>
</div>
@endsection