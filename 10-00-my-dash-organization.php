<?php include_once "includes/header.php";?>
<div class="content-wrapper dash-organization">
    <div class="pageHead">
        <div class="container">
            <h1>Edit Your<span> Profile</span></h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-md-6">
               <div class="image">
                 <img class="img-fluid" src="src/images/dash_organization_img.png" alt="">
               </div>
            </div>
            <div class="col-xl-5 col-md-6">
                <form>
                    <div class="form-group">
                        <div class="uploadFile__item">
                            <div class="uploadFile__item--file" data-label="add">
                                <input type="file" name="file">
                                <div class="uploadFile__item--image">
                                    <img src="src/images/dash_organization_img.png" alt = ''>
                                    <span class="delete">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Business Name"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Industry Type </label>
                        <select class="selectpicker">
                            <option>Property Manager</option>
                            <option>Property Manager</option>
                            <option>Property Manager</option>
                            <option>Property Manager</option>
                            <option>Property Manager</option>
                            <option>Property Manager</option>
                            <option>Property Manager</option>
                            <option>Property Manager</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" value="sakina@kuwaitnet.com" disabled/>
                    </div>
                    <div class="form-group">
                        <div class="fields-group">
                            <input type="tel" class="form-control" placeholder="+965">
                            <input type="tel" class="form-control" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="form-group">
                    <textarea class="form-control" placeholder="Business Address"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="checkbox" checked="">
                                <span>Receive Emails</span>
                            </label>
                        </div>
                    </div>
                    <div class="inline-btn">
                        <button class="btn btn-secondary btn-lg">update</button>
                        <button class="btn btn-cancel btn-lg">cancel</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>    
</div>
<?php include_once "includes/footer.php";?> 