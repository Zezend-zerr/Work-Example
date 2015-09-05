<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Romadlon {/}</title>
		<link rel="stylesheet" href="css/index.css">
		<link rel="stylesheet" href="css/kolom.css">
        <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/animate.css">
		<script src="js/scrollTo.js" type="text/javascript"></script>
        <link rel="shortcut icon" type="image/ico" href="images/r.ico">
        <script type="text/javascript">
            $(function() {
            
                $('html, body').css('overflow', 'hidden');
                
                function updateSize() {
                    var winWidth  = $(window).width(),
                        winHeight = $(window).height(),
                        wrapSum   = $('.box').siblings().length;
                   $('#wrap').css({
                       width:winWidth*(wrapSum/2),
                       height:winHeight*(wrapSum/3)
                   });
                   $('.box').css({
                       width:winWidth,
                       height:winHeight
                   });  
                } updateSize();
               
                $(window).resize(function() {               
                    //Update Size by Window Resize
                    updateSize();
                });
                
                // Use scrollTo JQuery plugin to create smooth scrolling effect
                $('ul#nav a').click(function() {

                    $('a.active').removeClass('active');
                    $(this).addClass('active');
                    
                    $('html, body').scrollTo($(this).attr('href'), 1000);   
                    
                    // Prevent ancor from following the href value
                    return false;
                });
                
                });
        </script>
        <!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//v2.zopim.com/?2nug78e4pGBeCZCFYTrNWK0t82jAHevS';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>
<!--End of Zopim Live Chat Script-->
    </head>
    <body>
    <!-- <img src="images/logo.png"> -->
        <div id="wrap">
        <!-- HOME PAGE STARTS FROM HERE !!-->
            <div class="box" id="home">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
                <div class="row">
                    <div class="small-3 medium-3 large-3 columns">
                        <div id="intro">
                            <img class="animated fadeInRight" id="me" src="images/photo0037.jpg" alt="my picture">
                            <br>
                            <p class="animated fadeInRight" style="font-size: 2rem; font-family: dejavu sans;color:white;border-bottom:2px solid white;">"Romadlon"</p>
                                <br>
                                   <div id="quote">
                                    <h3 class="animated fadeInRight" style="font-family: dejavu sans;">Back-end Development</h3>
                                    <br>
                                    <br>
                                    <p>----------------------------------</p>
                                    <br>
                                    <br>
                                    <h3 class="animated fadeInRight">"Simple is Better"</h3>
                                </div>
                        </div>
                    </div>
                    <div class="small-8 medium-8 large-8 columns">
                        <p class="animated fadeInLeft" style="font-size: 3rem; font-family: dejavu sans;color:white;border-bottom:2px solid white;">Welcome to my Profile</p>
                        <p class="animated fadeInLeft" id="tanggal" style="font-family: dejavu sans; color: white; font-size: 1.4rem;text-align:right;"></p>
                        <script type='text/javascript'>
                            var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                            var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
                            var date = new Date();
                            var day = date.getDate();
                            var month = date.getMonth();
                            var thisDay = date.getDay(),
                            thisDay = myDays[thisDay];
                            var yy = date.getYear();
                            var year = (yy < 1000) ? yy + 1900 : yy;
                            document.getElementById('tanggal').innerHTML=(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                        </script>
                        <br><br><br>
                        <br>
                        <br>
                        <br>
                        <p class="animated fadeInLeft" style="padding:64px 12px;color:white;font-size:2rem;">وعن ابن مسعود رضي الله عنه قال : قال النبي صلى الله عليه وسلم : لا حسد إلا في اثنتين رجل آتاه الله مالا فسلطه على هلكته في الحق ، ورجل آتاه الله الحكمة فهو يقضي بها ، ويعلمها</p>
                        <a class="animated infinite tada" id="check" href="https://www.facebook.com/zezen.parawali" target="_blank">My Facebook</a>
                    </div>
                </div>
            </div>
        <!-- HOMEPAGE ENDS FROM HERE -->
        
        <!-- CONTACT STARTS FROM HERE !! -->
            <div class="box" id="contact">
            <div class="border">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
                <img id="bawah" src="images/bawah.png" alt="me">
                <h3 class="animated infinite tada">Find Me On :</h3>
                    <ul class="socials">
                       <li><img id="kanan" src="images/kanan.png" alt=""></li>
                        <li id="fb"><a href="https://www.facebook.com/zezen.parawali" target="_blank"><img src="images/fb.svg" alt="facebook"></a></li>
                        <li id="twit"><a href="https://twitter.com/zezen_romadlon" target="_blank"><img src="images/twitter.svg" alt="twitter"></a></li>
                        <li id="gmail"><a href="https://plus.google.com/113859820194784518626" target="_blank"><img src="images/google-plus.svg" alt="google plus"></a></li>
                        <li id="github"><a href="https://github.com/zera272" target="_blank"><img src="images/github.svg" alt="github"></a></li>
                        <li><img id="kiri" src="images/kiri.png" alt=""></li>
                    </ul>
                    <h4>Or :</h4>
                    <p>Email : masterzera111@gmail.com</p><br>
                    <p>Phone : (+62) 856 073 67722</p>
                    <img id="atas" src="images/atas.png" alt="">
                    </div>
                </div>
        <!-- CONTACT ENDS FROM HERE !! -->
        
        <!-- ABOUT STARTS FROM HERE !! -->
            <div class="box" id="about">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
                <h2>About</h2>
                <br>
                <br>
                <div class="row">
                    <div class="small-8 medium-8 large-8 columns">
                        <p style="color:white;font-family:dejavu sans;">Situs/portfolio ini sebenarnya dibuat untuk kelengkapan portfolio santri <a style="color:white;" href="http://www.pondokprogrammer.com" target="_blank">PONDOK PROGRAMMER</a> agar orang-orang bisa melihat para santri tanpa harus mengunjungi Pondok, dan agar teman-teman bisa lebih mengenal kami :) ...</p>
                        <p style="color:white;font-family:dejavu sans;">Sebenarnya dari portfolio kami disini bisa kelihatan kemampuan nya dalam membuat website, kalau saya sih masih newbie...</p>
                        <p style="color:white;font-family:dejavu sans;">Tidak banyak yang bisa saya ceritakan di halaman ini, awalnya sih gk tertarik dengan dunia programming karna lulusan IPA, tepatnya tahun 2013 iseng-iseng belajar Visual Basic 6.0 ternyata asik juga bisa bikin aplikasi sendiri, awalnya cuma bikin timer,stopwatch,kalkulator,aplikasi tes bahasa Inggris, aplikasi mengerjakan soal matematika,dll.
                        akhirnya memutuskan untuk terjun total ke dunia programming.</p>
                        <p style="color:white;font-family:dejavu sans;">Dan sampai sekarang masih belajar dan memperdalam ilmu programming di Pondok Programmer</p>
                        <p style="color:white;font-family:dejavu sans;">Belajar Programming ? Pondok Programmer tempatnya...</p>
                        <img style="width:480px; height= 200px; "src="images/pp.png">
                    </div>
                    <div class="small-3 medium-3 large-3 columns">
                        <img src="images/ZeRa_0082.jpg" alt="">
                        <br><br>
                        <p style="color:white;font-family:dejavu sans;border-top:2px solid white;">"The only way to do great work is to love what you do"</p>
                        <p style="color:white;font-family:dejavu sans;">Steve Jobs.</p>
                    </div>
                </div>
            </div>
        <!-- ABOUT ENDS FROM HERE !! -->
        
        <!-- IDENTITY STARTS FROM HERE !! -->
            <div class="box" id="identity">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <p style="font-family:dejavu sans;color:white;font-size:2rem;text-align:center;">Hover yang ingin diketahui</p>
                <div class="row">
                    <div class="small-5 medium-5 large-5 columns">
                        <ul id="left-identity">
                            <li class="required">
                                <p>Nama</p>
                                <p class="tooltip">Akhmad Romadlon Zainur Rofiq</p>
                            </li>
                            <li class="required">
                                <p>Asal</p>
                                <p class="tooltip">Jombang, Jawa Timur</p>
                            </li>
                            <li class="required">
                                <p>TTL</p>
                                <p class="tooltip">Jombang, 10th Maret 1994</p>
                            </li>
                            <li class="required">
                                <p>Hobbi</p>
                                <p class="tooltip">Coding, Reading book, playing game</p>
                            </li>
                            <li class="required">
                                <p>Cita2</p>
                                <p class="tooltip">Menjadi Programmer kelas internasional, haji bersama keluarga, membuat starup di bidang pendidikan, menjadi hafidz Al-Qur'an</p>
                            </li>
                            <li class="required">
                                <p>NickName</p>
                                <p class="tooltip">Zezen / Romadlon</p>
                            </li>
                            <li class="required">
                                <p>Passion</p>
                                <p class="tooltip">Back-end Programming</p>
                            </li>
                            <li class="required">
                                <p>Alamat</p>
                                <p class="tooltip">Jln Arjuna 07, RT/RW 001/003 Diwek Jombang</p>
                            </li>
                            <li class="required">
                                <p>Hobbi</p>
                                <p class="tooltip">Coding, Reading book, playing game</p>
                            </li>
                        </ul>
                    </div>
                    <div class="small-6 medium-6 large-6 columns">
                        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d879.2100114580319!2d112.23853569952604!3d-7.627723110639081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sid!4v1422875396119" width="600" height="450" frameborder="0" style="border:0"></iframe> -->
                        <ul>
                            <li class="required1">
                                <img src="images/aku1.jpg">
                                <img class="tooltip1" src="images/aku1.jpg"></img>
                            </li>
                            <li class="required1">
                                <img src="images/DSC_1495.jpg">
                                <img class="tooltip1" src="images/DSC_1495.jpg"></img>
                            </li>
                            <li class="required1">
                                <img src="images/ZeRa_0082.jpg">
                                <img class="tooltip1" src="images/ZeRa_0082.jpg"></img>
                            </li>
                            <li class="required1">
                                <img src="images/DSC_1498.jpg">
                                <img class="tooltip1" src="images/DSC_1498.jpg"></img>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <!-- IDENTITY ENDS FROM HERE !! -->
        
        <!-- SKILLS STARTS FROM HERE !! -->
            <div class="box" id="skills">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <p>Hover on what you want to know</p>
                <ul class="percentage">
                   <li>Results :</li>
                    <li>10%</li>
                    <li>20%</li>
                    <li>30%</li>
                    <li>40%</li>
                    <li>50%</li>
                    <li>60%</li>
                    <li>70%</li>
                    <li>80%</li>
                    <li>90%</li>
                    <li>100%</li>
                </ul>
                <br>
                <ul class="skill-name">
                    <li id="satu"class="bubble-right">HTML & CSS</li>
                    <li id="dua"class="bubble-right">PHP</li>
                    <li id="tiga"class="bubble-right">SQL</li>
                    <li id="empat"class="bubble-right">JAVASCRIPT</li>
                    <li id="lima"class="bubble-right">ENGLISH</li>
                    <li id="enam"class="bubble-right">FOUNDATION</li>
                    <li id="tujuh"class="bubble-right">JQUERY</li>
                    <li id="delapan"class="bubble-right">MATH</li>
                </ul>
           </div>
        <!-- SKILLS ENDS FROM HERE !! -->
        </div>

        <ul id="nav">
            <li><a class="active" href="#home">Home</a></li>
            <li><a href="#identity">Who</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </body>
</html>
