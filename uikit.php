<?php include_once "includes/header.php";?>
    <div class="container">
        <div class="grid" data-item-gap="20">
            <h1>Headings</h1>

            <h1>Heading 1 24px</h1>
            <h2>Heading 2 22px</h2>
            <h3>Heading 3 20px</h3>
            <h4>Heading 4 16px</h4>
            <h4 class="section-head">
                <span class="icon" data-step="1"><img src="src/images/svg/screen-icon.svg" alt=""></span>
                <span>Heading 3 Section-Head 16px</span>
            </h4>
            <h5>Heading 5</h5>
            <h6>Heading 6</h6>
        
            <h6>Paragraph</h6>
        
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati explicabo harum eligendi hic amet debitis consectetur iure. Sed dolorum, reprehenderit odit ipsa laborum culpa fugiat.</p>
        
            <h6>Buttons</h6>

            <div class="grid" grid-item-width="1/2" data-item-gap="10">
                <button class="btn btn-primary">Primary</button>
                <button class="btn btn-primary big">Primary big</button>
                <button class="btn btn-secondary">Secondary</button>
                <button class="btn btn-cancel">cancel</button>
                <!-- <button class="btn btn-primary big">Primary Big</button> -->
                <!-- <button class="btn btn-primary"><i class="fas fa-plus"></i>Primary</button>
                <button class="btn btn-primary arrow-right">Upload and Next<span></span></button> -->
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-primary">LOG IN</button>
                    <button  type="button" class="btn btn-primary">register</button>
                </div>
            </div>

            <h6>Form Controls</h6>
            <div class="grid" grid-item-width="1/2" data-item-gap="10">
                <div class="form-group">
                    <label class="control-label">Name <span>*</span></label>
                    <div>
                        <input type="text" class="form-control" placeholder="Enter Name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Screen Size <span>*</span></label>
                    <div class="fields-group">
                        <input type="text" class="form-control" placeholder="Height">
                        <input type="text" class="form-control" placeholder="Width">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Minimum Duration <span>*</span></label>
                    <div>
                        <select class="selectpicker">
                            <option>1 Week</option>
                            <option>2 Week</option>
                            <option>3 Week</option>
                            <option>4 Week</option>
                            <option>5 Week</option>
                            <option>6 Week</option>
                            <option>7 Week</option>
                            <option>8 Week</option>
                            <option>9 Week</option>
                            <option>10 Week</option>
                            <option>1 Year</option>
                            <option>2 Year</option>
                            <option>3 Year</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                <label class="control-label"><span>*</span>Would you like us to assist on location?</label>
                    <ul class="list-inline">
                        <li class="radio list-inline-item">
                            <label>
                                <input type="radio" name="radio" checked="">
                                <span>Yes</span>
                            </label>
                        </li>
                        <li class="radio list-inline-item">
                            <label>
                                <input type="radio" name="radio">
                                <span>No</span>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>

            <h6>Property Item</h6>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="property verified">
                        <div class="property__image">
                            <img src="src/images/house.png" alt="" class="img-fluid">
                            <div class="property__image--overlay">
                                <button class="btn btn-secondary">explore</button>
                            </div>
                            <span class="property__verified">
                                <img src="src/images/svg/varified.svg" alt="">
                            </span>
                        </div>
                        <div class="property__info">
                            <p class="property__info--title mb-3">sui house</p>
                            <p class="property__info--location mb-3"><img class="icon" src="src/images/svg/location.svg" alt="" > Ahmed Al Jaber Street , Sahrq</p>
                            <div class="property__info--features mb-3">
                                <ul>
                                    <li>
                                        <div class="icons">
                                            <div class="icons_image">
                                                <img class="icon" src="src/images/svg/bed.svg" alt="">
                                            </div>
                                            <div class="icons_label">
                                                6
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icons">
                                            <div class="icons_image">
                                                <img class="icon" src="src/images/svg/bath.svg" alt="">
                                            </div>
                                            <div class="icons_label">
                                                3
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icons">
                                            <div class="icons_image">
                                                <img class="icon" src="src/images/svg/kitchen.svg" alt="">
                                            </div>
                                            <div class="icons_label">
                                                1
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="property__organizor">
                            <div class="d-flex align-items-center">
                                <div class="property__organizor--image">
                                    <img  src="src/images/card_logo.png" alt="" class="img-fluid rounded-circle">
                                </div>
                                <div class="property__organizor--name">
                                    <span>BY</span>
                                    Gulf Investment Co.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
<?php include_once "includes/footer.php";?>