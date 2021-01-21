<!-- FOOTER -->
<footer id="footer">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-3">
                <div class="footer-widget">
                    <div class="footer-logo">
                        <a href="index.html" class="logo"><img src="{{ asset('public/callie/img/logo-alt.png') }}"
                                alt=""></a>
                    </div>
                    <p>Halowi adalah sebuah situs website yang memuat artikel-artikel blog. Semoga blog ini dapat
                        berguna, mengibur dan bermanfaat bagi teman-teman yang
                        membaca :)</p>
                    <ul class="contact-social">
                        <li><a href="#" class="social-facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="social-instagram"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-widget">
                    <h3 class="footer-title">Categories</h3>
                    <div class="category-widget">
                        <ul>
                            @foreach ($category as $i)
                                <li><a href="{{ route('blog.categories', $i->slug) }}">{{ $i->name }}
                                        <span>{{ $i->posts->count() }}</span></a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-widget">
                    <h3 class="footer-title">Tags</h3>
                    <div class="tags-widget">
                        <ul>
                            @foreach ($tag as $i)
                                <li><a href="{{ route('blog.tags', $i->slug) }}">{{ $i->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-widget">
                    <h3 class="footer-title">Newsletter</h3>
                    <div class="newsletter-widget">
                        <form>
                            <p>Masukan email anda untuk berlanggan dengan artikel kami</p>
                            <input class="input" name="newsletter" placeholder="Enter Your Email">
                            <button class="primary-button">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /row -->

        <!-- row -->
        {{-- <div class="footer-bottom row">
            <div class="col-md-6 col-md-push-6">
                <ul class="footer-nav">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Contacts</a></li>
                    <li><a href="#">Advertise</a></li>
                    <li><a href="#">Privacy</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-md-pull-6">
                <div class="footer-copyright">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());

                    </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                        aria-hidden="true"></i> by <a href="https://colorlib.com"
                        target="_blank">Colorlib</a>.Downloaded from <a href="https://themeslab.org/"
                        target="_blank">Themeslab</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
            </div>
        </div> --}}
        <!-- /row -->
    </div>
    <!-- /container -->
</footer>
<!-- /FOOTER -->

<!-- jQuery Plugins -->
<script src="{{ asset('public/callie/js/jquery.min.js') }}"></script>
<script src="{{ asset('public/callie/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/callie/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('public/callie/js/main.js') }}"></script>

</body>

</html>
