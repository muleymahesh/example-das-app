@extends('layouts.app')

@section('content')
<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
    <div class="app-header header-shadow">
        <div class="app-header__logo">
            <div class="logo-src1"
                style="background: "https://dasgroupco.com/wp-content/uploads/2024/09/das-logo-3.png";"></div>
            <div class="header__pane ml-auto">
                <div>
                    <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                        data-class="closed-sidebar">
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
                <button type="button"
                    class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                    <span class="btn-icon-wrapper">
                        <i class="fa fa-ellipsis-v fa-w-6"></i>
                    </span>
                </button>
            </span>
        </div>
        <div class="app-header__content">
            <div class="app-header-left">
                <div class="search-wrapper">
                    <div class="input-holder">
                        <input type="text" class="search-input" placeholder="Type to search">
                        <button class="search-icon"><span></span></button>
                    </div>
                    <button class="close"></button>
                </div>
            </div>
            <div class="app-header-right">
                <div class="header-btn-lg pr-0">
                    <div class="widget-content p-0">
                        <div class="widget-content-wrapper">

                            <div class="widget-content-left  ml-3 header-user-info">
                                <div class="widget-heading">
                                    {{ Auth::user()->name }}
                                </div>
                                <div class="widget-subheading">
                                    VP People Manager
                                </div>
                            </div>
                            <div class="widget-content-left">
                                <div class="btn-group">
                                    <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        class="p-0 btn">
                                        <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg"
                                            alt="">
                                        <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                    </a>
                                    <div tabindex="-1" role="menu" aria-hidden="true"
                                        class="dropdown-menu dropdown-menu-right">
                                        <button type="button" tabindex="0" class="dropdown-item">User
                                            Account</button>
                                        <button type="button" tabindex="0"
                                            class="dropdown-item">Settings</button>
                                        <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                        <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                        <div tabindex="-1" class="dropdown-divider"></div>
                                        <button type="button" tabindex="0" class="dropdown-item"> <a
                                                class="nav-link" href="{{ route('logout') }}">Logout</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div >
                            <img src="https://dasgroupco.com/wp-content/uploads/2024/09/das-logo-3.png" width="130px">
                        </div>
                        <div>Analytics Dashboard
                            <div class="page-title-subheading">This is an example dashboard created using
                                build-in elements and components.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-midnight-bloom">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">New Orders</div>
                                <div class="widget-subheading">No. of orders</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white"><span>1896</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-arielle-smile">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Total Orders</div>
                                <div class="widget-subheading"></div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white"><span>568</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-grow-early">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Low Stock Items
                                </div>
                                <div class="widget-subheading">below threshold</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white"><span>4</span></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-header">Active Users
                            <div class="btn-actions-pane-right">
                                <div role="group" class="btn-group-sm btn-group">
                                    <button class="active btn btn-focus">Last Week</button>
                                    <button class="btn btn-focus">All Month</button>
                                </div>
                            </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="main-card mb-3 card">
                            <div class="card-header">Active Users
                                <div class="btn-actions-pane-right">
                                    <div role="group" class="btn-group-sm btn-group">
                                        <button class="active btn btn-focus">Last Week</button>
                                        <button class="btn btn-focus">All Month</button>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>Name</th>
                                            <th class="text-center">City</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center text-muted">#345</td>
                                            <td>
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left mr-3">
                                                            <div class="widget-content-left">
                                                                <img width="40" class="rounded-circle"
                                                                    src="assets/images/avatars/4.jpg"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-left flex2">
                                                            <div class="widget-heading">John Doe</div>
                                                            <div class="widget-subheading opacity-7">Web Developer
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">Madrid</td>
                                            <td class="text-center">
                                                <div class="badge badge-warning">Pending</div>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" id="PopoverCustomT-1"
                                                    class="btn btn-primary btn-sm">Details</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center text-muted">#347</td>
                                            <td>
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left mr-3">
                                                            <div class="widget-content-left">
                                                                <img width="40" class="rounded-circle"
                                                                    src="assets/images/avatars/3.jpg"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-left flex2">
                                                            <div class="widget-heading">Ruben Tillman</div>
                                                            <div class="widget-subheading opacity-7">Etiam sit amet
                                                                orci eget</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">Berlin</td>
                                            <td class="text-center">
                                                <div class="badge badge-success">Completed</div>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" id="PopoverCustomT-2"
                                                    class="btn btn-primary btn-sm">Details</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center text-muted">#321</td>
                                            <td>
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left mr-3">
                                                            <div class="widget-content-left">
                                                                <img width="40" class="rounded-circle"
                                                                    src="assets/images/avatars/2.jpg"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-left flex2">
                                                            <div class="widget-heading">Elliot Huber</div>
                                                            <div class="widget-subheading opacity-7">Lorem ipsum
                                                                dolor sic</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">London</td>
                                            <td class="text-center">
                                                <div class="badge badge-danger">In Progress</div>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" id="PopoverCustomT-3"
                                                    class="btn btn-primary btn-sm">Details</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center text-muted">#55</td>
                                            <td>
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left mr-3">
                                                            <div class="widget-content-left">
                                                                <img width="40" class="rounded-circle"
                                                                    src="assets/images/avatars/1.jpg"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-left flex2">
                                                            <div class="widget-heading">Vinnie Wagstaff</div>
                                                            <div class="widget-subheading opacity-7">UI Designer
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">Amsterdam</td>
                                            <td class="text-center">
                                                <div class="badge badge-info">On Hold</div>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" id="PopoverCustomT-4"
                                                    class="btn btn-primary btn-sm">Details</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-block text-center card-footer">
                                <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i
                                        class="pe-7s-trash btn-icon-wrapper"> </i></button>
                                <button class="btn-wide btn btn-success">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="card-shadow-danger mb-3 widget-chart widget-chart2 text-left card">
                            <div class="widget-content">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left pr-2 fsize-1">
                                            <div class="widget-numbers mt-0 fsize-3 text-danger">71%</div>
                                        </div>
                                        <div class="widget-content-right w-100">
                                            <div class="progress-bar-xs progress">
                                                <div class="progress-bar bg-danger" role="progressbar"
                                                    aria-valuenow="71" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 71%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content-left fsize-1">
                                        <div class="text-muted opacity-6">Income Target</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card-shadow-success mb-3 widget-chart widget-chart2 text-left card">
                            <div class="widget-content">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left pr-2 fsize-1">
                                            <div class="widget-numbers mt-0 fsize-3 text-success">54%</div>
                                            </div>
                                            <div class="widget-content-right w-100">
                                                <div class="progress-bar-xs progress">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        aria-valuenow="54" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 54%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content-left fsize-1">
                                            <div class="text-muted opacity-6">Expenses Target</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="card-shadow-warning mb-3 widget-chart widget-chart2 text-left card">
                                <div class="widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left pr-2 fsize-1">
                                                <div class="widget-numbers mt-0 fsize-3 text-warning">32%</div>
                                            </div>
                                            <div class="widget-content-right w-100">
                                                <div class="progress-bar-xs progress">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        aria-valuenow="32" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 32%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content-left fsize-1">
                                            <div class="text-muted opacity-6">Spendings Target</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="card-shadow-info mb-3 widget-chart widget-chart2 text-left card">
                                <div class="widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left pr-2 fsize-1">
                                                <div class="widget-numbers mt-0 fsize-3 text-info">89%</div>
                                            </div>
                                            <div class="widget-content-right w-100">
                                                <div class="progress-bar-xs progress">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                        aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 89%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content-left fsize-1">
                                            <div class="text-muted opacity-6">Totals Target</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="app-wrapper-footer">
                    <div class="app-footer">
                        <div class="app-footer__inner">
                            <div class="app-footer-left">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            Footer Link 1
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            Footer Link 2
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="app-footer-right">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            Footer Link 3
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            <div class="badge badge-success mr-1 ml-0">
                                                <small>NEW</small>
                                            </div>
                                            Footer Link 4
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
            </div>
            <script type="text/javascript" src="https://demo.dashboardpack.com/architectui-html-free/assets/scripts/main.js">
            </script>
        </body>

        </html>
