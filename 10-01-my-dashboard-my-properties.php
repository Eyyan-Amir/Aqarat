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
                    <thead class="table__head">
                        <tr class="table__row">
                            <th class="table__row--cell">Property ID</th>
                            <th class="table__row--cell">Property Name</th>
                            <th class="table__row--cell">Category</th>
                            <th class="table__row--cell">For?</th>
                            <th class="table__row--cell">Price (KD)</th>
                            <th class="table__row--cell">Deal Price (KD)</th>
                            <th class="table__row--cell">Status</th>
                            <th class="table__row--cell">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table__body">
                        <tr class="table__row">
                            <td class="table__row--cell">1000</td>
                            <td class="table__row--cell">Sunset Villa - Beverly Hills</td>
                            <td class="table__row--cell">House</td>
                            <td class="table__row--cell">Exchange</td>
                            <td class="table__row--cell">3000</td>
                            <td class="table__row--cell">0</td>
                            <td class="table__row--cell">
                                <div class="status green">
                                    <svg fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 320.001 320.001" style="enable-background:new 0 0 320.001 320.001;" xml:space="preserve">
                                    <use xlink:href="#play-icon"></use>
                                    </svg>
                                     Open
                                <p>Expires in 39 Days</p>
                                </div>
                            </td>
                            <td class="table__row--cell">
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
                        <tr class="table__row">
                            <td class="table__row--cell">1021</td>
                            <td class="table__row--cell">Rose Apartment</td>
                            <td class="table__row--cell">Apartments</td>
                            <td class="table__row--cell">Buy</td>
                            <td class="table__row--cell">56.000</td>
                            <td class="table__row--cell">34.500</td>
                            <td class="table__row--cell">
                                <div class="status blue">
                                    <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="52.8014mm" height="59.3963mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 1227 1380.25" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <use xlink:href="#progress-icon"></use>
                                    </svg>
                                    In-progress
                                </div>
                            </td>
                            <td class="table__row--cell">
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
                        <tr class="table__row">
                            <td class="table__row--cell">1099</td>
                            <td class="table__row--cell">Al Awadhi Offices 12 floors</td>
                            <td class="table__row--cell">Office</td>
                            <td class="table__row--cell">Rent</td>
                            <td class="table__row--cell">12000</td>
                            <td class="table__row--cell">12000</td>
                            <td class="table__row--cell">
                                <div class="status red">
                                    <svg fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="973.199px" height="973.199px" viewBox="0 0 973.199 973.199" style="enable-background:new 0 0 973.199 973.199;" xml:space="preserve">
                                        <use xlink:href="#archiev-icon"></use>
                                    </svg>
                                    Archived
                                </div>
                            </td>
                            <td class="table__row--cell">
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
                        <tr class="table__row">
                            <td class="table__row--cell">1899</td>
                            <td class="table__row--cell">Al Reem Penthouse</td>
                            <td class="table__row--cell">House</td>
                            <td class="table__row--cell">Buy</td>
                            <td class="table__row--cell">5000</td>
                            <td class="table__row--cell">0</td>
                            <td class="table__row--cell">
                                <div class="status darkblue">
                                    <svg fill="currentColor" height="417pt" viewBox="0 -46 417.81333 417" width="417pt" xmlns="http://www.w3.org/2000/svg">
                                        <use xlink:href="#check-icon"></use>
                                    </svg>
                                    Completed
                                </div>
                            </td>
                            <td class="table__row--cell">
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