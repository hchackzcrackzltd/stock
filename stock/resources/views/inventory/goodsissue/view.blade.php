@extends("admaintem")
@section("content")
  <section class="content-header">
    <h1>
      Good Issue
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{route('index')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active">Good Issue</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <a class="btn btn-success" href="" title="Create Good Issue" data-toggle="tooltip" data-placement="top"><i class="fa fa-plus-circle"></i> <b>Add</b></a>
      </div>
    </div><br>
  <div class="box box-info">
    <div class="box-header with-border">
      <span class="fa fa-list"></span>
      <h3 class="box-title">List of Good Issue</h3>
    </div>
    <div class="box-body">
      <table class="table table-striped table-condensed text-center gslst">
        <thead>
          <tr>
            <th style="width:20%">Doc No.</th>
            <th style="width:20%">Date</th>
            <th>Detail</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($datalst as $value)
            <tr style="cursor:pointer">
              <td>{{$value->docnum}}</td>
              <td>{{$value->date}}</td>
              <td>{{$value->remarks}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </dev>
  </div>
  </div>
  <div class="modal fade edititem" tabindex="-1" role="dialog" aria-labelledby="Edit Item">
    <form class="" action="index.html" method="post">
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
                <label for="Order">Order</label>
                <input type="number" class="form-control" id="Order" placeholder="Order" min="0" required>
              </div>
            </div>
            <div class="col-md-3 col-xs-12">
              <div class="form-group">
                <label for="Pack_Size">Pack Size</label>
                <select class="form-control" id="Pack_Size" required>
                  <option value="ชิ้น" selected>ชิ้น</option>
                  <option value="หีบ">หีบ</option>
                  <option value="ลัง">ลัง</option>
                </select>
              </div>
            </div>
            <div class="col-xs-12">
              <div class="form-group">
                <label for="Status">Status</label>
                <select class="form-control" id="Status" required>
                  <option value="ac" selected>Active</option>
                  <option value="ic">Inactive</option>
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
    <form class="" action="index.html" method="post">
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
                <label for="Order">Order</label>
                <input type="number" class="form-control" id="Order" placeholder="Order" min="0" required>
              </div>
            </div>
            <div class="col-md-3 col-xs-12">
              <div class="form-group">
                <label for="Pack_Size">Pack Size</label>
                <select class="form-control" id="Pack_Size" required>
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
    var gslst=$(".gslst").DataTable({
      responsive: true
    });
    $(".gslst tbody").on('click', 'tr', function(event) {
      event.preventDefault();
      console.log(gslst.row( this ).data()[0]);
    });
  });
  </script>
@endsection
