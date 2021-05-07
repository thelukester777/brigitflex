

        <?php if(!stristr($requestURL, 'contact')): ?>
        <!-- Call To Action -->
        <div class="call-to-action container">
            <div class="row">
                <div class="call-to-action-text span12">
                    <div class="ca-text">
                        <p>With over 40 years manufacturing expertise, let <span class="violet">Brigitflex</span> bring your circuit board concept to reality.</p>
                    </div>
                    <div class="ca-button">
                        <a href="<?php echo $baseURL ?>contact/">Contact Us Now!</a>
                    </div>
                </div>
            </div>
        </div>
        <?php endif ?>



        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="widget span4">
                        <h4>About Us</h4>
                        <p>Woman Owned and Operated in the USA. 
                          If you notice the absence of pictures of printed circuit boards we value our customers privacy due to the sensative nature and complex work we protect all with NDA and PIA agreements.
                        </p>
                        <p><a href="<?php echo $baseURL ?>about/">Read more...</a></p>
                    </div>
                    <div class="widget span2" style="text-align:center">
                        <img src="<?php echo $baseURL ?>assets/img/iso.png" border="0" width="95" title="ISO" alt="ISO" style="padding-bottom:20px">
                    </div>
                    <div class="widget span2">
                        <img src="<?php echo $baseURL ?>assets/img/itar.png" border="0" width="95" title="Itar" alt="Itar">
                        <h4>Itar #M30654</h4>
                        <h4>Cage Code 4PQK2</h4>
                    </div>
                    <div class="widget span4">
                        <h4>Contact Us</h4>
                        <p><i class="icon-map-marker"></i> Address: 1725 Fleetwood Drive, Elgin IL 60123</p>
                        <p><i class="icon-phone"></i>
                            Phone:
                            <?php if ($isMobile): ?><a href="tel:1+#application.PhoneNumber#" id="phoneNumber"><?php endif ?>(847) 741-1452<?php if ($isMobile): ?></a><?php endif ?>
                        </p>
                        <p><i class="icon-print"></i> Fax: (847) 741-1470 </p>
                        
                        <p><i class="icon-envelope-alt"></i> Email: <a href="mailto:Brigitflex@foxvalley.net" id="brigitEmail">Brigitflex@foxvalley.net</a></p>
                    </div>
                </div>
                <div class="footer-border"></div>
                <div class="row">
                    <div class="copyright span4">
                        <p>Copyright 2006 - <?php echo date("Y") ?> Brigitflex, Inc. - All rights reserved.</p>
                    </div>
                    
                </div>
            </div>
        </footer>

        <!-- Javascript -->
        <script src="<?php echo $baseURL ?>assets/js/jquery-1.8.2.min.js"></script>
        <script src="<?php echo $baseURL ?>assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo $baseURL ?>assets/js/jquery.flexslider.js"></script>
        <script src="<?php echo $baseURL ?>assets/js/jquery.quicksand.js"></script>
        <script src="<?php echo $baseURL ?>assets/prettyPhoto/js/jquery.prettyPhoto.js"></script>
        <script src="<?php echo $baseURL ?>assets/js/scripts.js"></script>


        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-55569102-1', 'auto');
          ga('send', 'pageview');

        </script>

    </body>

</html>

