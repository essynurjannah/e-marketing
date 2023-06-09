@extends('Landing.layouts.app')
@section('content')

<div class="container" style="padding-top: 10%; padding-bottom:2%;">
    <div class="row">
        <div class="col-7">
            <img src="https://th.bing.com/th/id/OIP.QQmOnFLQ8AlsJCMsINSpkAHaFj?w=229&h=180&c=7&r=0&o=5&pid=1.7" alt="" width="80%">
        </div>
        <div class="col-5">
            <div class="detail-home">
                <div class="title-property">
                    <h1>Manaran Residence</h1>
                </div>
                <p style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 17px; font-size: 15px; ">Manaran Ressidence merupakan perusahaan pengembang properti di Kota Jatibarang </p>
            </div>
            <div class="fasilitas">
                <h4 style="font-family: El Messiri, Sans-serif;">Fasilitas</h4>
                <div class="row pt-3" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 17px; font-size: 15px; ">
                    <div class="col">
                        <i class="fa-solid fa-kitchen-set fa-2xl pl-3"></i>
                        <p class="icon-fasilitas pt-2">Dapur</p>
                    </div>
                    <div class="col">
                        <i class="fa-solid fa-bed fa-2xl"></i>
                        <p class="icon-fasilitas pt-2">Kamar Tidur</p>
                    </div>
                    <div class="col">
                        <i class="fa-solid fa-bath fa-2xl"></i>
                        <p class="icon-fasilitas pt-2">Kamar Mandi</p>
                    </div>
                </div>
            </div>

            <div class="photo">
                <h4 style="font-family: El Messiri, Sans-serif;">Photo</h4>
                <div class="row">
                    <div class="col">
                        <img id="myImg" src="https://th.bing.com/th/id/OIP.wz0hUUJiYx_Z6zs_zMRkkwHaFj?w=239&h=180&c=7&r=0&o=5&pid=1.7" alt="" width="90%">
                    </div>
                    <div class="col">
                        <img src="https://th.bing.com/th/id/OIP.wz0hUUJiYx_Z6zs_zMRkkwHaFj?w=239&h=180&c=7&r=0&o=5&pid=1.7" alt="" width="90%">
                    </div>
                    <div class="col">
                        <img src="https://th.bing.com/th/id/OIP.wz0hUUJiYx_Z6zs_zMRkkwHaFj?w=239&h=180&c=7&r=0&o=5&pid=1.7" alt="" width="90%">
                    </div>
                </div>
            </div>

            <div class="location">
                <div class="row pt-4">
                    <h4 style="font-family: El Messiri, Sans-serif;">Location</h4>
                    <div class="col-9" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 17px; font-size: 15px;">
                        <p>Jl. Pasarean Larangan Kab.Brebes</p>
                    </div>
                    <div class="col-3">
                        <i class="fa-solid fa-location-dot fa-lg" style="color: #e10e0e;"></i>
                    </div>
                </div>
            </div>

            <!-- The Modal -->
            <div id="myModal" class="modal">
              <span class="close">&times;</span>
              <img class="modal-content" id="img01">
              <div id="caption"></div>
            </div>               
        </div>
    </div>
</div>

<div class="container pb-4">
    <div class="row">
        <h3 style="font-family: El Messiri, Sans-serif;">Simulasi KPR Manaran Ressidence</h3>
        <div class="col-8" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 17px; font-size: 14px; ">
            <p>Dapatkan informasi KPR dengan bank bank yang berkerjasama dengan Manaran Ressidence, dan simulasikan KPR anda di sini.</p>
            <div class="row">
            <div class="col-4" style="padding-bottom: 6%">
                <h6 style="font-weight: bold"><i class="fa-solid fa-wallet"></i> KPR Bank BTN</h6>
                <p style="font-size: 12px; text-align: justify; ">lihat lebih lengkap persyaratan serta bunga tahunan mengenai rencana KPR melalui bank BTN.</p>
                <a href="https://www.btn.co.id/Conventional/Product-Links/Produk-BTN/Kredit-Konsumer/Pinjaman-Bangunan/KPR-BTN-Subsidi" class="button-kpr">Selengkapnya</a>
            </div>
          
            <div class="col-4" style="padding-bottom: 6%">
                <h6 style="font-weight: bold"><i class="fa-solid fa-wallet"></i> KPR Bank Mandiri</h6>
                <p style="font-size: 12px; text-align: justify; ">lihat lebih lengkap persyaratan serta bunga tahunan mengenai rencana KPR melalui bank Mandiri.</p>
                <a href="https://www.bankmandiri.co.id/kpr" class="button-kpr">Selengkapnya</a>
            </div>
          
            <div class="col-4" style="padding-bottom: 6%">
                <h6 style="font-weight: bold"><i class="fa-solid fa-wallet"></i> KPR Bank BSI</h6>
                <p style="font-size: 12px; text-align: justify; ">lihat lebih lengkap persyaratan serta bunga tahunan mengenai rencana KPR melalui bank BSI.</p>
                <a href="" class="button-kpr">Selengkapnya</a>
            </div>
          
            <div class="col-4" style="padding-bottom: 6%">
                <h6 style="font-weight: bold"><i class="fa-solid fa-wallet"></i> KPR Bank BTN Syariah</h6>
                <p style="font-size: 12px; text-align: justify; ">lihat lebih lengkap persyaratan serta bunga tahunan mengenai rencana KPR melalui bank BTN Syariah</p>
                <a href="https://www.btnproperti.co.id/tools/simulasi-kpr" class="button-kpr">Selengkapnya</a>
            </div>

            <div class="col-4" style="padding-bottom: 6%">
                <h6 style="font-weight: bold"><i class="fa-solid fa-wallet"></i> KPR Bank BCA</h6>
                <p style="font-size: 12px; text-align: justify; ">lihat lebih lengkap persyaratan serta bunga tahunan mengenai rencana KPR melalui bank BCA</p>
                <a href="" class="button-kpr">Selengkapnya</a>
            </div>

            <div class="col-4" style="padding-bottom: 6%">
                <h6 style="font-weight: bold"><i class="fa-solid fa-wallet"></i> KPR Bank BRI</h6>
                <p style="font-size: 12px; text-align: justify; ">lihat lebih lengkap persyaratan serta bunga tahunan mengenai rencana KPR melalui bank BRI</p>
                <a href="" class="button-kpr">Selengkapnya</a>
            </div>
          
            </div>
        </div>

        <div class="col-4">
            <form id="kprForm">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" style="font-family: El Messiri, Sans-serif;">Harga Properti</label>
                    <input type="number" pattern="\d+(\.\d{3})*(\,\d{1,2})?" id="hargaProperti" class="form-control" id="exampleFormControlInput1" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" style="font-family: El Messiri, Sans-serif;">Jangka Waktu (Tahun)</label>
                    <input type="number" id="jangkaWaktu" class="form-control" id="exampleFormControlInput1" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" style="font-family: El Messiri, Sans-serif;">Bunga (%)</label>
                    <input type="number" id="bunga" class="form-control" id="exampleFormControlInput1" required>
                </div>
                <button type="submit" class="btn btn-primary" style="font-family: El Messiri, Sans-serif;">Hitung</button>
              </form>
              <div id="hasil" class="mt-3" style="font-family: El Messiri, Sans-serif;"></div>
        </div>
    </div>
</div>


<script>
    document.getElementById('kprForm').addEventListener('submit', function(event) {
      event.preventDefault();

      var hargaProperti = parseInt(document.getElementById('hargaProperti').value);
      var jangkaWaktuTahun = parseInt(document.getElementById('jangkaWaktu').value);
      var bunga = parseFloat(document.getElementById('bunga').value);

      var pokokPinjaman = hargaProperti;
      var bungaBulanan = bunga / 100 / 12;
      var jumlahAngsuran = jangkaWaktuTahun * 12;
      var angsuranBulanan = (pokokPinjaman * bungaBulanan) / (1 - Math.pow(1 + bungaBulanan, -jumlahAngsuran));

      var hasilElement = document.getElementById('hasil');
      hasilElement.innerHTML += '<p>Angsuran Bulanan: Rp.' + angsuranBulanan.toFixed(2) + '</p>';
    });
  </script>



@endsection