@extends("admaintem")
@section("content")
<section class="content-header">
  <h1>
    Item Master
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{route('index')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active">Item Master</li>
  </ol>
</section>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <button type="button" class="btn btn-success" data-toggle="modal" data-target=".additem"><span class="fa fa-plus-circle"></span> <b>Add item</b></button>
    </div>
  </div><br>
<div class="box box-info">
  <div class="box-header with-border">
    <span class="fa fa-list"></span>
    <h3 class="box-title">List of item</h3>
  </div>
  <div class="box-body">
    <table class="table table-striped table-condensed text-center itlst">
      <thead>
        <tr>
          <th>Item Code</th>
          <th>Description</th>
          <th>Status</th>
          <th>On Hand</th>
          <th>Committed</th>
          <th>Pack Size</th>
          <th>Uom</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($listdata as $data)
        <tr>
          <td>{{$data->code}}</td>
          <td>{{$data->descript}}</td>
          <td>{{$data->status}}</td>
          <td>{{$data->on_hand}}</td>
          <td>{{$data->commit}}</td>
          <td>{{$data->pack_size}}</td>
          <td>{{$data->uom}}</td>
          <td></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </dev>
</div>
</div>
<div class="modal fade edititem" tabindex="-1" role="dialog" aria-labelledby="Edit Item">
  <form class="edit" action="index.html" method="post">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><span class="fa fa-pencil"></span> <b>Edit Item</b></h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-xs-12">
            <div class="form-group">
              <label for="Description">Description</label>
              <input type="input" class="form-control" id="Description" placeholder="Description" maxlength="300" required>
            </div>
          </div>
          <div class="col-md-9 col-xs-12">
            <div class="form-group">
              <label for="mmt">Minimum Item</label>
              <input type="number" class="form-control" id="mmt" placeholder="Minimum Item" min="0" required>
            </div>
          </div>
          <div class="col-md-3 col-xs-12">
            <div class="form-group">
              <label for="Status">Status</label>
              <select class="form-control" id="Status" required>
                <option value="ac" selected>Active</option>
                <option value="ic">Inactive</option>
              </select>
            </div>
          </div>
          <div class="col-md-9 col-xs-12">
            <div class="form-group">
              <label for="Pack_Size">Pack Size</label>
              <input type="number" class="form-control" id="Pack_Size" placeholder="Pack Size" min="0" required>
            </div>
          </div>
          <div class="col-md-3 col-xs-12">
            <div class="form-group">
              <label for="uom">UOM</label>
              <select class="form-control" id="uom" required>
                <option value="ชิ้น" selected>ชิ้น</option>
                <option value="หีบ">หีบ</option>
                <option value="ลัง">ลัง</option>
              </select>
            </div>
          </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-default" data-toggle='tooltip' data-placement='top' title='Reset Form'><span class="fa fa-repeat"></span> <b>Reset</b></button>
        <button type="submit" class="btn btn-success" data-toggle='tooltip' data-placement='top' title='Save This Item'><span class="fa fa-floppy-o"></span> <b>Save</b></button>
      </div>
    </div>
  </div>
  </form>
</div>
<div class="modal fade additem" tabindex="-1" role="dialog" aria-labelledby="Add Item">
  <form class="add" action="index.html" method="post">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><span class="fa fa-plus-circle"></span> <b>Add Item</b></h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-xs-12">
            <div class="form-group">
              <label for="Description">Description</label>
              <input type="input" class="form-control" id="Description" placeholder="Description" maxlength="300" required>
            </div>
          </div>
          <div class="col-md-9 col-xs-12">
            <div class="form-group">
              <label for="mmt">Minimum Item</label>
              <input type="number" class="form-control" id="mmt" placeholder="Minimum Item" min="0" required>
            </div>
          </div>
          <div class="col-md-3 col-xs-12">
            <div class="form-group">
              <label for="Status">Status</label>
              <select class="form-control" id="Status" required>
                <option value="ac" selected>Active</option>
                <option value="ic">Inactive</option>
              </select>
            </div>
          </div>
          <div class="col-md-9 col-xs-12">
            <div class="form-group">
              <label for="Pack_Size">Pack Size</label>
              <input type="number" class="form-control" id="Pack_Size" placeholder="Pack Size" min="0" required>
            </div>
          </div>
          <div class="col-md-3 col-xs-12">
            <div class="form-group">
              <label for="uom">UOM</label>
              <select class="form-control" id="uom" required>
                <option value="ชิ้น" selected>ชิ้น</option>
                <option value="หีบ">หีบ</option>
                <option value="ลัง">ลัง</option>
              </select>
            </div>
          </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-default" data-toggle='tooltip' data-placement='top' title='Reset Form'><span class="fa fa-repeat"></span> <b>Reset</b></button>
        <button type="submit" class="btn btn-success" data-toggle='tooltip' data-placement='top' title='Save This Item'><span class="fa fa-floppy-o"></span> <b>Save</b></button>
      </div>
    </div>
  </div>
  </form>
</div>
</section>
@endsection
@section('script')
  <script>
  $(function() {
    var btn="<div class='btn-group' role='group'>";
    btn+="<button class='btn btn-primary edit' data-toggle='modal' title='Edit' data-target='.edititem'><span class='fa fa-pencil'></span></button>";
    btn+="<button class='btn btn-danger del' data-toggle='tooltip' data-placement='top' title='Delete'><span class='fa fa-trash'></span></button>";
    btn+="</div>";
    var table=$(".itlst").DataTable({
      responsive: true,
      "columnDefs": [{
        "targets": -1,
        "data": null,
        "defaultContent": btn
    }]
    });
    $('.itlst tbody').on( 'click', '.edit', function () {
    var data = table.row( $(this).parents('tr') ).data();
    console.log(data[0]);
  });
  $('.itlst tbody').on( 'click', '.del', function () {
  var data = table.row( $(this).parents('tr') ).data();
  swal({
    title: 'Are you sure?',
    text: "Do you want to delete this item!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Yes, delete it!',
    cancelButtonText: 'No, cancel!',
    confirmButtonColor: '#d33'
  }).then(function() {
    swal('Deleted!','Your item has been deleted.','success');
  });
});
  });
  </script>
@endsection
