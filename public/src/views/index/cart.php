<!DOCTYPE html>
<html>
    <head>
        <title>Shopping cart</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="http://localhost:8888/project-php/public/css/fonts.css">
        <link rel="stylesheet" href="http://localhost:8888/project-php/public/css/cart.css">
        <link rel="stylesheet" href="http://localhost:8888/project-php/public/css/style.css">
    </head>
    <body>
        <div>
            <?php require_once '../includes/quickview.php'?>
        </div>
        <div>
            <?php require_once '../includes/header.php';?>
        </div>
        <div class="container-fluid shopping-bag">
            <h4 class="my-4">Shopping Bag</h4>
            <div class="table-summary">
                <div class="t-head row align-middle py-3 mb-3">
                <div class="col-5">
                    <p class="mb-0">Product</p>
                </div>
                <div class="col-2">
                    <p class="mb-0">Size</p>
                </div>
                <div class="col-2">
                    <p class="mb-0">Quantity</p>
                </div>
                <div class="col-2">
                    <p class="mb-0">Price</p>
                </div>
                <div class="col">
                    <p class="mb-0">Remove</p>
                </div>
                </div>
                <div class="t-row1 row">
                <div class="col-2">
                    <img src="../../../images/product-detail/bag-prd1.png">
                </div>
                <div class="col-3">
                    <p>Amel Earring</p>
                </div>
                <div class="col-2">
                    <p>-</p>
                </div>
                <div class="col-2">x 1</div>
                <div class="col-2">
                    <p>$6,700</p>
                </div>
                <div class="col">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                </div>
                <div class="line my-3"></div>
                <div class="t-row2 row">
                <div class="col-2">
                    <img src="../../../images/product-detail/bag-prd2.png">
                </div>
                <div class="col-3">
                    <p class="">Lavie Ring</p>
                </div>
                <div class="col-2">
                    <p>4</p>
                </div>
                <div class="col-2">x 1</div>
                <div class="col-2">
                    <p>$5,000</p>
                </div>
                <div class="col">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                </div>
                <div class="line my-3"></div>
            </div>
            <div class="row">
                <div class="col-3 ps-0">
                <button class="btn btn-sec btnlg" type="button" data-bs-toggle="modal" data-bs-target="#personalnote">Send a personal note</button>
                <!--Modal personal note-->
                <div class="modal fade" id="personalnote">
                    <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <form ngNativeValidate onsubmit="alert('We have received your note.')">
                        <h5 class="modal-title mb-4">Personal Note</h5>
                        <p class="smt">Write below the message you want to include below. Your message will be printed in a cardboard
                            that will be shipped with your order. Your personal note will be automatically saved when you click "SEND".</p>
                        <div class="my-3">
                            <label>Write your personal note here</label>
                            <textarea name="standalone" class="inpu" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="mt-2 btn btn-pri w-100" data-bs-dismiss="modal">Send</button>
                        </form>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-4"></div>
                <div class="col-5 pe-0">
                <div class="d-flex mb-4">
                    <h6 class="me-auto">Subtotal</h6>
                    <h6>$11,700</h6>
                </div>
                <p class="smt">Receive it in Vietnam in 4 - 6 business day/s with Express Shipping.</p>
                <button class="btn btn-pri btnlg w-100" type="submit" href="check-out.php">Check out</button>
                </div>
            </div>
            </div>
            <!--MAY YOU ALSO LIKE-->
            <div class="also-like">
            <h5 class="text-center">You May Also Like</h5>
            <div id="carouselalsolike" class="carousel slide carousel-dark carousel-also carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner container-fluid">
                <div class="carousel-item active" data-bs-interval="10000">
                    <div class="row">
                    <div class="col-3">
                        <div class="item-card-info">
                        <div class="card-prd">
                            <div class="img">
                            <a href="#">
                                <img src="../../../images/product-detail/also-like1.webp">
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
                                <img src="../../../images/product-detail/also-like2.webp">
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
                                <img src="../../../images/product-detail/also-like3.webp">
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
                                <img src="../../../images/product-detail/also-like4.webp">
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
                                <img src="../../../images/product-detail/also-like5.webp">
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
                                <img src="../../../images/product-detail/also-like6.webp">
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
                                <img src="../../../images/product-detail/also-like7.webp">
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
                                <img src="../../../images/product-detail/also-like8.webp">
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
                <div class="carousel-item">
                    <div class="row">
                    <div class="col-3">
                        <div class="item-card-info">
                        <div class="card-prd">
                            <div class="img">
                            <a href="#">
                                <img src="../../../images/product-detail/also-like5.webp">
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
                                <img src="../../../images/product-detail/also-like6.webp">
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
                                <img src="../../../images/product-detail/also-like7.webp">
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
                                <img src="../../../images/product-detail/also-like8.webp">
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
        <div>
            <?php require_once '../includes/footer.php';?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>