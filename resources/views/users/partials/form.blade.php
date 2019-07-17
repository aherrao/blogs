<div class='col-xs-12'>
	<div class="form-group col-xs-6">
		{!! Form::label('user_id', 'Username:', ['class' => 'control-label col-xs-4']) !!}
		<div class="col-xs-8">
			{!! Form::select('user_id', $users, null, ['class' => 'form-control']) !!}
		</div>
	</div>
	<div class="form-group col-xs-6">
	</div>
</div>
<div class='col-xs-12'>
	<div class="form-group col-xs-6">
		{!! Form::label('first_name', 'First Name:', ['class' => 'control-label col-xs-4']) !!}
		<div class="col-xs-8">
			{!! Form::text('first_name', null, ['class' => 'form-control']) !!}
		</div>
	</div>
	<div class="form-group col-xs-6">
	</div>
</div>
<div class='col-xs-12'>
	<div class="form-group col-xs-6">
		{!! Form::label('middle_name', 'Middle Name:', ['class' => 'control-label col-xs-4']) !!}
		<div class="col-xs-8">
			{!! Form::text('middle_name', null, ['class' => 'form-control']) !!}
		</div>
	</div>
	<div class="form-group col-xs-6">
	</div>
</div>

<div class='col-xs-12'>
	<div class="form-group col-xs-6">
		{!! Form::label('surname', 'Surname:', ['class' => 'control-label col-xs-4']) !!}
		<div class="col-xs-8">
			{!! Form::text('surname', null, ['class' => 'form-control']) !!}
		</div>
	</div>
	<div class="form-group col-xs-6">
	</div>
</div>

<div class='col-xs-12'>
	<div class="form-group col-xs-6">
		{!! Form::label('user_type_id', 'User Type:', ['class' => 'control-label col-xs-4']) !!}
		<div class="col-xs-8">
			{!! Form::select('user_type_id', $userTypes, null, ['class' => 'form-control']) !!}
		</div>
	</div>
	<div class="form-group col-xs-6">
	</div>
</div>