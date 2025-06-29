<!--
Product: Metronic is a toolkit of UI components built with Tailwind CSS for developing scalable web applications quickly and efficiently
Version: v9.0.6
Author: Keenthemes
Contact: support@keenthemes.com
Website: https://www.keenthemes.com
Support: https://devs.keenthemes.com
Follow: https://www.twitter.com/keenthemes
License: https://keenthemes.com/metronic/tailwind/docs/getting-started/license
-->
<!DOCTYPE html>
<html class="h-full" data-theme="true" data-theme-mode="light" lang="en">

<head>
    <base href="../../../../">
    <title>
        Metronic - Tailwind CSS Settings - Plain
    </title>
    <meta charset="utf-8" />
    <meta content="follow, index" name="robots" />
    <link href="https://keenthemes.com/metronic" rel="canonical" />
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
    <meta content="Plain settings page, styled with Tailwind CSS" name="description" />
    <meta content="@keenthemes" name="twitter:site" />
    <meta content="@keenthemes" name="twitter:creator" />
    <meta content="summary_large_image" name="twitter:card" />
    <meta content="Metronic - Tailwind CSS Settings - Plain" name="twitter:title" />
    <meta content="Plain settings page, styled with Tailwind CSS" name="twitter:description" />
    <meta content="assets/media/app/og-image.png" name="twitter:image" />
    <meta content="https://keenthemes.com/metronic" property="og:url" />
    <meta content="en_US" property="og:locale" />
    <meta content="website" property="og:type" />
    <meta content="@keenthemes" property="og:site_name" />
    <meta content="Metronic - Tailwind CSS Settings - Plain" property="og:title" />
    <meta content="Plain settings page, styled with Tailwind CSS" property="og:description" />
    <meta content="assets/media/app/og-image.png" property="og:image" />
    <link href="assets/media/app/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180" />
    <link href="assets/media/app/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png" />
    <link href="assets/media/app/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png" />
    <link href="assets/media/app/favicon.ico" rel="shortcut icon" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="assets/vendors/apexcharts/apexcharts.css" rel="stylesheet" />
    <link href="assets/vendors/keenicons/styles.bundle.css" rel="stylesheet" />
    <link href="assets/css/styles.css" rel="stylesheet" />
</head>

<body
    class="antialiased flex h-full text-base text-gray-700 [--tw-page-bg:#F6F6F9] [--tw-page-bg-dark:var(--tw-coal-200)] [--tw-content-bg:var(--tw-light)] [--tw-content-bg-dark:var(--tw-coal-500)] [--tw-header-height:60px] [--tw-sidebar-width:90px] bg-[--tw-page-bg] dark:bg-[--tw-page-bg-dark]">
<!-- Theme Mode -->
<script>
    const defaultThemeMode = 'light'; // light|dark|system
    let themeMode;

    if (document.documentElement) {
        if (localStorage.getItem('theme')) {
            themeMode = localStorage.getItem('theme');
        } else if (document.documentElement.hasAttribute('data-theme-mode')) {
            themeMode = document.documentElement.getAttribute('data-theme-mode');
        } else {
            themeMode = defaultThemeMode;
        }

        if (themeMode === 'system') {
            themeMode = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
        }

        document.documentElement.classList.add(themeMode);
    }
</script>
<!-- End of Theme Mode -->
<!-- Page -->
<!-- Base -->
<div class="flex flex-col grow">
    <!-- Header -->
    <header
        class="flex lg:hidden items-center fixed z-10 top-0 start-0 end-0 shrink-0 bg-[--tw-page-bg] dark:bg-[--tw-page-bg-dark] h-[--tw-header-height]"
        id="header">
        <!-- Container -->
        <div class="container-fixed flex items-center justify-between flex-wrap gap-3">
            <a href="html/demo8.html">
                <img class="dark:hidden min-h-[30px]" src="assets/media/app/mini-logo-gray.svg" />
                <img class="hidden dark:block min-h-[30px]" src="assets/media/app/mini-logo-gray-dark.svg" />
            </a>
            <button class="btn btn-icon btn-light btn-clear btn-sm -me-1" data-drawer-toggle="#sidebar">
                <i class="ki-filled ki-menu">
                </i>
            </button>
        </div>
        <!-- End of Container -->
    </header>
    <!-- End of Header -->
    <!-- Wrapper -->
    <div class="flex grow flex-col pt-[--tw-header-height] lg:pt-0">
        <!-- Sidebar -->
        <div class="fixed top-0 bottom-0 z-20 hidden lg:flex flex-col items-stretch shrink-0 bg-[--tw-page-bg] dark:bg-[--tw-page-bg-dark]"
             data-drawer="true" data-drawer-class="drawer drawer-start flex" data-drawer-enable="true|lg:false"
             id="sidebar">
            <div class="hidden lg:flex items-center justify-center shrink-0 pt-8 pb-3.5" id="sidebar_header">
                <a href="html/demo8.html">
                    <img class="dark:hidden min-h-[42px]" src="assets/media/app/mini-logo-square-gray.svg" />
                    <img class="hidden dark:block min-h-[42px]"
                         src="assets/media/app/mini-logo-square-gray-dark.svg" />
                </a>
            </div>
            <div class="scrollable-y-hover grow gap-2.5 shrink-0 flex items-center pt-5 lg:pt-0 ps-3 pe-3 lg:pe-0 flex-col"
                 data-scrollable="true" data-scrollable-dependencies="#sidebar_header,#sidebar_footer"
                 data-scrollable-height="auto" data-scrollable-offset="80px"
                 data-scrollable-wrappers="#sidebar_menu_wrapper" id="sidebar_menu_wrapper">
                <!-- Sidebar Menu -->
                <div class="menu flex flex-col gap-2.5 grow" data-menu="true" id="sidebar_menu">
                    <div class="menu-item">
                        <a class="menu-link rounded-[9px] border border-transparent menu-item-active:border-gray-200 menu-item-active:bg-light menu-link-hover:bg-light menu-link-hover:border-gray-200 w-[62px] h-[60px] flex flex-col justify-center items-center gap-1 p-2"
                           href="html/demo8.html">
                                <span
                                    class="menu-icon menu-item-here:text-primary menu-item-active:text-primary menu-link-hover:text-primary text-gray-600">
                                    <i class="ki-filled ki-chart-line-star text-1.5xl">
                                    </i>
                                </span>
                            <span
                                class="menu-title text-xs menu-item-here:text-primary menu-item-active:text-primary menu-link-hover:text-primary text-gray-600 font-medium">
                                    Boards
                                </span>
                        </a>
                    </div>
                    <div class="menu-item" data-menu-item-offset="-10px, 14px" data-menu-item-overflow="true"
                         data-menu-item-placement="right-start" data-menu-item-toggle="dropdown"
                         data-menu-item-trigger="click|lg:hover">
                        <div
                            class="menu-link rounded-[9px] border border-transparent menu-item-here:border-gray-200 menu-item-here:bg-light menu-link-hover:bg-light menu-link-hover:border-gray-200 w-[62px] h-[60px] flex flex-col justify-center items-center gap-1 p-2 grow">
                                <span
                                    class="menu-icon menu-item-here:text-primary menu-item-active:text-primary menu-link-hover:text-primary text-gray-600">
                                    <i class="ki-filled ki-profile-circle text-1.5xl">
                                    </i>
                                </span>
                            <span
                                class="menu-title menu-item-here:text-primary menu-item-active:text-primary menu-link-hover:text-primary font-medium text-xs text-gray-600">
                                    Clientes
                                </span>
                        </div>
                        <div
                            class="menu-default menu-dropdown gap-0.5 w-[220px] scrollable-y-auto lg:overflow-visible max-h-[50vh]">
                            <div class="menu-item" data-menu-item-placement="right-start"
                                 data-menu-item-toggle="accordion|lg:dropdown"
                                 data-menu-item-trigger="click|lg:hover">
                                <div class="menu-link grow cursor-pointer">
                                        <span class="menu-title">
                                            Listar Clientes
                                        </span>
                                    <span class="menu-arrow">
                                            <i class="ki-filled ki-right text-3xs">
                                            </i>
                                        </span>
                                </div>
                                <div class="menu-default menu-dropdown gap-0.5 w-[220px]">
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo8/public-profile/profiles/default.html">
                                                <span class="menu-title">
                                                    Default
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo8/public-profile/profiles/creator.html">
                                                <span class="menu-title">
                                                    Creator
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo8/public-profile/profiles/company.html">
                                                <span class="menu-title">
                                                    Company
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo8/public-profile/profiles/nft.html">
                                                <span class="menu-title">
                                                    NFT
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo8/public-profile/profiles/blogger.html">
                                                <span class="menu-title">
                                                    Blogger
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo8/public-profile/profiles/crm.html">
                                                <span class="menu-title">
                                                    CRM
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item" data-menu-item-placement="right-start"
                                         data-menu-item-toggle="accordion|lg:dropdown"
                                         data-menu-item-trigger="click|lg:hover">
                                        <div class="menu-link grow cursor-pointer">
                                                <span class="menu-title">
                                                    More
                                                </span>
                                            <span class="menu-arrow">
                                                    <i class="ki-filled ki-right text-3xs">
                                                    </i>
                                                </span>
                                        </div>
                                        <div class="menu-default menu-dropdown gap-0.5 w-[220px]">
                                            <div class="menu-item">
                                                <a class="menu-link"
                                                   href="html/demo8/public-profile/profiles/gamer.html">
                                                        <span class="menu-title">
                                                            Gamer
                                                        </span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link"
                                                   href="html/demo8/public-profile/profiles/feeds.html">
                                                        <span class="menu-title">
                                                            Feeds
                                                        </span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link"
                                                   href="html/demo8/public-profile/profiles/plain.html">
                                                        <span class="menu-title">
                                                            Plain
                                                        </span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link"
                                                   href="html/demo8/public-profile/profiles/modal.html">
                                                        <span class="menu-title">
                                                            Modal
                                                        </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-item" data-menu-item-placement="right-start"
                                 data-menu-item-toggle="accordion|lg:dropdown"
                                 data-menu-item-trigger="click|lg:hover">
                                <div class="menu-link grow cursor-pointer">
                                        <span class="menu-title">
                                            Projects
                                        </span>
                                    <span class="menu-arrow">
                                            <i class="ki-filled ki-right text-3xs">
                                            </i>
                                        </span>
                                </div>
                                <div class="menu-default menu-dropdown gap-0.5 w-[220px]">
                                    <div class="menu-item">
                                        <a class="menu-link"
                                           href="html/demo8/public-profile/projects/3-columns.html">
                                                <span class="menu-title">
                                                    3 Columns
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link"
                                           href="html/demo8/public-profile/projects/2-columns.html">
                                                <span class="menu-title">
                                                    2 Columns
                                                </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="html/demo8/public-profile/works.html">
                                        <span class="menu-title">
                                            Works
                                        </span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="html/demo8/public-profile/teams.html">
                                        <span class="menu-title">
                                            Teams
                                        </span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="html/demo8/public-profile/network.html">
                                        <span class="menu-title">
                                            Network
                                        </span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="html/demo8/public-profile/activity.html">
                                        <span class="menu-title">
                                            Activity
                                        </span>
                                </a>
                            </div>
                            <div class="menu-item" data-menu-item-placement="right-start"
                                 data-menu-item-toggle="accordion|lg:dropdown"
                                 data-menu-item-trigger="click|lg:hover">
                                <div class="menu-link grow cursor-pointer">
                                        <span class="menu-title">
                                            More
                                        </span>
                                    <span class="menu-arrow">
                                            <i class="ki-filled ki-right text-3xs">
                                            </i>
                                        </span>
                                </div>
                                <div class="menu-default menu-dropdown gap-0.5 w-[220px]">
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo8/public-profile/campaigns/card.html">
                                                <span class="menu-title">
                                                    Campaigns - Card
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo8/public-profile/campaigns/list.html">
                                                <span class="menu-title">
                                                    Campaigns - List
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo8/public-profile/empty.html">
                                                <span class="menu-title">
                                                    Empty
                                                </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="menu-item here" data-menu-item-offset="-10px, 14px" data-menu-item-overflow="true"
                         data-menu-item-placement="right-start" data-menu-item-toggle="dropdown"
                         data-menu-item-trigger="click|lg:hover">
                        <div
                            class="menu-link rounded-[9px] border border-transparent menu-item-here:border-gray-200 menu-item-here:bg-light menu-link-hover:bg-light menu-link-hover:border-gray-200 w-[62px] h-[60px] flex flex-col justify-center items-center gap-1 p-2 grow">
                                <span
                                    class="menu-icon menu-item-here:text-primary menu-item-active:text-primary menu-link-hover:text-primary text-gray-600">
                                    <i class="ki-filled ki-setting-2 text-1.5xl">
                                    </i>
                                </span>
                            <span
                                class="menu-title menu-item-here:text-primary menu-item-active:text-primary menu-link-hover:text-primary font-medium text-xs text-gray-600">
                                    Account
                                </span>
                        </div>
                        <div
                            class="menu-default menu-dropdown gap-0.5 w-[220px] scrollable-y-auto lg:overflow-visible max-h-[50vh]">
                            <div class="menu-item here" data-menu-item-placement="right-start"
                                 data-menu-item-toggle="accordion|lg:dropdown"
                                 data-menu-item-trigger="click|lg:hover">
                                <div class="menu-link grow cursor-pointer">
                                        <span class="menu-title">
                                            Account Home
                                        </span>
                                    <span class="menu-arrow">
                                            <i class="ki-filled ki-right text-3xs">
                                            </i>
                                        </span>
                                </div>
                                <div class="menu-default menu-dropdown gap-0.5 w-[220px]">
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo8/account/home/get-started.html">
                                                <span class="menu-title">
                                                    Get Started
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo8/account/home/user-profile.html">
                                                <span class="menu-title">
                                                    User Profile
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo8/account/home/company-profile.html">
                                                <span class="menu-title">
                                                    Company Profile
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo8/account/home/settings-sidebar.html">
                                                <span class="menu-title">
                                                    Settings - With Sidebar
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link"
                                           href="html/demo8/account/home/settings-enterprise.html">
                                                <span class="menu-title">
                                                    Settings - Enterprise
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item active">
                                        <a class="menu-link" href="html/demo8/account/home/settings-plain.html">
                                                <span class="menu-title">
                                                    Clientes
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo8/account/home/settings-modal.html">
                                                <span class="menu-title">
                                                    Settings - Modal
                                                </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-item" data-menu-item-placement="right-start"
                                 data-menu-item-toggle="accordion|lg:dropdown"
                                 data-menu-item-trigger="click|lg:hover">
                                <div class="menu-link grow cursor-pointer">
                                        <span class="menu-title">
                                            Billing
                                        </span>
                                    <span class="menu-arrow">
                                            <i class="ki-filled ki-right text-3xs">
                                            </i>
                                        </span>
                                </div>
                                <div class="menu-default menu-dropdown gap-0.5 w-[220px]">
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo8/account/billing/basic.html">
                                                <span class="menu-title">
                                                    Billing - Basic
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo8/account/billing/enterprise.html">
                                                <span class="menu-title">
                                                    Billing - Enterprise
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo8/account/billing/plans.html">
                                                <span class="menu-title">
                                                    Plans
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo8/account/billing/history.html">
                                                <span class="menu-title">
                                                    Billing History
                                                </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-item" data-menu-item-placement="right-start"
                                 data-menu-item-toggle="accordion|lg:dropdown"
                                 data-menu-item-trigger="click|lg:hover">
                                <div class="menu-link grow cursor-pointer">
                                        <span class="menu-title">
                                            Security
                                        </span>
                                    <span class="menu-arrow">
                                            <i class="ki-filled ki-right text-3xs">
                                            </i>
                                        </span>
                                </div>
                                <div class="menu-default menu-dropdown gap-0.5 w-[220px]">
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo8/account/security/get-started.html">
                                                <span class="menu-title">
                                                    Get Started
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo8/account/security/overview.html">
                                                <span class="menu-title">
                                                    Security Overview
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link"
                                           href="html/demo8/account/security/allowed-ip-addresses.html">
                                                <span class="menu-title">
                                                    Allowed IP Addresses
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link"
                                           href="html/demo8/account/security/privacy-settings.html">
                                                <span class="menu-title">
                                                    Privacy Settings
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link"
                                           href="html/demo8/account/security/device-management.html">
                                                <span class="menu-title">
                                                    Device Management
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link"
                                           href="html/demo8/account/security/backup-and-recovery.html">
                                                <span class="menu-title">
                                                    Backup & Recovery
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link"
                                           href="html/demo8/account/security/current-sessions.html">
                                                <span class="menu-title">
                                                    Current Sessions
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo8/account/security/security-log.html">
                                                <span class="menu-title">
                                                    Security Log
                                                </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-item" data-menu-item-placement="right-start"
                                 data-menu-item-toggle="accordion|lg:dropdown"
                                 data-menu-item-trigger="click|lg:hover">
                                <div class="menu-link grow cursor-pointer">
                                        <span class="menu-title">
                                            Members & Roles
                                        </span>
                                    <span class="menu-arrow">
                                            <i class="ki-filled ki-right text-3xs">
                                            </i>
                                        </span>
                                </div>
                                <div class="menu-default menu-dropdown gap-0.5 w-[220px]">
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo8/account/members/team-starter.html">
                                                <span class="menu-title">
                                                    Teams Starter
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo8/account/members/teams.html">
                                                <span class="menu-title">
                                                    Teams
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo8/account/members/team-info.html">
                                                <span class="menu-title">
                                                    Team Info
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo8/account/members/members-starter.html">
                                                <span class="menu-title">
                                                    Members Starter
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo8/account/members/team-members.html">
                                                <span class="menu-title">
                                                    Team Members
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo8/account/members/import-members.html">
                                                <span class="menu-title">
                                                    Import Members
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo8/account/members/roles.html">
                                                <span class="menu-title">
                                                    Roles
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link"
                                           href="html/demo8/account/members/permissions-toggle.html">
                                                <span class="menu-title">
                                                    Permissions - Toggler
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link"
                                           href="html/demo8/account/members/permissions-check.html">
                                                <span class="menu-title">
                                                    Permissions - Check
                                                </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="html/demo8/account/integrations.html">
                                        <span class="menu-title">
                                            Integrations
                                        </span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="html/demo8/account/notifications.html">
                                        <span class="menu-title">
                                            Notifications
                                        </span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="html/demo8/account/api-keys.html">
                                        <span class="menu-title">
                                            API Keys
                                        </span>
                                </a>
                            </div>
                            <div class="menu-item" data-menu-item-placement="right-start"
                                 data-menu-item-toggle="accordion|lg:dropdown"
                                 data-menu-item-trigger="click|lg:hover">
                                <div class="menu-link grow cursor-pointer">
                                        <span class="menu-title">
                                            More
                                        </span>
                                    <span class="menu-arrow">
                                            <i class="ki-filled ki-right text-3xs">
                                            </i>
                                        </span>
                                </div>
                                <div class="menu-default menu-dropdown gap-0.5 w-[220px]">
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo8/account/appearance.html">
                                                <span class="menu-title">
                                                    Appearance
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo8/account/invite-a-friend.html">
                                                <span class="menu-title">
                                                    Invite a Friend
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo8/account/activity.html">
                                                <span class="menu-title">
                                                    Activity
                                                </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="menu-item" data-menu-item-offset="-10px, 14px" data-menu-item-overflow="true"
                         data-menu-item-placement="right-start" data-menu-item-toggle="dropdown"
                         data-menu-item-trigger="click|lg:hover">
                        <div
                            class="menu-link rounded-[9px] border border-transparent menu-item-here:border-gray-200 menu-item-here:bg-light menu-link-hover:bg-light menu-link-hover:border-gray-200 w-[62px] h-[60px] flex flex-col justify-center items-center gap-1 p-2 grow">
                                <span
                                    class="menu-icon menu-item-here:text-primary menu-item-active:text-primary menu-link-hover:text-primary text-gray-600">
                                    <i class="ki-filled ki-users text-1.5xl">
                                    </i>
                                </span>
                            <span
                                class="menu-title menu-item-here:text-primary menu-item-active:text-primary menu-link-hover:text-primary font-medium text-xs text-gray-600">
                                    Network
                                </span>
                        </div>
                        <div
                            class="menu-default menu-dropdown gap-0.5 w-[220px] scrollable-y-auto lg:overflow-visible max-h-[50vh]">
                            <div class="menu-item">
                                <a class="menu-link" href="html/demo8/network/get-started.html">
                                        <span class="menu-title">
                                            Get Started
                                        </span>
                                </a>
                            </div>
                            <div class="menu-item" data-menu-item-placement="right-start"
                                 data-menu-item-toggle="accordion|lg:dropdown"
                                 data-menu-item-trigger="click|lg:hover">
                                <div class="menu-link grow cursor-pointer">
                                        <span class="menu-title">
                                            User Cards
                                        </span>
                                    <span class="menu-arrow">
                                            <i class="ki-filled ki-right text-3xs">
                                            </i>
                                        </span>
                                </div>
                                <div class="menu-default menu-dropdown gap-0.5 w-[220px]">
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo8/network/user-cards/mini-cards.html">
                                                <span class="menu-title">
                                                    Mini Cards
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo8/network/user-cards/team-crew.html">
                                                <span class="menu-title">
                                                    Team Crew
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo8/network/user-cards/author.html">
                                                <span class="menu-title">
                                                    Author
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo8/network/user-cards/nft.html">
                                                <span class="menu-title">
                                                    NFT
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo8/network/user-cards/social.html">
                                                <span class="menu-title">
                                                    Social
                                                </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-item" data-menu-item-placement="right-start"
                                 data-menu-item-toggle="accordion|lg:dropdown"
                                 data-menu-item-trigger="click|lg:hover">
                                <div class="menu-link grow cursor-pointer">
                                        <span class="menu-title">
                                            User Table
                                        </span>
                                    <span class="menu-arrow">
                                            <i class="ki-filled ki-right text-3xs">
                                            </i>
                                        </span>
                                </div>
                                <div class="menu-default menu-dropdown gap-0.5 w-[220px]">
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo8/network/user-table/team-crew.html">
                                                <span class="menu-title">
                                                    Team Crew
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo8/network/user-table/app-roster.html">
                                                <span class="menu-title">
                                                    App Roster
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link"
                                           href="html/demo8/network/user-table/market-authors.html">
                                                <span class="menu-title">
                                                    Market Authors
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo8/network/user-table/saas-users.html">
                                                <span class="menu-title">
                                                    SaaS Users
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link"
                                           href="html/demo8/network/user-table/store-clients.html">
                                                <span class="menu-title">
                                                    Store Clients
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo8/network/user-table/visitors.html">
                                                <span class="menu-title">
                                                    Visitors
                                                </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="menu-item" data-menu-item-offset="-10px, 14px" data-menu-item-overflow="true"
                         data-menu-item-placement="right-start" data-menu-item-toggle="dropdown"
                         data-menu-item-trigger="click|lg:hover">
                        <div
                            class="menu-link rounded-[9px] border border-transparent menu-item-here:border-gray-200 menu-item-here:bg-light menu-link-hover:bg-light menu-link-hover:border-gray-200 w-[62px] h-[60px] flex flex-col justify-center items-center gap-1 p-2 grow">
                                <span
                                    class="menu-icon menu-item-here:text-primary menu-item-active:text-primary menu-link-hover:text-primary text-gray-600">
                                    <i class="ki-filled ki-share text-1.5xl">
                                    </i>
                                </span>
                            <span
                                class="menu-title menu-item-here:text-primary menu-item-active:text-primary menu-link-hover:text-primary font-medium text-xs text-gray-600">
                                    Help
                                </span>
                        </div>
                        <div
                            class="menu-default menu-dropdown gap-0.5 w-[220px] scrollable-y-auto lg:overflow-visible max-h-[50vh]">
                            <div class="menu-item">
                                <a class="menu-link"
                                   href="https://keenthemes.com/metronic/tailwind/docs/getting-started/installation">
                                        <span class="menu-title">
                                            Getting Started
                                        </span>
                                </a>
                            </div>
                            <div class="menu-item" data-menu-item-placement="right-start"
                                 data-menu-item-toggle="accordion|lg:dropdown"
                                 data-menu-item-trigger="click|lg:hover">
                                <div class="menu-link grow cursor-pointer">
                                        <span class="menu-title">
                                            Support Forum
                                        </span>
                                    <span class="menu-arrow">
                                            <i class="ki-filled ki-right text-3xs">
                                            </i>
                                        </span>
                                </div>
                                <div class="menu-default menu-dropdown gap-0.5 w-[220px]">
                                    <div class="menu-item">
                                        <a class="menu-link" href="https://devs.keenthemes.com">
                                                <span class="menu-title">
                                                    All Questions
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="https://devs.keenthemes.com/popular">
                                                <span class="menu-title">
                                                    Popular Questions
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="https://devs.keenthemes.com/question/create">
                                                <span class="menu-title">
                                                    Ask Question
                                                </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link"
                                   href="https://keenthemes.com/metronic/tailwind/docs/getting-started/license">
                                        <span class="menu-title">
                                            Licenses & FAQ
                                        </span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="https://keenthemes.com/metronic/tailwind/docs">
                                        <span class="menu-title">
                                            Documentation
                                        </span>
                                </a>
                            </div>
                            <div class="menu-separator">
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="https://keenthemes.com/contact">
                                        <span class="menu-title">
                                            Contact Us
                                        </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Sidebar Menu -->
            </div>
            <div class="flex flex-col gap-5 items-center shrink-0 pb-4" id="sidebar_footer">
                <div class="flex flex-col gap-1.5">
                    <div class="dropdown" data-dropdown="true" data-dropdown-offset="110px, 30px"
                         data-dropdown-placement="right-end" data-dropdown-trigger="click|lg:click">
                        <button
                            class="dropdown-toggle btn btn-icon btn-icon-xl relative rounded-md size-9 border border-transparent hover:bg-light hover:text-primary hover:border-gray-200 dropdown-open:bg-gray-200 text-gray-600">
                                <span class="menu-icon">
                                    <i class="ki-filled ki-messages">
                                    </i>
                                </span>
                        </button>
                        <div class="dropdown-content light:border-gray-300 w-screen max-w-[450px]">
                            <div class="">
                                <div
                                    class="flex items-center justify-between gap-2.5 text-sm text-gray-900 font-semibold px-5 py-2.5">
                                    Chat
                                    <button class="btn btn-sm btn-icon btn-light btn-clear shrink-0"
                                            data-dropdown-dismiss="true">
                                        <i class="ki-filled ki-cross">
                                        </i>
                                    </button>
                                </div>
                                <div class="border-b border-b-gray-200">
                                </div>
                                <div class="shadow-card border-b border-gray-200 py-2.5">
                                    <div class="flex items-center justify-between flex-wrap gap-2 px-5">
                                        <div class="flex items-center flex-wrap gap-2">
                                            <div
                                                class="flex items-center justify-center shrink-0 rounded-full bg-gray-100 border border-gray-200 size-11">
                                                <img alt="" class="size-7"
                                                     src="assets/media/brand-logos/gitlab.svg" />
                                            </div>
                                            <div class="flex flex-col">
                                                <a class="text-2sm font-semibold text-gray-900 hover:text-primary-active"
                                                   href="#">
                                                    HR Team
                                                </a>
                                                <span class="text-2xs font-medium italic text-gray-500">
                                                        Jessy is typing..
                                                    </span>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-2.5">
                                            <div class="flex -space-x-2">
                                                <div class="flex">
                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                         src="assets/media/avatars/300-4.png" />
                                                </div>
                                                <div class="flex">
                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                         src="assets/media/avatars/300-1.png" />
                                                </div>
                                                <div class="flex">
                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                         src="assets/media/avatars/300-2.png" />
                                                </div>
                                                <div class="flex">
                                                        <span
                                                            class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-success-inverse size-6 ring-success-light bg-success">
                                                            +10
                                                        </span>
                                                </div>
                                            </div>
                                            <div class="menu" data-menu="true">
                                                <div class="menu-item" data-menu-item-offset="0, 10px"
                                                     data-menu-item-placement="bottom-end"
                                                     data-menu-item-toggle="dropdown"
                                                     data-menu-item-trigger="click|lg:hover">
                                                    <button
                                                        class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                                                        <i class="ki-filled ki-dots-vertical">
                                                        </i>
                                                    </button>
                                                    <div class="menu-dropdown menu-default w-full max-w-[175px]"
                                                         data-menu-dismiss="true">
                                                        <div class="menu-item">
                                                            <a class="menu-link"
                                                               href="html/demo8/account/members/teams.html">
                                                                    <span class="menu-icon">
                                                                        <i class="ki-filled ki-users">
                                                                        </i>
                                                                    </span>
                                                                <span class="menu-title">
                                                                        Invite Users
                                                                    </span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item" data-menu-item-offset="-15px, 0"
                                                             data-menu-item-placement="right-start"
                                                             data-menu-item-toggle="dropdown"
                                                             data-menu-item-trigger="click|lg:hover">
                                                            <div class="menu-link">
                                                                    <span class="menu-icon">
                                                                        <i class="ki-filled ki-people">
                                                                        </i>
                                                                    </span>
                                                                <span class="menu-title">
                                                                        Team
                                                                    </span>
                                                                <span class="menu-arrow">
                                                                        <i class="ki-filled ki-right text-3xs">
                                                                        </i>
                                                                    </span>
                                                            </div>
                                                            <div
                                                                class="menu-dropdown menu-default w-full max-w-[175px]">
                                                                <div class="menu-item">
                                                                    <a class="menu-link"
                                                                       href="html/demo8/account/members/import-members.html">
                                                                            <span class="menu-icon">
                                                                                <i class="ki-filled ki-shield-search">
                                                                                </i>
                                                                            </span>
                                                                        <span class="menu-title">
                                                                                Find Members
                                                                            </span>
                                                                    </a>
                                                                </div>
                                                                <div class="menu-item">
                                                                    <a class="menu-link"
                                                                       href="html/demo8/account/members/import-members.html">
                                                                            <span class="menu-icon">
                                                                                <i class="ki-filled ki-calendar">
                                                                                </i>
                                                                            </span>
                                                                        <span class="menu-title">
                                                                                Meetings
                                                                            </span>
                                                                    </a>
                                                                </div>
                                                                <div class="menu-item">
                                                                    <a class="menu-link"
                                                                       href="html/demo8/account/members/import-members.html">
                                                                            <span class="menu-icon">
                                                                                <i class="ki-filled ki-filter-edit">
                                                                                </i>
                                                                            </span>
                                                                        <span class="menu-title">
                                                                                Group Settings
                                                                            </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a class="menu-link"
                                                               href="html/demo8/account/security/privacy-settings.html">
                                                                    <span class="menu-icon">
                                                                        <i class="ki-filled ki-setting-3">
                                                                        </i>
                                                                    </span>
                                                                <span class="menu-title">
                                                                        Settings
                                                                    </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="scrollable-y-auto" data-scrollable="true"
                                 data-scrollable-dependencies="#header" data-scrollable-max-height="auto"
                                 data-scrollable-offset="280px">
                                <div class="flex flex-col gap-5 py-5">
                                    <div class="flex items-end gap-3.5 px-5">
                                        <img alt="" class="rounded-full size-9"
                                             src="assets/media/avatars/300-5.png" />
                                        <div class="flex flex-col gap-1.5">
                                            <div
                                                class="card shadow-none flex flex-col bg-gray-100 gap-2.5 p-3 rounded-bl-none">
                                                <p class="text-2sm font-medium text-gray-700">
                                                    Hello!
                                                    <br />
                                                    Next week we are closing the project. Do You have questions?
                                                </p>
                                            </div>
                                            <span class="text-2xs font-medium text-gray-500">
                                                    14:04
                                                </span>
                                        </div>
                                    </div>
                                    <div class="flex items-end justify-end gap-3.5 px-5">
                                        <div class="flex flex-col gap-1.5">
                                            <div
                                                class="card shadow-none flex bg-primary flex-col gap-2.5 p-3 rounded-br-none">
                                                <p class="text-2sm font-medium text-light">
                                                    This is excellent news!
                                                </p>
                                            </div>
                                            <div class="flex items-center justify-end relative">
                                                    <span class="text-2xs font-medium text-gray-600 mr-6">
                                                        14:08
                                                    </span>
                                                <i class="ki-filled ki-double-check text-lg absolute text-success">
                                                </i>
                                            </div>
                                        </div>
                                        <div class="relative shrink-0">
                                            <img alt="" class="rounded-full size-9"
                                                 src="assets/media/avatars/300-2.png" />
                                            <span
                                                class="size-[4.8px] badge badge-circle badge-success absolute top-7 end-0 transform -translate-y-1/2">
                                                </span>
                                        </div>
                                    </div>
                                    <div class="flex items-end gap-3.5 px-5">
                                        <img alt="" class="rounded-full size-9"
                                             src="assets/media/avatars/300-4.png" />
                                        <div class="flex flex-col gap-1.5">
                                            <div
                                                class="card shadow-none flex flex-col bg-gray-100 gap-2.5 p-3 rounded-bl-none">
                                                <p class="text-2sm font-medium text-gray-700">
                                                    I have checked the features, can not wait to demo them!
                                                </p>
                                            </div>
                                            <span class="text-2xs font-medium text-gray-500">
                                                    14:26
                                                </span>
                                        </div>
                                    </div>
                                    <div class="flex items-end gap-3.5 px-5">
                                        <img alt="" class="rounded-full size-9"
                                             src="assets/media/avatars/300-1.png" />
                                        <div class="flex flex-col gap-1.5">
                                            <div
                                                class="card shadow-none flex flex-col bg-gray-100 gap-2.5 p-3 rounded-bl-none">
                                                <p class="text-2sm font-medium text-gray-700">
                                                    I have looked over the rollout plan, and everything seems spot
                                                    on. I am ready on my end and can not wait for the user feedback.
                                                </p>
                                            </div>
                                            <span class="text-2xs font-medium text-gray-500">
                                                    15:09
                                                </span>
                                        </div>
                                    </div>
                                    <div class="flex items-end justify-end gap-3.5 px-5">
                                        <div class="flex flex-col gap-1.5">
                                            <div
                                                class="card shadow-none flex bg-primary flex-col gap-2.5 p-3 rounded-br-none">
                                                <p class="text-2sm font-medium text-light">
                                                    Haven't seen the build yet, I'll look now.
                                                </p>
                                            </div>
                                            <div class="flex items-center justify-end relative">
                                                    <span class="text-2xs font-medium text-gray-600 mr-6">
                                                        15:52
                                                    </span>
                                                <i class="ki-filled ki-double-check text-lg absolute text-gray-400">
                                                </i>
                                            </div>
                                        </div>
                                        <div class="relative shrink-0">
                                            <img alt="" class="rounded-full size-9"
                                                 src="assets/media/avatars/300-2.png" />
                                            <span
                                                class="size-[4.8px] badge badge-circle badge-success absolute top-7 end-0 transform -translate-y-1/2">
                                                </span>
                                        </div>
                                    </div>
                                    <div class="flex items-end justify-end gap-3.5 px-5">
                                        <div class="flex flex-col gap-1.5">
                                            <div
                                                class="card shadow-none flex bg-primary flex-col gap-2.5 p-3 rounded-br-none">
                                                <p class="text-2sm font-medium text-light">
                                                    Checking the build now
                                                </p>
                                            </div>
                                            <div class="flex items-center justify-end relative">
                                                    <span class="text-2xs font-medium text-gray-600 mr-6">
                                                        15:52
                                                    </span>
                                                <i class="ki-filled ki-double-check text-lg absolute text-gray-400">
                                                </i>
                                            </div>
                                        </div>
                                        <div class="relative shrink-0">
                                            <img alt="" class="rounded-full size-9"
                                                 src="assets/media/avatars/300-2.png" />
                                            <span
                                                class="size-[4.8px] badge badge-circle badge-success absolute top-7 end-0 transform -translate-y-1/2">
                                                </span>
                                        </div>
                                    </div>
                                    <div class="flex items-end gap-3.5 px-5">
                                        <img alt="" class="rounded-full size-9"
                                             src="assets/media/avatars/300-4.png" />
                                        <div class="flex flex-col gap-1.5">
                                            <div
                                                class="card shadow-none flex flex-col bg-gray-100 gap-2.5 p-3 rounded-bl-none">
                                                <p class="text-2sm font-medium text-gray-700">
                                                    Tomorrow, I will send the link for the meeting
                                                </p>
                                            </div>
                                            <span class="text-2xs font-medium text-gray-500">
                                                    17:40
                                                </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2.5">
                                <div class="flex grow gap-2 p-5 bg-gray-100 mb-2.5" id="join_request">
                                    <div class="relative shrink-0">
                                        <img alt="" class="rounded-full size-8"
                                             src="assets/media/avatars/300-14.png" />
                                        <span
                                            class="size-1.5 badge badge-circle bg-gray-400 absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
                                            </span>
                                    </div>
                                    <div class="flex items-center justify-between gap-3 grow">
                                        <div class="flex flex-col">
                                            <div class="text-2sm mb-px">
                                                <a class="hover:text-primary-active font-semibold text-gray-900"
                                                   href="#">
                                                    Jane Perez
                                                </a>
                                                <span class="text-gray-600">
                                                        wants to join chat
                                                    </span>
                                            </div>
                                            <span class="flex items-center text-2xs font-medium text-gray-500">
                                                    1 day ago
                                                    <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                                                    </span>
                                                    Design Team
                                                </span>
                                        </div>
                                        <div class="flex gap-2.5">
                                            <button class="btn btn-light btn-xs" data-dismiss="#join_request">
                                                Decline
                                            </button>
                                            <button class="btn btn-dark btn-xs">
                                                Accept
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="relative grow mx-5">
                                    <img alt=""
                                         class="rounded-full size-[30px] absolute left-0 top-2/4 -translate-y-2/4 ms-2.5"
                                         src="assets/media/avatars/300-2.png" />
                                    <input class="input h-auto py-4 ps-12 bg-transparent"
                                           placeholder="Write a message..." type="text" value="" />
                                    <div
                                        class="flex items-center gap-2.5 absolute right-3 top-1/2 -translate-y-1/2">
                                        <button class="btn btn-sm btn-icon btn-light btn-clear">
                                            <i class="ki-filled ki-exit-up">
                                            </i>
                                        </button>
                                        <a class="btn btn-dark btn-sm" href="#">
                                            Send
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown" data-dropdown="true" data-dropdown-offset="-20px, 30px"
                         data-dropdown-placement="right-end" data-dropdown-trigger="click|lg:click">
                        <button
                            class="dropdown-toggle btn btn-icon btn-icon-xl relative rounded-md size-9 border border-transparent hover:bg-light hover:text-primary hover:border-gray-200 dropdown-open:bg-gray-200 text-gray-600">
                                <span class="menu-icon">
                                    <i class="ki-filled ki-setting-2">
                                    </i>
                                </span>
                        </button>
                        <div class="dropdown-content light:border-gray-300 w-screen max-w-[320px]">
                            <div
                                class="flex items-center justify-between gap-2.5 text-2xs text-gray-600 font-medium px-5 py-3 border-b border-b-gray-200">
                                    <span>
                                        Apps
                                    </span>
                                <span>
                                        Enabled
                                    </span>
                            </div>
                            <div class="flex flex-col scrollable-y-auto max-h-[400px] divide-y divide-gray-200">
                                <div class="flex items-center justify-between flex-wrap gap-2 px-5 py-3.5">
                                    <div class="flex items-center flex-wrap gap-2">
                                        <div
                                            class="flex items-center justify-center shrink-0 rounded-full bg-gray-100 border border-gray-200 size-10">
                                            <img alt="" class="size-6" src="assets/media/brand-logos/jira.svg" />
                                        </div>
                                        <div class="flex flex-col">
                                            <a class="text-2sm font-semibold text-gray-900 hover:text-primary-active"
                                               href="#">
                                                Jira
                                            </a>
                                            <span class="text-2xs font-medium text-gray-600">
                                                    Project management
                                                </span>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2 lg:gap-5">
                                        <label class="switch switch-sm">
                                            <input type="checkbox" value="2" />
                                        </label>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between flex-wrap gap-2 px-5 py-3.5">
                                    <div class="flex items-center flex-wrap gap-2">
                                        <div
                                            class="flex items-center justify-center shrink-0 rounded-full bg-gray-100 border border-gray-200 size-10">
                                            <img alt="" class="size-6" src="assets/media/brand-logos/inferno.svg" />
                                        </div>
                                        <div class="flex flex-col">
                                            <a class="text-2sm font-semibold text-gray-900 hover:text-primary-active"
                                               href="#">
                                                Inferno
                                            </a>
                                            <span class="text-2xs font-medium text-gray-600">
                                                    Ensures healthcare app
                                                </span>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2 lg:gap-5">
                                        <label class="switch switch-sm">
                                            <input checked="" type="checkbox" value="1" />
                                        </label>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between flex-wrap gap-2 px-5 py-3.5">
                                    <div class="flex items-center flex-wrap gap-2">
                                        <div
                                            class="flex items-center justify-center shrink-0 rounded-full bg-gray-100 border border-gray-200 size-10">
                                            <img alt="" class="size-6"
                                                 src="assets/media/brand-logos/evernote.svg" />
                                        </div>
                                        <div class="flex flex-col">
                                            <a class="text-2sm font-semibold text-gray-900 hover:text-primary-active"
                                               href="#">
                                                Evernote
                                            </a>
                                            <span class="text-2xs font-medium text-gray-600">
                                                    Notes management app
                                                </span>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2 lg:gap-5">
                                        <label class="switch switch-sm">
                                            <input checked="" type="checkbox" value="1" />
                                        </label>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between flex-wrap gap-2 px-5 py-3.5">
                                    <div class="flex items-center flex-wrap gap-2">
                                        <div
                                            class="flex items-center justify-center shrink-0 rounded-full bg-gray-100 border border-gray-200 size-10">
                                            <img alt="" class="size-6" src="assets/media/brand-logos/gitlab.svg" />
                                        </div>
                                        <div class="flex flex-col">
                                            <a class="text-2sm font-semibold text-gray-900 hover:text-primary-active"
                                               href="#">
                                                Gitlab
                                            </a>
                                            <span class="text-2xs font-medium text-gray-600">
                                                    DevOps platform
                                                </span>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2 lg:gap-5">
                                        <label class="switch switch-sm">
                                            <input type="checkbox" value="2" />
                                        </label>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between flex-wrap gap-2 px-5 py-3.5">
                                    <div class="flex items-center flex-wrap gap-2">
                                        <div
                                            class="flex items-center justify-center shrink-0 rounded-full bg-gray-100 border border-gray-200 size-10">
                                            <img alt="" class="size-6"
                                                 src="assets/media/brand-logos/google-webdev.svg" />
                                        </div>
                                        <div class="flex flex-col">
                                            <a class="text-2sm font-semibold text-gray-900 hover:text-primary-active"
                                               href="#">
                                                Google webdev
                                            </a>
                                            <span class="text-2xs font-medium text-gray-600">
                                                    Building web expierences
                                                </span>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2 lg:gap-5">
                                        <label class="switch switch-sm">
                                            <input checked="" type="checkbox" value="1" />
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="grid p-5 border-t border-t-gray-200">
                                <a class="btn btn-sm btn-light justify-center"
                                   href="html/demo8/account/api-keys.html">
                                    Go to Apps
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu" data-menu="true">
                    <div class="menu-item" data-menu-item-offset="-20px, 28px" data-menu-item-overflow="true"
                         data-menu-item-placement="right-end" data-menu-item-toggle="dropdown"
                         data-menu-item-trigger="click|lg:click">
                        <div class="menu-toggle btn btn-icon">
                            <img alt="" class="size-8 justify-center rounded-lg border border-gray-500 shrink-0"
                                 src="assets/media/avatars/gray/5.png">
                            </img>
                        </div>
                        <div class="menu-dropdown menu-default light:border-gray-300 w-screen max-w-[250px]">
                            <div class="flex items-center justify-between px-5 py-1.5 gap-1.5">
                                <div class="flex items-center gap-2">
                                    <img alt="" class="size-9 rounded-full border-2 border-success"
                                         src="assets/media/avatars/300-2.png">
                                    <div class="flex flex-col gap-1.5">
                                            <span class="text-sm text-gray-800 font-semibold leading-none">
                                                Cody Fisher
                                            </span>
                                        <a class="text-xs text-gray-600 hover:text-primary font-medium leading-none"
                                           href="html/demo8/account/home/get-started.html">
                                            c.fisher@gmail.com
                                        </a>
                                    </div>
                                    </img>
                                </div>
                                <span class="badge badge-xs badge-primary badge-outline">
                                        Pro
                                    </span>
                            </div>
                            <div class="menu-separator">
                            </div>
                            <div class="flex flex-col">
                                <div class="menu-item">
                                    <a class="menu-link" href="html/demo8/public-profile/profiles/default.html">
                                            <span class="menu-icon">
                                                <i class="ki-filled ki-badge">
                                                </i>
                                            </span>
                                        <span class="menu-title">
                                                Public Profile
                                            </span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="html/demo8/account/home/user-profile.html">
                                            <span class="menu-icon">
                                                <i class="ki-filled ki-profile-circle">
                                                </i>
                                            </span>
                                        <span class="menu-title">
                                                My Profile
                                            </span>
                                    </a>
                                </div>
                                <div class="menu-item" data-menu-item-offset="-50px, 0"
                                     data-menu-item-placement="left-start" data-menu-item-toggle="dropdown"
                                     data-menu-item-trigger="click|lg:hover">
                                    <div class="menu-link">
                                            <span class="menu-icon">
                                                <i class="ki-filled ki-setting-2">
                                                </i>
                                            </span>
                                        <span class="menu-title">
                                                My Account
                                            </span>
                                        <span class="menu-arrow">
                                                <i class="ki-filled ki-right text-3xs">
                                                </i>
                                            </span>
                                    </div>
                                    <div
                                        class="menu-dropdown menu-default light:border-gray-300 w-full max-w-[220px]">
                                        <div class="menu-item">
                                            <a class="menu-link" href="html/demo8/account/home/get-started.html">
                                                    <span class="menu-icon">
                                                        <i class="ki-filled ki-coffee">
                                                        </i>
                                                    </span>
                                                <span class="menu-title">
                                                        Get Started
                                                    </span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="html/demo8/account/home/user-profile.html">
                                                    <span class="menu-icon">
                                                        <i class="ki-filled ki-some-files">
                                                        </i>
                                                    </span>
                                                <span class="menu-title">
                                                        My Profile
                                                    </span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="#">
                                                    <span class="menu-icon">
                                                        <i class="ki-filled ki-icon">
                                                        </i>
                                                    </span>
                                                <span class="menu-title">
                                                        Billing
                                                    </span>
                                                <span class="menu-badge" data-tooltip="true"
                                                      data-tooltip-placement="top">
                                                        <i class="ki-filled ki-information-2 text-md text-gray-500">
                                                        </i>
                                                        <span class="tooltip" data-tooltip-content="true">
                                                            Payment and subscription info
                                                        </span>
                                                    </span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="html/demo8/account/security/overview.html">
                                                    <span class="menu-icon">
                                                        <i class="ki-filled ki-medal-star">
                                                        </i>
                                                    </span>
                                                <span class="menu-title">
                                                        Security
                                                    </span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="html/demo8/account/members/teams.html">
                                                    <span class="menu-icon">
                                                        <i class="ki-filled ki-setting">
                                                        </i>
                                                    </span>
                                                <span class="menu-title">
                                                        Members & Roles
                                                    </span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="html/demo8/account/integrations.html">
                                                    <span class="menu-icon">
                                                        <i class="ki-filled ki-switch">
                                                        </i>
                                                    </span>
                                                <span class="menu-title">
                                                        Integrations
                                                    </span>
                                            </a>
                                        </div>
                                        <div class="menu-separator">
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="html/demo8/account/security/overview.html">
                                                    <span class="menu-icon">
                                                        <i class="ki-filled ki-shield-tick">
                                                        </i>
                                                    </span>
                                                <span class="menu-title">
                                                        Notifications
                                                    </span>
                                                <label class="switch switch-sm">
                                                    <input checked="" name="check" type="checkbox" value="1">
                                                    </input>
                                                </label>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="https://devs.keenthemes.com">
                                            <span class="menu-icon">
                                                <i class="ki-filled ki-message-programming">
                                                </i>
                                            </span>
                                        <span class="menu-title">
                                                Dev Forum
                                            </span>
                                    </a>
                                </div>
                                <div class="menu-item" data-menu-item-offset="-10px, 0"
                                     data-menu-item-placement="left-start" data-menu-item-toggle="dropdown"
                                     data-menu-item-trigger="click|lg:hover">
                                    <div class="menu-link">
                                            <span class="menu-icon">
                                                <i class="ki-filled ki-icon">
                                                </i>
                                            </span>
                                        <span class="menu-title">
                                                Language
                                            </span>
                                        <div
                                            class="flex items-center gap-1.5 rounded-md border border-gray-300 text-gray-600 p-1.5 text-2xs font-medium shrink-0">
                                            English
                                            <img alt="" class="inline-block size-3.5 rounded-full"
                                                 src="assets/media/flags/united-states.svg" />
                                        </div>
                                    </div>
                                    <div
                                        class="menu-dropdown menu-default light:border-gray-300 w-full max-w-[170px]">
                                        <div class="menu-item active">
                                            <a class="menu-link h-10" href="#">
                                                    <span class="menu-icon">
                                                        <img alt="" class="inline-block size-4 rounded-full"
                                                             src="assets/media/flags/united-states.svg" />
                                                    </span>
                                                <span class="menu-title">
                                                        English
                                                    </span>
                                                <span class="menu-badge">
                                                        <i class="ki-solid ki-check-circle text-success text-base">
                                                        </i>
                                                    </span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link h-10" href="#">
                                                    <span class="menu-icon">
                                                        <img alt="" class="inline-block size-4 rounded-full"
                                                             src="assets/media/flags/spain.svg" />
                                                    </span>
                                                <span class="menu-title">
                                                        Spanish
                                                    </span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link h-10" href="#">
                                                    <span class="menu-icon">
                                                        <img alt="" class="inline-block size-4 rounded-full"
                                                             src="assets/media/flags/germany.svg" />
                                                    </span>
                                                <span class="menu-title">
                                                        German
                                                    </span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link h-10" href="#">
                                                    <span class="menu-icon">
                                                        <img alt="" class="inline-block size-4 rounded-full"
                                                             src="assets/media/flags/japan.svg" />
                                                    </span>
                                                <span class="menu-title">
                                                        Japanese
                                                    </span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link h-10" href="#">
                                                    <span class="menu-icon">
                                                        <img alt="" class="inline-block size-4 rounded-full"
                                                             src="assets/media/flags/france.svg" />
                                                    </span>
                                                <span class="menu-title">
                                                        French
                                                    </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-separator">
                            </div>
                            <div class="flex flex-col">
                                <div class="menu-item mb-0.5">
                                    <div class="menu-link">
                                            <span class="menu-icon">
                                                <i class="ki-filled ki-moon">
                                                </i>
                                            </span>
                                        <span class="menu-title">
                                                Dark Mode
                                            </span>
                                        <label class="switch switch-sm">
                                            <input data-theme-state="dark" data-theme-toggle="true" name="check"
                                                   type="checkbox" value="1">
                                            </input>
                                        </label>
                                    </div>
                                </div>
                                <div class="menu-item px-4 py-1.5">
                                    <a class="btn btn-sm btn-light justify-center"
                                       href="html/demo8/authentication/classic/sign-in.html">
                                        Log out
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Sidebar -->
        <!-- Main -->
        <main
            class="flex flex-col grow rounded-xl bg-[--tw-content-bg] dark:bg-[--tw-content-bg-dark] border border-gray-300 dark:border-gray-200 lg:ms-[--tw-sidebar-width] pt-5 mt-0 lg:mt-5 m-5"
            role="content">
            <!-- Toolbar -->
            <div class="pb-5">
                <!-- Container -->
                <div class="container-fixed flex items-center justify-between flex-wrap gap-3">
                    <div class="flex items-center flex-wrap gap-1 lg:gap-5">
                        <h1 class="font-medium text-base text-gray-900">
                            Dispositivos
                        </h1>
                        <div class="flex items-center flex-wrap gap-1 text-sm">
                            <a class="text-gray-700 hover:text-primary" href="html/demo8.html">
                                Home
                            </a>
                            <span class="text-gray-400 text-sm">
                                    /
                                </span>
                            <span class="text-gray-700">
                                    Dispositivos
                                </span>
                            <span class="text-gray-400 text-sm">
                                    /
                                </span>
                            <span class="text-gray-900">
                                    Adicionar DVR
                                </span>
                        </div>
                    </div>
                </div>
                <!-- End of Container -->
            </div>
            <!-- End of Toolbar -->
            <!-- Container -->
            <div class="container-fixed">
                <div class="grid gap-5 lg:gap-7.5 xl:w-[38.75rem] mx-auto">
                    <div class="card pb-2.5">
                        <div class="card-header" id="basic_settings">
                            <h3 class="card-title">
                                Informações Roteador
                            </h3>
                        </div>
                        <div class="card-body grid gap-5">
                            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                                <label class="form-label max-w-56">
                                    Marca
                                </label>
                                <input class="input" type="text" placeholder="Marca" value="" />
                            </div>
                            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                                <label class="form-label max-w-56">
                                    Modelo
                                </label>
                                <input class="input" placeholder="Modelo" type="text" value="" />
                            </div>
                            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                                <label class="form-label max-w-56">
                                    Serial
                                </label>
                                <input class="input" placeholder="Serial" type="text" value="" />
                            </div>
                            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5 mb-2.5">
                                <label class="form-label max-w-56">
                                    Local de Instalação
                                </label>
                                <input class="input" placeholder="Local de Instalação" type="text" value="" />
                            </div>
                            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5 mb-2.5">
                                <label class="form-label max-w-56">
                                    Observação
                                </label>
                                <textarea class="textarea" placeholder="Observação" rows="4" value=""></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="card pb-2.5">
                        <div class="card-header" id="basic_settings">
                            <h3 class="card-title">
                                Redes
                            </h3>
                        </div>
                        <div class="card-body grid gap-5">
                            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                                <label class="form-label max-w-56">
                                    MAC
                                </label>
                                <input class="input" placeholder="MAC" type="text" value="" />
                            </div>
                            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                                <label class="form-label max-w-56">
                                    IP
                                </label>
                                <input class="input" placeholder="IP" type="text" value="" />
                            </div>
                            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                                <label class="form-label max-w-56">
                                    mascara
                                </label>
                                <input class="input" placeholder="mascara" type="text" value="" />
                            </div>
                            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5 mb-2.5">
                                <label class="form-label max-w-56">
                                    Gatway
                                </label>
                                <input class="input" placeholder="Gatway" type="text" value="" />
                            </div>
                        </div>
                    </div>

                    <div class="card pb-2.5">
                        <div class="card-header" id="basic_settings">
                            <h3 class="card-title">
                                Acesso
                            </h3>
                        </div>
                        <div class="card-body grid gap-5">
                            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                                <label class="form-label max-w-56">
                                    IP de Acesso lan
                                </label>
                                <input class="input" placeholder="IP de Acesso lan" type="text" value="" />
                            </div>
                            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                                <label class="form-label max-w-56">
                                    Porta de acesso lan
                                </label>
                                <input class="input" placeholder="porta de acesso lan" type="text" value="" />
                            </div>
                            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                                <label class="form-label max-w-56">
                                    Link de Acesso externo
                                </label>
                                <input class="input" placeholder="Link de Acesso externo" type="text" value="" />
                            </div>
                            <div class="flex justify-end">
                                <button class="btn btn-outline btn-success">
                                    <i class="ki-outline ki-plus-squared"></i>
                                    Adicionar
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card pb-2.5">
                        <div class="card-header" id="basic_settings">
                            <h3 class="card-title">
                                Usuários
                            </h3>
                        </div>
                        <div class="card-body grid gap-5">
                            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                                <label class="form-label max-w-56">
                                    Nome Usuário
                                </label>
                                <input class="input" placeholder="Nome Usuário" type="text" value="" />
                            </div>
                            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                                <label class="form-label max-w-56">
                                    Senha
                                </label>
                                <input class="input" placeholder="Senha" type="password" value="" />
                            </div>
                            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                                <label class="form-label max-w-56">
                                    Grupo de Usuário
                                </label>
                                <input class="input" placeholder="Grupo de Usuário" type="text" value="" />
                            </div>
                            <div class="flex justify-end">
                                <button class="btn btn-outline btn-primary">
                                    <i class="ki-outline ki-user-tick"></i>
                                    Adicionar Usuário
                                </button>
                            </div>
                            <div></div> <!-- AJ (ajuste técnico) :) -->
                            <div></div>

                            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                                <div data-datatable="true" data-datatable-page-size="10">
                                    <div class="scrollable-x-auto">
                                        <table class="table table-auto table-border" data-datatable-table="true"
                                               id="api_integration_table">
                                            <thead>
                                            <tr>
                                                <th class="min-w-[206px]">
                                                            <span class="sort">
                                                                <span class="sort-label text-gray-700 font-normal">
                                                                    Nome do Usuário
                                                                </span>
                                                                <span class="sort-icon">
                                                                </span>
                                                            </span>
                                                </th>
                                                <th class="min-w-[224px]">
                                                            <span class="sort">
                                                                <span class="sort-label text-gray-700 font-normal">
                                                                    Senha
                                                                </span>
                                                                <span class="sort-icon">
                                                                </span>
                                                            </span>
                                                </th>
                                                <th class="min-w-[122px]">
                                                            <span class="sort">
                                                                <span class="sort-label text-gray-700 font-normal">
                                                                    Grupo
                                                                </span>
                                                                <span class="sort-icon">
                                                                </span>
                                                            </span>
                                                </th>
                                                <th class="w-[60px]">
                                                            <span class="sort-label text-gray-700 font-normal">
                                                                Ação
                                                            </span>
                                                </th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr>
                                                <td class="text-gray-800 font-normal">
                                                    Admin
                                                </td>
                                                <td>
                                                    <div class="flex items-center text-gray-800 font-normal">
                                                        a1b2Xc3dY4ZxQvPlQp
                                                        <a class="btn btn-sm btn-icon btn-clear text-gray-500 hover:text-primary-active"
                                                           href="#">
                                                            <i class="ki-filled ki-copy">
                                                            </i>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="text-gray-800 font-normal">
                                                    Admin
                                                </td>
                                                <td>
                                                    <div class="menu inline-flex" data-menu="true">
                                                        <div class="menu-item" data-menu-item-offset="0, 10px"
                                                             data-menu-item-placement="bottom-end"
                                                             data-menu-item-toggle="dropdown"
                                                             data-menu-item-trigger="click|lg:click">
                                                            <button
                                                                class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                                                                <i class="ki-filled ki-dots-vertical">
                                                                </i>
                                                            </button>
                                                            <div class="menu-dropdown menu-default w-full max-w-[175px]"
                                                                 data-menu-dismiss="true">
                                                                <div class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                                <span class="menu-icon">
                                                                                    <i class="ki-filled ki-pencil">
                                                                                    </i>
                                                                                </span>
                                                                        <span class="menu-title">
                                                                                    Edit
                                                                                </span>
                                                                    </a>
                                                                </div>
                                                                <div class="menu-separator">
                                                                </div>
                                                                <div class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                                <span class="menu-icon">
                                                                                    <i class="ki-filled ki-trash">
                                                                                    </i>
                                                                                </span>
                                                                        <span class="menu-title">
                                                                                    Remove
                                                                                </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-gray-800 font-normal">
                                                    Natacha_caldeirao
                                                </td>
                                                <td>
                                                    <div class="flex items-center text-gray-800 font-normal">
                                                        a1b2Xc3dY4ZxQvPlQp
                                                        <a class="btn btn-sm btn-icon btn-clear text-gray-500 hover:text-primary-active"
                                                           href="#">
                                                            <i class="ki-filled ki-copy">
                                                            </i>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="text-gray-800 font-normal">
                                                    user
                                                </td>
                                                <td>
                                                    <div class="menu inline-flex" data-menu="true">
                                                        <div class="menu-item" data-menu-item-offset="0, 10px"
                                                             data-menu-item-placement="bottom-end"
                                                             data-menu-item-toggle="dropdown"
                                                             data-menu-item-trigger="click|lg:click">
                                                            <button
                                                                class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                                                                <i class="ki-filled ki-dots-vertical">
                                                                </i>
                                                            </button>
                                                            <div class="menu-dropdown menu-default w-full max-w-[175px]"
                                                                 data-menu-dismiss="true">
                                                                <div class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                                <span class="menu-icon">
                                                                                    <i class="ki-filled ki-pencil">
                                                                                    </i>
                                                                                </span>
                                                                        <span class="menu-title">
                                                                                    Editar
                                                                                </span>
                                                                    </a>
                                                                </div>
                                                                <div class="menu-separator">
                                                                </div>
                                                                <div class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                                <span class="menu-icon">
                                                                                    <i class="ki-filled ki-trash">
                                                                                    </i>
                                                                                </span>
                                                                        <span class="menu-title">
                                                                                    Remover
                                                                                </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card pb-2.5">
                        <div class="card-header" id="basic_settings">
                            <h3 class="card-title">
                                Redes Wi-fi
                            </h3>
                        </div>
                        <div class="card-body grid gap-5">
                            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                                <label class="form-label max-w-56">
                                    Nome Rede
                                </label>
                                <input class="input" placeholder="Nome Rede" type="text" value="" />
                            </div>
                            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                                <label class="form-label max-w-56">
                                    Senha
                                </label>
                                <input class="input" placeholder="Senha" type="password" value="" />
                            </div>
                            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                                <label class="form-label max-w-56">
                                    Observação
                                </label>
                                <input class="input" placeholder="Observação" type="text" value="" />
                            </div>
                            <div class="flex justify-end">
                                <button class="btn btn-outline btn-primary">
                                    <i class="ki-outline ki-user-tick"></i>
                                    Adicionar Usuário
                                </button>
                            </div>
                            <div></div> <!-- AJ (ajuste técnico) :) -->
                            <div></div>

                            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                                <div data-datatable="true" data-datatable-page-size="10">
                                    <div class="scrollable-x-auto">
                                        <table class="table table-auto table-border" data-datatable-table="true"
                                               id="api_integration_table">
                                            <thead>
                                            <tr>
                                                <th class="min-w-[206px]">
                                                            <span class="sort">
                                                                <span class="sort-label text-gray-700 font-normal">
                                                                    Nome do Rede
                                                                </span>
                                                                <span class="sort-icon">
                                                                </span>
                                                            </span>
                                                </th>
                                                <th class="min-w-[224px]">
                                                            <span class="sort">
                                                                <span class="sort-label text-gray-700 font-normal">
                                                                    Senha
                                                                </span>
                                                                <span class="sort-icon">
                                                                </span>
                                                            </span>
                                                </th>
                                                <th class="min-w-[122px]">
                                                            <span class="sort">
                                                                <span class="sort-label text-gray-700 font-normal">
                                                                    Observação
                                                                </span>
                                                                <span class="sort-icon">
                                                                </span>
                                                            </span>
                                                </th>
                                                <th class="w-[60px]">
                                                            <span class="sort-label text-gray-700 font-normal">
                                                                Ação
                                                            </span>
                                                </th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr>
                                                <td class="text-gray-800 font-normal">
                                                    ab_wifi-5g
                                                </td>
                                                <td>
                                                    <div class="flex items-center text-gray-800 font-normal">
                                                        senha132456789
                                                        <a class="btn btn-sm btn-icon btn-clear text-gray-500 hover:text-primary-active"
                                                           href="#">
                                                            <i class="ki-filled ki-copy">
                                                            </i>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="text-gray-800 font-normal">
                                                    rede visitantes sem acesso a youtube
                                                </td>
                                                <td>
                                                    <div class="menu inline-flex" data-menu="true">
                                                        <div class="menu-item" data-menu-item-offset="0, 10px"
                                                             data-menu-item-placement="bottom-end"
                                                             data-menu-item-toggle="dropdown"
                                                             data-menu-item-trigger="click|lg:click">
                                                            <button
                                                                class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                                                                <i class="ki-filled ki-dots-vertical">
                                                                </i>
                                                            </button>
                                                            <div class="menu-dropdown menu-default w-full max-w-[175px]"
                                                                 data-menu-dismiss="true">
                                                                <div class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                                <span class="menu-icon">
                                                                                    <i class="ki-filled ki-pencil">
                                                                                    </i>
                                                                                </span>
                                                                        <span class="menu-title">
                                                                                    Edit
                                                                                </span>
                                                                    </a>
                                                                </div>
                                                                <div class="menu-separator">
                                                                </div>
                                                                <div class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                                <span class="menu-icon">
                                                                                    <i class="ki-filled ki-trash">
                                                                                    </i>
                                                                                </span>
                                                                        <span class="menu-title">
                                                                                    Remove
                                                                                </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-gray-800 font-normal">
                                                    ab_visitantes-5g
                                                </td>
                                                <td>
                                                    <div class="flex items-center text-gray-800 font-normal">
                                                        visita 123
                                                        <a class="btn btn-sm btn-icon btn-clear text-gray-500 hover:text-primary-active"
                                                           href="#">
                                                            <i class="ki-filled ki-copy">
                                                            </i>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="text-gray-800 font-normal">
                                                    login com autokick em 20min
                                                </td>
                                                <td>
                                                    <div class="menu inline-flex" data-menu="true">
                                                        <div class="menu-item" data-menu-item-offset="0, 10px"
                                                             data-menu-item-placement="bottom-end"
                                                             data-menu-item-toggle="dropdown"
                                                             data-menu-item-trigger="click|lg:click">
                                                            <button
                                                                class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                                                                <i class="ki-filled ki-dots-vertical">
                                                                </i>
                                                            </button>
                                                            <div class="menu-dropdown menu-default w-full max-w-[175px]"
                                                                 data-menu-dismiss="true">
                                                                <div class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                                <span class="menu-icon">
                                                                                    <i class="ki-filled ki-pencil">
                                                                                    </i>
                                                                                </span>
                                                                        <span class="menu-title">
                                                                                    Editar
                                                                                </span>
                                                                    </a>
                                                                </div>
                                                                <div class="menu-separator">
                                                                </div>
                                                                <div class="menu-item">
                                                                    <a class="menu-link" href="#">
                                                                                <span class="menu-icon">
                                                                                    <i class="ki-filled ki-trash">
                                                                                    </i>
                                                                                </span>
                                                                        <span class="menu-title">
                                                                                    Remover
                                                                                </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- End of Container -->
            <!-- Footer -->
            <footer class="footer">
                <!-- Container -->
                <div class="container-fixed">
                    <div
                        class="flex flex-col md:flex-row justify-center md:justify-between items-center gap-3 py-5">
                        <div class="flex order-2 md:order-1 gap-2 font-normal text-2sm">
                                <span class="text-gray-500">
                                    2024©
                                </span>
                            <a class="text-gray-600 hover:text-primary" href="https://keenthemes.com">
                                JF Soluções Inteligentes.
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End of Container -->
            </footer>
            <!-- End of Footer -->
        </main>
        <!-- End of Main -->
    </div>
    <!-- End of Wrapper -->
</div>
<!-- End of Base -->
<div class="modal" data-modal="true" id="search_modal">
    <div class="modal-content max-w-[600px] top-[15%]">
        <div class="modal-header py-4 px-5">
            <i class="ki-filled ki-magnifier text-gray-700 text-xl">
            </i>
            <input class="input px-0 border-none bg-transparent shadow-none ml-2.5" name="query"
                   placeholder="Tap to start search" type="text" value="" />
            <button class="btn btn-sm btn-icon btn-light btn-clear shrink-0" data-modal-dismiss="true">
                <i class="ki-filled ki-cross">
                </i>
            </button>
        </div>
        <div class="modal-body p-0 pb-5">
            <div class="tabs justify-between px-5 mb-2.5" data-tabs="true">
                <div class="flex items-center gap-5">
                    <button class="tab py-5 active" data-tab-toggle="#search_modal_mixed">
                        Mixed
                    </button>
                    <button class="tab py-5" data-tab-toggle="#search_modal_settings">
                        Settings
                    </button>
                    <button class="tab py-5" data-tab-toggle="#search_modal_integrations">
                        Integrations
                    </button>
                    <button class="tab py-5" data-tab-toggle="#search_modal_users">
                        Users
                    </button>
                    <button class="tab py-5" data-tab-toggle="#search_modal_docs">
                        Docs
                    </button>
                    <button class="tab py-5" data-tab-toggle="#search_modal_empty">
                        Empty
                    </button>
                    <button class="tab py-5" data-tab-toggle="#search_modal_no-results">
                        No Results
                    </button>
                </div>
                <div class="menu -mt-px" data-menu="true">
                    <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end"
                         data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:hover">
                        <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                            <i class="ki-filled ki-setting-2">
                            </i>
                        </button>
                        <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                            <div class="menu-item">
                                <a class="menu-link" href="#">
                                        <span class="menu-icon">
                                            <i class="ki-filled ki-document">
                                            </i>
                                        </span>
                                    <span class="menu-title">
                                            View
                                        </span>
                                </a>
                            </div>
                            <div class="menu-item" data-menu-item-offset="-15px, 0"
                                 data-menu-item-placement="right-start" data-menu-item-toggle="dropdown"
                                 data-menu-item-trigger="click|lg:hover">
                                <div class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-filled ki-notification-status">
                                            </i>
                                        </span>
                                    <span class="menu-title">
                                            Export
                                        </span>
                                    <span class="menu-arrow">
                                            <i class="ki-filled ki-right text-3xs">
                                            </i>
                                        </span>
                                </div>
                                <div class="menu-dropdown menu-default w-full max-w-[175px]">
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo8/account/home/settings-sidebar.html">
                                                <span class="menu-icon">
                                                    <i class="ki-filled ki-sms">
                                                    </i>
                                                </span>
                                            <span class="menu-title">
                                                    Email
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo8/account/home/settings-sidebar.html">
                                                <span class="menu-icon">
                                                    <i class="ki-filled ki-message-notify">
                                                    </i>
                                                </span>
                                            <span class="menu-title">
                                                    SMS
                                                </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="html/demo8/account/home/settings-sidebar.html">
                                                <span class="menu-icon">
                                                    <i class="ki-filled ki-notification-status">
                                                    </i>
                                                </span>
                                            <span class="menu-title">
                                                    Push
                                                </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="#">
                                        <span class="menu-icon">
                                            <i class="ki-filled ki-pencil">
                                            </i>
                                        </span>
                                    <span class="menu-title">
                                            Edit
                                        </span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="#">
                                        <span class="menu-icon">
                                            <i class="ki-filled ki-trash">
                                            </i>
                                        </span>
                                    <span class="menu-title">
                                            Delete
                                        </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="scrollable-y-auto" data-scrollable="true" data-scrollable-max-height="auto"
                 data-scrollable-offset="300px">
                <div class="" id="search_modal_mixed">
                    <div class="flex flex-col gap-2.5">
                        <div>
                            <div class="text-xs text-gray-600 font-medium pt-2.5 pb-1.5 pl-5">
                                Settings
                            </div>
                            <div class="menu menu-default p-0 flex-col">
                                <div class="menu-item">
                                    <a class="menu-link" href="#">
                                            <span class="menu-icon">
                                                <i class="ki-filled ki-badge">
                                                </i>
                                            </span>
                                        <span class="menu-title">
                                                Public Profile
                                            </span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="#">
                                            <span class="menu-icon">
                                                <i class="ki-filled ki-setting-2">
                                                </i>
                                            </span>
                                        <span class="menu-title">
                                                My Account
                                            </span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="#">
                                            <span class="menu-icon">
                                                <i class="ki-filled ki-message-programming">
                                                </i>
                                            </span>
                                        <span class="menu-title">
                                                Devs Forum
                                            </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="border-b border-b-gray-200">
                        </div>
                        <div>
                            <div class="text-xs text-gray-600 font-medium pt-2.5 pb-1.5 pl-5">
                                Integrations
                            </div>
                            <div class="menu menu-default p-0 flex-col">
                                <div class="menu-item">
                                    <div class="menu-link flex items-center jistify-between gap-2">
                                        <div class="flex items-center grow gap-2">
                                            <div
                                                class="flex items-center justify-center size-10 shrink-0 rounded-full border border-gray-200 bg-gray-100">
                                                <img alt="" class="size-6 shrink-0"
                                                     src="assets/media/brand-logos/jira.svg" />
                                            </div>
                                            <div class="flex flex-col gap-0.5">
                                                <a class="text-2sm font-semibold text-gray-900 hover:text-primary-active"
                                                   href="#">
                                                    Jira
                                                </a>
                                                <span class="text-2xs font-medium text-gray-600">
                                                        Project management
                                                    </span>
                                            </div>
                                        </div>
                                        <div class="flex justify-end shrink-0">
                                            <div class="flex -space-x-2">
                                                <div class="flex">
                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                         src="assets/media/avatars/300-4.png" />
                                                </div>
                                                <div class="flex">
                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                         src="assets/media/avatars/300-1.png" />
                                                </div>
                                                <div class="flex">
                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                         src="assets/media/avatars/300-2.png" />
                                                </div>
                                                <div class="flex">
                                                        <span
                                                            class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-6 text-success-inverse size-6 ring-success-light bg-success">
                                                            +3
                                                        </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <div class="menu-link flex items-center jistify-between gap-2">
                                        <div class="flex items-center grow gap-2">
                                            <div
                                                class="flex items-center justify-center size-10 shrink-0 rounded-full border border-gray-200 bg-gray-100">
                                                <img alt="" class="size-6 shrink-0"
                                                     src="assets/media/brand-logos/inferno.svg" />
                                            </div>
                                            <div class="flex flex-col gap-0.5">
                                                <a class="text-2sm font-semibold text-gray-900 hover:text-primary-active"
                                                   href="#">
                                                    Inferno
                                                </a>
                                                <span class="text-2xs font-medium text-gray-600">
                                                        Real-time photo sharing app
                                                    </span>
                                            </div>
                                        </div>
                                        <div class="flex justify-end shrink-0">
                                            <div class="flex -space-x-2">
                                                <div class="flex">
                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                         src="assets/media/avatars/300-14.png" />
                                                </div>
                                                <div class="flex">
                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                         src="assets/media/avatars/300-12.png" />
                                                </div>
                                                <div class="flex">
                                                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                         src="assets/media/avatars/300-9.png" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-b border-b-gray-200">
                        </div>
                        <div>
                            <div class="text-xs text-gray-600 font-medium pt-2.5 pb-1.5 pl-5">
                                Users
                            </div>
                            <div class="menu menu-default p-0 flex-col">
                                <div class="grid gap-1">
                                    <div class="menu-item">
                                        <div class="menu-link flex justify-between gap-2">
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0"
                                                     src="assets/media/avatars/300-3.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px"
                                                       href="#">
                                                        Tyler Hero
                                                    </a>
                                                    <span class="text-2sm font-normal text-gray-500">
                                                            tyler.hero@gmail.com connections
                                                        </span>
                                                </div>
                                            </div>
                                            <div class="flex items-center gap-2.5">
                                                <div class="badge badge-pill badge-outline badge-success gap-1.5">
                                                        <span class="badge badge-dot badge-success size-1.5">
                                                        </span>
                                                    In Office
                                                </div>
                                                <button class="btn btn-icon btn-light btn-clear btn-sm">
                                                    <i class="ki-filled ki-dots-vertical">
                                                    </i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-link flex justify-between gap-2">
                                            <div class="flex items-center gap-2.5">
                                                <img alt="" class="rounded-full size-9 shrink-0"
                                                     src="assets/media/avatars/300-1.png" />
                                                <div class="flex flex-col">
                                                    <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px"
                                                       href="#">
                                                        Esther Howard
                                                    </a>
                                                    <span class="text-2sm font-normal text-gray-500">
                                                            esther.howard@gmail.com connections
                                                        </span>
                                                </div>
                                            </div>
                                            <div class="flex items-center gap-2.5">
                                                <div class="badge badge-pill badge-outline badge-danger gap-1.5">
                                                        <span class="badge badge-dot badge-danger size-1.5">
                                                        </span>
                                                    On Leave
                                                </div>
                                                <button class="btn btn-icon btn-light btn-clear btn-sm">
                                                    <i class="ki-filled ki-dots-vertical">
                                                    </i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden" id="search_modal_settings">
                    <div class="menu menu-default p-0 flex-col">
                        <div class="text-xs text-gray-600 font-medium pt-2.5 pl-5 pb-1.5">
                            Shortcuts
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="#">
                                    <span class="menu-icon">
                                        <i class="ki-filled ki-home-2">
                                        </i>
                                    </span>
                                <span class="menu-title">
                                        Go to Dashboard
                                    </span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="#">
                                    <span class="menu-icon">
                                        <i class="ki-filled ki-badge">
                                        </i>
                                    </span>
                                <span class="menu-title">
                                        Public Profile
                                    </span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="#">
                                    <span class="menu-icon">
                                        <i class="ki-filled ki-profile-circle">
                                        </i>
                                    </span>
                                <span class="menu-title">
                                        My Profile
                                    </span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="#">
                                    <span class="menu-icon">
                                        <i class="ki-filled ki-setting-2">
                                        </i>
                                    </span>
                                <span class="menu-title">
                                        My Account
                                    </span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="#">
                                    <span class="menu-icon">
                                        <i class="ki-filled ki-message-programming">
                                        </i>
                                    </span>
                                <span class="menu-title">
                                        Devs Forum
                                    </span>
                            </a>
                        </div>
                        <div class="text-xs text-gray-600 font-medium pt-2.5 pl-5 pt-2.5 pb-1.5">
                            Actions
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="#">
                                    <span class="menu-icon">
                                        <i class="ki-filled ki-user">
                                        </i>
                                    </span>
                                <span class="menu-title">
                                        Create User
                                    </span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="#">
                                    <span class="menu-icon">
                                        <i class="ki-filled ki-user-edit">
                                        </i>
                                    </span>
                                <span class="menu-title">
                                        Create Team
                                    </span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="#">
                                    <span class="menu-icon">
                                        <i class="ki-filled ki-subtitle">
                                        </i>
                                    </span>
                                <span class="menu-title">
                                        Change Plan
                                    </span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="#">
                                    <span class="menu-icon">
                                        <i class="ki-filled ki-setting">
                                        </i>
                                    </span>
                                <span class="menu-title">
                                        Setup Branding
                                    </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="hidden" id="search_modal_integrations">
                    <div class="menu menu-default p-0 flex-col">
                        <div class="menu-item">
                            <div class="menu-link flex items-center jistify-between gap-2">
                                <div class="flex items-center grow gap-2">
                                    <div
                                        class="flex items-center justify-center size-10 shrink-0 rounded-full border border-gray-200 bg-gray-100">
                                        <img alt="" class="size-6 shrink-0"
                                             src="assets/media/brand-logos/jira.svg" />
                                    </div>
                                    <div class="flex flex-col gap-0.5">
                                        <a class="text-2sm font-semibold text-gray-900 hover:text-primary-active"
                                           href="#">
                                            Jira
                                        </a>
                                        <span class="text-2xs font-medium text-gray-600">
                                                Project management
                                            </span>
                                    </div>
                                </div>
                                <div class="flex justify-end shrink-0">
                                    <div class="flex -space-x-2">
                                        <div class="flex">
                                            <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                 src="assets/media/avatars/300-4.png" />
                                        </div>
                                        <div class="flex">
                                            <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                 src="assets/media/avatars/300-1.png" />
                                        </div>
                                        <div class="flex">
                                            <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                 src="assets/media/avatars/300-2.png" />
                                        </div>
                                        <div class="flex">
                                                <span
                                                    class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-6 text-success-inverse size-6 ring-success-light bg-success">
                                                    +3
                                                </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-link flex items-center jistify-between gap-2">
                                <div class="flex items-center grow gap-2">
                                    <div
                                        class="flex items-center justify-center size-10 shrink-0 rounded-full border border-gray-200 bg-gray-100">
                                        <img alt="" class="size-6 shrink-0"
                                             src="assets/media/brand-logos/inferno.svg" />
                                    </div>
                                    <div class="flex flex-col gap-0.5">
                                        <a class="text-2sm font-semibold text-gray-900 hover:text-primary-active"
                                           href="#">
                                            Inferno
                                        </a>
                                        <span class="text-2xs font-medium text-gray-600">
                                                Real-time photo sharing app
                                            </span>
                                    </div>
                                </div>
                                <div class="flex justify-end shrink-0">
                                    <div class="flex -space-x-2">
                                        <div class="flex">
                                            <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                 src="assets/media/avatars/300-14.png" />
                                        </div>
                                        <div class="flex">
                                            <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                 src="assets/media/avatars/300-12.png" />
                                        </div>
                                        <div class="flex">
                                            <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                 src="assets/media/avatars/300-9.png" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-link flex items-center jistify-between gap-2">
                                <div class="flex items-center grow gap-2">
                                    <div
                                        class="flex items-center justify-center size-10 shrink-0 rounded-full border border-gray-200 bg-gray-100">
                                        <img alt="" class="size-6 shrink-0"
                                             src="assets/media/brand-logos/evernote.svg" />
                                    </div>
                                    <div class="flex flex-col gap-0.5">
                                        <a class="text-2sm font-semibold text-gray-900 hover:text-primary-active"
                                           href="#">
                                            Evernote
                                        </a>
                                        <span class="text-2xs font-medium text-gray-600">
                                                Notes management app
                                            </span>
                                    </div>
                                </div>
                                <div class="flex justify-end shrink-0">
                                    <div class="flex -space-x-2">
                                        <div class="flex">
                                            <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                 src="assets/media/avatars/300-6.png" />
                                        </div>
                                        <div class="flex">
                                            <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                 src="assets/media/avatars/300-3.png" />
                                        </div>
                                        <div class="flex">
                                            <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                 src="assets/media/avatars/300-1.png" />
                                        </div>
                                        <div class="flex">
                                            <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                 src="assets/media/avatars/300-8.png" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-link flex items-center jistify-between gap-2">
                                <div class="flex items-center grow gap-2">
                                    <div
                                        class="flex items-center justify-center size-10 shrink-0 rounded-full border border-gray-200 bg-gray-100">
                                        <img alt="" class="size-6 shrink-0"
                                             src="assets/media/brand-logos/gitlab.svg" />
                                    </div>
                                    <div class="flex flex-col gap-0.5">
                                        <a class="text-2sm font-semibold text-gray-900 hover:text-primary-active"
                                           href="#">
                                            Gitlab
                                        </a>
                                        <span class="text-2xs font-medium text-gray-600">
                                                Notes management app
                                            </span>
                                    </div>
                                </div>
                                <div class="flex justify-end shrink-0">
                                    <div class="flex -space-x-2">
                                        <div class="flex">
                                            <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                 src="assets/media/avatars/300-18.png" />
                                        </div>
                                        <div class="flex">
                                            <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                 src="assets/media/avatars/300-17.png" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-link flex items-center jistify-between gap-2">
                                <div class="flex items-center grow gap-2">
                                    <div
                                        class="flex items-center justify-center size-10 shrink-0 rounded-full border border-gray-200 bg-gray-100">
                                        <img alt="" class="size-6 shrink-0"
                                             src="assets/media/brand-logos/google-webdev.svg" />
                                    </div>
                                    <div class="flex flex-col gap-0.5">
                                        <a class="text-2sm font-semibold text-gray-900 hover:text-primary-active"
                                           href="#">
                                            Google webdev
                                        </a>
                                        <span class="text-2xs font-medium text-gray-600">
                                                Building web expierences
                                            </span>
                                    </div>
                                </div>
                                <div class="flex justify-end shrink-0">
                                    <div class="flex -space-x-2">
                                        <div class="flex">
                                            <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                 src="assets/media/avatars/300-14.png" />
                                        </div>
                                        <div class="flex">
                                            <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                 src="assets/media/avatars/300-20.png" />
                                        </div>
                                        <div class="flex">
                                            <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                 src="assets/media/avatars/300-21.png" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item px-4 pt-2">
                            <a class="btn btn-sm btn-light justify-center" href="#">
                                Go to Apps
                            </a>
                        </div>
                    </div>
                </div>
                <div class="hidden" id="search_modal_users">
                    <div class="menu menu-default p-0 flex-col">
                        <div class="grid gap-1">
                            <div class="menu-item">
                                <div class="menu-link flex justify-between gap-2">
                                    <div class="flex items-center gap-2.5">
                                        <img alt="" class="rounded-full size-9 shrink-0"
                                             src="assets/media/avatars/300-3.png" />
                                        <div class="flex flex-col">
                                            <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px"
                                               href="#">
                                                Tyler Hero
                                            </a>
                                            <span class="text-2sm font-normal text-gray-500">
                                                    tyler.hero@gmail.com connections
                                                </span>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2.5">
                                        <div class="badge badge-pill badge-outline badge-success gap-1.5">
                                                <span class="badge badge-dot badge-success size-1.5">
                                                </span>
                                            In Office
                                        </div>
                                        <button class="btn btn-icon btn-light btn-clear btn-sm">
                                            <i class="ki-filled ki-dots-vertical">
                                            </i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-item">
                                <div class="menu-link flex justify-between gap-2">
                                    <div class="flex items-center gap-2.5">
                                        <img alt="" class="rounded-full size-9 shrink-0"
                                             src="assets/media/avatars/300-1.png" />
                                        <div class="flex flex-col">
                                            <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px"
                                               href="#">
                                                Esther Howard
                                            </a>
                                            <span class="text-2sm font-normal text-gray-500">
                                                    esther.howard@gmail.com connections
                                                </span>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2.5">
                                        <div class="badge badge-pill badge-outline badge-danger gap-1.5">
                                                <span class="badge badge-dot badge-danger size-1.5">
                                                </span>
                                            On Leave
                                        </div>
                                        <button class="btn btn-icon btn-light btn-clear btn-sm">
                                            <i class="ki-filled ki-dots-vertical">
                                            </i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-item">
                                <div class="menu-link flex justify-between gap-2">
                                    <div class="flex items-center gap-2.5">
                                        <img alt="" class="rounded-full size-9 shrink-0"
                                             src="assets/media/avatars/300-11.png" />
                                        <div class="flex flex-col">
                                            <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px"
                                               href="#">
                                                Jacob Jones
                                            </a>
                                            <span class="text-2sm font-normal text-gray-500">
                                                    jacob.jones@gmail.com connections
                                                </span>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2.5">
                                        <div class="badge badge-pill badge-outline badge-primary gap-1.5">
                                                <span class="badge badge-dot badge-primary size-1.5">
                                                </span>
                                            Remote
                                        </div>
                                        <button class="btn btn-icon btn-light btn-clear btn-sm">
                                            <i class="ki-filled ki-dots-vertical">
                                            </i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-item">
                                <div class="menu-link flex justify-between gap-2">
                                    <div class="flex items-center gap-2.5">
                                        <img alt="" class="rounded-full size-9 shrink-0"
                                             src="assets/media/avatars/300-5.png" />
                                        <div class="flex flex-col">
                                            <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px"
                                               href="#">
                                                TLeslie Alexander
                                            </a>
                                            <span class="text-2sm font-normal text-gray-500">
                                                    leslie.alexander@gmail.com connections
                                                </span>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2.5">
                                        <div class="badge badge-pill badge-outline badge-success gap-1.5">
                                                <span class="badge badge-dot badge-success size-1.5">
                                                </span>
                                            In Office
                                        </div>
                                        <button class="btn btn-icon btn-light btn-clear btn-sm">
                                            <i class="ki-filled ki-dots-vertical">
                                            </i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-item">
                                <div class="menu-link flex justify-between gap-2">
                                    <div class="flex items-center gap-2.5">
                                        <img alt="" class="rounded-full size-9 shrink-0"
                                             src="assets/media/avatars/300-2.png" />
                                        <div class="flex flex-col">
                                            <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px"
                                               href="#">
                                                Cody Fisher
                                            </a>
                                            <span class="text-2sm font-normal text-gray-500">
                                                    cody.fisher@gmail.com connections
                                                </span>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2.5">
                                        <div class="badge badge-pill badge-outline badge-primary gap-1.5">
                                                <span class="badge badge-dot badge-primary size-1.5">
                                                </span>
                                            Remote
                                        </div>
                                        <button class="btn btn-icon btn-light btn-clear btn-sm">
                                            <i class="ki-filled ki-dots-vertical">
                                            </i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-item px-4 pt-2">
                                <a class="btn btn-sm btn-light justify-center" href="#">
                                    Go to Users
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden" id="search_modal_docs">
                    <div class="menu menu-default p-0 flex-col">
                        <div class="grid">
                            <div class="menu-item">
                                <div class="menu-link flex items-center">
                                    <div class="flex items-center grow gap-2.5">
                                        <img src="assets/media/file-types/pdf.svg" />
                                        <div class="flex flex-col">
                                                <span
                                                    class="text-sm font-semibold text-gray-900 cursor-pointer hover:text-primary mb-px">
                                                    Project-pitch.pdf
                                                </span>
                                            <span class="text-xs font-medium text-gray-500">
                                                    4.7 MB 26 Sep 2024 3:20 PM
                                                </span>
                                        </div>
                                    </div>
                                    <button class="btn btn-icon btn-light btn-clear btn-sm">
                                        <i class="ki-filled ki-dots-vertical">
                                        </i>
                                    </button>
                                </div>
                            </div>
                            <div class="menu-item">
                                <div class="menu-link flex items-center">
                                    <div class="flex items-center grow gap-2.5">
                                        <img src="assets/media/file-types/doc.svg" />
                                        <div class="flex flex-col">
                                                <span
                                                    class="text-sm font-semibold text-gray-900 cursor-pointer hover:text-primary mb-px">
                                                    Report-v1.docx
                                                </span>
                                            <span class="text-xs font-medium text-gray-500">
                                                    2.3 MB 1 Oct 2024 12:00 PM
                                                </span>
                                        </div>
                                    </div>
                                    <button class="btn btn-icon btn-light btn-clear btn-sm">
                                        <i class="ki-filled ki-dots-vertical">
                                        </i>
                                    </button>
                                </div>
                            </div>
                            <div class="menu-item">
                                <div class="menu-link flex items-center">
                                    <div class="flex items-center grow gap-2.5">
                                        <img src="assets/media/file-types/javascript.svg" />
                                        <div class="flex flex-col">
                                                <span
                                                    class="text-sm font-semibold text-gray-900 cursor-pointer hover:text-primary mb-px">
                                                    Framework-App.js
                                                </span>
                                            <span class="text-xs font-medium text-gray-500">
                                                    0.8 MB 17 Oct 2024 6:46 PM
                                                </span>
                                        </div>
                                    </div>
                                    <button class="btn btn-icon btn-light btn-clear btn-sm">
                                        <i class="ki-filled ki-dots-vertical">
                                        </i>
                                    </button>
                                </div>
                            </div>
                            <div class="menu-item">
                                <div class="menu-link flex items-center">
                                    <div class="flex items-center grow gap-2.5">
                                        <img src="assets/media/file-types/ai.svg" />
                                        <div class="flex flex-col">
                                                <span
                                                    class="text-sm font-semibold text-gray-900 cursor-pointer hover:text-primary mb-px">
                                                    Framework-App.js
                                                </span>
                                            <span class="text-xs font-medium text-gray-500">
                                                    0.8 MB 17 Oct 2024 6:46 PM
                                                </span>
                                        </div>
                                    </div>
                                    <button class="btn btn-icon btn-light btn-clear btn-sm">
                                        <i class="ki-filled ki-dots-vertical">
                                        </i>
                                    </button>
                                </div>
                            </div>
                            <div class="menu-item">
                                <div class="menu-link flex items-center">
                                    <div class="flex items-center grow gap-2.5">
                                        <img src="assets/media/file-types/php.svg" />
                                        <div class="flex flex-col">
                                                <span
                                                    class="text-sm font-semibold text-gray-900 cursor-pointer hover:text-primary mb-px">
                                                    appController.js
                                                </span>
                                            <span class="text-xs font-medium text-gray-500">
                                                    0.1 MB 21 Nov 2024 3:20 PM
                                                </span>
                                        </div>
                                    </div>
                                    <button class="btn btn-icon btn-light btn-clear btn-sm">
                                        <i class="ki-filled ki-dots-vertical">
                                        </i>
                                    </button>
                                </div>
                            </div>
                            <div class="menu-item px-4 pt-2.5">
                                <a class="btn btn-sm btn-light justify-center" href="#">
                                    Go to Users
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden" id="search_modal_empty">
                    <div class="flex flex-col text-center py-9 gap-5">
                        <div class="flex justify-center">
                            <img alt="image" class="dark:hidden max-h-[113px]"
                                 src="assets/media/illustrations/33.svg" />
                            <img alt="image" class="light:hidden max-h-[113px]"
                                 src="assets/media/illustrations/33-dark.svg" />
                        </div>
                        <div class="flex flex-col gap-1.5">
                            <h3 class="text-base font-semibold text-gray-900 text-center">
                                Looking for something..
                            </h3>
                            <span class="text-2sm font-medium text-center text-gray-600">
                                    Initiate your digital experience with
                                    <br />
                                    our intuitive dashboard
                                </span>
                        </div>
                        <div class="flex justify-center">
                            <a class="btn btn-sm btn-light flex justify-center" href="#">
                                View Projects
                            </a>
                        </div>
                    </div>
                </div>
                <div class="hidden" id="search_modal_no-results">
                    <div class="flex flex-col text-center py-9 gap-5">
                        <div class="flex justify-center">
                            <img alt="image" class="dark:hidden max-h-[113px]"
                                 src="assets/media/illustrations/33.svg" />
                            <img alt="image" class="light:hidden max-h-[113px]"
                                 src="assets/media/illustrations/33-dark.svg" />
                        </div>
                        <div class="flex flex-col gap-1.5">
                            <h3 class="text-base font-semibold text-gray-900 text-center">
                                No Results Found
                            </h3>
                            <span class="text-2sm font-medium text-center text-gray-600">
                                    Refine your query to discover relevant items
                                </span>
                        </div>
                        <div class="flex justify-center">
                            <a class="btn btn-sm btn-light flex justify-center" href="#">
                                View Projects
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal" data-modal="true" data-modal-disable-scroll="false" id="share_profile_modal">
    <div class="modal-content max-w-[500px] top-5 lg:top-[15%]">
        <div class="modal-header pr-2.5">
            <h3 class="modal-title">
                Share Profile
            </h3>
            <button class="btn btn-sm btn-icon btn-light btn-clear shrink-0" data-modal-dismiss="true">
                <i class="ki-filled ki-cross">
                </i>
            </button>
        </div>
        <div class="modal-body grid gap-5 px-0 py-5">
            <div class="flex flex-col px-5 gap-2.5">
                <div class="flex flex-center gap-1">
                    <label class="text-gray-900 font-semibold text-2sm">
                        Share read-only link
                    </label>
                    <i class="ki-filled ki-information-2 text-gray-500 text-2sm">
                    </i>
                </div>
                <label class="input">
                    <input type="text" value="https://metronic.com/profiles/x7g2vA3kZ5">
                    <button class="btn btn-icon">
                        <i class="ki-filled ki-copy">
                        </i>
                    </button>
                    </input>
                </label>
            </div>
            <div class="border-b border-b-gray-200">
            </div>
            <div class="flex flex-col px-5 gap-2.5">
                <div class="flex flex-center gap-1">
                    <label class="text-gray-900 font-semibold text-2sm">
                        Share via email
                    </label>
                    <i class="ki-filled ki-information-2 text-gray-500 text-2sm">
                    </i>
                </div>
                <div class="flex flex-center gap-2.5">
                    <label class="input">
                        <input type="text" value="miles.turner@gmail.com">
                        </input>
                    </label>
                    <button class="btn btn-primary">
                        Share
                    </button>
                </div>
            </div>
            <div class="scrollable-y-auto" data-scrollable="true" data-scrollable-max-height="auto"
                 data-scrollable-offset="1000px">
                <div class="flex flex-col px-5 gap-3">
                    <div class="flex items-center flex-wrap gap-2">
                        <div class="flex items-center grow gap-2.5">
                            <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-3.png" />
                            <div class="flex flex-col">
                                <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px"
                                   href="#">
                                    Tyler Hero
                                </a>
                                <a class="hover:text-primary-active text-2sm font-medium text-gray-600" href="#">
                                    tyler.hero@gmail.com
                                </a>
                            </div>
                        </div>
                        <select class="select select-sm max-w-24">
                            <option selected="">
                                Owner
                            </option>
                            <option>
                                Editor
                            </option>
                            <option>
                                Viewer
                            </option>
                        </select>
                    </div>
                    <div class="flex items-center flex-wrap gap-2">
                        <div class="flex items-center grow gap-2.5">
                            <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-1.png" />
                            <div class="flex flex-col">
                                <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px"
                                   href="#">
                                    Esther Howard
                                </a>
                                <a class="hover:text-primary-active text-2sm font-medium text-gray-600" href="#">
                                    esther.howard@gmail.com
                                </a>
                            </div>
                        </div>
                        <select class="select select-sm max-w-24">
                            <option>
                                Owner
                            </option>
                            <option selected="">
                                Editor
                            </option>
                            <option>
                                Viewer
                            </option>
                        </select>
                    </div>
                    <div class="flex items-center flex-wrap gap-2">
                        <div class="flex items-center grow gap-2.5">
                            <img alt="" class="rounded-full size-9 shrink-0"
                                 src="assets/media/avatars/300-11.png" />
                            <div class="flex flex-col">
                                <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px"
                                   href="#">
                                    Jacob Jones
                                </a>
                                <a class="hover:text-primary-active text-2sm font-medium text-gray-600" href="#">
                                    jacob.jones@gmail.com
                                </a>
                            </div>
                        </div>
                        <select class="select select-sm max-w-24">
                            <option>
                                Owner
                            </option>
                            <option>
                                Editor
                            </option>
                            <option selected="">
                                Viewer
                            </option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="border-b border-b-gray-200">
            </div>
            <div class="flex flex-col px-5 gap-4">
                <label class="text-gray-900 font-semibold text-2sm">
                    Settings
                </label>
                <div class="flex flex-center justify-between flex-wrap gap-2">
                    <div class="flex flex-center gap-1.5">
                        <i class="ki-filled ki-user text-gray-500">
                        </i>
                        <div class="flex flex-center text-gray-700 font-medium text-xs">
                            Anyone at
                            <a class="text-xs font-medium link mx-1" href="#">
                                KeenThemes
                            </a>
                            can view
                        </div>
                    </div>
                    <button class="btn btn-sm btn-link">
                        Change Access
                    </button>
                </div>
                <div class="flex flex-center justify-between flex-wrap gap-2 mb-1">
                    <div class="flex flex-center gap-1.5">
                        <i class="ki-filled ki-icon text-gray-500">
                        </i>
                        <div class="flex flex-center text-gray-700 font-medium text-xs">
                            Anyone with link can edit
                        </div>
                    </div>
                    <button class="btn btn-sm btn-link">
                        Set Password
                    </button>
                </div>
                <button class="btn btn-primary justify-center">
                    Done
                </button>
            </div>
        </div>
    </div>
</div>
<div class="modal" data-modal="true" id="give_award_modal">
    <div class="modal-content max-w-[500px] top-[15%]">
        <div class="modal-header pr-2.5">
            <h3 class="modal-title">
                Give Award
            </h3>
            <button class="btn btn-sm btn-icon btn-light btn-clear shrink-0" data-modal-dismiss="true">
                <i class="ki-filled ki-black-left">
                </i>
            </button>
        </div>
        <div class="modal-body grid gap-5 px-0 py-5">
            <div class="flex flex-col px-5 gap-2.5">
                <div class="flex flex-center gap-1">
                    <label class="text-gray-900 font-semibold text-2sm">
                        Share read-only link
                    </label>
                    <i class="ki-filled ki-information-2 text-gray-500 text-2sm">
                    </i>
                </div>
                <label class="input">
                    <input type="text" value="https://metronic.com/profiles/x7g2vA3kZ5">
                    <button class="btn btn-icon">
                        <i class="ki-filled ki-copy">
                        </i>
                    </button>
                    </input>
                </label>
            </div>
            <div class="border-b border-b-gray-200">
            </div>
            <div class="flex flex-col px-5 gap-2.5">
                <div class="flex flex-center gap-1">
                    <label class="text-gray-900 font-semibold text-2sm">
                        Share via email
                    </label>
                    <i class="ki-filled ki-information-2 text-gray-500 text-2sm">
                    </i>
                </div>
                <div class="flex flex-center gap-2.5">
                    <label class="input">
                        <input type="text" value="miles.turner@gmail.com">
                        </input>
                    </label>
                    <button class="btn btn-primary">
                        Share
                    </button>
                </div>
            </div>
            <div class="scrollable-y-auto" data-scrollable="true" data-scrollable-max-height="auto"
                 data-scrollable-offset="1000px">
                <div class="flex flex-col px-5 gap-3">
                    <div class="flex items-center flex-wrap gap-2">
                        <div class="flex items-center grow gap-2.5">
                            <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-3.png" />
                            <div class="flex flex-col">
                                <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px"
                                   href="#">
                                    Tyler Hero
                                </a>
                                <a class="hover:text-primary-active text-2sm font-medium text-gray-600" href="#">
                                    tyler.hero@gmail.com
                                </a>
                            </div>
                        </div>
                        <select class="select select-sm max-w-24">
                            <option selected="">
                                Owner
                            </option>
                            <option>
                                Editor
                            </option>
                            <option>
                                Viewer
                            </option>
                        </select>
                    </div>
                    <div class="flex items-center flex-wrap gap-2">
                        <div class="flex items-center grow gap-2.5">
                            <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-1.png" />
                            <div class="flex flex-col">
                                <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px"
                                   href="#">
                                    Esther Howard
                                </a>
                                <a class="hover:text-primary-active text-2sm font-medium text-gray-600" href="#">
                                    esther.howard@gmail.com
                                </a>
                            </div>
                        </div>
                        <select class="select select-sm max-w-24">
                            <option>
                                Owner
                            </option>
                            <option selected="">
                                Editor
                            </option>
                            <option>
                                Viewer
                            </option>
                        </select>
                    </div>
                    <div class="flex items-center flex-wrap gap-2">
                        <div class="flex items-center grow gap-2.5">
                            <img alt="" class="rounded-full size-9 shrink-0"
                                 src="assets/media/avatars/300-11.png" />
                            <div class="flex flex-col">
                                <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px"
                                   href="#">
                                    Jacob Jones
                                </a>
                                <a class="hover:text-primary-active text-2sm font-medium text-gray-600" href="#">
                                    jacob.jones@gmail.com
                                </a>
                            </div>
                        </div>
                        <select class="select select-sm max-w-24">
                            <option>
                                Owner
                            </option>
                            <option>
                                Editor
                            </option>
                            <option selected="">
                                Viewer
                            </option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="border-b border-b-gray-200">
            </div>
            <div class="flex flex-col px-5 gap-4">
                <label class="text-gray-900 font-semibold text-2sm">
                    Settings
                </label>
                <div class="flex flex-center justify-between flex-wrap gap-2">
                    <div class="flex flex-center gap-1.5">
                        <i class="ki-filled ki-user text-gray-500">
                        </i>
                        <div class="flex flex-center text-gray-700 font-medium text-xs">
                            Anyone at
                            <a class="text-xs font-medium link mx-1" href="#">
                                KeenThemes
                            </a>
                            can view
                        </div>
                    </div>
                    <button class="btn btn-sm btn-link">
                        Change Access
                    </button>
                </div>
                <div class="flex flex-center justify-between flex-wrap gap-2 mb-1">
                    <div class="flex flex-center gap-1.5">
                        <i class="ki-filled ki-icon text-gray-500">
                        </i>
                        <div class="flex flex-center text-gray-700 font-medium text-xs">
                            Anyone with link can edit
                        </div>
                    </div>
                    <button class="btn btn-sm btn-link">
                        Set Password
                    </button>
                </div>
                <button class="btn btn-primary justify-center">
                    Done
                </button>
            </div>
        </div>
    </div>
</div>
<div class="modal" data-modal="true" id="report_user_modal">
    <div class="modal-content max-w-[500px] top-[15%]">
        <div class="modal-header pr-2.5">
            <h3 class="modal-title">
                Report User
            </h3>
            <button class="btn btn-sm btn-icon btn-light btn-clear shrink-0" data-modal-dismiss="true">
                <i class="ki-filled ki-cross">
                </i>
            </button>
        </div>
        <div class="modal-body p-0">
            <div class="p-5">
                <div class="grid place-items-center gap-1">
                    <div class="flex justify-center items-center rounded-full">
                        <img class="rounded-full max-h-[55px] max-w-full" src="assets/media/avatars/300-1.png" />
                    </div>
                    <div class="flex items-center justify-center gap-1">
                        <a class="hover:text-primary-active text-2sm leading-5 font-semibold text-gray-900"
                           href="#">
                            Jenny Klabber
                        </a>
                        <svg class="text-primary" fill="none" height="13" viewbox="0 0 15 16" width="13"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14.5425 6.89749L13.5 5.83999C13.4273 5.76877 13.3699 5.6835 13.3312 5.58937C13.2925 5.49525 13.2734 5.39424 13.275 5.29249V3.79249C13.274 3.58699 13.2324 3.38371 13.1527 3.19432C13.0729 3.00494 12.9565 2.83318 12.8101 2.68892C12.6638 2.54466 12.4904 2.43073 12.2998 2.35369C12.1093 2.27665 11.9055 2.23801 11.7 2.23999H10.2C10.0982 2.24159 9.99722 2.22247 9.9031 2.18378C9.80898 2.1451 9.72371 2.08767 9.65249 2.01499L8.60249 0.957487C8.30998 0.665289 7.91344 0.50116 7.49999 0.50116C7.08654 0.50116 6.68999 0.665289 6.39749 0.957487L5.33999 1.99999C5.26876 2.07267 5.1835 2.1301 5.08937 2.16879C4.99525 2.20747 4.89424 2.22659 4.79249 2.22499H3.29249C3.08699 2.22597 2.88371 2.26754 2.69432 2.34731C2.50494 2.42709 2.33318 2.54349 2.18892 2.68985C2.04466 2.8362 1.93073 3.00961 1.85369 3.20013C1.77665 3.39064 1.73801 3.5945 1.73999 3.79999V5.29999C1.74159 5.40174 1.72247 5.50275 1.68378 5.59687C1.6451 5.691 1.58767 5.77627 1.51499 5.84749L0.457487 6.89749C0.165289 7.19 0.00115967 7.58654 0.00115967 7.99999C0.00115967 8.41344 0.165289 8.80998 0.457487 9.10249L1.49999 10.16C1.57267 10.2312 1.6301 10.3165 1.66878 10.4106C1.70747 10.5047 1.72659 10.6057 1.72499 10.7075V12.2075C1.72597 12.413 1.76754 12.6163 1.84731 12.8056C1.92709 12.995 2.04349 13.1668 2.18985 13.3111C2.3362 13.4553 2.50961 13.5692 2.70013 13.6463C2.89064 13.7233 3.0945 13.762 3.29999 13.76H4.79999C4.90174 13.7584 5.00275 13.7775 5.09687 13.8162C5.191 13.8549 5.27627 13.9123 5.34749 13.985L6.40499 15.0425C6.69749 15.3347 7.09404 15.4988 7.50749 15.4988C7.92094 15.4988 8.31748 15.3347 8.60999 15.0425L9.65999 14C9.73121 13.9273 9.81647 13.8699 9.9106 13.8312C10.0047 13.7925 10.1057 13.7734 10.2075 13.775H11.7075C12.1212 13.775 12.518 13.6106 12.8106 13.3181C13.1031 13.0255 13.2675 12.6287 13.2675 12.215V10.715C13.2659 10.6132 13.285 10.5122 13.3237 10.4181C13.3624 10.324 13.4198 10.2387 13.4925 10.1675L14.55 9.10999C14.6953 8.96452 14.8104 8.79176 14.8887 8.60164C14.9671 8.41152 15.007 8.20779 15.0063 8.00218C15.0056 7.79656 14.9643 7.59311 14.8847 7.40353C14.8051 7.21394 14.6888 7.04197 14.5425 6.89749ZM10.635 6.64999L6.95249 10.25C6.90055 10.3026 6.83864 10.3443 6.77038 10.3726C6.70212 10.4009 6.62889 10.4153 6.55499 10.415C6.48062 10.4139 6.40719 10.3982 6.33896 10.3685C6.27073 10.3389 6.20905 10.2961 6.15749 10.2425L4.37999 8.44249C4.32532 8.39044 4.28169 8.32793 4.25169 8.25867C4.22169 8.18941 4.20593 8.11482 4.20536 8.03934C4.20479 7.96387 4.21941 7.88905 4.24836 7.81934C4.27731 7.74964 4.31999 7.68647 4.37387 7.63361C4.42774 7.58074 4.4917 7.53926 4.56194 7.51163C4.63218 7.484 4.70726 7.47079 4.78271 7.47278C4.85816 7.47478 4.93244 7.49194 5.00112 7.52324C5.0698 7.55454 5.13148 7.59935 5.18249 7.65499L6.56249 9.05749L9.84749 5.84749C9.95296 5.74215 10.0959 5.68298 10.245 5.68298C10.394 5.68298 10.537 5.74215 10.6425 5.84749C10.6953 5.90034 10.737 5.96318 10.7653 6.03234C10.7935 6.1015 10.8077 6.1756 10.807 6.25031C10.8063 6.32502 10.7908 6.39884 10.7612 6.46746C10.7317 6.53608 10.6888 6.59813 10.635 6.64999Z"
                                fill="currentColor">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="border-b border-b-gray-200">
            </div>
            <div class="flex flex-col gap-5 p-5">
                <div class="text-2sm text-gray-900 font-semibold">
                    Let us know why you’re reporing this person
                </div>
                <div class="flex flex-col gap-3.5">
                    <label class="form-label flex items-center gap-2.5">
                        <input checked="" class="radio radio-sm" name="report-option" type="radio" value="1">
                        <div class="flex flex-col gap-0.5">
                            <div class="text-sm font-semibold text-gray-900">
                                Impersonation
                            </div>
                            <div class="text-2sm font-medium text-gray-600">
                                It looks like this profile might be impersonating someone else
                            </div>
                        </div>
                        </input>
                    </label>
                    <label class="form-label flex items-center gap-2.5">
                        <input checked="" class="radio radio-sm" name="report-option" type="radio" value="2">
                        <div class="flex flex-col gap-0.5">
                            <div class="text-sm font-semibold text-gray-900">
                                Spammy
                            </div>
                            <div class="text-2sm font-medium text-gray-600">
                                This person profile, comments or posts contain misleading text
                            </div>
                        </div>
                        </input>
                    </label>
                    <label class="form-label flex items-center gap-2.5">
                        <input checked="" class="radio radio-sm" name="report-option" type="radio" value="3">
                        <div class="flex flex-col gap-0.5">
                            <div class="text-sm font-semibold text-gray-900">
                                Off bumble behavior
                            </div>
                            <div class="text-2sm font-medium text-gray-600">
                                This person has engaged in behavior that is abusive, bullying
                            </div>
                        </div>
                        </input>
                    </label>
                    <label class="form-label flex items-center gap-2.5">
                        <input checked="" class="radio radio-sm" name="report-option" type="radio" value="4">
                        <div class="flex flex-col gap-0.5">
                            <div class="text-sm font-semibold text-gray-900">
                                Something else
                            </div>
                            <div class="text-2sm font-medium text-gray-600">
                                None of the reasons listed above are JULIO
                            </div>
                        </div>
                        </input>
                    </label>
                </div>
            </div>
            <div class="border-b border-b-gray-200">
            </div>
            <div class="text-2sm font-medium text-center text-gray-800 p-5">
                Don't worry, your report is completely anonymous; the person you're
                <br />
                reporting will not be informed that you've submitted it
            </div>
            <div class="border-b border-b-gray-200">
            </div>
            <div class="flex items-center gap-2.5 justify-end p-5" id="report_user_modal">
                <button class="btn btn-sm btn-primary">
                    Report this person
                </button>
                <button class="btn btn-sm btn-light" data-modal-dismiss="true">
                    Cancel
                </button>
            </div>
        </div>
    </div>
</div>
<!-- End of Page -->
<!-- Scripts -->
<script src="assets/js/core.bundle.js">
</script>
<script src="assets/vendors/apexcharts/apexcharts.min.js">
</script>
<!-- End of Scripts -->
</body>

</html>
