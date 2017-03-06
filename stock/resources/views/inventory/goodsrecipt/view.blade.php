@extends("admaintem")
@section("content")
  <section class="content-header">
    <h1>
      Good Recipt
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{route('index')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active">Good Recipt</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <a class="btn btn-success" href="" title="Create Good Recipt" data-toggle="tooltip" data-placement="top"><i class="fa fa-plus-circle"></i> <b>Add</b></a>
      </div>
    </div><br>
  <div class="box box-info">
    <div class="box-header with-border">
      <span class="fa fa-list"></span>
      <h3 class="box-title">List of Good Recipt</h3>
    </div>
    <div class="box-body">
      <table class="table table-striped table-condensed text-center grlst">
        <thead>
          <tr>
            <th style="width:20%">Doc No.</th>
            <th style="width:20%">Date</th>
            <th>Detail</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($lstdata as $value)
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
  </section>
  <div class="modal fade shrs" tabindex="-1" role="dialog" aria-labelledby="Show Detail">
    <form class="" action="index.html" method="post">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel"><span class="fa fa-info-circle"></span> <b>Good Recipt</b></h4>
        </div>
        <div class="modal-body shrs_cont">
        </div>
      </div>
    </div>
    </form>
  </div>
@endsection
@section('script')
  <script>
  $(function() {
    var grlst=$(".grlst").DataTable({
      responsive: true
    });
    $(".grlst tbody").on('click', 'tr', function(event) {
      event.preventDefault();
      var iddoc=grlst.row( this ).data()[0];
      $.get("{{route('goodsreceipt_detail')}}",{id:iddoc}).done(function(data) {
        $(".shrs_cont").html(data);
        $('.shrs').modal('show');
        $(".tadsp").DataTable({
          responsive: true,
          info: false
        });
      });
    });
  });
  </script>
@endsection
