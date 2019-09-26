<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hamza Mostafa</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="https://csshake.surge.sh/csshake.min.css">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> {{--
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/html2canvas.js"></script>
    <script src="js/jspdf.min.js"></script>

</head>

<body>
<!--Start Hero Area-->
<div id="home" class="hero-area" data-html2canvas-ignore>
    <div class="hero-bg bg-1">
        <div class="d-table hero-area-wrapper" style="height: 100vh;">
            <div class="d-table-cell hero-area-inner">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-9 animated bounceInDown">
                            <h1>Full Stack Developer</h1>
                            <a href="#about-2"
                               class="btn hero-btn shake-slow shake-constant shake-constant--hover scrl-down mobile-view">About
                                Me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Hero Area-->
    </div>
    <!--Start Main Menu Logo-->
    <div class="menubar-area" id="mainMenu">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#">
                    <img src="img/logo2.png" alt="" class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="scrl-down nav-link" href="#home">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="scrl-down nav-link" href="#about">About me</a>
                        </li>
                        <li class="nav-item">
                            <a class="scrl-down nav-link" href="#skill">Skills</a>
                        </li>
                        <li class="nav-item">
                            <a class="scrl-down nav-link" href="#resume">Resume</a>
                        </li>
                        {{--
                        <li class="nav-item">
                            <a class="scrl-down nav-link" href="#testimonial">Testimonials</a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="scrl-down nav-link" href="#education">Education</a>
                        </li>
                        <li class="nav-item">
                            <a class="scrl-down nav-link" href="#work-exp">Work Exp.</a>
                        </li>
                        <li class="nav-item">
                            <a class="scrl-down nav-link" href="#portfolio">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="scrl-down nav-link" href="#contact">Contact me</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!--End Main Menu Logo-->
    <!--Start Tartget-->
    <div class="target-area" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="500">
                    <div class="single-target-box">
                        <h1>Values</h1>
                        <p>Result orientation:
                            <small>with a customer 1st approach</small>
                        </p>
                        <p>Team collaboration:
                            <small>and a strong focus on the results.</small>
                        </p>
                        <p>Passion in work:
                            <small>to keep it creative.</small>
                        </p>
                        <p>Quality over Quantity:
                            <small>nobody wants 3 broken functions.</small>
                        </p>
                        <p>
                                <span class="gpa">
                                    <a href="#" data-toggle="Do" title="Don't Repeat Yourself!">DRY </a>
                                </span>
                            <small>over</small>
                            <span class="gpa2">
                                    <a href="#" data-toggle="Do" title="Write Everything Twice!"> WET</a>
                                </span>
                        </p>
                        <p style="margin-bottom:40px"></p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-offset="150" data-aos-duration="500">
                    <div class="single-target-box">
                        <h1>hobbies</h1>
                        <p id="about-button">Guitar</p>
                        <p>Photography</p>
                        <p>Learning new technologies</p>
                        <span id="about-2"></span>
                    </div>
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </div>
    </div>
</div>
<!--End of Target area-->
<!--Start About Area-->
<div id="about" class="about-area" data-aos-offset="150" data-aos-duration="500">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 no-padding">
                <div class="about-img">
                    <img src="img/me.jpg" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about-title">
                            <div id="my-name" class="hide-me">Hamza Mostafa</div>
                            <h1>About Me</h1>
                            <p>I love to code, and finally took the leap of faith switching my career to follow my
                                passion.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6" data-aos="zoom-in-up" data-aos-duration="500">
                        <div class="single-about-box">
                            <i class="fa fa-globe"></i>
                            <h2>Programmer</h2>
                            {{--
                            <a href="{{ env('GITHUB') }}" class="show-canvas-html"> .......... github</a>
                            <p class="show-canvas-html hide-me">
                                <span>github link:</span>{{ env('GITHUB') }}</p> --}}
                            <br> {{--
                                <a href="https://hamzamostafa.me#portfolio" class="scrl-down show-canvas-html"> .......... Portfolio</a>
                                <p class="show-canvas-html hide-me">
                                    <span>Website:</span>{{ env('APP_URL') }}</p> --}}
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6" data-aos="zoom-in-up" data-aos-offset="-50" data-aos-duration="500">
                        <div class="single-about-box">
                            <i class="fa fa-globe"></i>
                            <h2>Web Designer</h2>
                            {{--
                            <a href="{{ env('GITHUB') }}" class="show-canvas-html"> .......... github</a>
                            <p class="show-canvas-html hide-me">
                                <span>github link:</span>{{ env('GITHUB') }}</p> --}}
                            <br> {{--
                                <a class="show-canvas-html scrl-down" href="https://hamzamostafa.me#portfolio"> .......... Portfolio</a>
                                <p class="show-canvas-html hide-me">
                                    <span>Website:</span>{{ env('APP_URL') }}</p> --}}
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6" data-aos="zoom-in-up" data-aos-offset="-50" data-aos-duration="500">
                        <div class="single-about-box">
                            <i class="fa fa-globe"></i>
                            <h2>Marketer</h2>
                            {{--
                            <a class="scrl-down show-canvas-html" href="#contact"> .......... on request</a>
                            <p class="show-canvas-html hide-me">
                                <span>Mobile:</span>
                                {{ ENV('MOBILE') }}
                            </p> --}}
                            <br>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6" data-aos="zoom-in-up" data-aos-offset="-50" data-aos-duration="500">
                        <div class="single-about-box">
                            <i class="fa fa-globe"></i>
                            <h2>Photographer</h2>
                            {{--
                            <a href="{{ env('BEHANCE') }}" class="show-canvas-html"> .......... Behance</a>
                            <p class="show-canvas-html hide-me">
                                <span>Behance:</span>{{ env('BEHANCE') }}</p> --}}
                            <br> {{--
                                <a href="{{ env('FOTOGRAPHYA') }}" class="show-canvas-html"> .......... Fotographya</a>
                                <p class="show-canvas-html hide-me">
                                    <span>Website:</span>{{ env('FOTOGRAPHYA') }}</p>
                                <br>
                                <a href="#" class="show-canvas-html"> .......... like my page on facebook</a>
                                <p class="show-canvas-html hide-me">
                                    <span>Facebook:</span>{{ env('FACEBOOK') }}</p>
                                <br>
                                <a href="{{ env('INSTAGRAM') }}" class="show-canvas-html"> .......... and on Instagram</a>
                                <p class="show-canvas-html hide-me">
                                    <span>Instagram:</span>{{ env('INSTAGRAM') }}</p>
                                <br> --}}
                        </div>
                    </div>
                </div>
            </div>
            <!--End of col lg 7-->
        </div>
        <!--End of row-->
    </div>
    <!--End of container Fluid-->
</div>
<!--End of About Area-->
<!--Start Skill-->
<div id="skill" class="skill-area" data-aos-offset="150" data-aos-duration="500">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="skillbar position-sticky fixed-top flat">
                    <h1>My Skills</h1>
                    <h4>Frameworks used</h4>
                    <span class="gpa">Laravel</span>
                    <span class="gpa">Node.js</span>
                    <span class="gpa">Adonis.js</span>
                    <span class="gpa">Express.js</span>
                    <span class="gpa">Vue.js</span>
                    <span class="gpa">React.js</span>
                    {{--                    <span class="gpa2">React Native</span>--}}
                    {{--
                    <span class="gpa2">WordPress</span> --}}
                    <h4>Languages</h4>
                    <span class="gpa">PHP</span>
                    <span class="gpa">Javascript</span>
                    {{--                    <span class="gpa2">Java</span>--}}
                    {{--                    <span class="gpa2">Python</span>--}}
                    <h4>Programs</h4>
                    <span class="gpa">Netbeans</span>
                    <span class="gpa">VS Code</span>
                    {{--                    <span class="gpa">Sublime</span>--}}
                    <span class="gpa2">PHPStorm</span>
                    <h4>Databases</h4>
                    <span class="gpa">MongoDB</span>
                    <span class="gpa">MySQL</span>
                    <span class="gpa">Redis</span>
                    <h4>Stacks</h4>
                    <span class="gpa">LAMP</span>
                    <span class="gpa">MEVN</span>
                    <span class="gpa">MERN</span>
                    <h4>Git/Scrum</h4>
                    <span class="gpa">Github</span>
                    <span class="gpa">BitBucket</span>
                    <span class="gpa">TFS</span>
                    <span class="gpa">Trello</span>
                    <h4>other tech</h4>
                    <span class="gpa">Docker</span>
                    <span class="gpa">Laravel Mix</span>
                    <span class="gpa">Webpack</span>
                    <span class="gpa">RabbitMQ</span>
                    <span class="gpa">ElasticSearch</span>
                    <div data-html2canvas-ignore>
                        <a href="#contact" class="btn skill-btn scrl-down nav-link show-canvas-html">contact me</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="skill-progress">
                    <p>html/css</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90"
                             aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                    <p>Less / Scss</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                             aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                    {{--
                    <p>Scss</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div> --}}
                    <p>Javascript</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                             aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                    <p>php</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                             aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                    <p>SQL</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                             aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                    <p>Linux</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70"
                             aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                    <p>After Effects</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                             aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                    <p>photoshop</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90"
                             aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                    <p>illsutrator</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                             aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
            </div>
            <!--End of col lg 6-->
        </div>
        <!--End of row-->
    </div>
    <!--End of container-->
</div>
<!--End of skill area-->
<!--Strat Resume-->
<div id="resume" class="resume-area" data-aos-offset="150" data-aos-duration="500" data-html2canvas-ignore>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1>Resume</h1>
                <p>You are always welcome on the website for an udpate</p>
                <a id="downloaderX" href="javascript:downloadPDF()" class="btn cmn-btn resume-btn animated fade-out">Download
                    Resume as PDF</a>
                <a id="downloader" href="javascript:downloadJpeg()" class="btn cmn-btn resume-btn animated fade-out">Download
                    Resume as image</a>
                <br>
                <br>
                <br>
                <div class="show-canvas-html">
                    <h2>OR</h2>
                    <p style="padding-top:1vh">you can email the CV</p>
                    <form class="form" action="/send_email" method="get">
                        {{--
                        <p>
                            Do you want to enroll in my newsletter?
                            <span style="font-weight: lighter;"> you can always unsubscribe</span>
                        </p>
                        <div class="d-flex justify-content-around p-2">
                            <div>
                                <input type="checkbox" name="hr" id="hr"> Yes .. I'm from HR team</div>
                            <div>
                                <input type="checkbox" name="dev" id="dev"> Yes .. I'm from Developing team</div>
                        </div> --}}
                        <br>
                        <br>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="col-lg-2 col-xs-4 input-group-addon">
                                        <span class="fa fa-address-card">
                                            <label class="control-label" for="email">
                                                Your name
                                            </label>
                                        </span>
                                </div>
                                <input class="form-control" id="email-name" name="name" type="text" required/>
                            </div>
                            <br>
                            <div class="input-group">
                                <div class="input-group-addon col-lg-2 col-xs-4 ">
                                        <span class="fa fa-at">
                                            <label class="control-label" for="email">
                                                Email Address
                                            </label>
                                        </span>
                                </div>
                                <input class="form-control" id="email-address" name="address" type="text"/>
                            </div>
                            <br>
                            <div class="input-group">
                                <div class="input-group-addon col-lg-2 col-xs-4 ">
                                        <span class="fa fa-envelope">
                                            <label class="control-label" for="email">
                                                Email Subject
                                            </label>
                                        </span>
                                </div>
                                <input class="form-control" id="email-subject" name="subject" type="text" required/>
                            </div>
                            <br>
                            <div class="input-group">
                                <div class="input-group-addon col-lg-2 col-xs-4 ">
                                        <span class="fa fa-file">
                                            <label class="control-label" for="email">
                                                Email Body
                                            </label>
                                        </span>
                                </div>
                                <textarea class="form-control" id="email-subject" name="body" type="text"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn resume-btn animated fade-out">Send!</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="education" class="resume-education" data-aos-offset="150" data-aos-duration="500">
    <div class="container bottom-border">
        <div id="" class="row">
            <div class="col-lg-6">
                <div class="edu position-sticky fixed-top">
                    <h1>My Education</h1>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="edu-detail-box">
                    <div class="single-edu">
                        <h3>Bsc Commerce - english sector</h3>
                        <p class="edu-date">
                            <span>Menofia University</span>
                            <small> September 2008</small>
                        </p>
                        <span class="gpa">Accouting</span>
                        <span class="gpa">Finance</span>
                        <span class="gpa">Information Systems</span>
                        <span class="gpa">Manegerial Accounting</span>
                        <p class="edu-summury"></p>
                    </div>
                    <div class="single-edu">
                        <h3>CMA Certification</h3>
                        <p class="edu-date">
                            <span>IMA Institute</span>
                            <small> Feb 2015</small>
                        </p>
                        <span class="gpa">Performance Management</span>
                        <span class="gpa">Cost Management</span>
                        <span class="gpa">Planning, Budgeting and Forecasting</span>
                        <span class="gpa">Internal Controls</span>
                        <span class="gpa">Financial Statement Analysis</span>
                        <span class="gpa">Corporate Finance</span>
                        <span class="gpa">External Financial Reporting Decisions</span>
                        <span class="gpa">Decision Analysis</span>
                        <span class="gpa">Risk Management</span>
                        <span class="gpa">Investment Decisions</span>
                        <p class="edu-summury">For more than 40 years, the CMA® (Certified Management Accountant)
                            certification has been the
                            global benchmark for management accountants and financial professionals. As a US Body; CMA
                            has the
                        </p>
                    </div>
                    <div class="single-edu">
                        <h3>ACCA Certification</h3>
                        <p class="edu-date">
                            <span>ACCA Institute</span>
                            <small> Apr 2015 - stopped</small>
                        </p>
                        <span class="gpa">Accountant in Business</span>
                        <span class="gpa">Management Accounting</span>
                        <span class="gpa">Financial Accounting</span>
                        <span class="gpa">Corporate and Business Law</span>
                        <span class="gpa">Performance Management</span>
                        <span class="gpa">Financial Reporting</span>
                        <span class="gpa">Audit and Assurance</span>
                        <p class="edu-summury">Employers across the globe seek out ACCA-trained professionals – because
                            they know they have
                            the strategic thinking, technical skills and professional values to drive their
                            organisations
                            forward. We currently work with more than 7,400 Approved Employers and 80 accountancy
                            partnerships
                            worldwide
                        </p>
                    </div>
                    <div class="single-edu">
                        <h3>Laracasts</h3>
                        <span class="gpa">Laravel from scratch</span>
                        <span class="gpa">Laravel Mix</span>
                        <span class="gpa">CSS grids for Everyone</span>
                        <span class="gpa">Learn Vue 2</span>
                        <span class="gpa">PHP Bits</span>
                        <span class="gpa">Learn Redis</span>
                        <span class="gpa">The PHP Practioner</span>
                        <span class="gpa">ES2015</span>
                        <span class="gpa">Laravel Spark</span>
                        <span class="gpa">Whip Monstrous Code Into Shape</span>
                        <span class="gpa">SOLID Principles in PHP</span>
                        <span class="gpa">Design Patterns in PHP</span>
                        <span class="gpa">Modern CSS Workflow</span>
                        <span class="gpa">Eloquent Techniques</span>
                        <span class="gpa">Intermediate Laravel</span>
                        <span class="gpa">PHP 7 Up and Running</span>
                        <span class="gpa">Do You React?</span>
                        <span class="gpa">Advanced Eloquent</span>
                        <span class="gpa">Object-Oriented Bootcamp</span>
                        <span class="gpa">Understand Regular Expressions</span>
                        <span class="gpa">Incremental APIs</span>
                        <span class="gpa">Real-time Laravel with Socket.io</span>
                        <span class="gpa">Webpack for everyone</span>
                        <p class="edu-summury"></p>
                    </div>
                    <div class="single-edu">
                        <h3>Other Sources</h3>
                        <p class="edu-date">
                            <span class="gpa">jQuery Advanced</span>
                            <small> Front End Masters</small>
                        </p>
                        <p class="edu-date">
                            <span class="gpa">Advanced javascript</span>
                            <small> Front End Masters</small>
                        </p>
                        <p class="edu-date">
                            <span class="gpa">Javascript advanced and DOM</span>
                            <small> Front End Masters</small>
                        </p>
                        <p class="edu-date">
                            <span class="gpa">Node.js essentials</span>
                            <small> Plural Sight</small>
                        </p>
                        <p class="edu-date">
                            <span class="gpa">NPM PlayBook</span>
                            <small> Plural Sight</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="work-exp" class="resume-education work-exp" data-aos-offset="150" data-aos-duration="500">
    <div class="container">
        <div id="" class="row">
            <div class="col-lg-6">
                <div class="edu position-sticky fixed-top">
                    <h1>Work Experience</h1>
                    <p>I am a full stack developer with 3+ year of experience. I have developed and maintained Web and
                        RESTful
                        applications using PHP, MySQL, and JavaScript. I always love working whether alone or with a
                        technically strong team where I can solve complex problems with a good balance of freedom and
                        responsibility.
                    </p>
                    <p>*
                        <small>details are with each project, please check the portfolio</small>
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="edu-detail-box">
                    <div class="single-edu">
                        <h3>Software Engineer | Team leader</h3>
                        <p class="edu-date">
                            <span>Teknowl Egypt</span> / Oct 2018 - Present</p>
                        <p class="edu-summury">
                        <p>Interact with tech lead to understand technology direction/changes, standards and best practices</p>
                        <p>Resolve technical issues for designers and developers during project lifecycle</p>
                        <p>Design, build, maintain scalable, high-performance systems</p>
                        <p>Participate in design discussions, planning and breaking down of features into tasks</p>
                        <p>Develop and maintain internal and external APIs</p>
                        <p>Integrate various network monitoring and service management systems into Teknowl’s
                            infrastructure;</p>
                        <p>Follow agile methodologies of project management and provide time estimates;</p>
                        <p>Address requirements, feature requests and usability concerns from a the company and its
                            customers</p>
                        <p>Enhance the user interaction of Teknowl’s websites and portals into various levels of
                            presentation, access and control for a diverse user base;</p>
                        <p>Perform application testing, as well as following TDD processes</p>
                        <p>Author administrator and user manuals/documentation;</p>
                        <p>Perform ad-hoc internal development work</p>
                        <p>Collaborate with team members and perform mutual code review.</p>
                        <p>Maintained and updated micro-services application</p>
                    </div>
                    <div class="single-edu">
                        <h3>Full stack Developer</h3>
                        <p class="edu-date">
                            <span>Marketiro</span> / Apr 2017 - Oct 2018</p>
                        <p class="edu-summury">
                        <p>Architected and participated in the design, develop and deployment of client/server, multitier applications.</p>
                        <p>Applied new technologies whenever possible and feasible including non sql databases as Redis and frameworks as React and Vue.</p>
                        <p>Implemented SEO methods, means and tools in the websites to reach teh optimal benefit and to ease the task on the SEO strategists</p>
                        <p>Developed based on google measurements of performance including page speed and mobile view to acheive the best possible search enging results organically.</p>
                        <p>Actively contributed to the requirements creation, designing the applications, testing and deployemnt phases.</p>
                        <p>Internal web applications to support compoany functions such as task management, leave requests, client requests and complaints.</p>
                        <p>Created and maintained Email server including the SPF and DKIM while maintaining an outstanding non-spam records</p>
                        {{--
                        <p>Upgraded
                            <a href="#portfolio">Marketiro</a>
                        </p> --}} {{--
                                <p>Developed in full
                                    <a href="#portfolio">ZizoStore</a>
                                </p> --}} {{--
                                <p>Coded
                                    <a href="#portfolio">AhalinaTV</a>
                                </p> --}} {{--
                                <p>Developed
                                    <a>GygyAwed</a>
                                </p> --}} {{--
                                <p></p> --}} {{--
                                <p></p> --}}
                        </p>
                    </div>
                    <div class="single-edu">
                        <h3>Web developer</h3>
                        <p class="edu-date">
                            <span>Marketiro</span> / Apr 2016 - Mar 2017</p>
                        <p class="edu-summury">
                        <p>Developing websites and Restful APIs as required</p>
                        <p>Handled database and websites programming tasks including but not only restful APIs.</p>
                        <p>Developed websites that have a consistent feel and look through all web properities with UX/UI in mind.</p>
                        <p>Participated in discussions with the clients to clarify what they want</p>
                        <p>Provided guidance to the clients/sales on how to use the website and some technical support to end users</p>
                        <p>Participated in Laravel arab community team tasks to translate Laravel to arabic.</p>
                        <p>Hand coded simple valid HTML/CSS from rough mockup crafting web template to match the clients needs and expectations</p>
                        {{--
                        <p>upgraded
                            <a>Marketiro</a>
                        </p> --}} {{--
                                <p>Coded in full
                                    <a>ZizoStore</a>
                                </p> --}} {{--
                                <p>upgraded
                                    <a>AhalinaTV</a>
                                </p> --}} {{--
                                <p></p> --}} {{--
                                <p></p> --}}
                        </p>
                    </div>
                    <div class="single-edu">
                        <h3>Financial Analyst </h3>
                        <p class="edu-date">
                            <span>G. Travel Assoc.</span> / Apr 2011 - Mar 2016</p>

                        <p class="edu-summury">
                            click here for more
                        </p>
                        {{--                        <div id="dialog1" title="Financial Analyst">--}}
                            <p>
                                Exhibited strong understanding of complexities & unique circumstances of business
                                functions while displaying highest standards
                                of independence, professional objectivity & technical excellence by devising excel VBA
                                tool to augment automation & streamline job functions in the organization.
                            </p>
                        <p> Spearheading a core finance team to execute preparation of financial statements &
                                reports
                                in addition to revaluation of these statements in two systems with different reporting
                                currencies.
                            </p>
                        {{--                            <p> Piloting researches, preparing actual vs. budget, FCA, FCB & FCC reports by--}}
                        {{--                                compilation--}}
                        {{--                                of statistical & financial information & optimizing software - HFM, hyperion & excel--}}
                        {{--                                (pivot tables, VBA, charts) to ascertain the financial statues of the organization.--}}
                        {{--                            </p>--}}
                        <p> Offering turnkey solutions to HoDs for fine tuning the variations in Actual vs. Budget
                                vs. Forecast with respect to Travel & Expenditure T&E, staff incurred costs at monthly
                                & weekly meetings.
                            </p>
                        {{--                            <p> Monitoring financial growth/stability/performance in line with set targets, policies,--}}
                        {{--                                procedures--}}
                        {{--                                & master budgets, identifying potential financial risk, reporting the same to Regional--}}
                        {{--                                Finance Controller & creating back-up plans to avoid any fall-outs.--}}
                        {{--                            </p>--}}
                        {{--                            <p> Instrumental in smooth execution of internal/external audit. Established & maintained--}}
                        {{--                                internal--}}
                        {{--                                financial controls in line with assigned budgets, leading activities from conception--}}
                        {{--                                to completion with regards to economic strategy & financial forecasting.--}}
                        {{--                            </p>--}}
                        <p> Effectively diagnosing technical & business requirements by mapping old system
                                procedures
                                & symbolizing GL champion for new AX Finance program by leading two members for AR &
                                AP respectively for the entire MENA region.
                            </p>
                        {{--                            <p> Key point of contact between London & Middle East office. Collaborating efforts with--}}
                        {{--                                HyperCare--}}
                        {{--                                Committee for Impact Analysis & Business Readiness Activities.--}}
                        {{--                            </p>--}}
                        {{--                            <p> Identifying training needs, organizing & aiding tactical resources & technologies for--}}
                        {{--                                maximizing--}}
                        {{--                                success of system performance & thus automate core business functions.--}}
                        {{--                            </p>--}}
                        <p> Architected an automated entry program via excel, that enabled to minimize duplicating
                                of
                                entries and thus augment the operational efficiency of the organization by saving time
                                on rework.
                            </p>
                        {{--                            <p> Instrumental in resolving pending issues of the organization with various suppliers,--}}
                        {{--                                while--}}
                        {{--                                conforming to organizational policies and procedures.--}}
                        {{--                            </p>--}}
                        {{--                            <p> Administered complete finance & accounts operations & cost accounting role while--}}
                        {{--                                ensuring--}}
                        {{--                                conformance to GAAP & organizational policies & procedures for Gulliver's Travel--}}
                        {{--                                Associate--}}
                        {{--                                (GTA) & Octopus Dubai using the JDE system.--}}
                        {{--                            </p>--}}
                        {{--                            <p> Reviewed, verified, validated & updated customer deposits, invoices related to inbound--}}
                        {{--                                services for the entire GCC region, facilitated payments related to commission/refunds--}}
                        {{--                                to vendors/suppliers & other general expenses through excel pivot tables & VBA.--}}
                        {{--                            </p>--}}
                        {{--                            <p> Scrutinized PO’s generated through the AS400 system, incorporated the same in JDE &--}}
                        {{--                                further--}}
                        {{--                                reviewed the same to validate conformance to the contract rates.--}}
                        {{--                            </p>--}}
                        {{--                            <p> Liaised largely with banks/financial institutions, organized various statements--}}
                        {{--                                required--}}
                        {{--                                by them time to time, maintained & balanced bank reconciliation statements.--}}
                        {{--                            </p>--}}
                        {{--                            <p> Recorded & updated systems for pay roll- registered staff advances, staff IOU, gift--}}
                        {{--                                vouchers,--}}
                        {{--                                staff expense analysis, annual leave & indemnity while ensured smooth disbursement of--}}
                        {{--                                staff salaries & other obligations.--}}
                        {{--                            </p>--}}
                        {{--                            <p> Facilitated in smooth execution of annual/quarterly audits of the company, coordinated--}}
                        {{--                                with auditor to perform the audit duties & ensured that the audit recommendations &--}}
                        {{--                                conclusions--}}
                        {{--                                are effectively implemented.--}}
                        {{--                            </p>--}}
                        {{--                            <p> Documented fixed assets movements in the accounting system, analyzed & updated--}}
                        {{--                                detailed--}}
                        {{--                                schedule of fixed assets & accumulated depreciation thus ensured the assets of the--}}
                        {{--                                company--}}
                        {{--                                are safeguarded at all times.--}}
                        {{--                            </p>--}}
                        {{--                            <p> Generated weekly/monthly/quarterly/interim & year-end reports like sales invoices,--}}
                        {{--                                status--}}
                        {{--                                reports, turnover/cost reports, performance reports, & various other management reports--}}
                        {{--                                for top management review.--}}
                        {{--                            </p>--}}
                        {{--                        </div>--}}
                        {{--
                        <button id="opener1" class="btn btn-success">click for more</button> --}}
                    </div>
                    <div class="single-edu">
                        <h3>Accountant</h3>
                        <p class="edu-date">
                            <span>Notions group</span> / Oct 2010 - Mar 2011</p>
                        <div id="dialog2" title="Accountant">
                            <p>


                                • Managed entire spectrum of all accounting functions e.g. prepared entries for
                                recording daily business transactions, formulated
                                financial statements & analyzed the veracity of transactions recorded across various
                                books of accounts maintained.
                            </p>
                            <p>• Closely monitored & maintained optimum levels of inventory for the organization
                                moderated
                                the cost of all items & maintained effective database for immediate reference.
                            </p>
                            <p>• Undertook recording of bank transactions like cash withdrawals, deposits, LG/LC,
                                resolved
                                bank fee anomalies, obtained documents/advices on time, followed-up for credit
                                facilities,
                                interbank transfers, etc. & prepared accurate bank reconciliation statements.
                            </p>
                            <p> • Scrutinized ageing debtors & followed-up effectively to receive timely payments,
                                issued
                                payments to vendors/suppliers after formal verification of invoices & documented
                                requisite
                                approvals for the same.
                            </p>
                            <p>• Recorded & updated any movements in fixed assets, calculated accumulated depreciation &
                                accompanying working schedules, prepared & booked monthly accruals
                            </p>
                            <p>• Judiciously handled petty cash - made appropriate payments after requisite approvals
                                from
                                seniors & effectively recorded the same in the books of accounts maintained.
                            </p>
                            <p> • Handled routine accounting work like reconciling customers, vendor’s accounts in
                                addition
                                to compiling & interpreting financial data to compute an array of analytical reports
                                for top management review.
                            </p>
                            <p> • Performed routine audits to implement an environment of effective financial practices,
                                guided other departments and resolved their discrepancies by researching and
                                interpreting
                                accounting policies.
                            </p>
                        </div>
                        {{--
                        <button id="opener2" class="btn btn-success">click for more</button> --}}
                    </div>
                    <div class="single-edu">
                        <h3>Junior Accountant</h3>
                        <p class="edu-date">
                            <span>Marina PH</span> / October 2009 - Sep 2010</p>
                        <div id="dialog3" title="Junior Accountant">
                            <p>

                                • Administered all aspects of accounting functions like preparation of financial
                                statements along with postings to and maintenance
                                of general ledgers, analyzed the veracity of transactions recorded across various books
                                of accounts maintained.
                            </p>
                            <p>
                                • Analyzed age-wise debtors and developed a meticulous follow-up for receiving timely
                                payments from debtors, compared and
                                contrasted purchases with purchase orders and personally monitored branch transfers.
                            </p>
                            <p> • Inspected branch sales and expenses report, examined and collaborated credit card
                                sales
                                reports for 10 branches with bank reports.
                            </p>
                            <p> • Performed routine functions like cash/check deposits, prepared bank reconciliation
                                statements,
                                accounts receivable and payable management, formulated and maintained accurate cash flow
                                statements, processed pay-roll, commission, incentives, etc.
                            </p>
                            <p> • Examined sales reports, established trends and identified discrepancies, made
                                effective
                                recommendations to optimize on opportunities and mitigate threats.
                            </p>
                            <p>• Assisted purchase management department to forecast inventory levels by collecting and
                                compiling data and thus ensured that optimum levels if stock are maintained at all
                                times.
                            </p>
                            <p> • Devised and implemented business models/process to fine tune the financial summary,
                                aligned
                                all the systems/procedures/practices, conducted budgetary controls, to ensure
                                operational
                                efficiency for the organization.

                            </p>
                        </div>
                        {{--
                        <button id="opener3" class="btn btn-success">click for more</button> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Resume-->
{{--
<!--Start Testimonial-->
<div id="testimonial" class="testimonial-area">
    <div class="owl-carousel testimonial-slider">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <p>“Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute
                        disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei, cum ne periculis molestiae
                        pri. Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam.”
                    </p>
                    <h4>John Stone</h4>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <p>“Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute
                        disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei, cum ne periculis molestiae
                        pri. Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam.”
                    </p>
                    <h4>John Stone</h4>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <p>“Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam, te usu virtute placerat. Purto brute
                        disputando cu est, eam dicam soluta ei. Vel dicam vivendo accusata ei, cum ne periculis molestiae
                        pri. Lorem ipsum dolor sit amet, ea doming epicuri iudicabit nam.”
                    </p>
                    <h4>John Stone</h4>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!--End of testimonial-->
<!--Start Portfolio-->
{{--
<div id="portfolio" class="portfolio-area" data-aos-offset="150" data-aos-duration="500">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <div class="protfolio-title">
                    <h1>portfolio</h1>
                    <p id="more-samples" class="show-canvas-html">More samples on
                        <span class="gpa">
                            <a href="#contact" class="scrl-down">request</a>
                        </span>
                    </p>
                    <p class="show-canvas-html hide-me"> please check the protfolio on my website .. HamzaMostafa.me </p>
                </div>
            </div>
        </div>
        <div class="portfolio-container">
            <div class="portfolio-content portfolio-filter theme icon patterns mockup ui">
                <div class="portfolio-menu">
                    <h3>Filter By Category</h3>
                    <ul>
                        <li data-filter="*">All</li>
                        <li data-filter=".theme">Laravel</li>
                        <li data-filter=".icon">Node</li>
                        <li data-filter=".patterns">Vue</li>
                        <li data-filter=".mockup">React Native</li>
                        <li data-filter=".ui">Wordpress</li>
                    </ul>
                </div>
            </div>
            <div id="" class="portfolio-content portfolio-items theme icon">
                <div class="portfolio-bg-items">
                    <div class="portfolio-bg protfolio-bg-1">
                        <a href="#">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div id="" class="portfolio-content portfolio-items icon mockup">
                <div class="portfolio-bg-items">
                    <div class="portfolio-bg protfolio-bg-2">
                        <a href="#">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div id="" class="portfolio-content portfolio-items mockup icon">
                <div class="portfolio-bg-items">
                    <div class="portfolio-bg protfolio-bg-3">
                        <a href="#">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div id="" class="portfolio-content portfolio-items ui mockup">
                <div class="portfolio-bg-items">
                    <div class="portfolio-bg protfolio-bg-4">
                        <a href="#">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div id="" class="portfolio-content portfolio-items patterns icon">
                <div class="portfolio-bg-items">
                    <div class="portfolio-bg protfolio-bg-5">
                        <a href="#">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div id="" class="portfolio-content portfolio-items theme patterns">
                <div class="portfolio-bg-items">
                    <div class="portfolio-bg protfolio-bg-6">
                        <a href="#">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div id="" class="portfolio-content portfolio-items icon patterns">
                <div class="portfolio-bg-items">
                    <div class="portfolio-bg protfolio-bg-7">
                        <a href="#">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div id="" class="portfolio-content portfolio-items patterns icon">
                <div class="portfolio-bg-items">
                    <div class="portfolio-bg protfolio-bg-8">
                        <a href="#">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!--End of portfolio-->
<!--Start Contact-->
<div id="contact" class="contact-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-left">
                    <div class="contact-details">
                        <h1>Contact Me</h1>
                        {{--
                        <p>Whether for </p> --}}
                    </div>
                    <div class="contact-mail">
                        <p>
                            <span>Email:</span>{{ env('EMAIL') }}</p>
                        <p>
                            <span>Phone:</span>{{ env('MOBILE') }}</p>
                        <p class="show-canvas-html hide-me" id="linkedIn-html-canvas">
                            <span>LinkedIn:</span>{{ env('LINKEDIN') }}</p>
                        <p class="show-canvas-html hide-me" id="facebook-html-canvas">
                            <span>Facebook:</span>{{ env('FACEBOOK') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-form" id="form" data-html2canvas-ignore>
                    <form action="#">
                        <div class="form-group">
                            <label for="name">Name
                                <span>*</span>
                            </label>
                            <input type="name" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address
                                <span>*</span>
                            </label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="message">Message
                                <span>*</span>
                            </label>
                            <textarea class="form-control" id="message" rows="10"></textarea>
                        </div>
                        <button type="submit" class="btn submit-btn">Contact me</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <p class="copyright">
                    Copyright Hamza Mostafa
                </p>
                <div class="footer-social-links">

                    <a href="{{ env('FACEBOOK') }}">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="{{ env('INSTAGRAM') }}">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="{{ env('LINKEDIN') }}">
                        <i class="fa fa-linkedin"></i>
                    </a>
                    <a href="{{ env('BEHANCE') }}">
                        <i class="fa fa-behance"></i>
                    </a>
                    <a href="{{ env('FOTOGRAPHYA') }}">
                        <i class="fa fa-camera"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
{{--<div id="blocker">--}}
{{--    <div id="loader"></div>--}}
{{--</div>--}}
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/isotope.pkgd-3.0.4.min.js"></script>
<script src="js/masonry.pkgd.min-4.2.0.js"></script>
<!--	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>-->
<script src="js/main.js"></script>
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<script src="js/scrollMonitor.js"></script>
{{--
<script src="js/app.js"></script> --}}
<script src="js/modal.js"></script>
<script type="text/javascript">
    var myElement = document.getElementById("mainMenu");
    var watcher = scrollMonitor.create(myElement);
    watcher.lock();
    watcher.stateChange(function () {
        $(myElement).toggleClass('fixed', this.isAboveViewport)
        // $('body').toggleClass('padder-top')
    });
    // return watcher;
    // console.log(watcher);
    AOS.init({
        easing: 'ease-out-back',
        duration: 1000
    });
    window.setInterval(bg2, 4000);

    function bg2() {
        var x = $('.hero-bg').attr('class')[$('.hero-bg').attr('class').length - 1];
        if (x >= 3) {
            $('.hero-bg').removeClass('bg-3');
            $('.hero-bg').addClass('bg-1');
        } else {
            $('.hero-bg').removeClass('bg-' + x);
            $('.hero-bg').addClass('bg-' + (parseInt(x) + 1));
        }
    }

    window.setInterval(glow, 500);

    function glow() {
        $(".contact-details").find('h1').toggleClass('glower');
    }

    function scrollToView(x) {
        var elmnt = document.getElementById(x);
        elmnt.scrollIntoView();

    }
</script>
<script>
    $(function () {
        $("#dialog1").dialog({
            autoOpen: false,
            modal: true,
            width: 400,
            buttons: {
                Dismiss: function () {
                    $(this).dialog("close");
                }
            },
            show: {
                effect: "fade",
                duration: 1000
            },
            hide: {
                effect: "fade",
                duration: 300
            }
        });
        $("#opener1").on("click", function () {
            $("#dialog1").dialog("open");
        });
    });
</script>
<script>
    $(function () {
        $("#dialog2").dialog({
            autoOpen: false,
            modal: true,
            width: 400,
            buttons: {
                Dismiss: function () {
                    $(this).dialog("close");
                }
            },
            show: {
                effect: "fade",
                duration: 1000
            },
            hide: {
                effect: "fade",
                duration: 300
            }
        });
        $("#opener2").on("click", function () {
            $("#dialog2").dialog("open");
        });
    });
</script>
<script>
    $(function () {
        $("#dialog3").dialog({
            autoOpen: false,
            modal: true,
            width: 400,
            buttons: {
                Dismiss: function () {
                    $(this).dialog("close");
                }
            },
            show: {
                effect: "fade",
                duration: 1000
            },
            hide: {
                effect: "fade",
                duration: 300
            }
        });
        $("#opener3").on("click", function () {
            $("#dialog3").dialog("open");
        });
    });
</script>
<script>
    var element = document.getElementsByClassName("show-canvas-html");

    function hideOrShow(elements) {
        arr = [];
        arr.forEach.call(elements, (function (elem) {
            elem.classList.toggle('hide-me');
        }));
        return arr;
    }

    function DPDF() {
        html2canvas(document.body).then(function (canvas) {
            var img = canvas.toDataURL('image/jpeg');
            var doc = new jsPDF('p', 'mm', [canvas.width, canvas.height]);
            doc.addImage(img, 'JPEG', 0, 0, canvas.width, canvas.height);
            doc.save('Hamza-Mostafa-at-zoho.com-----Mobile-010-69-00-00-63.pdf');
        });
    }

    function showLoader() {
        document.getElementById("loader").style.display = "block";
    }

    function HideLoader() {
        document.getElementById("loader").style.display = "none";
    }

    function downloadPDF() {
        hideOrShow(element)
        // .then() show loader
            .then(DPDF())
            .then(hideOrShow(element));
        // .then() hide loader
    }

    function downloadJpeg() {
        hideOrShow(element).then(DJpeg()).then(hideOrShow(element));
    }

    function DJpeg() {
        html2canvas(document.body).then(function (canvas) {
            var img = canvas.toDataURL('image/jpeg');
            $('#downloader').attr('href', img);
            $('#downloader').attr('download', 'Hamza-Mostafa-at-zoho.com-----Mobile-010-69-00-00-63.jpeg');
            $('#downloader')[0].click();
        });
    }

    // function sendCV() {
    //     var doc;
    //         html2canvas(document.body).then(function (canvas) {
    //         var img = canvas.toDataURL('image/jpeg');
    //         doc = new jsPDF('p', 'mm', [canvas.width, canvas.height]);
    //         doc.addImage(img, 'JPEG', 0, 0, canvas.width, canvas.height);
    //         });
    //         console.log('doc');
    //         console.log(doc);
    //         $.ajaxSetup({
    //             headers: {
    //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //             }
    //         });
    //         $.ajax({
    //             url: '/save_cv',
    //             data: {'doc' : doc},
    //             dataType:'application/pdf',
    //             type: 'get'
    //         });
    // }
</script>

</body>

</html>