 <!-- Site footer -->
    <footer class="footer-section">
        <div class="container">
            
            <div class="footer-content pt-2 pb-2">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50 d-flex justify-content-center">
                        <div class="footer-widget">
						<p style="color:black;font-size:14px">ZUVA ACADEMY</p>
                            <div class="footer-logo mb-25" >
                                <a href="index.html"><img src="{{asset('frontend/image/logo.jpeg')}}" style="max-width: 60px;flot:right;" class="img-fluid" alt="logo"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 mb-50 d-flex justify-content-center">
                        <div class="footer-widget">
                            <div class="footer-text mb-25">
                                <p style="color:#ffffff;font-size:14px">Don't miss to subscribe to our new feeds.</p>
                                <div class="subscribe-form">
                                     <form action="#" method="POST" enctype="multipart/form-data">
                                    @csrf
                                       <input type="email" id="subscriber_email" name="subscriber_email" placeholder="Email Address">
                                        <button  type="submit"><i class="fab fa-telegram-plane"></i></button>
                                    </form>
                                        
                                    
                                </div>
                               
                            </div>                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-center">
                        <div class="copyright-text">
                            <p>Copyright ?? 2022, All Rights Reserved Zuva Academy</a></p>
                        </div>
                    </div>
                    
                    <div class="col-xl-6 col-lg-6 text-center text-lg-right">
                        <div class="copyright-text">
                            <p><a href="#" style="color:#ffffff;font-size:14px">Terms and conditons</a> | <a href="#" style="color:#ffffff;font-size:14px">Privacy policy</a></p>
                        </div>
                    </div>
					
                   
                </div>
            </div>
        </div>
    </footer>