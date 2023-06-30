 <!-- Sidebar -->
 <nav class="navbar-vertical navbar">
     <div class="nav-scroller">
         <!-- Brand logo -->
         <a class="navbar-brand">
             <img src="{{ asset('admin_assets/images/brand/logo/logo.svg') }}" alt="" />
         </a>
         <!-- Navbar nav -->
         <ul class="navbar-nav flex-column" id="sideNavbar">
             <li class="nav-item">
                 <a class="nav-link has-arrow "
                     >
                     <i data-feather="home" class="nav-icon icon-xs me-2"></i>Admin Dashboard
                 </a>

             </li>
             <!-- Nav item -->
             <li class="nav-item">
                 <div class="navbar-heading">Front Section</div>
             </li>
             <!-- Nav item -->
             <li class="nav-item">
                <a class="nav-link has-arrow " href="#!"
                    data-bs-toggle="collapse" data-bs-target="#navPages" aria-expanded="false"
                    aria-controls="navPages">
                    <i data-feather="layers" class="nav-icon icon-xs me-2">
                    </i> Manage Front End
                </a>

                <div id="navPages" class="collapse "
                    data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link  "
                                href="">
                                Menu
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link has-arrow   "
                                href="pages/settings.html">
                                Settings
                            </a>

                        </li>


                        <li class="nav-item">
                            <a class="nav-link "
                                href="pages/billing.html">
                                Billing
                            </a>
                        </li>




                        <li class="nav-item">
                            <a class="nav-link "
                                href="pages/pricing.html">
                                Pricing
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link "
                                href="pages/404-error.html">
                                404 Error
                            </a>
                        </li>
                    </ul>
                </div>

            </li>
             <li class="nav-item">
                 <a class="nav-link has-arrow " href="#!"
                     data-bs-toggle="collapse" data-bs-target="#navPages" aria-expanded="false"
                     aria-controls="navPages">
                     <i data-feather="layers" class="nav-icon icon-xs me-2">
                     </i> Manage Users
                 </a>

                 <div id="navPages" class="collapse "
                     data-bs-parent="#sideNavbar">
                     <ul class="nav flex-column">
                         <li class="nav-item">
                             <a class="nav-link  "
                                 href="pages/profile.html">
                                 Profile
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link has-arrow   "
                                 href="pages/settings.html">
                                 Settings
                             </a>

                         </li>


                         <li class="nav-item">
                             <a class="nav-link "
                                 href="pages/billing.html">
                                 Billing
                             </a>
                         </li>




                         <li class="nav-item">
                             <a class="nav-link "
                                 href="pages/pricing.html">
                                 Pricing
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link "
                                 href="pages/404-error.html">
                                 404 Error
                             </a>
                         </li>
                     </ul>
                 </div>

             </li>


             <!-- Nav item -->
             <li class="nav-item">
                 <a class="nav-link has-arrow  " href="#!"
                     data-bs-toggle="collapse" data-bs-target="#navAuthentication" aria-expanded="false"
                     aria-controls="navAuthentication">
                     <i data-feather="lock" class="nav-icon icon-xs me-2">
                     </i> Authentication
                 </a>
                 <div id="navAuthentication" class="collapse  "
                     data-bs-parent="#sideNavbar">
                     <ul class="nav flex-column">
                         <li class="nav-item">
                             <a class="nav-link  "
                                 href="pages/sign-in.html"> Sign In</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link  "
                                 href="pages/sign-up.html"> Sign Up</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link  "
                                 href="pages/forget-password.html">
                                 Forget Password
                             </a>
                         </li>

                     </ul>
                 </div>
             </li>
             <li class="nav-item">
                 <a class="nav-link "
                     href="pages/layout.html">
                     <i data-feather="sidebar" class="nav-icon icon-xs me-2">
                     </i>
                     Layouts
                 </a>
             </li>

             <!-- Nav item -->
             <li class="nav-item">
                 <div class="navbar-heading">UI Components</div>
             </li>

             <!-- Nav item -->
             <li class="nav-item">
                 <a class="nav-link has-arrow  "
                     href="docs/accordions.html">
                     <i data-feather="package" class="nav-icon icon-xs me-2">
                     </i> Components
                 </a>
             </li>


             <li class="nav-item">
                 <a class="nav-link has-arrow " href="#!"
                     data-bs-toggle="collapse" data-bs-target="#navMenuLevel" aria-expanded="false"
                     aria-controls="navMenuLevel">
                     <i data-feather="corner-left-down" class="nav-icon icon-xs me-2">
                     </i> Menu Level
                 </a>
                 <div id="navMenuLevel" class="collapse "
                     data-bs-parent="#sideNavbar">
                     <ul class="nav flex-column">
                         <li class="nav-item">
                             <a class="nav-link has-arrow "
                                 data-bs-toggle="collapse" data-bs-target="#navMenuLevelSecond" aria-expanded="false"
                                 aria-controls="navMenuLevelSecond">
                                 Two Level
                             </a>
                             <div id="navMenuLevelSecond" class="collapse" data-bs-parent="#navMenuLevel">
                                 <ul class="nav flex-column">
                                     <li class="nav-item">
                                         <a class="nav-link "
                                             href="#!"> NavItem 1</a>
                                     </li>
                                     <li class="nav-item">
                                         <a class="nav-link"
                                             href="#!"> NavItem 2</a>
                                     </li>
                                 </ul>
                             </div>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link has-arrow "
                                 href="#!" data-bs-toggle="collapse" data-bs-target="#navMenuLevelThree"
                                 aria-expanded="false" aria-controls="navMenuLevelThree">
                                 Three Level
                             </a>
                             <div id="navMenuLevelThree" class="collapse "
                                 data-bs-parent="#navMenuLevel">
                                 <ul class="nav flex-column">
                                     <li class="nav-item">
                                         <a class="nav-link "
                                             href="#!" data-bs-toggle="collapse"
                                             data-bs-target="#navMenuLevelThreeOne" aria-expanded="false"
                                             aria-controls="navMenuLevelThreeOne">
                                             NavItem 1
                                         </a>
                                         <div id="navMenuLevelThreeOne"
                                             class="collapse collapse "
                                             data-bs-parent="#navMenuLevelThree">
                                             <ul class="nav flex-column">
                                                 <li class="nav-item">
                                                     <a class="nav-link "
                                                         href="#!">
                                                         NavChild Item 1
                                                     </a>
                                                 </li>
                                             </ul>
                                         </div>
                                     </li>
                                     <li class="nav-item">
                                         <a class="nav-link "
                                             href="#!"> Nav Item 2</a>
                                     </li>
                                 </ul>
                             </div>
                         </li>
                     </ul>
                 </div>
             </li>

             <!-- Nav item -->
             <li class="nav-item">
                 <div class="navbar-heading">Documentation</div>
             </li>

             <!-- Nav item -->
             <li class="nav-item">
                 <a class="nav-link has-arrow "
                     href="docs/index.html">
                     <i data-feather="clipboard" class="nav-icon icon-xs me-2">
                     </i> Docs
                 </a>
             </li>
             <li class="nav-item">
                 <a class="nav-link has-arrow "
                     href="docs/changelog.html">
                     <i data-feather="git-pull-request" class="nav-icon icon-xs me-2">
                     </i> Changelog
                 </a>
             </li>
         </ul>
     </div>
 </nav>
