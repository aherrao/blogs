<div class='col-xs-12'>
	<div class="form-group col-xs-6">
		{!! Form::label('title', 'Title:', ['class' => 'control-label col-xs-4']) !!}
		<div class="col-xs-8">
			{!! Form::text('title', null, ['class' => 'form-control']) !!}
		</div>
	</div>
</div>
<div class='col-xs-12'>
	<div class="form-group col-xs-6">
		{!! Form::label('description', 'Description:', ['class' => 'control-label col-xs-4']) !!}
		<div class="col-xs-8">
			{!! Form::textarea('description', null, ['class' => 'form-control']) !!}
		</div>
	</div>
</div>