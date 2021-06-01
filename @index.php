<?php $ishome = 1; include_once "includes/header.php";?>      
    <div class="content-wrapper">
        
    	<div class="searchProperty">
            <div class="semiCircle"></div> 
            <div class="bg"></div>
            <div class="container">
                <h1 class="text-center">Find Your <span>Perfect place</span></h1>
                <div class="searchProperty__input">
                    <input type="text" class="form-control searchInput" placeholder="Where do you want to search?">
                </div>
            </div>
            
        </div>
        <!-- invest -->
        <div class="invest">
            <div class="container">
                <h2 class="sectionTitle">How To Invest</h2>
                <div class="slick-instance" data-slick='{"slidesToShow": 4, "slidesToScroll": 1 ,"responsive": [
                {"breakpoint": 1200, "settings": {"slidesToShow": 3, "centerMode":false}}, {"breakpoint": 992, "settings": {"slidesToShow": 2,"centerMode": false}},{"breakpoint": 576, "settings": {"slidesToShow": 1,"centerMode": false}}
                ]}'>
                    <div class="invest__item">
                        <div class="invest__item--image">
                            <img src="src/images/invest/invest-img1.png" alt="img1">
                        </div>
                        <div class="invest__item--title">Sell a Property</div>
                        <div class="invest__item--desc">
                            <p>Lorem Ipsum is simply dummy is the text of the printing.</p>
                        </div>
                        <a href="#" class="btn btn-primary">start now</a>
                    </div>
                    <div class="invest__item">
                        <div class="invest__item--image">
                            <img src="src/images/invest/invest-img2.png" alt="img1">
                        </div>
                        <div class="invest__item--title">Rent a Property</div>
                        <div class="invest__item--desc">
                            <p>Lorem Ipsum is simply dummy is the text of the printing.</p>
                        </div>
                        <a href="#" class="btn btn-primary">start now</a>
                    </div>
                    <div class="invest__item">
                        <div class="invest__item--image">
                            <img src="src/images/invest/invest-img3.png" alt="img1">
                        </div>
                        <div class="invest__item--title">Buy a Property</div>
                        <div class="invest__item--desc">
                            <p>Lorem Ipsum is simply dummy is the text of the printing.</p>
                        </div>
                        <a href="#" class="btn btn-primary">start now</a>
                    </div>
                    <div class="invest__item">
                        <div class="invest__item--image">
                            <img src="src/images/invest/invest-img4.png" alt="img1">
                        </div>
                        <div class="invest__item--title">Exchange a Properties</div>
                        <div class="invest__item--desc">
                            <p>Lorem Ipsum is simply dummy is the text of the printing.</p>
                        </div>
                        <a href="#" class="btn btn-primary">start now</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- invest -->
        <!-- New Properties to Rent -->
        <div class="featuredProperties" id="propertiesRent">
            <div class="container featuredProperties__head">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="sectionTitle text-center">New Properties to Rent</h2>
                    <a href="#" class="btn btn-primary">View All</a>
                </div>
            </div>
            <div class="featuredProperties__wrapper">
                <div class="properties">
                    <?php include "includes/featuredProperty.php"?>
                    <?php include "includes/featuredProperty.php"?>
                    <?php include "includes/featuredProperty.php"?>
                    <?php include "includes/featuredProperty.php"?>
                    <?php include "includes/featuredProperty.php"?>
                    <?php include "includes/featuredProperty.php"?>
                    <?php include "includes/featuredProperty.php"?>
                    <?php include "includes/featuredProperty.php"?>
                    <?php include "includes/featuredProperty.php"?>
                    <?php include "includes/featuredProperty.php"?>
                    <?php include "includes/featuredProperty.php"?>
                </div>
            </div>
            <div class="featuredProperties__wrapper--slider"></div>
        </div>
        <!-- New Properties to Rent -->
        <!-- New Properties to Buy -->
        <div class="featuredProperties" id="propertiesBuy">
            <div class="container featuredProperties__head">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="sectionTitle text-center">New Properties to Buy</h2>
                    <a href="#" class="btn btn-primary">View All</a>
                </div>
            </div>
            <div class="featuredProperties__wrapper">
                <div class="properties">
                    <?php include "includes/featuredProperty.php"?>
                    <?php include "includes/featuredProperty.php"?>
                    <?php include "includes/featuredProperty.php"?>
                    <?php include "includes/featuredProperty.php"?>
                    <?php include "includes/featuredProperty.php"?>
                    <?php include "includes/featuredProperty.php"?>
                    <?php include "includes/featuredProperty.php"?>
                    <?php include "includes/featuredProperty.php"?>
                    <?php include "includes/featuredProperty.php"?>
                    <?php include "includes/featuredProperty.php"?>
                    <?php include "includes/featuredProperty.php"?>
                    <?php include "includes/featuredProperty.php"?>
                    <?php include "includes/featuredProperty.php"?>
                    <?php include "includes/featuredProperty.php"?>
                    <?php include "includes/featuredProperty.php"?>
                    <?php include "includes/featuredProperty.php"?>
                </div>
            </div>
            <div class="featuredProperties__wrapper--slider"></div>
        </div>
        <!-- New Properties to Buy -->
        <div class="lifestyle">
            <div class="container">
                <h2 class="sectionTitle text-center">Find Properties based on your lifestyle</h2>
                <div class="lifestyle__content">
                    <div class="lifestyle__content--head">
                        <div class="toggler-filter">    
                            <a class="toggle-filter-btn active d-none">
                            Find Properties
                            </a>
                            <ul class="nav nav-tabs" id="lifestyle" role="tablist">
                                <li class="nav-item">
                                    <a data-title="home" class="nav-link active" id="home-tab" data-toggle="tab" href="#homes" role="tab" aria-controls="home" aria-selected="true">
                                        <svg fill="currentColor" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 384">
                                            <use xlink:href="#home"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a data-title="Commerical" class="nav-link" id="building-tab" data-toggle="tab" href="#buildings" role="tab" aria-controls="building" aria-selected="false">
                                        <svg fill="currentColor" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 324.49">
                                            <use xlink:href="#building"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a data-title="Shopping" class="nav-link" id="shopping-tab" data-toggle="tab" href="#shops" role="tab" aria-controls="building" aria-selected="false">
                                        <svg fill="currentColor" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 376 352">
                                            <use xlink:href="#shop"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a data-title="Offices" class="nav-link" id="office-tab" data-toggle="tab" href="#offices" role="tab" aria-controls="office" aria-selected="false">
                                        <svg fill="currentColor" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 415.03">
                                            <use xlink:href="#office"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a data-title="Apartments" class="nav-link" id="apartment-tab" data-toggle="tab" href="#apartments" role="tab" aria-controls="apartment" aria-selected="false">
                                        <svg fill="currentColor" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 441.67 512">
                                            <use xlink:href="#apartment"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a data-title="view all" href="" class="nav-link">
                                        <svg fill="currentColor" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 461.31 296.96">
                                            <use xlink:href="#eye"></use>
                                        </svg>
                                    </a>
                                </li>
                            </ul> 
                        </div> 
                    </div>
                    <div class="lifestyle__content--body">
                        <div class="container">
                            <div class="tab-content" id="lifestyle-tabContent">
                                <div class="tab-pane fade show active" id="homes" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="home__tab">
                                        <div class="home__tab--content">
                                            <img src="src/images/home-tab-one.png" alt="" class="img-fluid">
                                            <div class="home__tab--content--overlay">
                                                <a href=""></a>
                                            </div>
                                        </div>
                                        <div class="home__tab--content">
                                            <img src="src/images/home-tab-two.png" alt="" class="img-fluid">
                                            <div class="home__tab--content--overlay">
                                                <a href=""></a>
                                            </div>
                                        </div>
                                        <div class="home__tab--content">
                                            <img src="src/images/home-tab-four.png" alt="" class="img-fluid">
                                            <div class="home__tab--content--overlay">
                                                <a href=""></a>
                                            </div>
                                        </div>
                                        <div class="home__tab--content">
                                            <img src="src/images/home-tab-five.png" alt="" class="img-fluid">
                                            <div class="home__tab--content--overlay">
                                                <a href=""></a>
                                            </div>
                                        </div>
                                        <div class="home__tab--content">
                                            <img src="src/images/home-tab-six.png" alt="" class="img-fluid">
                                            <div class="home__tab--content--overlay">
                                                <a href=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="buildings" role="tabpanel" aria-labelledby="building-tab">
                                    <div class="home__tab">
                                        <div class="home__tab--content">
                                            <img src="src/images/home-tab-one.png" alt="" class="img-fluid">
                                            <div class="home__tab--content--overlay">
                                                <a href=""></a>
                                            </div>
                                        </div>
                                        <div class="home__tab--content">
                                            <img src="src/images/home-tab-two.png" alt="" class="img-fluid">
                                            <div class="home__tab--content--overlay">
                                                <a href=""></a>
                                            </div>
                                        </div>
                                        <div class="home__tab--content">
                                            <img src="src/images/house.png" alt="" class="img-fluid">
                                            <div class="home__tab--content--overlay">
                                                <a href=""></a>
                                            </div>
                                        </div>
                                        <div class="home__tab--content">
                                            <img src="src/images/house.png" alt="" class="img-fluid">
                                            <div class="home__tab--content--overlay">
                                                <a href=""></a>
                                            </div>
                                        </div>
                                        <div class="home__tab--content">
                                            <img src="src/images/house.png" alt="" class="img-fluid">
                                            <div class="home__tab--content--overlay">
                                                <a href=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="shops" role="tabpanel" aria-labelledby="shopping-tab">
                                    <div class="home__tab">
                                        <div class="home__tab--content">
                                            <img src="src/images/home-tab-one.png" alt="" class="img-fluid">
                                            <div class="home__tab--content--overlay">
                                                <a href=""></a>
                                            </div>
                                        </div>
                                        <div class="home__tab--content">
                                            <img src="src/images/home-tab-two.png" alt="" class="img-fluid">
                                            <div class="home__tab--content--overlay">
                                                <a href=""></a>
                                            </div>
                                        </div>
                                        <div class="home__tab--content">
                                            <img src="src/images/house.png" alt="" class="img-fluid">
                                            <div class="home__tab--content--overlay">
                                                <a href=""></a>
                                            </div>
                                        </div>
                                        <div class="home__tab--content">
                                            <img src="src/images/house.png" alt="" class="img-fluid">
                                            <div class="home__tab--content--overlay">
                                                <a href=""></a>
                                            </div>
                                        </div>
                                        <div class="home__tab--content">
                                            <img src="src/images/house.png" alt="" class="img-fluid">
                                            <div class="home__tab--content--overlay">
                                                <a href=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="offices" role="tabpanel" aria-labelledby="office-tab">
                                    <div class="home__tab">
                                        <div class="home__tab--content">
                                            <img src="src/images/home-tab-one.png" alt="" class="img-fluid">
                                            <div class="home__tab--content--overlay">
                                                <a href=""></a>
                                            </div>
                                        </div>
                                        <div class="home__tab--content">
                                            <img src="src/images/home-tab-two.png" alt="" class="img-fluid">
                                            <div class="home__tab--content--overlay">
                                                <a href=""></a>
                                            </div>
                                        </div>
                                        <div class="home__tab--content">
                                            <img src="src/images/house.png" alt="" class="img-fluid">
                                            <div class="home__tab--content--overlay">
                                                <a href=""></a>
                                            </div>
                                        </div>
                                        <div class="home__tab--content">
                                            <img src="src/images/house.png" alt="" class="img-fluid">
                                            <div class="home__tab--content--overlay">
                                                <a href=""></a>
                                            </div>
                                        </div>
                                        <div class="home__tab--content">
                                            <img src="src/images/house.png" alt="" class="img-fluid">
                                            <div class="home__tab--content--overlay">
                                                <a href=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="apartments" role="tabpanel" aria-labelledby="apartment-tab">
                                    <div class="home__tab">
                                        <div class="home__tab--content">
                                            <img src="src/images/home-tab-one.png" alt="" class="img-fluid">
                                            <div class="home__tab--content--overlay">
                                                <a href=""></a>
                                            </div>
                                        </div>
                                        <div class="home__tab--content">
                                            <img src="src/images/home-tab-two.png" alt="" class="img-fluid">
                                            <div class="home__tab--content--overlay">
                                                <a href=""></a>
                                            </div>
                                        </div>
                                        <div class="home__tab--content">
                                            <img src="src/images/house.png" alt="" class="img-fluid">
                                            <div class="home__tab--content--overlay">
                                                <a href=""></a>
                                            </div>
                                        </div>
                                        <div class="home__tab--content">
                                            <img src="src/images/house.png" alt="" class="img-fluid">
                                            <div class="home__tab--content--overlay">
                                                <a href=""></a>
                                            </div>
                                        </div>
                                        <div class="home__tab--content">
                                            <img src="src/images/house.png" alt="" class="img-fluid">
                                            <div class="home__tab--content--overlay">
                                                <a href=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   	</div>
<?php include_once "includes/footer.php";?>
