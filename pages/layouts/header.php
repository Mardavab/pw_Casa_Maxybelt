<header class="page-topbar" id="header">
        <div class="navbar navbar-fixed">
            <nav
                class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-light-blue-cyan">
                <div class="nav-wrapper">
                    <ul class="left">
                        <li>
                            <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="index.html"><img
                                        src="../assets/images/logo/materialize-logo.png" alt="materialize logo"><span
                                        class="logo-text hide-on-med-and-down">Materialize</span></a></h1>
                        </li>
                    </ul>

                    <ul class="navbar-list right">
                        <li class="dropdown-language"><a class="waves-effect waves-block waves-light translation-button"
                                href="javascript:void(0);" data-target="translation-dropdown"><span
                                    class="flag-icon flag-icon-gb"></span></a></li>
                        <li class="hide-on-med-and-down"><a
                                class="waves-effect waves-block waves-light toggle-fullscreen"
                                href="javascript:void(0);"><i class="material-icons">settings_overscan</i></a></li>
                        <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);"
                                data-target="profile-dropdown"><span class="avatar-status avatar-online"><img
                                        src="../assets/images/avatar/avatar-7.png" alt="avatar"><i></i></span></a></li>

                    </ul>
                    <!-- translation-button-->
                    <ul class="dropdown-content" id="translation-dropdown">
                        <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="en"><i
                                    class="flag-icon flag-icon-gb"></i> English</a></li>
                        <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="fr"><i
                                    class="flag-icon flag-icon-fr"></i> French</a></li>
                        <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="pt"><i
                                    class="flag-icon flag-icon-pt"></i> Portuguese</a></li>
                        <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="de"><i
                                    class="flag-icon flag-icon-de"></i> German</a></li>
                    </ul>

                    <!-- profile-dropdown-->
                    <ul class="dropdown-content" id="profile-dropdown">
                        <li><a class="grey-text text-darken-1" href="user-profile-page.html"><i
                                    class="material-icons">person_outline</i> Profile</a></li>
                        <li><a class="grey-text text-darken-1" href="app-chat.html"><i
                                    class="material-icons">chat_bubble_outline</i> Chat</a></li>
                        <li><a class="grey-text text-darken-1" href="page-faq.html"><i
                                    class="material-icons">help_outline</i> Help</a></li>
                        <li class="divider"></li>
                        <li><a class="grey-text text-darken-1" href="user-lock-screen.html"><i
                                    class="material-icons">lock_outline</i> Lock</a></li>
                        <li><a class="grey-text text-darken-1" href="user-login.html"><i
                                    class="material-icons">keyboard_tab</i> Logout</a></li>
                    </ul>
                </div>

            </nav>
            <!-- BEGIN: Horizontal nav start-->
            <nav class="white hide-on-med-and-down" id="horizontal-nav">
                <div class="nav-wrapper">
                    <ul class="left hide-on-med-and-down" id="ul-horizontal-nav" data-menu="menu-navigation">
                        <?php foreach (menu() as $key => $menu): ?>
                            <li>
                                <a
                                class="<?= count($menu->detail) >= 1 ? 'dropdown-menu' : '' ?>"
                                href="<?= count($menu->detail) == 0 ? $menu->url : 'javascript:void(0)' ?>"
                                    <?php if(count($menu->detail) > 0): ?>
                                        data-target="menu_<?= $key ?>"
                                    <?php endif ?>
                                >
                                    <i class="material-icons"><?= $menu->icon ?></i>
                                    <span>
                                        <span class="dropdown-title" data-i18n="Dashboard">
                                            <?= $menu->title ?>
                                        </span>
                                        <?php if(count($menu->detail) > 0): ?>
                                            <i class="material-icons right">keyboard_arrow_down</i>
                                        <?php endif ?>
                                    </span>
                                </a>
                                <?php if(count($menu->detail) > 0): ?>
                                    <ul class="dropdown-content dropdown-horizontal-list" id="menu_<?= $key ?>">
                                        <?php foreach ($menu->detail as $key => $detail):?>
                                            <li data-menu=""><a href="<?= $detail->url ?>"><span
                                                data-i18n="Modern"><?= $detail->title ?></span></a>
                                            </li>
                                        <?php endforeach ?>
                                    </ul>
                                <?php endif ?>
                            </li>
                        <?php endforeach ?>
                        <!-- <li><a href="../index.html"><i class="material-icons">home</i><span><span class="dropdown-title"
                                        data-i18n="Dashboard">Home</span></span></a></li> -->

                        <!-- <li><a class="dropdown-menu" href="Javascript:void(0)" data-target="home"><i
                                    class="material-icons">assignment</i><span><span class="dropdown-title"
                                        data-i18n="Dashboard">Facturas</span><i
                                        class="material-icons right">keyboard_arrow_down</i></span></a>
                            <ul class="dropdown-content dropdown-horizontal-list" id="home">
                                <li data-menu=""><a href="dashboard-modern.html"><span
                                            data-i18n="Modern">Entradas</span></a>
                                </li>
                                <li data-menu=""><a href="dashboard-ecommerce.html"><span
                                            data-i18n="eCommerce">Salidas</span></a>
                                </li>
                                <li data-menu=""><a href="dashboard-analytics.html"><span
                                            data-i18n="Analytics">Gastos</span></a>
                                </li>
                            </ul>
                        </li> -->
                        <!-- <li><a href="../index.html"><i class="material-icons">account_balance_wallet</i><span><span
                                        class="dropdown-title" data-i18n="Dashboard">Cartera</span></span></a></li> -->

                        <!-- <li><a class="dropdown-menu" href="Javascript:void(0)" data-target="DashboardDropdown"><i
                                    class="material-icons">bubble_chart</i><span><span class="dropdown-title"
                                        data-i18n="Dashboard">Productos</span><i
                                        class="material-icons right">keyboard_arrow_down</i></span></a>
                            <ul class="dropdown-content dropdown-horizontal-list" id="DashboardDropdown">
                                <li data-menu=""><a href="dashboard-modern.html"><span
                                            data-i18n="Modern">Ventas</span></a>
                                </li>
                                <li data-menu=""><a href="dashboard-ecommerce.html"><span
                                            data-i18n="eCommerce">Gastos</span></a>
                                </li>

                            </ul>
                        </li> -->
                        <!-- <li><a class="dropdown-menu" href="Javascript:void(0)" data-target="customers"><i
                                    class="material-icons">perm_contact_calendar</i><span><span class="dropdown-title"
                                        data-i18n="Dashboard">Clientes</span><i
                                        class="material-icons right">keyboard_arrow_down</i></span></a>
                            <ul class="dropdown-content dropdown-horizontal-list" id="customers">
                                <li data-menu=""><a href="dashboard-modern.html"><span
                                            data-i18n="Modern">Clientes</span></a>
                                </li>
                                <li data-menu=""><a href="dashboard-ecommerce.html"><span
                                            data-i18n="eCommerce">Provedores</span></a>
                                </li>

                            </ul>
                        </li> -->
                        <!-- <li><a href="../index.html"><i class="material-icons">people</i><span><span
                                        class="dropdown-title" data-i18n="Dashboard">Usuarios</span></span></a></li>
                        <li><a href="../index.html"><i class="material-icons">people</i><span><span
                                        class="dropdown-title" data-i18n="Dashboard">Metodos de Pagos</span></span></a></li> -->


                    </ul>
                </div>
                <!-- END: Horizontal nav start-->
            </nav>
        </div>
    </header>