<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav" >
    
<div class="wrapper">

    <?php include 'includes/navbar.php'; ?>
     
      <div class="content-wrapper"> 
        <div class="container">

<div class="container">
    <div class="page-header">
    <h1>Pertanyaan yang mungkin ditanyakan.</h1>
</div>
    <br />
    <br />
    <br />

    <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        Bagian ini berisi banyak informasi, terkait dengan <b>Kopi Ida</b> dan tokonya. Jika Anda tidak dapat menemukan jawaban untuk pertanyaan Anda, pastikan untuk menghubungi kami.
    </div>

    <br />

    <div class="panel-group" id="accordion">
        <div class="faqHeader">Pertanyaan Umum.</div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Apa itu Kopi Ida?</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                    <strong>Kopi Ida</strong> adalah Website jual beli biji/bubuk kopi asli asal sidikalang.Diwebsite ini Penjual Menawarkan Item yang dijual ditokonya kedalam website untuk memberi kesempatan kepada orang lain membeli produk yang ditawarkan.
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">Apakah kopi/bubuk kopi yang dijual asli asal Sidikalang?</a>
                </h4>
            </div>
            <div id="collapseTen" class="panel-collapse collapse">
                <div class="panel-body">
                  Ya,Kopi/bubuk kopi yang dijual di Website ini Original asli asal sidikalang dan langsung dari toko/tokeh nya. 
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">Apakah Item yang dijual Hanya Kopi & Bubuk kopi saja?</a>
                </h4>
            </div>
            <div id="collapseEleven" class="panel-collapse collapse">
                <div class="panel-body">
                  Untuk saat ini Website hanya menjual Kopi & bubuk kopi saja,namun Admin akan menjual Item lainnya yang mungkin banyak dibutuhkan oleh pelanggan web ini yang berhubungan seputar dengan Kopi Sidikalang.
                </div>
            </div>
        </div>

        

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Bagaimana Proses Checkoutnya?</a>
                </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse">
                <div class="panel-body">
                   Checkout dilakukan dengan bantuan PAyPal,pengguna akan dibantu melakukan proses pembayarannya dan harus mengisi dengan sesuai semua ketentuan yang diberikan.
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">Bagaimana cara mengajukan Pengembalian Barang?</a>
                </h4>
            </div>
            <div id="collapseSeven" class="panel-collapse collapse">
                <div class="panel-body">
                    Kami menganjurkan Anda untuk berkomunikasi dengan penjual terlebih dahulu sebelum mengajukan permintaan pengembalian barang. Setelah Anda menerima dan memeriksa barang tersebut, Anda dapat mengajukan permintaan pengembalian barang sebelum dana Anda diteruskan ke penjual (sebelum Anda klik atau sebelum masa Garansi berakhir).
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .faqHeader {
        font-size: 27px;
        margin: 20px;
    }

    .panel-heading [data-toggle="collapse"]:after {
        font-family: 'Glyphicons Halflings';
        content: "\e072"; 
        float: right;
        color: #F58723;
        font-size: 18px;
        line-height: 22px;

        -webkit-transform: rotate(-90deg);
        -moz-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        -o-transform: rotate(-90deg);
        transform: rotate(-90deg);
    }

    .panel-heading [data-toggle="collapse"].collapsed:after {

        -webkit-transform: rotate(90deg);
        -moz-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        -o-transform: rotate(90deg);
        transform: rotate(90deg);
        color: #454444;
    }
</style>



</div>





   </div>
      </div>
  
    <?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
