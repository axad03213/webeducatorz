@extends('layouts.dash')
@section('title','Skillinsiderz')
@section('content')


<!--======================================
        START HEADER AREA
    ======================================-->
    <section class="header-menu-area">
        <div class="header-menu-content bg-dark">
            <div class="container-fluid">
                <div class="main-menu-content d-flex align-items-center">
                    <div class="logo-box logo--box">
                        <div class="theme-picker d-flex align-items-center">
                            <button class="theme-picker-btn dark-mode-btn" title="Dark mode">
                                <svg class="svg-icon-color-white" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                                </svg>
                            </button>
                            <button class="theme-picker-btn light-mode-btn" title="Light mode">
                                <svg viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="5"></circle>
                                    <line x1="12" y1="1" x2="12" y2="3"></line>
                                    <line x1="12" y1="21" x2="12" y2="23"></line>
                                    <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                                    <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                                    <line x1="1" y1="12" x2="3" y2="12"></line>
                                    <line x1="21" y1="12" x2="23" y2="12"></line>
                                    <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                                    <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                                </svg>
                            </button>
                        </div>
                    </div><!-- end logo-box -->
                    <div class="course-dashboard-header-title pl-4">
                        <a href="course-details.html" class="text-white fs-15">Java Programming Masterclass for Software Developers</a>
                    </div><!-- end course-dashboard-header-title -->
                    <div class="menu-wrapper ml-auto">
                        <div class="theme-picker d-flex align-items-center mr-3">
                            <button class="theme-picker-btn dark-mode-btn" title="Dark mode">
                                <svg class="svg-icon-color-white" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                                </svg>
                            </button>
                            <button class="theme-picker-btn light-mode-btn" title="Light mode">
                                <svg viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="5"></circle>
                                    <line x1="12" y1="1" x2="12" y2="3"></line>
                                    <line x1="12" y1="21" x2="12" y2="23"></line>
                                    <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                                    <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                                    <line x1="1" y1="12" x2="3" y2="12"></line>
                                    <line x1="21" y1="12" x2="23" y2="12"></line>
                                    <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                                    <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                                </svg>
                            </button>
                        </div>
                        <div class="nav-right-button d-flex align-items-center">
                            <a href="#" class="btn theme-btn theme-btn-sm theme-btn-transparent lh-26 text-white mr-2" data-toggle="modal" data-target="#ratingModal"><i class="la la-star mr-1"></i> leave a rating</a>
                            <a href="#" class="btn theme-btn theme-btn-sm theme-btn-transparent lh-26 text-white mr-2" data-toggle="modal" data-target="#shareModal"><i class="la la-share mr-1"></i> share</a>
                            <div class="generic-action-wrap generic--action-wrap">
                                <div class="dropdown">
                                    <a class="action-btn" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="la la-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">Favorite this course</a>
                                        <a class="dropdown-item" href="#">Archive this course</a>
                                        <a class="dropdown-item" href="#">Gift this course</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end nav-right-button -->
                    </div><!-- end menu-wrapper -->
                </div><!-- end row -->
            </div><!-- end container-fluid -->
        </div><!-- end header-menu-content -->
    </section><!-- end header-menu-area -->
    <!--======================================
            END HEADER AREA
    ======================================-->
    
    <!--======================================
            START COURSE-DASHBOARD
    ======================================-->
    <section class="course-dashboard">
        <div class="course-dashboard-wrap">
            <div class="course-dashboard-container d-flex">
                <div class="course-dashboard-column">
                    <div class="lecture-viewer-container">
                        <div class="lecture-video-item">
                            <video controls crossorigin playsinline id="player">
                                <!-- Video files -->
                                <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4"/>
                                <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/mp4"/>
                                <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4" type="video/mp4"/>
    
                                <!-- Caption files -->
                                <track kind="captions" label="English" srclang="en" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt" default/>
                                <track kind="captions" label="Français" srclang="fr" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.fr.vtt"/>
    
                                <!-- Fallback for browsers that don't support the <video> element -->
                                <a href="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" download>Download</a>
                            </video>
                        </div>
                        <div class="lecture-viewer-text-wrap">
                            <div class="lecture-viewer-text-content custom-scrollbar-styled">
                                <div class="lecture-viewer-text-body">
                                    <h2 class="fs-24 font-weight-semi-bold pb-4">Download your Footage for your Quick Start</h2>
                                    <div class="lecture-viewer-content-detail">
                                        <ul class="generic-list-item pb-4">
                                            <li>Hi</li>
                                            <li>Welcome to Motion Graphics in After Effects. </li>
                                            <li>In the next lectures you will start creating your first animation and animate imported footage.</li>
                                            <li>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes,</li>
                                            <li>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. </li>
                                            <li>Occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. </li>
                                            <li>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus,</li>
                                            <li>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. </li>
                                            <li><strong class="font-weight-semi-bold">Download your footage Now, Click on the Link Below.</strong></li>
                                        </ul>
                                        <div class="btn-box">
                                            <h3 class="fs-18 font-weight-semi-bold pb-3">Resources for this lecture</h3>
                                            <a href="#" class="btn theme-btn theme-btn-transparent"><i class="la la-file-zip-o mr-1"></i>Quick-start.zip</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end lecture-viewer-container -->
                    <div class="lecture-video-detail">
                        <div class="lecture-tab-body bg-gray p-4">
                            <ul class="nav nav-tabs generic-tab" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="search-tab" data-toggle="tab" href="#search" role="tab" aria-controls="search" aria-selected="false">
                                        <i class="la la-search"></i>
                                    </a>
                                </li>
                                <li class="nav-item mobile-menu-nav-item">
                                    <a class="nav-link" id="course-content-tab" data-toggle="tab" href="#course-content" role="tab" aria-controls="course-content" aria-selected="false">
                                        Course Content
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">
                                        Overview
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="question-and-ans-tab" data-toggle="tab" href="#question-and-ans" role="tab" aria-controls="question-and-ans" aria-selected="false">
                                        Question & Ans
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="announcements-tab" data-toggle="tab" href="#announcements" role="tab" aria-controls="announcements" aria-selected="false">
                                        Announcements
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="lecture-video-detail-body">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade" id="search" role="tabpanel" aria-labelledby="search-tab">
                                    <div class="search-course-wrap pt-40px">
                                        <form action="#" class="pb-5">
                                            <div class="input-group">
                                                <input class="form-control form--control form--control-gray pl-3" type="text" name="search" placeholder="Search course content">
                                                <div class="input-group-append">
                                                    <button class="btn theme-btn"><span class="la la-search"></span></button>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="search-results-message text-center">
                                            <h3 class="fs-24 font-weight-semi-bold pb-1">Start a new search</h3>
                                            <p>To find captions, lectures or resources</p>
                                        </div>
                                    </div><!-- end search-course-wrap -->
                                </div><!-- end tab-pane -->
                                <div class="tab-pane fade" id="course-content" role="tabpanel" aria-labelledby="course-content-tab">
                                    <div class="mobile-course-menu pt-4">
                                        <div class="accordion generic-accordion generic--accordion" id="mobileCourseAccordionCourseExample">
                                            <div class="card">
                                                <div class="card-header" id="mobileCourseHeadingOne">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#mobileCourseCollapseOne" aria-expanded="true" aria-controls="mobileCourseCollapseOne">
                                                        <i class="la la-angle-down"></i>
                                                        <i class="la la-angle-up"></i>
                                                        <span class="fs-15"> Section 1: Dive in and Discover After Effects</span>
                                                        <span class="course-duration">
                                                            <span>1/5</span>
                                                            <span>21min</span>
                                                        </span>
                                                    </button>
                                                </div><!-- end card-header -->
                                                <div id="mobileCourseCollapseOne" class="collapse show" aria-labelledby="mobileCourseHeadingOne" data-parent="#mobileCourseAccordionCourseExample">
                                                    <div class="card-body p-0">
                                                        <ul class="curriculum-sidebar-list">
                                                            <li class="course-item-link active">
                                                                <div class="course-item-content-wrap">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="mobileCourseCheckbox" required>
                                                                        <label class="custom-control-label custom--control-label" for="mobileCourseCheckbox"></label>
                                                                    </div><!-- end custom-control -->
                                                                    <div class="course-item-content">
                                                                        <h4 class="fs-15">1. Let's Have Fun - Seriously!</h4>
                                                                        <div class="courser-item-meta-wrap">
                                                                            <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                        </div>
                                                                    </div><!-- end course-item-content -->
                                                                </div><!-- end course-item-content-wrap -->
                                                            </li>
                                                            <li class="course-item-link">
                                                                <div class="course-item-content-wrap">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="mobileCourseCheckbox2" required>
                                                                        <label class="custom-control-label custom--control-label" for="mobileCourseCheckbox2"></label>
                                                                    </div><!-- end custom-control -->
                                                                    <div class="course-item-content">
                                                                        <h4 class="fs-15">2. A simple concept to get ahead</h4>
                                                                        <div class="courser-item-meta-wrap">
                                                                            <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                        </div>
                                                                    </div><!-- end course-item-content -->
                                                                </div><!-- end course-item-content-wrap -->
                                                            </li>
                                                            <li class="course-item-link active-resource">
                                                                <div class="course-item-content-wrap">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="mobileCourseCheckbox3" required>
                                                                        <label class="custom-control-label custom--control-label" for="mobileCourseCheckbox3"></label>
                                                                    </div><!-- end custom-control -->
                                                                    <div class="course-item-content">
                                                                        <h4 class="fs-15">3. Download your Footage for your Quick Start</h4>
                                                                        <div class="courser-item-meta-wrap">
                                                                            <p class="course-item-meta"><i class="la la-file"></i>2min</p>
                                                                            <div class="generic-action-wrap">
                                                                                <div class="dropdown">
                                                                                    <a class="btn theme-btn theme-btn-sm theme-btn-transparent mt-1 fs-14 font-weight-medium" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <i class="la la-folder-open mr-1"></i> Resources<i class="la la-angle-down ml-1"></i>
                                                                                    </a>
                                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                                                            Section-Footage.zip
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div><!-- end generic-action-wrap -->
                                                                        </div>
                                                                    </div><!-- end course-item-content -->
                                                                </div><!-- end course-item-content-wrap -->
                                                            </li>
                                                            <li class="course-item-link">
                                                                <div class="course-item-content-wrap">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="mobileCourseCheckbox4" required>
                                                                        <label class="custom-control-label custom--control-label" for="mobileCourseCheckbox4"></label>
                                                                    </div><!-- end custom-control -->
                                                                    <div class="course-item-content">
                                                                        <h4 class="fs-15">4. Jump in and Animate your Character</h4>
                                                                        <div class="courser-item-meta-wrap">
                                                                            <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                        </div>
                                                                    </div><!-- end course-item-content -->
                                                                </div><!-- end course-item-content-wrap -->
                                                            </li>
                                                        </ul>
                                                    </div><!-- end card-body -->
                                                </div><!-- end collapse -->
                                            </div><!-- end card -->
                                            <div class="card">
                                                <div class="card-header" id="mobileCourseHeadingTwo">
                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#mobileCourseCollapseTwo" aria-expanded="false" aria-controls="mobileCourseCollapseTwo">
                                                        <i class="la la-angle-down"></i>
                                                        <i class="la la-angle-up"></i>
                                                        <span class="fs-15">Section 2: Jump Start Into Motion Graphics</span>
                                                        <span class="course-duration">
                                                            <span>1/5</span>
                                                            <span>21min</span>
                                                        </span>
                                                    </button>
                                                </div><!-- end card-header -->
                                                <div id="mobileCourseCollapseTwo" class="collapse" aria-labelledby="mobileCourseHeadingTwo" data-parent="#mobileCourseAccordionCourseExample">
                                                    <div class="card-body p-0">
                                                        <ul class="curriculum-sidebar-list">
                                                            <li class="course-item-link">
                                                                <div class="course-item-content-wrap">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="mobileCourseCheckbox5" required>
                                                                        <label class="custom-control-label custom--control-label" for="mobileCourseCheckbox5"></label>
                                                                    </div><!-- end custom-control -->
                                                                    <div class="course-item-content">
                                                                        <h4 class="fs-15">5. Let's Have Fun - Seriously!</h4>
                                                                        <div class="courser-item-meta-wrap">
                                                                            <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                        </div>
                                                                    </div><!-- end course-item-content -->
                                                                </div><!-- end course-item-content-wrap -->
                                                            </li>
                                                            <li class="course-item-link">
                                                                <div class="course-item-content-wrap">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="mobileCourseCheckbox6" required>
                                                                        <label class="custom-control-label custom--control-label" for="mobileCourseCheckbox6"></label>
                                                                    </div><!-- end custom-control -->
                                                                    <div class="course-item-content">
                                                                        <h4 class="fs-15">6. A simple concept to get ahead</h4>
                                                                        <div class="courser-item-meta-wrap">
                                                                            <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                        </div>
                                                                    </div><!-- end course-item-content -->
                                                                </div><!-- end course-item-content-wrap -->
                                                            </li>
                                                            <li class="course-item-link active-resource">
                                                                <div class="course-item-content-wrap">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="mobileCourseCheckbox7" required>
                                                                        <label class="custom-control-label custom--control-label" for="mobileCourseCheckbox7"></label>
                                                                    </div><!-- end custom-control -->
                                                                    <div class="course-item-content">
                                                                        <h4 class="fs-15">7. Download your Footage for your Quick Start</h4>
                                                                        <div class="courser-item-meta-wrap">
                                                                            <p class="course-item-meta"><i class="la la-file"></i>2min</p>
                                                                            <div class="generic-action-wrap">
                                                                                <div class="dropdown">
                                                                                    <a class="btn theme-btn theme-btn-sm theme-btn-transparent mt-1 fs-14 font-weight-medium" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <i class="la la-folder-open mr-1"></i> Resources<i class="la la-angle-down ml-1"></i>
                                                                                    </a>
                                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                                                            Section-Footage.zip
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div><!-- end generic-action-wrap -->
                                                                        </div>
                                                                    </div><!-- end course-item-content -->
                                                                </div><!-- end course-item-content-wrap -->
                                                            </li>
                                                            <li class="course-item-link">
                                                                <div class="course-item-content-wrap">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="mobileCourseCheckbox8" required>
                                                                        <label class="custom-control-label custom--control-label" for="mobileCourseCheckbox8"></label>
                                                                    </div><!-- end custom-control -->
                                                                    <div class="course-item-content">
                                                                        <h4 class="fs-15">8. Jump in and Animate your Character</h4>
                                                                        <div class="courser-item-meta-wrap">
                                                                            <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                        </div>
                                                                    </div><!-- end course-item-content -->
                                                                </div><!-- end course-item-content-wrap -->
                                                            </li>
                                                        </ul>
                                                    </div><!-- end card-body -->
                                                </div><!-- end collapse -->
                                            </div><!-- end card -->
                                            <div class="card">
                                                <div class="card-header" id="mobileCourseHeadingThree">
                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#mobileCourseCollapseThree" aria-expanded="false" aria-controls="mobileCourseCollapseThree">
                                                        <i class="la la-angle-down"></i>
                                                        <i class="la la-angle-up"></i>
                                                        <span class="fs-15">Section 3: Graphics from within After Effects</span>
                                                        <span class="course-duration">
                                                            <span>1/5</span>
                                                            <span>21min</span>
                                                        </span>
                                                    </button>
                                                </div><!-- end card-header -->
                                                <div id="mobileCourseCollapseThree" class="collapse" aria-labelledby="mobileCourseHeadingThree" data-parent="#mobileCourseAccordionCourseExample">
                                                    <div class="card-body p-0">
                                                        <ul class="curriculum-sidebar-list">
                                                            <li class="course-item-link">
                                                                <div class="course-item-content-wrap">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="mobileCourseCheckbox9" required>
                                                                        <label class="custom-control-label custom--control-label" for="mobileCourseCheckbox9"></label>
                                                                    </div><!-- end custom-control -->
                                                                    <div class="course-item-content">
                                                                        <h4 class="fs-15">9. Let's Have Fun - Seriously!</h4>
                                                                        <div class="courser-item-meta-wrap">
                                                                            <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                        </div>
                                                                    </div><!-- end course-item-content -->
                                                                </div><!-- end course-item-content-wrap -->
                                                            </li>
                                                            <li class="course-item-link">
                                                                <div class="course-item-content-wrap">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="mobileCourseCheckbox10" required>
                                                                        <label class="custom-control-label custom--control-label" for="mobileCourseCheckbox10"></label>
                                                                    </div><!-- end custom-control -->
                                                                    <div class="course-item-content">
                                                                        <h4 class="fs-15">10. A simple concept to get ahead</h4>
                                                                        <div class="courser-item-meta-wrap">
                                                                            <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                        </div>
                                                                    </div><!-- end course-item-content -->
                                                                </div><!-- end course-item-content-wrap -->
                                                            </li>
                                                            <li class="course-item-link active-resource">
                                                                <div class="course-item-content-wrap">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="mobileCourseCheckbox11" required>
                                                                        <label class="custom-control-label custom--control-label" for="mobileCourseCheckbox11"></label>
                                                                    </div><!-- end custom-control -->
                                                                    <div class="course-item-content">
                                                                        <h4 class="fs-15">11. Download your Footage for your Quick Start</h4>
                                                                        <div class="courser-item-meta-wrap">
                                                                            <p class="course-item-meta"><i class="la la-file"></i>2min</p>
                                                                            <div class="generic-action-wrap">
                                                                                <div class="dropdown">
                                                                                    <a class="btn theme-btn theme-btn-sm theme-btn-transparent mt-1 fs-14 font-weight-medium" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <i class="la la-folder-open mr-1"></i> Resources<i class="la la-angle-down ml-1"></i>
                                                                                    </a>
                                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                                                            Section-Footage.zip
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div><!-- end generic-action-wrap -->
                                                                        </div>
                                                                    </div><!-- end course-item-content -->
                                                                </div><!-- end course-item-content-wrap -->
                                                            </li>
                                                            <li class="course-item-link">
                                                                <div class="course-item-content-wrap">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="mobileCourseCheckbox12" required>
                                                                        <label class="custom-control-label custom--control-label" for="mobileCourseCheckbox12"></label>
                                                                    </div><!-- end custom-control -->
                                                                    <div class="course-item-content">
                                                                        <h4 class="fs-15">12. Jump in and Animate your Character</h4>
                                                                        <div class="courser-item-meta-wrap">
                                                                            <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                        </div>
                                                                    </div><!-- end course-item-content -->
                                                                </div><!-- end course-item-content-wrap -->
                                                            </li>
                                                        </ul>
                                                    </div><!-- end card-body -->
                                                </div><!-- end collapse -->
                                            </div><!-- end card -->
                                            <div class="card">
                                                <div class="card-header" id="mobileCourseHeadingFour">
                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#mobileCourseCollapseFour" aria-expanded="false" aria-controls="mobileCourseCollapseFour">
                                                        <i class="la la-angle-down"></i>
                                                        <i class="la la-angle-up"></i>
                                                        <span class="fs-15">Section 4: Bonus Lecture</span>
                                                        <span class="course-duration">
                                                            <span>1/5</span>
                                                            <span>21min</span>
                                                        </span>
                                                    </button>
                                                </div><!-- end card-header -->
                                                <div id="mobileCourseCollapseFour" class="collapse" aria-labelledby="mobileCourseHeadingFour" data-parent="#mobileCourseAccordionCourseExample">
                                                    <div class="card-body p-0">
                                                        <ul class="curriculum-sidebar-list">
                                                            <li class="course-item-link">
                                                                <div class="course-item-content-wrap">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="mobileCourseCheckbox13" required>
                                                                        <label class="custom-control-label custom--control-label" for="mobileCourseCheckbox13"></label>
                                                                    </div><!-- end custom-control -->
                                                                    <div class="course-item-content">
                                                                        <h4 class="fs-15">13. Bonus Courses - Learn more for less</h4>
                                                                        <div class="courser-item-meta-wrap">
                                                                            <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                        </div>
                                                                    </div><!-- end course-item-content -->
                                                                </div><!-- end course-item-content-wrap -->
                                                            </li>
                                                            <li class="course-item-link">
                                                                <div class="course-item-content-wrap">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="mobileCourseCheckbox14" required>
                                                                        <label class="custom-control-label custom--control-label" for="mobileCourseCheckbox14"></label>
                                                                    </div><!-- end custom-control -->
                                                                    <div class="course-item-content">
                                                                        <h4 class="fs-15">14. Conclusion</h4>
                                                                        <div class="courser-item-meta-wrap">
                                                                            <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                                        </div>
                                                                    </div><!-- end course-item-content -->
                                                                </div><!-- end course-item-content-wrap -->
                                                            </li>
                                                        </ul>
                                                    </div><!-- end card-body -->
                                                </div><!-- end collapse -->
                                            </div><!-- end card -->
                                        </div><!-- end accordion-->
                                    </div><!-- end mobile-course-menu -->
                                </div><!-- end tab-pane -->
                                <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                                    <div class="lecture-overview-wrap">
                                        <div class="lecture-overview-item">
                                            <h3 class="fs-24 font-weight-semi-bold pb-2">About this course</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti dicta eos iste maxime sapiente similique totam? Consequatur consequuntur excepturi in, magni necessitatibus nemo quae repellendus</p>
                                        </div><!-- end lecture-overview-item -->
                                        <div class="section-block"></div>
                                        <div class="lecture-overview-item">
                                            <div class="lecture-overview-stats-wrap d-flex">
                                                <div class="lecture-overview-stats-item">
                                                    <h3 class="fs-16 font-weight-semi-bold pb-2">By the numbers</h3>
                                                </div><!-- end lecture-overview-stats-item -->
                                                <div class="lecture-overview-stats-item">
                                                    <ul class="generic-list-item">
                                                        <li><span>Skill level:</span>All Levels</li>
                                                        <li><span>Students:</span>83950</li>
                                                        <li><span>Languages:</span>English</li>
                                                        <li><span>Captions:</span>Yes</li>
                                                    </ul>
                                                </div><!-- end lecture-overview-stats-item -->
                                                <div class="lecture-overview-stats-item">
                                                    <ul class="generic-list-item">
                                                        <li><span>Lectures:</span>30</li>
                                                        <li><span>Video length:</span>3.5 total hours</li>
                                                        <li><span>Certificate:</span>Yes</li>
                                                    </ul>
                                                </div><!-- end lecture-overview-stats-item -->
                                            </div><!-- end lecture-overview-stats-wrap -->
                                        </div><!-- end lecture-overview-item -->
                                        <div class="section-block"></div>
                                        <div class="lecture-overview-item">
                                            <div class="lecture-overview-stats-wrap d-flex">
                                                <div class="lecture-overview-stats-item">
                                                    <h3 class="fs-16 font-weight-semi-bold pb-2">Certificates</h3>
                                                </div><!-- end lecture-overview-stats-item -->
                                                <div class="lecture-overview-stats-item lecture-overview-stats-wide-item">
                                                    <p class="pb-3">Get Aduca certificate by completing entire course</p>
                                                    <a href="#" class="btn theme-btn theme-btn-transparent">Aduca Certificate</a>
                                                </div><!-- end lecture-overview-stats-item -->
                                            </div><!-- end lecture-overview-stats-wrap -->
                                        </div><!-- end lecture-overview-item -->
                                        <div class="section-block"></div>
                                        <div class="lecture-overview-item">
                                            <div class="lecture-overview-stats-wrap d-flex">
                                                <div class="lecture-overview-stats-item">
                                                    <h3 class="fs-16 font-weight-semi-bold pb-2">Features</h3>
                                                </div><!-- end lecture-overview-stats-item -->
                                                <div class="lecture-overview-stats-item">
                                                    <p>Available on <a href="#" class="text-color hover-underline">IOS</a> and <a href="#" class="text-color hover-underline">Android</a></p>
                                                </div><!-- end lecture-overview-stats-item -->
                                            </div><!-- end lecture-overview-stats-wrap -->
                                        </div><!-- end lecture-overview-item -->
                                        <div class="section-block"></div>
                                        <div class="lecture-overview-item">
                                            <div class="lecture-overview-stats-wrap d-flex">
                                                <div class="lecture-overview-stats-item">
                                                    <h3 class="fs-16 font-weight-semi-bold pb-2">Description</h3>
                                                </div><!-- end lecture-overview-stats-item -->
                                                <div class="lecture-overview-stats-item lecture-overview-stats-wide-item lecture-description">
                                                    <h3 class="fs-16 font-weight-semi-bold pb-2">From the Author of the Best Selling After Effects CC 2020 Complete Course</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque ea esse inventore odit voluptate. Accusantium asperiores at doloremque ex impedit ipsa itaque. Consequuntur dignissimos itaque mollitia tenetur voluptatem. Aut beatae blanditiis consequuntur corporis delectus deserunt dolores eos et fugit hic illo, impedit in magnam mollitia nulla placeat porro, possimus quae quaerat quasi quidem recusandae reprehenderit saepe, suscipit voluptatibus.</p>
                                                    <div class="collapse" id="collapseMore">
                                                        <p>Aliquid odit perspiciatis quidem rerum? Architecto aspernatur beatae consectetur illo labore molestias natus, provident quas tempore ut vitae voluptate! Dicta doloremque dolores doloribus dolorum ea enim est ex harum mollitia natus necessitatibus, non officiis repellat rerum sed sint vel voluptatem. Aspernatur enim error esse facere numquam quidem reiciendis sit soluta suscipit voluptates.</p>
                                                        <ul class="generic-list-item generic-list-item-bullet">
                                                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                                            <li>Cumque ea esse inventore odit voluptate.</li>
                                                            <li>Phasellus posuere urna et faucibus</li>
                                                            <li>Mauris faucibus ligula vestibulum </li>
                                                            <li>Phasellus posuere urna </li>
                                                        </ul>
                                                        <p>impedit in magnam mollitia nulla placeat porro, possimus quae quaerat quasi quidem recusandae reprehenderit saepe, suscipit voluptatibus. Beatae, fugiat? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque ea esse inventore odit voluptate. Accusantium asperiores at doloremque ex impedit ipsa itaque. Consequuntur dignissimos itaque mollitia tenetur voluptatem. Aut beatae blanditiis consequuntur corporis delectus deserunt dolores eos et fugit hic illo, impedit in magnam mollitia nulla placeat porro, possimus quae quaerat quasi quidem recusandae reprehenderit saepe, suscipit voluptatibus. Beatae, fugiat?</p>
                                                        <p>See you in the course.</p>
                                                        <p>Alex</p>
                                                        <h3 class="fs-16 font-weight-semi-bold pb-2">What you’ll learn</h3>
                                                        <ul class="generic-list-item generic-list-item-bullet">
                                                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                                            <li>Cumque ea esse inventore odit voluptate.</li>
                                                            <li>Phasellus posuere urna et faucibus</li>
                                                            <li>Mauris faucibus ligula vestibulum </li>
                                                            <li>Phasellus posuere urna </li>
                                                        </ul>
                                                        <h3 class="fs-16 font-weight-semi-bold pb-2">Are there any course requirements or prerequisites?</h3>
                                                        <ul class="generic-list-item generic-list-item-bullet">
                                                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                                            <li>Cumque ea esse inventore odit voluptate.</li>
                                                            <li>Phasellus posuere urna et faucibus</li>
                                                            <li>Mauris faucibus ligula vestibulum </li>
                                                        </ul>
                                                        <h3 class="fs-16 font-weight-semi-bold pb-2">Who this course is for:</h3>
                                                        <ul class="generic-list-item generic-list-item-bullet">
                                                            <li>Consectetur adipisicing elit.</li>
                                                            <li>Cumque ea esse inventore odit voluptate.</li>
                                                            <li>Phasellus posuere urna et faucibus</li>
                                                            <li>Phasellus posuere urna et faucibus</li>
                                                            <li>Mauris faucibus ligula vestibulum</li>
                                                            <li>Mauris faucibus ligula vestibulum </li>
                                                        </ul>
                                                    </div>
                                                    <div class="show-more-btn-box">
                                                        <a class="collapse-btn collapse--btn fs-15" data-toggle="collapse" href="#collapseMore" role="button" aria-expanded="false" aria-controls="collapseMore">
                                                            <span class="collapse-btn-hide">Read more<i class="la la-angle-down ml-1 fs-14"></i></span>
                                                            <span class="collapse-btn-show">Read less<i class="la la-angle-up ml-1 fs-14"></i></span>
                                                        </a>
                                                    </div><!-- end show-more-btn-box -->
                                                </div><!-- end lecture-overview-stats-item -->
                                            </div><!-- end lecture-overview-stats-wrap -->
                                        </div><!-- end lecture-overview-item -->
                                        <div class="section-block"></div>
                                        <div class="lecture-overview-item">
                                            <div class="lecture-overview-stats-wrap d-flex ">
                                                <div class="lecture-overview-stats-item">
                                                    <h3 class="fs-16 font-weight-semi-bold pb-2">Instructor</h3>
                                                </div><!-- end lecture-overview-stats-item -->
                                                <div class="lecture-overview-stats-item lecture-overview-stats-wide-item">
                                                    <div class="media media-card align-items-center">
                                                        <a href="teacher-detail.html" class="media-img d-block rounded-full avatar-md">
                                                            <img src="images/small-avatar-1.jpg" alt="Instructor avatar" class="rounded-full">
                                                        </a>
                                                        <div class="media-body">
                                                            <h5><a href="teacher-detail.html">Alex Smith</a></h5>
                                                            <span class="d-block lh-18 pt-2">Java Python Android and C# Expert Developer</span>
                                                        </div>
                                                    </div>
                                                    <div class="lecture-owner-profile pt-4">
                                                        <ul class="social-icons social-icons-styled">
                                                            <li><a href="#" class="facebook-bg"><i class="la la-facebook"></i></a></li>
                                                            <li><a href="#" class="twitter-bg"><i class="la la-twitter"></i></a></li>
                                                            <li><a href="#" class="instagram-bg"><i class="la la-instagram"></i></a></li>
                                                            <li><a href="#" class="linkedin-bg"><i class="la la-linkedin"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="lecture-owner-decription pt-4">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris faucibus ligula vestibulum venenatis efficitur. Phasellus posuere urna et faucibus vestibulum. Duis quis eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris faucibus ligula vestibulum venenatis efficitur. Phasellus posuere urna et faucibus vestibulum. Duis quis eros.</p>
                                                        <p>Consequuntur dignissimos itaque mollitia tenetur voluptatem. Aut beatae blanditiis consequuntur corporis delectus deserunt dolores eos et fugit hic illo, impedit in magnam mollitia nulla placeat porro, possimus quae quaerat quasi quidem recusandae reprehenderit saepe, suscipit voluptatibus.</p>
                                                        <p><strong>After Effects:</strong> The whole lot. In my course After Effects Complete Course packed with all Techniques and Methods (No Tricks and gimmicks).</p>
                                                        <p><strong>Video Editing:</strong> If it's Adobe Premiere Pro or DaVinci Resolve you have excellent top rated courses.</p>
                                                        <p>I guess 208,000+ Students is a good sign that my courses will be of benefit to you.</p>
                                                        <p>Cheers</p>
                                                        <p>Alex</p>
                                                    </div>
                                                </div><!-- end lecture-overview-stats-item -->
                                            </div><!-- end lecture-overview-stats-wrap -->
                                        </div><!-- end lecture-overview-item -->
                                    </div><!-- end lecture-overview-wrap -->
                                </div><!-- end tab-pane -->
                                <div class="tab-pane fade" id="question-and-ans" role="tabpanel" aria-labelledby="question-and-ans-tab">
                                    <div class="lecture-overview-wrap lecture-quest-wrap">
                                        <div class="new-question-wrap">
                                            <button class="btn theme-btn theme-btn-transparent back-to-question-btn"><i class="la la-reply mr-1"></i>Back to all questions</button>
                                            <div class="new-question-body pt-40px">
                                                <h3 class="fs-20 font-weight-semi-bold">My question relates to</h3>
                                                <form action="#" class="pt-4">
                                                    <div class="custom-control-wrap">
                                                        <div class="custom-control custom-radio mb-3 pl-0">
                                                            <input type="radio" class="custom-control-input" id="courseContentRadio" name="radio-stacked" required>
                                                            <label class="custom-control-label custom--control-label custom--control-label-boxed" for="courseContentRadio">
                                                                <span class="font-weight-semi-bold text-black d-block">Course content</span>
                                                                <span class="d-block fs-14 lh-20">This might include comments, questions, tips, or projects to share</span>
                                                            </label>
                                                        </div>
                                                        <div class="custom-control custom-radio mb-3 pl-0">
                                                            <input type="radio" class="custom-control-input" id="somethingElseRadio" name="radio-stacked" required>
                                                            <label class="custom-control-label custom--control-label custom--control-label-boxed" for="somethingElseRadio">
                                                                <span class="font-weight-semi-bold text-black d-block">Something else</span>
                                                                <span class="d-block fs-14 lh-20">This might include questions about certificates, audio and video troubleshooting, or download issues</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="btn-box text-center">
                                                        <button class="btn theme-btn w-100">Continue <i class="la la-arrow-right icon ml-1"></i></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div><!-- end new-question-wrap -->
                                        <div class="replay-question-wrap">
                                            <button class="btn theme-btn theme-btn-transparent back-to-question-btn"><i class="la la-reply mr-1"></i>Back to all questions</button>
                                            <div class="replay-question-body pt-30px">
                                                <div class="question-list-item">
                                                    <div class="media media-card border-bottom border-bottom-gray py-4">
                                                        <div class="media-img rounded-full flex-shrink-0 avatar-sm">
                                                            <img class="rounded-full" src="images/small-avatar-1.jpg" alt="User image">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="question-meta-content">
                                                                    <h5 class="fs-16 pb-1">I still did't get H264 after installing Quicktime. Please what do I do</h5>
                                                                    <p class="meta-tags fs-13">
                                                                        <a href="#">Alex Smith</a>
                                                                        <a href="#">Lecture 20</a>
                                                                        <span>3 hours ago</span>
                                                                    </p>
                                                                    <p class="fs-15 text-gray">
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                                        Ut enim ad minim veniam, quis nostrud exercitation.
                                                                    </p>
                                                                </div><!-- end question-meta-content -->
                                                                <div class="question-upvote-action">
                                                                    <div class="number-upvotes pb-2 d-flex align-items-center generic-action-wrap">
                                                                        <span>1</span>
                                                                        <button type="button"><i class="la la-arrow-up"></i></button>
                                                                        <div class="dropdown">
                                                                            <button class="ml-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                <i class="la la-ellipsis-v"></i>
                                                                            </button>
                                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#reportModal"><i class="la la-flag mr-1"></i> Report abuse</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- end question-upvote-action -->
                                                            </div>
                                                        </div><!-- end media-body -->
                                                    </div><!-- end media -->
                                                    <div class="question-replay-separator-wrap d-flex align-items-center justify-content-between py-3">
                                                        <h4 class="fs-16 font-weight-semi-bold">1 Replay</h4>
                                                        <button class="btn swapping-btn text-gray font-weight-medium" data-text-swap="Following replies" data-text-original="Follow replies">Follow replies</button>
                                                    </div><!-- end question-replay-separator-wrap -->
                                                    <div class="section-block"></div>
                                                    <div class="question-answer-wrap">
                                                        <div class="media media-card mb-3 border-bottom border-bottom-gray py-4">
                                                            <div class="media-img rounded-full avatar-sm flex-shrink-0">
                                                                <img src="images/small-avatar-2.jpg" alt="Instructor avatar" class="rounded-full">
                                                            </div><!-- end media-img -->
                                                            <div class="media-body">
                                                                <h5 class="fs-16"><a href="#">David Luise</a></h5>
                                                                <span class="fs-14">3 years ago</span>
                                                                <p class="pt-1 fs-15">Occaecati cupiditate non provident, similique sunt in culpa fuga.</p>
                                                            </div><!-- end media-body -->
                                                        </div><!-- end media -->
                                                        <div class="question-replay-input-wrap pt-20px">
                                                            <div class="question-replay-body">
                                                                <h3 class="fs-16 font-weight-semi-bold">Add Replay</h3>
                                                                <form method="post" class="pt-4">
                                                                    <div class="replay-action-bar">
                                                                        <div class="btn-group">
                                                                            <button class="btn" type="button" data-toggle="modal" data-target="#insertLinkModal" title="Insert link"><i class="la la-link"></i></button>
                                                                            <button class="btn" type="button" data-toggle="modal" data-target="#uploadPhotoModal" title="Upload an image"><i class="la la-photo"></i></button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <textarea class="form-control form--control pl-3" name="message" rows="4" placeholder="Write your response..."></textarea>
                                                                    </div>
                                                                    <div class="btn-box">
                                                                        <button class="btn theme-btn" type="submit">Add an answer <i class="la la-arrow-right icon ml-1"></i></button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div><!-- end question-replay-input-wrap -->
                                                    </div><!-- end question-answer-wrap -->
                                                </div><!-- end question-list-item -->
                                            </div><!-- end replay-question-body -->
                                        </div><!-- end replay-question-wrap -->
                                        <div class="question-overview-result-wrap">
                                            <div class="lecture-overview-item">
                                                <form method="post">
                                                    <div class="input-group mb-3">
                                                        <input class="form-control form--control form--control-gray pl-3" type="text" name="search" placeholder="Search all course questions">
                                                        <div class="input-group-append">
                                                            <button class="btn theme-btn"><i class="la la-search search-icon"></i></button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="question-overview-filter-wrap d-flex align-items-center">
                                                    <div class="question-overview-filter-item">
                                                        <div class="select-container w-100">
                                                            <select class="select-container-select">
                                                                <option value="0">All lectures</option>
                                                                <option value="1">Current lecture</option>
                                                            </select>
                                                        </div>
                                                    </div><!-- end question-overview-filter-item -->
                                                    <div class="question-overview-filter-item">
                                                        <div class="select-container w-100">
                                                            <select class="select-container-select">
                                                                <option value="0">Sort by most recent</option>
                                                                <option value="1">Sort by most upvoted</option>
                                                                <option value="2">Sort by recommended</option>
                                                            </select>
                                                        </div>
                                                    </div><!-- end question-overview-filter-item -->
                                                    <div class="question-overview-filter-item">
                                                        <div class="generic-action-wrap">
                                                            <div class="dropdown">
                                                                <a class="btn theme-btn theme-btn-transparent w-100" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    Filter questions
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <div class="dropdown-item">
                                                                        <div class="custom-control custom-checkbox fs-15">
                                                                            <input type="checkbox" class="custom-control-input" id="questionsCheckbox" required>
                                                                            <label class="custom-control-label custom--control-label" for="questionsCheckbox">
                                                                                Questions I'm following
                                                                            </label>
                                                                        </div><!-- end custom-control -->
                                                                    </div>
                                                                    <div class="dropdown-item">
                                                                        <div class="custom-control custom-checkbox fs-15">
                                                                            <input type="checkbox" class="custom-control-input" id="questionsCheckbox2" required>
                                                                            <label class="custom-control-label custom--control-label" for="questionsCheckbox2">
                                                                                Questions I asked
                                                                            </label>
                                                                        </div><!-- end custom-control -->
                                                                    </div>
                                                                    <div class="dropdown-item">
                                                                        <div class="custom-control custom-checkbox fs-15">
                                                                            <input type="checkbox" class="custom-control-input" id="questionsCheckbox3" required>
                                                                            <label class="custom-control-label custom--control-label" for="questionsCheckbox3">
                                                                               Questions without responses
                                                                            </label>
                                                                        </div><!-- end custom-control -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end generic-action-wrap -->
                                                    </div><!-- end question-overview-filter-item -->
                                                </div>
                                            </div><!-- end lecture-overview-item -->
                                            <div class="lecture-overview-item">
                                                <div class="question-overview-result-header d-flex align-items-center justify-content-between">
                                                    <h3 class="fs-17 font-weight-semi-bold">30 questions in this course</h3>
                                                    <button class="btn theme-btn theme-btn-sm theme-btn-transparent ask-new-question-btn">Ask a new question</button>
                                                </div>
                                            </div><!-- end lecture-overview-item -->
                                            <div class="section-block"></div>
                                            <div class="lecture-overview-item mt-0">
                                                <div class="question-list-item">
                                                    <div class="media media-card border-bottom border-bottom-gray py-4 px-3">
                                                        <div class="media-img rounded-full flex-shrink-0 avatar-sm">
                                                            <img class="rounded-full" src="images/small-avatar-1.jpg" alt="User image">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <div class="question-meta-content">
                                                                    <a href="javascript:void(0)" class="d-block">
                                                                        <h5 class="fs-16 pb-1">I still did't get H264 after installing Quicktime. Please what do I do</h5>
                                                                        <p class="text-truncate fs-15 text-gray">
                                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                                            Ut enim ad minim veniam, quis nostrud exercitation.
                                                                        </p>
                                                                    </a>
                                                                </div><!-- end question-meta-content -->
                                                                <div class="question-upvote-action">
                                                                    <div class="number-upvotes pb-2 d-flex align-items-center">
                                                                        <span>1</span>
                                                                        <button type="button"><i class="la la-arrow-up"></i></button>
                                                                    </div>
                                                                    <div class="number-upvotes question-response d-flex align-items-center">
                                                                        <span>1</span>
                                                                        <button type="button" class="question-replay-btn"><i class="la la-comments"></i></button>
                                                                    </div>
                                                                </div><!-- end question-upvote-action -->
                                                            </div>
                                                            <p class="meta-tags pt-1 fs-13">
                                                                <a href="#">Alex Smith</a>
                                                                <a href="#">Lecture 20</a>
                                                                <span>3 hours ago</span>
                                                            </p>
                                                        </div><!-- end media-body -->
                                                    </div><!-- end media -->
                                                    <div class="media media-card border-bottom border-bottom-gray py-4 px-3">
                                                        <div class="media-img rounded-full flex-shrink-0 avatar-sm">
                                                            <img class="rounded-full" src="images/small-avatar-2.jpg" alt="User image">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <div class="question-meta-content">
                                                                    <a href="javascript:void(0)" class="d-block">
                                                                        <h5 class="fs-16 pb-1">When i selected rectangle and placed it its create mask ? I cant solve this</h5>
                                                                        <p class="text-truncate fs-15 text-gray">
                                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                                            Ut enim ad minim veniam, quis nostrud exercitation.
                                                                        </p>
                                                                    </a>
                                                                </div><!-- end question-meta-content -->
                                                                <div class="question-upvote-action">
                                                                    <div class="number-upvotes pb-2 d-flex align-items-center">
                                                                        <span>0</span>
                                                                        <button type="button"><i class="la la-arrow-up"></i></button>
                                                                    </div>
                                                                    <div class="number-upvotes question-response d-flex align-items-center">
                                                                        <span>0</span>
                                                                        <button type="button" class="question-replay-btn"><i class="la la-comments"></i></button>
                                                                    </div>
                                                                </div><!-- end question-upvote-action -->
                                                            </div>
                                                            <p class="meta-tags pt-1 fs-13">
                                                                <a href="#">Alex Smith</a>
                                                                <a href="#">Lecture 20</a>
                                                                <span>3 hours ago</span>
                                                            </p>
                                                        </div><!-- end media-body -->
                                                    </div><!-- end media -->
                                                    <div class="media media-card border-bottom border-bottom-gray py-4 px-3">
                                                        <div class="media-img rounded-full flex-shrink-0 avatar-sm">
                                                            <img class="rounded-full" src="images/small-avatar-3.jpg" alt="User image">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <div class="question-meta-content">
                                                                    <a href="javascript:void(0)" class="d-block">
                                                                        <h5 class="fs-16 pb-1">Practice Activity</h5>
                                                                        <p class="text-truncate fs-15 text-gray">
                                                                            https://youtu.be/fzyAWYKh2pgg
                                                                        </p>
                                                                    </a>
                                                                </div><!-- end question-meta-content -->
                                                                <div class="question-upvote-action">
                                                                    <div class="number-upvotes pb-2 d-flex align-items-center">
                                                                        <span>0</span>
                                                                        <button type="button"><i class="la la-arrow-up"></i></button>
                                                                    </div>
                                                                    <div class="number-upvotes question-response d-flex align-items-center">
                                                                        <span>0</span>
                                                                        <button type="button" class="question-replay-btn"><i class="la la-comments"></i></button>
                                                                    </div>
                                                                </div><!-- end question-upvote-action -->
                                                            </div>
                                                            <p class="meta-tags pt-1 fs-13">
                                                                <a href="#">Alex Smith</a>
                                                                <a href="#">Lecture 20</a>
                                                                <span>3 hours ago</span>
                                                            </p>
                                                        </div><!-- end media-body -->
                                                    </div><!-- end media -->
                                                    <div class="media media-card border-bottom border-bottom-gray py-4 px-3">
                                                        <div class="media-img rounded-full flex-shrink-0 avatar-sm">
                                                            <img class="rounded-full" src="images/small-avatar-4.jpg" alt="User image">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <div class="question-meta-content">
                                                                    <a href="javascript:void(0)" class="d-block">
                                                                        <h5 class="fs-16 pb-1">The walking man composition.</h5>
                                                                        <p class="text-truncate fs-15 text-gray">
                                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                                            Ut enim ad minim veniam, quis nostrud exercitation.
                                                                        </p>
                                                                    </a>
                                                                </div><!-- end question-meta-content -->
                                                                <div class="question-upvote-action">
                                                                    <div class="number-upvotes pb-2 d-flex align-items-center">
                                                                        <span>0</span>
                                                                        <button type="button"><i class="la la-arrow-up"></i></button>
                                                                    </div>
                                                                    <div class="number-upvotes question-response d-flex align-items-center">
                                                                        <span>0</span>
                                                                        <button type="button" class="question-replay-btn"><i class="la la-comments"></i></button>
                                                                    </div>
                                                                </div><!-- end question-upvote-action -->
                                                            </div>
                                                            <p class="meta-tags pt-1 fs-13">
                                                                <a href="#">Alex Smith</a>
                                                                <a href="#">Lecture 20</a>
                                                                <span>3 hours ago</span>
                                                            </p>
                                                        </div><!-- end media-body -->
                                                    </div><!-- end media -->
                                                    <div class="media media-card border-bottom border-bottom-gray py-4 px-3">
                                                        <div class="media-img rounded-full flex-shrink-0 avatar-sm">
                                                            <img class="rounded-full" src="images/small-avatar-5.jpg" alt="User image">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <div class="question-meta-content">
                                                                    <a href="javascript:void(0)" class="d-block">
                                                                        <h5 class="fs-16 pb-1">Record options</h5>
                                                                        <p class="text-truncate fs-15 text-gray">
                                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                                            Ut enim ad minim veniam, quis nostrud exercitation.
                                                                        </p>
                                                                    </a>
                                                                </div><!-- end question-meta-content -->
                                                                <div class="question-upvote-action">
                                                                    <div class="number-upvotes pb-2 d-flex align-items-center">
                                                                        <span>0</span>
                                                                        <button type="button"><i class="la la-arrow-up"></i></button>
                                                                    </div>
                                                                    <div class="number-upvotes question-response d-flex align-items-center">
                                                                        <span>0</span>
                                                                        <button type="button" class="question-replay-btn"><i class="la la-comments"></i></button>
                                                                    </div>
                                                                </div><!-- end question-upvote-action -->
                                                            </div>
                                                            <p class="meta-tags pt-1 fs-13">
                                                                <a href="#">Alex Smith</a>
                                                                <a href="#">Lecture 20</a>
                                                                <span>3 hours ago</span>
                                                            </p>
                                                        </div><!-- end media-body -->
                                                    </div><!-- end media -->
                                                </div>
                                                <div class="question-btn-box pt-35px text-center">
                                                    <button class="btn theme-btn theme-btn-transparent w-100" type="button">See More</button>
                                                </div>
                                            </div><!-- end lecture-overview-item -->
                                        </div>
                                    </div>
                                </div><!-- end tab-pane -->
                                <div class="tab-pane fade" id="announcements" role="tabpanel" aria-labelledby="announcements-tab">
                                    <div class="lecture-overview-wrap lecture-announcement-wrap">
                                        <div class="lecture-overview-item">
                                            <div class="media media-card align-items-center">
                                                <a href="teacher-detail.html" class="media-img d-block rounded-full avatar-md">
                                                    <img src="images/small-avatar-1.jpg" alt="Instructor avatar" class="rounded-full">
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="pb-1"><a href="teacher-detail.html">Alex Smith</a></h5>
                                                    <div class="announcement-meta fs-15">
                                                        <span>Posted an announcement</span>
                                                        <span> · 3 years ago ·</span>
                                                        <a href="#" class="btn-text" data-toggle="modal" data-target="#reportModal" title="Report abuse"><i class="la la-flag"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="lecture-owner-decription pt-4">
                                                <h3 class="fs-19 font-weight-semi-bold pb-3">Important Q&A support</h3>
                                                <p>Happy 2019 to everyone, thank you for being a student and all of your support.</p>
                                                <p><strong>Great job on enrolling and your current course progress.  I encourage you keep in pursuit of your dreams :)</strong></p>
                                                <p>The whole lot. In my course After Effects Complete Course packed with all Techniques and Methods (No Tricks and gimmicks).</p>
                                                <p class="font-italic"><strong>Unfortunately this will result in delayed responses by me in the Q&A section and to direct messages.  This is only for the next week  and once back I will be back to 100% .</strong></p>
                                                <p>I will continue to do my best to respond to as many questions as possible but only one person, regularly I spend 4-5 hours daily on this and with over 440000 students as you can image that its a lot of work.</p>
                                                <p class="font-italic">Thank you once again for your understanding and for all of the wonderful students who I have had an opportunity to communicate with regularly and all of your encouragement.</p>
                                                <p>Have an awesome day</p>
                                                <p>Alex</p>
                                            </div>
                                            <div class="lecture-announcement-comment-wrap pt-4">
                                                <div class="media media-card align-items-center">
                                                    <div class="media-img rounded-full avatar-sm flex-shrink-0">
                                                        <img src="images/small-avatar-1.jpg" alt="Instructor avatar" class="rounded-full">
                                                    </div><!-- end media-img -->
                                                    <div class="media-body">
                                                        <form action="#">
                                                            <div class="input-group">
                                                                <input class="form-control form--control form--control-gray pl-3" type="text" name="search" placeholder="Enter your comment">
                                                                <div class="input-group-append">
                                                                    <button class="btn theme-btn" type="button"><i class="la la-arrow-right"></i></button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div><!-- end media-body -->
                                                </div><!-- end media -->
                                                <div class="comments pt-40px">
                                                    <div class="media media-card mb-3 border-bottom border-bottom-gray pb-3">
                                                        <div class="media-img rounded-full avatar-sm flex-shrink-0">
                                                            <img src="images/small-avatar-2.jpg" alt="Instructor avatar" class="rounded-full">
                                                        </div><!-- end media-img -->
                                                        <div class="media-body">
                                                            <div class="announcement-meta fs-15 lh-20">
                                                                <a href="#" class="text-color">Tony Olsson</a>
                                                                <span> · 3 years ago ·</span>
                                                                <a href="#" class="btn-text" data-toggle="modal" data-target="#reportModal" title="Report abuse"><i class="la la-flag"></i></a>
                                                            </div>
                                                            <p class="pt-1">Occaecati cupiditate non provident, similique sunt in culpa fuga.</p>
                                                        </div><!-- end media-body -->
                                                    </div><!-- end media -->
                                                    <div class="media media-card mb-3 border-bottom border-bottom-gray pb-3">
                                                        <div class="media-img rounded-full avatar-sm flex-shrink-0">
                                                            <img src="images/small-avatar-3.jpg" alt="Instructor avatar" class="rounded-full">
                                                        </div><!-- end media-img -->
                                                        <div class="media-body">
                                                            <div class="announcement-meta fs-15 lh-20">
                                                                <a href="#" class="text-color">Eduard-Dan</a>
                                                                <span> · 2 years ago ·</span>
                                                                <a href="#" class="btn-text" data-toggle="modal" data-target="#reportModal" title="Report abuse"><i class="la la-flag"></i></a>
                                                            </div>
                                                            <p class="pt-1">Occaecati cupiditate non provident, similique sunt in culpa fuga.</p>
                                                        </div><!-- end media-body -->
                                                    </div><!-- end media -->
                                                </div><!-- end comments -->
                                            </div><!-- end lecture-announcement-comment-wrap -->
                                        </div><!-- end lecture-overview-item -->
                                    </div>
                                </div><!-- end tab-pane -->
                            </div><!-- end tab-content -->
                        </div><!-- end lecture-video-detail-body -->
                    </div><!-- end lecture-video-detail -->
                    <div class="cta-area py-4 bg-gray">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="cta-content-wrap">
                                        <h3 class="fs-18 font-weight-semi-bold">Top companies choose <a href="for-business.html" class="text-color hover-underline">Aduca for Business</a> to build in-demand career skills.</h3>
                                    </div>
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6">
                                    <div class="client-logo-wrap text-right">
                                        <a href="#" class="client-logo-item client--logo-item-2 pr-3"><img src="images/sponsor-img.png" alt="brand image"></a>
                                        <a href="#" class="client-logo-item client--logo-item-2 pr-3"><img src="images/sponsor-img2.png" alt="brand image"></a>
                                        <a href="#" class="client-logo-item client--logo-item-2 pr-3"><img src="images/sponsor-img3.png" alt="brand image"></a>
                                    </div><!-- end client-logo-wrap -->
                                </div><!-- end col-lg-6 -->
                            </div><!-- end row -->
                        </div><!-- end container-fluid -->
                    </div><!-- end cta-area -->
                    <div class="footer-area pt-50px">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-3 responsive-column-half">
                                    <div class="footer-item">
                                        <a href="index.html">
                                            <img src="images/logo.png" alt="footer logo" class="footer__logo">
                                        </a>
                                        <ul class="generic-list-item pt-4">
                                            <li><a href="tel:+1631237884">+163 123 7884</a></li>
                                            <li><a href="mailto:support@wbsite.com">support@website.com</a></li>
                                            <li>Melbourne, Australia, 105 South Park Avenue</li>
                                        </ul>
                                    </div><!-- end footer-item -->
                                </div><!-- end col-lg-3 -->
                                <div class="col-lg-3 responsive-column-half">
                                    <div class="footer-item">
                                        <h3 class="fs-20 font-weight-semi-bold pb-3">Company</h3>
                                        <ul class="generic-list-item">
                                            <li><a href="#">About us</a></li>
                                            <li><a href="#">Contact us</a></li>
                                            <li><a href="#">Become a Teacher</a></li>
                                            <li><a href="#">Support</a></li>
                                            <li><a href="#">FAQs</a></li>
                                            <li><a href="#">Blog</a></li>
                                        </ul>
                                    </div><!-- end footer-item -->
                                </div><!-- end col-lg-3 -->
                                <div class="col-lg-3 responsive-column-half">
                                    <div class="footer-item">
                                        <h3 class="fs-20 font-weight-semi-bold pb-3">Courses</h3>
                                        <ul class="generic-list-item">
                                            <li><a href="#">Web Development</a></li>
                                            <li><a href="#">Hacking</a></li>
                                            <li><a href="#">PHP Learning</a></li>
                                            <li><a href="#">Spoken English</a></li>
                                            <li><a href="#">Self-Driving Car</a></li>
                                            <li><a href="#">Garbage Collectors</a></li>
                                        </ul>
                                    </div><!-- end footer-item -->
                                </div><!-- end col-lg-3 -->
                                <div class="col-lg-3 responsive-column-half">
                                    <div class="footer-item">
                                        <h3 class="fs-20 font-weight-semi-bold pb-3">Download App</h3>
                                        <div class="mobile-app">
                                            <p class="pb-3 lh-24">Download our mobile app and learn on the go.</p>
                                            <a href="#" class="d-block mb-2 hover-s"><img src="images/appstore.png" alt="App store" class="img-fluid"></a>
                                            <a href="#" class="d-block hover-s"><img src="images/googleplay.png" alt="Google play store" class="img-fluid"></a>
                                        </div>
                                    </div><!-- end footer-item -->
                                </div><!-- end col-lg-3 -->
                            </div><!-- end row -->
                        </div><!-- end container-fluid -->
                        <div class="section-block"></div>
                        <div class="copyright-content py-4">
                            <div class="container-fluid">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <p class="copy-desc">&copy; 2021 Aduca. All Rights Reserved. by <a href="https://techydevs.com/">TechyDevs</a></p>
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6">
                                        <div class="d-flex flex-wrap align-items-center justify-content-end">
                                            <ul class="generic-list-item d-flex flex-wrap align-items-center fs-14">
                                                <li class="mr-3"><a href="terms-and-conditions.html">Terms & Conditions</a></li>
                                                <li class="mr-3"><a href="privacy-policy.html">Privacy Policy</a></li>
                                            </ul>
                                            <div class="select-container select-container-sm">
                                                <select class="select-container-select">
                                                    <option value="1">English</option>
                                                    <option value="2">Deutsch</option>
                                                    <option value="3">Español</option>
                                                    <option value="4">Français</option>
                                                    <option value="5">Bahasa Indonesia</option>
                                                    <option value="6">Bangla</option>
                                                    <option value="7">日本語</option>
                                                    <option value="8">한국어</option>
                                                    <option value="9">Nederlands</option>
                                                    <option value="10">Polski</option>
                                                    <option value="11">Português</option>
                                                    <option value="12">Română</option>
                                                    <option value="13">Русский</option>
                                                    <option value="14">ภาษาไทย</option>
                                                    <option value="15">Türkçe</option>
                                                    <option value="16">中文(简体)</option>
                                                    <option value="17">中文(繁體)</option>
                                                    <option value="17">Hindi</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-6 -->
                                </div><!-- end row -->
                            </div><!-- end container-fluid -->
                        </div><!-- end copyright-content -->
                    </div><!-- end footer-area -->
                </div><!-- end course-dashboard-column -->
                <div class="course-dashboard-sidebar-column">
                    <button class="sidebar-open" type="button"><i class="la la-angle-left"></i> Course content</button>
                    <div class="course-dashboard-sidebar-wrap custom-scrollbar-styled">
                        <div class="course-dashboard-side-heading d-flex align-items-center justify-content-between">
                            <h3 class="fs-18 font-weight-semi-bold">Course content</h3>
                            <button class="sidebar-close" type="button"><i class="la la-times"></i></button>
                        </div><!-- end course-dashboard-side-heading -->
                        <div class="course-dashboard-side-content">
                            <div class="accordion generic-accordion generic--accordion" id="accordionCourseExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <i class="la la-angle-down"></i>
                                            <i class="la la-angle-up"></i>
                                            <span class="fs-15"> Section 1: Dive in and Discover After Effects</span>
                                            <span class="course-duration">
                                                <span>1/5</span>
                                                <span>21min</span>
                                            </span>
                                        </button>
                                    </div><!-- end card-header -->
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionCourseExample">
                                        <div class="card-body p-0">
                                            <ul class="curriculum-sidebar-list">
                                                <li class="course-item-link active">
                                                    <div class="course-item-content-wrap">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="courseCheckbox" required>
                                                            <label class="custom-control-label custom--control-label" for="courseCheckbox"></label>
                                                        </div><!-- end custom-control -->
                                                        <div class="course-item-content">
                                                            <h4 class="fs-15">1. Let's Have Fun - Seriously!</h4>
                                                            <div class="courser-item-meta-wrap">
                                                                <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                            </div>
                                                        </div><!-- end course-item-content -->
                                                    </div><!-- end course-item-content-wrap -->
                                                </li>
                                                <li class="course-item-link">
                                                    <div class="course-item-content-wrap">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="courseCheckbox2" required>
                                                            <label class="custom-control-label custom--control-label" for="courseCheckbox2"></label>
                                                        </div><!-- end custom-control -->
                                                        <div class="course-item-content">
                                                            <h4 class="fs-15">2. A simple concept to get ahead</h4>
                                                            <div class="courser-item-meta-wrap">
                                                                <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                            </div>
                                                        </div><!-- end course-item-content -->
                                                    </div><!-- end course-item-content-wrap -->
                                                </li>
                                                <li class="course-item-link active-resource">
                                                    <div class="course-item-content-wrap">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="courseCheckbox3" required>
                                                            <label class="custom-control-label custom--control-label" for="courseCheckbox3"></label>
                                                        </div><!-- end custom-control -->
                                                        <div class="course-item-content">
                                                            <h4 class="fs-15">3. Download your Footage for your Quick Start</h4>
                                                            <div class="courser-item-meta-wrap">
                                                                <p class="course-item-meta"><i class="la la-file"></i>2min</p>
                                                                <div class="generic-action-wrap">
                                                                    <div class="dropdown">
                                                                        <a class="btn theme-btn theme-btn-sm theme-btn-transparent mt-1 fs-14 font-weight-medium" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="la la-folder-open mr-1"></i> Resources<i class="la la-angle-down ml-1"></i>
                                                                        </a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <a class="dropdown-item" href="javascript:void(0)">
                                                                                Section-Footage.zip
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- end generic-action-wrap -->
                                                            </div>
                                                        </div><!-- end course-item-content -->
                                                    </div><!-- end course-item-content-wrap -->
                                                </li>
                                                <li class="course-item-link">
                                                    <div class="course-item-content-wrap">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="courseCheckbox4" required>
                                                            <label class="custom-control-label custom--control-label" for="courseCheckbox4"></label>
                                                        </div><!-- end custom-control -->
                                                        <div class="course-item-content">
                                                            <h4 class="fs-15">4. Jump in and Animate your Character</h4>
                                                            <div class="courser-item-meta-wrap">
                                                                <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                            </div>
                                                        </div><!-- end course-item-content -->
                                                    </div><!-- end course-item-content-wrap -->
                                                </li>
                                            </ul>
                                        </div><!-- end card-body -->
                                    </div><!-- end collapse -->
                                </div><!-- end card -->
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="la la-angle-down"></i>
                                            <i class="la la-angle-up"></i>
                                            <span class="fs-15">Section 2: Jump Start Into Motion Graphics</span>
                                            <span class="course-duration">
                                                <span>1/5</span>
                                                <span>21min</span>
                                            </span>
                                        </button>
                                    </div><!-- end card-header -->
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionCourseExample">
                                        <div class="card-body p-0">
                                            <ul class="curriculum-sidebar-list">
                                                <li class="course-item-link">
                                                    <div class="course-item-content-wrap">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="courseCheckbox5" required>
                                                            <label class="custom-control-label custom--control-label" for="courseCheckbox5"></label>
                                                        </div><!-- end custom-control -->
                                                        <div class="course-item-content">
                                                            <h4 class="fs-15">5. Let's Have Fun - Seriously!</h4>
                                                            <div class="courser-item-meta-wrap">
                                                                <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                            </div>
                                                        </div><!-- end course-item-content -->
                                                    </div><!-- end course-item-content-wrap -->
                                                </li>
                                                <li class="course-item-link">
                                                    <div class="course-item-content-wrap">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="courseCheckbox6" required>
                                                            <label class="custom-control-label custom--control-label" for="courseCheckbox6"></label>
                                                        </div><!-- end custom-control -->
                                                        <div class="course-item-content">
                                                            <h4 class="fs-15">6. A simple concept to get ahead</h4>
                                                            <div class="courser-item-meta-wrap">
                                                                <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                            </div>
                                                        </div><!-- end course-item-content -->
                                                    </div><!-- end course-item-content-wrap -->
                                                </li>
                                                <li class="course-item-link active-resource">
                                                    <div class="course-item-content-wrap">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="courseCheckbox7" required>
                                                            <label class="custom-control-label custom--control-label" for="courseCheckbox7"></label>
                                                        </div><!-- end custom-control -->
                                                        <div class="course-item-content">
                                                            <h4 class="fs-15">7. Download your Footage for your Quick Start</h4>
                                                            <div class="courser-item-meta-wrap">
                                                                <p class="course-item-meta"><i class="la la-file"></i>2min</p>
                                                                <div class="generic-action-wrap">
                                                                    <div class="dropdown">
                                                                        <a class="btn theme-btn theme-btn-sm theme-btn-transparent mt-1 fs-14 font-weight-medium" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="la la-folder-open mr-1"></i> Resources<i class="la la-angle-down ml-1"></i>
                                                                        </a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <a class="dropdown-item" href="javascript:void(0)">
                                                                                Section-Footage.zip
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- end generic-action-wrap -->
                                                            </div>
                                                        </div><!-- end course-item-content -->
                                                    </div><!-- end course-item-content-wrap -->
                                                </li>
                                                <li class="course-item-link">
                                                    <div class="course-item-content-wrap">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="courseCheckbox8" required>
                                                            <label class="custom-control-label custom--control-label" for="courseCheckbox8"></label>
                                                        </div><!-- end custom-control -->
                                                        <div class="course-item-content">
                                                            <h4 class="fs-15">8. Jump in and Animate your Character</h4>
                                                            <div class="courser-item-meta-wrap">
                                                                <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                            </div>
                                                        </div><!-- end course-item-content -->
                                                    </div><!-- end course-item-content-wrap -->
                                                </li>
                                            </ul>
                                        </div><!-- end card-body -->
                                    </div><!-- end collapse -->
                                </div><!-- end card -->
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="la la-angle-down"></i>
                                            <i class="la la-angle-up"></i>
                                            <span class="fs-15">Section 3: Graphics from within After Effects</span>
                                            <span class="course-duration">
                                                <span>1/5</span>
                                                <span>21min</span>
                                            </span>
                                        </button>
                                    </div><!-- end card-heder -->
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionCourseExample">
                                        <div class="card-body p-0">
                                            <ul class="curriculum-sidebar-list">
                                                <li class="course-item-link">
                                                    <div class="course-item-content-wrap">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="courseCheckbox9" required>
                                                            <label class="custom-control-label custom--control-label" for="courseCheckbox9"></label>
                                                        </div><!-- end custom-control -->
                                                        <div class="course-item-content">
                                                            <h4 class="fs-15">9. Let's Have Fun - Seriously!</h4>
                                                            <div class="courser-item-meta-wrap">
                                                                <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                            </div>
                                                        </div><!-- end course-item-content -->
                                                    </div><!-- end course-item-content-wrap -->
                                                </li>
                                                <li class="course-item-link">
                                                    <div class="course-item-content-wrap">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="courseCheckbox10" required>
                                                            <label class="custom-control-label custom--control-label" for="courseCheckbox10"></label>
                                                        </div><!-- end custom-control -->
                                                        <div class="course-item-content">
                                                            <h4 class="fs-15">10. A simple concept to get ahead</h4>
                                                            <div class="courser-item-meta-wrap">
                                                                <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                            </div>
                                                        </div><!-- end course-item-content -->
                                                    </div><!-- end course-item-content-wrap -->
                                                </li>
                                                <li class="course-item-link active-resource">
                                                    <div class="course-item-content-wrap">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="courseCheckbox11" required>
                                                            <label class="custom-control-label custom--control-label" for="courseCheckbox11"></label>
                                                        </div><!-- end custom-control -->
                                                        <div class="course-item-content">
                                                            <h4 class="fs-15">11. Download your Footage for your Quick Start</h4>
                                                            <div class="courser-item-meta-wrap">
                                                                <p class="course-item-meta"><i class="la la-file"></i>2min</p>
                                                                <div class="generic-action-wrap">
                                                                    <div class="dropdown">
                                                                        <a class="btn theme-btn theme-btn-sm theme-btn-transparent mt-1 fs-14 font-weight-medium" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="la la-folder-open mr-1"></i> Resources<i class="la la-angle-down ml-1"></i>
                                                                        </a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <a class="dropdown-item" href="javascript:void(0)">
                                                                                Section-Footage.zip
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- end generic-action-wrap -->
                                                            </div>
                                                        </div><!-- end course-item-content -->
                                                    </div><!-- end course-item-content-wrap -->
                                                </li>
                                                <li class="course-item-link">
                                                    <div class="course-item-content-wrap">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="courseCheckbox12" required>
                                                            <label class="custom-control-label custom--control-label" for="courseCheckbox12"></label>
                                                        </div><!-- end custom-control -->
                                                        <div class="course-item-content">
                                                            <h4 class="fs-15">12. Jump in and Animate your Character</h4>
                                                            <div class="courser-item-meta-wrap">
                                                                <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                            </div>
                                                        </div><!-- end course-item-content -->
                                                    </div><!-- end course-item-content-wrap -->
                                                </li>
                                            </ul>
                                        </div><!-- end card-body -->
                                    </div><!-- end collapse -->
                                </div><!-- end card -->
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            <i class="la la-angle-down"></i>
                                            <i class="la la-angle-up"></i>
                                            <span class="fs-15">Section 4: Bonus Lecture</span>
                                            <span class="course-duration">
                                                <span>1/5</span>
                                                <span>21min</span>
                                            </span>
                                        </button>
                                    </div><!-- end card-heder -->
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionCourseExample">
                                        <div class="card-body p-0">
                                            <ul class="curriculum-sidebar-list">
                                                <li class="course-item-link">
                                                    <div class="course-item-content-wrap">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="courseCheckbox13" required>
                                                            <label class="custom-control-label custom--control-label" for="courseCheckbox13"></label>
                                                        </div><!-- end custom-control -->
                                                        <div class="course-item-content">
                                                            <h4 class="fs-15">13. Bonus Courses - Learn more for less</h4>
                                                            <div class="courser-item-meta-wrap">
                                                                <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                            </div>
                                                        </div><!-- end course-item-content -->
                                                    </div><!-- end course-item-content-wrap -->
                                                </li>
                                                <li class="course-item-link">
                                                    <div class="course-item-content-wrap">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="courseCheckbox14" required>
                                                            <label class="custom-control-label custom--control-label" for="courseCheckbox14"></label>
                                                        </div><!-- end custom-control -->
                                                        <div class="course-item-content">
                                                            <h4 class="fs-15">14. Conclusion</h4>
                                                            <div class="courser-item-meta-wrap">
                                                                <p class="course-item-meta"><i class="la la-play-circle"></i>2min</p>
                                                            </div>
                                                        </div><!-- end course-item-content -->
                                                    </div><!-- end course-item-content-wrap -->
                                                </li>
                                            </ul>
                                        </div><!-- end card-body -->
                                    </div><!-- end collapse -->
                                </div><!-- end card -->
                            </div><!-- end accordion-->
                        </div><!-- end course-dashboard-side-content -->
                    </div><!-- end course-dashboard-sidebar-wrap -->
                </div><!-- end course-dashboard-sidebar-column -->
            </div><!-- end course-dashboard-container -->
        </div><!-- end course-dashboard-wrap -->
    </section><!-- end course-dashboard -->
    <!--======================================
            END COURSE-DASHBOARD
    ======================================-->

@endsection