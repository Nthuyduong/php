<?php define('URLROOT', 'http://localhost:8888/project-php'); 
session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <title>Thank you</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo URLROOT?>/public/css/fonts.css">
        <link rel="stylesheet" href="<?php echo URLROOT?>/public/css/thank-you.css">
        <link rel="stylesheet" href="<?php echo URLROOT?>/public/css/style.css">
    </head>
    <body>
        <div>
            <?php require_once '../includes/header.php';?>
        </div>
        <div class="container-fluid">
            <div>
                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                </svg>
            </div>
            <h3 class="text-center mb-3">Thank you! Your Order Has Been Processed!</h3>
            <p class="text-center mb-3">You will receive an order confirmation email with details of your order.</p>
            <p class="mdt text-center mb-4">TrackID: #98089899</p>
            <div class="row thanks">
                <div class="col-2"></div>
                <div class="col-4">
                <button routerLink="/tracking-order" class="btn btnlg btn-sec w-100">Tracking Order</button>
                </div>
                <div class="col-4">
                <button routerLink="/shop-all" class="btn btnlg btn-pri w-100">Continue shopping</button>
                </div>
                <div class="col-2"></div>
            </div>
            <div class="row order-detail">
                <div class="col-7 ps-0">
                <div class="your-bill">
                    <div>
                    <p class="mdt">Shipping adress</p>
                    <p class="">Thuy Duong Nguyen</p>
                    <p class="">98 Hue Street, Pho Hue Ward, Hai Ba Trung</p>
                    <p class="">Tel: 0339898989</p>
                    <p class="mb-0">Nthduong198@gmail.com</p>
                    </div>
                    <div class="line my-4"></div>
                    <div class="">
                    <p class="mdt">Payment method</p>
                    <p class="mb-0">Visa Card Ending in 2028</p>
                    </div>
                    <div class="line my-4"></div>
                    <div>
                    <p class="mdt">Shipping method</p>
                    <p class="mb-0">Free ship - Fixed - Flat rate</p>
                    </div>
                </div>
                </div>
                <div class="col-5 pe-0">
                <div class="billing-summary">
                    <h4 class="text-center bill-title">BILLING SUMMARY</h4>
                    <div class="row">
                    <div class="col-10 ps-0">
                        <p>Amel Earring</p>
                    </div>
                    <div class="col-2 pe-0">
                        <p>$6,700</p>
                    </div>
                    </div>
                    <p>x1</p>
                    <div class="row">
                    <div class="col-10 ps-0">
                        <p>Lavie Ring</p>
                    </div>
                    <div class="col-2 pe-0">
                        <p>$5,000</p>
                    </div>
                    </div>
                    <p>x1</p>
                    <div class="line my-3"></div>
                    <div class="row total-itm">
                    <div class="col-10 ps-0">
                        <p>Items Total</p>
                    </div>
                    <div class="col-2 pe-0">
                        <p>$11,700</p>
                    </div>
                    </div>
                    <div class="row ship-fee">
                    <div class="col-10 ps-0">
                        <p>Shipping Fee</p>
                    </div>
                    <div class="col-2 pe-0">
                        <p>$0</p>
                    </div>
                    </div>
                    <div class="row ship-fee">
                            <div class="col-10 ps-0">
                                <p>Discount (coupon)</p>
                            </div>
                            <div class="col-2 pe-0">
                                <p>-$7,00</p>
                            </div>
                            </div>
                    <div class="line mb-3"></div>
                    <div class="total-itm row">
                    <div class="col-10 ps-0">
                        <p class="mdt">Order Total</p>
                    </div>
                    <div class="col-2 p2-0">
                        <p class="mdt">$11,000</p>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div>
            <?php require_once '../includes/footer.php';?>
        </div>
    </body>
</html>