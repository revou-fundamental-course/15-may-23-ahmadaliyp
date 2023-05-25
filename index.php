<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Katik - Kalkulator Matematik</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="font-awesome-4.6.1/css/font-awesome.min.css">
        <link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="images/katik-logo.png">
		<script type="text/javascript" src="js/jquery-1.2.3.min.js"></script>		
		<script src="js/jquery-1.12.3.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/validasi_angka.js"></script>
		<script src="js/submit.js"></script>
		<script src="js/reset.js"></script>
	</head>
	<body>
		<div class="jumbotron text-center">
			<h1>Katik <small style="color: #d5d5d5 !important;">Kalkulator Matematik</small></h1> 			
		</div>			
		<div class="container">
			<div class="homepage">
				<div class="text-center">
					<h2>Welcome to Katik</h2>
					<p>Hai Sobat, Selamat datang di Katik :]
					<br/>Sebuah web apps sederhana yang berfungsi untuk menghitung nilai luas dan keliling bangun datar</p>
				</div>

				<ul class="nav nav-pills nav-justified">
					<li class="active"><a data-toggle="pill" href="#persegi">Persegi</a></li>
					<li><a data-toggle="pill" href="#persegi-panjang">P. Panjang</a></li>
					
				</ul>

				<div class="tab-content">
					<div id="persegi" class="tab-pane fade in active">
						<div class="row">
							<div class="col-sm-6">
								<div class="panel panel-default text-center">
									<div class="panel-heading">
										<h2>Luas Persegi</h2>
									</div>
									<div class="panel-body">
										<p><img src="images/persegi.jpg" alt="Luas Persegi"></p>
										<p class="text-left">Rumus Luas Persegi yaitu :</p>
										<p><strong>L = S x S</strong></p>
										<p class="text-left">Di mana :<br/>L = Luas<br/>S = Sisi</p>
									</div>
									<div class="panel-footer">
										<h3>Hitung Luas Persegi</h3>
										<form id="luas-persegi" method="post" action="perhitungan/luas-persegi.php">
											<input class="form-control" id="sisi" name="sisi" onblur="extractNumber(this,3,true);" onkeyup="extractNumber(this,3,true);" onkeypress="return blockNonNumbers(this, event, true, true);" placeholder="Nilai Sisi" type="text" required />
											<div id="loading-luas-persegi" class="text-center" style="display:none;"><br /><img src="images/loading.gif" alt="loading..." /></div>																													
											<div id="result-luas-persegi" class="text-left" style="display:none;"></div>											
											<input type="submit" class="btn btn-lg" value="Hitung"></input>
											<p class="text-right">
												<input type="reset" class="btn btn-warning" value="Reset" onclick="showluaspersegi(0);"></input>
											</p>
										</form>											
									</div>
								</div> 
							</div> 
							<div class="col-sm-6">
								<div class="panel panel-default text-center">
									<div class="panel-heading">
										<h2>Keliling Persegi</h2>
									</div>
									<div class="panel-body">
										<p><img src="images/persegi.jpg" alt="Keliling Persegi"></p>
										<p class="text-left">Rumus Keliling Persegi yaitu :</p>
										<p><strong>K = 4 x S</strong></p>
										<p class="text-left">Di mana :<br/>K = Keliling<br/>S = Sisi</p>
									</div>
									<div class="panel-footer">
										<h3>Hitung Keliling Persegi</h3>
										<form id="keliling-persegi" method="post" action="perhitungan/keliling-persegi.php">
											<input class="form-control" id="sisi" name="sisi" onblur="extractNumber(this,3,true);" onkeyup="extractNumber(this,3,true);" onkeypress="return blockNonNumbers(this, event, true, true);" placeholder="Nilai Sisi" type="text" required />
											<div id="loading-keliling-persegi" class="text-center" style="display:none;"><br /><img src="images/loading.gif" alt="loading..." /></div>																													
											<div id="result-keliling-persegi" class="text-left" style="display:none;"></div>											
											<input type="submit" class="btn btn-lg" value="Hitung"></input>
											<p class="text-right">
												<input type="reset" class="btn btn-warning" value="Reset" onclick="showkelilingpersegi(0);"></input>
											</p>
										</form>										
									</div>
								</div> 
							</div> 							
						</div>
					</div>
					<div id="persegi-panjang" class="tab-pane fade">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="panel panel-default text-center">
                                    <div class="panel-heading">
                                        <h2>Luas Persegi Panjang</h2>
                                    </div>
                                    <div class="panel-body">
                                        <p><img src="images/persegi-panjang.jpg" alt="Luas Persegi Panjang"></p>
                                        <p class="text-left">Rumus Luas Persegi Panjang yaitu :</p>
                                        <p><strong>L = P x L</strong></p>
                                        <p class="text-left">Di mana :<br />L = Luas<br />P = Panjang<br />L = Lebar</p>
                                    </div>
                                    <div class="panel-footer">
                                        <h3>Hitung Luas Persegi Panjang</h3>
                                        <form id="luas-persegipanjang" method="post" action="perhitungan/luas-persegipanjang.php">
                                            <input class="form-control" id="panjang" name="panjang" onblur="extractNumber(this,3,true);" onkeyup="extractNumber(this,3,true);" onkeypress="return blockNonNumbers(this, event, true, true);" placeholder="Nilai Panjang" type="text" required /><br />
                                            <input class="form-control" id="lebar" name="lebar" onblur="extractNumber(this,3,true);" onkeyup="extractNumber(this,3,true);" onkeypress="return blockNonNumbers(this, event, true, true);" placeholder="Nilai Lebar" type="text" required />
                                            <div id="loading-luas-persegipanjang" class="text-center" style="display:none;"><br /><img src="images/loading.gif" alt="loading..." /></div>
                                            <div id="result-luas-persegipanjang" class="text-left" style="display:none;"></div>
                                            <input type="submit" class="btn btn-lg" value="Hitung"></input>
                                            <p class="text-right">
                                                <input type="reset" class="btn btn-warning" value="Reset" onclick="showluaspersegipanjang(0);"></input>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="panel panel-default text-center">
                                    <div class="panel-heading">
                                        <h2>Keliling Persegi Panjang</h2>
                                    </div>
                                    <div class="panel-body">
                                        <p><img src="images/persegi-panjang.jpg" alt="Keliling Persegi Panjang"></p>
                                        <p class="text-left">Rumus Keliling Persegi Panjang yaitu :</p>
                                        <p><strong>K = 2 (P + L)</strong></p>
                                        <p class="text-left">Di mana :<br />K = Keliling<br />P = Panjang<br />L = Lebar</p>
                                    </div>
                                    <div class="panel-footer">
                                        <h3>Hitung Keliling Persegi</h3>
                                        <form id="keliling-persegipanjang" method="post" action="perhitungan/keliling-persegipanjang.php">
                                            <input class="form-control" id="panjang" name="panjang" onblur="extractNumber(this,3,true);" onkeyup="extractNumber(this,3,true);" onkeypress="return blockNonNumbers(this, event, true, true);" placeholder="Nilai Panjang" type="text" required /><br />
                                            <input class="form-control" id="lebar" name="lebar" onblur="extractNumber(this,3,true);" onkeyup="extractNumber(this,3,true);" onkeypress="return blockNonNumbers(this, event, true, true);" placeholder="Nilai Lebar" type="text" required />
                                            <div id="loading-keliling-persegipanjang" class="text-center" style="display:none;"><br /><img src="images/loading.gif" alt="loading..." /></div>
                                            <div id="result-keliling-persegipanjang" class="text-left" style="display:none;"></div>
                                            <input type="submit" class="btn btn-lg" value="Hitung"></input>
                                            <p class="text-right">
                                                <input type="reset" class="btn btn-warning" value="Reset" onclick="showkelilingpersegipanjang(0);"></input>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
					
				</div>
			</div>			
		</div>
		<footer class="text-center">
			<p>Copyright 2023 <a href="https://github.com/ahmadaliyp" target="_blank">Ahmadali</a> 

			</p>
		</footer>
	</body>
</html>