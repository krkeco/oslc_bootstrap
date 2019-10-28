

<div class="frontline-video-container">
 <video class="frontline-video" width="100%"  autoplay muted loop>
  <source src="./img/bgVid.mp4" type="video/mp4">
  
  Your browser does not support the video tag.  Please get a new computer/browser.
</video> 
</div>


    <!-- Load React. -->
    <!-- Note: when deploying, replace "development.js" with "production.min.js". -->
    <script src="https://unpkg.com/react@16/umd/react.production.min.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js" crossorigin></script>

          
    <div style="margin-top:-5vh;" id="about">

      
      <div class="mheader-content" >
        <div class="mheader-content-inner" style="text-align:left; color: black;">
    
          <div class="container" style="text-align: center; padding-top:150px; ">
            
            <div style="row">
              <div class="col-12 frontline-title">
              
                <div style="font-size: 0.7em">Welcome To</div>
                
                Our Savior Lutheran Church
                
               <div style="font-size: 0.7em">in Arcadia</div>
              </div>
            </div>

            <div style="row">
              <div class="col-12 col-sm-10 offset-sm-1 offset-md-2 col-md-8 offset-lg-3 col-lg-6"> 
                  <div class="recents-box">

                    <h2 class=""frontline-title style="font-size: 2em; text-align: center;">News and Updates</h2>

                    <!-- Load our React component. -->
                    <div id="recent_list_container"></div>

                    <script src="recent_list.js"></script>

                </div>  
              </div>
            </div>

            <div class="row">

              <div class="col-12 col-sm-10 offset-sm-1 offset-md-0 col-md-4" >
                  <div class="transbox ">
      
                    <h2 class="h2.transbox">Resources</h2>

                    <div>
                      <a class="mr-auto portfolio-link" data-toggle="modal" href="#beliefs_pop">
                        <div class="portfolio-hover">
                          <div class="portfolio-hover-content">
                            <div class="frontline-link">
                              Our Beliefs
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>


                    <div>
                      <a style="" target="_blank" class="mr-auto portfolio-link" href="https://www.lcms.org">
                        <div class="portfolio-hover">
                          <div class="portfolio-hover-content">
                     
                            <div class="frontline-link">
                            LCMS Synod Website
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div>
                      <a style="" target="_blank" class="mr-auto portfolio-link" href="https://www.psd-lcms.org">
                        <div class="portfolio-hover">
                          <div class="portfolio-hover-content">
                     
                            <div class="frontline-link">
                            LCMS Disctrict Website
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>




                    <div>
                      <a class="portfolio-link mr-auto text-center" data-toggle="modal" href="#leadership_pop">
                        <div class="portfolio-hover">
                          <div class="portfolio-hover-content">
                            <div class="frontline-link">
                              Our Staff
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>

                    <div>
                      <a class="mr-auto portfolio-link" data-toggle="modal" href="#calendar_pop">
                        <div class="portfolio-hover">
                          <div class="portfolio-hover-content">
                            <div class="frontline-link">
                              Church Calendar
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>

                  <!--   <div>
                      <a class="mr-auto portfolio-link" data-toggle="modal" href="#youth_calendar_pop">
                        <div class="portfolio-hover">
                          <div class="portfolio-hover-content">
                            <div class="frontline-link">
                              Youth Calendar
                            </div>
                          </div>
                        </div>
                      </a>
                    </div> -->

                    <div>
                      <a class="mr-auto portfolio-link" href="https://sermons.oslcarcadia.com">
                        <div class="portfolio-hover">
                          <div class="portfolio-hover-content">
                            <div class="frontline-link">
                              Service Recordings
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>


                    <div>
                      <a class="mr-auto portfolio-link" data-toggle="modal" href="#prayer_pop">
                        <div class="portfolio-hover">
                          <div class="portfolio-hover-content">
                            <div class="frontline-link">
                              Prayer Requests
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>


                    <div>
                      <a style="" target="_blank" class="mr-auto portfolio-link" href="https://www.donate.oslcarcadia.com">
                        <div class="portfolio-hover">
                          <div class="portfolio-hover-content">
                     
                            <div class="frontline-link">
                            Online Giving
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>


                  </div>
              </div>


              <div class="col-12 col-sm-10 offset-sm-1 offset-md-0 col-md-4">
                  <div class="transbox">

                    <h2>Service Times</h2>
                    <div class="frontline-link">
                    Sunday
                    </br>
                       8:00AM Liturgical Service
                       </br>  
                       9:30AM 
                      <!--  <a data-toggle="modal" href="#class_pop"> -->
                       Sunday School
                       (All ages)
                       <!-- </a> -->
                       </br>
                     
                      10:45AM Liturgical Service
                      </br>
                       6:00PM Modern Praise Service
                       </br></br>
                       
                       Monday
                       </br>
                      6:30PM Abbreviated Service
                    </div>
                </div>  
              </div>

              <div class=" col-12 col-sm-10 offset-sm-1  offset-md-0 col-md-4">
                <div class="transbox ">
                      <h2>Directions</h2>
                    <a  style="font-weight: 700" data-toggle="modal" href="#directions_pop">

                  <div class="frontline-link">
                      <div class="container">
                        <div class="row justify-content-center">
                          <div class="col-auto">
                            <img class="img-fluid d-block mx-auto family-image" src="img/maposlc.png" alt="">
                          </div>

                          <div class="col-auto">  
                            512 W Duarte Rd., 
                            </br>
                            Arcadia, CA 91007
                          </div>
                        </div>
                      </div>
                    </a>
                      
                      </br>
                      <br/>
                      
                      Contact:
                      </br>
                  
                      <a   style="font-weight: 700" href="tel:+16264477690">626-447-7690</a>
                      </br>
                  
                      <a  style="font-weight: 700" href="mailto:oslcarcadia@aol.com">oslcarcadia@aol.com</a>
                    

                  </div>
                </div>
              </div>  
            </div>

            </div>
            </div>
            </div>

      </div>
    </div>