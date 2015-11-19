@extends('layout.default')

@section('title')
	<title>รายการนัดแพทย์</title>
@endsection

@section('content')
	
	<div class="container">
		<div class="row">
			<a href="/dashboard"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> กลับ dashboard </a>
			@if($role == 'patient')
			<h2>รายการนัดแพทย์</h2>
			@elseif($role == 'doctor')
			<h2>รายการนัดแพทย์ผู้ป่วย</h2>
			@endif
            <br>
			@if(!empty($appointments))
				@if($role == 'patient')
					<table class="table" id="appointments">
						<thead>
							<tr>
								<th>#</th>
								<th>วัน</th>
								<th>เวลา</th>
								<th>แพทย์</th>
								<th>สาขา</th>
							</tr>
						</thead>
						<tbody>
							
							@foreach($appointments as $index => $app)
							<tr>
								<td>{{$index+1}}.</td>															
								<td>{{$app->app_date}}</td>
								<td>{{$app->app_time}}</td>
								<td>{{$app->doc_name}}</td>
								<td>{{$app->dep_name}}</td>
							</tr>
							@endforeach
							
						</tbody>
					</table>		
				@elseif($role == 'doctor')		
					<table class="table" id="appointments">
						<thead>
							<tr>
								<th>#</th>
								<th>วัน</th>
								<th>เวลา</th>
								<th>ชื่อผู้ป่วย</th>
							</tr>
						</thead>
						<tbody>
							
							@foreach($appointments as $index => $app)
							<tr>
								<td>{{$index+1}}.</td>															
								<td>{{$app->app_date}}</td>
								<td>{{$app->app_time}}</td>
								<td>{{$app->pat_name}}</td>								
							</tr>
							@endforeach
							
						</tbody>
					</table>
				@endif
			@else
				<h2>ท่านไม่มีรายการนัดแพทย์ในขณะนี้</h2>
				<h3>ท่านสามารถนัดแพทย์ได้<a href="/appointment">ที่นี่</a></h3>
			@endif
		</div>
	</div>


@endsection

@stop