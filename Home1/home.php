<!DOCTYPE html>
<html>
         <head>
            <meta charset="UTF-8"/>
            <link rel="stylesheet" href="css/styleHome.css"/>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


            <style>

               /* fotter */
 
footer {
    background-color: #1C1D1F;
    color: #fff;
    padding: 50px 0;
    
  }

  footer .row{
    display: flex;
    justify-content:space-around;
    align-items: center;
    flex-wrap: wrap;
    
  }

  footer .footer-box {
    margin-bottom: 30px;
    overflow-x:hidden;
    
  }

  footer .aboutus{
    margin-top: 78px;
    padding-right: 60px;
    padding-left: 60px;
  }
  footer .quicklink{

    margin-top: 30px;
  }
  
 

  footer h4 {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
  }
  
  footer p {
    font-size: 14px;
    line-height: 1.5;
  }
  
  footer ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  
  footer ul li {
    margin-bottom: 10px;
  }
  
  footer ul li a {
    font-size: 14px;
    color: #ccc;
    text-decoration: none;
    transition: all 0.3s ease;
  }
  
  footer ul li a:hover {
    color: #cd3535;
  }
  
  footer .social-icons li {
    display: inline-block;
    margin-right: 10px;
  }
  
  footer .container {
   
    max-width: 1200px;
    margin: 0 auto;
  }

  footer .newsletter{
    margin-top: -30px;
  }

  .form-control{
    

    width: 300px;
    height: 30px;
    overflow: hidden;
    border-radius: 10px;
    padding: 5px;

  }
   
 
   
 /* fotter */


 @media (max-width: 991px){
    

    footer .col-lg-3 {
        flex-basis: 33.33%;
        max-width: 33.33%;
      }
}


@media (max-width: 786px){
    
    /* footer */

    footer .col-md-6 {
        flex-basis: 50%;
        max-width: 50%;
      }

      footer .contactus{
        margin-top:26px;

    }
    footer .aboutus{
        margin-top:56px;
        
      }

      footer .aboutus{
        margin-top: 0;
        padding-right: 0;
      }

      footer .quicklink{
        margin-top: 0;
        padding-right: 0;
      }

      footer .contactus{
        margin-top: 0;
        padding-right: 0;
      }
    /* footer */

    
}

@media (max-width: 570px){
    
    
        /* footer */

        footer .row{
            flex-direction: column;
            width: unset;
           
            text-align: center;
          }

          footer .aboutus{
            padding: 0;
          }
        /* footer */
        }
/* media */

               </style>
         </head>

         <body>

                  <section class="saction-for-nav-page">

                       <div class="navigartion stick">
                              
                              
                             <div class="logo">
                        <a href="#">Investor<span class="logo-span">Seeker</span></a>
                                  </div>

                                 
                              <ul class="links">
                                   <li><a href="#">Home</a></li>
                                   <li><a href="#">About</a></li>
                                   <li><a href="#">Contact</a></li>
                                   <li><a href="#">Services</a></li>
                                   <li><a href="#">Team</a></li>
                              </ul>
                           

                              <div class="toog_btn">
                           <button onclick="location.href='loginForm.php'" class="sign-up-button">Sign In</button>
                             

                           
                           
                              <i class="fa-solid fa-bars"></i>
                           </div>


                         </div>
                           <div class="dropdown_menu ">

                                   <li><a href="#">Home</a></li>
                                   <li><a href="#">About</a></li>
                                   <li><a href="#">Contact</a></li>
                                   <li><a href="#">Services</a></li>
                                   <li><a href="#">Team</a></li>
                            <li><button class="sign-up-button button">Sign In</button></li>
                         </div>
                        
                         <main>
                            <section id="hero">
                                <h1>Welcome to The</h1>
                                <p>The Investor seeker</p>
                            </section>
                          </main>

                  </section> 

                  

                       <script>
                        const toggleBtn=document.querySelector('.toog_btn');
                        const toggleIcn=document.querySelector('.toog_btn i');
                        const dropdownMenu=document.querySelector('.dropdown_menu');

                        toggleBtn.onclick = function()
                        {
                            dropdownMenu.classList.toggle('open')
                            const isOpen=dropdownMenu.classList.contains('open')
                            toggleIcn.classList=isOpen
                            ?'fa-solid fa-xmark'
                            :'fa-solid fa-bars'

                            
                        }
                        
                       </script>

                       <script>

                        window.addEventListener("scroll",function(){
                           var navigartionn = document.querySelector("navigartion");
                           navigartionn.classList.toggle("sticky");
                        })

                       </script>





                  <section class="section-seconttop">

                            <div class="section-seconttop-left-flex-box">
                                      <div class="primary text">
                                     <h1>Connect with Investors and Grow Your Business.</h1>
                                     <h2>Join our platform to find investors, showcase your business, and get the funding you need.</h2>  
                                         </div> 
                                         
                                    
                                         <div class="butn-of-top-page">
                                            <button onclick="location.href='signUpForm.php'" class="lets-start-top button">Get started</button>
                                         </div> 
                                         
                                         <div class="email-submit">
                                         <div class="email-of-top-page">
                                            <input type="email" name="email" required placeholder="Enter your email...">
                                         </div> 
                                         
                                         <div class="butn-of-top-page-submit">
                                            <button class="Submit-top button">Submit</button>
                                         </div>
                                         
                                       </div>
                            </div>

                            <div class="section-seconttop-right-flex-box">
                                
                            </div>



                  </section>





                  <section class="third-seconttop">


                              <div class="top-sec">

                                    <div class="top-thirdImg">
                                         <img id="image-3rd-top" src="home_picture/secondimg.jgp.jpg" />         
                                    </div>
                                    
                                    <div class="top-text">
                                           <h2>Easy investor connection.</h2>  
                                           <p>Sign up as an entrepreneur and create a profile that 
                                             showcaseyour business.Connect with investors who are looking 
                                             for project for project like your</p>        
                                    </div>

                              </div>


                              <div class="bott-sec">
                                 
                                 <div class="bott-text">
                                        <h2>Raise capital.</h2>  
                                        <p>Get the funding you need to take your business to the next level.
                                          Use InvestLink to showcase your Business to
                                           wide range of potentisal investors.
                                        </p>        
                                 </div>


                                 <div class="bott-thirdImg">
                                    <img id="image-3rd-bot" src="home_picture/thirdimg.jpg.jpg" />         
                               </div>

                           </div>



                           <div class="bott-last-sec">

                              <div class="bott-last-thirdImg">
                                   <img id="image-3rd-bott-last" src="home_picture/fourthimg.jpg.jpg" />         
                              </div>
                              
                              <div class="bott-last-text">
                                     <h2>Access valuable resources.</h2>  
                                     <p>Our platform includes a range of resources to help 
                                       entrepreneurs grow and succed,including
                                        webinars,article and netword events</p>        
                              </div>

                        </div>


                        
                                   
                  </section>


                  <section class="fourth-section">
                        <div class="top-var">
                           <img id="grid" src="home_picture/grid.png">
                                  
                           <div class="top-var-h1">
                                 <h1>"Thanks to InvestorSeeker's resources, I 
                                    was able to grow my business faster than 
                                    I ever throught possible."</h1>
                                </div>

                                    <div class="photo-text">
                                       <img class="human1-img" src="home_picture/human2.png">
                                       <h4>Giles Hamperson</h4>

                                    </div>
                        </div>

                        <div class="bottom-questions-bar">
                                 
                              <h1>Questions ?</h1>
                            <div class="que">
                              <h3>How much does it cose ?</h3>
                              <p>provide your potential customers with an overview of how much they would be paying.</p>
                              
                              <h3>Who is this for ?</h3>
                              <p>provide your potential customers with an overview of how much they would be paying.</p>
                              
                              <h3>What makes this different ?</h3>
                              <p>provide your potential customers with an overview of how much they would be paying.</p>
                           </div>
                        </div>
                  </section>

                  <section class="fifth-section">
                     
                  </section>

                  <section class="six-section">

                      <div class="six-section-top">
                        <h1>Join our platform to find investors 
                           and,showcase your business, and get the funding you need..</h1>
                      </div>

                      <div class="six-section-bot">
                        <p>Sign up as an entrepreneur and create a profile 
                           that showcase your business connect with investor
                            who are looking for projecrs like yours.</p>
                      </div>
                     
                  </section>
                  <?php require "../Entrepreneur/footer.php";?>
         </body>
</html>