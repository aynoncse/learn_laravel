<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Students View</title>
	<link rel="stylesheet" href="">

	<!-- FONT AWESOME -->

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

	<!-- Bootstrap Core CSS file -->
	<link rel="stylesheet" href="{{asset('/public/css/app.css') }}">

	<!-- Override CSS file - add your own CSS rules -->
	<link rel="stylesheet" href="{{asset('/public/css/styles.css')}}">


	<!-- Data Table  Files-->

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.5/css/fixedHeader.bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">


	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>

	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>


	
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>


	<script type="text/javascript" class="init">

		$(document).ready(function() {
			var table = $('#example').DataTable( {
				responsive: true
			} );

			new $.fn.dataTable.FixedHeader( table );
		} );

	</script>
</head>
<body>
	<div class="container">
			<table id="example" class="table table-striped table-dark table-bordered table-hover" style="width:100%;">
			<thead>
				<tr>
					<th class="col-md-3">Name</th>
					<th class="col-md-3">Email</th>
					<th class="col-md-3">Mobile</th>
					<th class="col-md-1">Status</th>
					<th class="col-md-2">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($students as $student)
					<tr>
						<td>@php echo $student->name @endphp</td>
						<td>@php echo $student->email @endphp</td>
						<td>@php echo $student->mobile @endphp</td>
						<td>@php echo $student->status==1? 'Active':NULL @endphp</td>
						<td>
							
							<a class="btn btn-primary" href="?action=edit&id=@php echo $student->id @endphp"><i class="fa fa-edit"></i> Edit</a>
							<a class="btn btn-danger btn-flat" href="?action=delete&id=@php echo $student->id @endphp"><i class="fa fa-trash-alt"></i> Delete</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		
	</div>
</body>
</html>