<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Sistem Pendukung Keputusan Penerimaan Beasiswa Politeknik Negeri Indramayu </h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>



    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <?= Html::img("@web/images/havri.png",['style' => 'width: 100%']); ?>
      </div>

      <div class="item">
        <?= Html::img("@web/images/havri3.png",['style' => 'width: 100%']); ?>
      </div>
    
      <div class="item">
        <?= Html::img("@web/images/havri5.png",['style' => 'width: 100%']); ?>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
        <section id="area-main" class="padding">
        <h5 class="hidden">hidden</h5>
        <div class="container">
        <section class="section-padding" id="about">
        <h3 class="heading text-center wow fadeInDown" data-wow-duration="300ms" data-wow-delay="200ms">
                TENTANG KAMI
            </h3>
              <div class="container">
              <div class="row">
              <div class="col-md-4 col-sm-4 col-xs-12 canvas-box magin30 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">
                        <span class="text-center"><i class="icon-icons42 color40"></i></span>
                        <h4 class="color30"><?= Html::a('Pengumuman Beasiswa Bidikmisi', ['site/index'], ['class' => 'color30']); ?></h4>
                        <?= Html::img("@web/images/b.jpg",['style' => 'width: 100%']); ?>
                        <p class="font-depan">
                            "Politeknik Negeri Indramayu memberikan kesempatan kepada putra putri terbaik bangsa yang tidak mampu namun bersemangat melanjutkan pendidikan, untuk mengikuti program bidikmisi dengan bebas biaya kuliah sampai lulus dan uang saku bulanan, Seleksi dilakukan dengan melihat prestasi akademik, kondisi ekonomi, survei dan wawancara"
                        </p>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 canvas-box magin30 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">
                        <span class="text-center"><i class="icon-icons42 color40"></i></span>
                        <h4 class="color30"><?= Html::a('Pengumuman Penerima Beasiswa IOM', ['site/index'], ['class' => 'color30']); ?></h4>
                        <?= Html::img("@web/images/iom.jpg",['style' => 'width: 100%']); ?>
                        <p class="font-depan">
                            "Berdasarkan hasil Seleksi pengusul beasiswa Ikatan Orangtua Mahasiswa (IOM) dengan memperhatikan kriteria beasiswa dan rekomendasi jurusan"
                        </p>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 canvas-box magin30 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">
                        <span class="text-center"><i class="icon-icons42 color40"></i></span>
                        <h4 class="color30"><?= Html::a('Pengumuman Penerima Beasiswa PPA', ['site/index'], ['class' => 'color30']); ?></h4>
                        <?= Html::img("@web/images/ppa.jpg",['style' => 'width: 100%']); ?>
                        <p class="font-depan">
                            "Berdasarkan hasil Seleksi pengusul beasiswa Peningkatan Prestasi Akademik (PPA) dengan memperhatikan kriteria beasiswa dan rekomendasi jurusan"
                        </p>
                    </div>
    
<!-- <footer class="footer">
    <div class="container">
    </div>
</footer>
 -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>



