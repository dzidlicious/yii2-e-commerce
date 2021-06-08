<?php

/* @var $this yii\web\View */
/* @var \yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Dzidkowy E-Commerce';
?>
<div class="site-index">


    <div class="body-content">
            <?php echo \yii\widgets\ListView::widget([
                    'dataProvider' => $dataProvider,
                    'layout' => '{summary}<div class="row">{items}</div>{pager}',
                    'itemView' => '_product_item',
                    'itemOptions'=> [
                            'class' => 'col-lg-4 col-md-6 mb-4 product-item'
                    ],
                    'pager' => [
                            'class' => \yii\bootstrap4\LinkPager::class
                    ]

                    ]) ?>

<!--    </div>-->
<!--    Przykładowy item z prawidłowym wyśtwietlaniem-->
<!--    <div class="col-lg-4 col-md-6 mb-4">-->
<!--        <div class="card h-100">-->
<!--            <a href="#!"><img class="card-img-top" src="https://via.placeholder.com/700x400" alt="..." /></a>-->
<!--            <div class="card-body">-->
<!--                <h4 class="card-title"><a href="#!">Item One</a></h4>-->
<!--                <h5>$24.99</h5>-->
<!--                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>-->
<!--            </div>-->
<!--            <div class="card-footer"><small class="text-muted">★ ★ ★ ★ ☆</small></div>-->
<!--        </div>-->
<!--    </div>-->

</div>
