<?php 
include '../config/koneksi.php';

$id_order_penjualan = $_GET["id_order_penjualan"];

$querypelanggan = mysqli_query($konek, "SELECT order_penjualan.id_order_penjualan, order_penjualan.nama_pelanggan, order_penjualan.no_invoice, order_penjualan_detail.harga, order_penjualan_detail.nama_produk, order_penjualan_detail.qty FROM order_penjualan INNER JOIN order_penjualan_detail ON order_penjualan.id_order_penjualan = order_penjualan_detail.id_order_penjualan WHERE order_penjualan.id_order_penjualan = '$id_order_penjualan' GROUP BY no_invoice DESC LIMIT 1");
if($querypelanggan == false){
  die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($data = mysqli_fetch_array($querypelanggan)){

?>

<section class="content">
        <div class="container-fluid">
            <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
        border: 4px solid #5B86E5; 
        -webkit-border-image:  -webkit-linear-gradient(to left, #5B86E5, #36D1DC);  /* Chrome 10-25, Safari 5.1-6 */
        -moz-border-image:  -moz-linear-gradient(to left, #5B86E5, #36D1DC);  /* Chrome 10-25, Safari 5.1-6 */
        border-image: linear-gradient(to left, #5B86E5, #36D1DC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */; 
        border-image-slice: 1;
      }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }

    .invoice-box table tr td:nth-child(3) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background-color: #36D1DC !important;  /* fallback for old browsers */

        color: #fff;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #5B86E5; 
        -webkit-border-image:  -webkit-linear-gradient(to left, #5B86E5, #36D1DC);  /* Chrome 10-25, Safari 5.1-6 */
        -moz-border-image:  -moz-linear-gradient(to left, #5B86E5, #36D1DC);  /* Chrome 10-25, Safari 5.1-6 */
        border-image: linear-gradient(to left, #5B86E5, #36D1DC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */; 
        border-image-slice: 1;
      }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(3) {
        border-top: 1px solid #5B86E5; 
        -webkit-border-image:  -webkit-linear-gradient(to left, #5B86E5, #36D1DC);  /* Chrome 10-25, Safari 5.1-6 */
        -moz-border-image:  -moz-linear-gradient(to left, #5B86E5, #36D1DC);  /* Chrome 10-25, Safari 5.1-6 */
        border-image: linear-gradient(to left, #5B86E5, #36D1DC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */; 
        border-image-slice: 1;
        font-weight: bold;
    }
    .bg-gradient {
        border-bottom: none !important;
        color: #fff !important; }
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>

    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="3">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="../../assets/images/logo_warna.png" style="width:100%; max-width:300px;">
                            </td>
                            
                            <td>
                                Invoice #: <?php echo $data['no_invoice']; ?><br>
                                Dibuat : <?php echo date("d-m-Y"); ?><br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="3">
                    <table>
                        <tr>
                            <td>
                                CV. SAP<br>
                                Jl. Pungkur<br>
                                Bandung
                            </td>
                            
                            <td>
                                <?php echo $data['nama_pelanggan']; ?><br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Nama Produk
                </td>
                 <td>
                    Qty
                </td>
                 <td>
                    Jumlah
                </td>
                
            </tr>
            
            <tr class="item">
                <td>
                    <?php echo $data['nama_produk']; ?>
                </td>
                <td>
                    <?php echo $data['qty']; ?>
                </td>
                <td>
                     Rp.<?php echo $data['harga']; ?>
                </td>
            </tr>
            
            <tr class="total">
                <td></td>
                <td></td>
                
                <td>
                   Total: Rp.<?php echo $data['harga']; ?>
                </td>
            </tr>
        </table>
         <a href="index.php?pemesanan_produk" class="btn btn-lg bg-gradient waves-effect">KEMBALI</a></div>
         </div>            
</section>
    <?php
      }
    ?>
    