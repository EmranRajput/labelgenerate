@extends('user.user_index')
@section('title')
    Create Label
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
    .headingFromTo{
        text-align: center;
        font-size: 25px;
        color: black;
    }
</style>


    <div class="page-content">
        
        <!--start stepper one--> 
            
        
        <div id="stepper1" class="bs-stepper">
        <div class="card">
            <div class="card headingLabel ">
                <div class="card-body px-4 "> 
                    <div id="stepper3" class="bs-stepper gap-4 vertical">
                        <div class="bs-stepper-header" role="tablist">
                            <div class="step" data-target="#test-vl-1">
                                <div class="step-trigger" role="tab" id="stepper3trigger1" aria-controls="test-vl-1">
                                <div class="">
                                    <h5 class="mb-0 steper-title">Create Shipping Label</h5>
                                    <p class="mb-0 steper-sub-title">Enter Shipping Label Information</p>
                                </div>
                                </div>
                            </div>
                     
                            </div>
                        </div>
                </div>
            </div>
            <div class="card-body   px-4">
            
                <div class="bs-stepper-content">
                <form onSubmit="return false">

                    <div class="row g-3">
                        <div class="col-12 col-lg-3">
                            <label for="InputCountry" class="form-label">Carrier <span style="color: red;">*</span></label>
                            <select class="form-select" id="InputCountry" aria-label="Default select example">
                                <option selected>USPS</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                </select>
                        </div>
                        <div class="col-12 col-lg-3">
                            <label for="InputCountry" class="form-label">Shipping Service<span style="color: red;">*</span></label>
                            <select class="form-select" id="InputCountry" aria-label="Default select example">
                                <option selected>Express Way</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                </select>
                        </div>
                        <div class="col-12 col-lg-3">
                            <label for="InputCountry" class="form-label">Vendor</label>
                            <select class="form-select" id="InputCountry" aria-label="Default select example">
                                <option selected>Easypost</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                </select>
                        </div>
                        <div class="col-12 col-lg-6">
                            <label for="FisrtName" class="form-label">Weight (lbs)<span style="color: red;">*</span></label>
                            <input type="text" class="form-control" id="FisrtName" placeholder="Weight ">
                        </div>
                        <div class="col-12 col-lg-6">
                            <label for="LastName" class="form-label">Price Calculation ($)</label>
                            <input type="text" class="form-control" id="LastName" placeholder="">
                        </div>
                        <div class="col-12 col-lg-3">
                            <label for="PhoneNumber" class="form-label">Lenght <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" id="PhoneNumber" placeholder=" Lenght">
                        </div>
                        <div class="col-12 col-lg-3">
                            <label for="InputEmail" class="form-label">Wighth<span style="color: red;">*</span></label>
                            <input type="text" class="form-control" id="InputEmail" placeholder="Wighth">
                        </div>
                         <div class="col-12 col-lg-3">
                            <label for="InputEmail" class="form-label">Height <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" id="InputEmail" placeholder="Height">
                        </div>

                        <div class="col-12 col-lg-6 pt-2 headingFromTo">
                            <label for="InputEmail" class="form-label">FROM</label>
                        </div>
                         <div class="col-12 col-lg-6 pt-2 headingFromTo">
                            <label for="InputEmail" class="form-label">To</label>
                        </div>
                     
                       
                    </div><!---end row-->
                    
                    </div>

                    <div id="test-l-2" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger2">

                   
                    
                    </div>
                </form>




                <form onSubmit="return false">

                    <div class="row g-3">
                       <div class="col-12 col-lg-6">
                            <label for="FisrtName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="FisrtName" placeholder=" Name">
                        </div>
                        <div class="col-12 col-lg-6">
                            <label for="FisrtName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="FisrtName" placeholder=" Name">
                        </div>
                       <div class="col-12 col-lg-6">
                            <label for="FisrtName" class="form-label">Company</label>
                            <input type="text" class="form-control" id="FisrtName" placeholder="Company">
                        </div>
                        <div class="col-12 col-lg-6">
                            <label for="FisrtName" class="form-label">Company</label>
                            <input type="text" class="form-control" id="FisrtName" placeholder="Company">
                        </div>
                        <div class="col-12 col-lg-6">
                            <label for="LastName" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="LastName" placeholder="Phone">
                        </div>
                         <div class="col-12 col-lg-6">
                            <label for="LastName" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="LastName" placeholder="Phone">
                        </div>
                         <div class="col-12 col-lg-6">
                            <label for="LastName" class="form-label">Street<span style="color: red;">*</span></label>
                            <input type="text" class="form-control" id="Street" placeholder="Street">
                        </div>
                         <div class="col-12 col-lg-6">
                            <label for="LastName" class="form-label">Street<span style="color: red;">*</span></label>
                            <input type="text" class="form-control" id="LastName" placeholder="Street">
                        </div>
                         <div class="col-12 col-lg-6">
                            <label for="LastName" class="form-label">Street 2</label>
                            <input type="text" class="form-control" id="LastName" placeholder="Street2">
                        </div>
                         <div class="col-12 col-lg-6">
                            <label for="LastName" class="form-label">Street 2</label>
                            <input type="text" class="form-control" id="LastName" placeholder="Street2">
                        </div>
                         <div class="col-12 col-lg-6">
                            <label for="LastName" class="form-label">ZIP Code <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" id="LastName" placeholder="zip code">
                        </div>
                         <div class="col-12 col-lg-6">
                            <label for="LastName" class="form-label">ZIP Code <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" id="LastName" placeholder="zip code">
                        </div>
                        <div class="col-12 col-lg-6">
                            <label for="LastName" class="form-label">City</label>
                            <input type="text" class="form-control" id="LastName" placeholder="city">
                        </div>
                         <div class="col-12 col-lg-6">
                            <label for="LastName" class="form-label">City</label>
                            <input type="text" class="form-control" id="LastName" placeholder="city">
                        </div>
                       <div class="col-12 col-lg-6">
                            <label for="InputCountry" class="form-label">State<span style="color: red;">*</span></label>
                            <select class="form-select" id="InputCountry" aria-label="Default select example">
                                <option selected>UK</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                </select>
                        </div>
                         <div class="col-12 col-lg-6">
                            <label for="InputCountry" class="form-label">State<span style="color: red;">*</span></label>
                            <select class="form-select" id="InputCountry" aria-label="Default select example">
                                <option selected>USA</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                </select>
                        </div>
                         <div class="col-12 col-lg-12 pt-2 headingFromTo">
                            <label for="InputEmail" class="form-label">Additional Information</label>
                        </div>
                         <div class="col-12 col-lg-12">
                            <label for="LastName" class="form-label">Reference 1</label>
                            <input type="text" class="form-control" id="LastName" placeholder="Reference 1">
                        </div>
                         <div class="col-12 col-lg-12">
                            <label for="LastName" class="form-label">Reference 2</label>
                            <input type="text" class="form-control" id="LastName" placeholder="Reference 2">
                        </div>
                         <div class="col-12 col-lg-12">
                            <label for="LastName" class="form-label">Reference 3</label>
                            <input type="text" class="form-control" id="LastName" placeholder="Reference 3">
                        </div>
                        
                        
                        

                        
                     
                        <div class="col-12 col-lg-6">
                            <button class="btn  px-4 headingLabel" >CREATE SHIPPING LABEL<i class='bx bx-right-arrow-alt ms-2'></i></button>
                        </div>
                    </div><!---end row-->
                    
                    </div>

                    <div id="test-l-2" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger2">

                   
                    
                    </div>
                </form>
                </div>
                
            </div>
        </div>
        </div>
        <!--end stepper one--> 

            
    </div>



@endsection