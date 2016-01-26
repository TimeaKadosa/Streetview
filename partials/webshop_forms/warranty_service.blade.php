
<h3>Garanties en Service</h3><hr>

<div class="col-lg-6 col-sm-6">	
  	
	<div class="form-group row">
		
		<div class="col-sm-5">
		
			{!! Form::label('name', 'Zichttermijn wettelijk') !!}
		</div>
		<div class="col-sm-7">	

			{!! Form::hidden('serviceViewTerm') !!}
			{!! Form::radio('serviceViewTerm','1',null, ['id' => 'serviceViewTermJa','class' => 'flat-blue']) !!}&nbsp
			{!! Form::label('serviceViewTermJa', 'Ja') !!}
				&nbsp;

			{!! Form::radio('serviceViewTerm', '0',null, ['id' => 'serviceViewTermNee','class' => 'flat-blue']) !!}&nbsp
			{!! Form::label('serviceViewTermNee', 'Nee') !!}

		</div>	
	</div>
</br>
	<div class="form-group row">
		
		<div class="col-sm-5">
			{!! Form::label('name', 'Live chat / Whatsapp') !!}
		</div>
		<div class="col-sm-7">	

			{!! Form::hidden('serviceLiveChat') !!}
			{!! Form::radio('serviceLiveChat','1',null, ['id' => 'serviceLiveChatJa','class' => 'flat-blue']) !!}&nbsp
			{!! Form::label('serviceLiveChatJa', 'Ja') !!}
				&nbsp;

			{!! Form::radio('serviceLiveChat', '0',null, ['id' => 'serviceLiveChatNee','class' => 'flat-blue']) !!}&nbsp
			{!! Form::label('serviceLiveChatNee', 'Nee') !!}

		</div>
	</div>
</br>

	<div class="form-group row">
		
		<div class="col-sm-5">
			{!! Form::label('name', 'Bijzondere voorwaarden') !!}
		</div>
		<div class="col-sm-7">

			{!! Form::hidden('serviceFreeReturnTerms') !!}
			{!! Form::radio('serviceFreeReturnTerms','1',null, ['id' => 'serviceFreeReturnTermsJa','class' => 'flat-blue']) !!}&nbsp
			{!! Form::label('serviceFreeReturnTermsJa', 'Ja') !!}
				&nbsp;

			{!! Form::radio('serviceFreeReturnTerms', '0',null, ['id' => 'serviceFreeReturnTermsNee','class' => 'flat-blue']) !!}&nbsp
			{!! Form::label('serviceFreeReturnTermsNee', 'Nee') !!}

		</div>
	</div>
</br>

	<div class="form-group row">
		
		<div class="col-sm-5">
			{!! Form::label('name', 'Eigen technische dienst') !!}
		</div>
		<div class="col-sm-7">	

			{!! Form::hidden('serviceTechService') !!}
			{!! Form::radio('serviceTechService','1',null, ['id' => 'serviceTechServiceJa','class' => 'flat-blue']) !!}&nbsp
			{!! Form::label('serviceTechServiceJa', 'Ja') !!}
				&nbsp;

			{!! Form::radio('serviceTechService', '0',null, ['id' => 'serviceTechServiceNee','class' => 'flat-blue']) !!}&nbsp
			{!! Form::label('serviceTechServiceNee', 'Nee') !!}

		</div>
	</div>
</br>

	<div class="form-group row">
		
		<div class="col-sm-5">
			{!! Form::label('name', 'Uw gegevens veilig verstuurd(SSL)') !!}
		</div>	
		<div class="col-sm-7">

			{!! Form::hidden('serviceSsl') !!}
			{!! Form::radio('serviceSsl','1',null, ['id' => 'serviceSslJa','class' => 'flat-blue']) !!}&nbsp
			{!! Form::label('serviceSslJa', 'Ja') !!}
				&nbsp;

			{!! Form::radio('serviceSsl', '0',null, ['id' => 'serviceSslNee','class' => 'flat-blue']) !!}&nbsp
			{!! Form::label('serviceSslNee', 'Nee') !!}

		</div>
	</div>
</br>
</div>

<div class="col-lg-6 col-sm-6">	

	<div class="form-group row">
		
		<div class="col-sm-5">	
			{!! Form::label('name', 'Branche vereniging') !!}
			</div>
			<div class="col-sm-7">

			{!! Form::hidden('serviceMemberAssociation') !!}
			{!! Form::radio('serviceMemberAssociation','1',null, ['id' => 'serviceMemberAssociationJa','class' => 'flat-blue']) !!}&nbsp
			{!! Form::label('serviceMemberAssociationJa', 'Ja') !!}
				&nbsp;

			{!! Form::radio('serviceMemberAssociation', '0',null, ['id' => 'serviceMemberAssociationNee','class' => 'flat-blue']) !!}&nbsp
			{!! Form::label('serviceMemberAssociationNee', 'Nee') !!}

		</div>
	</div>
<br>

	<div class="form-group">			
		{!! Form::label('name', 'Welke branche vereniging(en)') !!}
		{!! Form::text('serviceMemberAssociationWhich', null, ['class' => 'form-control']) !!}
	</div>
<br>

	<div class="form-group row">
		
		<div class="col-sm-5">
			{!! Form::label('name', 'Keurmerk') !!}
			</div>
			<div class="col-sm-7">

			{!! Form::hidden('serviceQualityLabel') !!}
			{!! Form::radio('serviceQualityLabel','1',null, ['id' => 'serviceQualityLabelJa','class' => 'flat-blue']) !!}&nbsp
			{!! Form::label('serviceQualityLabelJa', 'Ja') !!}
				&nbsp;

			{!! Form::radio('serviceQualityLabel', '0',null, ['id' => 'serviceQualityLabelNee','class' => 'flat-blue']) !!}&nbsp
			{!! Form::label('serviceQualityLabelNee', 'Nee') !!}

		</div>
		
	</div>
</br>

	<div class="form-group">			
		{!! Form::label('name', 'Welk(e) keurmerk(en)') !!}
		{!! Form::text('serviceQualityLabelWhich', null, ['class' => 'form-control']) !!}
	</div>



</div>


