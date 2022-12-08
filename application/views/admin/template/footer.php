         <!-- footer start -->
         <footer>
            <div class="container">
               <div class="row">
                  <div class="col-md-4">
                     <div class="full">
                        <div class="logo_footer">
                           <a href="<?= base_url('welcome') ?>">Toko Wangunsari</a>
                        </div>
                        <div class="information_f">
                           <p><strong>Desa Wangunsari</strong></p>
                           <p><strong>Alamat: </strong>Kecamatan Lembang, Kabupaten Bandung Barat, Provinsi Jawa Barat</p>
                           <p><strong>Telephone: </strong> +62 89761636234</p>
                           <p><strong>Email: </strong> contohsaja@gmail.com</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-8">
                     <div class="row">
                        <div class="col-md-7">
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="widget_menu">
                                    <h3>Menu</h3>
                                    <ul>
                                       <li><a href="<?= base_url('welcome') ?>">Home</a></li>
                                       <li><a href="<?= base_url('tampil_produk/tampil_produk') ?>">Produk</a>
                                       </li>
                                       <li><a href="<?= base_url('konfirmasi/proses_konfirmasi') ?>">Konfirmasi Pembayaran</a></li>
                                       <li><a href="<?= base_url('dasboard/detail_keranjang') ?>">Keranjang</a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-5">
                           <div class="widget_menu">
                              <h3>Saran untuk kami</h3>
                              <div class="information_f">
                                 <p>Silakan memberi saran yang dapat membangaun UMKM dari Desa Wangunsari</p>
                              </div>
                              <div class="form_sub">
                                 <form action="<?= base_url() . 'saran/index'; ?>" method="post">
                                    <fieldset>
                                       <div class="field">
                                          <input type="text" placeholder="Masukan nama anda" name="nama" />
                                       </div>
                                       <div class="field">
                                          <input type="text" placeholder="Masukan saran" name="saran" />
                                       </div>
                                       <button type="submit" class="btn btn-danger btn-sm">Kirim</button>
                                    </fieldset>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- footer end -->
         </footer>
         <div class="cpy_">
            <p class="mx-auto">© 2022<a href="#"></a><br>
            </p>
         </div>
         <!-- jQery -->
         <script src="<?= base_url() ?>assets-1/js/jquery-3.4.1.min.js"></script>
         <!-- popper js -->
         <script src="<?= base_url() ?>assets-1/js/popper.min.js"></script>
         <!-- bootstrap js -->
         <script src="<?= base_url() ?>assets-1/js/bootstrap.js"></script>
         <!-- custom js -->
         <script src="<?= base_url() ?>assets-1/js/custom.js"></script>

         <!-- Bootstrap core JavaScript-->
         <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
         <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

         <!-- Core plugin JavaScript-->
         <script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

         <!-- Custom scripts for all pages-->
         <script src="<?php echo base_url() ?>assets/js/sb-admin-2.min.js"></script>

         <!-- Page level plugins -->
         <script src="<?php echo base_url() ?>assets/vendor/chart.js/Chart.min.js"></script>

         <!-- Page level custom scripts -->
         <script src="<?php echo base_url() ?>assets/js/demo/chart-area-demo.js"></script>
         <script src="<?php echo base_url() ?>assets/js/demo/chart-pie-demo.js"></script>

         </body>

         </html>