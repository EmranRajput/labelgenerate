
@extends('user.user_index')
    @section('title')
    Subscription Plans
    @endsection
    
@section('user')

<style>
 .headingLabel{
        background-color: #ec5252;
        color: white;
    }
    .steper-title{
        color: white;

    }
</style>

	<div class="page-content">
		
		<div class="card">
            <div class="card headingLabel">
                <div class="card-body "> 
                    <div id="stepper3" class="bs-stepper gap-4 vertical">
                        <div class="bs-stepper-header" role="tablist">
                            <div class="step" data-target="#test-vl-1">
                                <div class="step-trigger" role="tab" id="stepper3trigger1" aria-controls="test-vl-1">
                                <div class="">
                                    <h4 class="mb-0 steper-title">Subscription Plans</h4>
                                </div>
                                </div>
                            </div>
                     
                            </div>
                        </div>
                </div>
            </div>
            <div class="card">
            <div class="card headingLabel">
                <div class="card-body "> 
                    <div id="stepper3" class="bs-stepper gap-4 vertical">
                        <div class="bs-stepper-header" role="tablist">
                            <div class="step" data-target="#test-vl-1">
                                <div class="step-trigger" role="tab" id="stepper3trigger1" aria-controls="test-vl-1">
                                <div class="">
                                    <h6 class="mb-0 steper-title">If you are facing any problem, please contact us at info@</h6>
                                </div>
                                </div>
                            </div>
                     
                            </div>
                        </div>
                </div>
            </div>
			<div class="card-body">

    
    <div class="container">
        
            <div class="row row-cols-1 row-cols-lg-3">
                <!-- Free Tier -->
                <div class="col">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-header bg-danger py-3">
                            <h5 class="card-title text-white text-uppercase text-center">Level 1 - Basic</h5>
                        </div>
                        <div class="card-body" style="background-color: #f7f7f7;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class='bx bx-check me-2 font-18'></i>You Pay $20.00</li>
                                <li class="list-group-item"><i class='bx bx-check me-2 font-18'></i>No Discount</li>
                                <li class="list-group-item"><i class='bx bx-check me-2 font-18'></i>You get $20.00</li>
                                
                            </ul>
                            <div class="d-grid"> <a href="#" class="btn btn-danger my-2 radius-30">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Plus Tier -->
                <div class="col">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-header  bg-danger py-3">
                            <h5 class="card-title text-white text-uppercase text-center">Level 2 - Silver</h5>
                        </div>
                        <div class="card-body " style="background-color: #f7f7f7;">
                            <ul class="list-group list-group-flush" >
                               <li class="list-group-item"><i class='bx bx-check me-2 font-18'></i>You Pay  $50.00</li>
                                <li class="list-group-item"><i class='bx bx-check me-2 font-18'></i>We offer 2% discount.</li>
                                <li class="list-group-item"><i class='bx bx-check me-2 font-18'></i>You get $51.00</li>
                            <div class="d-grid"> <a href="#" class="btn btn-danger my-2 radius-30">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pro Tier -->
                <div class="col">
                    <div class="card">
                        <div class="card-header  bg-danger py-3">
                            <h5 class="card-title  text-white text-uppercase text-center">Level 3 - Gold</h5>
                        </div>
                        <div class="card-body" style="background-color: #f7f7f7;">
                            <ul class="list-group list-group-flush">
                               <li class="list-group-item"><i class='bx bx-check me-2 font-18'></i>You Pay $100.00</li>
                                <li class="list-group-item"><i class='bx bx-check me-2 font-18'></i>We offer 3% discount.</li>
                                <li class="list-group-item"><i class='bx bx-check me-2 font-18'></i>You get $103.00</li>
                            </ul>
                            <div class="d-grid"> <a href="#" class="btn btn-danger my-2 radius-30">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 mt-5 row-cols-lg-3">
                <!-- Free Tier -->
                <div class="col">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-header  bg-danger py-3">
                            <h5 class="card-title text-white text-uppercase text-center">Level 4 - Platinum</h5>
                        </div>
                        <div class="card-body" style="background-color: #f7f7f7;">
                            <ul class="list-group list-group-flush">
                               <li class="list-group-item"><i class='bx bx-check me-2 font-18'></i>You Pay $150.00</li>
                                <li class="list-group-item"><i class='bx bx-check me-2 font-18'></i>We offer 4% discount.</li>
                                <li class="list-group-item"><i class='bx bx-check me-2 font-18'></i>You get $156.00</li>
                                
                            </ul>
                            <div class="d-grid"> <a href="#" class="btn btn-danger my-2 radius-30">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Plus Tier -->
                <div class="col">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-header  bg-danger py-3">
                            <h5 class="card-title text-white text-uppercase text-center">Level 5 - Diamond</h5>
                        </div>
                        <div class="card-body" style="background-color: #f7f7f7;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class='bx bx-check me-2 font-18'></i>You Pay $200.00</li>
                                <li class="list-group-item"><i class='bx bx-check me-2 font-18'></i>We offer 5% discount.</li>
                                <li class="list-group-item"><i class='bx bx-check me-2 font-18'></i>You get $210.00</li>
                            </ul>
                            <div class="d-grid"> <a href="#" class="btn btn-danger my-2 radius-30">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pro Tier -->
                <div class="col">
                    <div class="card">
                        <div class="card-header  bg-danger py-3">
                            <h5 class="card-title text-white text-uppercase  text-center">Level 6 - Ultimate</h5>
                        </div>
                        <div class="card-body" style="background-color: #f7f7f7;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class='bx bx-check me-2 font-18'></i>You Pay $250.00</li>
                                <li class="list-group-item"><i class='bx bx-check me-2 font-18'></i>We offer 6% discount.</li>
                                <li class="list-group-item"><i class='bx bx-check me-2 font-18'></i>You get $265.00</li>
                            </ul>
                            <div class="d-grid"> <a href="#" class="btn btn-danger my-2 radius-30">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       
    </div><!-- end container -->
</section><!-- end PLAN-area -->



			</div>
		</div>
	</div>


    
@endsection