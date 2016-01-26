<div class="box-body">

    <h1>Webshops</h1>

		<div class="form-group">			
			{!! Form::label('name', 'Webshop naam') !!}
			{!! Form::text('title', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">			
			{!! Form::label("Slug") !!}
			{!! Form::text('slug', null, ['class' => 'form-control title-slug']) !!}
		</div>


	<ul class="nav nav-tabs">

		<li class="active"><a href="#company_information" data-toggle="tab">Bedrijfsinformatie</a></li>
		<li><a href="#financial_information" data-toggle="tab">Financiële informatie</a></li>
		<li><a href="#reachability" data-toggle="tab">Bereikbaarheid</a></li>
		<li><a href="#delivery" data-toggle="tab">Levering</a></li>
		<li><a href="#warranty" data-toggle="tab">Garanties en Service</a></li>
		<li><a href="#technique" data-toggle="tab">Techniek</a></li>
		<li><a href="#rankings" data-toggle="tab">Rankings</a></li>
	  
	</ul>

	<div class="tab-content">

		<div class="tab-pane active " id="company_information">
			<div class="col-lg-12 col-sm-12">

				@include('webshop::admin.webshops.partials.webshop_forms.company_information', ['lang' => $locale])
			</div>
		</div>

		<div class="tab-pane" id="financial_information">
			<div class="col-lg-12 col-sm-12">	
				@include('webshop::admin.webshops.partials.webshop_forms.financial_information', ['lang' => $locale])
			</div>
		</div>

		<div class="tab-pane" id="reachability">
			<div class="col-lg-12 col-sm-12">
				@include('webshop::admin.webshops.partials.webshop_forms.reachability', ['lang' => $locale])
			</div>
			<div class="col-lg-12 col-sm-12">
				@include('webshop::admin.webshops.partials.webshop_forms.social_networks', ['lang' => $locale])
			</div>
		</div>

		<div class="tab-pane" id="rankings">
			<div class="col-lg-12 col-sm-12">
				@include('webshop::admin.webshops.partials.webshop_forms.rankings', ['lang' => $locale])
			</div>
		</div>

		<div class="tab-pane" id="delivery">
			<div class="col-lg-12 col-sm-12">
				@include('webshop::admin.webshops.partials.webshop_forms.delivery', ['lang' => $locale])
			</div>
		</div>

		<div class="tab-pane" id="warranty">
			<div class="col-lg-12 col-sm-12">
				@include('webshop::admin.webshops.partials.webshop_forms.warranty_service', ['lang' => $locale])
			</div>
		</div>

		<div class="tab-pane" id="technique">
			<div class="col-lg-12 col-sm-12">
				@include('webshop::admin.webshops.partials.webshop_forms.technique', ['lang' => $locale])
			</div>
		</div>

	</div>

</div>