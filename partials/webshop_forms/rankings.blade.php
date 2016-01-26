<h3>Rankings</h3><hr>

<?php $i = 1; ?>
	<div class="row">
		<div class="frame">	

			@foreach($rankings as $ranking)
				
					<div class= "col-md-12">
						<br>
						<h4>{{ $ranking->title }}</h4><hr>

						@foreach($ranking->filteroptions as $option)
							
							<div class= "col-md-3">


								<input  class="flat-blue" id='check_{{$i}}' name='filteroptions[]' type='checkbox' value="{{ $option->id }}" 

									<?php 
                  
                    if (isset($relatedOptions)) {
                        foreach ($relatedOptions as $relatedOption) {
                          if($relatedOption['id'] == $option['id']){

                            echo "checked='checked' ";
                          }
                        }
                    }	
										
									?>
	
								/>&nbsp;
                
                <label for='check_{{$i}}'> {{ $option->title }}</label>&nbsp;
							
									
								<?php $i++; ?>
							</div>
						@endforeach

					</div>
				
						
			@endforeach
		</div>
	</div>
<br />