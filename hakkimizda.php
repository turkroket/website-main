<?php
    include 'baglanti.php';
    include 'func.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        if (isset($_POST['selectedId'])){
            $selectedid = $_POST['selectedId'];
        }

        if (isset($_POST['selectedmobileId'])){
            $selectedmobileid = $_POST['selectedId'];
        }

        if(isset($selectedid)){
            $sel = "SELECT * FROM gonulluler WHERE userid='$selectedid'";
            $result = mysqli_query($db, $sel);
            $data = mysqli_fetch_array($result, MYSQLI_ASSOC);

            $response = array(
                "userName" =>  $data["username"],
                "userInfo" =>  $data["userinfo"],
                "userLinkedIn" =>  $data["userlinkedin"],
                "userPhoto" =>  $data["userphoto"]
            );

            echo json_encode($response);
            exit;
        }

        if(isset($selectedmobileid)){
            $sel = "SELECT * FROM gonulluler WHERE userid='$selectedid'";
            $result = mysqli_query($db, $sel);
            $data = mysqli_fetch_array($result, MYSQLI_ASSOC);

            $response2 = array(
                "userInfo" =>  $data["userinfo"]
            );

            echo json_encode($response2);
            exit;
        }

    }
?>


<!DOCTYPE html>

<html lang="tr">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Türk Roket Topluluğu, kuruluşu 2017’ye dayanan ve Türkiye’de roket bilimini genç, yaşlı; eğitimli, eğitimsiz ayrımı yapmadan anlatmaya çalışan bir topluluktur. ">

    <meta name="keywords" content="rockets, science, turkroket, Turkey, space, uzay, roket, bilim, teknik, teknoloji">

    <meta name="author" content="Türk Roket Topluluğu">



    <title>Türk Roket Topluluğu | Hakkımızda</title>

        

    <link rel="stylesheet" href="./styles/about.css">

    <link rel="icon" type="image/x-icon" href="./assets/favicon.png">

    <script src="jquery.min.js"></script>

    <script src="https://unpkg.com/feather-icons"></script>

</head>



<body>

    <div class="mobile">

        <div class="mobile-2">

            <div class="mobile-mainheader">     

                <div class="mobile-menu">

                    <input id="toggle" type="checkbox">



                    <label class="toggle-container" for="toggle">

                        <span class="button button-toggle"></span>

                    </label>

                    <nav class="nav">

                        <a class="nav-item" href="./index.html">Anasayfa</a>

                        <a class="nav-item" href="./hakkimizda.php">Hakkımızda</a>

                        <a class="nav-item" href="./projelerimiz.html">Projelerimiz</a>

                        <a class="nav-item" href="./etkinliklerimiz.html">Etkinliklerimiz</a>

                        <a class="nav-item" href="./egitim.html">Eğitim</a>

                        <a class="nav-item" href="./topluluk">Blog</a>

                        <a class="nav-item" href="#"><del>İndirilebilir</del></a>

                        <a class="nav-item" href="./gonulluol.html">Gönüllü Ol</a>

                        <a class="nav-item" href="./bildir.html">Hata Bildir</a>

                        <a class="nav-item" href="https://www.instagram.com/turkroket/">Instagram</a>

                        <a class="nav-item" href="https://www.youtube.com/channel/UCZxxGNj_sL4eoJxKW0xS7mg">Youtube</a>

                        <a class="nav-item" href="https://discord.gg/A8Ap3hN">Discord</a>

                        <a class="nav-item" href="https://kreosus.com/turkroket">Destek Ol</a>

                        <a class="nav-item" href="./gizlilik.html">Gizlilik</a>

                    </nav>

                </div>



                <div class="mobile-header">

                    <a href="./index.html">

                        <img class="mobile-headerimg" src="./assets/baslik.png" alt="turkroket-logo">

                    </a>

                    <label class="mode-control">

                        <input id="mode-btn2" type="checkbox">

                        <span><i data-feather="moon"></i></span>

                        <span><i data-feather="sun"></i></span>

                    </label>

                </div>

            </div>

            <div class="mobile-body">

                <br>

                <div class="about-siralama-2">

                    <h3 class="about-header">HAKKIMIZDA</h3>

                    <p class="about-paragraph">Türk Roket Topluluğu, kuruluşu 2017’ye dayanan ve Türkiye’de roket bilimini genç, yaşlı; eğitimli, eğitimsiz ayrımı yapmadan anlatmaya çalışan bir <strong>topluluktur.</strong></p>

                </div>

                <div class="about-siralama-2">

                    <h3 class="about-header">MİSYON</h3>

                    <p class="about-paragraph">Türk Roket Topluluğu, toplumun tüm kesimine hitap ederek roket bilimine olan <strong>ilgiyi</strong> arttırmaya çalışmaktadır. Bu çerçevede saha üzerinde katma değeri yüksek <strong>projeler</strong> geliştirmeyi ve farklı platformlarda <strong>etkinlikler</strong> düzenlemeyi sürdürmektedir.</p>

                </div>

                <div class="about-siralama-2">

                    <h3 class="about-header">VİZYON</h3>

                    <p class="about-paragraph">Türk Roket Topluluğu, roket/uzay biliminin toplumdaki <strong>her</strong> kesimin anlayabileceği bir bakış açısıyla anlatılabileceği düşüncesinden yola çıkılarak oluşturulmuştur.</p>

                </div>

                <div class="about-siralama-2">

                        <h3 class="about-header">KURULUŞ</h3>

                        <p class="about-paragraph">Kurulduğu zaman ele alındığında, sayılı üniversitelerde bulunan "Roketçilik" topluluklarına karşın 2017'de birkaç öğrenci tarafından kurulan Türk Roket Topluluğu, Türkiye'nin <strong>roket teknolojileri</strong> alanlarındaki eksik noktalarını tespit etmiş ve faaliyetlerini bu alanlarda belirlediği misyonları doğrultusunda gerçekleştirmeye çalışmıştır. <br><br>Türkiye'de <strong>ulusal çapta</strong> katma değeri yüksek projeler geliştirme amacına sahip <strong>ilk ve halihazırdaki en büyük</strong> roket topluluğudur.</p>

                </div>

                <div class="about-two">

                    <div class="about-siralama medya-hesaplari">

                        <h3 class="about-header">GÖNÜLLÜ SAYISI</h3>

                        <p class="about-paragraph">Türk Roket Topluluğu, Türkiye'nin dört bir yanından <strong>79 gönüllüsü</strong> ile aktif olarak çalışmalarına devam etmektedir. Gönüllülerinin <strong>%57'si erkek, %43'ü kadın</strong>dır.</p>

                        <div class="pie">
                            <div class="kadin">%43 Kadın</div>
                            <div class="erkek">%57 Erkek</div>
                        </div>

                    </div>

                    <div> 
                        <div class="about-siralama medya-hesaplari">

                            <h3 class="about-header">MEDYA HESAPLARIMIZ</h3>

                            <a href="https://instagram.com/turkroket"><i data-feather="instagram"></i></a>
                            <a href="https://linkedin.com/company/turkroket"><i data-feather="linkedin"></i></a>
                            <a href="https://www.youtube.com/@turkrokettoplulugu"><i data-feather="youtube"></i></a>

                        </div>

                        <br>

                        <div class="about-siralama medya-hesaplari">

                            <h3 class="about-header">ÜNİVERSİTELİ ORANLARI</h3>
                            <p>Havacılık ve Uzay Müh. : <strong>%16</strong></p>
                            <p>Makine Müh. : <strong>%11</strong></p>
                            <p>Elektrik ve Elektronik Müh. : <strong>%7</strong></p>
                            <p>Bilgisayar Müh. : <strong>%9</strong></p>

                        </div>
                    </div>

                </div>

                <div class="sponsors-2">

                    <div class="sponsor">

                        <h3 class="about-header">SPONSORLARIMIZ</h3>
                        <!--<img class="pcbway-logo" src="./assets/projects/pcbwaylogo.png">
                        <br>
                        <img class="jlcpcb-logo" src="./assets/projects/jlcpcb.png">
                        <br>-->
                        <br>
                        <img class="turkticaret-logo" src="./assets/projects/turkticaretuzun.png">
                        <br>
                        <img class="terabank-logo" src="./assets/projects/terabanksiyah.png">
                        <br>
                        <img class="ozdisan-logo" src="./assets/projects/ozdisanlogo.png">
                        <br>
                        <img class="pinea-logo" src="./assets/projects/pinealogo.png">
                        <br>

                    </div>

                    <div class="collaborators">

                        <h3 class="about-header">İŞ BİRLİKÇİLERİMİZ</h3>
                        <img height="25" src="./assets/projects/uplogouzun2.png">
                        <img height="50" width="50" src="./assets/projects/astrocomlogo.png">
                        <br>
                        <br>

                    </div>

                    <div class="supporters">

                        <h3 class="about-header">MADDİ DESTEKÇİLERİMİZ</h3>

                        <p class="supporters-paragraph">Burak E.</p>

                        <p class="supporters-paragraph">Sedat P.</p>
                        
                        <p class="supporters-paragraph">Özay E.</p>

                        <p class="supporters-paragraph">Aslı Gülbike U.</p>

                        <p class="supporters-paragraph">Fahri K.</p>

                        <p class="supporters-paragraph">Uğur K.</p> 

                        <p class="supporters-paragraph">Uğurcan Ö.</p>

                        <p class="supporters-paragraph">Bilgin E.</p>

                        <p class="supporters-paragraph">Hakan S.</p>

                        <p class="supporters-paragraph">Sadık Kemal E.</p>

                        <p class="supporters-paragraph">Metecan K.</p>

                        <p class="supporters-paragraph">Feyza Betül G.</p>

                        <p class="supporters-paragraph">Rümeysa T.</p>
                        
                        

                    </div>

                </div>

                <div class="mobile-volunteers">

                    <div class="about-siralama-2">

                        <h3 class="about-header">GÖNÜLLÜLERİMİZ</h3>

                        <p class="volunteer-paragraph">Amacımız ve vizyonumuz doğrultusunda bizimle proje/etkinlik yapan gönüllülerimizin listesi:</p>

                    </div>



                    <div class="mobile-volunteer-main">

                        <?php 

                            $selcontent = "SELECT * FROM gonulluler ORDER BY userid ASC";
                            $resultcontent = mysqli_query($db, $selcontent);
                            $rowcontent = mysqli_fetch_array($resultcontent, MYSQLI_ASSOC);

                            foreach($resultcontent as $rowcontent){
                                $info = kisalt($rowcontent["userinfo"], 210);
                                $link = permalink($rowcontent["username"]);

                                echo '<div class="volunteer-2">



                                <img class="volunteer-image" src="'.$rowcontent["userphoto"].'" alt="turkroket-'.$rowcontent["username"].'">
    
                                <div class="volunteer-detail">
    
                                    <h3 class="volunteer-header"><a href="gonullu.php?link='.$link.'" class="link">'.$rowcontent["username"].'<span> <i data-feather="maximize-2"></i></span></a></h3>
    
                                    <p class="volunteer-detail-paragraph">'.$info.'</p>
    
                                </div>
    
        
    
                            </div>';
                            };
                        
                        ?>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="non-mobile">

        <div class="menu">

            <a href="index.html" class="menu-name" title="Anasayfa">

                <i data-feather="home"></i>

            </a>

            <a href="hakkimizda.php" class="menu-name menu-selected" title="Hakkımızda">

                <i data-feather="info"></i>

            </a>

            <a href="projelerimiz.html" class="menu-name" title="Projelerimiz">

                <i data-feather="cpu"></i>

            </a>

            <a href="etkinliklerimiz.html" class="menu-name" title="Etkinliklerimiz">

                <i data-feather="calendar"></i>

            </a>

            <a href="egitim.html" class="menu-name" title="Eğitim">

                <i data-feather="play-circle"></i>

            </a>

            <a href="./topluluk" class="menu-name" title="Blog">

                <i data-feather="edit"></i>

            </a>

            <!--<a class="menu-name" title="İndirilebilir">

                <i data-feather="download"></i>

            </a>-->

            <a href="gonulluol.html" class="menu-name" title="Gönüllü Ol">

                <i data-feather="user-plus"></i>

            </a>

            <a href="bildir.html" class="menu-name" title="Geri Bildirim">

                <i data-feather="alert-triangle"></i>

            </a>

            <a href="https://www.instagram.com/turkroket/" class="menu-name mention" title="Türk Roket Topluluğu - Instagram">

                <i data-feather="instagram"></i>

            </a>

            <a href="https://www.youtube.com/channel/UCZxxGNj_sL4eoJxKW0xS7mg" class="menu-name" title="Türk Roket Topluluğu - Youtube">

                <i data-feather="youtube"></i>

            </a>

            <a href="https://kreosus.com/turkroket" class="menu-name support" title="Türk Roket Topluluğu - Destek">

                <i data-feather="heart"></i>

            </a>

            <a href="gizlilik.html" class="menu-name menuprivacy" title="Türk Roket Topluluğu - Privacy"> 

                <i data-feather="shield"></i>

            </a>

        </div>

        <div class="blog">

            <div class="main-header">

                <a href="./index.html">

                    <img class="header-image" src="./assets/baslik.png" alt="turkroket-logo">

                </a>

                <label class="mode-control">

                    <input id="mode-btn" type="checkbox">

                    <span><i data-feather="moon"></i></span>

                    <span><i data-feather="sun"></i></span>

                </label>

            </div>

            <div class="about-main">



                <div class="about-container">



                    <div class="about-siralama">

                        <h3 class="about-header">HAKKIMIZDA</h3>

                        <p class="about-paragraph">Türk Roket Topluluğu, kuruluşu 2017’ye dayanan ve Türkiye’de roket bilimini genç, yaşlı; eğitimli, eğitimsiz ayrımı yapmadan anlatmaya çalışan bir <strong>topluluktur.</strong></p>

                    </div>

                    <br>

                    <div class="about-siralama">

                        <h3 class="about-header">MİSYON</h3>

                        <p class="about-paragraph">Türk Roket Topluluğu, toplumun tüm kesimine hitap ederek roket bilimine olan <strong>ilgiyi</strong> arttırmaya çalışmaktadır. Bu çerçevede saha üzerinde katma değeri yüksek <strong>projeler</strong> geliştirmeyi ve farklı platformlarda <strong>etkinlikler</strong> düzenlemeyi sürdürmektedir.</p>

                    </div>

                    <br>

                    <div class="about-siralama">

                        <h3 class="about-header">VİZYON</h3>

                        <p class="about-paragraph">Türk Roket Topluluğu, roket/uzay biliminin toplumdaki <strong>her</strong> kesimin anlayabileceği bir bakış açısıyla anlatılabileceği düşüncesinden yola çıkılarak oluşturulmuştur.</p>

                    </div>

                    <br>

                    <div class="about-two">

                        <div class="about-siralama medya-hesaplari">

                            <h3 class="about-header">GÖNÜLLÜ SAYISI</h3>

                            <p class="about-paragraph">Türk Roket Topluluğu, Türkiye'nin dört bir yanından <strong>79 gönüllüsü</strong> ile aktif olarak çalışmalarına devam etmektedir. Gönüllülerinin <strong>%57'si erkek, %43'ü kadın</strong>dır.</p>

                            <div class="pie">
                                <div class="kadin">%43 Kadın</div>
                                <div class="erkek">%57 Erkek</div>
                            </div>

                        </div>

                        <div> 
                            <div class="about-siralama medya-hesaplari">

                                <h3 class="about-header">MEDYA HESAPLARIMIZ</h3>

                                <a href="https://instagram.com/turkroket"><i data-feather="instagram"></i></a>
                                <a href="https://linkedin.com/company/turkroket"><i data-feather="linkedin"></i></a>
                                <a href="https://www.youtube.com/@turkrokettoplulugu"><i data-feather="youtube"></i></a>

                            </div>

                            <br>

                            <div class="about-siralama medya-hesaplari">

                                <h3 class="about-header">ÜNİVERSİTELİ ORANLARI</h3>
                                <p>Havacılık ve Uzay Müh. : <strong>%16</strong></p>
                                <p>Makine Müh. : <strong>%11</strong></p>
                                <p>Elektrik ve Elektronik Müh. : <strong>%7</strong></p>
                                <p>Bilgisayar Müh. : <strong>%9</strong></p>

                            </div>
                        </div>

                    </div>

                    <br>

                    <div class="about-siralama">

                        <h3 class="about-header">KURULUŞ</h3>

                        <p class="about-paragraph">Kurulduğu zaman ele alındığında, sayılı üniversitelerde bulunan "Roketçilik" topluluklarına karşın 2017'de birkaç öğrenci tarafından kurulan Türk Roket Topluluğu, Türkiye'nin <strong>roket teknolojileri</strong> alanlarındaki eksik noktalarını tespit etmiş ve faaliyetlerini bu alanlarda belirlediği misyonları doğrultusunda gerçekleştirmeye çalışmıştır. <br><br>Türkiye'de <strong>ulusal çapta</strong> katma değeri yüksek projeler geliştirme amacına sahip <strong>ilk ve halihazırdaki en büyük</strong> roket topluluğudur.</p>

                    </div>

                    <br>    

                    <div class="sponsors">

                        <div class="sponsor">
                            <h3 class="about-header">SPONSORLARIMIZ</h3>
                            <!--<img class="pcbway-logo" src="./assets/projects/pcbwaylogo.png">
                            <br>
                            <img class="jlcpcb-logo" src="./assets/projects/jlcpcb.png">
                            <br>-->
                            <br>
                            <img class="turkticaret-logo" src="./assets/projects/turkticaretuzun.png">
                            <img class="terabank-logo" src="./assets/projects/terabanksiyah.png">
                            <img class="ozdisan-logo" src="./assets/projects/ozdisanlogo.png">
                            <img class="pinea-logo" src="./assets/projects/pinealogo.png">
                            <br>
                            <br>
                        </div>

                        <div class="collaborators">
                            <h3 class="about-header">İŞ BİRLİKÇİLERİMİZ</h3>
                            <img height="25" src="./assets/projects/uplogouzun2.png">
                            <img height="50" width="50" src="./assets/projects/astrocomlogo.png">
                            <br>
                        </div>

                        <div class="supporters">

                            <h3 class="about-header">MADDİ DESTEKÇİLERİMİZ</h3>

                            <p class="supporters-paragraph">Burak <span class="text-blur">Eminoğlu</span></p>

                            <p class="supporters-paragraph">Sedat <span class="text-blur">Pala</span></p>

                            <p class="supporters-paragraph">Özay <span class="text-blur">Emin</span></p>

                            <p class="supporters-paragraph">Aslı Gülbike <span class="text-blur">Uluyurt</span></p>

                            <p class="supporters-paragraph">Fahri <span class="text-blur">Köfteci</span></p>

                            <p class="supporters-paragraph">Uğur <span class="text-blur">Kirazoğlu</span></p> 

                            <p class="supporters-paragraph">Uğurcan <span class="text-blur">Özdemir</span></p>

                            <p class="supporters-paragraph">Bilgin <span class="text-blur">Emin</span></p>

                            <p class="supporters-paragraph">Hakan <span class="text-blur">Subaşı</span></p>  
                            
                            <p class="supporters-paragraph">Sadık Kemal <span class="text-blur">Erdem</span></p>

                            <p class="supporters-paragraph">Metecan <span class="text-blur">Kaplan</span></p>

                            <p class="supporters-paragraph">Feyza Betül <span class="text-blur">Gelici</span></p>

                            <p class="supporters-paragraph">Rümeysa <span class="text-blur">Taşçı</span></p>

                        </div>

                    </div>



                    <div class="mobile-volunteers">

                        <br>

                        <div class="about-siralama">

                            <h3 class="about-header">GÖNÜLLÜLERİMİZ</h3>

                            <p class="volunteer-paragraph">Amacımız ve vizyonumuz doğrultusunda bizimle proje/etkinlik yapan gönüllülerimizin listesi:</p>

                        </div>



                        <div class="mobile-volunteer-main">

                            <?php 
                               $selcontent = "SELECT * FROM gonulluler ORDER BY userid ASC";
                               $resultcontent = mysqli_query($db, $selcontent);
                               $rowcontent = mysqli_fetch_array($resultcontent, MYSQLI_ASSOC);

                               foreach($resultcontent as $rowcontent){
                                   $info = kisalt($rowcontent["userinfo"], 210);
                                   $link = permalink($rowcontent["username"]);
                                    echo '<div class="volunteer">
    
                                    <div class="volunteer-detail">

                                        <p class="volunteer-detail-paragraph">

                                            <img class="volunteer-image" src="'.$rowcontent["userphoto"].'" alt="turkroket-'.$rowcontent["username"].'">
                                            <h3 class="volunteer-header">
                                            <a href="gonullu.php?link='.$link.'" class="link" id="'.$rowcontent["userid"].'">'.$rowcontent["username"].'<span><i data-feather="maximize-2"></i></span></a>
                                            </h3>
                                            
                                            '.$info.'
                                        
                                        </p>
    
                                    </div>
    
                                </div>';
                                
                                } 
                            ?>

                        </div>

                    </div>





                </div>

                <div class="volunteers">

                    <div class="volunteeropened">

                        <h3 class="about-header">GÖNÜLLÜLERİMİZ</h3>

                        <p class="volunteer-paragraph">Amacımız ve vizyonumuz doğrultusunda bizimle proje/etkinlik yapan gönüllülerimizin listesi:</p>

                        <br>

                        <div class="volunteer-list">

                                <?php 
                                    $selcontent = "SELECT * FROM gonulluler ORDER BY userid ASC";
                                    $resultcontent = mysqli_query($db, $selcontent);
                                    $rowcontent = mysqli_fetch_array($resultcontent, MYSQLI_ASSOC);

                                    foreach($resultcontent as $rowcontent){
                                        $info = kisalt($rowcontent["userinfo"], 175);
                                        echo '<div class="volunteer">

                                        <input type="hidden" name="volunteerid" value="'.$rowcontent["userid"].'">

                                        <img class="volunteer-image" src="'.$rowcontent["userphoto"].'" alt="turkroket-'.$rowcontent["username"].'">
        
                                        <div class="volunteer-detail">
        
                                            <h3 class="volunteer-header"><a class="link userlink" id="'.$rowcontent["userid"].'">'.$rowcontent["username"].'<span> <i data-feather="maximize-2"></i></span></a></h3>
        
                                            <p class="volunteer-detail-paragraph">'.$info.'</p>
        
                                        </div>
        
        
        
                                    </div>';
                                    }
                                ?>
                                

                            <br>
                        </div>

                    </div>

                    <div class="volunteer-popup">
                        <a class="link userclose"><i data-feather="minimize-2"></i></a>
                        <div>
                            <h3 id="userisim" class="about-header"></h3>
                            <img id="userimage" class="volunteer-image" src="" alt="logo"><br><br>
                            <a href="" id="userlinkedin" class="link" target="_blank"><svg width="149px" height="149px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#0A66C2" d="M12.225 12.225h-1.778V9.44c0-.664-.012-1.519-.925-1.519-.926 0-1.068.724-1.068 1.47v2.834H6.676V6.498h1.707v.783h.024c.348-.594.996-.95 1.684-.925 1.802 0 2.135 1.185 2.135 2.728l-.001 3.14zM4.67 5.715a1.037 1.037 0 01-1.032-1.031c0-.566.466-1.032 1.032-1.032.566 0 1.031.466 1.032 1.032 0 .566-.466 1.032-1.032 1.032zm.889 6.51h-1.78V6.498h1.78v5.727zM13.11 2H2.885A.88.88 0 002 2.866v10.268a.88.88 0 00.885.866h10.226a.882.882 0 00.889-.866V2.865a.88.88 0 00-.889-.864z"></path></g></svg></a>
                            <p id="userinfo"></p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <script src="script.js"></script>

    <script src="about.js"></script>

    <script>

        feather.replace()

    </script>

</body>

</html>
