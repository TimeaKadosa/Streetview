<h3>Levering</h3><hr>

<div class="col-lg-5 col-sm-5">	

	<div class="form-group row">
		
			<div class="col-sm-5">
				{!! Form::label('name', 'Eigen voorraad') !!}
			</div>
			<div class="col-sm-7">

				{!! Form::hidden('deliveryOwnStock') !!}
				{!! Form::radio('deliveryOwnStock','1',null, ['id' => 'deliveryOwnStockJa','class' => 'flat-blue']) !!}&nbsp
				
				{!! Form::label('deliveryOwnStockJa', 'Ja') !!}
				&nbsp;

				{!! Form::radio('deliveryOwnStock', '0',null, ['id' => 'deliveryOwnStockNee','class' => 'flat-blue']) !!}&nbsp
				{!! Form::label('deliveryOwnStockNee', 'Nee') !!}
					
			</div>
	</div>
</br>

	<div class="form-group row">
		
		<div class="col-sm-5">
			{!! Form::label('name', 'Gratis geleverd') !!}
		</div>
		<div class="col-sm-7">

			{!! Form::hidden('deliveryFree') !!}
			{!! Form::radio('deliveryFree','1',null, ['id' => 'deliveryFreeJa','class' => 'flat-blue']) !!}&nbsp
			{!! Form::label('deliveryFreeJa', 'Ja') !!}
			&nbsp;

			{!! Form::radio('deliveryFree', '0',null, ['id' => 'deliveryFreeNee','class' => 'flat-blue']) !!}&nbsp
			{!! Form::label('deliveryFreeNee', 'Nee') !!}
		</div>		
	</div>
</br>

	
	<div class="form-group ">
	
			{!! Form::label('name', 'Gratis retourneren') !!}
			{!! Form::text('serviceFreeReturn', null, ['class' => 'form-control']) !!}
		
	</div>	

	</br>

	<div class="form-group">

		{!! Form::label('name', 'Gratis geleverd vanaf ') !!}
		<div class="input-group">
  			<div class="input-group-addon">€</div>
      		{!! Form::text('deliveryFreeFrom', null, ['class' => 'form-control']) !!}
		</div>

	</div>
</br>

	<div class="form-group row">
		
		<div class="col-sm-5">
			{!! Form::label('name', 'Bezorgkosten kleine bestellingen') !!}
		</div>
		<div class="col-sm-7">

			{!! Form::hidden('deliveryFreeForSmallOrders') !!}
			{!! Form::radio('deliveryFreeForSmallOrders','1',null, ['id' => 'deliveryFreeForSmallOrdersJa','class' => 'flat-blue']) !!}&nbsp
			{!! Form::label('deliveryFreeForSmallOrdersJa', 'Ja') !!}
				&nbsp;
			{!! Form::radio('deliveryFreeForSmallOrders', '0',null, ['id' => 'deliveryFreeForSmallOrdersNee','class' => 'flat-blue']) !!}&nbsp
			{!! Form::label('deliveryFreeForSmallOrdersNee', 'Nee') !!}

		</div>
	</div>				
</br>

	<div class="form-group row">
		
		<div class="col-sm-5">	
			
			{!! Form::label('name', 'Volgende dag geleverd indien op voorraad') !!}
		</div>
		<div class="col-sm-7">

			{!! Form::hidden('deliveryNextDay') !!}
			{!! Form::radio('deliveryNextDay','1',null, ['id' => 'deliveryNextDayJa','class' => 'flat-blue']) !!}&nbsp
			{!! Form::label('deliveryNextDayJa', 'Ja') !!}
			&nbsp;

			{!! Form::radio('deliveryNextDay', '0',null, ['id' => 'deliveryNextDayNee','class' => 'flat-blue']) !!}&nbsp
			{!! Form::label('deliveryNextDayNee', 'Nee') !!}
	</div>
	</div>
</br>

	<div class="form-group">			
		{!! Form::label('name', 'Volgende dag bezorgd indien bestel voor ') !!}
		{!! Form::text('deliveryNextDayBefore', null, ['class' => 'form-control']) !!}
	</div>
</br>
	<div class="form-group row">
		
		<div class="col-sm-5">
			
			{!! Form::label('name', 'Zelf ophalen') !!}
		</div>
		<div class="col-sm-7">

			{!! Form::hidden('deliveryPickUp') !!}
			{!! Form::radio('deliveryPickUp','1',null, ['id' => 'deliveryPickUpJa','class' => 'flat-blue']) !!}&nbsp
			{!! Form::label('deliveryPickUpJa', 'Ja') !!}
			&nbsp;

			{!! Form::radio('deliveryPickUp', '0',null, ['id' => 'deliveryPickUpNee','class' => 'flat-blue']) !!}&nbsp
			{!! Form::label('deliveryPickUpNee', 'Nee') !!}
		</div>
	</div>

</div>		
<div class="col-lg-5 col-sm-5">

	<div class="form-group">			
		{!! Form::label('name', 'Bezorgdiensten') !!}
		{!! Form::text('deliveryService', null, ['class' => 'form-control']) !!}
	</div>
</br>
	
	<div class="form-group row">
		
		<div class="col-sm-5">			
			{!! Form::label('name', 'Achteraf betalen') !!}
		</div>
		<div class='col-sm-7'>

			
				{!! Form::hidden('deliveryPayAfterwards') !!}
				{!! Form::radio('deliveryPayAfterwards','1',null, ['id' => 'deliveryPayAfterwardsJa','class' => 'flat-blue']) !!}&nbsp
				{!! Form::label('deliveryPayAfterwardsJa', 'Ja') !!}
				&nbsp;

				{!! Form::radio('deliveryPayAfterwards', '0',null, ['id' => 'deliveryPayAfterwardsNee','class' => 'flat-blue']) !!}&nbsp
				{!! Form::label('deliveryPayAfterwardsNee', 'Nee') !!}

		</div>		
		
	</div>
</br>

	<div class="form-group">			
		{!! Form::label('name', 'Achteraf betalen via') !!}
		{!! Form::text('deliveryPayAfterwardsHow', null, ['class' => 'form-control']) !!}
	</div>
</br>

	<div class="form-group row">

		<div class="col-sm-5">	
			{!! Form::label('name', 'Leveren in cadeauverpakking') !!}
		</div>
		<div class="col-sm-7">	

			{!! Form::hidden('deliveryGiftwrapping') !!}
			{!! Form::radio('deliveryGiftwrapping','1',null, ['id' => 'deliveryGiftwrappingJa','class' => 'flat-blue']) !!}&nbsp
			{!! Form::label('deliveryGiftwrappingJa', 'Ja') !!}
			&nbsp;

			{!! Form::radio('deliveryGiftwrapping', '0',null, ['id' => 'deliveryGiftwrappingNee','class' => 'flat-blue']) !!}&nbsp
			{!! Form::label('deliveryGiftwrappingNee', 'Nee') !!}

		</div>
	</div>
</br>

	<div class="form-group row">

		<div class="col-sm-5">	

			{!! Form::label('name', 'Buitenlandse levering mogelijk') !!}
		</div>
		<div class="col-sm-7">

			{!! Form::hidden('deliveryAbroad') !!}
			{!! Form::radio('deliveryAbroad','1',null, ['id' => 'deliveryAbroadJa','class' => 'flat-blue']) !!}&nbsp
			{!! Form::label('deliveryAbroadJa', 'Ja') !!}
				&nbsp;

			{!! Form::radio('deliveryAbroad', '0',null, ['id' => 'deliveryAbroadNee','class' => 'flat-blue']) !!}&nbsp
			{!! Form::label('deliveryAbroadNee', 'Nee') !!}
		
		</div>
	</div>
</br>

	<div class="form-group">			
		{!! Form::label('name', 'Buitenlandse levering in') !!}
		{!! Form::text('deliveryAbroadWhere', null, ['class' => 'form-control']) !!}
	</div>
</div>

