<h3>Bereikbaarheid</h3><hr>

<div class="col-lg-5 col-sm-5">

	<div class="form-group">			
		{!! Form::label('name', 'Telefoonnummer ') !!}
		{!! Form::text('companyPhone', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">			
		{!! Form::label('name', 'Telefoonnummer  1') !!}
		{!! Form::text('companyPhone1', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">			
		{!! Form::label('name', 'Telefoonnummer 1 (buitenland)') !!}
		{!! Form::text('companyPhone1Country', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">			
		{!! Form::label('name', 'Telefoonnummer 2') !!}
		{!! Form::text('companyPhone2', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">			
		{!! Form::label('name', 'Telefoonnummer 2 (buitenland)') !!}
		{!! Form::text('companyPhone2Country', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">			
		{!! Form::label('name', 'Telefoonnummer 3') !!}
		{!! Form::text('companyPhone3', null, ['class' => 'form-control']) !!}
	</div>
	
	<div class="form-group">			
		{!! Form::label('name', 'Telefoonnummer 3 (buitenland') !!}
		{!! Form::text('companyPhone3Country', null, ['class' => 'form-control']) !!}
	</div>
	
</div>

<div class="col-lg-5 col-sm-5">	

	<div class="form-group">

		{!! Form::label('name', 'Telefonish bereikbaar van tot') !!}
		{!! Form::text('phoneOpenFromTo', null, ['class' => 'form-control']) !!}

	</div>

	<div class="form-group row">
		
		<div class="col-sm-5">
			{!! Form::label('name', 'Showroom/Winkel') !!}
		</div>
		<div class="col-sm-7">
				
			{!! Form::hidden('showroom') !!}
			{!! Form::radio('showroom','1',null, ['id' => 'showroomJa','class' => 'flat-blue']) !!}&nbsp;
			{!! Form::label('showroomJa', 'Ja') !!}
				&nbsp;
			{!! Form::radio('showroom', '0',null, ['id' => 'showroomNee','class' => 'flat-blue']) !!}&nbsp
			{!! Form::label('showroomNee', 'Nee') !!}
		
		</div>
	</div>

	<div class="form-group">			
		{!! Form::label('name', 'Showroom open van tot') !!}
		{!! Form::text('showroomOpenFromTo', null,  ['class' => 'form-control']) !!}
	</div>
</br>

	<div class="form-group">
			{!! Form::label('name', 'Showroom open op :') !!}
	</div>


		
	<div class="form-group row">

		<div class="col-sm-5">
			{!! Form::label('name', 'Maandag') !!}
		</div>
		<div class="col-sm-7">

			{!! Form::hidden('showroomOpenMon') !!}
			{!! Form::radio('showroomOpenMon','1',null, ['id' => 'showroomOpenMonJa','class' => 'flat-blue']) !!}&nbsp;
			{!! Form::label('showroomOpenMonJa', 'Ja') !!}
			&nbsp;
			{!! Form::radio('showroomOpenMon', '0',null, ['id' => 'showroomOpenMonNee','class' => 'flat-blue']) !!}&nbsp
			{!! Form::label('showroomOpenMonNee', 'Nee') !!}

		</div>

	</div>	

	<div class="form-group row">

		<div class="col-sm-5">
			{!! Form::label('name', 'Dinsdag') !!}
		</div>
		<div class="col-sm-7">

			{!! Form::hidden('showroomOpenTue') !!}
			{!! Form::radio('showroomOpenTue','1',null, ['id' => 'showroomOpenTueJa','class' => 'flat-blue']) !!}&nbsp;
			{!! Form::label('showroomOpenTueJa', 'Ja') !!}
				&nbsp;
			{!! Form::radio('showroomOpenTue', '0',null, ['id' => 'showroomOpenTueNee','class' => 'flat-blue']) !!}&nbsp
			{!! Form::label('showroomOpenTueNee', 'Nee') !!}
		</div>

	</div>	

	<div class="form-group row">
		<div class="col-sm-5">
			{!! Form::label('name', 'Woensdag') !!}
		</div>
		<div class="col-sm-7">

			{!! Form::hidden('showroomOpenWed') !!}
			{!! Form::radio('showroomOpenWed','1',null, ['id' => 'showroomOpenWedJa','class' => 'flat-blue']) !!}&nbsp;
			{!! Form::label('showroomOpenWedJa', 'Ja') !!}
				&nbsp;
			{!! Form::radio('showroomOpenWed', '0',null, ['id' => 'showroomOpenWedNee','class' => 'flat-blue']) !!}&nbsp
			{!! Form::label('showroomOpenWedNee', 'Nee') !!}

		</div>
	</div>	

	<div class="form-group row">

		<div class="col-sm-5">
			{!! Form::label('name', 'Donderdag') !!}
		</div>
		<div class="col-sm-7">

			{!! Form::hidden('showroomOpenThu') !!}
			{!! Form::radio('showroomOpenThu','1',null, ['id' => 'showroomOpenThuJa','class' => 'flat-blue']) !!}&nbsp;
			{!! Form::label('showroomOpenThuJa', 'Ja') !!}
				&nbsp;
			{!! Form::radio('showroomOpenThu', '0',null, ['id' => 'showroomOpenThuNee','class' => 'flat-blue']) !!}&nbsp
			{!! Form::label('showroomOpenThuNee', 'Nee') !!}


		</div>

	</div>	

	<div class="form-group row">

		<div class="col-sm-5">
			{!! Form::label('name', 'Vrijdag') !!}
		</div>
		<div class="col-sm-7">

			{!! Form::hidden('showroomOpenFri') !!}
			{!! Form::radio('showroomOpenFri','1',null, ['id' => 'showroomOpenFriJa','class' => 'flat-blue']) !!}&nbsp;
			{!! Form::label('showroomOpenFriJa', 'Ja') !!}
				&nbsp;
			{!! Form::radio('showroomOpenFri', '0',null, ['id' => 'showroomOpenFriNee','class' => 'flat-blue']) !!}&nbsp
			{!! Form::label('showroomOpenFriNee', 'Nee') !!}

		</div>

	</div>	

	<div class="form-group row">

		<div class="col-sm-5">
			{!! Form::label('name', 'Zaterdag') !!}
		</div>
		<div class="col-sm-7">

			{!! Form::hidden('showroomOpenSat') !!}
			{!! Form::radio('showroomOpenSat','1',null, ['id' => 'showroomOpenSatJa','class' => 'flat-blue']) !!}&nbsp;
			{!! Form::label('showroomOpenSatJa', 'Ja') !!}
				&nbsp;
			{!! Form::radio('showroomOpenSat', '0',null, ['id' => 'showroomOpenSatNee','class' => 'flat-blue']) !!}&nbsp
			{!! Form::label('showroomOpenSatNee', 'Nee') !!}

		</div>

	</div>	
	
	<div class="form-group row">

		<div class="col-sm-5">
			{!! Form::label('name', 'Zondag') !!}
		</div>
		<div class="col-sm-7">

			{!! Form::hidden('showroomOpenSun') !!}
			{!! Form::radio('showroomOpenSun','1',null, ['id' => 'showroomOpenSunJa','class' => 'flat-blue']) !!}&nbsp;
			{!! Form::label('showroomOpenSunJa', 'Ja') !!}
				&nbsp;
			{!! Form::radio('showroomOpenSun', '0',null, ['id' => 'showroomOpenSunNee','class' => 'flat-blue']) !!}&nbsp
			{!! Form::label('showroomOpenSunNee', 'Nee') !!}

		</div>

	</div>

</div>

