<?php define('URLROOT', 'http://localhost:8888/project-php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="<?php echo URLROOT?>/public/css/fonts.css">
        <link rel="stylesheet" href="<?php echo URLROOT?>/public/css/product-detail.css">
        <link rel="stylesheet" href="<?php echo URLROOT?>/public/css/style.css">
    </head>
    <body>
        <div>
            <?php require_once '../includes/quickview.php'?>
        </div>
        <div>
            <?php require_once '../includes/header.php';?>
        </div> 
        <div>
            <!--Product detail-->
            <div class="container-fluid">
                <!--DETAIL-->
                <div class="prod-detail">
                    <div class="row">
                    <div class="col-2">
                        <div class="mbt">
                        <a href="#">
                            <img src="../../../public/images/product-detail/detail1.webp">
                        </a>
                        </div>
                        <div class="mbt">
                        <a href="#">
                            <img src="../../../public/images/product-detail/detail2.webp">
                        </a>
                        </div>
                        <div class="mbt">
                        <a href="#">
                            <img src="../../../public/images/product-detail/detail3.webp">
                        </a>
                        </div>
                    </div>
                    <div class="col-6">
                        <a href="#">
                        <img src="../../../public/images/product-detail/detail4.webp">
                        </a>
                    </div>
                    <div class="col-4">
                        <!--Breadcrumb-->
                        <nav aria-label="breadcrumb">
                        <ol class="breadcrumb crumb">
                            <li class="breadcrumb-item"><a href="#" href="home.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="#" href="#">Shop all</a></li>
                            <li class="breadcrumb-item"><a href="#" href="sub-category.php">Rings</a></li>
                        </ol>
                        </nav>
                        <a href="#">
                        <p class="mdt">AGURI'S ETERNITY MAGIC</p>
                        </a>
                        <h5>Diamond and Gold Spark Ring</h5>
                        <h5 class="mt-2 mb-4">$6,700</h5>
                        <div class="d-flex">
                        <a class="me-auto">
                            <p class="mdt me-auto">Complimentary Shipping & Returns</p>
                        </a>
                        <i class="fa-solid fa-arrow-right"></i>
                        </div>
                        <div class="line mb-3"></div>
                        <div class=d-flex>
                        <p class="mdt me-auto">Quantity</p>
                        <div class="quantity">
                            <form id='myform' method='POST' class='quantity' action='#'>
                            <i class="fa-solid fa-minus"></i>
                            <input type='text' name='quantity' value='1' class='qty' />
                            <i class="fa-solid fa-plus"></i>
                            </form>
                        </div>
                        </div>
                        <div class="line mb-3"></div>
                        <div class=d-flex>
                        <p class="mdt me-auto mb-0 mt-1">Size</p>
                        <select class="form-select smt w-50">
                            <option selected>Select size</option>
                            <option value="1">3</option>
                            <option value="2">3 1/2</option>
                            <option value="3">4</option>
                            <option value="3">4 1/2</option>
                            <option value="3">5</option>
                            <option value="3">5 1/2</option>
                        </select>
                        </div>
                        <div class="line my-3"></div>
                        <div class="find-size">
                        <div class="d-flex" data-bs-toggle="offcanvas" data-bs-target="#findsize">
                            <p class="mdt me-auto mb-2">※ Find your size</p>
                            <i class="fa-solid fa-chevron-right"></i>
                        </div>
                        <!--OFFCANVAS FIND SIZE-->
                        <div class="offcanvas offcanvas-end" id="findsize">
                            <div class="offcanvas-header">
                            <h5 class="offcanvas-title mt-3">Find Your Ring Size</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                            <table class="ring-size">
                                <thead class="size-title pb-3">
                                <tr>
                                <th class="">AGURI (US) size</th>
                                <th class="mx12">Circumference (mm)</th>
                                <th class="select-trans">
                                    <select class="form-select smt">
                                    <option selected>UK</option>
                                    <option value="1">Japan</option>
                                    <option value="2">Italy</option>
                                    <option value="3">Germany</option>
                                    </select>
                                </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="ring-size text-center">
                                <td>
                                    <button class="btn btn-sec btnsm w-100" type="button">3</button>
                                </td>
                                <td>14.1 / 44.2</td>
                                <td>F</td>
                                </tr>
                                <tr class="ring-cir text-center mx12">
                                <td>
                                    <button class="btn btn-sec btnsm w-100" type="button">3 1/2</button>
                                </td>
                                <td>14.5 / 45.5</td>
                                <td>G 1/2</td>
                                </tr>
                                <tr class="trans-size text-center">
                                <td>
                                    <button class="btn btn-sec btnsm w-100" type="button">4</button>
                                </td>
                                <td>14.9 / 46.8</td>
                                <td>H 1/2</td>
                                </tr>
                                <tr class="text-center ">
                                <td>
                                    <button class="btn btn-sec btnsm w-100" type="button">4 1/2</button>
                                </td>
                                <td>15.3 / 48.0</td>
                                <td>I 1/2</td>
                                </tr>
                                <tr class="text-center ">
                                <td>
                                    <button class="btn btn-sec btnsm w-100" type="button">5</button>
                                </td>
                                <td>15.7 / 49.3</td>
                                <td>J 1/2</td>
                                </tr>
                                <tr class="text-center ">
                                <td>
                                    <button class="btn btn-sec btnsm w-100" type="button">5 1/2</button>
                                </td>
                                <td>15.7 / 49.3</td>
                                <td>J 1/2</td>
                                </tr>
                                </tbody>
                            </table>
                            <p class="text-center mt-4 mb-0 mdt">HOW TO MEASURE</p>
                            <div class="row mt-4">
                                <div class="col-4 px-0"></div>
                                <div class="col-4 px-0">
                                <img src="../../../images/product-detail/measure.png">
                                </div>
                                <div class="col-4 px-0"></div>
                            </div>
                            <div class="measure-content">
                                <p>1. Grab a tape measure, length of string or strip of paper.</p>
                                <p>2. Wrap it around the finger you’ll wear your ring on—if you’re creating a ring stack, consider where
                                on your finger the ring will sit—and mark the place where it joins.</p>
                                <p>3. Lay your string or paper strip on a flat surface and use a ruler to measure the length up to the mark.
                                Use the chart above to match the measurement to the closest Tiffany ring size.</p>
                            </div>
                            <!--Collapse How To Measure-->
                            </div>
                        </div>
                        </div>
                        <div class="bag">
                        <button class="add-bag btn btnlg btn-pri w-100" type="submit" data-bs-toggle="offcanvas" data-bs-target="#addbag2">Add to bag</button>
                        <!--OFFCANVSS ADD BAG-->
                        <div class="offcanvas offcanvas-end" id="addbag2">
                            <div class="offcanvas-header">
                            <h5 class="offcanvas-title mt-3">Shopping Bag</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                            <div class="row product-add1 mb-3">
                                <div class="col-4 ps-0">
                                <a href="#">
                                    <img src="../../../public/images/product-detail/add-product1.png">
                                </a>
                                </div>
                                <div class="col-8">
                                <div class="d-flex prd-title">
                                    <p class="prd-name">Amel Earring</p>
                                    <i class="fa-solid fa-xmark mb-auto"></i>
                                </div>
                                <div class="pe-0 prd-prc">
                                    <p>$5,000</p>
                                </div>
                                </div>
                            </div>
                            <div class="line mb-3"></div>
                            <div class="row product-add2 mb-3">
                                <div class="col-4 ps-0">
                                <a href="#">
                                    <img src="../../../public/images/product-detail/add-product2.png">
                                </a>
                                </div>
                                <div class="col-8">
                                <div class="d-flex prd-title">
                                    <p class="prd-name">Diamons And Gold Spark Ring</p>
                                    <i class="fa-solid fa-xmark mb-auto"></i>
                                </div>
                                <div class="prd-prc">
                                    <p>$6,700</p>
                                </div>
                                </div>
                            </div>
                            <div class="line mb-3"></div>
                            <div class="d-flex mb-3">
                                <p class="mdt me-auto">Product Total</p>
                                <p class="mdt">$11,700</p>
                            </div>
                            <div class="row offcanvas-btn">
                                <div class="col-6 offcanvas-checkbox">
                                <button class="btn btn-sec btnlg mt-3 w-100" type="button" hrefk="check-out.php">Checkout</button>
                                </div>
                                <div class="col-6 offcanvas-cart">
                                <button class="btn btn-pri btnlg mt-3 w-100" type="button" href="cart.php">View Cart</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="ask-advisor">
                        <button class="btn btn-sec btnlg w-100" type="button" data-bs-toggle="offcanvas" data-bs-target="#askadvisor">Ask A Client Advisor</button>
                        <!--OFFCANVSS ASK ADVISOR-->
                        <div class="offcanvas offcanvas-end" id="askadvisor">
                            <div class="offcanvas-header">
                            <h5 class="offcanvas-title mt-3">Aguri At Your Service</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                            <p class="pb-3">From finding the perfect Tiffany gift to jewelry styling advice, our Client Advisors are always here to help.</p>
                            <div class="d-flex">
                                <a class="me-auto" href="#">
                                <p class="mdt">Chat Online</p>
                                </a>
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                            <div class="line mb-3"></div>
                            <div class="d-flex">
                                <a class="me-auto" href="#">
                                <p class="mdt">Call</p>
                                </a>
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                            <div class="line mb-3"></div>
                            <div class="d-flex">
                                <a class="me-auto" href="#">
                                <p class="mdt">Book A Appointment</p>
                                </a>
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                            </div>
                        </div>
                        </div>
                        <!--DESCRIPTIONS & DETAIL-->
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <a class="accordion-header" id="flush-headingOne">
                            <p class="mdt accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne">
                                Descriptions & Details
                            </p>
                            </a>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="smt">Tiffany T1 designs reinvent our iconic Tiffany T collection with bold profiles and powerful details.
                                These hoop earrings are precisely crafted in 18k rose gold and feature a beveled edge traced with round brilliant diamonds.
                                Wear on their own as a striking statement or style with a mix of stud earrings for an unexpected look.
                                </p>
                                <ul>
                                <li class="smt">18k rose gold with round brilliant diamonds</li>
                                <li class="smt">Size extra small</li>
                                <li class="smt">Carat total weight .40</li>
                                <li class="smt">Product number:69782981</li>
                                </ul>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!--SIMILAR-PRODUCT-->
                <div class="simi-prod">
                    <div class="row">
                    <div class="col-3">
                        <h5>Similar Products</h5>
                        <p class="smt">AGURI designs reinvent our iconic AGURI collection with bold profiles and powerful details.</p>
                    </div>
                    <div class="col-9">
                        <div id="simi" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="1300">
                            <div class="row">
                                <div class="col-4">
                                <div class="item-card-info">
                                    <div class="card-prd">
                                    <div class="img">
                                        <a href="#">
                                        <img src="../../../public/images/home/new1.webp">
                                        </a>
                                    </div>
                                    <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#compare">
                                        Quick Compare
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="col-4">
                                <div class="item-card-info">
                                    <div class="card-prd">
                                    <div class="img">
                                        <a href="#">
                                        <img src="../../../public/images/home/new2.webp">
                                        </a>
                                    </div>
                                    <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#compare">
                                        Quick Compare
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="col-4">
                                <div class="item-card-info">
                                    <div class="card-prd">
                                    <div class="img">
                                        <a href="#">
                                        <img src="../../../public/images/home/new3.webp">
                                        </a>
                                    </div>
                                    <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#compare">
                                        Quick Compare
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="1300">
                            <div class="row">
                                <div class="col-4">
                                <div class="item-card-info">
                                    <div class="card-prd">
                                    <div class="img">
                                        <a href="#">
                                        <img src="../../../public/images/home/new4.webp">
                                        </a>
                                    </div>
                                    <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#compare">
                                        Quick Compare
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="col-4">
                                <div class="item-card-info">
                                    <div class="card-prd">
                                    <div class="img">
                                        <a href="#">
                                        <img src="../../../public/images/home/new5.webp">
                                        </a>
                                    </div>
                                    <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#compare">
                                        Quick Compare
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="col-4">
                                <div class="item-card-info">
                                    <div class="card-prd">
                                    <div class="img">
                                        <a href="#">
                                        <img src="../../../public/images/home/new6.webp">
                                        </a>
                                    </div>
                                    <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#compare">
                                        Quick Compare
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
                <!-- Modal Compare-->
                <div class="modal fade" id="compare">
                    <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <h5 class="modal-title" id="exampleModalLabel">Compare Products</h5>
                        <div class="row">
                        <div class="col-6 simi-left">
                            <div class="itm">
                            <a href="#">
                                <img src="../../../public/images/product-detail/compare1.png">
                            </a>
                            <div class="item-inf text-center">
                                <p class="mdt my-2">Diamond Spark Ring</p>
                                <p class="mdt">$6,700</p>
                            </div>
                            </div>
                            <div class="jewel">
                            <p class="compare-title mb-2">Jewellery</p>
                            <p class="smt my-1">Natural Jewelry</p>
                            <p class="smt mb-0">Round brilliant diamonds</p>
                            <p class="smt my-1">4mm width</p>
                            <p class="smt">Carat total weight .48</p>
                            </div>
                            <div class="line mb-2"></div>
                            <div class="mater">
                            <p class="compare-title mb-2">Material</p>
                            <p class="smt">16k White gold</p>
                            </div>
                            <button type="button" class="btn btn-pri btnsm w-100" data-bs-dismiss="modal">Add to bag</button>
                        </div>
                        <div class="col-6 simi-right">
                            <div class="itm">
                            <a href="#">
                                <img src="../../../public/images/product-detail/compare2.png">
                            </a>
                            <div class="item-inf text-center">
                                <p class="mdt my-2">Enternity Diamond Ring</p>
                                <p class="mdt">$7,000</p>
                            </div>
                            </div>
                            <div class="jewel">
                            <p class="compare-title mb-2">Jewellery</p>
                            <p class="smt my-1">Natural & Lab-grown Jewelry</p>
                            <p class="smt mb-0">Pear brilliant diamonds</p>
                            <p class="smt my-1">2.5mm width x2</p>
                            <p class="smt">Carat total weight .50</p>
                            </div>
                            <div class="line mb-2"></div>
                            <div class="mater">
                            <p class="compare-title mb-2">Material</p>
                            <p class="smt">18k Rose gold</p>
                            </div>
                            <button type="button" class="btn btn-pri btnsm w-100" data-bs-dismiss="modal">Add to bag</button>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

                <!--MAY YOU ALSO LIKE-->
                <div class="also-like">
                <h5 class="text-center">You May Also Like</h5>
                <div id="carouselalsolike" class="carousel slide carousel-dark carousel-also carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner container-fluid">
                    <div class="carousel-item active" data-bs-interval="4000">
                        <div class="row">
                        <div class="col-3">
                            <div class="item-card-info">
                            <div class="card-prd">
                                <div class="img">
                                <a href="#">
                                    <img src="../../../public/images/product-detail/also-like1.webp">
                                </a>
                                </div>
                                <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                                Quick view
                                </div>
                            </div>
                            <div class="item-inf text-center mt-3">
                                <p class="mdt mb-2">Lynn Ring</p>
                                <p>$7,000</p>
                            </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="item-card-info">
                            <div class="card-prd">
                                <div class="img">
                                <a href="#">
                                    <img src="../../../public/images/product-detail/also-like2.webp">
                                </a>
                                </div>
                                <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                                Quick view
                                </div>
                            </div>
                            <div class="item-inf text-center mt-3">
                                <p class="mdt mb-2">Lynn Ring</p>
                                <p>$7,000</p>
                            </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="item-card-info">
                            <div class="card-prd">
                                <div class="img">
                                <a href="#">
                                    <img src="../../../public/images/product-detail/also-like3.webp">
                                </a>
                                </div>
                                <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                                Quick view
                                </div>
                            </div>
                            <div class="item-inf text-center mt-3">
                                <p class="mdt mb-2">Lynn Ring</p>
                                <p>$7,000</p>
                            </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="item-card-info">
                            <div class="card-prd">
                                <div class="img">
                                <a href="#">
                                    <img src="../../../public/images/product-detail/also-like4.webp">
                                </a>
                                </div>
                                <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                                Quick view
                                </div>
                            </div>
                            <div class="item-inf text-center mt-3">
                                <p class="mdt mb-2">Lynn Ring</p>
                                <p>$7,000</p>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <div class="row">
                        <div class="col-3">
                            <div class="item-card-info">
                            <div class="card-prd">
                                <div class="img">
                                <a href="#">
                                    <img src="../../../public/images/product-detail/also-like5.webp">
                                </a>
                                </div>
                                <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                                Quick view
                                </div>
                            </div>
                            <div class="item-inf text-center mt-3">
                                <p class="mdt mb-2">Lynn Ring</p>
                                <p>$7,000</p>
                            </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="item-card-info">
                            <div class="card-prd">
                                <div class="img">
                                <a href="#">
                                    <img src="../../../public/images/product-detail/also-like6.webp">
                                </a>
                                </div>
                                <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                                Quick view
                                </div>
                            </div>
                            <div class="item-inf text-center mt-3">
                                <p class="mdt mb-2">Lynn Ring</p>
                                <p>$7,000</p>
                            </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="item-card-info">
                            <div class="card-prd">
                                <div class="img">
                                <a href="#">
                                    <img src="../../../public/images/product-detail/also-like7.webp">
                                </a>
                                </div>
                                <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                                Quick view
                                </div>
                            </div>
                            <div class="item-inf text-center mt-3">
                                <p class="mdt mb-2">Lynn Ring</p>
                                <p>$7,000</p>
                            </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="item-card-info">
                            <div class="card-prd">
                                <div class="img">
                                <a href="#">
                                    <img src="../../../public/images/product-detail/also-like8.webp">
                                </a>
                                </div>
                                <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                                Quick view
                                </div>
                            </div>
                            <div class="item-inf text-center mt-3">
                                <p class="mdt mb-2">Lynn Ring</p>
                                <p>$7,000</p>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <div class="row">
                        <div class="col-3">
                            <div class="item-card-info">
                            <div class="card-prd">
                                <div class="img">
                                <a href="#">
                                    <img src="../../../public/images/product-detail/also-like5.webp">
                                </a>
                                </div>
                                <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                                Quick view
                                </div>
                            </div>
                            <div class="item-inf text-center mt-3">
                                <p class="mdt mb-2">Lynn Ring</p>
                                <p class="smt">$7,000</p>
                            </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="item-card-info">
                            <div class="card-prd">
                                <div class="img">
                                <a href="#">
                                    <img src="../../../public/images/product-detail/also-like6.webp">
                                </a>
                                </div>
                                <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                                Quick view
                                </div>
                            </div>
                            <div class="item-inf text-center mt-3">
                                <p class="mdt mb-2">Lynn Ring</p>
                                <p class="smt">$7,000</p>
                            </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="item-card-info">
                            <div class="card-prd">
                                <div class="img">
                                <a href="#">
                                    <img src="../../../public/images/product-detail/also-like7.webp">
                                </a>
                                </div>
                                <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                                Quick view
                                </div>
                            </div>
                            <div class="item-inf text-center mt-3">
                                <p class="mdt mb-2">Lynn Ring</p>
                                <p class="smt">$7,000</p>
                            </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="item-card-info">
                            <div class="card-prd">
                                <div class="img">
                                <a href="#">
                                    <img src="../../../public/images/product-detail/also-like8.webp">
                                </a>
                                </div>
                                <div class="compare card-prd-bt smt" data-bs-toggle="modal" type="button" data-bs-target="#quickview">
                                Quick view
                                </div>
                            </div>
                            <div class="item-inf text-center mt-3">
                                <p class="mdt mb-2">Lynn Ring</p>
                                <p class="smt">$7,000</p>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselalsolike" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselalsolike" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
                </div>
                </div>
                <!--REVIEW-->
                <div class="review container-fluid">
                <div class="d-flex review-start">
                    <h3>4,9</h3>
                    <div class="d-flex mx-3 my-auto">
                    <i class="fa fa-star fa-xl pr-1"></i>
                    <i class="fa fa-star fa-xl pr-1"></i>
                    <i class="fa fa-star fa-xl pr-1"></i>
                    <i class="fa fa-star fa-xl pr-1"></i>
                    <i class="fa fa-star fa-xl"></i>
                    </div>
                    <p class="mdt my-auto">16 Reviews</p>
                </div>
                <div class="d-flex">
                    <div class="me-auto">
                    <h5>Reviews</h5>
                    </div>
                    <div class="">
                    <button class="advisor btn btnlg btn-pri w-100" data-bs-toggle="modal" type="button" data-bs-target="#review">Write a review</button>
                    <!-- Modal review -->
                    <div class="modal fade" id="review">
                        <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <h5 class="modal-title mb-4">Write A Review</h5>
                            <p class="mdt">Select your rating</p>
                            <div class="d-flex mb-5">
                            <i class="fa fa-star fa-lg"></i>
                            <i class="fa fa-star fa-lg"></i>
                            <i class="fa fa-star fa-lg"></i>
                            <i class="fa fa-star fa-lg"></i>
                            <i class="fa fa-star fa-lg"></i>
                            </div>
                            <label>Message (*)</label>
                            <textarea class="inpu" rows="4" required></textarea>
                            <div class="email-user">
                            <label>Email address</label>
                            <input class="inpu" type="email" required><br>
                            </div>
                            <div class="review-name">
                            <label>Your name</label>
                            <input class="inpu" type="text">
                            </div>
                            <button type="button" class="btn btn-pri" data-bs-dismiss="modal">Send</button>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="line my-3"></div>
                <div class="d-flex select-review">
                    <div class="me-auto">
                    <h6>16 Reviews</h6>
                    </div>
                    <div class="">
                    <select class="form-select smt w-100">
                        <option selected>Sort by: Newest</option>
                        <option value="1">Highest Rating</option>
                        <option value="2">Lowest Rating</option>
                        <option value="3">Most Votes</option>
                        <option value="3">Least Votes</option>
                    </select>
                    </div>
                </div>
                <div class="review-box">
                    <div class="d-flex review-inner">
                    <div class="review-ava">
                        <img src="../../../public/images/product-detail/user1.png">
                    </div>
                    <div class="review-content w-100 ms-3">
                        <div class="d-flex">
                        <p class="me-auto mb10 user-name mdt">TTThuy8x</p>
                        <span class="smt">2022/12/02</span>
                        </div>
                        <div>
                        <div class="d-flex rate-start">
                            <i class="fa-star fa"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        </div>
                        <div class="d-flex">
                        <p class="user-cmt smt me-auto">Baking time will vary if you change the pan size. Every oven is different so I can’t
                            say for certain what you’ll need to adjust it to.</p>
                        <div class="like-review">
                            <i class="align-middle fa-regular fa-heart fa-lg"></i>
                            <span class="smt ms-2">19</span>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="line mb-3"></div>
                    <div class="d-flex review-inner">
                    <div class="review-ava">
                        <img src="../../../public/images/product-detail/user1.png">
                    </div>
                    <div class="review-content w-100 ms-3">
                        <div class="d-flex">
                        <p class="me-auto mb10 user-name mdt">Nthduong98</p>
                        <span class="smt">2022/12/02</span>
                        </div>
                        <div>
                        <div class="d-flex rate-start">
                            <i class="fa-solid fa-star fa"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        </div>
                        <div class="d-flex">
                        <p class="user-cmt smt me-auto">Baking time will vary if you change the pan size. Every oven is different so I can’t
                            say for certain what you’ll need to adjust it to.</p>
                        <div class="like-review">
                            <i class="align-middle fa-regular fa-heart fa-lg"></i>
                            <span class="smt ms-2">19</span>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="line mb-3"></div>
                    <div class="d-flex review-inner">
                    <div class="review-ava">
                        <img src="../../../public/images/product-detail/user1.png">
                    </div>
                    <div class="review-content w-100 ms-3">
                        <div class="d-flex">
                        <p class="me-auto mb10 user-name mdt">HueVT99</p>
                        <span class="smt">2022/12/02</span>
                        </div>
                        <div>
                        <div class="d-flex rate-start">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        </div>
                        <div class="d-flex">
                        <p class="user-cmt smt me-auto">Baking time will vary if you change the pan size. Every oven is different so I can’t
                            say for certain what you’ll need to adjust it to.</p>
                        <div class="like-review">
                            <i class="align-middle fa-regular fa-heart fa-lg"></i>
                            <span class="smt ms-2">19</span>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="line mb-3"></div>
                    <div class="d-flex review-inner">
                    <div class="review-ava">
                        <img src="../../../public/images/product-detail/user1.png">
                    </div>
                    <div class="review-content w-100 ms-3">
                        <div class="d-flex">
                        <p class="me-auto mb10 user-name mdt">HueVT99</p>
                        <span class="smt">2022/12/02</span>
                        </div>
                        <div>
                        <div class="d-flex rate-start">
                            <i class="fa-star fa"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        </div>
                        <div class="d-flex">
                        <p class="user-cmt smt me-auto">Baking time will vary if you change the pan size. Every oven is different so I can’t
                            say for certain what you’ll need to adjust it to.</p>
                        <div class="like-review">
                            <i class="align-middle fa-regular fa-heart fa-lg"></i>
                            <span class="smt ms-2">19</span>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="line mb-3"></div>
                    <div class="d-flex review-inner">
                    <div class="review-ava">
                        <img src="../../../public/images/product-detail/user1.png">
                    </div>
                    <div class="review-content w-100 ms-3">
                        <div class="d-flex">
                        <p class="me-auto mb10 user-name mdt">HueVT99</p>
                        <span class="smt">2022/12/02</span>
                        </div>
                        <div>
                        <div class="d-flex rate-start">
                            <i class="fa-star fa"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        </div>
                        <div class="d-flex">
                        <p class="user-cmt smt me-auto">Baking time will vary if you change the pan size. Every oven is different so I can’t
                            say for certain what you’ll need to adjust it to.</p>
                        <div class="like-review">
                            <i class="align-middle fa-regular fa-heart fa-lg"></i>
                            <span class="smt ms-2">19</span>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <?php require_once '../includes/footer.php';?>
        </div> 
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>