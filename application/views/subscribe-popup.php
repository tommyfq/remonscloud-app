<style>
    #list-builder {
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: #333;
        filter: alpha(opacity=80);
        opacity: 0.8;
        display: none;
    }

    #popup-box {
        position: fixed;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        background-color: #911e26;
        color: #FFFFFF;
        width: 90%;
        max-width: 600px;
        padding: 30px;
        border: 10px solid #FFFFFF;
        display: none;
    }

    #popup-close {
        position: absolute;
        top: -25px;
        right: -25px;
        cursor: pointer;
        width: 40px;
    }

    #popup-box h1 {
        margin: 0;
    }

    #popup-box form {
        margin-bottom: 0px;
    }

    #popup-box input {
        padding: 10px;
        border: 1px solid #333;
        width: 40%;
    }

    #popup-box button {
        padding: 10px;
        border: 1px solid #333;
    }
</style>

<!-- <link rel="stylesheet" href="https://daneden.github.io/animate.css/animate.min.css"> -->
<!-- <link rel="stylesheet" href="<?php //echo base_url(); ?>assets/Subscribe/css/Pricing-Tables.css"> -->

<div id="list-builder"></div>

<div id="popup-box">
    <img src="<?php echo base_url(); ?>assets/Popup/images/close-icon.png" id="popup-close" />
    <div id="popup-box-content">

        <section class="pricing-table">
            <div class="container">
                <div class="pricing-area text-center">
                    <div class="row">
                    
                        <div class="col-sm-4 plan price red wow fadeInDown">
                            <ul class="list-group">
                                <li class="list-group-item heading">
                                    <h1>Start Up</h1><span class="price">5 Device </span></li>
                                <li class="list-group-item"><span>5 Gb Disk Space</span></li>
                                <li class="list-group-item"><span>1 Gb Dadicated Ram</span></li>
                                <li class="list-group-item"><span>10 Addon Domain</span></li>
                                <li class="list-group-item"><span>10 Email Account</span></li>
                                <li class="list-group-item"><span>24/7 Support</span></li>
                                <li class="list-group-item plan-action"><a href="#" class="btn">Subscribe</a></li>
                            </ul>
                        </div>

                        <div class="col-sm-4 plan price green wow fadeInDown">
                            <ul class="list-group">
                                <li class="list-group-item heading">
                                    <h1>Standard </h1><span class="price">10 Device </span></li>
                                <li class="list-group-item"><span>10 Gb Disk Space</span></li>
                                <li class="list-group-item"><span>2 Gb Dadicated Ram</span></li>
                                <li class="list-group-item"><span>20 Addon Domain</span></li>
                                <li class="list-group-item"><span>20 Email Account</span></li>
                                <li class="list-group-item"><span>24/7 Support</span></li>
                                <li class="list-group-item plan-action"><a href="#" class="btn">Subscribe</a></li>
                            </ul>
                        </div>

                        <div class="col-sm-4 plan price yellow wow fadeInDown"><img src="<?php echo base_url(); ?>assets/Subscribe/images/ribon_one.png">
                            <ul class="list-group">
                                <li class="list-group-item heading">
                                    <h1>Premium </h1><span class="price">20 Device </span></li>
                                <li class="list-group-item"><span>50 Gb Disk Space</span></li>
                                <li class="list-group-item"><span>8 Gb Dadicated Ram</span></li>
                                <li class="list-group-item"><span>Unlimited Addon Domain</span></li>
                                <li class="list-group-item"><span>Unlimited Email Account</span></li>
                                <li class="list-group-item"><span>24/7 Support</span></li>
                                <li class="list-group-item plan-action"><a href="#" class="btn">Subscribe</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<!-- <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script> -->

<script>
    $(document).ready(function() {

        var delay = 300; // milliseconds
        var cookie_expire = 0; // days

        var cookie = localStorage.getItem("list-builder");
        if(cookie == undefined || cookie == null) {
            cookie = 0;
        }

        if(((new Date()).getTime() - cookie) / (1000 * 60 * 60 * 24) > cookie_expire) {
            $("#list-builder").delay(delay).fadeIn("fast", () => {
                $("#popup-box").fadeIn("fast", () => {});
            });

            $("button[name=subscribe]").click(() => {
                $.ajax({
                    type: "POST",
                    url: $("#popup-form").attr("action"),
                    data: $("#popup-form").serialize(),
                    success: (data) => {
                        $("#popup-box-content").html("<p style='text-align: center'>Thank you for subscribing to The Polyglot Developer newsletter!</p>");
                    }
                });
            });

            $("#popup-close").click(() => {
                $("#list-builder, #popup-box").hide();
                localStorage.setItem("list-builder", (new Date()).getTime());
            });
        }

    });
</script>

<!-- <script src="<?php //echo base_url(); ?>assets/Subscribe/js/jquery.min.js"></script>
<script src="<?php //echo base_url(); ?>assets/Subscribe/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php //echo base_url(); ?>assets/Subscribe/js/Pricing-Tables.js"></script>
<script src="<?php //echo base_url(); ?>assets/Subscribe/js/Pricing-Tables1.js"></script> -->