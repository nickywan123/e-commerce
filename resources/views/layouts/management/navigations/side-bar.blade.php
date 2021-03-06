<div class="sidebar sidebar-bg-color">
    <nav class="sidebar-nav">
        <ul class="nav sidebar-margin-top">
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="nav-icon icon-user icon-color"></i> Profile
                </a>
                <ul class="nav-dropdown-items">
                   @hasrole('dealer')
                    <li class="nav-item">
                        <a href="/management/profile" class="nav-link">
                            <i class="nav-icon fa fa-list icon-color"></i> Profile
                        </a>
                    </li>
                    @endhasrole
                    @hasrole('panel')
                    <li class="nav-item">
                        <a href="/management/profile" class="nav-link">
                            <i class="nav-icon fa fa-list icon-color"></i> Company Info
                        </a>
                    </li>
                    @endhasrole
                    <li class="nav-item">
                        <a href="/management/password" class="nav-link">
                            <i class="nav-icon fa fa-key icon-color"></i>Edit Password
                        </a>
                    </li>
                    @hasrole('panel')
                    <li class="nav-item">
                        <a href="/management/panel/person-in-charge" class="nav-link">
                            <i class="nav-icon fa fa-key icon-color"></i> Assignee
                        </a>
                    </li>
                    @endrole
                </ul>
            </li>
            @hasrole('panel')
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="nav-icon icon-folder icon-color"></i> Orders
                </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a href="/management/orders/all" class="nav-link">
                            <i class="nav-icon fa fa-list icon-color"></i> All
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/management/orders/open" class="nav-link">
                            <i class="nav-icon fa fa-key icon-color"></i>Open
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/management/orders/in-progress" class="nav-link">
                            <i class="nav-icon fa fa-key icon-color"></i> In Progress
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/management/orders/delivered" class="nav-link">
                            <i class="nav-icon fa fa-key icon-color"></i> Delivered
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/management/orders/completed" class="nav-link">
                            <i class="nav-icon fa fa-key icon-color"></i> Completed
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/management/orders/cancelled" class="nav-link">
                            <i class="nav-icon fa fa-key icon-color"></i> Cancelled
                        </a>
                    </li>

                </ul>
            </li>
            <li class="nav-item nav-dropdown">
                <a href="#" class="nav-link nav-dropdown-toggle">
                    <i class="nav-icon icon-menu icon-color"></i> Products
                </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a href="/management/product" class="nav-link">
                            <i class="nav-icon fa fa-medal icon-color"></i> My Products
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/management/product/create" class="nav-link">
                            <i class="nav-icon fa fa-plus icon-color"></i> New Product
                        </a>
                    </li>
                </ul>
            </li>
            @endhasrole

            @hasrole('administrator')
            <li class="nav-item nav-dropdown">
                <a href="#" class="nav-link nav-dropdown-toggle">
                    <i class="nav-icon icon-menu icon-color"></i> User Management
                </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a href="/management/administrator/user/panel" class="nav-link">
                            <i class="nav-icon fa fa-medal icon-color"></i> Panel
                        </a>
                    </li>
                </ul>
            </li>
            @endhasrole
            <li class="nav-item">
                <a class="nav-link" href="/management/statements">
                    <i class="nav-icon icon-notebook icon-color"></i> Statements
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/shop">
                    <i class="nav-icon icon-bag icon-color"></i> Shop
                </a>
                
            </li>
            
            <li class="nav-item">
                <a class="nav-link"  href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <i class="nav-icon icon-tag icon-color"></i> Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        
       
            
         




            <!-- <li class="nav-title">Theme</li>
            <li class="nav-item">
                <a class="nav-link" href="colors.html">
                    <i class="nav-icon icon-drop"></i> Colors</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="typography.html">
                    <i class="nav-icon icon-pencil"></i> Typograhy</a>
            </li>
            <li class="nav-title">Components</li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="nav-icon icon-puzzle"></i> Base</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="base-breadcrumb.html">
                            <i class="nav-icon icon-puzzle"></i> Breadcrumb</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="base-cards.html">
                            <i class="nav-icon icon-puzzle"></i> Cards</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="base-carousel.html">
                            <i class="nav-icon icon-puzzle"></i> Carousel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="base-collapse.html">
                            <i class="nav-icon icon-puzzle"></i> Collapse</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="base-forms.html">
                            <i class="nav-icon icon-puzzle"></i> Forms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="base-jumbotron.html">
                            <i class="nav-icon icon-puzzle"></i> Jumbotron</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="base-list-group.html">
                            <i class="nav-icon icon-puzzle"></i> List group</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="base-navs.html">
                            <i class="nav-icon icon-puzzle"></i> Navs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="base-pagination.html">
                            <i class="nav-icon icon-puzzle"></i> Pagination</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="base-popovers.html">
                            <i class="nav-icon icon-puzzle"></i> Popovers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="base-progress.html">
                            <i class="nav-icon icon-puzzle"></i> Progress</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="base-switches.html">
                            <i class="nav-icon icon-puzzle"></i> Switches</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="base-tables.html">
                            <i class="nav-icon icon-puzzle"></i> Tables</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="base-tabs.html">
                            <i class="nav-icon icon-puzzle"></i> Tabs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="base-tooltips.html">
                            <i class="nav-icon icon-puzzle"></i> Tooltips</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="nav-icon icon-cursor"></i> Buttons</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="buttons-buttons.html">
                            <i class="nav-icon icon-cursor"></i> Buttons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="buttons-button-group.html">
                            <i class="nav-icon icon-cursor"></i> Buttons Group</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="buttons-dropdowns.html">
                            <i class="nav-icon icon-cursor"></i> Dropdowns</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="buttons-brand-buttons.html">
                            <i class="nav-icon icon-cursor"></i> Brand Buttons</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="nav-icon icon-pie-chart"></i> Charts</a>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="nav-icon icon-star"></i> Icons</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="icons-flags.html">
                            <i class="nav-icon icon-star"></i> Flags
                            <span class="badge badge-success">NEW</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="icons-font-awesome.html">
                            <i class="nav-icon icon-star"></i> Font Awesome
                            <span class="badge badge-secondary">4.7</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="icons-simple-line-icons.html">
                            <i class="nav-icon icon-star"></i> Simple Line Icons</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="nav-icon icon-bell"></i> Notifications</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="notifications-alerts.html">
                            <i class="nav-icon icon-bell"></i> Alerts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="notifications-badge.html">
                            <i class="nav-icon icon-bell"></i> Badge</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="notifications-modals.html">
                            <i class="nav-icon icon-bell"></i> Modals</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="widgets.html">
                    <i class="nav-icon icon-calculator"></i> Widgets
                    <span class="badge badge-primary">NEW</span>
                </a>
            </li>
            <li class="divider"></li>
            <li class="nav-title">Extras</li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="nav-icon icon-star"></i> Pages</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="login.html" target="_top">
                            <i class="nav-icon icon-star"></i> Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.html" target="_top">
                            <i class="nav-icon icon-star"></i> Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="404.html" target="_top">
                            <i class="nav-icon icon-star"></i> Error 404</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="500.html" target="_top">
                            <i class="nav-icon icon-star"></i> Error 500</a>
                    </li>
                </ul>
            </li> -->
        </ul>
    </nav>
    {{-- <button class="sidebar-minimizer brand-minimizer" type="button"></button> --}}
</div>

