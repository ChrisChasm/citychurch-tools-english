<?php
$content = [
    'images' => [
        'hero_background' => [
            'img' =>  trailingslashit( plugin_dir_url(__FILE__) ) . 'assets/temp_images/hero.jpg',
            'context' => 'This is the background of the hero first screen.',
        ],
        'slider' => [
            [
                'img' => trailingslashit( plugin_dir_url(__FILE__) ) . 'assets/temp_images/1a.jpg',
                'text' => 'Reason 1'
            ],
            [
                'img' => trailingslashit( plugin_dir_url(__FILE__) ) . 'assets/temp_images/2a.jpg',
                'text' => 'Reason 2'
            ],
            [
                'img' => trailingslashit( plugin_dir_url(__FILE__) ) . 'assets/temp_images/3a.jpg',
                'text' => 'Reason 3'
            ],
            [
                'img' => trailingslashit( plugin_dir_url(__FILE__) ) . 'assets/temp_images/4a.jpg',
                'text' => 'Reason 4'
            ]
        ]
    ],
    'nav' => [
        'title' => 'Love One Another - Tampa'
    ],
    'hero' => [

    ],
    'testimonies' => [

    ],
    'facebook_url' => '',
    'twitter_url' => '',
    'instagram_url' => '',

];
?>

<!-- nav -->
<nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light" id="pb-navbar">
    <div class="container">
        <a class="navbar-brand" href="/"><?php echo esc_html( $content['nav']['title'] ) // title ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-navbar" aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="probootstrap-navbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="#section-home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#section-why-us">Vision</a></li>
<!--                <li class="nav-item"><a class="nav-link" href="#section-areas">Areas</a></li>-->
                <li class="nav-item"><a class="nav-link" href="#section-testimonials">Testimonials</a></li>
                <li class="nav-item"><a class="nav-link" href="#section-about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#section-team">FAQ's</a></li>
                <li class="nav-item"><a class="nav-link" href="#section-contact">Get Started</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

<!-- hero -->
<section class="pb_cover_v1 text-left cover-bg-black cover-bg-opacity-4" style="background-image: url( <?php echo esc_html( $content['images']['hero_background']['img'] ) ?> )" id="section-home">
    <div class="container">
        <div class="row align-items-center justify-content-end">
            <div class="col-md-8  order-md-1">

                <h2 class="heading">Do what Jesus did.</h2>
                <h2 class="heading">Connect with others in Tampa doing the same.</h2>
                <hr style="border:1px solid white;">
                <div class="sub-heading">
                    <p class="mb-5">
                        ✓ Love well the neighborhoods where you live<br>
                        ✓ Get training to multiply disciples & churches like Jesus<br>
                        ✓ Meet and connect with practitioners near you<br>
                    </p>
                    <p><a href="#section-contact" role="button" class="btn smoothscroll pb_outline-light btn-xl pb_font-13 p-4 rounded-0 pb_letter-spacing-2">Get Started</a></p>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- END Hero section -->

<!-- why -->
<section class="pb_section pb_section_v1" data-section="about" id="section-about">
    <div class="container">
        <div class="row justify-content-md-center text-center mb-5">
            <div class="col-lg-9">
                <p><img src="<?php echo trailingslashit( plugin_dir_url( __FILE__ ) ) ?>assets/images/broken-link.png" /></p>
                <h1 class="mt-0 heading-border-top font-weight-normal">Christianity as usual is <span style="text-decoration:underline">not working</span></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 pr-md-5 pr-sm-0">
                <h2 class="mt-0 heading-border-top font-weight-normal">There's a reason...</h2>
                <p class="font-weight-bold">We’re not called to a church experience on Sunday.</p>
                <p class="font-weight-bold">We’re called to follow Jesus. To do what He did, think like He thought, and love like He loved.</p>
                <p class="font-weight-bold">It’s time to return to God’s design for discipleship, Church and life. It’s time to do what Jesus did and LOVE ONE ANOTHER.</p>
            </div>
            <div class="col-lg-7">
                <div class="images">
                    <img class="img1 img-fluid" src="<?php echo esc_url( trailingslashit( plugin_dir_url( __FILE__ ) ) ) ?>assets/temp_images/concert.png" alt="image">
                    <img class="img2" src="<?php echo esc_url( trailingslashit( plugin_dir_url( __FILE__ ) ) ) ?>assets/temp_images/downward_line.png" alt="image">
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-7">
                <a href="#section-contact" role="button" class="btn smoothscroll pb_outline-dark p-3 rounded-0 pb_font-13 pb_letter-spacing-2">Get Started</a>
            </div>
        </div>
    </div>
</section>
<!-- END section -->

<!-- scripture -->
<section class="pb_sm_py_cover text-center cover-bg-black cover-bg-opacity-4" style="background-image: url(<?php echo esc_url( trailingslashit( plugin_dir_url( __FILE__ ) ) ) ?>assets/images/1900x1200_img_3.jpg)">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <h2 class="heading mb-3 pb_color-light-opacity-8">Matthew 28.19-20</h2>
                <h3 class="pb_color-light-opacity-6">
                    Jesus said, "I have been given all authority in heaven and on earth. Therefore, go and make disciples of all the nations, baptizing them in the name of the Father and the Son and the Holy Spirit. Teach these new disciples to obey all the commands I have given you. And be sure of this: I am with you always, even to the end of the age."
                </h3>
            </div>
        </div>
    </div>
</section>
<!-- END section -->


<!-- Testimonies -->
<section class="pb_section pb_bg-half" data-section="areas" id="testimonies">
    <div class="container">
        <div class="row justify-content-md-center text-center mb-5">
            <div class="col-lg-9">
                <h1 class="mt-0 heading-border-top font-weight-normal">Following Jesus is simple. <br>Joining his movement should be too.</h1>
                <p>Millions around the world are rediscovering the path of discipleship and church that Jesus modeled.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="single-item pb_slide_v2">
                    <div>
                        <div class="d-lg-flex d-md-block slide_content">
                            <div class="pb_content-media" style="background-image: url(<?php echo esc_url( trailingslashit( plugin_dir_url( __FILE__ ) ) ) ?>assets/temp_images/map-la.png);"></div>
                            <div class="slide_content-text text-center">
                                <div class="pb_icon_v1"><i class="text-primary ion-earth" style="font-size:96px;"></i></div>
                                <h3 class="font-weight-normal mt-0 mb-4">B in Southern California</h3>
                                <p>PRAISE JESUS for new life in Christ & another baptism! Our Orange County teammate Tim H offered prayer to “B” (Iranian 🇮🇷) in his home. After B received prayer, Tim H shared the gospel & B repented of his sin and believed in Jesus for forgiveness.</p>
                                <p>On Friday night, Tim baptized B in front of their "Here To There Church" family at Corona Del Mar Beach. B is being discipled in the Word as he grows in Christ & is part of this thriving community of believers in Irvine, CA.</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="d-lg-flex d-md-block slide_content">
                            <div class="pb_content-media" style="background-image: url(<?php echo esc_url( trailingslashit( plugin_dir_url( __FILE__ ) ) ) ?>assets/temp_images/map-mich.png);"></div>
                            <div class="slide_content-text text-center">
                                <div class="pb_icon_v1"><i class="text-primary ion-earth" style="font-size:96px;"></i></div>
                                <h3 class="font-weight-normal mt-0 mb-4">Kevin in Northern Michigan</h3>
                                <p>I thank God that His timing is so perfect and that He equipped me through His Holy Spirit.</p>
                                <p>I also thank Him for the men who shared the tools with me that they learned from Big Life. It has given me priceless information about how to talk to people and share the good news with them.</p>
                                <p>So, thank you to all of you who have had a part in helping change my life, from prayers, to those men who contacted me in prison and sent learning materials.</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="d-lg-flex d-md-block slide_content">
                            <div class="pb_content-media" style="background-image: url(<?php echo esc_url( trailingslashit( plugin_dir_url( __FILE__ ) ) ) ?>assets/temp_images/map-tampa.png);"></div>
                            <div class="slide_content-text text-center">
                                <div class="pb_icon_v1"><i class="text-primary ion-earth" style="font-size:96px;"></i></div>
                                <h3 class="font-weight-normal mt-0 mb-4">Amanda in Tampa</h3>
                                <p>Ms C has been attending our zoom "Unstuck Tuesday Home-church" for about 6 months now. We read the great commission as our vision weekly together. Ms C invited Miss M, her Jewish new believer friend to join. Ms M was touched by the Spirit to be baptized. After a few months Ms C & I baptized her with her family in attendance at the local beach in Tampa!!</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="d-lg-flex d-md-block slide_content">
                            <div class="pb_content-media" style="background-image: url(<?php echo esc_url( trailingslashit( plugin_dir_url( __FILE__ ) ) ) ?>assets/temp_images/map-socal.png);"></div>
                            <div class="slide_content-text text-center">
                                <div class="pb_icon_v1"><i class="text-primary ion-earth" style="font-size:96px;"></i></div>
                                <h3 class="font-weight-normal mt-0 mb-4">Shane in Southern California</h3>
                                <p>PRAISE JESUS! 60+ repented & were baptized in Huntington Beach last night!! One of the new leaders we’re discipling in Newport baptized 9 people!</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>
<!-- END section -->


<!-- join us -->
<section class="pb_sm_py_cover text-center cover-bg-black cover-bg-opacity-4" style="background-image: url(<?php echo esc_url( trailingslashit( plugin_dir_url( __FILE__ ) ) ) ?>assets/images/1900x1200_img_3.jpg)">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <h2 class="heading mb-3">Join Us</h2>
                <p class="sub-heading mb-5 pb_color-light-opacity-8">Take a step. Reach out and find out what we are about.</p>
                <p><a href="#section-contact" role="button" class="btn smoothscroll pb_outline-light p-3 rounded-0 pb_font-13 pb_letter-spacing-2">Get Started</a></p>
            </div>
        </div>
    </div>
</section>
<!-- END section -->


<!-- FAQ's -->
<section class="pb_section bg-light">
    <div class="container">
        <div class="row justify-content-md-center text-center mb-5">
            <div class="col-lg-9">
                <h1 class="mt-0 heading-border-top font-weight-normal">FAQ's</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg">

                <div class="media pb_media_v1 mb-5">
                    <div class="icon border border-gray rounded-circle d-flex mr-3 display-4 text-primary"><i class="ion-person" style="font-size:64px;"></i></div>
                    <div class="media-body">
                        <h3 class="mt-0 pb_font-17">Who are you?</h3>
                        <p class="pb_font-14">We are groups of individuals and disciple-making practitioners all over the world who love Jesus, seek to follow his commands and live out the Great Commission as disciples and simple churches. (Matthew 28.19-20).</p>
                    </div>
                </div>

            </div>
            <div class="col-lg">
                <div class="media pb_media_v1 mb-5">
                    <div class="icon border border-gray rounded-circle d-flex mr-3 display-4 text-primary"><i class="ion-ios-lightbulb" style="font-size:64px;"></i></div>
                    <div class="media-body">
                        <h3 class="mt-0 pb_font-17">Who's the leader?</h3>
                        <p class="pb_font-14">Jesus. He has been given all authority (Matthew 28:18-20) and is the head of the Church (Colossians 1:18)</p>
                    </div>
                </div>
            </div>

            <div class="col-lg">
                <div class="media pb_media_v1 mb-5">

                    <div class="icon border border-gray rounded-circle d-flex mr-3 display-4 text-primary"><i class="ion-heart" style="font-size:64px;"></i></div>
                    <div class="media-body">
                        <h3 class="mt-0 pb_font-17">Why focus on "love one another"?</h3>
                        <p class="pb_font-14">This was Jesus’ new command that he expected all of his followers to obey (John 15:9-17). As Christians, it should be the single greatest character quality that we demonstrate to our world.</p>
                    </div>
                </div>
            </div>
            <div class="w-100"></div>
            <div class="col-lg">

                <div class="media pb_media_v1 mb-5">
                    <div class="icon border border-gray rounded-circle d-flex mr-3 display-4 text-primary"><i class="ion-android-home" style="font-size:64px;"></i></div>
                    <div class="media-body">
                        <h3 class="mt-0 pb_font-17">Is Love One Another a church?</h3>
                        <p class="pb_font-14">Yes and No: We’re not “a” specific church, but we’re “the” universal church. That is, we are all followers of Jesus who seek to connect, communicate and collaborate as we all follow his commands and live the way he lived. We all share the common bond of faith in him. We are also a network of decentralized, organic churches that meet in homes, businesses and other places, and then those simple churches are connected at the city level. Our focus is multiplying disciples who come together as the church in their community.</p>
                    </div>
                </div>

            </div>
            <div class="col-lg">
                <div class="media pb_media_v1 mb-5">
                    <div class="icon border border-gray rounded-circle d-flex mr-3 display-4 text-primary"><i class="ion-ios-flame" style="font-size:64px;"></i></div>
                    <div class="media-body">
                        <h3 class="mt-0 pb_font-17">Who's sponsoring this?</h3>
                        <p class="pb_font-14">There is no single organization or denomination overseeing this effort. We are all from varied Christian backgrounds and perspectives, operating in unity with Jesus as our king. We do have the common thread of desiring to see God’s Kingdom transform our communities through the multiplication of disciples and simple churches.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg">
                <div class="media pb_media_v1 mb-5">
                    <div class="icon border border-gray rounded-circle d-flex mr-3 display-4 text-primary"><i class="ion-map" style="font-size:64px;"></i></div>
                    <div class="media-body">
                        <h3 class="mt-0 pb_font-17">Where are you located?</h3>
                        <p class="pb_font-14">Nowhere, and everywhere. We’re spread all over the globe, though this site is focusing on disciple-makers in North America. We’re in many major cities across the US and Canada. You can contact us if you would like to get connected to any practitioners of disciple-making and church planting movements near you.</p>
                    </div>
                </div>
            </div>
            <div class="w-100"></div>
            <div class="col-lg">

                <div class="media pb_media_v1 mb-5">
                    <div class="icon border border-gray rounded-circle d-flex mr-3 display-4 text-primary"><i class="ion-android-people" style="font-size:64px;"></i></div>
                    <div class="media-body">
                        <h3 class="mt-0 pb_font-17">What do you mean by "disciple-making"?</h3>
                        <p class="pb_font-14">Disciple-making is the intentional effort to equip someone to follow Jesus and obey his commands and actively disciple another person. We like to say that a disciple is a person who hears God’s voice, obeys his commands, and shares them with others.</p>
                    </div>
                </div>

            </div>
            <div class="col-lg">
                <div class="media pb_media_v1 mb-5">
                    <div class="icon border border-gray rounded-circle d-flex mr-3 display-4 text-primary"><i class="ion-ios-infinite" style="font-size:64px;"></i></div>
                    <div class="media-body">
                        <h3 class="mt-0 pb_font-17">What do you mean by "movement"?</h3>
                        <p class="pb_font-14">A movement is network of disciples and disciple-making simple churches that demonstrate generational growth rapidly and consistently. In terms of size/description, a typical movement encompasses 1,000+ disciples and/or 100+ churches.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg">
                <div class="media pb_media_v1 mb-5">

                    <div class="icon border border-gray rounded-circle d-flex mr-3 display-4 text-primary"><i class="ion-ios-star" style="font-size:64px;"></i></div>
                    <div class="media-body">
                        <h3 class="mt-0 pb_font-17">Is this legit (or a cult)?</h3>
                        <p class="pb_font-14">We understand your concerns, but it’s really quite simple: We believe in Jesus and all that the Bible says he is. Since we’re not a corporate organization, there’s no building or centralized governing body to point you toward. Generally, we would all hold to the Lausanne Covenant in terms of our faith perspective.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End FAQ's -->


<!-- slider -->
<section>
    <div class="multiple-items pb_slide_v1">
        <?php foreach( $content['images']['slider'] as $item ) : ?>
            <div class="link-block">
                <a href="javascript:void(0)" class="link-block">
                    <img src="<?php echo esc_url( $item['img'] ) ?>" alt="" class="img-fluid">
                    <div class="slide-text">
                        <p><?php echo esc_html( $item['text'] ) ?></p>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<!-- END section -->


<!-- contact
================================================== -->
<section class="pb_section" data-section="contact" id="section-contact">
    <div class="container">

        <div class="row justify-content-md-center text-center mb-5">
            <div class="col-lg-7">
                <h2 class="mt-0 heading-border-top font-weight-normal">Get Started</h2>
                <p>No one has ever gone into heaven except the one who came from heaven—the Son of Man. Just as Moses lifted up the snake in the wilderness, so the Son of Man must be lifted up, that everyone who believes may have eternal life in him.</p>
            </div>
        </div>

        <?php if ( ! ( empty( $content['facebook_url'] ) && empty($content['twitter_url'] ) && empty($content['instagram_url'] ) ) ) : ?>
        <div class="row justify-content-md-center text-center mb-5">
            <h1 class="">Follow us on social media</h1>
        </div>
        <div class="row justify-content-md-center text-center mb-5">
            <p>
                <?php if ( ! empty( $content['facebook_url'] ?? '' ) ) : ?>
                    <button type="button" onclick="location.href = '<?php echo esc_html( $content['facebook_url'] ?? '' ) ?>'"><i class="fab fa-facebook"></i> Facebook</button>
                <?php endif; ?>
                <?php if ( ! empty( $content['twitter_url'] ?? '' ) ) : ?>
                    <button type="button" onclick="location.href = '<?php echo esc_html( $content['twitter_url'] ?? '' ) ?>'"><i class="fab fa-twitter"></i> Twitter</button>
                <?php endif; ?>
                <?php if ( ! empty( $content['instagram_url'] ?? '' ) ) : ?>
                    <button type="button" onclick="location.href = '<?php echo esc_html( $content['instagram_url'] ?? '' ) ?>'"><i class="fab fa-instagram"></i> Instagram</button>
                <?php endif; ?>

            </p>
        </div>
        <div class="row justify-content-md-center text-center mb-12">
            <h1 class="">Contact Us</h1>
        </div>
        <?php endif; ?>

        <div class="row justify-content-md-center text-center">
            <div id="section-name" class="w-100">
                <label for="name" class="input-label label-name">Name *
                    <input type="text" id="contact-name" name="name" class="input-text input-name" value="" required="required" ></label>
                <span id="contact-name-error" class="form-error">You're name is required.</span>
            </div>

            <div id="section-email" class="w-100">
                <label for="email" class="input-label label-email">Email *
                    <input type="email" id="contact-email" name="email" class="input-text input-email" value="" >
                    <input type="email" id="contact-e2" name="email2" class="input-text email" value="" required="required" >
                </label>
                <span id="contact-email-error" class="form-error">You're email is required.</span>
            </div>

            <div id="section-phone" class="w-100">
                <label for="phone" class="input-label">Phone *
                    <input type="tel" id="contact-phone" name="phone" class="input-text input-phone" value="" required="required" ></label>
                <span id="contact-phone-error" class="form-error">You're phone is required.</span>
            </div>

            <div id="section-comment" class="w-100">
                <label for="comment" class="input-label">Comment<br>
                    <textarea id="contact-comment" name="comment" class="input-text" value=""></textarea>
                </label>
            </div>

            <div id="submit-button-container" class="w-100">
                <span style="color:red" class="form-submit-error"></span>
                <button type="button" class="submit-button ignore" id="submit-button-contact" disabled>Submit</button> <span class="loading-spinner"></span>
            </div>
        </div>

    </div>
</section>
<script>
    jQuery(document).ready(function(){
        // This is a form delay to discourage robots
        let counter = 8;
        let myInterval = setInterval(function () {
            let button = jQuery('#submit-button-contact')

            button.html( 'Available in ' + counter)
            --counter;

            if ( counter === 0 ) {
                clearInterval(myInterval);
                button.html( 'Submit' ).prop('disabled', false)
            }

        }, 1000);


        /* NEWSLETTER */
        let submit_button_newsletter = jQuery('#submit-button-newsletter')
        submit_button_newsletter.on('click', function(){
            let spinner = jQuery('.loading-spinner')
            spinner.addClass('active')
            submit_button_newsletter.prop('disabled', true)

            let honey = jQuery('#email').val()
            if ( honey ) {
                submit_button_newsletter.html('Shame, shame, shame. We know your name ... ROBOT!').prop('disabled', true )
                spinner.removeClass('active')
                return;
            }

            let fname_input = jQuery('#newsletter-fname')
            let fname = fname_input.val()
            if ( ! fname ) {
                jQuery('#name-error').show()
                submit_button_newsletter.removeClass('loading')
                fname_input.focus(function(){
                    jQuery('#name-error').hide()
                })
                submit_button_newsletter.prop('disabled', false)
                spinner.removeClass('active')
                return;
            }

            let lname_input = jQuery('#newsletter-lname')
            let lname = fname_input.val()
            if ( ! fname ) {
                jQuery('#name-error').show()
                submit_button_newsletter.removeClass('loading')
                lname_input.focus(function(){
                    jQuery('#name-error').hide()
                })
                submit_button_newsletter.prop('disabled', false)
                spinner.removeClass('active')
                return;
            }

            let email_input = jQuery('#newsletter-e2')
            let email = email_input.val()
            if ( ! email ) {
                jQuery('#email-error').show()
                submit_button_newsletter.removeClass('loading')
                email_input.focus(function(){
                    jQuery('#email-error').hide()
                })
                submit_button_newsletter.prop('disabled', false)
                spinner.removeClass('active')
                return;
            }

            let form_data = {
                fname: fname,
                lname: lname,
                email: email
            }

            jQuery.ajax({
                type: "POST",
                data: JSON.stringify({ action: 'newsletter', parts: jsObject.parts, data: form_data }),
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                url: jsObject.root + jsObject.parts.root + '/v1/' + jsObject.parts.type,
                beforeSend: function (xhr) {
                    xhr.setRequestHeader('X-WP-Nonce', jsObject.nonce )
                }
            })
                .done(function(response){
                    jQuery('.loading-spinner').removeClass('active')
                    console.log(response)

                })
                .fail(function(e) {
                    console.log(e)
                    jQuery('#error').html(e)
                })
        })

        /* CONTACT FORM */
        let submit_button_contact = jQuery('#submit-button-contact')
        submit_button_contact.on('click', function(){
            let spinner = jQuery('.loading-spinner')
            spinner.addClass('active')
            submit_button_contact.prop('disabled', true)

            let honey = jQuery('#contact-email').val()
            if ( honey ) {
                submit_button_contact.html('Shame, shame, shame. We know your name ... ROBOT!').prop('disabled', true )
                spinner.removeClass('active')
                return;
            }

            let name_input = jQuery('#contact-name')
            let name = name_input.val()
            if ( ! name ) {
                jQuery('#name-error').show()
                submit_button_contact.removeClass('loading')
                name_input.focus(function(){
                    jQuery('#name-error').hide()
                })
                submit_button_contact.prop('disabled', false)
                spinner.removeClass('active')
                return;
            }

            let email_input = jQuery('#contact-e2')
            let email = email_input.val()
            if ( ! email ) {
                jQuery('#email-error').show()
                submit_button_contact.removeClass('loading')
                email_input.focus(function(){
                    jQuery('#email-error').hide()
                })
                submit_button_contact.prop('disabled', false)
                spinner.removeClass('active')
                return;
            }

            let phone_input = jQuery('#contact-phone')
            let phone = phone_input.val()
            if ( ! phone ) {
                jQuery('#phone-error').show()
                submit_button_contact.removeClass('loading')
                email_input.focus(function(){
                    jQuery('#phone-error').hide()
                })
                submit_button_contact.prop('disabled', false)
                spinner.removeClass('active')
                return;
            }

            let comment = jQuery('#contact-comment').val()

            let form_data = {
                name: name,
                email: email,
                phone: phone,
                comment: comment
            }

            jQuery.ajax({
                type: "POST",
                data: JSON.stringify({ action: 'followup', parts: jsObject.parts, data: form_data }),
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                url: jsObject.root + jsObject.parts.root + '/v1/' + jsObject.parts.type,
                beforeSend: function (xhr) {
                    xhr.setRequestHeader('X-WP-Nonce', jsObject.nonce )
                }
            })
                .done(function(response){
                    jQuery('.loading-spinner').removeClass('active')
                    console.log(response)
                    jQuery('#contact-form').html('<span class="input-label">Sent. Thank You!</span>')
                })
                .fail(function(e) {
                    console.log(e)
                    jQuery('#error').html(e)
                })
        })

    })
</script>
<style>
    #contact-email {display:none;}
    .form-error {
        display:none;
    }
    input.input-text {
        display: block;
        padding: .5rem;
        background-color: white;
        border: 1px solid black;
        outline: none;
        color: #151515;
        font-family: metropolis-semibold, sans-serif;
        font-size: 1.5rem;
        line-height: 3rem;
        width: 700px !important;
        max-width: 100%;
        -webkit-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }
    textarea.input-text {
        display: block;
        padding: .5rem;
        background-color: white;
        border: 1px solid black;
        outline: none;
        color: #151515;
        font-family: metropolis-semibold, sans-serif;
        font-size: 1.5rem;
        line-height: 3rem;
        width: 700px !important;
        max-width: 100%;
        -webkit-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    @media only screen and (max-width: 700px) {
        input.input-text {
            width: 100% !important;
            max-width: 100%;
        }
        textarea.input-text {
            width: 100% !important;
            max-width: 100%;
        }
    }

    .submit-button {
        padding: 1.5rem;
        font-size: 1rem;
    }
    .form-error {
        color: red;
    }

    /* begin spinner */
    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
    .loading-spinner.active {
        border-radius: 50%;
        width: 24px;
        height: 24px;
        border: 0.25rem solid #919191;
        border-top-color: black;
        animation: spin 1s infinite linear;
        display: inline-block;
    }
    /* end spinner */

</style>


<footer class="pb_footer bg-light" role="contentinfo">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#" class="p-2"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="p-2"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="p-2"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <p class="pb_font-14">&copy; <script>document.write(new Date().getFullYear())</script>. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>

<!-- loader -->
<div id="pb_loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#FDA04F"/></svg></div>
