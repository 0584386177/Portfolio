<?php $__env->startSection('title', 'About || techguru || IT Solutions & Technology Laravel Template'); ?>


<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginal666135ff4889d72da89d7606601ff8e6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal666135ff4889d72da89d7606601ff8e6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.strickyHeader','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('strickyHeader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal666135ff4889d72da89d7606601ff8e6)): ?>
<?php $attributes = $__attributesOriginal666135ff4889d72da89d7606601ff8e6; ?>
<?php unset($__attributesOriginal666135ff4889d72da89d7606601ff8e6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal666135ff4889d72da89d7606601ff8e6)): ?>
<?php $component = $__componentOriginal666135ff4889d72da89d7606601ff8e6; ?>
<?php unset($__componentOriginal666135ff4889d72da89d7606601ff8e6); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginalf8d4ea307ab1e58d4e472a43c8548d8e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf8d4ea307ab1e58d4e472a43c8548d8e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.page-header','data' => ['title' => 'About Us','subtitle' => 'About Us']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('page-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'About Us','subtitle' => 'About Us']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf8d4ea307ab1e58d4e472a43c8548d8e)): ?>
<?php $attributes = $__attributesOriginalf8d4ea307ab1e58d4e472a43c8548d8e; ?>
<?php unset($__attributesOriginalf8d4ea307ab1e58d4e472a43c8548d8e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf8d4ea307ab1e58d4e472a43c8548d8e)): ?>
<?php $component = $__componentOriginalf8d4ea307ab1e58d4e472a43c8548d8e; ?>
<?php unset($__componentOriginalf8d4ea307ab1e58d4e472a43c8548d8e); ?>
<?php endif; ?>


        <!--Page Header End-->

        <!--About Four Start-->
        <section class="about-four">
            <div class="about-four__bg-shape"
                style="background-image: url(<?php echo e(asset('assets/images/shapes/about-four-bg-shape.png')); ?>);"></div>
            <div class="about-four__bg-shape-2"
                style="background-image: url(<?php echo e(asset('assets/images/shapes/about-four-bg-shape-2.png')); ?>);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-four__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="about-four__img-box">
                                <div class="about-four__img">
                                    <img src="<?php echo e(asset('assets/images/resources/about-four-img-1.jpg')); ?>" alt="">
                                </div>
                                <div class="about-four__img-2">
                                    <img src="<?php echo e(asset('assets/images/resources/about-four-img-2.jpg')); ?>" alt="">
                                </div>
                                <div class="about-four__experience">
                                    <div class="about-four__experience-inner">
                                        <div class="about-four__experience-count-box">
                                            <h3 class="odometer" data-count="25">00</h3>
                                        </div>
                                        <p class="about-four__experience-count-text">Years of
                                            <br> Experience</p>
                                    </div>
                                </div>
                            </div>
                            <div class="about-four__client-box">
                                <ul class="about-four__client-img-list list-unstyled">
                                    <li>
                                        <div class="about-four__client-img">
                                            <img src="<?php echo e(asset('assets/images/resources/about-four-client-img-1-1.jpg')); ?>" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="about-four__client-img">
                                            <img src="<?php echo e(asset('assets/images/resources/about-four-client-img-1-2.jpg')); ?>" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="about-four__client-img">
                                            <img src="<?php echo e(asset('assets/images/resources/about-four-client-img-1-3.jpg')); ?>" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#"><span class="icon-plus"></span></a>
                                    </li>
                                </ul>
                                <p class="about-four__client-text"><span class="odometer"
                                        data-count="120">00</span><span>K</span> Satisfied Client</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-four__right">
                            <div class="section-title text-left sec-title-animation animation-style2">
                                <div class="section-title__tagline-box">
                                    <div class="section-title__tagline-shape-1"></div>
                                    <span class="section-title__tagline">About Us</span>
                                    <div class="section-title__tagline-shape-2"></div>
                                </div>
                                <h2 class="section-title__title title-animation">Supercharge <span>Your
                                        Business</span><br><span>Growth with Our</span>
                                    Cutting-Edge IT<br> Solutions</h2>
                            </div>
                            <p class="about-four__text">Transform your business with our innovative IT solutions,
                                tailored to address your unique challenges and drive growth in today’s digital
                                landscape.</p>
                            <div class="about-four__points-box">
                                <ul class="about-four__points-list list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-tick-inside-circle"></span>
                                        </div>
                                        <p>Innovative IT Solutions Expert<br> Support & Consulting</p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-tick-inside-circle"></span>
                                        </div>
                                        <p>Cloud Solutions for Modern<br> Enterprises</p>
                                    </li>
                                </ul>
                                <ul class="about-four__points-list about-four__points-list-2 list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-tick-inside-circle"></span>
                                        </div>
                                        <p>Seamless Digital<br> Transformation AI-Driven <br>Business Automation</p>
                                    </li>
                                    <li>
                                        <div class="about-four__points-list-img">
                                            <img src="<?php echo e(asset('assets/images/resources/about-four-points-list-img.jpg')); ?>" alt="">
                                        </div>
                                        <div class="about-four__points-list-content">
                                            <h5>Thomas Alison</h5>
                                            <p>Founder & SEO</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <ul class="about-four__points-2 list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-technical-support"></span>
                                    </div>
                                    <div class="content">
                                        <h5>Innovative IT Solutions</h5>
                                        <p>Stay ahead with cutting-edge technology tailored to <br>your business needs.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-real-estate-agency"></span>
                                    </div>
                                    <div class="content">
                                        <h5>Cloud Solutions </h5>
                                        <p>Secure, scalable, and efficient cloud services to power<br> your growth.
                                            Cloud Solutions for Modern Enterprises</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Four End-->

        <!--Why Choose Three Start-->
        <section class="why-choose-three">
            <div class="why-choose-three__bg-shape float-bob-x"
                style="background-image: url(<?php echo e(asset('assets/images/shapes/why-choose-three-bg-shape.png')); ?>);"></div>
            <div class="why-choose-three__shape-1"></div>
            <div class="why-choose-three__shape-2"></div>
            <div class="container">
                <div class="section-title text-center sec-title-animation animation-style1">
                    <div class="section-title__tagline-box">
                        <div class="section-title__tagline-shape-1"></div>
                        <span class="section-title__tagline">Why Choose Us</span>
                        <div class="section-title__tagline-shape-2"></div>
                    </div>
                    <h2 class="section-title__title title-animation">Your Business with <span>Reliable &
                        </span><br><span>Future-Ready</span>
                        IT Solutions</h2>
                </div>
                <div class="row">
                    <div class="col-xl-3 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="why-choose-three__single-left">
                            <div class="why-choose-three__single">
                                <div class="why-choose-three__icon">
                                    <span class="icon-quality"></span>
                                </div>
                                <h3 class="why-choose-three__title"> Unmatched Quality</h3>
                                <div class="why-choose-three__bdr"></div>
                                <p class="why-choose-three__text">We deliver exceptional products and services that
                                    exceed
                                    expectations every time.</p>
                            </div>
                            <div class="why-choose-three__single">
                                <div class="why-choose-three__icon">
                                    <span class="icon-team"></span>
                                </div>
                                <h3 class="why-choose-three__title">Trusted Expertise</h3>
                                <div class="why-choose-three__bdr"></div>
                                <p class="why-choose-three__text">Backed by years of experience and a proven track
                                    record,
                                    we
                                    are your reliable partner for success.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="why-choose-three__img">
                            <img src="<?php echo e(asset('assets/images/resources/why-choose-three-img.jpg')); ?>" alt="">
                        </div>
                    </div>
                    <div class="col-xl-3 wow fadeInRight" data-wow-delay="100ms">
                        <div class="why-choose-three__single-left">
                            <div class="why-choose-three__single">
                                <div class="why-choose-three__icon">
                                    <span class="icon-customer-centricity"></span>
                                </div>
                                <h3 class="why-choose-three__title"> User-Centric Approach</h3>
                                <div class="why-choose-three__bdr"></div>
                                <p class="why-choose-three__text">Your satisfaction is our priority, and we tailor
                                    solutions to meet your unique needs. Your happiness comes first.</p>
                            </div>
                            <div class="why-choose-three__single">
                                <div class="why-choose-three__icon">
                                    <span class="icon-support"></span>
                                </div>
                                <h3 class="why-choose-three__title">Trusted by Many</h3>
                                <div class="why-choose-three__bdr"></div>
                                <p class="why-choose-three__text">We have built a strong reputation over the years by
                                    consistently delivering excellent results.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Why Choose Two End-->

        <!-- Counter Two Start -->
        <section class="counter-two">
            <div class="counter-two__bg-shape"
                style="background-image: url(<?php echo e(asset('assets/images/shapes/counter-two-bg-shape.png')); ?>);"></div>
            <div class="container">
                <div class="row">
                    <!--Counter Two Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="counter-two__single">
                            <div class="counter-two__icon-inner">
                                <div class="counter-two__icon">
                                    <span class="icon-trophy"></span>
                                </div>
                            </div>
                            <div class="counter-two__content">
                                <div class="counter-two__count-box">
                                    <h3 class="odometer" data-count="120">00</h3>
                                    <span> </span>
                                </div>
                                <p class="counter-two__text">Creative Plus award</p>
                            </div>
                        </div>
                    </div>
                    <!--Counter Two Single End-->
                    <!--Counter Two Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="counter-two__single">
                            <div class="counter-two__icon-inner">
                                <div class="counter-two__icon">
                                    <span class="icon-user"></span>
                                </div>
                            </div>
                            <div class="counter-two__content">
                                <div class="counter-two__count-box">
                                    <h3 class="odometer" data-count="300">00</h3>
                                    <span> </span>
                                </div>
                                <p class="counter-two__text">Expert Team Members</p>
                            </div>
                        </div>
                    </div>
                    <!--Counter Two Single End-->
                    <!--Counter Two Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="counter-two__single">
                            <div class="counter-two__icon-inner">
                                <div class="counter-two__icon">
                                    <span class="icon-chat"></span>
                                </div>
                            </div>
                            <div class="counter-two__content">
                                <div class="counter-two__count-box">
                                    <h3 class="odometer" data-count="20">00</h3>
                                    <span>M</span>
                                </div>
                                <p class="counter-two__text">Happy Clients Review</p>
                            </div>
                        </div>
                    </div>
                    <!--Counter Two Single End-->
                    <!--Counter Two Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="counter-two__single">
                            <div class="counter-two__icon-inner">
                                <div class="counter-two__icon">
                                    <span class="icon-folder"></span>
                                </div>
                            </div>
                            <div class="counter-two__content">
                                <div class="counter-two__count-box">
                                    <h3 class="odometer" data-count="1.5">00</h3>
                                    <span>K</span>
                                </div>
                                <p class="counter-two__text">Project Completed</p>
                            </div>
                        </div>
                    </div>
                    <!--Counter Two Single End-->
                </div>
            </div>
        </section>
        <!-- Counter Two End -->

        <!-- Team Two Start -->
        <section class="team-two">
            <div class="team-two__bg-shape float-bob-y"
                style="background-image: url(<?php echo e(asset('assets/images/shapes/team-two-bg-shape.png')); ?>);">
            </div>
            <div class="team-two__shape-1"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="team-two__left">
                            <div class="section-title text-left sec-title-animation animation-style2">
                                <div class="section-title__tagline-box">
                                    <div class="section-title__tagline-shape-1"></div>
                                    <span class="section-title__tagline">Our Members</span>
                                    <div class="section-title__tagline-shape-2"></div>
                                </div>
                                <h2 class="section-title__title title-animation">Meet Our Team. <span>Get to
                                    </span><br><span>Know the Talented</span>
                                    Minds Behind Our Team</h2>
                            </div>
                            <p class="team-two__text">Our dedicated team combines expertise, <br>creativity, and passion
                                to
                                deliver exceptional<br> results and ensure your satisfaction every step<br> of the way.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="team-two__right">
                            <div class="team-two__carousel owl-theme owl-carousel">
                                <!--Team Two Single Start-->
                                <div class="item">
                                    <div class="team-two__single">
                                        <div class="team-two__img-box">
                                            <div class="team-two__img">
                                                <img src="<?php echo e(asset('assets/images/team/team-2-1.jpg')); ?>" alt="">
                                            </div>
                                            <div class="team-two__social">
                                                <a href="#"><span class="icon-facebook"></span></a>
                                                <a href="#"><span class="icon-dribble"></span></a>

                                                <a href="#"><span class="icon-linkedin"></span></a>
                                            </div>
                                            <div class="team-two__title-box">
                                                <h3><a href="<?php echo e(route('team-details')); ?>">Sophia Bennett</a></h3>
                                                <p>CEO & Founder</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Team Two Single End-->
                                <!--Team Two Single Start-->
                                <div class="item">
                                    <div class="team-two__single">
                                        <div class="team-two__img-box">
                                            <div class="team-two__img">
                                                <img src="<?php echo e(asset('assets/images/team/team-2-2.jpg')); ?>" alt="">
                                            </div>
                                            <div class="team-two__social">
                                                <a href="#"><span class="icon-facebook"></span></a>
                                                <a href="#"><span class="icon-dribble"></span></a>

                                                <a href="#"><span class="icon-linkedin"></span></a>
                                            </div>
                                            <div class="team-two__title-box">
                                                <h3><a href="<?php echo e(route('team-details')); ?>">Liam Johnson</a></h3>
                                                <p>Operations Manager</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Team Two Single End-->
                                <!--Team Two Single Start-->
                                <div class="item">
                                    <div class="team-two__single">
                                        <div class="team-two__img-box">
                                            <div class="team-two__img">
                                                <img src="<?php echo e(asset('assets/images/team/team-2-3.jpg')); ?>" alt="">
                                            </div>
                                            <div class="team-two__social">
                                                <a href="#"><span class="icon-facebook"></span></a>
                                                <a href="#"><span class="icon-dribble"></span></a>

                                                <a href="#"><span class="icon-linkedin"></span></a>
                                            </div>
                                            <div class="team-two__title-box">
                                                <h3><a href="<?php echo e(route('team-details')); ?>">Ethan Miller</a></h3>
                                                <p>Lead Designer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Team Two Single End-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team Two End -->

        <!-- Process One Start -->
        <section class="process-one">
            <div class="process-one__shape-1">
                <img src="<?php echo e(asset('assets/images/shapes/process-one-shape-1.png')); ?>" alt="">
            </div>
            <div class="process-one__shape-2"></div>
            <div class="process-one__shape-3"></div>
            <div class="process-one__bg-shape"
                style="background-image: url(<?php echo e(asset('assets/images/shapes/process-one-bg-shape.png')); ?>);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="process-one__left">
                            <div class="section-title text-left sec-title-animation animation-style2">
                                <div class="section-title__tagline-box">
                                    <div class="section-title__tagline-shape-1"></div>
                                    <span class="section-title__tagline">Working Process</span>
                                    <div class="section-title__tagline-shape-2"></div>
                                </div>
                                <h2 class="section-title__title title-animation">How We've
                                    <span>Empowered</span><br><span>Businesses with Innovative</span><br>Tech Solutions
                                </h2>
                            </div>
                            <p class="process-one__text">From personalized solutions to expert<br> execution, we
                                prioritize
                                quality, reliability, and<br> customer satisfaction </p>
                            <div class="process-one__btn-box">
                                <a href="#" class="thm-btn">Get in Touch<span class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="process-one__right">
                            <ul class="process-one__process-list list-unstyled">
                                <li>
                                    <div class="process-one__process-count"></div>
                                    <div class="process-one__process-content">
                                        <h3 class="process-one__process-title">Discovery & Strategy</h3>
                                        <p class="process-one__process-text">We analyze your business needs,<br>
                                            identify
                                            challenges, and craft a<br> strategic roadmap for the best IT<br> solutions.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="process-one__process-content">
                                        <h3 class="process-one__process-title">Development</h3>
                                        <p class="process-one__process-text">Our expert team designs, develops,<br> and
                                            integrates cutting-edge<br> technology tailored to your goals.</p>
                                    </div>
                                    <div class="process-one__process-count"></div>
                                </li>
                                <li>
                                    <div class="process-one__process-count"></div>
                                    <div class="process-one__process-content">
                                        <h3 class="process-one__process-title">Optimization & Support</h3>
                                        <p class="process-one__process-text">We ensure seamless performance with<br>
                                            continuous improvements,<br> maintenance, and dedicated support.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Process One End -->

        <!-- Testimonial Two Start -->
        <section class="testimonial-two">
            <div class="testimonial-two__shape-1"></div>
            <div class="testimonial-two__shape-2"></div>
            <div class="container">
                <div class="section-title text-center sec-title-animation animation-style1">
                    <div class="section-title__tagline-box">
                        <div class="section-title__tagline-shape-1"></div>
                        <span class="section-title__tagline">Testimonials</span>
                        <div class="section-title__tagline-shape-2"></div>
                    </div>
                    <h2 class="section-title__title title-animation">Customer Experiences <br> That <span>Speak
                            Volumes</span></h2>
                </div>
                <div class="testimonial-two__carousel owl-theme owl-carousel">
                    <!-- Testimonial Two Single Start -->
                    <div class="item">
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__single-inner">
                                <div class="testimonial-two__star">
                                    <span class="icon-pointed-star"></span>
                                    <span class="icon-pointed-star"></span>
                                    <span class="icon-pointed-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                </div>
                                <p class="testimonial-two__text">Absolutely fantastic experience! The team exceeded our
                                    expectations and delivered a solution that perfectly met our needs. Their attention
                                    to
                                    detail and commitment to quality is unmatched.</p>
                            </div>
                            <div class="testimonial-two__client-info">
                                <div class="testimonial-two__client-img">
                                    <img src="<?php echo e(asset('assets/images/testimonial/testimonial-2-1.jpg')); ?>" alt="">
                                </div>
                                <div class="testimonial-two__client-content">
                                    <h4 class="testimonial-two__client-name"><a href="<?php echo e(route('testimonials')); ?>">Thomas
                                            Alison</a></h4>
                                    <p class="testimonial-two__sub-title">UI/UX Designer</p>
                                </div>
                            </div>
                            <div class="testimonial-two__quote">
                                <span class="icon-right-quote"></span>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Two Single End -->
                    <!-- Testimonial Two Single Start -->
                    <div class="item">
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__single-inner">
                                <div class="testimonial-two__star">
                                    <span class="icon-pointed-star"></span>
                                    <span class="icon-pointed-star"></span>
                                    <span class="icon-pointed-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                </div>
                                <p class="testimonial-two__text">Absolutely fantastic experience! The team exceeded our
                                    expectations and delivered a solution that perfectly met our needs. Their attention
                                    to
                                    detail and commitment to quality is unmatched.</p>
                            </div>
                            <div class="testimonial-two__client-info">
                                <div class="testimonial-two__client-img">
                                    <img src="<?php echo e(asset('assets/images/testimonial/testimonial-2-2.jpg')); ?>" alt="">
                                </div>
                                <div class="testimonial-two__client-content">
                                    <h4 class="testimonial-two__client-name"><a href="<?php echo e(route('testimonials')); ?>">Sarah
                                            Williams</a></h4>
                                    <p class="testimonial-two__sub-title">Marketing Manger</p>
                                </div>
                            </div>
                            <div class="testimonial-two__quote">
                                <span class="icon-right-quote"></span>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Two Single End -->
                    <!-- Testimonial Two Single Start -->
                    <div class="item">
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__single-inner">
                                <div class="testimonial-two__star">
                                    <span class="icon-pointed-star"></span>
                                    <span class="icon-pointed-star"></span>
                                    <span class="icon-pointed-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                </div>
                                <p class="testimonial-two__text">Absolutely fantastic experience! The team exceeded our
                                    expectations and delivered a solution that perfectly met our needs. Their attention
                                    to
                                    detail and commitment to quality is unmatched.</p>
                            </div>
                            <div class="testimonial-two__client-info">
                                <div class="testimonial-two__client-img">
                                    <img src="<?php echo e(asset('assets/images/testimonial/testimonial-2-3.jpg')); ?>" alt="">
                                </div>
                                <div class="testimonial-two__client-content">
                                    <h4 class="testimonial-two__client-name"><a href="<?php echo e(route('testimonials')); ?>">James
                                            Anderson</a></h4>
                                    <p class="testimonial-two__sub-title">Product Designer</p>
                                </div>
                            </div>
                            <div class="testimonial-two__quote">
                                <span class="icon-right-quote"></span>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Two Single End -->
                    <!-- Testimonial Two Single Start -->
                    <div class="item">
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__single-inner">
                                <div class="testimonial-two__star">
                                    <span class="icon-pointed-star"></span>
                                    <span class="icon-pointed-star"></span>
                                    <span class="icon-pointed-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                </div>
                                <p class="testimonial-two__text">Absolutely fantastic experience! The team exceeded our
                                    expectations and delivered a solution that perfectly met our needs. Their attention
                                    to
                                    detail and commitment to quality is unmatched.</p>
                            </div>
                            <div class="testimonial-two__client-info">
                                <div class="testimonial-two__client-img">
                                    <img src="<?php echo e(asset('assets/images/testimonial/testimonial-2-1.jpg')); ?>" alt="">
                                </div>
                                <div class="testimonial-two__client-content">
                                    <h4 class="testimonial-two__client-name"><a href="<?php echo e(route('testimonials')); ?>">Thomas
                                            Alison</a></h4>
                                    <p class="testimonial-two__sub-title">UI/UX Designer</p>
                                </div>
                            </div>
                            <div class="testimonial-two__quote">
                                <span class="icon-right-quote"></span>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Two Single End -->
                    <!-- Testimonial Two Single Start -->
                    <div class="item">
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__single-inner">
                                <div class="testimonial-two__star">
                                    <span class="icon-pointed-star"></span>
                                    <span class="icon-pointed-star"></span>
                                    <span class="icon-pointed-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                </div>
                                <p class="testimonial-two__text">Absolutely fantastic experience! The team exceeded our
                                    expectations and delivered a solution that perfectly met our needs. Their attention
                                    to
                                    detail and commitment to quality is unmatched.</p>
                            </div>
                            <div class="testimonial-two__client-info">
                                <div class="testimonial-two__client-img">
                                    <img src="<?php echo e(asset('assets/images/testimonial/testimonial-2-2.jpg')); ?>" alt="">
                                </div>
                                <div class="testimonial-two__client-content">
                                    <h4 class="testimonial-two__client-name"><a href="<?php echo e(route('testimonials')); ?>">Sarah
                                            Williams</a></h4>
                                    <p class="testimonial-two__sub-title">Marketing Manger</p>
                                </div>
                            </div>
                            <div class="testimonial-two__quote">
                                <span class="icon-right-quote"></span>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Two Single End -->
                    <!-- Testimonial Two Single Start -->
                    <div class="item">
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__single-inner">
                                <div class="testimonial-two__star">
                                    <span class="icon-pointed-star"></span>
                                    <span class="icon-pointed-star"></span>
                                    <span class="icon-pointed-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                </div>
                                <p class="testimonial-two__text">Absolutely fantastic experience! The team exceeded our
                                    expectations and delivered a solution that perfectly met our needs. Their attention
                                    to
                                    detail and commitment to quality is unmatched.</p>
                            </div>
                            <div class="testimonial-two__client-info">
                                <div class="testimonial-two__client-img">
                                    <img src="<?php echo e(asset('assets/images/testimonial/testimonial-2-3.jpg')); ?>" alt="">
                                </div>
                                <div class="testimonial-two__client-content">
                                    <h4 class="testimonial-two__client-name"><a href="<?php echo e(route('testimonials')); ?>">James
                                            Anderson</a></h4>
                                    <p class="testimonial-two__sub-title">Product Designer</p>
                                </div>
                            </div>
                            <div class="testimonial-two__quote">
                                <span class="icon-right-quote"></span>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Two Single End -->
                    <!-- Testimonial Two Single Start -->
                    <div class="item">
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__single-inner">
                                <div class="testimonial-two__star">
                                    <span class="icon-pointed-star"></span>
                                    <span class="icon-pointed-star"></span>
                                    <span class="icon-pointed-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                </div>
                                <p class="testimonial-two__text">Absolutely fantastic experience! The team exceeded our
                                    expectations and delivered a solution that perfectly met our needs. Their attention
                                    to
                                    detail and commitment to quality is unmatched.</p>
                            </div>
                            <div class="testimonial-two__client-info">
                                <div class="testimonial-two__client-img">
                                    <img src="<?php echo e(asset('assets/images/testimonial/testimonial-2-2.jpg')); ?>" alt="">
                                </div>
                                <div class="testimonial-two__client-content">
                                    <h4 class="testimonial-two__client-name"><a href="<?php echo e(route('testimonials')); ?>">Sarah
                                            Williams</a></h4>
                                    <p class="testimonial-two__sub-title">Marketing Manger</p>
                                </div>
                            </div>
                            <div class="testimonial-two__quote">
                                <span class="icon-right-quote"></span>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Two Single End -->
                </div>
            </div>
        </section>
        <!-- Testimonial Two End -->

        <!-- Newsletter Two Start -->
        

    <?php if (isset($component)) { $__componentOriginal8a8716efb3c62a45938aca52e78e0322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a8716efb3c62a45938aca52e78e0322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $attributes = $__attributesOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $component = $__componentOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__componentOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal20a8fd234fabfc5f0e64c45f7a5be70d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal20a8fd234fabfc5f0e64c45f7a5be70d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.mobileMenu','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('mobileMenu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal20a8fd234fabfc5f0e64c45f7a5be70d)): ?>
<?php $attributes = $__attributesOriginal20a8fd234fabfc5f0e64c45f7a5be70d; ?>
<?php unset($__attributesOriginal20a8fd234fabfc5f0e64c45f7a5be70d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal20a8fd234fabfc5f0e64c45f7a5be70d)): ?>
<?php $component = $__componentOriginal20a8fd234fabfc5f0e64c45f7a5be70d; ?>
<?php unset($__componentOriginal20a8fd234fabfc5f0e64c45f7a5be70d); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal5c70dfc01def73aae8627551511e0645 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5c70dfc01def73aae8627551511e0645 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.searchPopup','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('searchPopup'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5c70dfc01def73aae8627551511e0645)): ?>
<?php $attributes = $__attributesOriginal5c70dfc01def73aae8627551511e0645; ?>
<?php unset($__attributesOriginal5c70dfc01def73aae8627551511e0645); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5c70dfc01def73aae8627551511e0645)): ?>
<?php $component = $__componentOriginal5c70dfc01def73aae8627551511e0645; ?>
<?php unset($__componentOriginal5c70dfc01def73aae8627551511e0645); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal8b7fbfc2318ed7fe3b034b3da93b1083 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8b7fbfc2318ed7fe3b034b3da93b1083 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.scroll-to-top','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('scroll-to-top'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8b7fbfc2318ed7fe3b034b3da93b1083)): ?>
<?php $attributes = $__attributesOriginal8b7fbfc2318ed7fe3b034b3da93b1083; ?>
<?php unset($__attributesOriginal8b7fbfc2318ed7fe3b034b3da93b1083); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8b7fbfc2318ed7fe3b034b3da93b1083)): ?>
<?php $component = $__componentOriginal8b7fbfc2318ed7fe3b034b3da93b1083; ?>
<?php unset($__componentOriginal8b7fbfc2318ed7fe3b034b3da93b1083); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout4', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/khanhhoa/sites/techguru/resources/views/pages/about.blade.php ENDPATH**/ ?>