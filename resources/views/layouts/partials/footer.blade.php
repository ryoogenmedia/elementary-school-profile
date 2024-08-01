<footer class="footer-section">
    <div class="container footer-top">
        <div class="row">

            <div class="col-sm-6 col-lg-3 footer-widget">
                <div class="about-widget">
                    <img src="img/logo-light.png" alt>
                    <p>Cerdas, Berdaya saing dan berakhlak mulia. Merupakan visi misi kami untuk mendidik anak-anak
                        kami.</p>
                    <div class="social pt-1">
                        <a href><i class="fa fa-twitter-square"></i></a>
                        <a href><i class="fa fa-facebook-square"></i></a>
                        <a href><i class="fa fa-google-plus-square"></i></a>
                        <a href><i class="fa fa-linkedin-square"></i></a>
                        <a href><i class="fa fa-rss-square"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3 footer-widget">
                <h6 class="fw-title">USEFUL LINK</h6>
                <div class="dobule-link">
                    <ul>
                        @foreach (config('navbar') as $nav)
                            <li><a href>{{ $nav['title'] }}</a></li>
                        @endforeach
                    </ul>
                    <ul>
                        <li><a href="https://www.kemdikbud.go.id/">Kemendibud</a></li>
                        <li><a href="https://raporpendidikan.kemdikbud.go.id/login">Rapor</a></li>
                        <li><a href="https://dikti.kemdikbud.go.id/">Dikti</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3 footer-widget">
                <h6 class="fw-title">POSTINGAN TERATAS</h6>
                <ul class="recent-post">
                    <li>
                        <p>Snackable study:How to break <br> up your master's degree</p>
                        <span><i class="fa fa-clock-o"></i>24 Mar 2018</span>
                    </li>
                    <li>
                        <p>Open University plans major <br> cuts to number of staff</p>
                        <span><i class="fa fa-clock-o"></i>24 Mar 2018</span>
                    </li>
                </ul>
            </div>

            <div class="col-sm-6 col-lg-3 footer-widget">
                <h6 class="fw-title">Kontak</h6>
                <ul class="contact">
                    <li>
                        <p><i class="fa fa-map-marker"></i> Jl Pajaiang, Kec Biringkanaya, Kota Makassar</p>
                    </li>
                    <li>
                        <p><i class="fa fa-phone"></i> 085777839928281</p>
                    </li>
                    <li>
                        <p><i class="fa fa-envelope"></i> <a href="ryoogencomunity@gmail.com">sdnpajaiang@gmail.com</a>
                        </p>
                    </li>
                    <li>
                        <p><i class="fa fa-clock-o"></i> Senin - Minggu, jam 8.00 - 16.30</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="copyright">
        <div class="container">
            <p>
                Copyright &copy;
                <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                <script>
                    document.write(new Date().getFullYear());
                </script> SDN INP PAJAIANG | UNITAMA <i class="fa fa-heart-o" aria-hidden="true"></i>
                powered by <a href="https://github.com/ryoogenmedia" target="_blank">Ryoogen Media</a>
            </p>
        </div>
    </div>
</footer>
