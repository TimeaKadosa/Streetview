
<h3>Financiële informatie</h3><hr>

<div class="col-lg-5 col-sm-5">


	<div class="form-group">			
		{!! Form::label('name', 'Rekeningnummer') !!}
		{!! Form::text('companyAccountNumber', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">			
		{!! Form::label('name', 'Jaartal meest recente gegevens') !!}
		{!! Form::date('companyYearMostRecentData', null, ['class' => 'form-control','id' => 'latestMeasurement', 'onload' => "currentDate()"])!!}
	</div>


</div>

<div class="col-lg-5 col-sm-5">

	<div class="form-group">			
		{!! Form::label('name', 'BTW nummer') !!}
		{!! Form::text('companyTaxNumber', null, ['class' => 'form-control']) !!}
	</div>


	

	<div class="form-group row">
		
		<div class="col-sm-5">
			{!! Form::label('name', 'Kredietwaardigheid') !!}
		</div>

		<div class="col-sm-7">
				
			{!! Form::hidden('companySolvency') !!}
			{!! Form::radio('companySolvency','1',null, ['id' => 'companySolvencyJa','class' => 'flat-blue']) !!}&nbsp
			{!! Form::label('companySolvencyJa', 'Ja') !!}
				&nbsp;

			{!! Form::radio('companySolvency', '0',null, ['id' => 'companySolvencyNee','class' => 'flat-blue']) !!}&nbsp
			{!! Form::label('companySolvencyNee', 'Nee') !!}

		</div>
	</div>

	

</div>


