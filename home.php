<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Woopsy - Ur Fav. Food</title>
    <link rel="icon" href="./icon/icons-09.png">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="form.css" type="text/css">
    <link rel="stylesheet" href="card.css" type="text/css">
    <link rel="stylesheet" href="footer.css" type="text/css">
    
    <style>
        .display {
            text-align: center; 
            color: pink; 
            font-family: Poppins, sans-serif;
            margin:20px;
        }
    </style>

</head>

<body>

    <div class="parallax">
        <header class="primary-header">
            <div class="wrapper_nav">

                <div id="logo">
                    <img src="./icon/logo-panjang.png" alt="Logo" class="logo-img">
                </div>
                

                <nav class="primary-nav">
                    <div class="horizontal-nav">
                        <a href="#about">About</a>
                        <a href="#barang">Product</a>
                        <a href="#bukutamu">Join Us</a>
                    </div>
                </nav>

                <div class="flex-group" aria-label="social">
                    <a href="https://wa.me/+6282137143962"><img src="./icon/outline-whatsapp (1).svg" width="30px"></iconify-icon></a>
                    <a href="https://www.instagram.com/woopsy.smg/"><img src="./icon/instagram-line.svg" width="30px"></a>
                </div>
            </div>
        </header>

        <div class="hero">
            <div class="wrapper">
                <h1 class="hero_title">
                    Hai Sweetie,<br>
                    Rasakan<br>Lembutnya!<br>
                    <button class="button"><a class="button-link" href="https://linktr.ee/woopsy.smg">Beli Disini</a></button>
                </h1>
            </div>
        </div>
        
        <img class="parallax_background" src=".\images\background_parallax.png">
        <img class="parallax_hiasan" src=".\images\hiasan_mochi.png">
        <img class="parallax_mochi" src=".\images\mochi.png">
        <img class="parallax_abu" src=".\images\abu_belakang.png">
        <img class="parallax_coklat" src=".\images\coklat_depan.png">
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="taglineproduk">
        <h2 class="judulproduk" id="barang">Produk Kami</h2>
        <p class="deskripsi" >Woopsy adalah sebuah brand makanan yang menjual berbagai macam kue. <br>Seperti 
            Daifukumochi, Cinnamon Roll, Pastries. Kita juga membuat Spaghetti Brulee</p>
    </div>

    <main class="main-content">
        <div class="wrappercontent">
            <div class="container">
                <input type="radio" name="slide" id="c1" checked>
                <label for="c1" class="card">
                    <div class="row">
                        <div class="icon">1</div>
                        <div class="description">
                            <h4>Daifuku</h4>
                        </div>
                    </div>
                </label>
                <input type="radio" name="slide" id="c2" >
                <label for="c2" class="card">
                    <div class="row">
                        <div class="icon">2</div>
                        <div class="description">
                            <h4>Pancake</h4>
                            <p></p>
                        </div>
                    </div>
                </label>
                <input type="radio" name="slide" id="c3" >
                <label for="c3" class="card">
                    <div class="row">
                        <div class="icon">3</div>
                        <div class="description">
                            <h4>Pastries</h4>
                        </div>
                    </div>
                </label>
                <input type="radio" name="slide" id="c4" >
                <label for="c4" class="card">
                    <div class="row">
                        <div class="icon">4</div>
                        <div class="description">
                            <h4>Mango Sago</h4>
                        </div>
                    </div>
                </label>
                <input type="radio" name="slide" id="c5" >
                <label for="c5" class="card">
                    <div class="row">
                        <div class="icon">5</div>
                        <div class="description">
                            <h4>Cinamon Roll</h4>
                        </div>
                    </div>
                </label>
                <input type="radio" name="slide" id="c6" >
                <label for="c6" class="card">
                    <div class="row">
                        <div class="icon">6</div>
                        <div class="description">
                            <h4>Spaghetti Brulee</h4>
                        </div>
                    </div>
                </label>
            </div><br>
            

        </div>
</main>
<button class="lihat"><a class="lihat" href="detail.php">Lihat Selengkapnya ></a></button>

            <div>
                <div ><img src="./images/FOUNDER-01.png" id="about"></div>
            </div>
            
            <div class="bukutamu" id="bukutamu">
                <form id="formpengguna"  action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <h1 class="pengguna">Form Pengguna</h1>
        
                    <label>Nama     : </label> <br>
                    <input name="fnama" type="text" name="nama" id="nama" required>
                        <br>
                    <label>Email    : </label> <br>`
                    <input name="femail" type="email" name="email" id="email" required>
                    <br>
                    <label>No.Hp    : </label> <br>
                    <input name="fhp" type="text" name="hp" id="hp" required>
                    <br>
                    <label>Kode Pos : </label> <br>
                    <input name="pos" type="text" name="pos" id="pos" required>
                    <br>
                    <label>Pesan    : </label> <br>
                    <input name="pesan" type="text" name="pesan" id="pesan" required>
                    <br>
                    <button id="buttonform" type="submit" onclick="submitForm()">Submit</button>
                </form>
            </div>

            <br><br><br><br>
            <hr>

            
            <div class="display">
            <?php
             if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST["fnama"];
                $email = $_POST["femail"];
                $hp = $_POST["fhp"];
                $pos = $_POST["pos"];
                $pesan = $_POST["pesan"];

                echo "Name     : " . $name . "<br>";
                echo "Email    : " . $email. "<br>";
                echo "No.Hp    : " . $hp. "<br>";
                echo "Kode Pos : " . $pos. "<br>";
                echo "Pesan    : " . $pesan. "<br>";
              }
            ?>
            </div>

            <footer>
                <div class="footercontent">
                    <h3>Woopsy Semarang</h3><br>
                    <ul class="social">
                        <a href="https://wa.me/+6282137143962"><img src="./icon/outline-whatsapp (1).svg" width="40px"></a>
                    <a href="https://www.instagram.com/woopsy.smg/"><img src="./icon/instagram-line.svg" width="40px"></a>
                    </ul>
                    <br>
                </div>
                <div class="footerbottom">
                    <p>Copyright &copy;2024 Woopsy Semarang designed by @aizaperdian</p>
                </div>
                    
            </footer>
            
<script src="script.js"></script>
</body>
</html>