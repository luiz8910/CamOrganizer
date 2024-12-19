<main
    class="flex flex-col grow rounded-xl bg-[--tw-content-bg] dark:bg-[--tw-content-bg-dark] border border-gray-300 dark:border-gray-200 lg:ms-[--tw-sidebar-width] pt-5 mt-0 lg:mt-5 m-5"
    role="content">
    <!-- Toolbar -->
    <div class="pb-5">
        <!-- Container -->
        <div class="container-fixed flex items-center justify-between flex-wrap gap-3">
            <div class="flex items-center flex-wrap gap-1 lg:gap-5">
                <h1 class="font-medium text-base text-gray-900">
                    3 Columns
                </h1>
                <div class="flex items-center flex-wrap gap-1 text-sm">
                    <a class="text-gray-700 hover:text-primary" href="html/demo8.html">
                        Home
                    </a>
                    <span class="text-gray-400 text-sm">
          /
         </span>
                    <span class="text-gray-700">
          Public Profile
         </span>
                    <span class="text-gray-400 text-sm">
          /
         </span>
                    <span class="text-gray-900">
          Projects
         </span>
                </div>
            </div>
            <div class="flex items-center flex-wrap gap-1.5 lg:gap-2.5">
                <button
                    class="btn btn-icon btn-icon-lg size-8 rounded-md hover:bg-gray-200 dropdown-open:bg-gray-200 hover:text-primary text-gray-600"
                    data-modal-toggle="#search_modal">
                    <i class="ki-filled ki-magnifier !text-base">
                    </i>
                </button>
                <div class="dropdown me-1.5" data-dropdown="true" data-dropdown-offset="10px, 10px"
                     data-dropdown-placement="bottom-end" data-dropdown-trigger="click|lg:click">
                    <button
                        class="dropdown-toggle btn btn-icon btn-icon-lg size-8 rounded-md hover:bg-gray-200 dropdown-open:bg-gray-200 hover:text-primary text-gray-600">
                        <i class="ki-filled ki-notification-status !text-base">
                        </i>
                    </button>
                    <div class="dropdown-content light:border-gray-300 w-full max-w-[460px]">
                        <div
                            class="flex items-center justify-between gap-2.5 text-sm text-gray-900 font-semibold px-5 py-2.5 border-b border-b-gray-200"
                            id="notifications_header">
                            Notifications
                            <button class="btn btn-sm btn-icon btn-light btn-clear shrink-0"
                                    data-dropdown-dismiss="true">
                                <i class="ki-filled ki-cross">
                                </i>
                            </button>
                        </div>
                        <div class="tabs justify-between px-5 mb-2" data-tabs="true" id="notifications_tabs">
                            <div class="flex items-center gap-5">
                                <button class="tab active" data-tab-toggle="#notifications_tab_all">
                                    All
                                </button>
                                <button class="tab relative" data-tab-toggle="#notifications_tab_inbox">
                                    Inbox
                                    <span
                                        class="badge badge-dot badge-success size-[5px] absolute top-2 right-0 transform translate-y-1/2 translate-x-full">
             </span>
                                </button>
                                <button class="tab" data-tab-toggle="#notifications_tab_team">
                                    Team
                                </button>
                                <button class="tab" data-tab-toggle="#notifications_tab_following">
                                    Following
                                </button>
                            </div>
                            <div class="menu" data-menu="true">
                                <div class="menu-item" data-menu-item-offset="0, 10px"
                                     data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown"
                                     data-menu-item-trigger="click|lg:hover">
                                    <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                                        <i class="ki-filled ki-setting-2">
                                        </i>
                                    </button>
                                    <div class="menu-dropdown menu-default w-full max-w-[175px]"
                                         data-menu-dismiss="true">
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
                                                    <a class="menu-link"
                                                       href="html/demo8/account/home/settings-sidebar.html">
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
                                                    <a class="menu-link"
                                                       href="html/demo8/account/home/settings-sidebar.html">
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
                                                    <a class="menu-link"
                                                       href="html/demo8/account/home/settings-sidebar.html">
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
                        <div class="grow" id="notifications_tab_all">
                            <div class="flex flex-col">
                                <div class="scrollable-y-auto" data-scrollable="true"
                                     data-scrollable-dependencies="#header" data-scrollable-max-height="auto"
                                     data-scrollable-offset="200px">
                                    <div class="flex flex-col gap-5 pt-3 pb-4 divider-y divider-gray-200">
                                        <div class="flex grow gap-2.5 px-5">
                                            <div class="relative shrink-0 mt-0.5">
                                                <img alt="" class="rounded-full size-8"
                                                     src="assets/media/avatars/300-4.png"/>
                                                <span
                                                    class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
                </span>
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="flex flex-col gap-1">
                                                    <div class="text-2sm font-medium">
                                                        <a class="hover:text-primary-active text-gray-900 font-semibold"
                                                           href="#">
                                                            Joe Lincoln
                                                        </a>
                                                        <span class="text-gray-700">
                   mentioned you in
                  </span>
                                                        <a class="hover:text-primary-active text-primary" href="#">
                                                            Latest Trends
                                                        </a>
                                                        <span class="text-gray-700">
                   topic
                  </span>
                                                    </div>
                                                    <span class="flex items-center text-2xs font-medium text-gray-500">
                  18 mins ago
                  <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                  </span>
                  Web Design 2024
                 </span>
                                                </div>
                                                <div
                                                    class="card shadow-none flex flex-col gap-2.5 p-3.5 rounded-lg bg-light-active">
                                                    <div class="text-2sm font-semibold text-gray-600 mb-px">
                                                        <a class="hover:text-primary-active text-gray-900 font-semibold"
                                                           href="#">
                                                            @Cody
                                                        </a>
                                                        <span class="text-gray-700 font-medium">
                   For an expert opinion, check out what Mike has to say on this topic!
                  </span>
                                                    </div>
                                                    <label class="input input-sm">
                                                        <input placeholder="Reply" type="text" value="">
                                                        <button class="btn btn-icon">
                                                            <i class="ki-filled ki-picture">
                                                            </i>
                                                        </button>
                                                        </input>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-b border-b-gray-200">
                                        </div>
                                        <div class="flex grow gap-2.5 px-5">
                                            <div class="relative shrink-0 mt-0.5">
                                                <img alt="" class="rounded-full size-8"
                                                     src="assets/media/avatars/300-5.png"/>
                                                <span
                                                    class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
                </span>
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="flex flex-col gap-1">
                                                    <div class="text-2sm font-medium mb-px">
                                                        <a class="hover:text-primary-active text-gray-900 font-semibold"
                                                           href="#">
                                                            Leslie Alexander
                                                        </a>
                                                        <span class="text-gray-700">
                   added new tags to
                  </span>
                                                        <a class="hover:text-primary-active text-primary" href="#">
                                                            Web Redesign 2024
                                                        </a>
                                                    </div>
                                                    <span class="flex items-center text-2xs font-medium text-gray-500">
                  53 mins ago
                  <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                  </span>
                  ACME
                 </span>
                                                </div>
                                                <div class="flex flex-wrap gap-2.5">
                 <span class="badge badge-sm badge-info badge-outline">
                  Client-Request
                 </span>
                                                    <span class="badge badge-sm badge-warning badge-outline">
                  Figma
                 </span>
                                                    <span class="badge badge-sm badge-light badge-outline">
                  Redesign
                 </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-b border-b-gray-200">
                                        </div>
                                        <div class="flex grow gap-2.5 px-5" id="notification_request_3">
                                            <div class="relative shrink-0 mt-0.5">
                                                <img alt="" class="rounded-full size-8"
                                                     src="assets/media/avatars/300-27.png"/>
                                                <span
                                                    class="size-1.5 badge badge-circle bg-gray-400 absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
                </span>
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="flex flex-col gap-1">
                                                    <div class="text-2sm font-medium mb-px">
                                                        <a class="hover:text-primary-active text-gray-900 font-semibold"
                                                           href="#">
                                                            Guy Hawkins
                                                        </a>
                                                        <span class="text-gray-700">
                   requested access to
                  </span>
                                                        <a class="hover:text-primary-active text-primary" href="#">
                                                            AirSpace
                                                        </a>
                                                        <span class="text-gray-700">
                   project
                  </span>
                                                    </div>
                                                    <span class="flex items-center text-2xs font-medium text-gray-500">
                  14 hours ago
                  <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                  </span>
                  Dev Team
                 </span>
                                                </div>
                                                <div class="flex flex-wrap gap-2.5">
                                                    <button class="btn btn-light btn-sm"
                                                            data-dismiss="#notification_request_3">
                                                        Decline
                                                    </button>
                                                    <button class="btn btn-dark btn-sm"
                                                            data-dismiss="#notification_request_3">
                                                        Accept
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-b border-b-gray-200">
                                        </div>
                                        <div class="flex grow gap-2.5 px-5">
                                            <div class="relative shrink-0 mt-0.5">
                                                <img alt="" class="rounded-full size-8"
                                                     src="assets/media/avatars/300-1.png"/>
                                                <span
                                                    class="size-1.5 badge badge-circle bg-gray-400 absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
                </span>
                                            </div>
                                            <div class="flex flex-col gap-3.5 grow">
                                                <div class="flex flex-col gap-1">
                                                    <div class="text-2sm font-medium mb-px">
                                                        <a class="hover:text-primary-active text-gray-900 font-semibold"
                                                           href="#">
                                                            Jane Perez
                                                        </a>
                                                        <span class="text-gray-700">
                   invites you to review a file.
                  </span>
                                                    </div>
                                                    <span class="flex items-center text-2xs font-medium text-gray-500">
                  3 hours ago
                  <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                  </span>
                  742kb
                 </span>
                                                </div>
                                                <div
                                                    class="card shadow-none flex items-center flex-row gap-1.5 p-2.5 rounded-lg bg-light-active">
                                                    <img class="h-5" src="assets/media/file-types/pdf.svg"/>
                                                    <a class="hover:text-primary-active font-medium text-gray-700 text-xs me-1"
                                                       href="#">
                                                        Launch_nov24.pptx
                                                    </a>
                                                    <span class="font-medium text-gray-500 text-2xs">
                  Edited 39 mins ago
                 </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-b border-b-gray-200">
                                        </div>
                                        <div class="flex grow gap-2.5 px-5">
                                            <div class="relative shrink-0 mt-0.5">
                                                <img alt="" class="rounded-full size-8"
                                                     src="assets/media/avatars/300-11.png"/>
                                                <span
                                                    class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
                </span>
                                            </div>
                                            <div class="flex flex-col gap-1">
                                                <div class="text-2sm font-medium mb-px">
                                                    <a class="hover:text-primary-active text-gray-900 font-semibold"
                                                       href="#">
                                                        Raymond Pawell
                                                    </a>
                                                    <span class="text-gray-700">
                  posted a new article
                 </span>
                                                    <a class="hover:text-primary-active text-primary" href="#">
                                                        2024 Roadmap
                                                    </a>
                                                </div>
                                                <span class="flex items-center text-2xs font-medium text-gray-500">
                 1 hour ago
                 <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                 </span>
                 Roadmap
                </span>
                                            </div>
                                        </div>
                                        <div class="border-b border-b-gray-200">
                                        </div>
                                        <div class="flex grow gap-2.5 px-5">
                                            <div class="relative shrink-0 mt-0.5">
                                                <img alt="" class="rounded-full size-8"
                                                     src="assets/media/avatars/300-14.png"/>
                                                <span
                                                    class="size-1.5 badge badge-circle bg-gray-400 absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
                </span>
                                            </div>
                                            <div class="flex flex-col gap-3.5 grow">
                                                <div class="flex flex-col gap-1">
                                                    <div class="text-2sm font-medium mb-px">
                                                        <a class="hover:text-primary-active text-gray-900 font-semibold"
                                                           href="#">
                                                            Jane Perez
                                                        </a>
                                                        <span class="text-gray-700">
                   wants to view your design project
                  </span>
                                                    </div>
                                                    <span class="flex items-center text-2xs font-medium text-gray-500">
                  3 day ago
                  <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                  </span>
                  Metronic Launcher mockups
                 </span>
                                                </div>
                                                <div
                                                    class="card shadow-none flex items-center flex-row gap-1.5 p-2.5 rounded-lg bg-light-active">
                                                    <div
                                                        class="flex items-center justify-center w-[26px] h-[30px] shrink-0 bg-light rounded border border-gray-200">
                                                        <img class="h-5" src="assets/media/file-types/figma.svg"/>
                                                    </div>
                                                    <a class="hover:text-primary-active font-medium text-gray-700 text-xs me-1"
                                                       href="#">
                                                        Launcher-UIkit.fig
                                                    </a>
                                                    <span class="font-medium text-gray-500 text-2xs">
                  Edited 2 mins ago
                 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-b border-b-gray-200">
                                </div>
                                <div class="grid grid-cols-2 p-5 gap-2.5" id="notifications_all_footer">
                                    <button class="btn btn-sm btn-light justify-center">
                                        Archive all
                                    </button>
                                    <button class="btn btn-sm btn-light justify-center">
                                        Mark all as read
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="grow hidden" id="notifications_tab_inbox">
                            <div class="flex flex-col">
                                <div class="scrollable-y-auto" data-scrollable="true"
                                     data-scrollable-dependencies="#header" data-scrollable-max-height="auto"
                                     data-scrollable-offset="200px">
                                    <div class="flex flex-col gap-5 pt-3 pb-4">
                                        <div class="flex grow gap-2.5 px-5" id="notification_request_13">
                                            <div class="relative shrink-0 mt-0.5">
                                                <img alt="" class="rounded-full size-8"
                                                     src="assets/media/avatars/300-25.png"/>
                                                <span
                                                    class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
                </span>
                                            </div>
                                            <div class="flex flex-col gap-3.5 grow">
                                                <div class="flex flex-col gap-1">
                                                    <div class="text-2sm font-medium mb-px">
                                                        <a class="hover:text-primary-active text-gray-900 font-semibold"
                                                           href="#">
                                                            Samuel Lee
                                                        </a>
                                                        <span class="text-gray-700">
                   requested to add user to
                  </span>
                                                        <a class="hover:text-primary-active text-primary font-semibold"
                                                           href="#">
                                                            TechSynergy
                                                        </a>
                                                    </div>
                                                    <span class="flex items-center text-2xs font-medium text-gray-500">
                  22 hours ago
                  <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                  </span>
                  Dev Team
                 </span>
                                                </div>
                                                <div
                                                    class="card shadow-none flex items-center flex-row justify-between gap-1.5 px-2.5 py-2 rounded-lg bg-light-active">
                                                    <div class="flex flex-col">
                                                        <a class="hover:text-primary-active font-medium text-gray-900 text-xs"
                                                           href="#">
                                                            Ronald Richards
                                                        </a>
                                                        <a class="hover:text-primary-active text-gray-500 font-medium text-3xs"
                                                           href="#">
                                                            ronald.richards@gmail.com
                                                        </a>
                                                    </div>
                                                    <a class="hover:text-primary-active text-gray-700 font-medium text-xs"
                                                       href="#">
                                                        Go to profile
                                                    </a>
                                                </div>
                                                <div class="flex flex-wrap gap-2.5">
                                                    <button class="btn btn-light btn-sm"
                                                            data-dismiss="#notification_request_13">
                                                        Decline
                                                    </button>
                                                    <button class="btn btn-dark btn-sm"
                                                            data-dismiss="#notification_request_13">
                                                        Accept
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-b border-b-gray-200">
                                        </div>
                                        <div class="flex items-center grow gap-2.5 px-5">
                                            <div
                                                class="flex items-center justify-center size-8 bg-success-light rounded-full border border-success-clarity">
                                                <i class="ki-filled ki-check text-lg text-success">
                                                </i>
                                            </div>
                                            <div class="flex flex-col gap-1">
                <span class="text-2sm font-medium text-gray-700">
                 You have succesfully verified your account
                </span>
                                                <span class="font-medium text-gray-500 text-2xs">
                 2 days ago
                </span>
                                            </div>
                                        </div>
                                        <div class="border-b border-b-gray-200">
                                        </div>
                                        <div class="flex grow gap-2.5 px-5">
                                            <div class="relative shrink-0 mt-0.5">
                                                <img alt="" class="rounded-full size-8"
                                                     src="assets/media/avatars/300-34.png"/>
                                                <span
                                                    class="size-1.5 badge badge-circle bg-gray-400 absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
                </span>
                                            </div>
                                            <div class="flex flex-col gap-3.5 grow">
                                                <div class="flex flex-col gap-1">
                                                    <div class="text-2sm font-medium mb-px">
                                                        <a class="hover:text-primary-active text-gray-900 font-semibold"
                                                           href="#">
                                                            Ava Peterson
                                                        </a>
                                                        <span class="text-gray-700">
                   uploaded attachment
                  </span>
                                                    </div>
                                                    <span class="flex items-center text-2xs font-medium text-gray-500">
                  3 days ago
                  <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                  </span>
                  ACME
                 </span>
                                                </div>
                                                <div
                                                    class="card shadow-none flex items-center justify-between flex-row gap-1.5 p-2.5 rounded-lg bg-light-active">
                                                    <div class="flex items-center gap-1.5">
                                                        <img class="h-6" src="assets/media/file-types/xls.svg"/>
                                                        <div class="flex flex-col gap-0.5">
                                                            <a class="hover:text-primary-active font-medium text-gray-700 text-xs"
                                                               href="#">
                                                                Redesign-2024.xls
                                                            </a>
                                                            <span class="font-medium text-gray-500 text-2xs">
                    2.6 MB
                   </span>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-icon btn-xs btn-clear btn-light">
                                                        <svg fill="none" height="14" viewbox="0 0 14 14" width="14"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path clip-rule="evenodd"
                                                                  d="M6.63821 2.60467C4.81926 2.60467 3.32474 3.99623 3.16201 5.77252C3.1386 6.02803 2.92413 6.22253 2.66871 6.22227C1.74915 6.22149 0.976744 6.9868 0.976744 7.90442C0.976744 8.83344 1.72988 9.58657 2.65891 9.58657H3.09302C3.36274 9.58657 3.5814 9.80523 3.5814 10.0749C3.5814 10.3447 3.36274 10.5633 3.09302 10.5633H2.65891C1.19044 10.5633 0 9.37292 0 7.90442C0 6.58614 0.986948 5.48438 2.24496 5.27965C2.62863 3.20165 4.44941 1.62793 6.63821 1.62793C8.26781 1.62793 9.69282 2.50042 10.4729 3.80193C12.3411 3.72829 14 5.2564 14 7.18091C14 8.93508 12.665 10.3769 10.9552 10.5466C10.6868 10.5733 10.4476 10.3773 10.421 10.1089C10.3943 9.84052 10.5903 9.60135 10.8587 9.57465C12.0739 9.45406 13.0233 8.42802 13.0233 7.18091C13.0233 5.74002 11.6905 4.59666 10.2728 4.79968C10.0642 4.82957 9.85672 4.72382 9.76028 4.53181C9.18608 3.38796 8.00318 2.60467 6.63821 2.60467Z"
                                                                  fill="#99A1B7" fill-rule="evenodd">
                                                            </path>
                                                            <path clip-rule="evenodd"
                                                                  d="M6.99909 8.01611L8.28162 9.29864C8.47235 9.48937 8.78158 9.48937 8.97231 9.29864C9.16303 9.10792 9.16303 8.79874 8.97231 8.60802L7.57465 7.2103C7.25675 6.89247 6.74143 6.89247 6.42353 7.2103L5.02585 8.60802C4.83513 8.79874 4.83513 9.10792 5.02585 9.29864C5.21657 9.48937 5.5258 9.48937 5.71649 9.29864L6.99909 8.01611Z"
                                                                  fill="#99A1B7" fill-rule="evenodd">
                                                            </path>
                                                            <path clip-rule="evenodd"
                                                                  d="M7.00009 12.372C7.2698 12.372 7.48846 12.1533 7.48846 11.8836V7.97665C7.48846 7.70694 7.2698 7.48828 7.00009 7.48828C6.73038 7.48828 6.51172 7.70694 6.51172 7.97665V11.8836C6.51172 12.1533 6.73038 12.372 7.00009 12.372Z"
                                                                  fill="#99A1B7" fill-rule="evenodd">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-b border-b-gray-200">
                                        </div>
                                        <div class="flex grow gap-2 px-5">
                                            <div class="relative shrink-0 mt-0.5">
                                                <img alt="" class="rounded-full size-8"
                                                     src="assets/media/avatars/300-29.png"/>
                                                <span
                                                    class="size-1.5 badge badge-circle bg-gray-400 absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
                </span>
                                            </div>
                                            <div class="flex flex-col gap-3 grow">
                                                <div class="flex flex-col gap-1">
                                                    <div class="text-2sm font-medium mb-px">
                                                        <a class="hover:text-primary-active text-gray-900 font-semibold"
                                                           href="#">
                                                            Ethan Parker
                                                        </a>
                                                        <span class="text-gray-700">
                   created a new tasks to
                  </span>
                                                        <a class="hover:text-primary-active text-primary" href="#">
                                                            Site Sculpt
                                                        </a>
                                                        <span class="text-gray-700">
                   project
                  </span>
                                                    </div>
                                                    <span class="flex items-center text-2xs font-medium text-gray-500">
                  3 days ago
                  <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                  </span>
                  Web Designer
                 </span>
                                                </div>
                                                <div class="card shadow-none p-3.5 gap-3.5 rounded-lg bg-light-active">
                                                    <div class="flex items-center justify-between flex-wrap gap-2.5">
                                                        <div class="flex flex-col gap-1">
                   <span class="font-medium text-gray-900 text-xs">
                    Location history is erased after Logging In
                   </span>
                                                            <span class="font-medium text-gray-500 text-3xs">
                    Due Date: 15 May, 2024
                   </span>
                                                        </div>
                                                        <div class="flex -space-x-2">
                                                            <div class="flex">
                                                                <img
                                                                    class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                                    src="assets/media/avatars/300-3.png"/>
                                                            </div>
                                                            <div class="flex">
                                                                <img
                                                                    class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                                    src="assets/media/avatars/300-2.png"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center gap-2.5">
                  <span class="badge badge-sm badge-success badge-outline">
                   Improvement
                  </span>
                                                        <span class="badge badge-sm badge-danger badge-outline">
                   Bug
                  </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-b border-b-gray-200">
                                        </div>
                                        <div class="flex grow gap-2.5 px-5" id="notification_request_3">
                                            <div class="relative shrink-0 mt-0.5">
                                                <img alt="" class="rounded-full size-8"
                                                     src="assets/media/avatars/300-30.png"/>
                                                <span
                                                    class="size-1.5 badge badge-circle bg-gray-400 absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
                </span>
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="flex flex-col gap-1">
                                                    <div class="text-2sm font-medium mb-px">
                                                        <a class="hover:text-primary-active text-gray-900 font-semibold"
                                                           href="#">
                                                            Benjamin Harris
                                                        </a>
                                                        <span class="text-gray-700">
                   requested to upgrade plan
                  </span>
                                                        <a class="hover:text-primary-active text-primary" href="#">
                                                        </a>
                                                        <span class="text-gray-700">
                  </span>
                                                    </div>
                                                    <span class="flex items-center text-2xs font-medium text-gray-500">
                  4 days ago
                  <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                  </span>
                  Marketing
                 </span>
                                                </div>
                                                <div class="flex flex-wrap gap-2.5">
                                                    <button class="btn btn-light btn-sm"
                                                            data-dismiss="#notification_request_3">
                                                        Decline
                                                    </button>
                                                    <button class="btn btn-dark btn-sm"
                                                            data-dismiss="#notification_request_3">
                                                        Accept
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-b border-b-gray-200">
                                        </div>
                                        <div class="flex grow gap-2.5 px-5">
                                            <div class="relative shrink-0 mt-0.5">
                                                <img alt="" class="rounded-full size-8"
                                                     src="assets/media/avatars/300-24.png"/>
                                                <span
                                                    class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
                </span>
                                            </div>
                                            <div class="flex flex-col gap-1">
                                                <div class="text-2sm font-medium mb-px">
                                                    <a class="hover:text-primary-active text-gray-900 font-semibold"
                                                       href="#">
                                                        Isaac Morgan
                                                    </a>
                                                    <span class="text-gray-700">
                  mentioned you in
                 </span>
                                                    <a class="hover:text-primary-active text-primary" href="#">
                                                        Data Transmission
                                                    </a>
                                                    topic
                                                </div>
                                                <span class="flex items-center text-2xs font-medium text-gray-500">
                 6 days ago
                 <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                 </span>
                 Dev Team
                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-b border-b-gray-200">
                                </div>
                                <div class="grid grid-cols-2 p-5 gap-2.5" id="notifications_inbox_footer">
                                    <button class="btn btn-sm btn-light justify-center">
                                        Archive all
                                    </button>
                                    <button class="btn btn-sm btn-light justify-center">
                                        Mark all as read
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="grow hidden" id="notifications_tab_team">
                            <div class="flex flex-col">
                                <div class="scrollable-y-auto" data-scrollable="true"
                                     data-scrollable-dependencies="#header" data-scrollable-max-height="auto"
                                     data-scrollable-offset="200px">
                                    <div class="flex flex-col gap-5 pt-3 pb-4">
                                        <div class="flex grow gap-2 px-5">
                                            <div class="relative shrink-0 mt-0.5">
                                                <img alt="" class="rounded-full size-8"
                                                     src="assets/media/avatars/300-15.png"/>
                                                <span
                                                    class="size-1.5 badge badge-circle bg-gray-400 absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
                </span>
                                            </div>
                                            <div class="flex flex-col gap-3 grow" id="notification_request_10">
                                                <div class="flex flex-col gap-1">
                                                    <div class="text-2sm font-medium mb-px">
                                                        <a class="hover:text-primary-active text-gray-900 font-semibold"
                                                           href="#">
                                                            Nova Hawthorne
                                                        </a>
                                                        <span class="text-gray-700">
                   sent you an meeting invation
                  </span>
                                                    </div>
                                                    <span class="flex items-center text-2xs font-medium text-gray-500">
                  2 days ago
                  <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                  </span>
                  Dev Team
                 </span>
                                                </div>
                                                <div class="card shadow-none p-2.5 rounded-lg bg-light-active">
                                                    <div class="flex items-center justify-between flex-wrap gap-2.5">
                                                        <div class="flex items-center gap-2.5">
                                                            <div class="border border-brand-clarity rounded-lg">
                                                                <div
                                                                    class="flex items-center justify-center border-b border-b-brand-clarity bg-brand-light rounded-t-lg">
                     <span class="text-3xs text-brand fw-medium p-1.5">
                      Apr
                     </span>
                                                                </div>
                                                                <div class="flex items-center justify-center size-9">
                     <span class="fw-semibold text-gray-900 text-md tracking-tight">
                      12
                     </span>
                                                                </div>
                                                            </div>
                                                            <div class="flex flex-col gap-1.5">
                                                                <a class="hover:text-primary-active font-medium text-gray-700 text-xs"
                                                                   href="#">
                                                                    Peparation For Release
                                                                </a>
                                                                <span class="font-medium text-gray-600 text-2xs">
                     9:00 PM - 10:00 PM
                    </span>
                                                            </div>
                                                        </div>
                                                        <div class="flex -space-x-2">
                                                            <div class="flex">
                                                                <img
                                                                    class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                                    src="assets/media/avatars/300-4.png"/>
                                                            </div>
                                                            <div class="flex">
                                                                <img
                                                                    class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                                    src="assets/media/avatars/300-1.png"/>
                                                            </div>
                                                            <div class="flex">
                                                                <img
                                                                    class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
                                                                    src="assets/media/avatars/300-2.png"/>
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
                                                <div class="flex flex-wrap gap-2.5">
                                                    <button class="btn btn-light btn-sm"
                                                            data-dismiss="#notification_request_10">
                                                        Decline
                                                    </button>
                                                    <button class="btn btn-dark btn-sm"
                                                            data-dismiss="#notification_request_10">
                                                        Accept
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-b border-b-gray-200">
                                        </div>
                                        <div class="flex grow gap-2.5 px-5">
                                            <div class="relative shrink-0 mt-0.5">
                                                <img alt="" class="rounded-full size-8"
                                                     src="assets/media/avatars/300-6.png"/>
                                                <span
                                                    class="size-1.5 badge badge-circle absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
                </span>
                                            </div>
                                            <div class="flex flex-col gap-1">
                                                <div class="text-2sm font-medium mb-px">
                                                    <a class="hover:text-primary-active text-gray-900 font-semibold"
                                                       href="#">
                                                        Adrian Vale
                                                    </a>
                                                    <span class="text-gray-700">
                  change the due date of
                 </span>
                                                    <a class="hover:text-primary-active text-primary" href="#">
                                                        Marketing
                                                    </a>
                                                    to 13 May
                                                </div>
                                                <span class="flex items-center text-2xs font-medium text-gray-500">
                 2 days ago
                 <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                 </span>
                 Marketing
                </span>
                                            </div>
                                        </div>
                                        <div class="border-b border-b-gray-200">
                                        </div>
                                        <div class="flex grow gap-2.5 px-5">
                                            <div class="relative shrink-0 mt-0.5">
                                                <img alt="" class="rounded-full size-8"
                                                     src="assets/media/avatars/300-12.png"/>
                                                <span
                                                    class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
                </span>
                                            </div>
                                            <div class="flex flex-col gap-3.5 grow">
                                                <div class="flex flex-col gap-1">
                                                    <div class="text-2sm font-medium mb-px">
                                                        <a class="hover:text-primary-active text-gray-900 font-semibold"
                                                           href="#">
                                                            Skylar Frost
                                                        </a>
                                                        <span class="text-gray-700">
                   uploaded 2 attachments
                  </span>
                                                    </div>
                                                    <span class="flex items-center text-2xs font-medium text-gray-500">
                  3 days ago
                  <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                  </span>
                  Web Design
                 </span>
                                                </div>
                                                <div
                                                    class="card shadow-none flex items-center justify-between flex-row gap-1.5 p-2.5 rounded-lg bg-light-active">
                                                    <div class="flex items-center gap-1.5">
                                                        <img class="h-6" src="assets/media/file-types/word.svg"/>
                                                        <div class="flex flex-col gap-0.5">
                                                            <a class="hover:text-primary-active font-medium text-gray-700 text-xs"
                                                               href="#">
                                                                Landing-page.docx
                                                            </a>
                                                            <span class="font-medium text-gray-500 text-2xs">
                    1.9 MB
                   </span>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-icon btn-xs btn-clear btn-light">
                                                        <svg fill="none" height="14" viewbox="0 0 14 14" width="14"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path clip-rule="evenodd"
                                                                  d="M6.63821 2.60467C4.81926 2.60467 3.32474 3.99623 3.16201 5.77252C3.1386 6.02803 2.92413 6.22253 2.66871 6.22227C1.74915 6.22149 0.976744 6.9868 0.976744 7.90442C0.976744 8.83344 1.72988 9.58657 2.65891 9.58657H3.09302C3.36274 9.58657 3.5814 9.80523 3.5814 10.0749C3.5814 10.3447 3.36274 10.5633 3.09302 10.5633H2.65891C1.19044 10.5633 0 9.37292 0 7.90442C0 6.58614 0.986948 5.48438 2.24496 5.27965C2.62863 3.20165 4.44941 1.62793 6.63821 1.62793C8.26781 1.62793 9.69282 2.50042 10.4729 3.80193C12.3411 3.72829 14 5.2564 14 7.18091C14 8.93508 12.665 10.3769 10.9552 10.5466C10.6868 10.5733 10.4476 10.3773 10.421 10.1089C10.3943 9.84052 10.5903 9.60135 10.8587 9.57465C12.0739 9.45406 13.0233 8.42802 13.0233 7.18091C13.0233 5.74002 11.6905 4.59666 10.2728 4.79968C10.0642 4.82957 9.85672 4.72382 9.76028 4.53181C9.18608 3.38796 8.00318 2.60467 6.63821 2.60467Z"
                                                                  fill="#99A1B7" fill-rule="evenodd">
                                                            </path>
                                                            <path clip-rule="evenodd"
                                                                  d="M6.99909 8.01611L8.28162 9.29864C8.47235 9.48937 8.78158 9.48937 8.97231 9.29864C9.16303 9.10792 9.16303 8.79874 8.97231 8.60802L7.57465 7.2103C7.25675 6.89247 6.74143 6.89247 6.42353 7.2103L5.02585 8.60802C4.83513 8.79874 4.83513 9.10792 5.02585 9.29864C5.21657 9.48937 5.5258 9.48937 5.71649 9.29864L6.99909 8.01611Z"
                                                                  fill="#99A1B7" fill-rule="evenodd">
                                                            </path>
                                                            <path clip-rule="evenodd"
                                                                  d="M7.00009 12.372C7.2698 12.372 7.48846 12.1533 7.48846 11.8836V7.97665C7.48846 7.70694 7.2698 7.48828 7.00009 7.48828C6.73038 7.48828 6.51172 7.70694 6.51172 7.97665V11.8836C6.51172 12.1533 6.73038 12.372 7.00009 12.372Z"
                                                                  fill="#99A1B7" fill-rule="evenodd">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div
                                                    class="card shadow-none flex items-center justify-between flex-row gap-1.5 p-2.5 rounded-lg bg-light-active">
                                                    <div class="flex items-center gap-1.5">
                                                        <img class="h-6" src="assets/media/file-types/svg.svg"/>
                                                        <div class="flex flex-col gap-0.5">
                                                            <a class="hover:text-primary-active font-medium text-gray-700 text-xs"
                                                               href="#">
                                                                New-icon.svg
                                                            </a>
                                                            <span class="font-medium text-gray-500 text-2xs">
                    2.3 MB
                   </span>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-icon btn-xs btn-clear btn-light">
                                                        <svg fill="none" height="14" viewbox="0 0 14 14" width="14"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path clip-rule="evenodd"
                                                                  d="M6.63821 2.60467C4.81926 2.60467 3.32474 3.99623 3.16201 5.77252C3.1386 6.02803 2.92413 6.22253 2.66871 6.22227C1.74915 6.22149 0.976744 6.9868 0.976744 7.90442C0.976744 8.83344 1.72988 9.58657 2.65891 9.58657H3.09302C3.36274 9.58657 3.5814 9.80523 3.5814 10.0749C3.5814 10.3447 3.36274 10.5633 3.09302 10.5633H2.65891C1.19044 10.5633 0 9.37292 0 7.90442C0 6.58614 0.986948 5.48438 2.24496 5.27965C2.62863 3.20165 4.44941 1.62793 6.63821 1.62793C8.26781 1.62793 9.69282 2.50042 10.4729 3.80193C12.3411 3.72829 14 5.2564 14 7.18091C14 8.93508 12.665 10.3769 10.9552 10.5466C10.6868 10.5733 10.4476 10.3773 10.421 10.1089C10.3943 9.84052 10.5903 9.60135 10.8587 9.57465C12.0739 9.45406 13.0233 8.42802 13.0233 7.18091C13.0233 5.74002 11.6905 4.59666 10.2728 4.79968C10.0642 4.82957 9.85672 4.72382 9.76028 4.53181C9.18608 3.38796 8.00318 2.60467 6.63821 2.60467Z"
                                                                  fill="#99A1B7" fill-rule="evenodd">
                                                            </path>
                                                            <path clip-rule="evenodd"
                                                                  d="M6.99909 8.01611L8.28162 9.29864C8.47235 9.48937 8.78158 9.48937 8.97231 9.29864C9.16303 9.10792 9.16303 8.79874 8.97231 8.60802L7.57465 7.2103C7.25675 6.89247 6.74143 6.89247 6.42353 7.2103L5.02585 8.60802C4.83513 8.79874 4.83513 9.10792 5.02585 9.29864C5.21657 9.48937 5.5258 9.48937 5.71649 9.29864L6.99909 8.01611Z"
                                                                  fill="#99A1B7" fill-rule="evenodd">
                                                            </path>
                                                            <path clip-rule="evenodd"
                                                                  d="M7.00009 12.372C7.2698 12.372 7.48846 12.1533 7.48846 11.8836V7.97665C7.48846 7.70694 7.2698 7.48828 7.00009 7.48828C6.73038 7.48828 6.51172 7.70694 6.51172 7.97665V11.8836C6.51172 12.1533 6.73038 12.372 7.00009 12.372Z"
                                                                  fill="#99A1B7" fill-rule="evenodd">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-b border-b-gray-200">
                                        </div>
                                        <div class="flex grow gap-2.5 px-5">
                                            <div class="relative shrink-0 mt-0.5">
                                                <img alt="" class="rounded-full size-8"
                                                     src="assets/media/avatars/300-21.png"/>
                                                <span
                                                    class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
                </span>
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="flex flex-col gap-1">
                                                    <div class="text-2sm font-medium">
                                                        <a class="hover:text-primary-active text-gray-900 font-semibold"
                                                           href="#">
                                                            Selene Silverleaf
                                                        </a>
                                                        <span class="text-gray-700">
                   commented on
                  </span>
                                                        <a class="hover:text-primary-active text-primary" href="#">
                                                            SiteSculpt
                                                        </a>
                                                        <span class="text-gray-700">
                  </span>
                                                    </div>
                                                    <span class="flex items-center text-2xs font-medium text-gray-500">
                  4 days ago
                  <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                  </span>
                  Manager
                 </span>
                                                </div>
                                                <div
                                                    class="card shadow-none flex flex-col gap-2.5 p-3.5 rounded-lg bg-light-active">
                                                    <div class="text-2sm font-semibold text-gray-600 mb-px">
                                                        <a class="hover:text-primary-active text-gray-900 font-semibold"
                                                           href="#">
                                                            @Cody
                                                        </a>
                                                        <span class="text-gray-700 font-medium">
                   This design  is simply stunning! From layout to color, it's a work of art!
                  </span>
                                                    </div>
                                                    <label class="input input-sm">
                                                        <input placeholder="Reply" type="text" value="">
                                                        <button class="btn btn-icon">
                                                            <i class="ki-filled ki-picture">
                                                            </i>
                                                        </button>
                                                        </input>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-b border-b-gray-200">
                                        </div>
                                        <div class="flex grow gap-2.5 px-5" id="notification_request_3">
                                            <div class="relative shrink-0 mt-0.5">
                                                <img alt="" class="rounded-full size-8"
                                                     src="assets/media/avatars/300-13.png"/>
                                                <span
                                                    class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
                </span>
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="flex flex-col gap-1">
                                                    <div class="text-2sm font-medium mb-px">
                                                        <a class="hover:text-primary-active text-gray-900 font-semibold"
                                                           href="#">
                                                            Thalia Fox
                                                        </a>
                                                        <span class="text-gray-700">
                   has invited you to join
                  </span>
                                                        <a class="hover:text-primary-active text-primary" href="#">
                                                            Design Research
                                                        </a>
                                                        <span class="text-gray-700">
                  </span>
                                                    </div>
                                                    <span class="flex items-center text-2xs font-medium text-gray-500">
                  4 days ago
                  <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                  </span>
                  Dev Team
                 </span>
                                                </div>
                                                <div class="flex flex-wrap gap-2.5">
                                                    <button class="btn btn-light btn-sm"
                                                            data-dismiss="#notification_request_3">
                                                        Decline
                                                    </button>
                                                    <button class="btn btn-dark btn-sm"
                                                            data-dismiss="#notification_request_3">
                                                        Accept
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-b border-b-gray-200">
                                </div>
                                <div class="grid grid-cols-2 p-5 gap-2.5" id="notifications_team_footer">
                                    <button class="btn btn-sm btn-light justify-center">
                                        Archive all
                                    </button>
                                    <button class="btn btn-sm btn-light justify-center">
                                        Mark all as read
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="grow hidden" id="notifications_tab_following">
                            <div class="flex flex-col">
                                <div class="scrollable-y-auto" data-scrollable="true"
                                     data-scrollable-dependencies="#header" data-scrollable-max-height="auto"
                                     data-scrollable-offset="200px">
                                    <div class="flex flex-col gap-5 pt-3 pb-4">
                                        <div class="flex grow gap-2.5 px-5">
                                            <div class="relative shrink-0 mt-0.5">
                                                <img alt="" class="rounded-full size-8"
                                                     src="assets/media/avatars/300-1.png"/>
                                                <span
                                                    class="size-1.5 badge badge-circle bg-gray-400 absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
                </span>
                                            </div>
                                            <div class="flex flex-col gap-2.5 grow">
                                                <div class="flex flex-col gap-1 mb-1">
                                                    <div class="text-2sm font-medium mb-px">
                                                        <a class="hover:text-primary-active text-gray-900 font-semibold"
                                                           href="#">
                                                            Jane Perez
                                                        </a>
                                                        <span class="text-gray-700">
                   added 2 new works to
                  </span>
                                                        <a class="hover:text-primary-active text-primary font-semibold"
                                                           href="#">
                                                            Inspirations 2024
                                                        </a>
                                                    </div>
                                                    <span class="flex items-center text-2xs font-medium text-gray-500">
                  23 hours ago
                  <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                  </span>
                  Craftwork Design
                 </span>
                                                </div>
                                                <div class="flex items-center gap-2.5">
                                                    <div
                                                        class="card shadow-none flex flex-col gap-3.5 bg-light-active w-40">
                                                        <div class="bg-cover bg-no-repeat card-rounded-t shrink-0 h-24"
                                                             style="background-image: url('assets/media/images/600x600/6.jpg')">
                                                        </div>
                                                        <div class="px-2.5 pb-2">
                                                            <a class="font-medium block text-gray-700 hover:text-primary text-xs leading-4 mb-0.5"
                                                               href="#">
                                                                Geometric Patterns
                                                            </a>
                                                            <div class="text-2xs font-medium text-gray-500">
                                                                Token ID:
                                                                <span class="text-2xs font-medium text-gray-700">
                     81023
                    </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="card shadow-none flex flex-col gap-3.5 bg-light-active w-40">
                                                        <div class="bg-cover bg-no-repeat card-rounded-t shrink-0 h-24"
                                                             style="background-image: url('assets/media/images/600x600/1.jpg')">
                                                        </div>
                                                        <div class="px-2.5 pb-2">
                                                            <a class="font-medium block text-gray-700 hover:text-primary text-xs leading-4 mb-0.5"
                                                               href="#">
                                                                Artistic Expressions
                                                            </a>
                                                            <div class="text-2xs font-medium text-gray-500">
                                                                Token ID:
                                                                <span class="text-2xs font-medium text-gray-700">
                     67890
                    </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-b border-b-gray-200">
                                        </div>
                                        <div class="flex grow gap-2.5 px-5" id="notification_request_3">
                                            <div class="relative shrink-0 mt-0.5">
                                                <img alt="" class="rounded-full size-8"
                                                     src="assets/media/avatars/300-19.png"/>
                                                <span
                                                    class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
                </span>
                                            </div>
                                            <div class="flex flex-col gap-2.5 grow" id="notification_request_17">
                                                <div class="flex flex-col gap-1 mb-1">
                                                    <div class="text-2sm font-medium mb-px">
                                                        <a class="hover:text-primary-active text-gray-900 font-semibold"
                                                           href="#">
                                                            Natalie Wood
                                                        </a>
                                                        <span class="text-gray-700">
                   wants to edit marketing project
                  </span>
                                                    </div>
                                                    <span class="flex items-center text-2xs font-medium text-gray-500">
                  1 day ago
                  <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                  </span>
                  Designer
                 </span>
                                                </div>
                                                <div
                                                    class="card shadow-none flex items-center flex-row gap-1.5 p-2.5 rounded-lg bg-light-active">
                                                    <div
                                                        class="flex items-center justify-center w-[26px] h-[30px] shrink-0 bg-white rounded border border-gray-200">
                                                        <img class="h-5" src="assets/media/brand-logos/jira.svg"/>
                                                    </div>
                                                    <a class="hover:text-primary-active font-medium text-gray-700 text-xs me-1"
                                                       href="#">
                                                        User-feedback.jira
                                                    </a>
                                                    <span class="font-medium text-gray-500 text-2xs">
                  Edited 1 hour ago
                 </span>
                                                </div>
                                                <div class="flex flex-wrap gap-2.5">
                                                    <button class="btn btn-light btn-sm"
                                                            data-dismiss="#notification_request_17">
                                                        Decline
                                                    </button>
                                                    <button class="btn btn-dark btn-sm"
                                                            data-dismiss="#notification_request_17">
                                                        Accept
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-b border-b-gray-200">
                                        </div>
                                        <div class="flex grow gap-2.5 px-5">
                                            <div class="relative shrink-0 mt-0.5">
                                                <img alt="" class="rounded-full size-8"
                                                     src="assets/media/avatars/300-17.png"/>
                                                <span
                                                    class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
                </span>
                                            </div>
                                            <div class="flex flex-col gap-2.5 grow">
                                                <div class="flex flex-col gap-1 mb-1">
                                                    <div class="text-2sm font-medium mb-px">
                                                        <a class="hover:text-primary-active text-gray-900 font-semibold"
                                                           href="#">
                                                            Aaron Foster
                                                        </a>
                                                        <span class="text-gray-700">
                   requested to view
                  </span>
                                                    </div>
                                                    <span class="flex items-center text-2xs font-medium text-gray-500">
                  3 day ago
                  <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                  </span>
                  Larsen Ltd
                 </span>
                                                </div>
                                                <div
                                                    class="card shadow-none flex items-center flex-row gap-1.5 px-2.5 py-1.5 rounded-lg bg-light-active">
                                                    <i class="ki-filled ki-user-tick text-success text-base">
                                                    </i>
                                                    <span class="font-medium text-success text-2sm">
                  You allowed Aaron to view
                 </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-b border-b-gray-200">
                                        </div>
                                        <div class="flex grow gap-2.5 px-5">
                                            <div class="relative shrink-0 mt-0.5">
                                                <img alt="" class="rounded-full size-8"
                                                     src="assets/media/avatars/300-34.png"/>
                                                <span
                                                    class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
                </span>
                                            </div>
                                            <div class="flex flex-col gap-1">
                                                <div class="text-2sm font-medium mb-px">
                                                    <a class="hover:text-primary-active text-gray-900 font-semibold"
                                                       href="#">
                                                        Chloe Morgan
                                                    </a>
                                                    <span class="text-gray-700">
                  posted a new article
                 </span>
                                                    <a class="hover:text-primary-active text-primary" href="#">
                                                        User Experience
                                                    </a>
                                                </div>
                                                <span class="flex items-center text-2xs font-medium text-gray-500">
                 1 day ago
                 <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                 </span>
                 Nexus
                </span>
                                            </div>
                                        </div>
                                        <div class="border-b border-b-gray-200">
                                        </div>
                                        <div class="flex grow gap-2.5 px-5">
                                            <div class="relative shrink-0 mt-0.5">
                                                <img alt="" class="rounded-full size-8"
                                                     src="assets/media/avatars/300-9.png"/>
                                                <span
                                                    class="size-1.5 badge badge-circle bg-gray-400 absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
                </span>
                                            </div>
                                            <div class="flex flex-col gap-2.5 grow">
                                                <div class="flex flex-col gap-1 mb-1">
                                                    <div class="text-2sm font-medium mb-px">
                                                        <a class="hover:text-primary-active text-gray-900 font-semibold"
                                                           href="#">
                                                            Gabriel Bennett
                                                        </a>
                                                        <span class="text-gray-700">
                   started connect you
                  </span>
                                                    </div>
                                                    <span class="flex items-center text-2xs font-medium text-gray-500">
                  3 day ago
                  <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                  </span>
                  Development
                 </span>
                                                </div>
                                                <div class="flex flex-wrap gap-2.5">
                                                    <button class="btn btn-sm btn-light">
                                                        <i class="ki-filled ki-check-circle">
                                                        </i>
                                                        Connected
                                                    </button>
                                                    <button class="btn btn-dark btn-sm">
                                                        Go to profile
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-b border-b-gray-200">
                                        </div>
                                        <div class="flex grow gap-2.5 px-5" id="notification_request_3">
                                            <div class="relative shrink-0 mt-0.5">
                                                <img alt="" class="rounded-full size-8"
                                                     src="assets/media/avatars/300-13.png"/>
                                                <span
                                                    class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
                </span>
                                            </div>
                                            <div class="flex flex-col gap-3.5">
                                                <div class="flex flex-col gap-1">
                                                    <div class="text-2sm font-medium mb-px">
                                                        <a class="hover:text-primary-active text-gray-900 font-semibold"
                                                           href="#">
                                                            Thalia Fox
                                                        </a>
                                                        <span class="text-gray-700">
                   has invited you to join
                  </span>
                                                        <a class="hover:text-primary-active text-primary" href="#">
                                                            Design Research
                                                        </a>
                                                        <span class="text-gray-700">
                  </span>
                                                    </div>
                                                    <span class="flex items-center text-2xs font-medium text-gray-500">
                  4 days ago
                  <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                  </span>
                  Dev Team
                 </span>
                                                </div>
                                                <div class="flex flex-wrap gap-2.5">
                                                    <button class="btn btn-light btn-sm"
                                                            data-dismiss="#notification_request_3">
                                                        Decline
                                                    </button>
                                                    <button class="btn btn-dark btn-sm"
                                                            data-dismiss="#notification_request_3">
                                                        Accept
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-b border-b-gray-200">
                                </div>
                                <div class="grid grid-cols-2 p-5 gap-2.5" id="notifications_following_footer">
                                    <button class="btn btn-sm btn-light justify-center">
                                        Archive all
                                    </button>
                                    <button class="btn btn-sm btn-light justify-center">
                                        Mark all as read
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn btn-xs btn-icon-lg btn-light" href="html/demo8/account/home/get-started.html">
                    <i class="ki-filled ki-exit-down !text-base">
                    </i>
                    Export
                </a>
            </div>
        </div>
        <!-- End of Container -->
    </div>
    <!-- End of Toolbar -->
    <style>
        .hero-bg {
            background-image: url('assets/media/images/2600x1200/bg-1.png');
        }

        .dark .hero-bg {
            background-image: url('assets/media/images/2600x1200/bg-1-dark.png');
        }
    </style>

    <!-- Container -->
    <div class="container-fixed">
        <div
            class="flex items-center flex-wrap md:flex-nowrap lg:items-end justify-between border-b border-b-gray-200 dark:border-b-coal-100 gap-3 lg:gap-6 mb-5 lg:mb-10">
            <div class="grid">
                <div class="scrollable-x-auto">
                    <div class="menu gap-3" data-menu="true">
                        <div
                            class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-primary menu-item-here:border-b-primary"
                            data-menu-item-placement="bottom-start" data-menu-item-toggle="dropdown"
                            data-menu-item-trigger="click|lg:hover">
                            <div class="menu-link gap-1.5 pb-2 lg:pb-4 px-2" tabindex="0">
            <span
                class="menu-title text-nowrap text-sm text-gray-700 menu-item-active:text-primary menu-item-active:font-medium menu-item-here:text-primary menu-item-here:font-medium menu-item-show:text-primary menu-link-hover:text-primary">
             Profiles
            </span>
                                <span class="menu-arrow">
             <i class="ki-filled ki-down text-2xs text-gray-500 menu-item-active:text-primary menu-item-here:text-primary menu-item-show:text-primary menu-link-hover:text-primary">
             </i>
            </span>
                            </div>
                            <div class="menu-dropdown menu-default py-2 min-w-[200px]">
                                <div class="menu-item">
                                    <a class="menu-link" href="html/demo8/public-profile/profiles/default.html"
                                       tabindex="0">
              <span class="menu-title">
               Default
              </span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="html/demo8/public-profile/profiles/creator.html"
                                       tabindex="0">
              <span class="menu-title">
               Creator
              </span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="html/demo8/public-profile/profiles/company.html"
                                       tabindex="0">
              <span class="menu-title">
               Company
              </span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="html/demo8/public-profile/profiles/nft.html"
                                       tabindex="0">
              <span class="menu-title">
               NFT
              </span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="html/demo8/public-profile/profiles/blogger.html"
                                       tabindex="0">
              <span class="menu-title">
               Blogger
              </span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="html/demo8/public-profile/profiles/crm.html"
                                       tabindex="0">
              <span class="menu-title">
               CRM
              </span>
                                    </a>
                                </div>
                                <div class="menu-item" data-menu-item-offset="-10px, 0" data-menu-item-overflow="true"
                                     data-menu-item-placement="right-start" data-menu-item-toggle="dropdown"
                                     data-menu-item-trigger="click|lg:hover">
                                    <div class="menu-link" tabindex="0">
              <span class="menu-title">
               More
              </span>
                                        <span class="menu-arrow">
               <i class="ki-filled ki-down text-2xs [.menu-dropdown_&]:-rotate-90">
               </i>
              </span>
                                    </div>
                                    <div class="menu-dropdown menu-default py min-w-[200px]">
                                        <div class="menu-item">
                                            <a class="menu-link" href="html/demo8/public-profile/profiles/gamer.html"
                                               tabindex="0">
                <span class="menu-title">
                 Gamer
                </span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="html/demo8/public-profile/profiles/feeds.html"
                                               tabindex="0">
                <span class="menu-title">
                 Feeds
                </span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="html/demo8/public-profile/profiles/plain.html"
                                               tabindex="0">
                <span class="menu-title">
                 Plain
                </span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="html/demo8/public-profile/profiles/modal.html"
                                               tabindex="0">
                <span class="menu-title">
                 Modal
                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-primary menu-item-here:border-b-primary here"
                            data-menu-item-placement="bottom-start" data-menu-item-toggle="dropdown"
                            data-menu-item-trigger="click|lg:hover">
                            <div class="menu-link gap-1.5 pb-2 lg:pb-4 px-2" tabindex="0">
            <span
                class="menu-title text-nowrap text-sm text-gray-700 menu-item-active:text-primary menu-item-active:font-medium menu-item-here:text-primary menu-item-here:font-medium menu-item-show:text-primary menu-link-hover:text-primary">
             Projects
            </span>
                                <span class="menu-arrow">
             <i class="ki-filled ki-down text-2xs text-gray-500 menu-item-active:text-primary menu-item-here:text-primary menu-item-show:text-primary menu-link-hover:text-primary">
             </i>
            </span>
                            </div>
                            <div class="menu-dropdown menu-default py-2 min-w-[200px]">
                                <div class="menu-item active">
                                    <a class="menu-link" href="html/demo8/public-profile/projects/3-columns.html"
                                       tabindex="0">
              <span class="menu-title">
               3 Columns
              </span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="html/demo8/public-profile/projects/2-columns.html"
                                       tabindex="0">
              <span class="menu-title">
               2 Columns
              </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div
                            class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-primary menu-item-here:border-b-primary">
                            <a class="menu-link gap-1.5 pb-2 lg:pb-4 px-2" href="html/demo8/public-profile/works.html"
                               tabindex="0">
            <span
                class="menu-title text-nowrap font-medium text-sm text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-item-here:text-primary menu-item-here:font-semibold menu-item-show:text-primary menu-link-hover:text-primary">
             Works
            </span>
                            </a>
                        </div>
                        <div
                            class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-primary menu-item-here:border-b-primary">
                            <a class="menu-link gap-1.5 pb-2 lg:pb-4 px-2" href="html/demo8/public-profile/teams.html"
                               tabindex="0">
            <span
                class="menu-title text-nowrap font-medium text-sm text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-item-here:text-primary menu-item-here:font-semibold menu-item-show:text-primary menu-link-hover:text-primary">
             Teams
            </span>
                            </a>
                        </div>
                        <div
                            class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-primary menu-item-here:border-b-primary">
                            <a class="menu-link gap-1.5 pb-2 lg:pb-4 px-2" href="html/demo8/public-profile/network.html"
                               tabindex="0">
            <span
                class="menu-title text-nowrap font-medium text-sm text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-item-here:text-primary menu-item-here:font-semibold menu-item-show:text-primary menu-link-hover:text-primary">
             Network
            </span>
                            </a>
                        </div>
                        <div
                            class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-primary menu-item-here:border-b-primary">
                            <a class="menu-link gap-1.5 pb-2 lg:pb-4 px-2"
                               href="html/demo8/public-profile/activity.html" tabindex="0">
            <span
                class="menu-title text-nowrap font-medium text-sm text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-item-here:text-primary menu-item-here:font-semibold menu-item-show:text-primary menu-link-hover:text-primary">
             Activity
            </span>
                            </a>
                        </div>
                        <div
                            class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-primary menu-item-here:border-b-primary"
                            data-menu-item-placement="bottom-start" data-menu-item-toggle="dropdown"
                            data-menu-item-trigger="click|lg:hover">
                            <div class="menu-link gap-1.5 pb-2 lg:pb-4 px-2" tabindex="0">
            <span
                class="menu-title text-nowrap text-sm text-gray-700 menu-item-active:text-primary menu-item-active:font-medium menu-item-here:text-primary menu-item-here:font-medium menu-item-show:text-primary menu-link-hover:text-primary">
             More
            </span>
                                <span class="menu-arrow">
             <i class="ki-filled ki-down text-2xs text-gray-500 menu-item-active:text-primary menu-item-here:text-primary menu-item-show:text-primary menu-link-hover:text-primary">
             </i>
            </span>
                            </div>
                            <div class="menu-dropdown menu-default py-2 min-w-[200px]">
                                <div class="menu-item">
                                    <a class="menu-link" href="html/demo8/public-profile/campaigns/card.html"
                                       tabindex="0">
              <span class="menu-title">
               Campaigns - Card
              </span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="html/demo8/public-profile/campaigns/list.html"
                                       tabindex="0">
              <span class="menu-title">
               Campaigns - List
              </span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="html/demo8/public-profile/empty.html" tabindex="0">
              <span class="menu-title">
               Empty
              </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-end grow lg:grow-0 lg:pb-4 gap-2.5 mb-3 lg:mb-0">
                <div class="dropdown" >
                    <a href="{{ route('clientes-create') }}" class="dropdown-toggle btn btn-sm btn-primary">
                        <i class="ki-filled ki-users">
                        </i>
                        Novo Cliente
                    </a>
                </div>
                <button class="btn btn-sm btn-icon btn-light">
                    <i class="ki-filled ki-messages">
                    </i>
                </button>
                <button class="btn btn-sm btn-icon btn-light">
                    <i class="ki-filled ki-dots-vertical">
                    </i>
                </button>
            </div>
        </div>
    </div>
    <!-- End of Container -->
    <!-- Container -->
    <div class="container-fixed">
        <!-- begin: projects -->
        <div class="flex flex-col items-stretch gap-5 lg:gap-7.5">
            <!-- begin: toolbar -->
            <div class="flex flex-wrap items-center gap-5 justify-between">
                <h3 class="text-lg text-gray-900 font-semibold">
                    {{ count($customers) }} Clientes
                </h3>
                <div class="btn-tabs" data-tabs="true">
                    <a class="btn btn-icon" data-tab-toggle="#projects_cards" href="#">
                        <i class="ki-filled ki-category">
                        </i>
                    </a>
                    <a class="btn btn-icon active" data-tab-toggle="#projects_list" href="#">
                        <i class="ki-filled ki-row-horizontal">
                        </i>
                    </a>
                </div>
            </div>
            <!-- end: toolbar -->
            <!-- begin: cards -->
            <div id="projects_cards" class="hidden">
                <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-5 lg:gap-7.5">
                    <div class="card p-7.5">
                        <div class="flex items-center justify-between mb-3 lg:mb-6">
                            <div class="flex items-center justify-center size-[50px] rounded-lg bg-gray-100">
                                <img alt="" class="" src="assets/media/brand-logos/plurk.svg"/>
                            </div>
                            <span class="badge badge-primary badge-outline">
            In Progress
           </span>
                        </div>
                        <div class="flex flex-col mb-3 lg:mb-6">
                            <a class="text-lg font-media/brand text-gray-900 hover:text-primary-active mb-px" href="#">
                                Phoenix SaaS
                            </a>
                            <span class="text-sm text-gray-700">
            Real-time photo sharing app
           </span>
                        </div>
                        <div class="flex items-center gap-5 mb-3.5 lg:mb-7">
           <span class="text-sm text-gray-600">
            Start:
            <span class="text-sm font-medium text-gray-800">
             Mar 06
            </span>
           </span>
                            <span class="text-sm text-gray-600">
            End:
            <span class="text-sm font-medium text-gray-800">
             Dec 21
            </span>
           </span>
                        </div>
                        <div class="progress h-1.5 progress-primary mb-4 lg:mb-8">
                            <div class="progress-bar" style="width: 55%">
                            </div>
                        </div>
                        <div class="flex -space-x-2">
                            <div class="flex">
                                <img
                                    class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                    src="assets/media/avatars/300-4.png"/>
                            </div>
                            <div class="flex">
                                <img
                                    class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                    src="assets/media/avatars/300-2.png"/>
                            </div>
                            <div class="flex">
            <span
                class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-primary-inverse ring-primary-light bg-primary">
             S
            </span>
                            </div>
                        </div>
                    </div>
                    <div class="card p-7.5">
                        <div class="flex items-center justify-between mb-3 lg:mb-6">
                            <div class="flex items-center justify-center size-[50px] rounded-lg bg-gray-100">
                                <img alt="" class="" src="assets/media/brand-logos/telegram.svg"/>
                            </div>
                            <span class="badge badge-success badge-outline">
            Completed
           </span>
                        </div>
                        <div class="flex flex-col mb-3 lg:mb-6">
                            <a class="text-lg font-media/brand text-gray-900 hover:text-primary-active mb-px" href="#">
                                Radiant Wave
                            </a>
                            <span class="text-sm text-gray-700">
            Short-term accommodation marketplace
           </span>
                        </div>
                        <div class="flex items-center gap-5 mb-3.5 lg:mb-7">
           <span class="text-sm text-gray-600">
            Start:
            <span class="text-sm font-medium text-gray-800">
             Mar 09
            </span>
           </span>
                            <span class="text-sm text-gray-600">
            End:
            <span class="text-sm font-medium text-gray-800">
             Dec 23
            </span>
           </span>
                        </div>
                        <div class="progress h-1.5 progress-success mb-4 lg:mb-8">
                            <div class="progress-bar" style="width: 100%">
                            </div>
                        </div>
                        <div class="flex -space-x-2">
                            <div class="flex">
                                <img
                                    class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                    src="assets/media/avatars/300-24.png"/>
                            </div>
                            <div class="flex">
                                <img
                                    class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                    src="assets/media/avatars/300-7.png"/>
                            </div>
                        </div>
                    </div>
                    <div class="card p-7.5">
                        <div class="flex items-center justify-between mb-3 lg:mb-6">
                            <div class="flex items-center justify-center size-[50px] rounded-lg bg-gray-100">
                                <img alt="" class="" src="assets/media/brand-logos/kickstarter.svg"/>
                            </div>
                            <span class="badge badge-outline">
            Upcoming
           </span>
                        </div>
                        <div class="flex flex-col mb-3 lg:mb-6">
                            <a class="text-lg font-media/brand text-gray-900 hover:text-primary-active mb-px" href="#">
                                Dreamweaver
                            </a>
                            <span class="text-sm text-gray-700">
            Social media photo sharing
           </span>
                        </div>
                        <div class="flex items-center gap-5 mb-3.5 lg:mb-7">
           <span class="text-sm text-gray-600">
            Start:
            <span class="text-sm font-medium text-gray-800">
             Mar 05
            </span>
           </span>
                            <span class="text-sm text-gray-600">
            End:
            <span class="text-sm font-medium text-gray-800">
             Dec 12
            </span>
           </span>
                        </div>
                        <div class="progress h-1.5 progress-gray-300 mb-4 lg:mb-8">
                            <div class="progress-bar" style="width: 100%">
                            </div>
                        </div>
                        <div class="flex -space-x-2">
                            <div class="flex">
                                <img
                                    class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                    src="assets/media/avatars/300-21.png"/>
                            </div>
                            <div class="flex">
                                <img
                                    class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                    src="assets/media/avatars/300-1.png"/>
                            </div>
                            <div class="flex">
                                <img
                                    class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                    src="assets/media/avatars/300-2.png"/>
                            </div>
                            <div class="flex">
            <span
                class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-success-inverse ring-success-light bg-success">
             +10
            </span>
                            </div>
                        </div>
                    </div>
                    <div class="card p-7.5">
                        <div class="flex items-center justify-between mb-3 lg:mb-6">
                            <div class="flex items-center justify-center size-[50px] rounded-lg bg-gray-100">
                                <img alt="" class="" src="assets/media/brand-logos/quickbooks.svg"/>
                            </div>
                            <span class="badge badge-primary badge-outline">
            In Progress
           </span>
                        </div>
                        <div class="flex flex-col mb-3 lg:mb-6">
                            <a class="text-lg font-media/brand text-gray-900 hover:text-primary-active mb-px" href="#">
                                Horizon Quest
                            </a>
                            <span class="text-sm text-gray-700">
            Team communication and collaboration
           </span>
                        </div>
                        <div class="flex items-center gap-5 mb-3.5 lg:mb-7">
           <span class="text-sm text-gray-600">
            Start:
            <span class="text-sm font-medium text-gray-800">
             Mar 03
            </span>
           </span>
                            <span class="text-sm text-gray-600">
            End:
            <span class="text-sm font-medium text-gray-800">
             Dec 11
            </span>
           </span>
                        </div>
                        <div class="progress h-1.5 progress-primary mb-4 lg:mb-8">
                            <div class="progress-bar" style="width: 19%">
                            </div>
                        </div>
                        <div class="flex -space-x-2">
                            <div class="flex">
                                <img
                                    class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                    src="assets/media/avatars/300-1.png"/>
                            </div>
                            <div class="flex">
                                <img
                                    class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                    src="assets/media/avatars/300-2.png"/>
                            </div>
                            <div class="flex">
            <span
                class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-danger-inverse ring-danger-light bg-danger">
             M
            </span>
                            </div>
                        </div>
                    </div>
                    <div class="card p-7.5">
                        <div class="flex items-center justify-between mb-3 lg:mb-6">
                            <div class="flex items-center justify-center size-[50px] rounded-lg bg-gray-100">
                                <img alt="" class="" src="assets/media/brand-logos/google-analytics.svg"/>
                            </div>
                            <span class="badge badge-outline">
            Upcoming
           </span>
                        </div>
                        <div class="flex flex-col mb-3 lg:mb-6">
                            <a class="text-lg font-media/brand text-gray-900 hover:text-primary-active mb-px" href="#">
                                Golden Gate Analytics
                            </a>
                            <span class="text-sm text-gray-700">
            Note-taking and organization app
           </span>
                        </div>
                        <div class="flex items-center gap-5 mb-3.5 lg:mb-7">
           <span class="text-sm text-gray-600">
            Start:
            <span class="text-sm font-medium text-gray-800">
             Mar 22
            </span>
           </span>
                            <span class="text-sm text-gray-600">
            End:
            <span class="text-sm font-medium text-gray-800">
             Dec 14
            </span>
           </span>
                        </div>
                        <div class="progress h-1.5 progress-gray-300 mb-4 lg:mb-8">
                            <div class="progress-bar" style="width: 100%">
                            </div>
                        </div>
                        <div class="flex -space-x-2">
                            <div class="flex">
                                <img
                                    class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                    src="assets/media/avatars/300-5.png"/>
                            </div>
                            <div class="flex">
                                <img
                                    class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                    src="assets/media/avatars/300-17.png"/>
                            </div>
                            <div class="flex">
                                <img
                                    class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                    src="assets/media/avatars/300-16.png"/>
                            </div>
                        </div>
                    </div>
                    <div class="card p-7.5">
                        <div class="flex items-center justify-between mb-3 lg:mb-6">
                            <div class="flex items-center justify-center size-[50px] rounded-lg bg-gray-100">
                                <img alt="" class="" src="assets/media/brand-logos/google-webdev.svg"/>
                            </div>
                            <span class="badge badge-success badge-outline">
            Completed
           </span>
                        </div>
                        <div class="flex flex-col mb-3 lg:mb-6">
                            <a class="text-lg font-media/brand text-gray-900 hover:text-primary-active mb-px" href="#">
                                Celestial SaaS
                            </a>
                            <span class="text-sm text-gray-700">
            CRM App application to HR efficienty
           </span>
                        </div>
                        <div class="flex items-center gap-5 mb-3.5 lg:mb-7">
           <span class="text-sm text-gray-600">
            Start:
            <span class="text-sm font-medium text-gray-800">
             Mar 14
            </span>
           </span>
                            <span class="text-sm text-gray-600">
            End:
            <span class="text-sm font-medium text-gray-800">
             Dec 25
            </span>
           </span>
                        </div>
                        <div class="progress h-1.5 progress-success mb-4 lg:mb-8">
                            <div class="progress-bar" style="width: 100%">
                            </div>
                        </div>
                        <div class="flex -space-x-2">
                            <div class="flex">
                                <img
                                    class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                    src="assets/media/avatars/300-6.png"/>
                            </div>
                            <div class="flex">
                                <img
                                    class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                    src="assets/media/avatars/300-23.png"/>
                            </div>
                            <div class="flex">
                                <img
                                    class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                    src="assets/media/avatars/300-12.png"/>
                            </div>
                            <div class="flex">
            <span
                class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-primary-inverse ring-primary-light bg-primary">
             +10
            </span>
                            </div>
                        </div>
                    </div>
                    <div class="card p-7.5">
                        <div class="flex items-center justify-between mb-3 lg:mb-6">
                            <div class="flex items-center justify-center size-[50px] rounded-lg bg-gray-100">
                                <img alt="" class="" src="assets/media/brand-logos/figma.svg"/>
                            </div>
                            <span class="badge badge-outline">
            Upcoming
           </span>
                        </div>
                        <div class="flex flex-col mb-3 lg:mb-6">
                            <a class="text-lg font-media/brand text-gray-900 hover:text-primary-active mb-px" href="#">
                                Nexus Design System
                            </a>
                            <span class="text-sm text-gray-700">
            Online discussion and forum platform
           </span>
                        </div>
                        <div class="flex items-center gap-5 mb-3.5 lg:mb-7">
           <span class="text-sm text-gray-600">
            Start:
            <span class="text-sm font-medium text-gray-800">
             Mar 17
            </span>
           </span>
                            <span class="text-sm text-gray-600">
            End:
            <span class="text-sm font-medium text-gray-800">
             Dec 08
            </span>
           </span>
                        </div>
                        <div class="progress h-1.5 progress-gray-300 mb-4 lg:mb-8">
                            <div class="progress-bar" style="width: 100%">
                            </div>
                        </div>
                        <div class="flex -space-x-2">
                            <div class="flex">
                                <img
                                    class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                    src="assets/media/avatars/300-14.png"/>
                            </div>
                            <div class="flex">
                                <img
                                    class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                    src="assets/media/avatars/300-3.png"/>
                            </div>
                            <div class="flex">
                                <img
                                    class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                    src="assets/media/avatars/300-19.png"/>
                            </div>
                            <div class="flex">
                                <img
                                    class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                    src="assets/media/avatars/300-9.png"/>
                            </div>
                        </div>
                    </div>
                    <div class="card p-7.5">
                        <div class="flex items-center justify-between mb-3 lg:mb-6">
                            <div class="flex items-center justify-center size-[50px] rounded-lg bg-gray-100">
                                <img alt="" class="" src="assets/media/brand-logos/btcchina.svg"/>
                            </div>
                            <span class="badge badge-primary badge-outline">
            In Progress
           </span>
                        </div>
                        <div class="flex flex-col mb-3 lg:mb-6">
                            <a class="text-lg font-media/brand text-gray-900 hover:text-primary-active mb-px" href="#">
                                Neptune App
                            </a>
                            <span class="text-sm text-gray-700">
            Team messaging and collaboration
           </span>
                        </div>
                        <div class="flex items-center gap-5 mb-3.5 lg:mb-7">
           <span class="text-sm text-gray-600">
            Start:
            <span class="text-sm font-medium text-gray-800">
             Mar 09
            </span>
           </span>
                            <span class="text-sm text-gray-600">
            End:
            <span class="text-sm font-medium text-gray-800">
             Dec 23
            </span>
           </span>
                        </div>
                        <div class="progress h-1.5 progress-primary mb-4 lg:mb-8">
                            <div class="progress-bar" style="width: 35%">
                            </div>
                        </div>
                        <div class="flex -space-x-2">
                            <div class="flex">
                                <img
                                    class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                    src="assets/media/avatars/300-21.png"/>
                            </div>
                            <div class="flex">
                                <img
                                    class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                    src="assets/media/avatars/300-32.png"/>
                            </div>
                            <div class="flex">
                                <img
                                    class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                    src="assets/media/avatars/300-2.png"/>
                            </div>
                            <div class="flex">
            <span
                class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-success-inverse ring-success-light bg-success">
             +1
            </span>
                            </div>
                        </div>
                    </div>
                    <div class="card p-7.5">
                        <div class="flex items-center justify-between mb-3 lg:mb-6">
                            <div class="flex items-center justify-center size-[50px] rounded-lg bg-gray-100">
                                <img alt="" class="" src="assets/media/brand-logos/patientory.svg"/>
                            </div>
                            <span class="badge badge-outline">
            Upcoming
           </span>
                        </div>
                        <div class="flex flex-col mb-3 lg:mb-6">
                            <a class="text-lg font-media/brand text-gray-900 hover:text-primary-active mb-px" href="#">
                                SparkleTech
                            </a>
                            <span class="text-sm text-gray-700">
            Meditation and relaxation app
           </span>
                        </div>
                        <div class="flex items-center gap-5 mb-3.5 lg:mb-7">
           <span class="text-sm text-gray-600">
            Start:
            <span class="text-sm font-medium text-gray-800">
             Mar 14
            </span>
           </span>
                            <span class="text-sm text-gray-600">
            End:
            <span class="text-sm font-medium text-gray-800">
             Dec 21
            </span>
           </span>
                        </div>
                        <div class="progress h-1.5 progress-gray-300 mb-4 lg:mb-8">
                            <div class="progress-bar" style="width: 100%">
                            </div>
                        </div>
                        <div class="flex -space-x-2">
                            <div class="flex">
                                <img
                                    class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                    src="assets/media/avatars/300-4.png"/>
                            </div>
                            <div class="flex">
                                <img
                                    class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                    src="assets/media/avatars/300-2.png"/>
                            </div>
                            <div class="flex">
            <span
                class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-success-inverse ring-success-light bg-success">
             K
            </span>
                            </div>
                        </div>
                    </div>
                    <div class="card p-7.5">
                        <div class="flex items-center justify-between mb-3 lg:mb-6">
                            <div class="flex items-center justify-center size-[50px] rounded-lg bg-gray-100">
                                <img alt="" class="" src="assets/media/brand-logos/jira.svg"/>
                            </div>
                            <span class="badge badge-success badge-outline">
            Completed
           </span>
                        </div>
                        <div class="flex flex-col mb-3 lg:mb-6">
                            <a class="text-lg font-media/brand text-gray-900 hover:text-primary-active mb-px" href="#">
                                EmberX CRM
                            </a>
                            <span class="text-sm text-gray-700">
            Commission-free stock trading
           </span>
                        </div>
                        <div class="flex items-center gap-5 mb-3.5 lg:mb-7">
           <span class="text-sm text-gray-600">
            Start:
            <span class="text-sm font-medium text-gray-800">
             Mar 01
            </span>
           </span>
                            <span class="text-sm text-gray-600">
            End:
            <span class="text-sm font-medium text-gray-800">
             Dec 13
            </span>
           </span>
                        </div>
                        <div class="progress h-1.5 progress-success mb-4 lg:mb-8">
                            <div class="progress-bar" style="width: 100%">
                            </div>
                        </div>
                        <div class="flex -space-x-2">
                            <div class="flex">
                                <img
                                    class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                    src="assets/media/avatars/300-12.png"/>
                            </div>
                            <div class="flex">
                                <img
                                    class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                    src="assets/media/avatars/300-20.png"/>
                            </div>
                            <div class="flex">
                                <img
                                    class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                    src="assets/media/avatars/300-3.png"/>
                            </div>
                            <div class="flex">
            <span
                class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-success-inverse ring-success-light bg-success">
             +5
            </span>
                            </div>
                        </div>
                    </div>
                    <div class="card p-7.5">
                        <div class="flex items-center justify-between mb-3 lg:mb-6">
                            <div class="flex items-center justify-center size-[50px] rounded-lg bg-gray-100">
                                <img alt="" class="" src="assets/media/brand-logos/plastic-scm.svg"/>
                            </div>
                            <span class="badge badge-outline">
            Upcoming
           </span>
                        </div>
                        <div class="flex flex-col mb-3 lg:mb-6">
                            <a class="text-lg font-media/brand text-gray-900 hover:text-primary-active mb-px" href="#">
                                LunaLink
                            </a>
                            <span class="text-sm text-gray-700">
            Meditation and relaxation app
           </span>
                        </div>
                        <div class="flex items-center gap-5 mb-3.5 lg:mb-7">
           <span class="text-sm text-gray-600">
            Start:
            <span class="text-sm font-medium text-gray-800">
             Mar 14
            </span>
           </span>
                            <span class="text-sm text-gray-600">
            End:
            <span class="text-sm font-medium text-gray-800">
             Dec 21
            </span>
           </span>
                        </div>
                        <div class="progress h-1.5 progress-gray-300 mb-4 lg:mb-8">
                            <div class="progress-bar" style="width: 100%">
                            </div>
                        </div>
                        <div class="flex -space-x-2">
                            <div class="flex">
                                <img
                                    class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                    src="assets/media/avatars/300-16.png"/>
                            </div>
                        </div>
                    </div>
                    <div class="card p-7.5">
                        <div class="flex items-center justify-between mb-3 lg:mb-6">
                            <div class="flex items-center justify-center size-[50px] rounded-lg bg-gray-100">
                                <img alt="" class="" src="assets/media/brand-logos/perrier.svg"/>
                            </div>
                            <span class="badge badge-primary badge-outline">
            In Progress
           </span>
                        </div>
                        <div class="flex flex-col mb-3 lg:mb-6">
                            <a class="text-lg font-media/brand text-gray-900 hover:text-primary-active mb-px" href="#">
                                TerraCrest App
                            </a>
                            <span class="text-sm text-gray-700">
            Video conferencing software
           </span>
                        </div>
                        <div class="flex items-center gap-5 mb-3.5 lg:mb-7">
           <span class="text-sm text-gray-600">
            Start:
            <span class="text-sm font-medium text-gray-800">
             Mar 22
            </span>
           </span>
                            <span class="text-sm text-gray-600">
            End:
            <span class="text-sm font-medium text-gray-800">
             Dec 28
            </span>
           </span>
                        </div>
                        <div class="progress h-1.5 progress-primary mb-4 lg:mb-8">
                            <div class="progress-bar" style="width: 55%">
                            </div>
                        </div>
                        <div class="flex -space-x-2">
                            <div class="flex">
                                <img
                                    class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                    src="assets/media/avatars/300-4.png"/>
                            </div>
                            <div class="flex">
                                <img
                                    class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                    src="assets/media/avatars/300-9.png"/>
                            </div>
                            <div class="flex">
            <span
                class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-primary-inverse ring-primary-light bg-primary">
             F
            </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex grow justify-center pt-5 lg:pt-7.5">
                    <a class="btn btn-link" href="#">
                        Show more projects
                    </a>
                </div>
            </div>
            <!-- end: cards -->
            <!-- begin: list -->
            <div id="projects_list">
                <div class="flex flex-col gap-5 lg:gap-7.5">
                    @foreach($customers as $customer)
                        <div class="card p-7" style="cursor: pointer;" onclick="showCustomer({{ $customer->id }})">
                            <div class="flex items-center flex-wrap justify-between gap-5">
                                <div class="flex items-center gap-3.5">
                                    <div class="flex items-center justify-center size-14 shrink-0 rounded-lg bg-gray-100">
                                        <img alt="" class="" src="{{ $customer->logo }}"/>
                                    </div>
                                    <div class="flex flex-col">
                                        <a class="text-lg font-media/brand text-gray-900 hover:text-primary-active mb-px"
                                           href="javascript:">
                                            {{ $customer->company_name }}
                                        </a>
                                        <span class="text-sm text-gray-700">
                                            CNPJ: {{ $customer->cnpj }}
                                        </span>
                                        <span class="text-sm text-gray-700">
                                            Fone: {{ $customer->phone }}
                                        </span>
                                    </div>
                                </div>
                                <div class="flex items-center flex-wrap gap-5 lg:gap-20">
                                    <div class="flex items-center flex-wrap gap-5 lg:gap-14">
                                     <span class="badge badge-primary badge-outline">
                                      In Progress
                                     </span>
                                        <div class="progress h-1.5 w-36 progress-primary">
                                            <div class="progress-bar" style="width: 55%">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-5 lg:gap-14">
                                        <div class="flex justify-end w-24">
                                            <div class="flex -space-x-2">
                                                <div class="flex">
                                                    <img
                                                        class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                        src="assets/media/avatars/300-4.png"/>
                                                </div>
                                                <div class="flex">
                                                    <img
                                                        class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
                                                        src="assets/media/avatars/300-2.png"/>
                                                </div>
                                                <div class="flex">
                <span
                    class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-primary-inverse ring-primary-light bg-primary">
                 S
                </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu" data-menu="true">
                                            <div class="menu-item" data-menu-item-offset="0, 10px"
                                                 data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown"
                                                 data-menu-item-trigger="click|lg:click">
                                                <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                                                    <i class="ki-filled ki-dots-vertical">
                                                    </i>
                                                </button>
                                                <div class="menu-dropdown menu-default w-full max-w-[200px]"
                                                     data-menu-dismiss="true">
                                                    <div class="menu-item">
                                                        <a class="menu-link"
                                                           href="html/demo8/account/home/settings-enterprise.html">
                  <span class="menu-icon">
                   <i class="ki-filled ki-setting-3">
                   </i>
                  </span>
                                                            <span class="menu-title">
                   Settings
                  </span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a class="menu-link"
                                                           href="html/demo8/account/members/import-members.html">
                  <span class="menu-icon">
                   <i class="ki-filled ki-some-files">
                   </i>
                  </span>
                                                            <span class="menu-title">
                   Import
                  </span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a class="menu-link" href="html/demo8/account/activity.html">
                  <span class="menu-icon">
                   <i class="ki-filled ki-cloud-change">
                   </i>
                  </span>
                                                            <span class="menu-title">
                   Activity
                  </span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item">
                                                        <a class="menu-link" data-modal-toggle="#report_user_modal"
                                                           href="#">
                  <span class="menu-icon">
                   <i class="ki-filled ki-dislike">
                   </i>
                  </span>
                                                            <span class="menu-title">
                   Report
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
                    @endforeach
                </div>
            </div>
            <!-- end: list -->
        </div>
        <!-- end: projects -->
    </div>
    <!-- End of Container -->
    <!-- Footer -->
    <footer class="footer">
        <!-- Container -->
        <div class="container-fixed">
            <div class="flex flex-col md:flex-row justify-center md:justify-between items-center gap-3 py-5">
                <div class="flex order-2 md:order-1 gap-2 font-normal text-2sm">
         <span class="text-gray-500">
          2024©
         </span>
                    <a class="text-gray-600 hover:text-primary" href="https://keenthemes.com">
                        Keenthemes Inc.
                    </a>
                </div>
                <nav class="flex order-1 md:order-2 gap-4 font-normal text-2sm text-gray-600">
                    <a class="hover:text-primary" href="https://keenthemes.com/metronic/tailwind/docs">
                        Docs
                    </a>
                    <a class="hover:text-primary" href="https://1.envato.market/Vm7VRE">
                        Purchase
                    </a>
                    <a class="hover:text-primary"
                       href="https://keenthemes.com/metronic/tailwind/docs/getting-started/license">
                        FAQ
                    </a>
                    <a class="hover:text-primary" href="https://devs.keenthemes.com">
                        Support
                    </a>
                    <a class="hover:text-primary"
                       href="https://keenthemes.com/metronic/tailwind/docs/getting-started/license">
                        License
                    </a>
                </nav>
            </div>
        </div>
        <!-- End of Container -->
    </footer>
    <!-- End of Footer -->
</main>
<script src="js/redirect.js"></script>
