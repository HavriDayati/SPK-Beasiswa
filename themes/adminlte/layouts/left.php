<?php
    use app\models\PelayananStatus;
?>

<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= Yii::getAlias('@web').'/images/POLINDRA.png'; ?>" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= ucwords(Yii::$app->user->identity->username) ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form> 
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'MENU NAVIGASI', 'options' => ['class' => 'header']],
                    ['label' => 'Dashboard', 'icon' => 'dashboard', 'url' => ['site/index']],
                    ['label' => 'MENU MAHASISWA', 'options' => ['class' => 'header']],
                    ['label' => 'Detail Mahasiswa', 'icon' => 'graduation-cap', 'url' => ['detail-mahasiswa/index']],
                    ['label' => 'Mahasiswa', 'icon' => 'graduation-cap', 'url' => ['mahasiswa/index']],
                    ['label' => 'MENU PENILAIAN', 'options' => ['class' => 'header']],
                    ['label' => 'Kriteria', 'icon' => 'file', 'url' => ['kriteria/index']],
                    ['label' => 'MENU ANGGOTA', 'options' => ['class' => 'header']],
                    ['label' => 'Anggota', 'icon' => 'user', 'url' => ['anggota/index']],
                    ['label' => 'MENU LAINNYA', 'options' => ['class' => 'header']],
                    
                    ['label' => 'Jurusan', 'icon' => 'graduation-cap', 'url' => ['jurusan/index'],],
                    ['label' => 'Jenis Kelamin', 'icon' => 'intersex ', 'url' => ['jenis-kelamin/index'],],
                    ['label' => 'Semester', 'icon' => 'dashboard', 'url' => ['semester/index'],],
                    ['label' => 'User', 'icon' => 'user', 'url' => ['/user'],],
                    ['label' => 'Logout', 'url' => ['site/logout'], 'template' => '<a href="{url}" data-methode="post">{icon} {label}</a>', 'visible' => ! Yii::$app->user->isGuest],
                        
                        ],
                    
    
            ]
        ) ?>

    </section>

</aside>