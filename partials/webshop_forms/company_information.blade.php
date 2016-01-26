


<h3>Bedrijfsinformatie</h3><hr>

<div class="col-lg-5 col-sm-5">

	<div class="form-group">			
		{!! Form::label('name', 'Bedrijfsnaam') !!}
		{!! Form::text('companyName', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">			
		{!! Form::label('name', 'Adres') !!}
		{!! Form::text('companyAddress', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">			
		{!! Form::label('name', 'Postcode') !!}
		{!! Form::text('companyZipcode', null, ['class' => 'form-control']) !!}
	</div>


	<div class="form-group">			
		{!! Form::label('name', 'Woonplaats') !!}
		{!! Form::text('companyCity', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">			
		{!! Form::label("Webadres") !!}
		{!! Form::text('companyUrl', null, ['class' => 'form-control']) !!}
	</div>

	<br />

	<div class="form-group">			
		{!! Form::label('name', 'Bedrijfsvorm') !!}
		{!! Form::text('companyBusinessOrg', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">			
		{!! Form::label('name', 'KvK nummer') !!}
		{!! Form::text('companyKvkNumber', null, ['class' => 'form-control ']) !!}
	</div>

	<div class="form-group">			
		{!! Form::label('name', 'Hoofdactiviteit') !!}
		{!! Form::text('companyMainActivity', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">			
		{!! Form::label('name', 'Opgericht') !!}
		{!! Form::date('companyDateEstablished', null, ['class' => 'form-control','id' => 'currentDate', 'onload' => "currentDate()"])!!}
	</div>

	<br />

	<div class="form-group">			
		{!! Form::label('name', 'Directie') !!}
		{!! Form::text('companyManagement', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">			
		{!! Form::label('name', 'Werknemers') !!}
		{!! Form::text('companyNumEmployees', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group row">
		
		<div class="col-sm-5">
			{!! Form::label('name', 'Bedrijfstatus') !!}
		</div>
		<div class="col-sm-7">

			{!! Form::hidden('companyStatus') !!}
			{!! Form::radio('companyStatus','1', null, ['id' => 'companyStatusActive','class' => 'flat-blue']) !!}&nbsp;
			{!! Form::label('companyStatusActive', 'Actief') !!}
			&nbsp;
			{!! Form::radio('companyStatus', '0', null, ['id' => 'companyStatusInactive','class' => 'flat-blue']) !!}&nbsp;
			{!! Form::label('companyStatusInactive', 'Inactief') !!}
			&nbsp;
		</div>
	</div>

</div>

<div class="col-lg-6 col-sm-6">

	<div class="form-group col-sm-12">			
		{!! Form::label("Webshop URL") !!} 
		{!! Form::text('webshopUrl', null, ['class' => 'form-control', 'id' => 'webshopUrl']) !!}
	</div>

	<div class="form-group col-sm-12">			
		{!! Form::label("Screenshot") !!} &nbsp;&nbsp; <a href="#" id="screenshot-refresh" class="btn btn-info btn-xs"><i id="screenshot-spinner" class="fa fa-refresh fa-spin" style="display:none;"></i>&nbsp;Screenshot maken</a>
		{!! Form::hidden('webshopScreenshot', null, ['class' => 'form-control', 'id' => 'webshopScreenshot']) !!}
		<br />
		<img id="screenshot-img" class="img-thumbnail" src="" width="300" alt="Screenshot preview">
	</div>

	<div class="form-group col-sm-12">			
		{!! Form::label("Google streetview") !!} &nbsp;&nbsp; <a href="#" id="streetview-refresh" class="btn btn-info btn-xs">Streetview maken</a>
		<br />
		<div class="row">
			{!! Form::hidden('webshopStreetviewLat', null, ['class' => 'form-control', 'id' => 'sv-lat']) !!}
			{!! Form::hidden('webshopStreetviewLon', null, ['class' => 'form-control', 'id' => 'sv-lon']) !!}
			
			<div class="col-sm-2">
				Richting				
				<input
					type="text" 
					name="webshopStreetviewHeading" 
					id="sv-heading" 
					class="slider form-control"
					value="{{ isset($webshop) ? $webshop->webshopStreetviewHeading : 0 }}" 
					data-slider-min="0" 
					data-slider-max="360" 
					data-slider-step="5" 
					data-slider-value="{{ isset($webshop) ? $webshop->webshopStreetviewHeading : 0 }}" 
					data-slider-orientation="horizontal" 
					data-slider-selection="before" 
					data-slider-tooltip="show" 
					data-slider-id="red"
				>
			</div>
			<div class="col-sm-2">
				Hoogte
				<input
					type="text" 
					name="webshopStreetviewPitch" 
					id="sv-pitch" 
					class="slider form-control"
					value="{{ isset($webshop) ? $webshop->webshopStreetviewPitch : 0 }}" 
					data-slider-min="-90" 
					data-slider-max="90" 
					data-slider-step="5" 
					data-slider-value="{{ isset($webshop) ? $webshop->webshopStreetviewPitch : 0 }}" 
					data-slider-orientation="horizontal" 
					data-slider-selection="before" 
					data-slider-tooltip="show" 
					data-slider-id="red"
				>
			</div>
		</div>
		<br />
		<div id="streetview-img" class="img-thumbnail" style="width:300px; height:300px;">

		</div>
	</div>
	
	<div class="form-group col-sm-12">			
		{!! Form::label('name', 'Over ons') !!}
		{!! Form::textarea('aboutUs', null, ['class' => 'form-control ckeditor', 'id' => 'aboutUs']) !!}
	</div>

</div>
