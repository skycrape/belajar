<script type="text/javascript">
  function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
<?php 
include "include/koneksi.php";
include "include/fungsi_thumb.php";
$lokasi_file= $_FILES['fupload']['tmp_name'];
$tipe_file=$_FILES['fupload']['type'];
$nama_file=$_FILES['fupload']['name'];
$acak=rand(1,99);
$nama_file_unik=$acak.$nama_file;
        // unuk tabel pelapor
		UploadImage($nama_file_unik);
		$noktp=$_POST['noktp'];
		$nama=$_POST['nama'];
		$tempatlhr=$_POST['tempatlhr'];
		$tgllahr=$_POST['tgllahr'];
		$jenkel=$_POST['jenkel'];
		$alamat=$_POST['alamat'];
		$lurah_desa=$_POST['lurah_desa'];
		$nohp=$_POST['nohp'];

        $simpan=mysqli_query($koneksi,"INSERT INTO pelapor VALUES ('$noktp','$nama','$tempatlhr','$tgllahr','$jenkel','$alamat','$lurah_desa','$nohp','$nama_file_unik')") or die(mysqli_error());
        // untuk tabel laporan 

        $tanggal=$_POST['tanggal'];
        $isi_laporan=$_POST['isi_laporan'];
        $kasus=$_POST['kasus'];
        $lokasi_kejadian=$_POST['lokasi_kejadian'];
        $tgl_kejadian=$_POST['tgl_kejadian'];
        $jam_kejadian=$_POST['jam_kejadian'];
        $kerugian_materi=$_POST['kerugian_materi'];
        $kerugian_benda=$_POST['kerugian_benda'];
        $kerugian_lain=$_POST['kerugian_lain'];
        $nominal_kerugian=$_POST['nominal_kerugian'];
        $ciri_ciri_pelaku=$_POST['ciri_ciri_pelaku'];
        $kronologis=$_POST['kronologis'];

        $simpantabelpelapor=mysqli_query($koneksi, "INSERT INTO laporan VALUES(NULL,'$tanggal','$noktp','$isi_laporan','$kasus','$lokasi_kejadian','$tgl_kejadian','$jam_kejadian','$kerugian_materi','$kerugian_benda','$kerugian_lain','$nominal_kerugian','$ciri_ciri_pelaku','$kronologis','Belum Ditentukan')");

		//$simpan=mysqli_query($koneksi,"INSERT INTO pelapor VALUES('$noktp')") or die(mysqli_error());
		



		if ($simpan) {
			?>
			 <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
			
                            <div class="panel-body">
<div class="col-md-2 col-sm-2"></div>
                             <div class="col-md-8 col-sm-8">
                    <div class="panel panel-primary" id="print">
                                               
                        <div class="panel-body">
                             <center> <img src="assets/img/logo_reskrimsus.png" /></center><br>   
                             <center><h1>LAPORAN POLISI</h1></center><br>
                             <p>___________________________________________________________________________________________________________</p>
                             <p><b><h2>Yang Melaporkan</h2></b><br>
                             
                             <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama</label>
                                        <div class="col-sm-9">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><?php echo $nama ?> </label>
                                        </div>
                            </div>


                             <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tempat Tanggal Lahir</label>
                                        <div class="col-sm-9">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><?php echo $tempatlhr ?> / <?php echo $tgllahr ?> </label>
                                        </div>
                            </div>

                            <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Jenis Kelamin</label>
                                        <div class="col-sm-9">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><?php echo $jenkel ?> </label>
                                        </div>
                            </div>
                            <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Telepon</label>
                                        <div class="col-sm-9">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><?php echo $nohp ?> </label>
                                        </div>
                            </div>
                            <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Alamat / Lurah / Desa</label>
                                        <div class="col-sm-9">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><?php echo $alamat ?> /  <?php echo $lurah_desa ?> </label>
                                        </div>
                            </div>

                             

                             </p>
                              <p>_____________________________________________________________________________________________________________</p>
                              <b><h2>Peristiwa Yang Dilaporkan</h2></b>

                               <p>_____________________________________________________________________________________________________________</p>

                               <p>
                                  <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Waktu Kejadian</label>
                                        <div class="col-sm-9">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Pukul &nbsp;&nbsp;<?php echo $jam_kejadian ?> &nbsp;&nbsp;WIB , <?php echo $tgl_kejadian ?> </label>
                                        </div>
                            </div> 
                            <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tempat Kejadian</label>
                                        <div class="col-sm-9">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><?php echo $lokasi_kejadian ?> </label>
                                        </div>
                            </div> 

                              <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Apa Yang Terjadi</label>
                                        <div class="col-sm-9">
                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><?php echo $kasus ?> </label>
                                        </div>
                            </div> 
                               </p><br><br>
                               <p>Pelapor Atau Pengadu Memberikan Ketereangannya, kemudian membubuhkan tanda tangan nya dibawah ini</p>

                             <p align="Right"><?php echo $nama ?></p><br><br><br><br>
                                <p align="Right">_______________________________</p>
                         </div>


                        </div>
                        <div class="panel-footer">
                          <button type="button" onclick="printDiv('print')" class="btn btn-success pull-right"><i class="fa fa-print"></i> Print
          </button>
                        </div>

                      
                    </div>
                    <div class="col-md-2 col-sm-2"></div>
                   
                </div>



                            </div>
                              <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
                              
			<?php 
		}
		else
		{
			echo "gagal";
		}
	

?>