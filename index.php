<?php include_once('header.php'); ?>    

<?php include_once('functions.php'); ?>

<?php $response_array = convertToArray(); ?>

    <div class="container-lg main">

        <h2 class="text-center mt-3" style='font-weight: bold; color: blue;'>OF Cryptocurrency</h2>
        <div class="row mt-4">
 
        <?php foreach($response_array as $currency){?>
        
            <div class="col-lg-3 col-sm-12 col-sm-12 text-center mb-3">
                <div class="card single-card">
                    <img src="" class="single-card-img">
                    <div class="card-body">
                        <div class="card-title"><?php $currency['currency'];?></div>
                        <div class="card-text single-card-text">price: $ <?php $currency['price'];?></div>
                        <div class="card-text single-card-text">circulating_supply: <?php $currency['symbol'];?></div>
                        <div class="card-text single-card-text">market_caps: <?php $currency['price'];?></div>
                        <div class="card-text single-card-text">name: <?php $currency['name'];?></div>

                        <?php if($currency['1d']['price_change'] > 0) {?>
                            <div class="card-text single-card-text price-up">price_change: <?php $currency['1d']['price_change'];?></div>
                        <?php }else{ ?>
                            <div class="card-text single-card-text price-do">price_change: <?php $currency['1d']['price_change'];?></div>
                        <?php } ?>   

                        <details>
                            <summary>More info</summary>
                            <p>Rank: <?php echo $currency['rank'] ?> </br> Status: <?php echo $currency['status'] ?></p>
                        </details>

                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>

<?php include_once('header.php'); ?>    