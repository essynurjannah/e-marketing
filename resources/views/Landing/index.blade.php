@extends('Landing.layouts.app')
@section('content')

            <header class="py-5 hero-bg">
                <div class="container px-5" style="padding-top: 3%;">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="hero-text">
                                <h1 class="display-5 fw-bolder text-white mb-2 hero-title" style="font-family: El Messiri, Sans-serif;">SELAMAT DATANG DI MANARAN RESIDENCE</h1>   
                                <a href="#about" class="btn btn-primary">SELENGKAPNYA</a>              
                            </div>
                        </div> 
                    </div>
                </div>
            </header>


            <section id="">
            <div class="container pt-4">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl">
                        <div class="text-center my-5">
                            <h1 class="fw-bolder mb-3" style="font-family: El Messiri, Sans-serif;">MANARAN RESIDENCE</h1>                    
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="lead fw-normal text-muted mb-4" style="color: #5f5f5f; font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 17px; text-align: justify; ">
                                    CitraRaya Tangerang merupakan The largest integrated township development by Ciputra Group. Proyek terbesar Ciputra Group seluas 2,760 Hektar (Ha) ini merangkum hunian, komersil dan fasilitas umum yang lengkap dan modern. Sebagai kota mandiri modern, CitraRaya telah mengalami pertumbuhan yang sangat pesat dan mencatatkan diri sebagai Regional and Business Center yang kuat di Tangerang.
                                </p>
                            </div>
                            <div class="col">
                                <img src="https://sapphiregrup.com/wp-content/uploads/revslider/sapphire-aesthetic-slawi-1/Sapphire-Residence-Sumbang-2-min-1024x576.png" alt="" width="90%" style="border-radius: 20px 20px 20px 20px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
           
            <!-- Blog preview section-->
            <section style="padding-top: 10%;">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl">
                            <div class="text-center">
                                <h2 class="fw-bolder" style="font-family: El Messiri, Sans-serif;">TIPE PERUMAHAN</h2>
                                <p class="lead fw-normal text-muted mb-5" style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 17px; ">Dapatkan penawaran terbaru dan promosi paling menarik, segera miliki rumah dan hunian idaman Anda di Manaran Ressidence</p>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="https://citraraya.com/wp-content/uploads/2023/03/vr-varenna.jpg" alt="..." height="80%" />
                                    <div class="card-body p-4">
                                        <a class="text-decoration-none link-dark stretched-link" href="/detail"><h5 class="card-title mb-3">Perumahan Komersil</h5></a>
                                        <p class="card-text mb-0"  style="font-family: Verdana, Geneva, Tahoma, sans-serif">Rumah Tapak Dengan Fasilitas Lengkap Skala Kota</p>
                                    </div>
                            </div>
                         </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="https://citraraya.com/wp-content/uploads/2023/01/Le-Sentier-view-03-scaled.jpg" alt="..." height="80%" />
                                    <div class="card-body p-4">
                                        <a class="text-decoration-none link-dark stretched-link" href="/detail"><h5 class="card-title mb-3">Perumahan Subsidi</h5></a>
                                        <p class="card-text mb-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                            </div>
                         </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="https://citraraya.com/wp-content/uploads/2023/03/Cluster-varenna-view-02-scaled.jpg" alt="..." height="80%" />
                                    <div class="card-body p-4">
                                        <a class="text-decoration-none link-dark stretched-link" href="/detail"><h5 class="card-title mb-3">Perumahan Komersil</h5></a>
                                        <p class="card-text mb-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                            </div>
                         </div>
                               
                    </div>         
                </div>
            </section>

             <!-- Features section-->
            @include('Landing.layouts.component.tipe')
            
            <!-- Blog preview section-->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl">
                            <div class="text-center">
                                <h2 class="fw-bolder" style="font-family: El Messiri, Sans-serif;">What's On!</h2>
                                <p class="lead fw-normal text-muted mb-5">Baca berita terbaru seputar CitraRaya Tangerang, serta artikel tips yang dapat menjadikan Anda lebih bijak memilih dan berinvestasi properti.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="https://dummyimage.com/600x350/ced4da/6c757d" alt="..." />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="/blog"><h5 class="card-title mb-3">Blog post title</h5></a>
                                    <p class="card-text mb-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>                 
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="https://dummyimage.com/600x350/ced4da/6c757d" alt="..." />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="/blog"><h5 class="card-title mb-3">Blog post title</h5></a>
                                    <p class="card-text mb-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>                 
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="https://dummyimage.com/600x350/ced4da/6c757d" alt="..." />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="/blog"><h5 class="card-title mb-3">Blog post title</h5></a>
                                    <p class="card-text mb-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>                 
                            </div>
                        </div>                  
                    </div>                 
                </div>
            </section>

            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="text-center mb-5">
                        <h1 class="fw-bolder" style="font-family: El Messiri, Sans-serif;">Frequently Asked Questions</h1>
                        <p class="lead fw-normal text-muted mb-0">Pertanyaan yang sering ditanyakan terkait pembelian Property di Sapphire grup</p>
                    </div>
                    <div class="row gx-5">
                        <div class="col-xl">
                            <!-- FAQ Accordion 1-->
                            <div class="accordion mb-5" id="accordionExample">
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="headingOne"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="background-color: brown; color:white; font-weight: 600; font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 17px; text-align: justify;">Berapa Uang Muka yang diperlukan?</button></h3>
                                    <div class="accordion-collapse collapse show" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>Minimal Uang Muka 10% dari harga rumah.</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="headingTwo"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="background-color: brown; color:white; font-weight: 600; font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 17px; text-align: justify;">Adakah Cara Pembayaran Lain selain KPR?</button></h3>
                                    <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>Selain secara kredit (KPR) kami juga menerima pembayaran yaitu:</strong>
                                            1. Cash Termin : Pembayaran dengan sistem 50% uang masuk diawal, 45% setelah bangunan atap, dan 5% setelah sertifikat jadi.
                                            2. Cash Keras : Pembayaran dengan sistem 95% uang masuk diawal, dan 5% setelah sertifikat jadi.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="headingThree"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="background-color: brown; color:white; font-weight: 600; font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 17px; text-align: justify;">Apa saja persyaratan untuk KPR?</button></h3>
                                    <div class="accordion-collapse collapse" id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>Untuk persyaratan KPR setiap bank berbeda beda, untuk detailnya bisa lihat bagian di atas FAQ.</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


     <!-- Footer-->
 <footer class="bg-dark py-4 mt-auto">
    <div class="container px-5">
        <div class="row align-items-center justify-content-between flex-column flex-sm-row">
            <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Your Website 2023</div></div>
            <div class="col-auto">
                <a class="link-light small" href="#!">Privacy</a>
                <span class="text-white mx-1">&middot;</span>
                <a class="link-light small" href="#!">Terms</a>
                <span class="text-white mx-1">&middot;</span>
                <a class="link-light small" href="#!">Contact</a>
            </div>
        </div>
    </div>
</footer>


 @endsection