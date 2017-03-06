<div class="row">
  <div class="col-xs-6">
    <label><b>Doc No.</b></label>
    <div class="col-xs-12">
      <p>{{$title[0]->docnum}}</p>
    </div>
  </div>
  <div class="col-xs-6">
    <label><b>Date</b></label>
    <div class="col-xs-12">
      <p>{{$title[0]->date}}</p>
    </div>
  </div>
  <div class="col-xs-12">
    <label><b>Remark</b></label>
    <div class="col-xs-12">
      <p>{{$title[0]->remarks}}</p>
    </div>
  </div>
  </div>
  <div class="row">
    <div class="col-xs-12">
      <table class="table tadsp text-center">
        <thead>
          <tr>
            <th>Item No.</th>
            <th>Item Description</th>
            <th>Quantity</th>
            <th>Uom</th>
          </tr>
        </thead>
        <tbody>
          @foreach($lsttm as $value)
          <tr>
            <td>{{$value->code_item}}</td>
            <td>{{$value->descript}}</td>
            <td>{{$value->quantity}}</td>
            <td>{{$value->uom}}</td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
