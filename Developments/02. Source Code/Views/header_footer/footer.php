</div>
<!--End Body Content-->
<!--Footer-->
<footer id="footer" class="footer-4">
    <div class="newsletter-section">
        <div class="container">
            <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-7 w-100 d-flex justify-content-start align-items-center">
                        <div class="display-table">
                            <div class="display-table-cell footer-newsletter">
                                <div class="section-header text-center">
                                    <label class="h2"><span>sign up for </span>FSM - Prominent</label>
                                </div>
                                <form class="subcribe-from" action="?act=sub" method="post">
                                    <div class="input-group">
                                        <input type="email" class="input-group__field newsletter__input" name="EMAIL" value="" placeholder="Email address" required>
                                        <span class="input-group__btn">
                                            <button type="submit" class="btn newsletter__submit" name="commit" id="swal"><span class="newsletter__submit-text--large">Subscribe</span></button>
                                        </span>
                                    </div>
                                  </form>
                                  <script type="text/javascript">
                                  $(document).ready(function(){
                                    $('#swal').on("click",function (e){
                                      e.preventDefault();
                                      const Toast = Swal.mixin({
                                        toast: true,
                                        position: 'top-end',
                                        showConfirmButton: false,
                                        timer: 1200,
                                        timerProgressBar: true,
                                        didOpen: (toast) => {
                                          toast.addEventListener('mouseenter', Swal.stopTimer)
                                          toast.addEventListener('mouseleave', Swal.resumeTimer)
                                        }
                                      })
                                      Toast.fire({
                                        icon: 'success',
                                        title: 'Subscribe !'
                                      }).then(function(){
                                        $('.subcribe-from').submit();
                                            });
                                    });
                                  });
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-5 d-flex justify-content-end align-items-center">
                        <div class="footer-social">
                            <ul class="list--inline site-footer__social-icons social-icons">
                                <li><a class="social-icons__link" href="https://www.facebook.com/" target="_blank" title=" Facebook"><i class="icon icon-facebook"></i></a></li>
                                <li><a class="social-icons__link" href="https://twitter.com/" target="_blank" title="Twitter"><i class="icon icon-twitter"></i> <span class="icon__fallback-text">Twitter</span></a></li>
                                <li><a class="social-icons__link" href="https://www.instagram.com/" target="_blank" title="Instagram"><i class="icon icon-instagram"></i> <span class="icon__fallback-text">Instagram</span></a></li>
                                <li><a class="social-icons__link" href="https://www.youtube.com/" target="_blank" title="YouTube"><i class="icon icon-youtube"></i> <span class="icon__fallback-text">YouTube</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <div class="site-footer">
        <div class="container">
            <!--Footer Links-->
            <div class="footer-top">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                        <h4 class="h4">FSM - Prominent</h4>
                        <ul>
                            <li><a href="?act=shop">Women</a></li>
                            <li><a href="?act=shop">Men</a></li>
                            <li><a href="?act=shop">Kids</a></li>
                            <li><a href="?act=shop">Sale</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                        <h4 class="h4">Informations</h4>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Terms &amp; condition</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                        <h4 class="h4">SUPPORT</h4>
                        <ul>
                            <li><a href="#">Instructions - Support</a></li>
                            <li><a href="#">FAQ's</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#"> Payment - Delivery</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 contact-box">
                        <h4 class="h4">Contact Us</h4>
                        <ul class="addressFooter">
                            <li><i class="icon anm anm-map-marker-al"></i><p>590 August Revolution, Ward 11 <br>District 3 city HCM . </p></li>
                            <li class="phone"><i class="icon anm anm-phone"></i><p>(84) 094 176 6749</p></li>
                            <li class="email"><i class="icon anm anm-envelope-l"></i><p>fsmprominent@gmail.com</p></li>
                        </ul>
                    </div>
                    
                </div>
                <div class="row-bg5">
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                            <p>Certificate of Business / Investment Registration Ho Chi Minh City [a wholly owned subsidiary of FSM - PROMINENT. / 590 August Revolution, Ward 11, District 3]</p>
                            <p class="h6">© 10 - 2021 . All rights reserved in FSM - Prominent</p>
                        </div>
			        </div>
            </div>
            <!--End Footer Links-->
            <hr>
        </div>
    </div>
</footer>

</div><!--End layout-boxed-->
<span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
<?php require_once('./Views/product-detail/hide.php'); ?>
<?php require_once('./Views/quickview.php'); ?>
<?php require_once('./Views/newlester.php'); ?>
