<div class="app-main">
    <div class="app-sidebar sidebar-shadow">
        <div class="app-header__logo">
            <div class="logo-src"></div>
            <div class="header__pane ml-auto">
                <div>
                    <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="app-header__mobile-menu">
            <div>
                <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
        <div class="app-header__menu">
            <span>
                <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                    <span class="btn-icon-wrapper">
                        <i class="fa fa-ellipsis-v fa-w-6"></i>
                    </span>
                </button>
            </span>
        </div>    
        <div class="scrollbar-sidebar">
            <div class="app-sidebar__inner">
                <ul class="vertical-nav-menu">
                    <li class="app-sidebar__heading">Menu</li>
                    <li  class="mm-active">
                        <a href="{{ route('dashboard') }}">
                            <i class="metismenu-icon fa fa-rocket"></i>Dashboards
                            
                        </a>
                       
                    </li>
                    
                    <li class="app-sidebar__heading">Basic Information</li>
                    <li>
                        
                        <a href="#">
                            <i class="metismenu-icon fa fa-object-group"></i> About Us Page
                            <i class="metismenu-state-icon pe-7s-angle-down fa fa-caret-up"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="{{ route('about') }}" >
                                    <i class="metismenu-icon"></i>About Us
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('aims') }}" >
                                    <i class="metismenu-icon"></i>Aims and Objectives
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('vision') }}">
                                    <i class="metismenu-icon"></i> Vision
                                   
                                </a>
                               
                            </li>
                            <li>
                                <a href="{{ route('mission') }}">
                                    <i class="metismenu-icon"></i> Mission
                                   
                                </a>
                               
                            </li>
                            <li>
                                <a href="{{ route('goal') }}" >
                                    <i class="metismenu-icon"></i>Goal
                                </a>
                            </li>
                           
                            <li>
                                <a>
                                    <i class="metismenu-icon"></i>Board Of Trustees
                                    <i class="metismenu-state-icon pe-7s-angle-down fa fa-caret-up"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{ route('Add-New-Board-of-Trustee') }}" >
                                            <i class="metismenu-icon"></i>Add New
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('All-Board-of-Trustees') }}" >
                                            <i class="metismenu-icon"></i>View All
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li> 
                            <li>
                                <a>
                                    <i class="metismenu-icon"></i>Management Team
                                    <i class="metismenu-state-icon pe-7s-angle-down fa fa-caret-up"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{ route('Add-New-Member') }}" >
                                            <i class="metismenu-icon"></i>Add New
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('All-Member') }}" >
                                            <i class="metismenu-icon"></i>View All
                                        </a>
                                    </li>
                                   
                                </ul>
                            </li>
                            
                        </ul>
                    </li> 
                    <li>
                        <a href="{{ route('pageinfo') }}">
                            <i class="metismenu-icon fa fa-cogs"></i>Page Information
                        </a>
                    </li>   
                    <li class="app-sidebar__heading">Questions</li>
                    <li>
                        <a href="{{ route('Admin-Frequently-Asked-Questions') }}">
                            <i class="metismenu-icon fa fa-question-circle"></i> Frequently asked questions
                            
                        </a>
                        
                    </li>

                    <li class="app-sidebar__heading">Gallery</li>
                    <li>
                        <a href="#">
                            <i class="metismenu-icon fa fa-images"></i> Gallery
                            <i class="metismenu-state-icon pe-7s-angle-down fa fa-angle-double-up"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="{{ route('View-Admin-Gallery') }}">
                                    <i class="metismenu-icon"></i> New Gallery
                                   
                                </a>
                               
                            </li>
                            <li>
                                <a href="{{ route('View-All-Gallery') }}" >
                                    <i class="metismenu-icon"></i>View Gallery
                                </a>
                            </li>
                           
                           
                        </ul>
                    </li>

                    <li class="app-sidebar__heading">News and Events</li>
                    <li>
                        <a href="#">
                            <i class="metismenu-icon fa fa-newspaper"></i> News
                            <i class="metismenu-state-icon pe-7s-angle-down fa fa-caret-up"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="{{ route('Admin-News') }}">
                                    <i class="metismenu-icon"></i> Add News
                                   
                                </a>
                               
                            </li>
                            <li>
                                <a href="{{ route('All-News') }}" >
                                    <i class="metismenu-icon"></i>View News
                                </a>
                            </li>
                         </ul>
                    </li><li>
                        <a href="#">
                            <i class="metismenu-icon fa fa-newspaper"></i> Events
                            <i class="metismenu-state-icon pe-7s-angle-down fa fa-caret-up"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="{{ route('Admin-Event') }}">
                                    <i class="metismenu-icon"></i> Add Event
                                   
                                </a>
                               
                            </li>
                            <li>
                                <a href="{{ route('All-Event') }}" >
                                    <i class="metismenu-icon"></i>View Events
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="app-sidebar__heading">Donations</li>
                    <li>
                        <a href="#">
                            <i class="metismenu-icon fa fa-dollar-sign"></i> 
                            Donations Page                  
                        </a>
                        
                    </li>

                    <li class="app-sidebar__heading">Memebership</li>
                    <li>
                        <a href="#">
                            <i class="metismenu-icon fa fa-user-friends"></i> Memebership Page
                            <i class="metismenu-state-icon pe-7s-angle-down fa fa-caret-up"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="{{ route('View-Admin-Membership-Categories') }}">
                                    <i class="metismenu-icon"></i> Memebership Categories
                                   
                                </a>
                               
                            </li>
                            <li>
                                <a href="{{ route('View-Admin-Membership-Benefits') }}" >
                                    <i class="metismenu-icon"></i>Benefit to Members
                                </a>
                            </li>
                            <li>
                                <a href="elements-icons.html" >
                                    <i class="metismenu-icon"></i>Memebership Application forms
                                </a>
                            </li><li>
                                <a href="{{ route('View-Admin-Volunteer-Oppurtunities') }}" >
                                    <i class="metismenu-icon"></i>Volunteer Opportunities
                                </a>
                            </li>
                          
                        </ul>
                    </li> 
                   
                    <li class="app-sidebar__heading">Programmes</li>
                    <li>
                        <a href="#">
                            <i class="metismenu-icon fa fa-project-diagram"></i> Programmes Page
                            <i class="metismenu-state-icon pe-7s-angle-down fa fa-caret-up"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="{{ route('AdminAwareness') }}">
                                    <i class="metismenu-icon"></i> Awarness 
                                   
                                </a>
                               
                            </li>
                            <li>
                                <a href="{{ route('AdminResearch') }}" >
                                    <i class="metismenu-icon"></i>Research
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('AdminFunds') }}" >
                                    <i class="metismenu-icon"></i>Fund Raising</a>
                            </li>
                           
                          
                        </ul>
                    </li> 
                  
                    
                </ul>
            </div>
        </div>
    </div>
    