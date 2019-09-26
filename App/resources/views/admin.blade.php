@extends('layout.master')

@section('title')
  Admin page
@endsection


		<div>
			@section('table_name')
			   Admin
			@endsection
			

		</div>
	@section('table')
		<table border="1">
			<thead>
				<th>ID</th>
				<th>Name</th>
			</thead>
			<tbody>
				<td>1</td>
				<td>Anh</td>
			</tbody>
			<tbody>
				<td>2</td>
				<td>Tuan</td>
			</tbody>

		</table>

	@endsection