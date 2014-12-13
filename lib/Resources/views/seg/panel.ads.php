<?php
use Destiny\Common\Config;
?>
<section class="container">
    <div class="row-no-padding">
        <div class="col-sm-12 col-md-4" id="donate-wrap">
            <div class="donate-block" id="paypal-donation">
                <p>
                    <a title="Visit www.paypal.com" href="https://www.paypal.com/">PayPal</a>
                    contributions are welcome and appreciated, but not required.
                </p>
                <div id="paypal-form">
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_donations">
                        <input type="hidden" name="business" value="<?=Config::$a['paypal']['email']?>">
                        <input type="hidden" name="lc" value="US">
                        <input type="hidden" name="item_name" value="<?=Config::$a['paypal']['name']?>">
                        <input type="hidden" name="no_note" value="0">
                        <input type="hidden" name="currency_code" value="USD"> <input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest">
                        <button class="btn btn-lg btn-paypal" title="PayPal - The safer, easier way to pay online!">Contribute</button>
                        <div id="paypal-payment-methods" title="Payment methods"></div>
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                    </form>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4" id="private-ads-wrap">
            <div class="private-ads">
                <div class="private-ad" id="ting">
                    <img height="1" width="1" src="http://ting.7eer.net/i/72409/87559/2020" border="0" style="position: absolute; top:0; left:0;" />
                    <a href="http://ting.7eer.net/c/72409/87559/2020" style="background-color: #00a3e0; margin: 0 auto; overflow: hidden; height:250px;"><img src="http://adn.impactradius.com/display-ad/2020-87559" border="0" alt="" width="250" height="250"/></a>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4" id="public-ads-wrap">
            <div class="public-ads">
                <div id="google-ad">
                    <script type="text/javascript">
                    <? foreach ( Config::$a ['googleads'] ['300x250'] as $k => $v ) {
                            echo (is_int ( $v )) ? "$k = $v;\r\n" : "$k = \"$v\";\r\n";
                    } ?>
                    </script>
                    <script src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
                </div>
            </div>
        </div>
    </div>
</section>
