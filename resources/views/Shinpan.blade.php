{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('userId', 'UserId:') !!}
			{!! Form::text('userId') !!}
		</li>
		<li>
			{!! Form::label('shiaiCategoryId', 'ShiaiCategoryId:') !!}
			{!! Form::text('shiaiCategoryId') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}