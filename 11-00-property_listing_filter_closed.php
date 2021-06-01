<?php include_once "includes/header.php";?>
<script src="src/js/map.js"></script>
<script defer src="https://maps.googleapis.com/maps/api/js?callback=initMap&sensor=false"></script>
<div class="content-wrapper propertyListing">
    <div class="pageHead">
        <div class="container">
            <div class="d-flex h-100 align-items-center">
                <h1>Get In touch <span>With an Agent</span></h1>
                <div class="search">
                    <span class="icon">
                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.54 511.26">
                            <use xlink:href="#search-icon"></use>
                        </svg>
                    </span>
                    <span>
                        Amman Street , Salmiya , hawlly
                    </span>
                </div>
                <div class="listingTabs">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#propertyListing" role="tab" aria-controls="home" aria-selected="true">
                            <span>
                                <img src="src/images/list.png " alt="" class="img-fluid">
                            </span>List
                        </a>
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#propertyListingMap" role="tab" aria-controls="profile-tab" aria-selected="false">
                            <span>
                                <img src="src/images/map.png " alt="" class="img-fluid">
                            </span>Map
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="propertyListing__wrapper white-bg propertyFeatures">
        <div class="propertyListing__filter">
            <a class="propertyListing__filter--icon" href="javascript:void(0);">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 398.41 396.05">
                    <use xlink:href="#filter-icon"></use>
                </svg>
            </a>
            <div class="propertyListing__filter--inner">
                <a href="#" class="propertyListing__filter--close">
                    Hide Filters 
                    <span>
                        <svg fill="currentColor"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 19.21 19.21">
                            <use xlink:href="#right-arrow"></use>
                        </svg>
                    </span>
                </a>
                <form>
                    <div class="inner-scroll">
                        <div class="form-group row align-items-center">
                            <label class="control-label col-sm-2">Location</label>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group float-label">
                                            <label class="control-label" >Area</label>
                                            <select class="selectpicker">
                                                <option>Salmiya</option>
                                                <option>Salmiya</option>
                                                <option>Salmiya</option>
                                                <option>Salmiya</option>
                                                <option>Salmiya</option>
                                            </select>
                                        </div>
                                        
                                        
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group float-label">
                                            <label class="control-label">Area</label>
                                            <select class="selectpicker">
                                                <option>Salmiya</option>
                                                <option>Salmiya</option>
                                                <option>Salmiya</option>
                                                <option>Salmiya</option>
                                                <option>Salmiya</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="control-label col-sm-2">Type</label>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="radio">
                                            <label style="">
                                                <input type="radio" name="rent" checked="">
                                                <span class="icon text">
                                                    Rent
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="radio">
                                            <label style="">
                                                <input type="radio" name="rent" >
                                                <span class="icon text">
                                                    Buy
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="radio">
                                            <label style="">
                                                <input type="radio" name="rent" >
                                                <span class="icon text">
                                                    Sold
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="radio">
                                            <label style="">
                                                <input type="radio" name="rent" >
                                                <span class="icon text">
                                                    Exchange
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="control-label col-sm-2">Property</label>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-md-4 col-6">
                                        <div class="radio">
                                            <label style="">
                                                <input type="radio" name="property" checked="">
                                                <span class="icon text">
                                                    Rent
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="radio">
                                            <label style="">
                                                <input type="radio" name="property" checked="">
                                                <span class="icon text">
                                                    Apartment
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="radio icon">
                                            <label style="">
                                                <input type="radio" name="property">
                                                <span class="icon text">
                                                    House
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="radio icon">
                                            <label style="">
                                                <input type="radio" name="property">
                                                <span class="icon text">
                                                    Condo
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="radio icon">
                                            <label style="">
                                                <input type="radio" name="property">
                                                <span class="icon text">
                                                    Townhouse
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="radio icon">
                                            <label style="">
                                                <input type="radio" name="property">
                                                <span class="icon text">
                                                    Duplex
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="radio icon">
                                            <label style="">
                                                <input type="radio" name="property">
                                                <span class="icon text">
                                                    Loft
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="control-label col-sm-2">Bedrooms</label>
                            <div class="col-sm-10">
                                <div class="grid" data-grid-item-width="1/5" data-item-gap="15">
                                    <div>
                                        <div class="radio">
                                            <label style="">
                                                <input type="radio" name="bedrooms" checked="">
                                                <span class="icon text">
                                                    Studio
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="radio">
                                            <label style="">
                                                <input type="radio" name="bedrooms">
                                                <span class="icon text">
                                                    1 bed
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="radio">
                                            <label style="">
                                                <input type="radio" name="bedrooms">
                                                <span class="icon text">
                                                    2 bed
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="radio">
                                            <label style="">
                                                <input type="radio" name="bedrooms">
                                                <span class="icon text">
                                                    3 bed
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="radio">
                                            <label style="">
                                                <input type="radio" name="bedrooms">
                                                <span class="icon text">
                                                    4+ bed
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="control-label col-sm-2">Bathroom</label>
                            <div class="col-sm-10">
                                <div class="grid"  data-grid-item-width="1/5" data-item-gap="15">
                                    <div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="Bathroom" checked="">
                                                <span class="icon text">
                                                    1
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="radio">
                                            <label style="">
                                                <input type="radio" name="Bathroom">
                                                <span class="icon text">
                                                    2
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="radio">
                                            <label style="">
                                                <input type="radio" name="Bathroom">
                                                <span class="icon text">
                                                    3
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="radio">
                                            <label style="">
                                                <input type="radio" name="Bathroom">
                                                <span class="icon text">
                                                    4
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="radio">
                                            <label style="">
                                                <input type="radio" name="Bathroom">
                                                <span class="icon text">
                                                    5
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="control-label col-sm-2">Amenities</label>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="Amenities" checked="">
                                                <span class="icon">
                                                    <img src="src/images/icons/mosque_uncheck.png" alt="" class="unchecked img-fluid">
                                                    <img src="src/images/icons/mosque_check.png" alt="" class="checked img-fluid">
                                                </span>
                                                <span class="label">Mosque</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="radio" >
                                                <span class="icon">
                                                    <img src="src/images/icons/food_uncheck.png" alt="" class="unchecked img-fluid">
                                                    <img src="src/images/icons/food_check.png" alt="" class="checked img-fluid">
                                                </span>
                                                <span class="label">Food Outlet</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="radio" >
                                                <span class="icon">
                                                    <img src="src/images/icons/elevator_uncheck.png" alt="" class="unchecked img-fluid">
                                                    <img src="src/images/icons/elevator_check.png" alt="" class="checked img-fluid">
                                                </span>
                                                <span class="label">Elevator</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="radio" checked="">
                                                <span class="icon">
                                                    <img src="src/images/icons/office_uncheck.png" alt="" class="unchecked img-fluid">
                                                    <img src="src/images/icons/office_check.png" alt="" class="checked img-fluid">
                                                </span>
                                                <span class="label">Shopping Mall</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="radio" >
                                                <span class="icon">
                                                    <img src="src/images/icons/pool_uncheck.png" alt="" class="unchecked img-fluid">
                                                    <img src="src/images/icons/pool_check.png" alt="" class="checked img-fluid">
                                                </span>
                                                <span class="label">Pool</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="radio" >
                                                <span class="icon">
                                                    <img src="src/images/icons/ballcony_uncheck.png" alt="" class="unchecked img-fluid">
                                                    <img src="src/images/icons/ballcony_check.png" alt="" class="checked img-fluid">
                                                </span>
                                                <span class="label">Balcony</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="radio">
                                                <span class="icon">
                                                    <img src="src/images/icons/garden1_uncheck.png" alt="" class="unchecked img-fluid">
                                                    <img src="src/images/icons/garden1_uncheck.png" alt="" class="checked img-fluid">
                                                </span>
                                                <span class="label">Garden</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="radio">
                                                <span class="icon">
                                                    <img src="src/images/icons/storage_uncheck.png" alt="" class="unchecked img-fluid">
                                                    <img src="src/images/icons/storage_check.png" alt="" class="checked img-fluid">
                                                </span>
                                                <span class="label">Storage</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="radio">
                                                <span class="icon">
                                                    <img src="src/images/icons/garden_uncheck.png" alt="" class="unchecked img-fluid">
                                                    <img src="src/images/icons/garden_check.png" alt="" class="checked img-fluid">
                                                </span>
                                                <span class="label">View</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="radio">
                                                <span class="icon">
                                                    <img src="src/images/icons/chair_uncheck.png" alt="" class="unchecked img-fluid">
                                                    <img src="src/images/icons/chair_check.png" alt="" class="checked img-fluid">
                                                </span>
                                                <span class="label">Wheelchair<br>Accessible</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="radio">
                                                <span class="icon">
                                                    <img src="src/images/icons/parking_uncheck.png" alt="" class="unchecked img-fluid">
                                                    <img src="src/images/icons/parking_check.png" alt="" class="checked img-fluid">
                                                </span>
                                                <span class="label">Parking Spot</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="radio">
                                                <span class="icon">
                                                    <img src="src/images/icons/doorman_uncheck.png" alt="" class="unchecked img-fluid">
                                                    <img src="src/images/icons/doorman_check.png" alt="" class="checked img-fluid">
                                                </span>
                                                <span class="label">Doorman</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="button-row">
                        <button class="btn btn-secondary">Find Properties</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="propertyListing" role="tabpanel">
                <div class="container">
                    <div class="row properties ">
                        <div class="col-lg-4 col-sm-6 mb-25">
                            <?php include "includes/propertyItemListing.php";?>
                        </div>
                        <div class="col-lg-4 col-sm-6 mb-25">
                            <?php include "includes/propertyItemListing.php";?>
                        </div>
                        <div class="col-lg-4 col-sm-6 mb-25">
                            <?php include "includes/propertyItemListing.php";?>
                        </div>
                        <div class="col-lg-4 col-sm-6 mb-25">
                            <?php include "includes/propertyItemListing.php";?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="propertyListingMap" role="tabpanel" >
                <div class="mapListings">
                    <div class="mapListings__list">
                        <div class="mapListings__list--count">253 Salmiya , Kuwait Apartments</div>
                        <div class="inner-scroll">
                            <div class="row properties ">
                                <div class="col-md-6 mb-25">
                                    <?php include "includes/propertyItemListing.php";?>
                                </div>
                                <div class="col-md-6 mb-25">
                                    <?php include "includes/propertyItemListing.php";?>
                                </div>
                                <div class="col-md-6 mb-25">
                                    <?php include "includes/propertyItemListing.php";?>
                                </div>
                                <div class="col-md-6 mb-25">
                                    <?php include "includes/propertyItemListing.php";?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mapListings__map">
                        <div class="map" id="map">
                            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d620721.5190696276!2d47.67357481886846!3d29.314293746622194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fc5363fbeea51a1%3A0x74726bcd92d8edd2!2sKuwait!5e0!3m2!1sen!2s!4v1619290857955!5m2!1sen!2s" allowfullscreen="" loading="lazy"></iframe> -->
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<?php include_once "includes/footer.php";?>