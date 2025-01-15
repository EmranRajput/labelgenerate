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
<form action="/my/label" method="GET">
@csrf

                    <div class="row g-3">
                        <div class="col-12 col-lg-3">
                            <label for="InputCountry" class="form-label">Carrier <span style="color: red;">*</span></label>
                            <select class="form-select" name="Service" id="InputCountry" aria-label="Default select example">
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
                            <label for="weightTxt" class="form-label">Weight (lbs)<span style="color: red;">*</span></label>
                            <input type="text"  name="weightTxt" id="weightTxt" class="form-control"  placeholder="Weight ">
                        </div>
                        <div class="col-12 col-lg-6">
                            <label for="LastName" class="form-label">Price Calculation ($)</label>
                            <input type="text" class="form-control" name="priceTxt" id="priceTxt" placeholder="">
                        </div>
                        <div class="col-12 col-lg-3">
                            <label for="PhoneNumber" class="form-label">Lenght <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="lenghtTxt" id="lenghtTxt" placeholder="Lenght">
                        </div>
                        <div class="col-12 col-lg-3">
                            <label for="InputEmail" class="form-label">Width<span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="widthTxt" id="widthTxt" placeholder="Width">
                        </div>
                         <div class="col-12 col-lg-3">
                            <label for="InputEmail" class="form-label">Height <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="heightTxt" id="heightTxt" placeholder="Height">
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
                
                    <div class="row g-3">
                       <div class="col-12 col-lg-6">
                            <label for="Name" class="form-label">Name</label>
                            <input type="text"  class="form-control" name="nameFrm" id="nameFrm" placeholder="Name">
                        </div>
                        <div class="col-12 col-lg-6">
                            <label for="FisrtName" class="form-label">Name</label>
                            <input type="text" class="form-control" name="nameTo" id="nameTo" placeholder=" Name">
                        </div>
                       <div class="col-12 col-lg-6">
                            <label for="FisrtName" class="form-label">Company</label>
                            <input type="text" class="form-control" name="companyFrm" id="companyFrm" placeholder="Company">
                        </div>
                        <div class="col-12 col-lg-6">
                            <label for="FisrtName" class="form-label">Company</label>
                            <input type="text" class="form-control" name="companyTo" id="companyTo" placeholder="Company">
                        </div>
                        <div class="col-12 col-lg-6">
                            <label for="LastName" class="form-label">Phone</label>
                            <input type="text" class="form-control" name="phoneFrm" id="phoneFrm" placeholder="Phone">
                        </div>
                         <div class="col-12 col-lg-6">
                            <label for="LastName" class="form-label">Phone</label>
                            <input type="text" class="form-control" name="phoneTo" id="phoneTo" placeholder="Phone">
                        </div>
                         <div class="col-12 col-lg-6">
                            <label for="LastName" class="form-label">Street<span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="streetFrm" id="streetFrm" placeholder="Street">
                        </div>
                         <div class="col-12 col-lg-6">
                            <label for="LastName" class="form-label">Street<span style="color: red;">*</span></label>
                            <input type="text" class="form-control"  name="streetTo" id="streetTo" placeholder="Street">
                        </div>
                         <div class="col-12 col-lg-6">
                            <label for="LastName" class="form-label">Street 2</label>
                            <input type="text" class="form-control"  name="street2Frm" id="street2Frm" placeholder="Street2">
                        </div>
                         <div class="col-12 col-lg-6">
                            <label for="LastName" class="form-label">Street 2</label>
                            <input type="text" class="form-control"  name="street2To" id="street2To" placeholder="Street2">
                        </div>
                         <div class="col-12 col-lg-6">
                            <label for="LastName" class="form-label">ZIP Code <span style="color: red;">*</span></label>
                            <input type="text" class="form-control"  name="zipFrm" id="zipFrm" placeholder="zip code">
                        </div>
                         <div class="col-12 col-lg-6">
                            <label for="LastName" class="form-label">ZIP Code <span style="color: red;">*</span></label>
                            <input type="text" class="form-control"  name="zipTo" id="zipTo" placeholder="zip code">
                        </div>
                        <div class="col-12 col-lg-6">
                            <label for="LastName" class="form-label">City</label>
                            <input type="text" class="form-control"  name="cityFrm"  id="cityFrm" placeholder="city">
                        </div>
                         <div class="col-12 col-lg-6">
                            <label for="LastName" class="form-label">City</label>
                            <input type="text" class="form-control"  name="cityTo" id="cityTo" placeholder="city">
                        </div>
                       <div class="col-12 col-lg-6">
                            <label for="InputCountry" class="form-label">State<span style="color: red;">*</span></label>
                            <select class="form-select" name="stateFrm" id="stateFrm" aria-label="Default select example">
                            <option selected>USA</option>
    <option value="AL">Alabama</option>
    <option value="AK">Alaska</option>
    <option value="AZ">Arizona</option>
    <option value="AR">Arkansas</option>
    <option value="CA">California</option>
    <option value="CO">Colorado</option>
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="HI">Hawaii</option>
    <option value="ID">Idaho</option>
    <option value="IL">Illinois</option>
    <option value="IN">Indiana</option>
    <option value="IA">Iowa</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="ME">Maine</option>
    <option value="MD">Maryland</option>
    <option value="MA">Massachusetts</option>
    <option value="MI">Michigan</option>
    <option value="MN">Minnesota</option>
    <option value="MS">Mississippi</option>
    <option value="MO">Missouri</option>
    <option value="MT">Montana</option>
    <option value="NE">Nebraska</option>
    <option value="NV">Nevada</option>
    <option value="NH">New Hampshire</option>
    <option value="NJ">New Jersey</option>
    <option value="NM">New Mexico</option>
    <option value="NY">New York</option>
    <option value="NC">North Carolina</option>
    <option value="ND">North Dakota</option>
    <option value="OH">Ohio</option>
    <option value="OK">Oklahoma</option>
    <option value="OR">Oregon</option>
    <option value="PA">Pennsylvania</option>
    <option value="RI">Rhode Island</option>
    <option value="SC">South Carolina</option>
    <option value="SD">South Dakota</option>
    <option value="TN">Tennessee</option>
    <option value="TX">Texas</option>
    <option value="UT">Utah</option>
    <option value="VT">Vermont</option>
    <option value="VA">Virginia</option>
    <option value="WA">Washington</option>
    <option value="WV">West Virginia</option>
    <option value="WI">Wisconsin</option>
    <option value="WY">Wyoming</option>
</select>
                        </div>
                         <div class="col-12 col-lg-6">
                            <label for="InputCountry" class="form-label">State<span style="color: red;">*</span></label>
                            <select class="form-select" name="stateTo" id="stateTo" aria-label="Default select example">
                            <option selected>USA</option>
    <option value="AL">Alabama</option>
    <option value="AK">Alaska</option>
    <option value="AZ">Arizona</option>
    <option value="AR">Arkansas</option>
    <option value="CA">California</option>
    <option value="CO">Colorado</option>
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="HI">Hawaii</option>
    <option value="ID">Idaho</option>
    <option value="IL">Illinois</option>
    <option value="IN">Indiana</option>
    <option value="IA">Iowa</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="ME">Maine</option>
    <option value="MD">Maryland</option>
    <option value="MA">Massachusetts</option>
    <option value="MI">Michigan</option>
    <option value="MN">Minnesota</option>
    <option value="MS">Mississippi</option>
    <option value="MO">Missouri</option>
    <option value="MT">Montana</option>
    <option value="NE">Nebraska</option>
    <option value="NV">Nevada</option>
    <option value="NH">New Hampshire</option>
    <option value="NJ">New Jersey</option>
    <option value="NM">New Mexico</option>
    <option value="NY">New York</option>
    <option value="NC">North Carolina</option>
    <option value="ND">North Dakota</option>
    <option value="OH">Ohio</option>
    <option value="OK">Oklahoma</option>
    <option value="OR">Oregon</option>
    <option value="PA">Pennsylvania</option>
    <option value="RI">Rhode Island</option>
    <option value="SC">South Carolina</option>
    <option value="SD">South Dakota</option>
    <option value="TN">Tennessee</option>
    <option value="TX">Texas</option>
    <option value="UT">Utah</option>
    <option value="VT">Vermont</option>
    <option value="VA">Virginia</option>
    <option value="WA">Washington</option>
    <option value="WV">West Virginia</option>
    <option value="WI">Wisconsin</option>
    <option value="WY">Wyoming</option>
</select>
                        </div>
                         <div class="col-12 col-lg-12 pt-2 headingFromTo">
                            <label for="InputEmail" class="form-label">Additional Information</label>
                        </div>
                         <div class="col-12 col-lg-12">
                            <label for="LastName" class="form-label">Reference 1</label>
                            <input type="text" class="form-control" name="reference1" id="reference1" placeholder="Reference 1">
                        </div>
                         <div class="col-12 col-lg-12">
                            <label for="LastName" class="form-label">Reference 2</label>
                            <input type="text" class="form-control" name="reference2" id="reference2" placeholder="Reference 2">
                        </div>
                         <div class="col-12 col-lg-12">
                            <label for="LastName" class="form-label">Reference 3</label>
                            <input type="text" class="form-control" name="reference3" id="reference3" placeholder="Reference 3">
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