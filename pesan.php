<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,intial scale=1" />
    <title>Faisal Kertas</title>
    <link rel="stylesheet" href="index.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>

<body>
    <!-- header -->
    <div class="medsos">
        <div class="container">
            <ul>
                <li> <a href="https://www.facebook.com/Hasan.faisal.8"><i class="fa-brands fa-square-facebook"></i></a>
                </li>
                <li> <a href="https://www.youtube.com/channel/UCMXdc45x46WEVi_JGoFuk8A"><i
                            class="fa-brands fa-youtube"></i></a> </li>
                <li> <a href="https://www.instagram.com/hasan.faisalb/?hl=id"><i class="fa-brands fa-instagram"></i></a>
                </li>
            </ul>
            <h1 class="nama-toko"><a href="index.html">Faisal Kertas</a></h1>
        </div>
    </div>

    <header>
        <div class="container">
            <ul>
                <li class=""><a href="index.html">HOME</a></li>
                <li><a href="product.html">PRODUCT</a></li>
                <li><a href="contact.html">INFO</a></li>
            </ul>
        </div>
    </header>
    
    <section class="services">
        <div class="container">
            <div class="order">
            
            <form action="Hasil.php" method="post" name="myform">
            <h2 style="text-align: center;">Pesanan</h2>
                Nama : <input type="text" name="nama" size="25" class="form"><br><br>
                Nomer HP : <input type="text" name="nh" size="25" class="form"><br><br>
                <!-- Product : <input type="text" name="produk" size="25" class="form"><br><br> -->
                Jumlah Pesanan : <input type="text" name="jp" size="25" class="form"><br><br>
                Alamat Lengkap :  <textarea name="al" id="" cols="20" rows="5" class="form"></textarea> <br> <br>
                <input type="submit" value="Kirim" name="spn" class="btn"><br><br>

            <?php
        //pemroses data inputan form
        If (isset($_POST['spn'])){{{{{
          $nama=$_POST['nama'];
          $NomerHP=$_POST['nh'];
          $Product=$_POST['produk'];
          $JumlahPesanan=$_POST['jp'];
          $AlamatLengkap=$_POST['al'];
        //   echo "Pesanan anda  <br>";}
          echo "Nama Anda : <b>$nama</b> <br>";}
          echo "Nomer HP : <b>$NomerHP</b> <br>";}
          echo "Product Anda : <b>$Product</b> <br>";}
          echo "Jumlah Pesanan : <b>$JumlahPesanan</b> <br>";}
          echo "Alamat Lengkap : <b>$AlamatLengkap</b> <br>";}
        ?>
          </form>
          </div>
        </div>
    </section>
    </body>
    </html>



    <style>


.order{
    min-height: 50vh;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 30%;
    border-radius: 10px;
    background: #e0e0e0;
    box-shadow: 7px 7px 13px #bebebe,
      -7px -7px 13px #ffffff;
    padding: 20px;
    margin: auto;
   
  }
  /* Pesan form */
.form{
    outline: none;
    border: none;
    padding: 10px;
    margin-top: 15px;
    border-radius: 5px;
    width: 100%;
    font-size: 1.1rem;
  }
/* .kirim{
    text-decoration: none;
    border: none;
    color: white;
    background-color: tan;
    display: inline-block;
    margin: 20px 0;
    padding: 10px 20px;
    border-radius: 8px;
    transition: 0.3s;

}
.kirim:hover{
    opacity: 1;
    cursor: pointer; */

/* } */
.btn {
    background-color: tan;
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    font-size: 20px;
    margin: 1   px;
    opacity: 0.5;
    transition: 0.3s;
    cursor: pointer;
    border-radius: 10px ;
  }
  
  .btn:hover {opacity: 1}
  </style>

