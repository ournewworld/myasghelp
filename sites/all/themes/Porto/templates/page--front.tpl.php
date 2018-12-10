<?php $bread = theme_get_setting('breadcrumbs');?>
<div class="body">
<?php include_once('includes/header.inc');?>

<div class="mobile-nav">

<div class="mobile-nav-wrapper">
<?php print render($page['menu_mobile']);?>
</div>
</div>

<div id="mobile-menu-overlay"></div>

<div role="main" class="main">
<?php if($title && $breadcrumb && $bread == 1 && !drupal_is_front_page()): ?>
    <section class="page-header mb-lg">
        <div class="container">
            <?php print $breadcrumb;?>
        </div>
    </section>
<?php endif;?>
    <div class="header-student-post-form-wrapper">
	<div class="container">
		<?php print assignment_help_get_student_post_form(); ?>
	</div>
</div>
<?php if($page['before_content']):?>
    
    <?php print render($page['before_content']);?>
<?php endif;?>

    <?php if($page['slider'] || $page['menu_vertical']):?>
        <div class="home-slider-area">
            <div class="container">
                <div class="row">
                    <?php if($page['slider']):?>
                        <div class="col-md-12 col-md-push-0">
                            <?php print render($page['slider']);?>

                        </div>
                    <?php endif;?>
                    <?php if($page['menu_vertical']):?>
                        <div class="col-md-3 col-md-pull-9">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php print render($page['menu_vertical']);?>
                                </div>

                            </div>
                        </div>
                    <?php endif;?>
                </div>
            </div>
        </div>
    <?php endif;?>

<div class="container">
    <?php print render($title_prefix); ?>
    <div class="row">
        <?php if ($messages): ?>
            <div class="col-md-12">
                <?php print $messages; ?>
            </div>
        <?php endif; ?>
        <?php if ($tabs = render($tabs)): ?>
        <div class="col-md-12">
            <div id="drupal_tabs" class="tabs ">
                <?php print render($tabs); ?>
            </div>
        </div>
        <?php endif; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?>
            <ul class="action-links">
                <?php print render($action_links); ?>
            </ul>
        <?php endif; ?>
        <?php if($page['sidebar_left']): ?>
            <aside class="col-md-3 sidebar shop-sidebar <?php if(drupal_is_front_page()): print 'home-sidebar'; endif;?>">
                <div class="panel-group">
                    <?php print render($page['sidebar_left']); ?>
                </div>
            </aside>
        <?php endif; ?>

        <div class="<?php if(($page['sidebar_right']) AND ($page['sidebar_left']) ){ echo "col-md-6";} elseif (($page['sidebar_right']) OR ($page['sidebar_left']) ) {  echo "col-md-9"; }else{ echo "col-md-12"; }?>">
            <?php if (isset($page['content'])) { print render($page['content']); } ?>
        </div>



        <?php if($page['sidebar_right']): ?>
            <div class="<?php if ($page['sidebar_left']) { echo "col-md-3";} else { echo "col-md-3 "; } ?>">
                <aside class="sidebar">
                    <?php print render($page['sidebar_right']); ?>
                </aside>
            </div>
        <?php endif; ?>
    </div>
    


    




    <?php print render($page['after_content']); ?>
    <?php print render($title_suffix); ?>


</div>

<section id="content" style="margin-bottom: 0px;">

<div class="content-wrap pb-0">
    <div class="container clearfix">
        <div class="row">
            <div class="divcenter center clearfix">
                <h2 class="mb-0">HOW ASSIGNMENT HELP WORKS</h2>
            </div>

            <div class="line"></div>

            <div class="col-lg-4">
                <div class="feature-box fbox-small fbox-plain fadeIn animated" data-animate="fadeIn">
                    <div class="fbox-icon">
                        <a href="#"><i class="fa fa-database"></i></a>
                    </div>
                    <h3>SUBMIT YOUR ASSIGNMENT</h3>
                    <p>Simply visit myassignmenthelp.com and fill up the assignment submission form. Mention
                        the assignment requirements and upload the files. You can immediately chat with 24 x 7
                        assignment expert and get the best price.</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="feature-box fbox-small fbox-plain fadeIn animated" data-animate="fadeIn" data-delay="200">
                    <div class="fbox-icon">
                        <a href="#"><i class="fa fa-cc-mastercard"></i></a>
                    </div>
                    <h3>PAY FOR ASSIGNMENT</h3>
                    <p>Once you receive best price for your assignment, process the payment through-
                        paypal,credit card, debit card or online banking.

                        BUY ASSIGNMENT HELP ONLINE AND GET A DISCOUNT UPTO 30% OFF!</p>
                </div>
            </div>

            <div class="col-lg-4 col_last">
                <div class="feature-box fbox-small fbox-plain fadeIn animated" data-animate="fadeIn" data-delay="400">
                    <div class="fbox-icon">
                        <a href="#"><i class="fa fa-envelope-open"></i></a>
                    </div>
                    <h3>GET ASSIGNMENT SOLUTION</h3>
                    <p>Your high quality and well referenced assignment will be delivered straight in your
                        MyAssignmenthelp.com’s student account, long before the agreed deadline.</p>
                </div>
            </div>

            <div class="col-lg-12 text-center mt-4">
                <a href="#" class="button button-3d button-large">Order Now</a>
            </div>

            <div class="line mb-0"></div>

            <div class="clear"></div>
        </div>
    </div>


    <div class="container-fluid">


        <div class="row common-height assignment">
            <div class="divcenter center clearfix">
                <h2 class="mt-5">HOW ASSIGNMENT HELP WORKS</h2>
            </div>
            <div class="clear"></div>
            <div class="col-lg-3 dark col-padding ohidden" style="background-color: rgb(26, 188, 156); height: 355.2px;">
                <div>
                    <i class="fa fa-file-text"></i>
                    <h3 class="uppercase" style="font-weight: 600;">ONLINE ASSIGNMENT HELP</h3>
                    <p style="line-height: 1.8;">MyAssignmenthelp.com is a one-stop solution for all urgent
                        assignment help needs.</p>
                    <a href="#" class="button button-border button-light button-rounded uppercase nomargin">Read
                        More</a>
                </div>
            </div>

            <div class="col-lg-3 dark col-padding ohidden" style="background-color: rgb(52, 73, 94); height: 355.2px;">
                <div>
                    <i class="fa fa-pencil"></i>
                    <h3 class="uppercase" style="font-weight: 600;">CUSTOM ESSAY WRITING HELP</h3>
                    <p style="line-height: 1.8;">As an essay help service provider, MyAssignmenthelp.com not
                        only aids students to achieve academic excellence by providing custom writing help but
                        also acquire useful knowledge from the subject experts. </p>
                    <a href="#" class="button button-border button-light button-rounded uppercase nomargin">Read
                        More</a>
                </div>
            </div>

            <div class="col-lg-3 dark col-padding ohidden" style="background-color: rgb(231, 76, 60); height: 355.2px;">
                <div>
                    <i class="fa fa-book"></i>
                    <h3 class="uppercase" style="font-weight: 600;">Dissertation Writing Help</h3>
                    <p style="line-height: 1.8;">Experts, at MyAssignmenthelp.com, are capable of delivering
                        dissertations utilizing both primary and secondary research.</p>
                    <a href="#" class="button button-border button-light button-rounded uppercase nomargin">Read
                        More</a>
                </div>
            </div>

            <div class="col-lg-3 dark col-padding ohidden" style="background-color: #66bb6a; height: 355.2px;">
                <div>
                    <i class="fa fa-cogs"></i>
                    <h3 class="uppercase" style="font-weight: 600;">All Writing Services</h3>
                    <p style="line-height: 1.8;">We at MyAssignmenthelp offer all types of online academic
                        services, be it homework help, coursework help, case study help, thesis/research paper
                        writing help and online exam help.</p>
                    <a href="#" class="button button-border button-light button-rounded uppercase nomargin">Read
                        More</a>
                </div>
            </div>

            <div class="clear"></div>

        </div>

    </div>

    <div class="grey-back">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-4 nobottommargin center bounceIn animated" data-animate="bounceIn">
                    <i class="i-plain i-xlarge divcenter nobottommargin fa fa-truck"></i>
                    <div class="counter counter-lined"><span data-from="100" data-to="846"
                            data-refresh-interval="50" data-speed="2000">846</span>K+</div>
                    <h5>DELIVERED ORDERS</h5>
                </div>

                <div class="col-lg-4 nobottommargin center bounceIn animated" data-animate="bounceIn"
                    data-delay="200">
                    <i class="i-plain i-xlarge divcenter nobottommargin fa fa-thumbs-up"></i>
                    <div class="counter counter-lined"><span data-from="3000" data-to="15360"
                            data-refresh-interval="100" data-speed="2500">15360</span>+</div>
                    <h5>EXPERTS</h5>
                </div>

                <div class="col-lg-4 nobottommargin center bounceIn animated" data-animate="bounceIn"
                    data-delay="400">
                    <i class="i-plain i-xlarge divcenter nobottommargin fa fa-star"></i>
                    <div class="counter counter-lined"><span data-from="10" data-to="386" data-refresh-interval="25"
                            data-speed="3500">386</span>*</div>
                    <h5>CLIENT RATING</h5>
                </div>

                <div class="col-lg-12 heading-block center">
                    <h2>Hire MyAssignmenthelp.Com's Expert Assignment <br /> Writer And See The Difference In
                        Your Grade</h2>
                    <div class="divcenter">MyAssignmenthelp.com being one of the most active assignment help
                        websites has a pool of over 4500+ assignment experts from Australia, UK and US.<br />They
                        are highly qualified and skilled professional writers who have vast experience in
                        writing assignments, dissertations, essays, research papers, term papers etc. Each
                        expert is chosen after rigorous testing and has to prove his academic credentials.</div>
                </div>

                <div class="col-lg-12 text-center mb-5">
                    <a href="#" class="button button-3d button-large">Hire Expert</a>
                </div>

                <div class="clear"></div>
            </div>
        </div>
    </div>

    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-5  nobottommargin">
                <a href="#">
                    <img src="img/about.jpg" alt="Image">
                </a>
            </div>
            <div class="col-lg-7  nobottommargin col_last">
                <h2>WHY MYASSIGNMENTHELP.COM?</h2>

                <p>MyAssignmenthelp.com is well aware of the concerns that students are normally plagued with
                    when it comes to preparing their academic paper. Our assignment experts know that you
                    encounter that lingering sense of fear when it comes to preparing your assignments. No
                    matter how hard you try to enjoy the company of your loved ones, the dread of the impending
                    deadline always plays at the back of your mind. You can hardly shake off this feeling. So
                    how can you cope with it? It’s simple; you can seek the help of our experts who understand
                    your problems and this actually drives them to produce the best; the most authentic and
                    genuine content for your assignments.<br /><br />
                    Also, our assignment writers across the globe are well trained in their chosen field of
                    study which means you can easily put your faith in the way they treat your paper, no matter
                    which academic discipline you're from.



            </div>
        </div>
    </div>

    <div class="grey-back pt-5 pt-5">

        <div class="container ">
            <h2 class="text-center">ASSIGNMENT HELP FEATURES</h2>
            <div class="row">

                <div class="col-lg-6">
                    <div class="feature-box fbox-small fbox-plain fadeIn animated" data-animate="fadeIn">
                        <div class="fbox-icon">
                            <a href="#"><i class="fa fa-clock-o"></i></a>
                        </div>
                        <h3>On Time Delivery</h3>
                        <p>Being the best professional writing services provider, we never compromise when it
                            comes to deadline and delivery of assignment on time. Our writers make sure that
                            all orders are submitted prior to the deadline so that you can proofread your paper
                            before handing it over to your tutor.</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="feature-box fbox-small fbox-plain fadeIn animated" data-animate="fadeIn">
                        <div class="fbox-icon">
                            <a href="#"><i class="fa fa-headphones"></i></a>
                        </div>
                        <h3>24 X 7 Live Help</h3>
                        <p>We work 24x7 for your convenience. Our customer support executives are available
                            round the clock in case you need any professional assistance. Feel free to contact
                            our assignment writing services any time via phone, email or live chat.</p>
                    </div>
                </div>

                <div class="line"></div>

                <div class="col-lg-6">
                    <div class="feature-box fbox-small fbox-plain fadeIn animated" data-animate="fadeIn">
                        <div class="fbox-icon">
                            <a href="#"><i class="fa fa-book"></i></a>
                        </div>
                        <h3>Services For All Subjects</h3>
                        <p>It does not matter whether you are a freshman in college or finishing your final
                            assignment to acquire Ph.D. degree, our writers can provide you professional
                            writing assistance on any subject at any level. We have experts for Law, Nursing,
                            Management, Accounting, Marketing, Engineering, Programming etc. Thus, the next
                            time you would type “where can I have a comprehensive assignment help for me?” feel
                            free to visit us for the best result.</p>
                    </div>
                </div>



                <div class="col-lg-6">
                    <div class="feature-box fbox-small fbox-plain fadeIn animated" data-animate="fadeIn">
                        <div class="fbox-icon">
                            <a href="#"><i class="fa fa-users"></i></a>
                        </div>
                        <h3>4500+ PhD Experts</h3>
                        <p>Knowledge, experience and creativity are three features we consider before hiring a writer. All our professional writers have acquired Ph.D. credentials from reputed universities across the world. We have writers for each and every subject and always increasing the team by hiring the best writers. Thus, if you ever need university assignment help, always get in touch with us.

                            </p>
                    </div>
                </div>

                <div class="line"></div>


                <div class="col-lg-6">
                    <div class="feature-box fbox-small fbox-plain fadeIn animated" data-animate="fadeIn">
                        <div class="fbox-icon">
                            <a href="#"><i class="fa fa-list-alt"></i></a>
                        </div>
                        <h3>Plagiarism Free Work</h3>
                        <p>To avoid any plagiarism, we check our completed papers three times — after writing,
                            editing and proofreading — using reliable plagiarism detection software,
                            Turnitin.com. We have strict policies against plagiarism. We only provide
                            customized 100 percent original papers.</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="feature-box fbox-small fbox-plain fadeIn animated" data-animate="fadeIn">
                        <div class="fbox-icon">
                            <a href="#"><i class="fa fa-dollar"></i></a>
                        </div>
                        <h3>Best Price Guarantee</h3>
                        <p>You get premium service at the best market price. Our best price guarantee ensures
                            that the features we offer cannot be matched by any of the competitors, in case
                            they do - “We will beat the price”. Thus, for an effective and cheap assignment
                            help, always count on us.</p>
                    </div>
                </div>

                <div class="col-lg-12 text-center mt-4 mb-5">
                    <a href="#" class="button button-3d button-large">View All</a>
                </div>

            </div>

        </div>
    </div>

</div>

</section>


</div>



<?php include_once('includes/footer.inc');?>
</div>
