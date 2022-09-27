
    <!----------- Footer ------------>
    <footer class="footer-bs footer-rokon">
        <div class="row">
        	<div class="col-md-6 footer-brand animated fadeInLeft py-3">
			<center>
            	 <a href="index.html"><img src="{{asset('frontend/image/logo.jpeg')}}" style="max-width: 60px;flot:right;" class="img-fluid" alt="logo"></a>
                <p></p>
               </center>
            </div>
        	<!--<div class="col-md-4 footer-nav animated fadeInUp">
            	 <p>© 2014 BS3 UI Kit, All rights reserved</p>
            	<div class="col-md-6">
                    <ul class="pages">
                        <li><a href="#">Travel</a></li>
                        <li><a href="#">Nature</a></li>
                        <li><a href="#">Explores</a></li>
                        <li><a href="#">Science</a></li>
                        <li><a href="#">Advice</a></li>
                    </ul>
                </div>
            	<div class="col-md-6">
                    <ul class="list">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contacts</a></li>
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>-->
        	<!--<div class="col-md-2 footer-social animated fadeInDown">
            	<h4>Follow Us</h4>
            	<ul>
                	<li><a href="#">Facebook</a></li>
                	<li><a href="#">Twitter</a></li>
                	<li><a href="#">Instagram</a></li>
                	<li><a href="#">RSS</a></li>
                </ul>
            </div>-->
        	<div class="col-md-6 footer-ns animated fadeInRight">
            	<div class="copyright-text">
				 <p>Subscribe To Our Newsletter.</a></p>
				 </div>
               <!-- <p>A rover wearing a fuzzy suit doesn’t alarm the real penguins</p>-->
                <p>
                   <div class="subscribe-form">
                                     <form action="#" method="POST" enctype="multipart/form-data">
                                    @csrf
                                       <input type="email" id="subscriber_email" name="subscriber_email" placeholder="Email Address">
                                        <button  type="submit"><i class="fab fa-telegram-plane"></i></button>
                                    </form>
                                        
                                    
                                </div><!-- /input-group -->
                 </p>
            </div>
        </div>
		<center>
		   <div class="copyright-text">
                            <p>Copyright © 2022, All Rights Reserved Zuva Academy</a></p>
                        </div>
		</center>
    </footer>