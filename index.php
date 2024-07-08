<?php get_header(); ?>
  <body <?php body_class();?>>
    <header style="margin-top: 40px;">
      <section class="banner">
        <div class="header-text">
          <p>Happy New Year</p>
          <h3>New Year Party 
            Celebration</h3>
        </div>
      </section>
    </header>

    <main>
      <section>
        <div class="container">
          <h2>65% OFF</h2>
          <p>OUR HOLIDAY DEALS ARE BETTER</p>
          <h3>ALL CATEGORIES</h3>
        </div>

        <div class="image">
          <img src="<?php echo get_template_directory_uri();?>/images/New Year Photo.png" alt="" />
        </div>
      </section>

      <section class="midnight">
        <div class="new-midnight-party">
          <div class="midnight-party">
            <h3>Welcome to midnight party</h3>
            <p style="padding-left: 60px;">
              Get ready to let loose and embrace the rhythm of the night as we kick off a celebration like no other. The stage is set, the lights are sparkling, and the music is pumping – it's time to make memories that will last a lifetime!
            </p>
            <a href="#">Join Now</a>
          </div>

          <div class="midnight-image">
            <img src="<?php echo get_template_directory_uri();?>/images/Group 70.png" alt="" />
          </div>
        </div>
      </section>

      <section class="description">
        <div class="party-description">
          <p>
            <span class="red-color">Place:</span>
            New Park Hotel
          </p>
          <p>
            <span class="red-color">Date:</span>
            31 December Night 2023
          </p>
          <p>
            <span class="red-color">Time</span>
            Evening 7.30 pm to 12.30 am
          </p>
        </div>

        <div>
          <button class="btn">Join Now</button>
        </div>
      </section>

      <section class="coming-soon">
        <div class="coming-soon-1st-part">
          <h6>NEW BEST OFFER</h6>
          <h2>Coming Soon</h2>
          <p>Get ready to be amazed because something incredible is about to unfold. Brace yourselves for the launch of our latest and greatest offer – a deal that will redefine the way you experience value and quality!</p>
        </div>

        <div class="coming-soon-2nd-part">
          <img src="<?php echo get_template_directory_uri();?>/images/Ellipse 1.png" alt="">
        </div>

        <div class="coming-soon-3rd-part">
          <h2>2024</h2>
          <p>This upcoming offer is not just a deal; it's a game-changer!</p>
          <img src="<?php echo get_template_directory_uri();?>/images/Group 96.png" alt="">
        </div>
      </section>

      <section class="holidays-sale">
        <div class="holidays-sale-text">
          <p class="">WHAT IS FUNCTIONAL</p>
          <h2>
            <span class="red-color">Holidays</span>
            Sale 50%
          </h2>
          <p>
            It's that magical time of the year, and we're spreading holiday cheer with our spectacular Holiday Sale! Dive into the spirit of giving and treat yourself or your loved ones to something special – all at an incredible 50% off!
          </p>
        </div>

        <div style="margin-top: 60px;">
          <div class="holidays-sale-img">
            
            <div>
              <img class="holidays-sale-img-3" src="<?php echo get_template_directory_uri();?>/images/Group 75.png" alt="" style="top:130px;">
            </div>
    
            <div>
              <img
              class="holidays-sale-img-1"
              src="<?php echo get_template_directory_uri();?>/images/Rectangle 1.png"
              alt="" style="vertical-align: middle;"/>
            </div>
    
            <img  class="holidays-sale-img-2" src="<?php echo get_template_directory_uri();?>/images/Group 44.png"  alt="">
    
            
          </div>
          <div style="border-radius: 16px 0px 16px 16px;
            background: #F00;max-width:1120px; width:100%;
            height: 229px;">
    

            </div>
                
          </div>
      </section>

      <section>
        <div class="awesome-portfolio">
          <div class="awesome-portfolio-text">
            <h6>THE BEST GIFTS</h6>
            <h2>Our Awesome Portfolio</h2>
            <p>
              Welcome to a showcase of innovation, creativity, and unparalleled expertise – behold our awesome portfolio! At the heart of our success lies a collection of projects that reflect our commitment to excellence and a passion for pushing boundaries.
            </p>
          </div>
          <div class="awesome-portfolio-img">
            <img src="<?php echo get_template_directory_uri();?>/images/Rectangle 3.png" alt="" />
            <img src="<?php echo get_template_directory_uri();?>/images/Rectangle 4.png" alt="" />
            <img src="<?php echo get_template_directory_uri();?>/images/Rectangle 5.png" alt="" />
            <img src="<?php echo get_template_directory_uri();?>/images/Rectangle 6.png" alt="" />
            <img src="<?php echo get_template_directory_uri();?>/images/Rectangle 7.png" alt="" />
            <img src="<?php echo get_template_directory_uri();?>/images/Rectangle 8.png" alt="" />
          </div>
        </div>
      </section>

      <section>
        <div class="newsletter-section">
          <div class="newsletter-section-img">
            <img src="<?php echo get_template_directory_uri();?>/images/Group 61.png" alt="" />
          </div>
          <div class="newsletter-section-text">
            <h2>Subscribe Newsletter</h2>
            <p>
              Stay in the loop, be the first to know, and unlock a treasure trove of exclusive content – subscribe to our newsletter now! Welcome to a community where information meets excitement, and your inbox becomes a portal to a world of curated updates, insights, and special offers.
            </p>
          </div>
          <div style="display: flex; justify-content: center;">
          <div class="newsletter-section-input-btn">
            <input
              type="text"
              class="newsletter-section-input"
              placeholder="user@gmail.com"
            />
            <button class="newsletter-section-btn">Subscribe</button>
          </div>
        </div>
        </div>
      </section>
    </main>

    <?php get_footer(); ?>