<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
        <div class="col-lg-6">
            <p>
                <b>I have plenty of books</b> but not enough space to store them and actually that's ok
                because I'm not particularly intrested in storing them : once read, I get rid of most
                of them.
            </p>
        </div>
        <div class="col-lg-6">
            <p>
                <b>I have short memory</b> and after some years, I can happen that I forget a book that I have read.
                Then guess what : I buy the same book again !
            </p>
            <p>
                This is why I built <em>My Library</em>
            </p>
        </div>
    </div>
</div>
