
    <!----------- Footer ------------>
    <footer class="footer-bs footer-section">
        <div class="row">
        	<div class="col-md-2 footer-brand animated fadeInLeft py-5">
			<center>
            	 <a href="index.html"><img src="{{asset('frontend/image/logo.jpeg')}}" style="max-width: 60px;flot:right;" class="img-fluid" alt="logo"></a>
                <p></p>
               </center>
            </div>
			
			<div class="col-md-4 footer-brand animated text-center">
			<p class="copyright-text"><i class="fa-sharp fa-solid fa-phone "></i> &nbsp;  &nbsp;&nbsp;0719586160; &nbsp;0781501648</p>
			<p class="copyright-text"><i class="fa-sharp fa-solid fa-envelope"></i> &nbsp;  &nbsp;&nbsp;info@zuvaacademy.com</p>
        <p class="copyright-text"><i class="fa-sharp fa-solid fa-earth-americas"></i> &nbsp; &nbsp; &nbsp;www.zuvaacademy.com</p>
          <p class="copyright-text"><i class="fa-sharp fa-solid fa-location-dot"></i> &nbsp; &nbsp; &nbsp;Lot 1 of Risboro Farm,Chegutu</p>
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
			<div class="container">
			
            	<div class="copyright-text text-center">
				 <p>Subscribe To Our Newsletter.</p>
				 </div>
               <!-- <p>A rover wearing a fuzzy suit doesn’t alarm the real penguins</p>-->
                <p>
                   <div class="subscribe-form">
                                     <form action="#" method="POST" enctype="multipart/form-data">
                                    @csrf
                                       <input type="email" id="subscriber_email" name="subscriber_email" placeholder="Email Address">
                                        <button  type="submit"><i class="fab fa-telegram-plane"></i></button>
                                    </form>
                                      <div class="copyright-text text-center"><p>Copyright © 2022, All Rights Reserved Zuva Academy</a></p></div>
                            
                          
                                    
                                </div><!-- /input-group -->
                 </p>
            </div>
			</div>
        </div>
		
    </footer>