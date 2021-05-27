<div class="container">
    <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="register" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="registerTypes">
                        <div class="registerTypes__item">
                            <div class="registerTypes__item--icon">
                                <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#registerland">
                                    <svg fill="currentColor" enable-background="new 0 0 64 64" height="512" viewBox="0 0 64 64" width="512" xmlns="http://www.w3.org/2000/svg">
                                        <use xlink:href="#landlord"></use>
                                    </svg>
                                </a>
                            </div>
                            <p class="registerTypes__item--title">Are you a landlord/Industry professional?</p>
                        </div>
                        <div class="registerTypes__item">
                            <div class="registerTypes__item--icon">
                                <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#registerInd">
                                    <svg fill="currentColor" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg">
                                            <use xlink:href="#house-icon"></use>
                                    </svg>
                                </a>
                            </div>
                            <p class="registerTypes__item--title">I’m an Individual</p>
                        </div>
                    </div>
                    

                </div>
                <div class="modal-footer">
                    <p class="mx-auto">Already have account? <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#signIn">sign in</a></p>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="forgetPassword" tabindex="-1" role="dialog" aria-labelledby="forgetPassword" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Forget your password</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        Enter your email we will generate a password reset link
                    </p>
                    <div class="form-group">
                        <input type="email" class="form-control icon_input" placeholder="Email">
                        <div class="icon">
                            <svg fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 230.17 230.17" style="enable-background:new 0 0 230.17 230.17;" xml:space="preserve">
                                <use xlink:href="#email"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="button-row">
                        <button class="btn btn-secondary ">
                            Submit
                        </button>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="modal fade" id="signIn" tabindex="-1" role="dialog" aria-labelledby="signIn" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Sign In</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="email" class="form-control icon_input" placeholder="Email">
                        <div class="icon">
                            <svg fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 230.17 230.17" style="enable-background:new 0 0 230.17 230.17;" xml:space="preserve">
                                <use xlink:href="#email"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control icon_input" placeholder="Password">
                        <div class="icon">
                            <svg fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 47 47" style="enable-background:new 0 0 47 47;" xml:space="preserve">
                                    <use xlink:href="#password"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="button-row">
                        <button class="btn btn-secondary ">
                            login
                        </button>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#forgetPassword"><i>forget password?</i></a>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="registerInd" tabindex="-1" role="dialog" aria-labelledby="registerInd" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title">Registration <span>(Individual)</span></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Confirm Password">
                    </div>
                    <div class="form-group">
                        <div class="fields-group">
                            <!-- <input type="text" value="+965" class="form-control font-weight-bold" placeholder="Height"> -->
                            
                            <select class="selectpicker form-control" title="Code">
                                    <option>+965</option>
                                    <option>+965</option>
                                    <option>+965</option>
                                    <option>+965</option>
                                    <option>+965</option>
                                    <option>+965</option>
                                    <option>+965</option>
                                    <option>+965</option>
                                    <option>+965</option>
                                    <option>+965</option>
                                </select>
                            </select>
                            <input type="tel" class="form-control" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Occupation">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Company">
                    </div>
                    <div class="form-group">
                        <label class="control-label">What are you here for?</label>
                        <select class="selectpicker form-control">
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
                    <div class="button-row ">
                        <button class="btn btn-secondary ">
                            submit
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="registerland registerModal" tabindex="-1" role="dialog" aria-labelledby="registerland" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Registration <span>(Landlords/Organization)</span></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <div class="uploadFile__item" data-text="add logo">
                            <div class="uploadFile__item--file">
                                <input type="file" name="file">
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Business Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Industry Type</label>
                            <select class="selectpicker form-control">
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
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email ID">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Confirm Password">
                        </div>
                        <div class="form-group">
                            <div class="fields-group">
                                <!-- <input type="text" value="+965" class="form-control font-weight-bold" placeholder="Height"> -->
                                <select class="selectpicker form-control" title="Code">
                                    <option>+965</option>
                                    <option>+965</option>
                                    <option>+965</option>
                                    <option>+965</option>
                                    <option>+965</option>
                                    <option>+965</option>
                                    <option>+965</option>
                                    <option>+965</option>
                                    <option>+965</option>
                                    <option>+965</option>
                                </select>
                                <input type="tel" class="form-control" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Business Address"></textarea>
                        </div>
                        <div class="button-row">
                            <button class="btn btn-secondary ">
                                submit
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade registerModal" id="registeragent" tabindex="-1" role="dialog" aria-labelledby="registeragent" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Registration <span>(Agent)</span></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <div class="uploadFile__item" data-text="add logo">
                            <div class="uploadFile__item--file">
                                <input type="file" name="file">
                            </div>
                            
                        </div>
                        
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Company Name / Tagline">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email ID">
                        </div>
                        
                        <div class="form-group">
                            <div class="fields-group">
                                <!-- <input type="text" value="+965" class="form-control font-weight-bold" placeholder="Height"> -->
                                <select class="selectpicker form-control" title="Code">
                                    <option>+965</option>
                                    <option>+965</option>
                                    <option>+965</option>
                                    <option>+965</option>
                                    <option>+965</option>
                                    <option>+965</option>
                                    <option>+965</option>
                                    <option>+965</option>
                                    <option>+965</option>
                                    <option>+965</option>
                                </select>
                                <input type="tel" class="form-control" placeholder="Phone Number">
                            </div>
                        </div>
                        
                        <div class="button-row">
                            <button class="btn btn-secondary ">
                                submit
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 <!-- // abuse Modal -->

    

    
    <div class="modal fade" id="regCompleted" tabindex="-1" role="dialog" aria-labelledby="register" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">You are almost done!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="img-container text-center">
                        <img src="src/images/footer__icon.png" alt="">
                    </div>
                    <h4>Registration completed!</h4>
                    <p>We have sent you a verification link, please follow
                    that and verify you email account to log in.</p>
                    <div class="button-row">
                        <button class="btn btn-secondary ">
                            Submit
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade gallery" id="gallery1" tabindex="-1" role="dialog" aria-labelledby="gallery1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg fill="currentColor" id="Capa_121" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <use xlink:href="#modal-cross"></use>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="carousel">
                        <div class="slides">
                            <div class="slideItem">
                                <a href="#"> <img src="src/images/home-tab-five.png" alt="" class="img-fluid"> </a>
                                <div class="shadow"></div>
                            </div>
                            <div class="slideItem">
                                <a href="#"> <img src="src/images/home-tab-five.png" alt="" class="img-fluid"> </a>
                                <div class="shadow"></div>
                            </div>
                            <div class="slideItem">
                                <a href="#"> <img src="src/images/home-tab-five.png" alt=""> </a>
                                <div class="shadow"></div>
                            </div>
                            <div class="slideItem">
                                <a href="#"> <img src="src/images/property-details/ModelImage.png" alt="" class="img-fluid"> </a>
                                <div class="shadow"></div>
                            </div>
                            <div class="slideItem">
                                <a href="#"> <img src="src/images/property-details/ModelImage.png" alt="" class="img-fluid"> </a>
                                <div class="shadow"></div>
                            </div>
                            <div class="slideItem">
                                <a href="#"> <img src="src/images/property-details/ModelImage.png" alt="" class="img-fluid"> </a>
                                <div class="shadow"></div>
                            </div>
                            
                        </div>
                        <div class="slidesCounter">
                            <span class="current">1</span> / <span class="total">5</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




 
</div>