<!--================================
=            Google Map            =
=================================-->

  <footer id="footer" class="bg-one">
  <div class="top-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-3">
          <h3>KASIH SAYANG BUNDA</h3>
          <p>Jl. Kapten Abdul Hamid No.82 A, RT.03 RW.01, Kel. Ledeng, Kec. Cidadap Kota Bandung</p>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
          <ul>
            <li><h3>TENTANG KITA</h3></li>
            <li><a href="http://localhost/OKE/Fasilitas">Fasilitas</a></li>
            <li><a href="http://localhost/OKE/StrukturOrganisasi">Struktur Organisasi</a></li>
            <li><a href="http://localhost/OKE/VisiMisi">Visi & Misi</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
          <ul>
            <li><h3> </h3></li>
            <li><a href="#"></a></li>
            <li><a href="#"> </a></li>
            <li><a href="#"> </a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->


        <div class="col-sm-3 col-md-3 col-lg-3">
          <ul>
            <li><h3>IKUTI KITA</h3></li>
            <li><a href="https://web.facebook.com/koberkasihsayangbunda">Facebook</a></li>
            <li><a href="https://www.youtube.com/channel/UCnj6H5W6XiE5JvZduLJYZsg/featured">Youtube</a></li>
            <li><a href="https://www.instagram.com/koberkasihsayangbunda/">Instagram</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

      </div>
    </div> <!-- end container -->
  </div>
  <div class="footer-bottom">
    <h5></h5>
    <h6><a href="#"></a></h6>
  </div>
</footer> <!-- end footer -->


    <!-- end Footer Area
    ========================================== -->
    

    
    <!-- 
    Essential Scripts
    =====================================-->
    <!-- Main jQuery -->
    <script src="<?= base_url() ?>/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Google Map -->
    <script  src="<?= base_url() ?>/assets/plugins/google-map/gmap.js"></script>

    <!-- Bootstrap -->
    <script src="<?= base_url() ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
    <!-- Parallax -->
    <script src="<?= base_url() ?>/assets/plugins/parallax/jquery.parallax-1.1.3.js"></script>
    <!-- lightbox -->
    <script src="<?= base_url() ?>/assets/plugins/lightbox2/dist/js/lightbox.min.js"></script>
    <!-- Owl Carousel -->
    <script src="<?= base_url() ?>/assets/plugins/slick/slick.min.js"></script>
    <!-- filter -->
    <script src="<?= base_url() ?>/assets/plugins/filterizr/jquery.filterizr.min.js"></script>
    <!-- Smooth Scroll js -->
    <script src="<?= base_url() ?>/assets/plugins/smooth-scroll/smooth-scroll.min.js"></script>
    
    <!-- Custom js -->
    <script src="<?= base_url() ?>/assets/js/script.js"></script>

    <!-- bs-input -->
    <script src="<?php echo base_url() ?>assets/plugins/bs-custom-file-input/bs-custom-file-input.js"></script>
    <script type="text/javascript">
    $(function () {
      bsCustomFileInput.init();
    });
    </script>

    <!-- Datatables -->
    <script src="<?= base_url() ?>assets/js/datatables/jquery-3.5.1.js"></script>
    <script src="<?= base_url() ?>assets/js/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/js/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>assets/js/datatables/dataTables.fixedColumns.min.js"></script>
    <script src="<?= base_url() ?>assets/js/datatables/dataTables.buttons.min.js"></script>
    <script src="<?= base_url() ?>assets/js/datatables/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>assets/js/datatables/jszip.min.js"></script>
    <script src="<?= base_url() ?>assets/js/datatables/pdfmake.min.js"></script>
    <script src="<?= base_url() ?>assets/js/datatables/vfs_fonts.js"></script>
    <script src="<?= base_url() ?>assets/js/datatables/buttons.html5.min.js"></script>
    <script src="<?= base_url() ?>assets/js/datatables/buttons.print.min.js"></script>
    <script src="<?= base_url() ?>assets/js/datatables/buttons.colVis.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
          var table = $('#example').DataTable( {
              scrollY:        "300px",
              scrollX:        true,
              scrollCollapse: true,
              paging:         true,
              fixedColumns:   true,
              lengthMenu:[
                [5,10,25,50,100,-1],
                ["All",5,10,25,50,100] 
              ]
          } );

          var table = $('#akun').DataTable( {
              scrollY:        "300px",
              scrollX:        true,
              scrollCollapse: true,
              paging:         true,
              fixedColumns:   true,
              buttons: [
                  {
                      extend: 'print',
                      exportOptions: {
                          columns: ':visible'
                      }
                  },
                  {
                      extend: 'excel',
                      exportOptions: {
                          columns: ':visible'
                      }
                  },
                  'colvis'
              ],
              dom:
              "<'row'<'col-md-3'l><'col-md-5'B><'col-md-4'f>>" +
              "<'row'<'col-md-12'tr>>" +
              "<'row'<'col-md-5'i><'col-md-7'p>>",
              lengthMenu:[
                [5,10,25,50,100,-1],
                ["All",5,10,25,50,100] 
              ]
          } );

          table.buttons().container()
              .appendTo( '#example_wrapper .col-md-5:eq(0)' );
      } );
    </script>
    <script type="text/javascript">

     $(function() {

       $( "#tgl_lahir" ).datepicker({

              changeMonth: true,

              changeYear: true

          });

     });

        window.onload=function(){

            $('#tgl_lahir').on('change', function() {

                var dob = new Date(this.value);

                var today = new Date();

                var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));

                $('#umur').val(age);

            });
        }

    </script>
  </body>
  </html>
