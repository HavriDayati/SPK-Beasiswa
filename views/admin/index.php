<?php

use yii\helpers\Html;
use yii\helpers\Url; 
use app\models\User;
use app\models\Mahasiswa;
use app\models\Anggota;
use app\models\Jurusan;

$this->title = "Halaman Dashboard";

?>

<div class="row">
	<div class="col-lg-4 col-xs-6">

		<div class="small-box bg-green">
			<div class="inner">
				<p>Jumlah Pendaftar Beasiswa</p>

				<h3>50 <sup class="small-box-sup">Mahasiswa</sup></h3>
			</div>
			<div class="icon">
				<i class="fa fa-check-square-o"></i>
			</div>
			<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
		</div>
	</div>

	<div class="col-lg-4 col-xs-6">

		<div class="small-box bg-red">
			<div class="inner">
				<p>Jumlah Penerima Beasiswa</p>
				
				<h3>20 <sup class="small-box-sup">Penerima Beasiswa</sup></h3>
			</div>
			<div class="icon">
				<i class="fa fa-remove"></i>
			</div>
			<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
		</div>
	</div>

	<div class="col-lg-4 col-xs-6">

		<div class="small-box bg-aqua">
			<div class="inner">
				<p>Jumlah Jurusan</p>
				
				<h3>05 <sup class="small-box-sup">Jurusan</sup></h3>
			</div>
			<div class="icon">
				<i class="fa fa-graduation-cap"></i>
			</div>
			<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
		</div>
	</div>

</div>