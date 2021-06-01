<?php include_once "includes/header.php";?>
<div class="content-wrapper editProperty"> 
    <div class="pageHead">
        <div class="container">
            <h1>Edit Your <span>Property</span></h1> 
        </div>
    </div>
    <div class="container-md">
        <h2>Property Details</h2>
        <form>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Property Name (English)">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Property Name (Arabic)">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label">Property Type </label>
                        <div>
                            <select class="selectpicker" title="Office">
                                <option>Appartment</option>
                                <option>Appartment</option>
                                <option>Appartment</option>
                                <option>Appartment</option>
                                <option>Appartment</option>
                                <option>Appartment</option>
                                <option>Appartment</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <ul class="list-inline d-sm-inline-block d-flex custom_list">
                            <li class="radio list-inline-item">
                                <label>
                                    <input type="radio" name="radio" checked="">
                                    <span>Exchange</span>
                                </label>
                            </li>
                            <li class="radio list-inline-item">
                                <label>
                                    <input type="radio" name="radio">
                                    <span>Buy</span>
                                </label>
                            </li>
                            <li class="radio list-inline-item">
                                <label>
                                    <input type="radio" name="radio">
                                    <span>Rent</span>
                                </label>
                            </li>
                            <li class="radio list-inline-item">
                                <label>
                                    <input type="radio" name="radio">
                                    <span>Sell</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label">Property Category</label>
                        <div>
                            <select class="selectpicker">
                                <option>Appartment</option>
                                <option>Appartment</option>
                                <option>Appartment</option>
                                <option>Appartment</option>
                                <option>Appartment</option>
                                <option>Appartment</option>
                                <option>Appartment</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label">Property Sub-Category</label>
                        <select class="selectpicker">
                            <option>Condominium</option>
                            <option>Condominium</option>
                            <option>Condominium</option>
                            <option>Condominium</option>
                            <option>Condominium</option>
                            <option>Condominium</option>
                            <option>Condominium</option>
                            <option>Condominium</option>
                        </select>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label class="control-label">Property Features</label>
                        <div class="propertyFeatures grid" data-grid-item-width-md="1/3" data-grid-item-width='1/2' data-item-gap="15">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="radio" checked="">
                                    <span class="icon">
                                        <img src="src/images/icons/mosque_uncheck.png" alt="" class="unchecked img-fluid">
                                        <img src="src/images/icons/mosque_check.png" alt="" class="checked img-fluid">
                                    </span>
                                    <span class="label">Mosque</span>
                                </label>
                            </div>
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
                <div class="col-sm-4">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Beds ">  
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Baths ">  
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Kitchen ">  
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <div class="has-label">
                            <input type="text" class="form-control" placeholder="Area">
                            <span class="info-label">m<sup>2</sup></span>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Location">  
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label class="control-label">Google Map Location</label>
                        <!-- <div class="searchAddress">
                            <div class="form-group mb-0">
                            <input type="text" class="form-control" placholder="Ahmad Al Jabe St">
                            </div>
                            <button class="searchAddress--search">
                                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 56.966 56.966" xml:space="preserve">
                                    <use xlink:href="#search-icon-google"></use>
                                </svg>
                            </button>
                        </div> -->
                        <div class="searchProperty">
                            <div class="">
                                <div class="searchProperty__input">
                                    <input type="text" class="form-control searchInput" placeholder="Ahmad Al Jabe St">
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d620721.5190696276!2d47.67357481886846!3d29.314293746622194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fc5363fbeea51a1%3A0x74726bcd92d8edd2!2sKuwait!5e0!3m2!1sen!2s!4v1619290857955!5m2!1sen!2s" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <div class="container-md">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="PACI Number">
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <textarea class="form-control" placeholder="Description (English)"></textarea>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <textarea class="form-control" placeholder="Description (Arabic)"></textarea>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <div class="has-label">
                        <input type="text" class="form-control" placeholder="Price">
                        <span class="info-label">KD</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">       
                <div class="form-group">
                    <label class="control-label">Images <span class="note">(upto 4 images)</span></label>
                    <div class="grid uploadFile" data-item-gap="20" data-grid-item-width-md="1/4" data-grid-item-width-sm="1/2">
                        <div class="uploadFile__item">
                            <div class="uploadFile__item--file">
                                <input type="file" name="file">
                            </div>
                        </div>
                        <div class="uploadFile__item">
                            <div class="uploadFile__item--file">
                                <input type="file" name="file">
                            </div>
                        </div>
                        <div class="uploadFile__item">
                            <div class="uploadFile__item--file">
                                <input type="file" name="file">
                            </div>
                        </div>
                        <div class="uploadFile__item">
                            <div class="uploadFile__item--file">
                                <input type="file" name="file">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group ml-15">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="activate" checked="">
                            <span>Activate</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="white-bg pt-30 pb-20">
        <div class="container-md">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Property Allocation Details 
                        <span>for your use only</span>
                    </h3>
                    <div class="form-group">
                        <label class="control-label">Status</label>
                        <select class="selectpicker">
                            <option>In Review</option>
                            <option>In Review</option>
                            <option>In Review</option>
                            <option>In Review</option>
                            <option>In Review</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="form-group">
                                <div class="has-label">
                                    <input type="text" class="form-control" placeholder="Deal Price">
                                    <span class="info-label">KD</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="has-label">
                                    <input type="text" class="form-control datetimepicker-input" readonly id="datepicker" name="name" data-target="#datepicker" data-toggle="datetimepicker" placeholder="20/11/2019">
                                    <span class="icon-date"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Notes"></textarea>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h3>Client Details 
                        <span>for your use only</span>
                    </h3>
                    <div class="form-group">
                        <label class="control-label">&nbsp;</label>
                        <input type="text" class="form-control" placeholder="Client Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Client Contact">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Client Email">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Client Address"></textarea>
                    </div>
                </div>
            </div>
            <div class="button-row">
                <div class="inline-btn">
                    <button class="btn btn-secondary btn-lg">update</button>
                    <button class="btn btn-cancel btn-lg">cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once "includes/footer.php";?> 