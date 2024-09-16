@php
    $footerdccomics = config('datamenu.footerdccomics');
    $footerdcshop = config('datamenu.footerdcshop');
    $footerdc = config('datamenu.footerdc');
    $footersites = config('datamenu.footersites');

@endphp

<footer>
    <section>
        <div class="container">
            <div class="footer_list">
                <ul>
                    <li>
                        DC COMICS
                    </li>
                    @foreach ($footerdccomics as $link)
                        <li><a href="">{{ $link }}</a></li>
                    @endforeach
                </ul>
                <ul>
                    <li>SHOP</li>
                    @foreach ($footerdcshop as $link)
                        <li><a href="">{{ $link }}</a></li>
                    @endforeach
                </ul>

            </div>
            <div class="footer_list">
                <ul>
                    <li>DC</li>
                    @foreach ($footerdc as $link)
                        <li><a href="">{{ $link }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="footer_list">
                <ul>
                    <li>SITES</li>
                    @foreach ($footersites as $link)
                        <li><a href="">{{ $link }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
    <div class="container flexed">
        <div id="sing_up">
            <a href="">SING-UP NOW!</a>
        </div>
        <h4>FOLLOW US</h4>
        <div class="icons">
            <img src="../assets/footer-facebook.png" alt="">
            <img src="../assets/footer-twitter.png" alt="">
            <img src="../assets/footer-youtube.png" alt="">
            <img src="../assets/footer-pinterest.png" alt="">
            <img src="../assets/footer-periscope.png" alt="">
        </div>
    </div>
</footer>
