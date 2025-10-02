<?php $__env->startSection('title', 'Team Details || techguru || IT Solutions & Technology Laravel Template'); ?>
<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/module-css/skill.css')); ?>">
<?php $__env->stopPush(); ?>

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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.page-header','data' => ['title' => 'Team Details','subtitle' => 'Team Details']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('page-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Team Details','subtitle' => 'Team Details']); ?>
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

    <!--Team Details Start-->
    <section class="team-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="team-details__left">
                        <div class="team-details__img-box">
                            <div class="team-details__img">
                                <img src="<?php echo e(asset('assets/images/team/team-details-img-1.jpg')); ?>" alt="">
                            </div>
                            <div class="team-details__experience-box">
                                <div class="team-details__experience-icon">
                                    <img src="<?php echo e(asset('assets/images/icon/team-details-experience-icon.png')); ?>"
                                        alt="">
                                </div>
                                <h3 class="team-details__experience-title">12 Years <br>Experience</h3>
                                <p class="team-details__experience-text">crafting intuitive</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="team-details__right">
                        <h3 class="team-details__title">David Smith</h3>
                        <p class="team-details__sub-title">Professional UI/UX Design</p>
                        <p class="team-details__text">David Smith is a seasoned UI/UX designer with a keen eye for
                            detail and a passion for crafting seamless digital experiences. With years of experience
                            in user-centered design, he specializes in creating intuitive interfaces that enhance
                            usability and engagement.</p>
                        <div class="team-details__points-box">
                            <ul class="team-details__points list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-pin"></span>
                                    </div>
                                    <div class="content">
                                        <h5>Location</h5>
                                        <p>1629 N. Dixie Avenue,
                                            <br> Kentucky, 42701
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-graduation-cap"></span>
                                    </div>
                                    <div class="content">
                                        <h5>Education</h5>
                                        <p>Tel: <a href="tel:1200456789000"> 12 (00) 456 7890 00</a></p>
                                        <p>Mob: <a href="tel:9900567780"> 99 (00) 567 780</a></p>
                                    </div>
                                </li>
                            </ul>
                            <ul class="team-details__points list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-contact"></span>
                                    </div>
                                    <div class="content">
                                        <h5>Contact Info</h5>
                                        <p><a href="mailto:info@domain.com">info@domain.com</a></p>
                                        <p>Mob: <a href="tel:9900567780"> 99 (00) 567 780</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-clock"></span>
                                    </div>
                                    <div class="content">
                                        <h5>Office Time</h5>
                                        <p>Sunday - Friday</p>
                                        <p>10:00 AM - 5:00 PM</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="team-details__social-box">
                            <p>Follow Me</p>
                            <div class="team-details__social-list">
                                <a href="#"><span class="icon-facebook"></span></a>
                                <a href="#"><span class="icon-dribble"></span></a>

                                <a href="#"><span class="icon-linkedin"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Team Details End-->

    <!--Skill One Start-->
    <section class="skill-one">
        <div class="skill-one__bg-shape"
            style="background-image: url(<?php echo e(asset('assets/images/shapes/skill-one-shape-1.png')); ?>);">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-6">
                    <div class="skill-one__left">
                        <h3 class="skill-one__title">Design Skills Hub</h3>
                        <p class="skill-one__text">Design Expertise – Proficient in crafting user-friendly, visually
                            appealing, and highly functional digital experiences. With a strong focus on usability,
                            accessibility, and modern design trends, David ensures seamless interactions that
                            enhance user engagement</p>
                        <ul class="skill-one__progress-list list-unstyled">
                            <li>
                                <div class="skill-one__progress">
                                    <h4 class="skill-one__progress-title">User research</h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="95%">
                                            <div class="count-text">95%</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="skill-one__progress">
                                    <h4 class="skill-one__progress-title">Product Design</h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="80%">
                                            <div class="count-text">80%</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="skill-one__progress">
                                    <h4 class="skill-one__progress-title">Prototyep & Lunch</h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="85%">
                                            <div class="count-text">85%</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="skill-one__right">
                        <div class="skill-one__img">
                            <img src="<?php echo e(asset('assets/images/resources/skill-one-img-1.jpg')); ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Skill One End-->

    <!-- Team One Start -->
    <section class="team-one">
        <div class="team-one__shape-1">
            <img src="<?php echo e(asset('assets/images/shapes/team-one-shape-1.png')); ?>" alt="">
        </div>
        <div class="team-one__shape-2"></div>
        <div class="team-one__shape-3">
            <img src="<?php echo e(asset('assets/images/shapes/team-one-shape-3.png')); ?>" alt="">
        </div>
        <div class="team-one__shape-4"></div>
        <div class="team-one__shape-5">
            <img src="<?php echo e(asset('assets/images/shapes/team-one-shape-5.png')); ?>" alt="">
        </div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <div class="section-title__tagline-shape-1"></div>
                    <span class="section-title__tagline">Our Team Member</span>
                    <div class="section-title__tagline-shape-2"></div>
                </div>
                <h2 class="section-title__title title-animation">How We've
                    <span>Empowered Businesses</span><br><span>with Innovative</span> Tech Solutions
                </h2>
            </div>
            <div class="team-one__carousel owl-theme owl-carousel">
                <!--Team One Single Start-->
                <div class="item">
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="<?php echo e(asset('assets/images/team/team-1-1.jpg')); ?>" alt="">
                            </div>
                            <div class="team-one__social-box-inner">
                                <div class="team-one__social-box">
                                    <div class="team-one__social">
                                        <a href="#"><span class="icon-facebook"></span></a>
                                        <a href="#"><span class="icon-dribble"></span></a>
                                    </div>
                                    <div class="team-one__social">

                                        <a href="#"><span class="icon-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-one__content">
                            <div class="team-one__arrow">
                                <a href="<?php echo e(route('team-details')); ?>"><span class="icon-link"></span></a>
                            </div>
                            <div class="team-one__title-box">
                                <p class="team-one__sub-title"><span></span>CEO & Founder</p>
                                <h3 class="team-one__title"><a href="<?php echo e(route('team-details')); ?>">James Carter</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="item">
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="<?php echo e(asset('assets/images/team/team-1-2.jpg')); ?>" alt="">
                            </div>
                            <div class="team-one__social-box-inner">
                                <div class="team-one__social-box">
                                    <div class="team-one__social">
                                        <a href="#"><span class="icon-facebook"></span></a>
                                        <a href="#"><span class="icon-dribble"></span></a>
                                    </div>
                                    <div class="team-one__social">

                                        <a href="#"><span class="icon-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-one__content">
                            <div class="team-one__arrow">
                                <a href="<?php echo e(route('team-details')); ?>"><span class="icon-link"></span></a>
                            </div>
                            <div class="team-one__title-box">
                                <p class="team-one__sub-title"><span></span>Chief Technology Officer </p>
                                <h3 class="team-one__title"><a href="<?php echo e(route('team-details')); ?>">Sophia Reynolds</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="item">
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="<?php echo e(asset('assets/images/team/team-1-3.jpg')); ?>" alt="">
                            </div>
                            <div class="team-one__social-box-inner">
                                <div class="team-one__social-box">
                                    <div class="team-one__social">
                                        <a href="#"><span class="icon-facebook"></span></a>
                                        <a href="#"><span class="icon-dribble"></span></a>
                                    </div>
                                    <div class="team-one__social">

                                        <a href="#"><span class="icon-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-one__content">
                            <div class="team-one__arrow">
                                <a href="<?php echo e(route('team-details')); ?>"><span class="icon-link"></span></a>
                            </div>
                            <div class="team-one__title-box">
                                <p class="team-one__sub-title"><span></span>Lead Software Engineer</p>
                                <h3 class="team-one__title"><a href="<?php echo e(route('team-details')); ?>">Michael Hayes</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="item">
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="<?php echo e(asset('assets/images/team/team-1-4.jpg')); ?>" alt="">
                            </div>
                            <div class="team-one__social-box-inner">
                                <div class="team-one__social-box">
                                    <div class="team-one__social">
                                        <a href="#"><span class="icon-facebook"></span></a>
                                        <a href="#"><span class="icon-dribble"></span></a>
                                    </div>
                                    <div class="team-one__social">

                                        <a href="#"><span class="icon-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-one__content">
                            <div class="team-one__arrow">
                                <a href="<?php echo e(route('team-details')); ?>"><span class="icon-link"></span></a>
                            </div>
                            <div class="team-one__title-box">
                                <p class="team-one__sub-title"><span></span>UI/UX Designer</p>
                                <h3 class="team-one__title"><a href="<?php echo e(route('team-details')); ?>">Emma Brooks </a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="item">
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="<?php echo e(asset('assets/images/team/team-1-1.jpg')); ?>" alt="">
                            </div>
                            <div class="team-one__social-box-inner">
                                <div class="team-one__social-box">
                                    <div class="team-one__social">
                                        <a href="#"><span class="icon-facebook"></span></a>
                                        <a href="#"><span class="icon-dribble"></span></a>
                                    </div>
                                    <div class="team-one__social">

                                        <a href="#"><span class="icon-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-one__content">
                            <div class="team-one__arrow">
                                <a href="<?php echo e(route('team-details')); ?>"><span class="icon-link"></span></a>
                            </div>
                            <div class="team-one__title-box">
                                <p class="team-one__sub-title"><span></span>CEO & Founder</p>
                                <h3 class="team-one__title"><a href="<?php echo e(route('team-details')); ?>">James Carter</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="item">
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="<?php echo e(asset('assets/images/team/team-1-2.jpg')); ?>" alt="">
                            </div>
                            <div class="team-one__social-box-inner">
                                <div class="team-one__social-box">
                                    <div class="team-one__social">
                                        <a href="#"><span class="icon-facebook"></span></a>
                                        <a href="#"><span class="icon-dribble"></span></a>
                                    </div>
                                    <div class="team-one__social">

                                        <a href="#"><span class="icon-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-one__content">
                            <div class="team-one__arrow">
                                <a href="<?php echo e(route('team-details')); ?>"><span class="icon-link"></span></a>
                            </div>
                            <div class="team-one__title-box">
                                <p class="team-one__sub-title"><span></span>Chief Technology Officer </p>
                                <h3 class="team-one__title"><a href="<?php echo e(route('team-details')); ?>">Sophia Reynolds</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="item">
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="<?php echo e(asset('assets/images/team/team-1-3.jpg')); ?>" alt="">
                            </div>
                            <div class="team-one__social-box-inner">
                                <div class="team-one__social-box">
                                    <div class="team-one__social">
                                        <a href="#"><span class="icon-facebook"></span></a>
                                        <a href="#"><span class="icon-dribble"></span></a>
                                    </div>
                                    <div class="team-one__social">

                                        <a href="#"><span class="icon-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-one__content">
                            <div class="team-one__arrow">
                                <a href="<?php echo e(route('team-details')); ?>"><span class="icon-link"></span></a>
                            </div>
                            <div class="team-one__title-box">
                                <p class="team-one__sub-title"><span></span>Lead Software Engineer</p>
                                <h3 class="team-one__title"><a href="<?php echo e(route('team-details')); ?>">Michael Hayes</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="item">
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="<?php echo e(asset('assets/images/team/team-1-4.jpg')); ?>" alt="">
                            </div>
                            <div class="team-one__social-box-inner">
                                <div class="team-one__social-box">
                                    <div class="team-one__social">
                                        <a href="#"><span class="icon-facebook"></span></a>
                                        <a href="#"><span class="icon-dribble"></span></a>
                                    </div>
                                    <div class="team-one__social">

                                        <a href="#"><span class="icon-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-one__content">
                            <div class="team-one__arrow">
                                <a href="<?php echo e(route('team-details')); ?>"><span class="icon-link"></span></a>
                            </div>
                            <div class="team-one__title-box">
                                <p class="team-one__sub-title"><span></span>UI/UX Designer</p>
                                <h3 class="team-one__title"><a href="<?php echo e(route('team-details')); ?>">Emma Brooks </a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="item">
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="<?php echo e(asset('assets/images/team/team-1-1.jpg')); ?>" alt="">
                            </div>
                            <div class="team-one__social-box-inner">
                                <div class="team-one__social-box">
                                    <div class="team-one__social">
                                        <a href="#"><span class="icon-facebook"></span></a>
                                        <a href="#"><span class="icon-dribble"></span></a>
                                    </div>
                                    <div class="team-one__social">

                                        <a href="#"><span class="icon-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-one__content">
                            <div class="team-one__arrow">
                                <a href="<?php echo e(route('team-details')); ?>"><span class="icon-link"></span></a>
                            </div>
                            <div class="team-one__title-box">
                                <p class="team-one__sub-title"><span></span>CEO & Founder</p>
                                <h3 class="team-one__title"><a href="<?php echo e(route('team-details')); ?>">James Carter</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="item">
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="<?php echo e(asset('assets/images/team/team-1-2.jpg')); ?>" alt="">
                            </div>
                            <div class="team-one__social-box-inner">
                                <div class="team-one__social-box">
                                    <div class="team-one__social">
                                        <a href="#"><span class="icon-facebook"></span></a>
                                        <a href="#"><span class="icon-dribble"></span></a>
                                    </div>
                                    <div class="team-one__social">

                                        <a href="#"><span class="icon-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-one__content">
                            <div class="team-one__arrow">
                                <a href="<?php echo e(route('team-details')); ?>"><span class="icon-link"></span></a>
                            </div>
                            <div class="team-one__title-box">
                                <p class="team-one__sub-title"><span></span>Chief Technology Officer </p>
                                <h3 class="team-one__title"><a href="<?php echo e(route('team-details')); ?>">Sophia Reynolds</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="item">
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="<?php echo e(asset('assets/images/team/team-1-3.jpg')); ?>" alt="">
                            </div>
                            <div class="team-one__social-box-inner">
                                <div class="team-one__social-box">
                                    <div class="team-one__social">
                                        <a href="#"><span class="icon-facebook"></span></a>
                                        <a href="#"><span class="icon-dribble"></span></a>
                                    </div>
                                    <div class="team-one__social">

                                        <a href="#"><span class="icon-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-one__content">
                            <div class="team-one__arrow">
                                <a href="<?php echo e(route('team-details')); ?>"><span class="icon-link"></span></a>
                            </div>
                            <div class="team-one__title-box">
                                <p class="team-one__sub-title"><span></span>Lead Software Engineer</p>
                                <h3 class="team-one__title"><a href="<?php echo e(route('team-details')); ?>">Michael Hayes</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
                <!--Team One Single Start-->
                <div class="item">
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="<?php echo e(asset('assets/images/team/team-1-4.jpg')); ?>" alt="">
                            </div>
                            <div class="team-one__social-box-inner">
                                <div class="team-one__social-box">
                                    <div class="team-one__social">
                                        <a href="#"><span class="icon-facebook"></span></a>
                                        <a href="#"><span class="icon-dribble"></span></a>
                                    </div>
                                    <div class="team-one__social">

                                        <a href="#"><span class="icon-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-one__content">
                            <div class="team-one__arrow">
                                <a href="<?php echo e(route('team-details')); ?>"><span class="icon-link"></span></a>
                            </div>
                            <div class="team-one__title-box">
                                <p class="team-one__sub-title"><span></span>UI/UX Designer</p>
                                <h3 class="team-one__title"><a href="<?php echo e(route('team-details')); ?>">Emma Brooks </a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team One Single End-->
            </div>
        </div>
        <div class="sliding-text-two__wrap">
            <ul class="sliding-text-two__list list-unstyled marquee_mode-2">
                <li>
                    <h2 data-hover="Branding" class="sliding-text-two__title">Branding</h2>
                </li>
                <li>
                    <h2 data-hover="Web Design" class="sliding-text-two__title">Web Design</h2>
                </li>
                <li>
                    <h2 data-hover="Promotion" class="sliding-text-two__title">Promotion</h2>
                </li>
                <li>
                    <h2 data-hover="Branding" class="sliding-text-two__title">Branding</h2>
                </li>
                <li>
                    <h2 data-hover="Promotion" class="sliding-text-two__title">Promotion</h2>
                </li>
                <li>
                    <h2 data-hover="Branding" class="sliding-text-two__title">Branding</h2>
                </li>
                <li>
                    <h2 data-hover="Web Design" class="sliding-text-two__title">Web Design</h2>
                </li>
                <li>
                    <h2 data-hover="Promotion" class="sliding-text-two__title">Promotion</h2>
                </li>
                <li>
                    <h2 data-hover="Branding" class="sliding-text-two__title">Branding</h2>
                </li>
                <li>
                    <h2 data-hover="Promotion" class="sliding-text-two__title">Promotion</h2>
                </li>
                <li>
                    <h2 data-hover="Branding" class="sliding-text-two__title">Branding</h2>
                </li>
                <li>
                    <h2 data-hover="Web Design" class="sliding-text-two__title">Web Design</h2>
                </li>
            </ul>
        </div>
    </section>
    <!-- Team One End -->


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

<?php echo $__env->make('layouts.layout4', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/khanhhoa/sites/techguru/resources/views/pages/team-details.blade.php ENDPATH**/ ?>