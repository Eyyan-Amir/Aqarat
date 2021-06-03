<?php include_once "includes/header.php";?>
<div class="content-wrapper">
    <div class="pageHead">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <h1>My<span>Properties</span></h1>
                <a href="#" class="btn btn-secondary">Add a propertry</a>
            </div>
        </div>
    </div>
    <div class="properties">
        <div class="container">
            <form>
                <div class="filterRow">
                    <div class="relative">
                        <label class="control-label">Filter By</label>
                        <select class="selectpicker">
                            <option>Archived</option>
                            <option>Completed</option>
                            <option>In-progress</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">go!</button>
                </div>
            </form>
            <div>
                <table id="example" class="display table" style="width:100%">
                    <thead >
                        <tr >
                            <th> Property ID</th>
                            <th>Property Name</th>
                            <th>Category</th>
                            <th>For?</th>
                            <th>Price (KD)</th>
                            <th>Deal Price (KD)</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="#" class="id">1000</a></td>
                            <td>Sunset Villa - Beverly Hills</td>
                            <td>House</td>
                            <td>Exchange</td>
                            <td>3000</td>
                            <td>0</td>
                            <td>
                                <div class="status green">
                                    <svg fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 320.001 320.001" style="enable-background:new 0 0 320.001 320.001;" xml:space="preserve">
                                    <use xlink:href="#play-icon"></use>
                                    </svg>
                                     Open
                                <p>Expires in 39 Days</p>
                                </div>
                            </td>
                            <td>
                                <ul class="action-btns">
                                    <li class="edit">
                                        <a href="#">
                                        <svg fill="currentColor" height="492pt" viewBox="0 0 492.49284 492" width="492pt" xmlns="http://www.w3.org/2000/svg">
                                            <use xlink:href="#edit-icon"></use>
                                        </svg>      
                                        </a>
                                    </li>
                                    <li class="delete">
                                        <a href="#">
                                        <svg fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 384 384" style="enable-background:new 0 0 384 384;" xml:space="preserve">
                                            <use xlink:href="#delete-icon"></use>
                                        </svg>
                                        </a>
                                    </li>
                            </ul>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="#" class="id">1021</a></td>
                            <td>Rose Apartment</td>
                            <td>Apartments</td>
                            <td>Buy</td>
                            <td>56.000</td>
                            <td>34.500</td>
                            <td>
                                <div class="status blue">
                                    <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="52.8014mm" height="59.3963mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 1227 1380.25" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <use xlink:href="#progress-icon"></use>
                                    </svg>
                                    In-progress
                                </div>
                            </td>
                            <td>
                                <ul class="action-btns">
                                    <li class="edit">
                                        <a href="#">
                                            <svg fill="currentColor" height="492pt" viewBox="0 0 492.49284 492" width="492pt" xmlns="http://www.w3.org/2000/svg">
                                                <use xlink:href="#edit-icon"></use>
                                            </svg>      
                                        </a>
                                    </li>
                                    <li class="delete">
                                        <a href="#">
                                            <svg fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 384 384" style="enable-background:new 0 0 384 384;" xml:space="preserve">
                                                <use xlink:href="#delete-icon"></use>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="#" class="id">1099</a></td>
                            <td>Al Awadhi Offices 12 floors</td>
                            <td>Office</td>
                            <td>Rent</td>
                            <td>12000</td>
                            <td>12000</td>
                            <td>
                                <div class="status red">
                                    <svg fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="973.199px" height="973.199px" viewBox="0 0 973.199 973.199" style="enable-background:new 0 0 973.199 973.199;" xml:space="preserve">
                                        <use xlink:href="#archiev-icon"></use>
                                    </svg>
                                    Archived
                                </div>
                            </td>
                            <td>
                                <ul class="action-btns">
                                    <li class="edit">
                                        <a href="#">
                                            <svg fill="currentColor" height="492pt" viewBox="0 0 492.49284 492" width="492pt" xmlns="http://www.w3.org/2000/svg">
                                                <use xlink:href="#edit-icon"></use>
                                            </svg>      
                                        </a>
                                    </li>
                                    <li class="delete">
                                        <a href="#">
                                            <svg fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 384 384" style="enable-background:new 0 0 384 384;" xml:space="preserve">
                                                <use xlink:href="#delete-icon"></use>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="#" class="id">1899</a></td>
                            <td>Al Reem Penthouse</td>
                            <td>House</td>
                            <td>Buy</td>
                            <td>5000</td>
                            <td>0</td>
                            <td>
                                <div class="status darkblue">
                                    <svg fill="currentColor" height="417pt" viewBox="0 -46 417.81333 417" width="417pt" xmlns="http://www.w3.org/2000/svg">
                                        <use xlink:href="#check-icon"></use>
                                    </svg>
                                    Completed
                                </div>
                            </td>
                            <td>
                                <ul class="action-btns">
                                    <li class="edit">
                                        <a href="#">
                                            <svg fill="currentColor" height="492pt" viewBox="0 0 492.49284 492" width="492pt" xmlns="http://www.w3.org/2000/svg">
                                                <use xlink:href="#edit-icon"></use>
                                            </svg>      
                                        </a>
                                    </li>
                                    <li class="delete">
                                        <a href="#">
                                            <svg fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 384 384" style="enable-background:new 0 0 384 384;" xml:space="preserve">
                                                <use xlink:href="#delete-icon"></use>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </td>
                        </tr>                        
                    </tbody>    
                </table>
            </div>
        </div>    
    </div>
</div>
<?php include_once "includes/footer.php";?> 