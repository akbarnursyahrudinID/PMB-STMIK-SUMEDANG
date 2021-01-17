
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  {{-- fontAwesome --}}
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">



  <link rel='stylesheet' id='academica-pro-style-css'  href='https://stmik-sumedang.ac.id/wp-content/themes/stmik_sumedang/style.css?ver=3.0.4' type='text/css' media='all' />
  <link rel='stylesheet' id='media-queries-css'  href='https://stmik-sumedang.ac.id/wp-content/themes/stmik_sumedang/css/media-queries.css?ver=3.0.4' type='text/css' media='all' />

  <link rel='stylesheet' id='wpzoom-social-icons-socicon-css'  href='https://stmik-sumedang.ac.id/wp-content/plugins/social-icons-widget-by-wpzoom/assets/css/wpzoom-socicon.css?ver=1607407656' type='text/css' media='all' />
  <link rel="stylesheet" href="{{asset('AdminLTE/dist/css/adminlte.min.css')}}">









  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">


<link rel="icon" type="image/png" href="{{url('AdminLTE/dist/img/stmik.png')}}">
  <title>@yield('title')</title>

  <style>
    #navbarNavDropdown a:hover{
        color:#FFB400;
    }
    #navbarNavDropdown a.active{
        color:goldenrod;
    }
    .dropdown-menu a{
        color:aliceblue;
    }
    .jumbotron {
    position: relative;
    height: 300px;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    }

.jumbotron::before {
      content: "";
      background-image: url('/AdminLTE/dist/img/Layer-1.png');
      background-size: cover;
      position: absolute;
      top: 0px;
      right: 0px;
      bottom: 0px;
      left: 0px;
      opacity:10%;
}
.col-sm-4 a{
    color:darkgray;
}
.col-sm-4 img:hover{
    width: 30%;
    padding:10px;
}

</style>
</head>
<body>
    <header id="header">
        <nav id="top-menu "style="background-color:#1B3058">
            <div class="wrapper">
                <div id="navbar-top" class="top-navbar">
                    <div class="menu-top-menu-container">
                        <ul id="menu-top-menu" class="navbar-wpz dropdown sf-menu sf-js-enabled sf-arrows">
                            <li id="menu-item-617" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-617">
                                <a target="_blank" rel="noopener noreferrer" href="mailto:info@stmik-sumedang.ac.id"><i class="far fa-envelope"></i> <span>info@stmik-sumedang.ac.id</span></a>
                            </li>
                            <li id="menu-item-618" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-618"><a target="_blank" rel="noopener noreferrer" href="http://#"><i class="fas fa-phone"></i> <span>(0261) 207395</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="header_social">
                    <div id="zoom-social-icons-widget-5" class="widget zoom-social-icons-widget widget-none">
                        <h3 class="title"><span>Follow us</span></h3>
                        <ul class="zoom-social-icons-list zoom-social-icons-list--with-canvas zoom-social-icons-list--round zoom-social-icons-list--no-labels">
                            <li class="zoom-social_icons-list__item">
                                <a class="zoom-social_icons-list__link" href="https://www.facebook.com/stmiksmd/" target="_blank">
                                    <span class="screen-reader-text">facebook</span>
                                    <span class="zoom-social_icons-list-span social-icon socicon socicon-facebook" data-hover-rule="background-color" data-hover-color="#3b5998" style="background-color : #3b5998; font-size: 10px"></span>
                                </a>
                             </li>
                            <li class="zoom-social_icons-list__item">
                                <a class="zoom-social_icons-list__link" href="https://www.instagram.com/stmik_sumedang/" target="_blank">
                                    <span class="screen-reader-text">instagram</span>
                                    <span class="zoom-social_icons-list-span social-icon socicon socicon-instagram" data-hover-rule="background-color" data-hover-color="#E1306C" style="background-color : #E1306C; font-size: 10px"></span>
                                </a>
                             </li>
                             <li class="zoom-social_icons-list__item">
                                <a class="zoom-social_icons-list__link" href="http://youtube" target="_blank">
                                    <span class="screen-reader-text">youtube</span>
                                     <span class="zoom-social_icons-list-span social-icon socicon socicon-youtube" data-hover-rule="background-color" data-hover-color="#e02a20" style="background-color : #e02a20; font-size: 10px"></span>
                                </a>
                            </li>
                            <li class="zoom-social_icons-list__item">
                                <a class="zoom-social_icons-list__link" href="https://twitter.com/stmiksumedang" target="_blank">
                                    <span class="screen-reader-text">twitter</span>
                                    <span class="zoom-social_icons-list-span social-icon socicon socicon-twitter" data-hover-rule="background-color" data-hover-color="#55acee" style="background-color : #55acee; font-size: 10px"></span>
                                </a>
                            </li>
                            <li class="zoom-social_icons-list__item">
                                <a class="zoom-social_icons-list__link" href="http://linkedin.com/company/stmik-sumedang" target="_blank">
                                    <span class="screen-reader-text">linkedin</span>
                                    <span class="zoom-social_icons-list-span social-icon socicon socicon-linkedin" data-hover-rule="background-color" data-hover-color="#3371b7" style="background-color : #3371b7; font-size: 10px"></span>
                                </a>
                            </li>
                        </ul>
                     </div>
                 </div>
                <div class="clear"></div>
             </div>
        </nav><!-- end #top-menu -->
        <div class="cleaner"></div>
        <div class="wrapper">
            <div class="brand_wrapper">
                <div class="navbar-brand-wpz">
                    <a href="https://stmik-sumedang.ac.id/" class="custom-logo-link" rel="home" itemprop="url"><img width="473" height="35" src="https://stmik-sumedang.ac.id/wp-content/uploads/2018/10/logoatas-624x46.png" class="custom-logo" alt="STMIK SUMEDANG" itemprop="logo"  sizes="(max-width: 473px) 100vw, 473px"></a>
                </div><!-- .navbar-brand -->
                <div id="navbar-logo" class="logo-navbar">
                    <div class="menu-menu-2-container">
                        <ul id="menu-menu-2" class="navbar-wpz dropdown sf-menu sf-js-enabled sf-arrows"><li id="menu-item-1193" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1193"><a target="_blank" rel="noopener noreferrer" href="https://stmik-sumedang.ac.id/akreditasi-institusi/"><i class="_mi _before foundation-icons fi-archive" aria-hidden="true"></i><span>Dokumen Akreditasi</span></a></li>
                            <li id="menu-item-1042" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1042"><a target="_blank" rel="noopener noreferrer" href="https://stmik-sumedang.ac.id/magang-kerja-stmik-sumedang/"><i class="_mi _before foundation-icons fi-star" aria-hidden="true"></i><span>Informasi Magang &amp; Kerja</span></a></li>
                            <li id="menu-item-1043" class="wpz-button menu-item menu-item-type-custom menu-item-object-custom menu-item-1043"><a target="_blank" rel="noopener noreferrer" href="https://stmik-sumedang.ac.id/pkkmb/"><i class="_mi _before genericon genericon-info" aria-hidden="true"></i><span>PKKMB 2020</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="cleaner">&nbsp;</div>
        </div><!-- end .wrapper -->
    </header>

    <nav class="navbar navbar-expand-lg navbar-dark d-none d-sm-block"style="background-color:#1B3058;border-top:5px solid #FFCB00">
        <div class="container container-fluid">
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"><i class="fas fa-home fa-lg"> <b>Home</b></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="far fa-money-bill-alt nav-icon fa-lg"> <b>BEASISWA</b></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-graduation-cap nav-icon fa-lg"></i> <b>BIAYA STUDI</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="far fa-building nav-icon fa-lg"></i> <b>FASILITAS</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-users nav-icon fa-lg"></i> <b>UKM</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-download nav-icon fa-lg"></i> <b>DOWNLOADS</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="far fa-user-circle nav-icon fa-lg"></i> <b>FAQ</b></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>








  @yield('contain')



  <nav class="navbar navbar-expand navbar-dark d-md-none d-lg-none d-xl-none fixed-bottom justify-content-center;"style="background-color:#1B3058;border-top:5px solid #FFCB00;height:80px;text-align:center;height:70px">
    <ul class="navbar-nav">

        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#"><i class="fas fa-home fa-2x"></i><b>Home</b></a>
          </li>
          <li class="nav-item mt-2">
            <a style="width:150px;height:90%"class="btn btn-light" aria-current="page" href="/formPendaftaran"><i class="fas fa-sign-in-alt fa-lg"></i> <br><b>Daftar Sekarang</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#"><i class="fas fa-info-circle fa-2x"></i> <b>FAQ</b></a>
          </li>
          <li class="nav-item dropup">
            <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fab fa-buromobelexperte fa-2x "></i><b>More</b>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:#1B3058;border-top:5px solid #FFCB00;width:400px;margin-left:-300px;">
              <li> <a class="dropdown-item "style="float:right" href="#"><i class="far fa-money-bill-alt nav-icon fa-lg"> <b>BEASISWA</b></i></a></li>
              <li> <a class="dropdown-item " href="#"><i class="fas fa-graduation-cap nav-icon fa-lg"></i> <b>BIAYA STUDI</b></i></a></li>
              <li> <a class="dropdown-item " href="#"><i class="far fa-building nav-icon fa-lg"></i> <b>FASILITAS</b></i></a></li>
              <li> <a class="dropdown-item " href="#"><i class="fas fa-users nav-icon fa-lg"></i> <b>UKM</b></i></a></li>
              <li> <a class="dropdown-item " href="#"><i class="fas fa-download nav-icon fa-lg"></i> <b>DOWNLOADS</b></i></a></li>
              <li> <a class="dropdown-item " href="#"></a></li>
            </ul>
          </li>
    </ul>
  </nav>



  <footer class="site-footer" style="margin-bottom:50px">

    <div class="wrapper">

        <div class="widget-areas">

                                <div class="column">

                    <div class="widget widget-iconlist-kamn widget-none" id="widget-iconlist-kamn-3">		<div class="widget-iconlist-global-wrapper">
        <div class="widget-iconlist-container">

                            <div class="widget-iconlist-row">
              <div class="widget-iconlist-col">
                <h3 class="title"><span>Hubungi Kami</span></h3>				  </div>
            </div>

              <div class="widget-iconlist-row">
                  <div class="widget-iconlist-col">

                    <ul class="widget-iconlist widget-iconlist-kamn-3">
                                                    <li>
                            <span class="iconlist-icon fa fa-fw fas fa-university"></span>
                                                                <span class="iconlist-title">STMIK Sumedang</span>
                                                        </li>
                                                    <li>
                            <span class="iconlist-icon fa fa-fw far fa-map"></span>
                                                                <span class="iconlist-title">Jl.Angkrek Situ No.19 Sumedang</span>
                                                        </li>
                                                    <li>
                            <span class="iconlist-icon fa fa-fw fas fa-phone"></span>
                                                                <span class="iconlist-title">(0261) 207395</span>
                                                        </li>
                                                    <li>
                            <span class="iconlist-icon fa fa-fw fas fa-fax"></span>
                                                                <span class="iconlist-title">(0261) 207395</span>
                                                        </li>
                                                    <li>
                            <span class="iconlist-icon fa fa-fw fas fa-envelope-square"></span>
                                                                <span class="iconlist-title">infopmb@stmik-sumedang.ac.id</span>
                                                        </li>
                                                </ul>

                  </div>
              </div>

          </div> <!-- End .widget-global-wrapper -->
    </div>

<div class="cleaner">&nbsp;</div></div>
                    <div class="cleaner">&nbsp;</div>
                </div><!-- end .column -->



                <div class="column">

                    <div class="widget widget-iconlist-kamn widget-none" id="widget-iconlist-kamn-2">		<div class="widget-iconlist-global-wrapper">
        <div class="widget-iconlist-container">

                            <div class="widget-iconlist-row">
              <div class="widget-iconlist-col">
                <h3 class="title"><span>Eksternal Link</span></h3>				  </div>
            </div>

              <div class="widget-iconlist-row">
                  <div class="widget-iconlist-col">

                    <ul class="widget-iconlist widget-iconlist-kamn-2">
                                                    <li>
                            <span class="iconlist-icon fa fa-fw fa-link"></span>
                                                            <a href="#">
                                                                <span class="iconlist-title">Kemenristekdikti</span>
                                                            </a>
                                                        </li>
                                                    <li>
                            <span class="iconlist-icon fa fa-fw fa-link"></span>
                                                            <a href="#">
                                                                <span class="iconlist-title">Kopertis IV</span>
                                                            </a>
                                                        </li>
                                                    <li>
                            <span class="iconlist-icon fa fa-fw fa-link"></span>
                                                            <a href="#">
                                                                <span class="iconlist-title">Simlibtabmas</span>
                                                            </a>
                                                        </li>
                                                    <li>
                            <span class="iconlist-icon fa fa-fw fa-link"></span>
                                                            <a href="#">
                                                                <span class="iconlist-title">Forlap Dikti</span>
                                                            </a>
                                                        </li>
                                                    <li>
                            <span class="iconlist-icon fa fa-fw fa-link"></span>
                                                            <a href="#">
                                                                <span class="iconlist-title">Aptikom</span>
                                                            </a>
                                                        </li>
                                                </ul>

                  </div>
              </div>

          </div> <!-- End .widget-global-wrapper -->
    </div>

<div class="cleaner">&nbsp;</div></div>
                    <div class="cleaner">&nbsp;</div>
                </div><!-- end .column -->


                                <div class="column">

                    <div class="widget widget_rss widget-none" id="rss-3"><h3 class="title"><a class="rsswidget" href="https://stmik-sumedang.ac.id/"><img class="rss-widget-icon" style="border:0" width="14" height="14" src="wp-includes/images/rss.png" alt="RSS"></a> <a class="rsswidget" href="https://stmik-sumedang.ac.id/">Info Kampus</a></h3><ul><li><a class="rsswidget" href="https://stmik-sumedang.ac.id/webinar-digital-society-rtikberkreasi-tentang-pemanfaatan-it-di-pedesaan-dunia-pendidkan/?utm_source=rss&amp;utm_medium=rss&amp;utm_campaign=webinar-digital-society-rtikberkreasi-tentang-pemanfaatan-it-di-pedesaan-dunia-pendidkan">Webinar Digital Society #RTIKBerkreasi Tentang Pemanfaatan IT di Pedesaan &amp; Dunia Pendidkan</a> <span class="rss-date">September 28, 2020</span></li><li><a class="rsswidget" href="https://stmik-sumedang.ac.id/kampus-merdeka-permata-sakti-2020/?utm_source=rss&amp;utm_medium=rss&amp;utm_campaign=kampus-merdeka-permata-sakti-2020">Kampus Merdeka “Permata-Sakti 2020”</a> <span class="rss-date">September 25, 2020</span></li><li><a class="rsswidget" href="https://stmik-sumedang.ac.id/wpdm-package/program-studi-teknik-informatika-s1/?utm_source=rss&amp;utm_medium=rss&amp;utm_campaign=program-studi-teknik-informatika-s1">Program Studi Teknik Informatika (S1)</a> <span class="rss-date">September 22, 2020</span></li></ul><div class="cleaner">&nbsp;</div></div>
                    <div class="cleaner">&nbsp;</div>
                </div><!-- end .column -->



        </div>

        <div class="cleaner">&nbsp;</div>

    </div><!-- end .wrapper -->

    <div id="footer-copy">
        <div class="wrapper wrapper-copy">
            <p class="copyright">Copyright © 2020 ❤️PMB - STMIK Sumedang. All Rights Reserved</p>
            <p class="wpzoom">  <a href="#" target="_blank"></a></p>

            <div class="cleaner">&nbsp;</div>
        </div><!-- end .wrapper .wrapper-copy -->
    </div>

</footer>













  <script src="{{asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="{{asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>


</body>
</html>







