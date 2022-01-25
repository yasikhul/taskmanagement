@extends('templates.main')
@section('container')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">DataTable with default features</h3>
    </div>
    <!-- /.card-header -->
    <input type="text">
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Date</th>
            <th>Requestor</th>
            <th>Remark</th>
            <th>QTY</th>
            <th>STOCK</th>
            <th>IT-Request</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>2022/01/29</td>
            <td>Yayang Syifa</td>
            <td>IN</td>
            <td>1</td>
            <td>10</td>
            <td ><small ><span id="text1">11902520148412602</span></small>&nbsp; <button class="btn" id="copyButton1"><i class="fas fa-copy"></i></button></td>
            <td>EDIT</td>
        </tr>
        <tr>
            <td>2</td>
            <td>2022/01/29</td>
            <td>Yayang Syifa</td>
            <td>IN</td>
            <td>1</td>
            <td>10</td>
            <td ><small ><span id="text2">1190252014841260222</span></small>&nbsp; <button class="btn" id="copyButton2"><i class="fas fa-copy"></i></button></td>
            <td>EDIT</td>
        </tr>
      </table>
    </div>
    <!-- /.card-body -->
  </div>

  <script>
      function copy(copyId) {
          var $inp = $("<input>");
          $('body').append($inp);
          var textuye =$(copyId).text();
          var uye = $inp.val("http asana"+ textuye );
          var link = uye.select();
          console.log(textuye); 
          document.execCommand("copy");
      }
      $(document).ready(function() {
          $("#copyButton1").click(
              function () {
                  copy('#text1')
                  
              });
      })
  </script>
@endsection