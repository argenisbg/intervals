
<!doctype html>
<html lang="en">
  <head>
  	<title>Cloudbeds Test Task</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/offcanvas/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.3/examples/offcanvas/offcanvas.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
	<link href="js/editor/css/editor.dataTables.min.css" rel="stylesheet">
	<link href="https://fengyuanchen.github.io/datepicker/css/datepicker.css" rel="stylesheet" type="text/css" />
  </head>
  <body class="bg-light">
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  <a class="navbar-brand mr-auto mr-lg-0" href="#">Cloudbeds Test Task</a>
  <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>

<main role="main" class="container">
  <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded shadow-sm">
    <div class="lh-100">
      <h6 class="mb-0 text-white lh-100">Intervals</h6>
      <small>by Argenis Barraza Guillén</small>
    </div>
  </div>

  <div class="my-3 p-3 bg-white rounded shadow-sm">
    <div class="">
		<a href="javascript:;" onclick="clearAllData();" class="btn btn-md btn-warning mb-3">Clear all data</a>
		<form id="createInterval" action="" method="post" autocomplete="off">
		<div class="row">
			<div class="col-md-3">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">Price</span>
					</div>
					<input type="number" id="price" placeholder="0.00" class="form-control" required>
				</div>
			</div>
			<div class="col-md-3">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">Start date</span>
					</div>
					<input type="text" id="start_date" data-toggle="datepicker" placeholder="yyyy-mm-dd" pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" class="form-control start-date" required>
				</div>
			</div>
			<div class="col-md-3">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">End date</span>
					</div>
					<input type="text" id="end_date" data-toggle="datepicker" placeholder="yyyy-mm-dd" pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" class="form-control end-date" required>
				</div>
			</div>
			<div class="col-md-3">
				<input type="submit" name="save" value="Save" class="btn btn-primary btn-md btn-block">
			</div>
		</div>
		</form>
    </div>
	<div class="mt-3">
		<table id="grid-data" class="table">
			<thead>
				<tr>
					<th data-column-id="id">Id</th>
					<th data-column-id="price">Price</th>
					<th data-column-id="start_date" data-order="desc">Start Date</th>
					<th data-column-id="end_date">End Date</th>
					<th data-column-id="commands" data-formatter="commands" data-sortable="false" width="150">Commands</th>
				</tr>
			</thead>
			<tbody>
				
			</tbody>
		</table>
	</div>
  </div>


</main>
<div id="editModal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
	<form action="" id="updateIntervalForm" method="post" autocomplete="off">
      <div class="modal-header">
        <h5 class="modal-title">Update Interval</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<div class="row">
			<div class="col-md-12">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text">Price &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
					</div>
					<input type="number" id="modal_price" placeholder="0.00" class="form-control" required>
				</div>
			</div>
			<div class="col-md-12">
				<div class="input-group mt-3">
					<div class="input-group-prepend">
						<span class="input-group-text">Start date</span>
					</div>
					<input type="text" id="modal_start_date" data-toggle="datepickerModal" placeholder="yyyy-mm-dd" pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" class="form-control start-date" required>
				</div>
			</div>
			<div class="col-md-12">
				<div class="input-group mt-3">
					<div class="input-group-prepend">
						<span class="input-group-text">End date &nbsp;</span>
					</div>
					<input type="text" id="modal_end_date" data-toggle="datepickerModal" placeholder="yyyy-mm-dd" pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" class="form-control end-date" required>
				</div>
			</div>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="updateInterval" class="btn btn-primary" value="Save changes">
		<input type="hidden" name="id" id="modal_id">
      </div>
	  </form>
    </div>
  </div>
</div>

<div id="removeModal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
	<form action="" id="deleteIntervalForm" method="post">
      <div class="modal-header">
        <h5 class="modal-title">Delete Interval</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<h4 class="text-center">Are you sure to delete this interval?</h4>
		<div class="row">
			<div class="col-md-12">
				<div class="input-group">
					<input type="text" id="modal_delete_id" placeholder="1" class="form-control" disabled>
				</div>
			</div>
			<div class="col-md-12">
				<div class="input-group mt-3">
					<input type="number" id="modal_delete_price" placeholder="0.00" class="form-control" disabled>
				</div>
			</div>
			<div class="col-md-12">
				<div class="input-group mt-3">
					<input type="text" id="modal_delete_start_date" data-toggle="datepicker" placeholder="yyyy-mm-dd" class="form-control start-date" disabled>
				</div>
			</div>
			<div class="col-md-12">
				<div class="input-group mt-3">
					<input type="text" id="modal_delete_end_date" data-toggle="datepicker" placeholder="yyyy-mm-dd" class="form-control end-date" disabled>
				</div>
			</div>
		</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <input type="submit" name="updateInterval" class="btn btn-danger" value="Delete">
		<input type="hidden" name="id" id="modal_id">
      </div>
	  </form>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://getbootstrap.com/docs/4.3/examples/offcanvas/offcanvas.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="js/editor/js/dataTables.editor.min.js"></script>
<script src="https://fengyuanchen.github.io/datepicker/js/datepicker.js" type="text/javascript"></script>


<script>

var editor; // use a global for the submit and return data rendering in the examples
 
$(document).ready(function() {

	$('[data-toggle="datepicker"]').datepicker({
        autoHide: true,
		format: 'yyyy-mm-dd'
	});
	
	$('[data-toggle="datepickerModal"]').datepicker({
        autoHide: true,
		format: 'yyyy-mm-dd',
		zIndex:10000
    });
		
    editor = new $.fn.dataTable.Editor( {
        "ajax": "http://localhost/~argenis/cloudbeds/interval",
        "table": "#grid-data",
        "fields": [ 
			{
                "label": "Id:",
                "name": "id"
            },{
                "label": "Price:",
                "name": "price"
            }, {
                "label": "Start Date:",
                "name": "start_date"
            }, {
                "label": "End Date:",
                "name": "end_date"
            }
        ]
    } );
 
    $('#grid-data').DataTable( {
        ajax: "http://localhost/~argenis/cloudbeds/interval",
        columns: [
			{ data: "id" },
            { data: "price" },
            { data: "start_date" },
            { data: "end_date" },
            {
                data: null,
				render: function(data){
   					return '<a href="javascript:;" id="interval-'+data['id']+'" onclick="updateInterval('+data['id']+')" data-toggle="modal" data-target="#editModal" data-id="'+data['id']+'" data-price="'+data['price']+'" data-start_date="'+data['start_date']+'" data-end_date="'+data['end_date']+'"  class="btn btn-primary">Edit</a> <a  id="remove-interval-'+data['id']+'" data-toggle="modal" data-target="#removeModal" data-id="'+data['id']+'" data-price="'+data['price']+'" data-start_date="'+data['start_date']+'" data-end_date="'+data['end_date']+'" class="btn btn-danger" href="javascript:;" onclick="deleteInterval('+data['id']+')">Delete</a>';
				}
            }
		],
		"order": [[ 2, "asc" ]],
		"searching" : false,
		"autoWidth" : true,
	});
	
	$("#createInterval").submit(function(e){
		e.preventDefault();
		var price = $("#price").val();
		var start_date = $("#start_date").val();
		var end_date = $("#end_date").val();
    
        var request = $.ajax({
            url: "http://localhost/~argenis/cloudbeds/interval",
            method: 'POST',
            data: {price:price, start_date:start_date, end_date:end_date},
            dataType: 'json'
        });

        request.done(function(response) {
			location.reload();             
        });

        request.fail(function(jqXHR, textStatus) {
            alert("An error ocurr: " + textStatus);
        });
	});

	$("#updateIntervalForm").submit(function(e){
		e.preventDefault();
		var id = $("#modal_id").val();
		var price = $("#modal_price").val();
		var start_date = $("#modal_start_date").val();
		var end_date = $("#modal_end_date").val();
    
        var request = $.ajax({
            url: "http://localhost/~argenis/cloudbeds/interval/"+id,
						method: 'PUT',
						contentType: 'application/json',
            data: {price:price, start_date:start_date, end_date:end_date},
						dataType: 'json'
        });

        request.done(function(response) {
			location.reload();             
        });

        request.fail(function(jqXHR, textStatus) {
            alert("An error ocurr: " + textStatus);
        });
	});

	$("#deleteIntervalForm").submit(function(e){
		e.preventDefault();
		var id = $("#modal_delete_id").val();
    
        var request = $.ajax({
            url: "http://localhost/~argenis/cloudbeds/interval/"+id,
						method: 'DELETE',
						headers: {
            'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8'
          	},
            data: {},
            dataType: 'json'
        });

        request.done(function(response) {
			location.reload();             
        });

        request.fail(function(jqXHR, textStatus) {
            alert("An error ocurr: " + textStatus);
        });
	});

	

});

function updateInterval(id){
	var interval = document.getElementById('interval-'+id);
	var id = interval.dataset.id;
	var price = interval.dataset.price;
	var start_date = interval.dataset.start_date;
	var end_date = interval.dataset.end_date;
	$("#modal_id").val(id);
	$("#modal_price").val(price);
	$("#modal_start_date").val(start_date);
	$("#modal_end_date").val(end_date);
}

function deleteInterval(id){
	var interval = document.getElementById('interval-'+id);
	var id = interval.dataset.id;
	var price = interval.dataset.price;
	var start_date = interval.dataset.start_date;
	var end_date = interval.dataset.end_date;
	$("#modal_delete_id").val(id);
	$("#modal_delete_price").val(price);
	$("#modal_delete_start_date").val(start_date);
	$("#modal_delete_end_date").val(end_date);
}

function clearAllData(){
	var request = $.ajax({
		url: "http://localhost/~argenis/cloudbeds/interval/clear",
		method: 'POST',
		data: {},
		dataType: 'json'
	});

	request.done(function(response) {
		location.reload();             
	});

	request.fail(function(jqXHR, textStatus) {
		alert("An error ocurr: " + textStatus);
	});
}



</script>
</body>
</html>
