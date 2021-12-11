<div class="page-banner-section section breadcrumbs overlay-bg">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="page-banner text-center">
          <h1 class="breadcrumbs-title">Contact</h1>

          <ul class="breadcrumb-list page-breadcrumb">

            <li>
              <a href="/" title="Back to the home page">Home</a>
            </li>
            <li>



              <span>Contact</span>


            </li>
          </ul>


        </div>
      </div>
    </div>
  </div>
</div>

<main>
  <div id="shopify-section-contact-template" class="shopify-section">
    <!-- About Section Start -->
    <div class="contact-section section position-relative fix" id="section-contact-template">

      <div class="container">
        <div class="row">
          <!-- Contact Info Start -->
          <div class="col-lg-5 col-12 mb-30">
            <div class="contact-info">
              <ul>


                <li>

                  <h4>Address</h4>



                  <p>256, Centerl Town, Main Street Hilton Tower, New Yourk</p>

                </li>



                <li>

                  <h4>Phone</h4>



                  <p>+8801234 567 890
                    <br>
                    +8801234 567 890
                  </p>

                </li>



                <li>

                  <h4>Web</h4>



                  <p>info@example.com
                    <br>
                    www.example.com
                  </p>

                </li>




              </ul>
            </div>
          </div><!-- Contact Info End -->
          <!-- Contact Form Start -->
          <div class="col-lg-7 col-12 mb-30">
            <div class="contact-form-wrap">

              <h3>Get in Touch</h3>



              <p>Terms & Conditions deleniti atque corrupti sdolores et quas molestias cepturi sint eca itate non similique sunt in culpa modi tempora incidunt obtain pain</p>


              <div class="contact-form">
                <form method="post" action="/contact#contact_form" id="contact_form" accept-charset="UTF-8" class="contact-form"><input type="hidden" name="form_type" value="contact" /><input type="hidden" name="utf8" value="✓" />
                  <div class="row row-10">

                    <div class="col-md-12 col-12 mb-30">



                    </div>

                    <div class="col-md-6 col-12 mb-30">
                      <input type="text" placeholder="Name" class="" class="" name="contact[name]" id="ContactFormName" value="">
                    </div>
                    <div class="col-md-6 col-12 mb-30">
                      <input type="email" placeholder="Email" class="" name="contact[email]" id="ContactFormEmail" value="">
                    </div>
                    <div class="col-md-6 col-12 mb-30">
                      <input type="text" placeholder="Number" class="" name="contact[number]" id="ContactFormNumber">
                    </div>
                    <div class="col-md-6 col-12 mb-30">
                      <input type="text" placeholder="Subject" class="" name="contact[subject]" id="ContactFormSubject">
                    </div>
                    <div class="col-12 mb-30">
                      <textarea placeholder="Message" name="contact[body]" id="ContactFormMessage"></textarea>
                    </div>
                    <div class="col-12">
                      <button type="submit">Submit</button>
                    </div>
                  </div>
                </form>
              </div>

            </div>
          </div><!-- Contact Form End -->
        </div>
      </div>
    </div><!-- About Section End -->
    <style data-shopify>
      #section-contact-template {








        margin-top: 90px;
        margin-bottom: 60px;


      }

      @media (max-width: 767px) {
        #section-contact-template {








          margin-top: 50px;
          margin-bottom: 25px;


        }
      }


      /* Contact Address Style */
      #section-contact-template .contact-info {
        background-color: #f6efe2;
      }

      #section-contact-template .contact-info ul li h4 {
        color: #000000;
      }

      #section-contact-template .contact-info ul li p,
      #section-contact-template .contact-info ul li a {
        color: #000000;
      }

      #section-contact-template .contact-info ul li {
        border-color: ;
      }

      /* Contact Form Style */
      #section-contact-template .contact-form-wrap h3 {
        color: ;
      }

      #section-contact-template .contact-form-wrap p {
        color: ;
      }

      #section-contact-template .contact-form input {
        color: ;
        border-color: ;
        border-radius: 50px;
      }

      #section-contact-template .contact-form textarea {
        color: ;
        border-color: ;
        border-radius: 20px;
        height: px;
      }

      #section-contact-template .contact-form button {
        background-color: ;
        color: ;
        border-radius: 50px;
      }

      #section-contact-template .contact-form button:hover {
        background-color: ;
        color: ;
      }
    </style>



  </div>
  <div id="shopify-section-google-map" class="shopify-section">
    <div class="google-map-container mb-80" id="section-google-map">
      <div id="google-map"></div>
    </div>

    <style data-shopify>
      #section-google-map {}

      @media (min-width: 768px) and (max-width: 991px) {
        #section-google-map {}
      }

      @media (max-width: 767px) {
        #section-google-map {}
      }
    </style>


    <!-- Google Map -->
    <script src="https://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.22&key=AIzaSyAUbRHtu3k_fg3jDGk_qAatE5jA4bC_ndE"></script>

    <script>
      // When the window has finished loading create our google map below
      google.maps.event.addDomListener(window, 'load', init);

      function init() {
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
          // How zoomed in you want the map to start at (always required)
          zoom: 12,

          scrollwheel: false,

          // The latitude and longitude to center the map (always required)
          center: new google.maps.LatLng(40.740610, -73.935242), // New York

          // How you would like to style the map. 
          // This is where you would paste any style found on

          styles: [{
              "featureType": "water",
              "elementType": "geometry",
              "stylers": [{
                  "color": "#e9e9e9"
                },
                {
                  "lightness": 17
                }
              ]
            },
            {
              "featureType": "landscape",
              "elementType": "geometry",
              "stylers": [{
                  "color": "#f5f5f5"
                },
                {
                  "lightness": 20
                }
              ]
            },
            {
              "featureType": "road.highway",
              "elementType": "geometry.fill",
              "stylers": [{
                  "color": "#ffffff"
                },
                {
                  "lightness": 17
                }
              ]
            },
            {
              "featureType": "road.highway",
              "elementType": "geometry.stroke",
              "stylers": [{
                  "color": "#ffffff"
                },
                {
                  "lightness": 29
                },
                {
                  "weight": 0.2
                }
              ]
            },
            {
              "featureType": "road.arterial",
              "elementType": "geometry",
              "stylers": [{
                  "color": "#ffffff"
                },
                {
                  "lightness": 18
                }
              ]
            },
            {
              "featureType": "road.local",
              "elementType": "geometry",
              "stylers": [{
                  "color": "#ffffff"
                },
                {
                  "lightness": 16
                }
              ]
            },
            {
              "featureType": "poi",
              "elementType": "geometry",
              "stylers": [{
                  "color": "#f5f5f5"
                },
                {
                  "lightness": 21
                }
              ]
            },
            {
              "featureType": "poi.park",
              "elementType": "geometry",
              "stylers": [{
                  "color": "#dedede"
                },
                {
                  "lightness": 21
                }
              ]
            },
            {
              "elementType": "labels.text.stroke",
              "stylers": [{
                  "visibility": "on"
                },
                {
                  "color": "#ffffff"
                },
                {
                  "lightness": 16
                }
              ]
            },
            {
              "elementType": "labels.text.fill",
              "stylers": [{
                  "saturation": 36
                },
                {
                  "color": "#333333"
                },
                {
                  "lightness": 40
                }
              ]
            },
            {
              "elementType": "labels.icon",
              "stylers": [{
                "visibility": "off"
              }]
            },
            {
              "featureType": "transit",
              "elementType": "geometry",
              "stylers": [{
                  "color": "#f2f2f2"
                },
                {
                  "lightness": 19
                }
              ]
            },
            {
              "featureType": "administrative",
              "elementType": "geometry.fill",
              "stylers": [{
                  "color": "#fefefe"
                },
                {
                  "lightness": 20
                }
              ]
            },
            {
              "featureType": "administrative",
              "elementType": "geometry.stroke",
              "stylers": [{
                  "color": "#fefefe"
                },
                {
                  "lightness": 17
                },
                {
                  "weight": 1.2
                }
              ]
            }
          ]
        };

        // Get the HTML DOM element that will contain your map 
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('google-map');

        // Create the Google Map using our element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);

        // Let's also add a marker while we're at it
        var marker = new google.maps.Marker({
          position: new google.maps.LatLng(40.740610, -73.935242),
          map: map,
          title: 'Bardy',
          icon: "https:\/\/cdn.shopify.com\/s\/files\/1\/0114\/0994\/8731\/files\/map-marker.png?1884 ",
          animation: google.maps.Animation.BOUNCE
        });
      }
    </script>
  </div>
  <div id="shopify-section-brand-logo" class="shopify-section">
    <!-- Brand Section Start -->
    <div class="brand-section" id="section-brand-logo">
      <div class="container">
        <div class="row">

          <div class="brand-slider section">


            <div class="brand-item col">

              <img src="//cdn.shopify.com/s/files/1/0252/3594/7602/files/brand-1.png?v=1564983796" alt="">
            </div>



            <div class="brand-item col">

              <img src="//cdn.shopify.com/s/files/1/0252/3594/7602/files/brand-2.png?v=1564983805" alt="">
            </div>



            <div class="brand-item col">

              <img src="//cdn.shopify.com/s/files/1/0252/3594/7602/files/brand-3.png?v=1564983818" alt="">
            </div>



            <div class="brand-item col">

              <img src="//cdn.shopify.com/s/files/1/0252/3594/7602/files/brand-4.png?v=1564983828" alt="">
            </div>



            <div class="brand-item col">

              <img src="//cdn.shopify.com/s/files/1/0252/3594/7602/files/brand-5.png?v=1564983837" alt="">
            </div>



            <div class="brand-item col">

              <img src="//cdn.shopify.com/s/files/1/0252/3594/7602/files/brand-6.png?v=1564985498" alt="">
            </div>




          </div>

        </div>
      </div>
    </div><!-- Brand Section End -->


    <style>
      #section-brand-logo {














        margin-top: 0px;
        margin-bottom: 90px;


      }

      @media (max-width: 767px) {
        #section-brand-logo {














          margin-top: 0px;
          margin-bottom: 50px;


        }
      }
    </style>







  </div>
</main>

<div id="shopify-section-service" class="shopify-section">
  <!-- Service Section Start -->
  <div class="service-section " id="section-service">
    <div class="service-container">
      <div class="row ml-0 mr-0">


        <div class="service col-xl-3 col-md-6 col-12">


          <div class="icon" style="background-image: url( https://cdn.shopify.com/s/files/1/0114/0994/8731/files/service-sprites.png?884  );"></div>


          <div class="content">


            <h3>Free home delivery</h3>



            <p>Provide free home delivery for all product over $100</p>

          </div>
        </div>



        <div class="service col-xl-3 col-md-6 col-12">


          <div class="icon" style="background-image: url( https://cdn.shopify.com/s/files/1/0114/0994/8731/files/service-sprites.png?884  );"></div>


          <div class="content">


            <h3>Quality Products</h3>



            <p>We ensure the product quality that is our main goal</p>

          </div>
        </div>



        <div class="service col-xl-3 col-md-6 col-12">


          <div class="icon" style="background-image: url( https://cdn.shopify.com/s/files/1/0114/0994/8731/files/service-sprites.png?884  );"></div>


          <div class="content">


            <h3>3 Days Return</h3>



            <p>Return product within 3 days for any product you buy</p>

          </div>
        </div>



        <div class="service col-xl-3 col-md-6 col-12">


          <div class="icon" style="background-image: url( https://cdn.shopify.com/s/files/1/0114/0994/8731/files/service-sprites.png?884  );"></div>


          <div class="content">


            <h3>Online Support</h3>



            <p>We ensure the product quality that you can trust easily</p>

          </div>
        </div>





      </div>
    </div>
  </div><!-- Service Section End -->

  <style data-shopify>
    #section-service {










      margin-top: 0px;
      margin-bottom: -90px;


    }

    @media (max-width: 767px) {
      #section-service {










        margin-top: 0px;
        margin-bottom: 50px;


      }
    }


    #section-service .service-container {
      background-color: ;
      border-color: ;
      border-radius: 0px;
    }

    #section-service .service .content h3 {
      color: ;
    }

    #section-service .service .content p {
      color: ;
    }

    #section-service .service::before {
      background-color: ;
    }
  </style>



</div>