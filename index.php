<html>
    <head>
        <title> </title>

        <!-- CSS -->
        <link rel="stylesheet" href="assets/bootstrap-3.3.7/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/style.css">
<script>
function tambah() {
	var getTotal = document.querySelector("input[name=total]");
	getTotal.stepUp();
	var total = getTotal.value;
	var str=`<!--Alternatif ${total}-->
		<tr>
		<td>
		<input name=\"alt${total}\" class=\"form-control\" placeholder=\"Alternatif ${total}\" type=\"text\"> 
		</td>
		<td>
		<input name=\"harga${total}\" class=\"form-control\" placeholder=\"Harga\" type=\"text\"> 
		</td>
		<td>
		<input name=\"bahan${total}\" class=\"form-control\" placeholder=\"Bahan\" type=\"text\"> 
		</td>
		<td>
		<input name=\"tebal${total}\" class=\"form-control\" placeholder=\"Ketebalan\" type=\"text\"> 
		</td>
		<td>
		<input name=\"tekstur${total}\" class=\"form-control\" placeholder=\"Tekstur\" type=\"text\"> 
		</td>
		<td>
		<input name=\"motif${total}\" class=\"form-control\" placeholder=\"Motif\" type=\"text\"> 
		</td>
		</tr>`;
	document.querySelector("tbody").insertAdjacentHTML('beforeend', str);
}
function kurangi() {
	var element = document.querySelector("tbody");
	var tr = element.querySelectorAll("tr");
	tr[tr.length - 1].remove();
	var getTotal = document.querySelector("input[name=total]");
	getTotal.stepDown();
}
</script>
    </head>

    <body>
        <section id="nav">
        <nav class="navbar navigasi">
            <h2 class="text-center">Sistem Pendukung Keputusan</h2>
            <h2 class="text-center">Usaha Pembuatan Baju</h2>
        </nav>    
        </section>

	<section id="mainInput">
	    <div class="container">
		<button name="tambah" onclick="tambah()">Tambah</button>
		<button name="kurang" onclick="kurangi()">Kurangi</button>
		<br>

		<form action="" method="post">
		    <table class="table">
			<thead>
			    <tr>
				<th>Opsi Alternatif</th>
				<th>Harga</th>
				<th>Bahan</th>
				<th>Ketebalan</th>
				<th>Tekstur</th>
				<th>Motif</th>
			    </tr>
			</thead>
			<tbody>
			    <!-- Alternatif 1 -->
			    <tr>
				<td>
				    <input type="text" name="alt1" class="form-control" placeholder="Alternatif 1"> </td>
				<td>
				    <input type="text" name="harga1" class="form-control" placeholder="Harga"> </td>
				<td>
				    <input type="text" name="bahan1" class="form-control" placeholder="Bahan"> </td>
				<td>
				    <input type="text" name="tebal1" class="form-control" placeholder="Ketebalan"> </td>
				<td>
				    <input type="text" name="tekstur1" class="form-control" placeholder="Tekstur"> </td>
				<td>
				    <input type="text" name="motif1" class="form-control" placeholder="Motif"> </td>
			    </tr>

			    <!-- Alternatif 2 -->
			    <tr>
				<td>
				    <input type="text" name="alt2" class="form-control" placeholder="Alternatif 2"> </td>
				<td>
				    <input type="text" name="harga2" class="form-control" placeholder="Harga"> </td>
				<td>
				    <input type="text" name="bahan2" class="form-control" placeholder="Bahan"> </td>
				<td>
				    <input type="text" name="tebal2" class="form-control" placeholder="Ketebalan"> </td>
				<td>
				    <input type="text" name="tekstur2" class="form-control" placeholder="Tekstur"> </td>
				<td>
				    <input type="text" name="motif2" class="form-control" placeholder="Motif"> </td>
			    </tr>

			    <!-- Alternatif 3 -->
			    <tr>
				<td>
				    <input type="text" name="alt3" class="form-control" placeholder="Alternatif 3"> </td>
				<td>
				    <input type="text" name="harga3" class="form-control" placeholder="Harga"> </td>
				<td>
				    <input type="text" name="bahan3" class="form-control" placeholder="Bahan"> </td>
				<td>
				    <input type="text" name="tebal3" class="form-control" placeholder="Ketebalan"> </td>
				<td>
				    <input type="text" name="tekstur3" class="form-control" placeholder="Tekstur"> </td>
				<td>
				    <input type="text" name="motif3" class="form-control" placeholder="Motif"> </td>
			    </tr>

			    <!-- Alternatif 4 -->
			    <tr>
				<td>
				    <input type="text" name="alt4" class="form-control" placeholder="Alternatif 4"> </td>
				<td>
				    <input type="text" name="harga4" class="form-control" placeholder="Harga"> </td>
				<td>
				    <input type="text" name="bahan4" class="form-control" placeholder="Bahan"> </td>
				<td>
				    <input type="text" name="tebal4" class="form-control" placeholder="Ketebalan"> </td>
				<td>
				    <input type="text" name="tekstur4" class="form-control" placeholder="Tekstur"> </td>
				<td>
				    <input type="text" name="motif4" class="form-control" placeholder="Motif"> </td>
			    </tr>

			    <!-- Alternatif 5 -->
			    <tr>
				<td>
				    <input type="text" name="alt5" class="form-control" placeholder="Alternatif 5"> </td>
				<td>
				    <input type="text" name="harga5" class="form-control" placeholder="Harga"> </td>
				<td>
				    <input type="text" name="bahan5" class="form-control" placeholder="Bahan"> </td>
				<td>
				    <input type="text" name="tebal5" class="form-control" placeholder="Ketebalan"> </td>
				<td>
				    <input type="text" name="tekstur5" class="form-control" placeholder="Tekstur"> </td>
				<td>
				    <input type="text" name="motif5" class="form-control" placeholder="Motif"> </td>
			    </tr>


			</tbody>
		    </table><input type="number" style="display:none" name="total" value="5">

		    <input type="submit" class="btn btn-main">
		</form>

		<p>Keterangan:</p>
		<p>
		    Range nilai kriteria Bahan, Ketebalan, Tekstur, Motif adalah 1 - 10 <br>
		    Dengan bobot masing masing sebesar 0.2
		</p>
	    </div>
	</section>

	<section id="result">
	    <div class="container" style="margin: 20px auto;">
		<h1 class="text-center"> HASIL PERHITUNGAN DENGAN METODE SAW</h1>
		<hr class="border-result">
	    </div>
	</section>
<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	echo '<script>console.log("Hello World");</script>';
	echo '<script>console.log("'.$_POST['total'].'");</script>';

	$total=$_POST['total'];
			/*$test = [];
			for ($i=1; $i<=5; $i++){
				echo $test[$i-1];
			}*/

	//form handling

	$attr_val = array('harga', 'bahan', 'tebal', 'tekstur', 'motif');
	$attr = array();
	foreach ($attr_val as &$val){
		$attr[$val] = [];
		for ($i=1; $i<=$total; $i++){
			$attr[$val][] = (int)$_POST[$val.$i];
		}
	}
	$attr['alt'] = [];
	for ($i=1; $i<=$total; $i++){
		$attr['alt'][] = htmlspecialchars($_POST['alt'.$i]);
	}

			/*for ($i=0; $i<$total; $i++){
				echo $attr['harga'][$i].'<br>';
			}*/


	//sifat attr

	$f = array();
	$f['harga']=-1;
	$f['bahan']=1;
	$f['tebal']=1;
	$f['tekstur']=1;
	$f['motif']=1;

	//bobot

	$b = array();
	$b['harga']=0.2;
	$b['bahan']=0.2;
	$b['tebal']=0.2;
	$b['tekstur']=0.2;
	$b['motif']=0.2;

	//normalisasi bobot

	$n_b = array();//bobot dinormalisasi
	$b_tot=0;//bobot total

	foreach ($attr_val as &$val){
		$b_tot=$b_tot+$b[$val];
	}

	foreach ($attr_val as &$val){
		$n_b[$val]=$b[$val]/$b_tot;
	}

	//cari s

	$s = [];
	for ($i=0; $i<$total; $i++){
		$x_pro=1; //perkalian dari semua x pada suatu alt
		foreach ($attr_val as &$val){
			$x_pro=$x_pro*($attr[$val][$i]**($b[$val]*$f[$val]));
			echo "<script>console.log(\"x$i $val = {$attr[$val][$i]}, x_pro=$x_pro\");</script>";
		}
		$s[] = $x_pro;
	}
	for ($i=0; $i<$total; $i++){
		echo "<script>console.log(\"s$i = $s[$i]\");</script>";
	}
	$s_tot=0; //total semua s

	for ($i=0; $i<$total; $i++){
		$s_tot=$s_tot+$s[$i];
	}

	//cari v

	$v = [];
	for ($i=0; $i<$total; $i++){
		$v[] = $s[$i]/$s_tot;
	}

	for ($i=0; $i<$total; $i++){
		echo "<script>console.log(\"V$i = $v[$i]\");</script>";
	}
	$v_max = array_search(max($v),$v);
	echo "<script>console.log(\"Terpilih alternatif ke-$v_max\");</script>";


			/*foreach ($attr as &$val) {
				eval('$'.$val. ' = []; for($i=1; $i<=$total; $i++){ $'.$val.'[] = (int)$_POST[\''.$val.'\'.$i]; }');
			}
			for ($i=0; $i<$total; $i++){
				echo $harga[$i].'<br>';
			}*/
			/*
			//form harga
			$harga = [];
			for ($i=1; $i<=$total; $i++){
				$harga[] = (int)$_POST['harga'.$i];
			}
			//for ($i=0; $i<$total; $i++){
			//	echo $harga[$i].'<br>';
			//}

			//form bahan
			$bahan = [];
			for ($i=1; $i<=$total; $i++){
				$bahan[] = (int)$_POST['bahan'.$i];
			}
			//for ($i=0; $i<$total; $i++){
			//	echo $bahan[$i].'<br>';
			//}

			//form tebal
			$tebal = [];
			for ($i=1; $i<=$total; $i++){
				$tebal[] = (int)$_POST['tebal'.$i];
			}
			//for ($i=0; $i<$total; $i++){
			//	echo $tebal[$i].'<br>';
			//}

			//form tekstur
			$tekstur = [];
			for ($i=1; $i<=$total; $i++){
				$tekstur[] = (int)$_POST['tekstur'.$i];
			}
			//for ($i=0; $i<$total; $i++){
			//	echo $tekstur[$i].'<br>';
			//}

			//form motif
			$motif = [];
			for ($i=1; $i<=$total; $i++){
				$motif[] = (int)$_POST['motif'.$i];
			}
			//for ($i=0; $i<$total; $i++){
			//	echo $motif[$i].'<br>';
			//}




			//bobot
			$b_harga=0.2;
			$b_bahan=0.2;
			$b_tebal=0.2;
			$b_tekstur=0.2;
			$b_motif=0.2;
			$b_total=$b_harga+$b_bahan+$b_tebal+$b_te>kstur+$b_motif;

			//normalisasi bobot
			$n_b_harga=$b_harga/$b_total;
			$n_b_bahan=$b_bahan/$b_total;
			$n_b_tebal=$b_tebal/$b_total;
			$n_b_tekstur=$b_tekstur/$b_total;
			$n_b_motif=$b_motif/$b_total;






				$s = [];

				for ($i = 0; $i < $total; $i++){
 
				}
			 */
	?>
	<div class="container">
	<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Alternatif</th>
			<th>Nilai</th>
		</tr>
	</thead>
	<tbody>
	<?php for ($i=0; $i<$total; $i++){ ?>
		<tr>
		<td><?php echo $i+1; ?></td>
		<td><?php echo $attr['alt'][$i]; ?></td>
		<td><?php echo $v[$i]; ?></td>
		</tr>	
	<?php } ?>
		
	</tbody>
	</table>

	<h2><?php $v_real=$v_max+1; echo "Terpilih alternatif ke-{$v_real}, yaitu {$attr['alt'][$v_max]}<br>"; ?>
</h2>
	</div>
	

<?php
}
?>

	<section id="footer">
	    <div class="foot">
		<p class="text-center" style="color:white;">&copy; copyright by TeamSPK 2017</p>
	    </div>
	</section>
    </body>
</html>
