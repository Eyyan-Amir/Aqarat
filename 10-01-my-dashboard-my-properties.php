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
            <div class="table display" id='myTable'>
                <div class="table__head">
                    <div class="table__row">
                        <div class="table__row--cell" data-width="10">
                        Property ID
                        </div>
                        <div class="table__row--cell text-left" data-width="20">
                        Property Name
                        </div>
                        <div class="table__row--cell">
                        Category
                        </div>
                        <div class="table__row--cell">
                        For?
                        </div>
                        <div class="table__row--cell">
                        Price (KD)
                        </div>
                        <div class="table__row--cell">
                        Deal Price (KD)
                        </div>
                        <div class="table__row--cell  text-left" data-width="17">
                        Status
                        </div>
                        <div class="table__row--cell">
                        Actions
                        </div>
                    </div>
                </div>
                <div class="table__body">
                    <div class="table__row">
                        <div class="table__row--cell" data-width="10" data-label="Property ID">1000</div>
                        <div class="table__row--cell text-left" data-label=" Property Name" data-width="20">
                        Sunset Villa - Beverly Hills 
                        </div>
                        <div class="table__row--cell" data-label="Category">
                        House
                        </div>
                        <div class="table__row--cell" data-label="For?">
                        Exchange
                        </div>
                        <div class="table__row--cell" data-label="Price (KD)">
                        3000
                        </div>
                        <div class="table__row--cell" data-label="Deal Price (KD)">
                        0
                        </div>
                        <div class="table__row--cell text-left" data-label="Status" data-width="17">
                            <div class="status green">
                                <svg fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 320.001 320.001" style="enable-background:new 0 0 320.001 320.001;" xml:space="preserve">
                                <use xlink:href="#play-icon"></use>
                                </svg>
                                Open
                            <p>Expires in 39 Days</p>
                            </div>
                        </div>
                        <div class="table__row--cell" data-label="Actions">
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
                        </div>
                    </div>
                    <div class="table__row">
                        <div class="table__row--cell" data-width="10" data-label="Property ID">1021</div>
                        <div class="table__row--cell text-left" data-label=" Property Name" data-width="20">
                        Rose Apartment 
                        </div>
                        <div class="table__row--cell" data-label="Category">
                        Apartments
                        </div>
                        <div class="table__row--cell" data-label="For?">
                        Buy
                        </div>
                        <div class="table__row--cell" data-label="Price (KD)">
                        56.000
                        </div>
                        <div class="table__row--cell" data-label="Deal Price (KD)">
                        34.500
                        </div>
                        <div class="table__row--cell text-left" data-label="Status" data-width="17">
                            <div class="status blue">
                            <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="52.8014mm" height="59.3963mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 1227 1380.25" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <use xlink:href="#progress-icon"></use>
                                </svg>
                                In-progress
                            </div>
                        </div>
                        <div class="table__row--cell" data-label="Actions">
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
                        </div>
                    </div>
                    <div class="table__row">
                        <div class="table__row--cell" data-width="10" data-label="Property ID">1099</div>
                        <div class="table__row--cell text-left" data-label=" Property Name" data-width="20">
                        Al Awadhi Offices 12 floors 
                        </div>
                        <div class="table__row--cell" data-label="Category">
                        Office
                        </div>
                        <div class="table__row--cell" data-label="For?">
                        Rent
                        </div>
                        <div class="table__row--cell" data-label="Price (KD)">
                        12000
                        </div>
                        <div class="table__row--cell" data-label="Deal Price (KD)">
                        12000
                        </div>
                        <div class="table__row--cell text-left" data-label="Status" data-width="17">
                            <div class="status red">
                            <svg fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="973.199px" height="973.199px" viewBox="0 0 973.199 973.199" style="enable-background:new 0 0 973.199 973.199;" xml:space="preserve">
                                <use xlink:href="#archiev-icon"></use>
                                </svg>
                                Archived
                            </div>
                        </div>
                        <div class="table__row--cell" data-label="Actions">
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
                        </div>
                    </div>
                    <div class="table__row">
                        <div class="table__row--cell" data-width="10" data-label="Property ID">1899</div>
                        <div class="table__row--cell text-left" data-label=" Property Name" data-width="20">
                        Al Reem Penthouse 
                        </div>
                        <div class="table__row--cell" data-label="Category">
                        House
                        </div>
                        <div class="table__row--cell" data-label="For?">
                        Buy
                        </div>
                        <div class="table__row--cell" data-label="Price (KD)">
                        5000
                        </div>
                        <div class="table__row--cell" data-label="Deal Price (KD)">
                        0
                        </div>
                        <div class="table__row--cell text-left" data-label="Status" data-width="17">
                            <div class="status darkblue">
                            <svg fill="currentColor" height="417pt" viewBox="0 -46 417.81333 417" width="417pt" xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="#check-icon"></use>
                                </svg>
                                Completed
                            </div>
                        </div>
                        <div class="table__row--cell" data-label="Actions">
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
                        </div>
                    </div>
                    <div class="loader-holder marker-end">
                        <img src="src/images/svg/loader.svg" alt="">
                    </div>
                    <input type="hidden" id="loadmorecount" value="2">
                </div>
            </div>
        </div>    
    </div>
</div>
<?php include_once "includes/footer.php";?> 