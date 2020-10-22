<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('cek/{nrp}/{nama}', function ($nrp, $nama) {
	//cek nama
	if (preg_match('/[A-Za-z]+/', $nama) && preg_match('/[0-9]+/', $nrp)) {
	    	echo "Nama :" . $nama . " | Nrp : " . $nrp;
	}else if (preg_match('/[0-9]+/', $nrp)) {
	    	echo $nrp;
	}else if (preg_match('/[A-Za-z]+/', $nama)) {
	    	echo $nama;
	}
});

Route::get('cekbilangan/{angka}', function($angka){
	if($angka % 2 == 0){
		echo "Genap";
	}else{
		echo "Ganjil";
	}
});

Route::get('deretBilangan/{bilangan}', function($bilangan){
	echo "Batas Bilangan : " . $bilangan;
	echo "<br> Bilangan genap : <br>";
	for($i=1; $i<=$bilangan; $i++){
		if($i % 2 == 0){
			echo $i . " ";
		}
	}
});

Route::get('logika/{awal}/{akhir}', function($awal, $akhir){
	if($awal < $akhir){
		if($awal != 0){
			$fibbonacci = [$awal-1, (int) $awal];
			for($i=0; $i<$akhir; $i++){
				if($i != 0 && $i != 1){
					$result = $fibbonacci[$i-1] + $fibbonacci[$i-2];
					if($result < $akhir){
						$fibbonacci [$i] = $result;
					}else{
						$i=$akhir;
					}
				}
			}
			return $fibbonacci;
		}else{
			echo "Angka awal tidak boleh 0, minimal 1";
		}
	}else{
		echo "Data awal tidak boleh lebih besar dari data akhir";
	}
});