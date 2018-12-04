@extends('layout.secondary-navigation')

@section('items')
<section class="content">
	<section class="block">
		<div class="container">
			<section>
				<div class="container">
					@include('includes.messages')

				</div>           
			</section> 
			<form class="form form-submit" method="post" action="{{route('address.store')}}" enctype="multipart/form-data">
				{{csrf_field()}}
				<section>
					<div class="row">
						<div class="col-md-8">
							<div class="form-group">
								<label for="Address line" class="col-form-label required">Address line</label>
								<input name="addressline" type="text" class="form-control" id="Address line" placeholder="Address line" required>
							</div>
							<!--end form-group-->
						</div>
						<!--end col-md-8-->
						<div class="col-md-4">
							<div class="form-group">
								<label for="city" class="col-form-label required">city</label>
								<input name="city" type="text" class="form-control" id="city" required>
								{{-- <span class="input-group-addon">$</span> --}}
							</div>
							<!--end form-group-->
						</div>


					</div>
					<section>


						<section>
							<div class="row">
								<div class="col-md-8">
									<div class="form-group">
										<label for="state" class="col-form-label required">state</label>
										<input name="state" type="text" class="form-control" id="state" placeholder="state" required>
									</div>
									<!--end form-group-->
								</div>
								<!--end col-md-8-->
								<div class="col-md-4">
									<div class="form-group">
										<label for="zip" class="col-form-label required">zip</label>
										<input name="zip" type="text" class="form-control" id="zip" required>
										{{--  <span class="input-group-addon">$</span> --}}
									</div>
									<!--end form-group-->
								</div>


							</div>

							<section>
								<div class="form-group">
									<label for="input-location" class="col-form-label required">phone</label>
									<input name="phone" type="text" class="form-control" id="input-phone" placeholder="Enter phone">
								</div>
							</section>

							<section>

								<div class="form-group">
									<label for="input-location" class="col-form-label required">Country</label>
									<input name="country" type="text" class="form-control" id="input-country" placeholder="Enter country">
									<span class="geo-location input-group-addon" data-toggle="tooltip" data-placement="top" title="Find My Position"><i class="fa fa-map-marker"></i></span>
								</div>
							</section>

							<section class="clearfix">
								<div class="form-group">
									<button type="submit" value="submit" class="btn btn-primary large icon float-right">Proceed To payment<i class="fa fa-chevron-right"></i></button>
								</div>
							</section>                            
						</form>
						<!--end form-submit-->
					</div>
					<!--end container-->
				</section>
				<!--end block-->
			</section>
			@endsection