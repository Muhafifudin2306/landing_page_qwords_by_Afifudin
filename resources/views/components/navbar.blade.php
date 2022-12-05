<!-- ===============================================-->
<!-- Navbar Content-->
<!-- ===============================================-->

<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" data-navbar-on-scroll="light" style="border:none">
      <div class="container"><a class="navbar-brand" href="/"><img src="{{ asset('assets/img/icons/Logo.png') }}" height="48" alt="logo" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base align-items-center navbar-links">
            <li class="nav-item navbar-dropdown">
                  <a class="nav-link pl-3 me-3" style="font-size: 16px" href="#" onmousemove="hosting_in()" onmouseout="hosting_out()">
                      Hosting
                      <span>
                          <svg id="hosting_down" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                              <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                            </svg>
                          </span> 
                  </a>

                  <script>
                      function hosting_in()
                      {
                        document.getElementById("hosting_down").style.transitionDuration = "0.5s";
                          document.getElementById('hosting_down').style.transform = 'rotate(180deg)';
                          
                      }
                      function hosting_out()
                      {
                          document.getElementById('hosting_down').style.transform = 'rotate(360deg)';
                          document.getElementById("hosting_down").style.transitionDuration = "0.5s";
                      }
                  </script>

                  <div class="dropdown pl-3 me-3" onmousemove="hosting_in()" onmouseout="hosting_out()">
                    <a href="#">
                      <div class="row">
                        <div class="col-lg-3">
                          <img src="{{ asset('assets/img/icons/infinity.png') }}" style="margin:5px;margin-left:25px" width="56" height="52" alt="unlimied-hosting">
                        </div>
                        <div class="col-lg-9">
                          <div class="title_link">
                            Unlimited Hosting
                          </div>
                          <div class="desc_link">
                            Hosting dengan Unlimited resource yang dapat diandalkan.
                          </div>
                        </div>
                      </div>
                    </a>
                    <a href="#">
                      <div class="row">
                        <div class="col-lg-3">
                          <img src="{{ asset('assets/img/icons/wordpress.png') }}" style="margin:5px;margin-left:25px" width="56" height="52" alt="unlimied-hosting">
                        </div>
                        <div class="col-lg-9">
                          <div class="title_link">
                            WordPress Hosting
                          </div>
                          <div class="desc_link">
                            Hosting khusus bagi Anda yang menggunakan CMS WordPress. Dilengkapi CloudPop untuk kinerja WordPress yang optimal.
                          </div>
                        </div>
                      </div>
                    </a>
                    <a href="#">
                      <div class="row">
                        <div class="col-lg-3">
                          <img src="{{ asset('assets/img/icons/business.png') }}" style="margin:5px;margin-left:25px" width="56" height="52" alt="unlimied-hosting">
                        </div>
                        <div class="col-lg-9">
                          <div class="title_link">
                            High Performance Hosting
                          </div>
                          <div class="desc_link">
                              Hosting dengan performa optimal yang tersedia untuk pribadi, bisnis, sampai skala Enterprise
                          </div>
                        </div>
                      </div>
                    </a>
                    <a href="#">
                      <div class="row">
                        <div class="col-lg-3">
                          <img src="{{ asset('assets/img/icons/deal.png') }}" style="margin:5px;margin-left:25px" width="56" height="52" alt="unlimied-hosting">
                        </div>
                        <div class="col-lg-9">
                          <div class="title_link">
                            Private Label Cpanel Reseller
                          </div>
                          <div class="desc_link">
                              Bergabung jadi Reseller sekarang dan mulai Bisnis Sukses bersama Qwords
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </li>
                <li class="nav-item navbar-dropdown">
                  <a class="nav-link pl-3 me-3" style="font-size: 16px"  href="#" onmousemove="domain_in()" onmouseout="domain_out()">
                      Domain
                      <span>
                          <svg id="domain_down" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                              <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                            </svg>
                          </span> 
                  </a>

                  <script>
                      function domain_in()
                      {
                        document.getElementById("domain_down").style.transitionDuration = "0.5s";
                          document.getElementById('domain_down').style.transform = 'rotate(180deg)';
                      }
                      function domain_out()
                      {
                        document.getElementById("domain_down").style.transitionDuration = "0.5s";
                          document.getElementById('domain_down').style.transform = 'rotate(360deg)';
                      }
                  </script>

                  <div class="dropdown" onmousemove="domain_in()" onmouseout="domain_out()">
                        <a href="#">
                              <div class="row">
                                <div class="col-lg-3">
                                  <img src="{{ asset('assets/img/icons/own_domain.png') }}" style="margin:5px;margin-left:25px" width="56" height="52" alt="unlimied-hosting">
                                </div>
                                <div class="col-lg-9">
                                  <div class="title_link">
                                    Miliki Domain
                                  </div>
                                  <div class="desc_link">
                                    Miliki ekstensi Domain impuian untuk identitas dan bisnis di internet dengan beragam metode pembelian
                                  </div>
                                </div>
                              </div>
                            </a>
                            <a href="#">
                              <div class="row">
                                <div class="col-lg-3">
                                  <img src="{{ asset('assets/img/icons/id_domain.png') }}" style="margin:5px;margin-left:25px" width="56" height="52" alt="unlimied-hosting">
                                </div>
                                <div class="col-lg-9">
                                  <div class="title_link">
                                    Domain Premium Indonesia
                                  </div>
                                  <div class="desc_link">
                                    Domian premium berkualitas untuk website identitas Indonesia
                                  </div>
                                </div>
                              </div>
                            </a>
                            <a href="#">
                              <div class="row">
                                <div class="col-lg-3">
                                  <img src="{{ asset('assets/img/icons/protect_domain.png') }}" style="margin:5px;margin-left:25px" width="56" height="52" alt="unlimied-hosting">
                                </div>
                                <div class="col-lg-9">
                                  <div class="title_link">
                                    Domain Privacy Protection, Domain Backorder, dan Domain Negotiator/Domain Broker
                                  </div>
                                  <div class="desc_link">
                                    Berbagai layanan domain untuk memajukan bisnis Anda
                                  </div>
                                </div>
                              </div>
                            </a>
                            <a href="#">
                              <div class="row">
                                <div class="col-lg-3">
                                  <img src="{{ asset('assets/img/icons/deal_domain.png') }}" style="margin:5px;margin-left:25px" width="56" height="52" alt="unlimied-hosting">
                                </div>
                                <div class="col-lg-9">
                                  <div class="title_link">
                                    Private Label Domain Reseller      
                                  </div>
                                  <div class="desc_link">
                                    Paket Reseller Domain .ID domain .com dan lainnya dengan harga yang bersaing
                                  </div>
                                </div>
                              </div>
                            </a>
                  </div>
                </li>
                <li class="nav-item navbar-dropdown">
                  <a class="nav-link pl-3 me-3" style="font-size: 16px"  href="#" onmousemove="server_in()" onmouseout="server_out()">
                      Server
                      <span>
                          <svg id="server_down" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                              <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                            </svg>
                          </span> 
                  </a>

                  <script>
                      function server_in()
                      {
                        document.getElementById("server_down").style.transitionDuration = "0.5s";
                          document.getElementById('server_down').style.transform = 'rotate(180deg)';
                      }
                      function server_out()
                      {
                        document.getElementById("server_down").style.transitionDuration = "0.5s";
                          document.getElementById('server_down').style.transform = 'rotate(360deg)';
                      }
                  </script>

                  <div class="dropdown" onmousemove="server_in()" onmouseout="server_out()">
                    <a href="#">
                              <div class="row">
                                <div class="col-lg-3">
                                  <img src="{{ asset('assets/img/icons/vpn_server.png') }}" style="margin:5px;margin-left:25px" width="56" height="52" alt="unlimied-hosting">
                                </div>
                                <div class="col-lg-9">
                                  <div class="title_link">
                                    Cloud VPS KVM SSD
                                  </div>
                                  <div class="desc_link">
                                    KVM Ultrafast dengan Easy Install Control Panel & dukungan OS terbaru
                                  </div>
                                </div>
                              </div>
                            </a>
                            <a href="#">
                              <div class="row">
                                <div class="col-lg-3">
                                  <img src="{{ asset('assets/img/icons/flex_server.png') }}" style="margin:5px;margin-left:25px" width="56" height="52" alt="unlimied-hosting">
                                </div>
                                <div class="col-lg-9">
                                  <div class="title_link">
                                    Fleksibel VPS
                                  </div>
                                  <div class="desc_link">
                                    Teknologi KVM. Bayar hanya saat layanan aktif & digunakan saja. Mulai Rp 200/jam, PAY AS YOU GROWTH
                                  </div>
                                </div>
                              </div>
                            </a>
                            <a href="#">
                              <div class="row">
                                <div class="col-lg-3">
                                  <img src="{{ asset('assets/img/icons/flex_server.png') }}" style="margin:5px;margin-left:25px" width="56" height="52" alt="unlimied-hosting">
                                </div>
                                <div class="col-lg-9">
                                  <div class="title_link">
                                    Dedicate Server
                                  </div>
                                  <div class="desc_link">
                                    Multiple Internet Connection, Fiber Optic mulai 1 Gbps, Monitoring 24/7 by NOC
                                  </div>
                                </div>
                              </div>
                            </a>
                            <a href="#">
                              <div class="row">
                                <div class="col-lg-3">
                                  <img src="{{ asset('assets/img/icons/flex_server.png') }}" style="margin:5px;margin-left:25px" width="56" height="52" alt="unlimied-hosting">
                                </div>
                                <div class="col-lg-9">
                                  <div class="title_link">
                                    Colocation Server
                                  </div>
                                  <div class="desc_link">
                                    99% Uptime Server, UPS Backup, On-Site & OffSite Monitoring
                                  </div>
                                </div>
                              </div>
                            </a>
                  </div>
                </li>
                <li class="nav-item navbar-dropdown">
                  <a class="nav-link pl-3 me-3" style="font-size: 16px"  href="#" onmousemove="email_in()" onmouseout="email_out()">
                      Email Suite
                      <span>
                          <svg id="email_down" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                              <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                            </svg>
                          </span> 
                  </a>

                  <script>
                      function email_in()
                      {
                        document.getElementById("email_down").style.transitionDuration = "0.5s";
                          document.getElementById('email_down').style.transform = 'rotate(180deg)';
                      }
                      function email_out()
                      {
                        document.getElementById("email_down").style.transitionDuration = "0.5s";
                          document.getElementById('email_down').style.transform = 'rotate(360deg)';
                      }
                  </script>

                  <div class="dropdown" onmousemove="email_in()" onmouseout="email_out()">
                    <a href="#">
                              <div class="row">
                                <div class="col-lg-3">
                                  <img src="{{ asset('assets/img/icons/ec_logo.png') }}" style="margin:5px;margin-left:25px" width="56" height="52" alt="unlimied-hosting">
                                </div>
                                <div class="col-lg-9">
                                  <div class="title_link">
                                    EC Collaboration Suite
                                  </div>
                                  <div class="desc_link">
                                    Layanan email premium dari Qwords dengan 25GB storage dan kapasitas penyimpanan hingga 1000 akun
                                  </div>
                                </div>
                              </div>
                            </a>
                            <a href="#">
                              <div class="row">
                                <div class="col-lg-3">
                                  <img src="{{ asset('assets/img/icons/micro_logo.png') }}" style="margin:5px;margin-left:25px" width="50" height="50" alt="unlimied-hosting">
                                </div>
                                <div class="col-lg-9">
                                  <div class="title_link">
                                    Microsoft 365
                                  </div>
                                  <div class="desc_link">
                                    Paket layanan dari Microsoft untuk meningkatkan produktivitas kerja perusahaan Anda
                                  </div>
                                </div>
                              </div>
                            </a>
                            <a href="#">
                              <div class="row">
                                <div class="col-lg-3">
                                  <img src="{{ asset('assets/img/icons/google_logo.png') }}" style="margin:5px;margin-left:25px" width="50" height="50" alt="unlimied-hosting">
                                </div>
                                <div class="col-lg-9">
                                  <div class="title_link">
                                    Google Workspace
                                  </div>
                                  <div class="desc_link">
                                    Layanan yang menyediakan beberapa versi produk Goolge yang dapat disesuaikan dengan Nama Domain pelanggan
                                  </div>
                                </div>
                              </div>
                            </a>
                            <a href="#">
                              <div class="row">
                                <div class="col-lg-3">
                                  <img src="{{ asset('assets/img/icons/mail_togo.png') }}" style="margin:5px;margin-left:25px" width="56" height="52" alt="unlimied-hosting">
                                </div>
                                <div class="col-lg-9">
                                  <div class="title_link">
                                    Mailtogo
                                  </div>
                                  <div class="desc_link">
                                    Kegiatan promosi, campaign, diskon, penawaran produk, hingga membership bisa Anda wujudkan dengan mudah melalui email marketing
                                  </div>
                                </div>
                              </div>
                            </a>
                  </div>
                </li>
                <li class="nav-item navbar-dropdown">
                  <a class="nav-link pl-3 me-3" style="font-size: 16px"  href="#" onmousemove="internet_in()" onmouseout="internet_out()">
                      Internet Access
                      <span>
                          <svg id="internet_down" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                              <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                            </svg>
                          </span> 
                  </a>

                  <script>
                      function internet_in()
                      {
                        document.getElementById("internet_down").style.transitionDuration = "0.5s";
                          document.getElementById('internet_down').style.transform = 'rotate(180deg)';
                      }
                      function internet_out()
                      {
                        document.getElementById("internet_down").style.transitionDuration = "0.5s";
                          document.getElementById('internet_down').style.transform = 'rotate(360deg)';
                      }
                  </script>

                  <div class="dropdown" onmousemove="internet_in()" onmouseout="internet_out()">
                    <a href="#">
                              <div class="row">
                                <div class="col-lg-3">
                                  <img src="{{ asset('assets/img/icons/house_wifi.png') }}" style="margin:5px;margin-left:25px" width="52" height="52" alt="unlimied-hosting">
                                </div>
                                <div class="col-lg-9">
                                  <div class="title_link">
                                    Brandband Home
                                  </div>
                                  <div class="desc_link">
                                    Internet untuk kebutuhan rumah/personal dengan koneksi stabil tanpa buffering hingga 1Gbps. Kuota Unlimited
                                  </div>
                                </div>
                              </div>
                            </a>
                            <a href="#">
                              <div class="row">
                                <div class="col-lg-3">
                                  <img src="{{ asset('assets/img/icons/business_broadband.png') }}" style="margin:5px;margin-left:25px" width="56" height="52" alt="unlimied-hosting">
                                </div>
                                <div class="col-lg-9">
                                  <div class="title_link">
                                    Broadband Business
                                  </div>
                                  <div class="desc_link">
                                    Jalankan bisnis bisa lebih fokus dengan jaringan internet cepat, koneksi stabil, dan aman
                                  </div>
                                </div>
                              </div>
                            </a>
                            <a href="#">
                              <div class="row">
                                <div class="col-lg-3">
                                  <img src="{{ asset('assets/img/icons/connect.png') }}" style="margin:5px;margin-left:25px" width="50" height="50" alt="unlimied-hosting">
                                </div>
                                <div class="col-lg-9">
                                  <div class="title_link">
                                    Broadband Wireless
                                  </div>
                                  <div class="desc_link">
                                    Internet dengan teknologi wireless super cepat, bebas FUP untuk kebutuhan rumah & bisnis
                                  </div>
                                </div>
                              </div>
                            </a>
                            <a href="#">
                              <div class="row">
                                <div class="col-lg-3">
                                  <img src="{{ asset('assets/img/icons/check_connection.png') }}" style="margin:5px;margin-left:25px" width="50" height="50" alt="unlimied-hosting">
                                </div>
                                <div class="col-lg-9">
                                  <div class="title_link">
                                    Check Coverage Area Broadband
                                  </div>
                                  <div class="desc_link">
                                    Mau pasang internet? Cek jangkauan internet Broadband Qwords di area rumah anda
                                  </div>
                                </div>
                              </div>
                            </a>
                  </div>
                </li>
          </ul>
          <button class="btn btn-primary login">
              Login
              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                  <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                </svg>
              
          </button>
        </div>
      </div>
    </nav>