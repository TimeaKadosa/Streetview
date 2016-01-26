
<h3>Technique</h3><hr>
  
<div class="col-lg-6 col-sm-6">

	<div class="form-group">			
		{!! Form::label('name', 'Platform') !!}
		{!! Form::text('techPlatform', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">			
		{!! Form::label('name', 'Domein autoriteit') !!}
		{!! Form::text('techDomainAuthority', null, ['class' => 'form-control']) !!}
	</div>

</div>

<div class="col-lg-6 col-sm-6">

	<div class="form-group">			
		{!! Form::label('name', 'Alexa Ranking') !!}
		{!! Form::text('techAlexaRanking', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">			
		{!! Form::label('name', 'Google Page Speed') !!}
		{!! Form::text('techGooglePageSpeed', null, ['class' => 'form-control']) !!}
	</div>
	
</div>	

<div class="col-lg-6 col-sm-6">

	<div class="form-group row">
		
		<div class="col-sm-5">		
			{!! Form::label('name', 'Geoptimaliseerd voor mobile') !!}
		</div>
		
		<div class="col-sm-7">

			{!! Form::hidden('techOptimized') !!}
			{!! Form::radio('techOptimized','1',null, ['id' => 'techOptimizedJa','class' => 'flat-blue']) !!}&nbsp
			{!! Form::label('techOptimizedJa', 'Ja') !!}
				&nbsp;

			{!! Form::radio('techOptimized', '0',null, ['id' => 'techOptimizedNee','class' => 'flat-blue']) !!}&nbsp
			{!! Form::label('techOptimizedNee', 'Nee') !!}

		</div>
	</div>
	</div>

</div>





		