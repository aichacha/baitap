@extends('layout.master')

@section('title', 'User page')

@section('table_page', 'User')

@section('table')
		
		<table border="1">
			<thead>
				<th>ID</th>
				<th>Name</th>
			</thead>
			<tbody>
				<td>1</td>
				<td>bc</td>
			</tbody>
			<tbody>
				<td>2</td>
				<td>cc</td>
			</tbody>

		</table>
@endsection
@section('custom')
  @include('sections.custom')
@endsection