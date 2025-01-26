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
          Clientes
        </h1>
        <div class="flex items-center flex-wrap gap-1 text-sm">
          <a class="text-gray-700 hover:text-primary" href="html/demo8.html">
            Home
          </a>
          <span class="text-gray-400 text-sm">
            /
          </span>
          <span class="text-gray-700">
            Informações Clientes
          </span>
          <span class="text-gray-400 text-sm">

          </span>
        </div>
      </div>
      <div class="flex items-center flex-wrap gap-1.5 lg:gap-2.5">
        <a class="btn btn-xs btn-icon-lg btn-light" href="html/demo8/account/home/get-started.html">
          <i class="ki-filled ki-exit-down !text-base">
          </i>
          Exportar Dados
        </a>
      </div>
    </div>
    <!-- End of Container -->
  </div>
  <!-- End of Toolbar -->
  <style>
    .hero-bg {
      background-image: url('{{ 'assets/media/images/2600x1200/bg-1.png' }}');
    }

    .dark .hero-bg {
      background-image: url('{{ 'assets/media/images/2600x1200/bg-1-dark.png' }}');
    }
  </style>
  <div class="bg-center bg-cover bg-no-repeat hero-bg">
    <!-- Container -->
    <div class="container-fixed">
      <div class="flex flex-col items-center gap-2 lg:gap-3.5 py-4 lg:pt-5 lg:pb-10">
        <img class="rounded-full border-3 size-[100px] shrink-0"
          src={{  $customer->logo ?? "assets/media/avatars/factory-vector.jpg" }} />
        <div class="flex items-center gap-1.5">
          <div class="text-lg leading-5 font-semibold text-gray-900">
            {{ $customer->external_id }} -
          </div>
          <div class="text-lg leading-5 font-semibold text-gray-900">
            {{ $customer->company_name }}
          </div>
          <svg class="text-primary" fill="none" height="16" viewbox="0 0 15 16" width="15"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M14.5425 6.89749L13.5 5.83999C13.4273 5.76877 13.3699 5.6835 13.3312 5.58937C13.2925 5.49525 13.2734 5.39424 13.275 5.29249V3.79249C13.274 3.58699 13.2324 3.38371 13.1527 3.19432C13.0729 3.00494 12.9565 2.83318 12.8101 2.68892C12.6638 2.54466 12.4904 2.43073 12.2998 2.35369C12.1093 2.27665 11.9055 2.23801 11.7 2.23999H10.2C10.0982 2.24159 9.99722 2.22247 9.9031 2.18378C9.80898 2.1451 9.72371 2.08767 9.65249 2.01499L8.60249 0.957487C8.30998 0.665289 7.91344 0.50116 7.49999 0.50116C7.08654 0.50116 6.68999 0.665289 6.39749 0.957487L5.33999 1.99999C5.26876 2.07267 5.1835 2.1301 5.08937 2.16879C4.99525 2.20747 4.89424 2.22659 4.79249 2.22499H3.29249C3.08699 2.22597 2.88371 2.26754 2.69432 2.34731C2.50494 2.42709 2.33318 2.54349 2.18892 2.68985C2.04466 2.8362 1.93073 3.00961 1.85369 3.20013C1.77665 3.39064 1.73801 3.5945 1.73999 3.79999V5.29999C1.74159 5.40174 1.72247 5.50275 1.68378 5.59687C1.6451 5.691 1.58767 5.77627 1.51499 5.84749L0.457487 6.89749C0.165289 7.19 0.00115967 7.58654 0.00115967 7.99999C0.00115967 8.41344 0.165289 8.80998 0.457487 9.10249L1.49999 10.16C1.57267 10.2312 1.6301 10.3165 1.66878 10.4106C1.70747 10.5047 1.72659 10.6057 1.72499 10.7075V12.2075C1.72597 12.413 1.76754 12.6163 1.84731 12.8056C1.92709 12.995 2.04349 13.1668 2.18985 13.3111C2.3362 13.4553 2.50961 13.5692 2.70013 13.6463C2.89064 13.7233 3.0945 13.762 3.29999 13.76H4.79999C4.90174 13.7584 5.00275 13.7775 5.09687 13.8162C5.191 13.8549 5.27627 13.9123 5.34749 13.985L6.40499 15.0425C6.69749 15.3347 7.09404 15.4988 7.50749 15.4988C7.92094 15.4988 8.31748 15.3347 8.60999 15.0425L9.65999 14C9.73121 13.9273 9.81647 13.8699 9.9106 13.8312C10.0047 13.7925 10.1057 13.7734 10.2075 13.775H11.7075C12.1212 13.775 12.518 13.6106 12.8106 13.3181C13.1031 13.0255 13.2675 12.6287 13.2675 12.215V10.715C13.2659 10.6132 13.285 10.5122 13.3237 10.4181C13.3624 10.324 13.4198 10.2387 13.4925 10.1675L14.55 9.10999C14.6953 8.96452 14.8104 8.79176 14.8887 8.60164C14.9671 8.41152 15.007 8.20779 15.0063 8.00218C15.0056 7.79656 14.9643 7.59311 14.8847 7.40353C14.8051 7.21394 14.6888 7.04197 14.5425 6.89749ZM10.635 6.64999L6.95249 10.25C6.90055 10.3026 6.83864 10.3443 6.77038 10.3726C6.70212 10.4009 6.62889 10.4153 6.55499 10.415C6.48062 10.4139 6.40719 10.3982 6.33896 10.3685C6.27073 10.3389 6.20905 10.2961 6.15749 10.2425L4.37999 8.44249C4.32532 8.39044 4.28169 8.32793 4.25169 8.25867C4.22169 8.18941 4.20593 8.11482 4.20536 8.03934C4.20479 7.96387 4.21941 7.88905 4.24836 7.81934C4.27731 7.74964 4.31999 7.68647 4.37387 7.63361C4.42774 7.58074 4.4917 7.53926 4.56194 7.51163C4.63218 7.484 4.70726 7.47079 4.78271 7.47278C4.85816 7.47478 4.93244 7.49194 5.00112 7.52324C5.0698 7.55454 5.13148 7.59935 5.18249 7.65499L6.56249 9.05749L9.84749 5.84749C9.95296 5.74215 10.0959 5.68298 10.245 5.68298C10.394 5.68298 10.537 5.74215 10.6425 5.84749C10.6953 5.90034 10.737 5.96318 10.7653 6.03234C10.7935 6.1015 10.8077 6.1756 10.807 6.25031C10.8063 6.32502 10.7908 6.39884 10.7612 6.46746C10.7317 6.53608 10.6888 6.59813 10.635 6.64999Z"
              fill="currentColor">
            </path>
          </svg>
        </div>
        <div class="flex flex-wrap justify-center gap-1 lg:gap-4.5 text-sm">
          <div class="flex gap-1.25 items-center">
            <i class="ki-filled ki-abstract text-gray-500 text-sm">
            </i>
            <span class="text-gray-600 font-medium">
              {{ $customer->cnpj }}
            </span>
          </div>
          <div class="flex gap-1.25 items-center">
            <i class="ki-filled ki-geolocation text-gray-500 text-sm">
            </i>
            <span class="text-gray-600 font-medium">
              {{ $customer->city }}, {{ $customer->state }}
            </span>
          </div>
          <div class="flex gap-1.25 items-center">
            <i class="ki-filled ki-phone text-gray-500 text-sm">
            </i>
            <a class="text-gray-600 font-medium hover:text-primary">
              {{ $customer->phone }}
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Container -->
  </div>
  <!-- Container -->
  <div class="container-fixed">
    <div
      class="flex items-center flex-wrap md:flex-nowrap lg:items-end justify-between border-b border-b-gray-200 dark:border-b-coal-100 gap-3 lg:gap-6 mb-5 lg:mb-10">
      <div class="grid">
        <div class="scrollable-x-auto">
          <div class="menu gap-3" data-menu="true">
            <div
              class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-primary menu-item-here:border-b-primary here"
              data-menu-item-placement="bottom-start" data-menu-item-toggle="dropdown"
              data-menu-item-trigger="click|lg:hover">
              <div class="menu-link gap-1.5 pb-2 lg:pb-4 px-2" tabindex="0">
                <span
                  class="menu-title text-nowrap text-sm text-gray-700 menu-item-active:text-primary menu-item-active:font-medium menu-item-here:text-primary menu-item-here:font-medium menu-item-show:text-primary menu-link-hover:text-primary">
                  Geral
                </span>
                <span class="menu-arrow">
                  <i
                    class="ki-filled ki-down text-2xs text-gray-500 menu-item-active:text-primary menu-item-here:text-primary menu-item-show:text-primary menu-link-hover:text-primary">
                  </i>
                </span>
              </div>
            </div>


            <div
              class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-primary menu-item-here:border-b-primary">
              <a class="menu-link gap-1.5 pb-2 lg:pb-4 px-2" href="html/demo8/public-profile/works.html"
                tabindex="0">
                <span
                  class="menu-title text-nowrap font-medium text-sm text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-item-here:text-primary menu-item-here:font-semibold menu-item-show:text-primary menu-link-hover:text-primary">
                  DVRS
                </span>
              </a>
            </div>
            <div
              class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-primary menu-item-here:border-b-primary">
              <a class="menu-link gap-1.5 pb-2 lg:pb-4 px-2" href="html/demo8/public-profile/teams.html"
                tabindex="0">
                <span
                  class="menu-title text-nowrap font-medium text-sm text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-item-here:text-primary menu-item-here:font-semibold menu-item-show:text-primary menu-link-hover:text-primary">
                  Câmeras
                </span>
              </a>
            </div>
            <div
              class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-primary menu-item-here:border-b-primary">
              <a class="menu-link gap-1.5 pb-2 lg:pb-4 px-2" href="html/demo8/public-profile/network.html"
                tabindex="0">
                <span
                  class="menu-title text-nowrap font-medium text-sm text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-item-here:text-primary menu-item-here:font-semibold menu-item-show:text-primary menu-link-hover:text-primary">
                  Roteadores
                </span>
              </a>
            </div>
            <div
              class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-primary menu-item-here:border-b-primary">
              <a class="menu-link gap-1.5 pb-2 lg:pb-4 px-2" href="html/demo8/public-profile/activity.html"
                tabindex="0">
                <span
                  class="menu-title text-nowrap font-medium text-sm text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-item-here:text-primary menu-item-here:font-semibold menu-item-show:text-primary menu-link-hover:text-primary">
                  Dispositivos
                </span>
              </a>
            </div>
            <div
              class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-primary menu-item-here:border-b-primary">
              <a class="menu-link gap-1.5 pb-2 lg:pb-4 px-2" href="html/demo8/public-profile/activity.html"
                tabindex="0">
                <span
                  class="menu-title text-nowrap font-medium text-sm text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-item-here:text-primary menu-item-here:font-semibold menu-item-show:text-primary menu-link-hover:text-primary">
                  Serial
                </span>
              </a>
            </div>
            <div
              class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-primary menu-item-here:border-b-primary">
              <a class="menu-link gap-1.5 pb-2 lg:pb-4 px-2" href="html/demo8/public-profile/activity.html"
                tabindex="0">
                <span
                  class="menu-title text-nowrap font-medium text-sm text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-item-here:text-primary menu-item-here:font-semibold menu-item-show:text-primary menu-link-hover:text-primary">
                  Plano de IP
                </span>
              </a>
            </div>
            <div
              class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-primary menu-item-here:border-b-primary">
              <a class="menu-link gap-1.5 pb-2 lg:pb-4 px-2" href="html/demo8/public-profile/activity.html"
                tabindex="0">
                <span
                  class="menu-title text-nowrap font-medium text-sm text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-item-here:text-primary menu-item-here:font-semibold menu-item-show:text-primary menu-link-hover:text-primary">
                  Projetos
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="flex items-center justify-end grow lg:grow-0 lg:pb-4 gap-2.5 mb-3 lg:mb-0">
        <a href="{{ route('customers.edit', ['id' => $customer->id]) }}" class="dropdown-toggle btn btn-sm btn-info btn-outline">
          <i class="ki-filled ki-user-edit">
          </i>
          Editar Informações
        </a>
        <div class="dropdown" data-dropdown="true" data-dropdown-placement="bottom-end"
          data-dropdown-trigger="click">
          <a href="{{ route('equipments.create', ['customer_id' => $customer->id]) }}" class="btn btn-sm btn-primary btn-outline">
            <i class="ki-filled ki-additem">
            </i>
            Adicionar Dispositivos
          </a>
          <div class="dropdown-content menu-default w-full max-w-[220px]">
            <div class="menu-item" data-dropdown-dismiss="true">
              <a class="menu-link" data-modal-toggle="#give_award_modal" href="#">
                <span class="menu-icon">
                  <i class="ki-filled ki-router">
                  </i>
                </span>
                <span class="menu-title">
                  DVRs
                </span>
              </a>
            </div>
            <div class="menu-item" data-dropdown-dismiss="true">
              <a class="menu-link" data-modal-toggle="#give_award_modal" href="#">
                <span class="menu-icon">
                  <i class="ki-filled ki-technology-4">
                  </i>
                </span>
                <span class="menu-title">
                  Câmeras
                </span>
              </a>
            </div>
            <div class="menu-item" data-dropdown-dismiss="true">
              <a class="menu-link" data-modal-toggle="#give_award_modal" href="#">
                <span class="menu-icon">
                  <i class="ki-filled ki-wlan">
                  </i>
                </span>
                <span class="menu-title">
                  Roteadores
                </span>
              </a>
            </div>
            <div class="menu-item" data-dropdown-dismiss="true">
              <a class="menu-link" data-modal-toggle="#give_award_modal" href="#">
                <span class="menu-icon">
                  <i class="ki-filled ki-laptop">
                  </i>
                </span>
                <span class="menu-title">
                  Dispositivos
                </span>
              </a>
            </div>
            <div class="menu-item" data-dropdown-dismiss="true">
              <a class="menu-link" data-modal-toggle="#give_award_modal" href="#">
                <span class="menu-icon">
                  <i class="ki-filled ki-laptop">
                  </i>
                </span>
                <span class="menu-title">
                  Projetos
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End of Container -->
  <!-- Container -->
  <div class="container-fixed">
    <!-- begin: grid -->

      <div class="grid gap-5 lg:gap-7.5">
          <div class="col-span-2">
              <div class="card">
                  <div class="card-body">
                      <div class="flex lg:px-10 py-1.5 gap-2">
                          {{-- Calculate the total count --}}
                          <div class="grid grid-cols-1 place-content-center flex-1 gap-1 text-center">
                        <span class="text-gray-900 text-2xl lg:text-2.5xl leading-none font-semibold">
                            {{ $equipmentsCount->sum('total_count') }}
                        </span>
                              <span class="text-gray-700 text-sm">
                            Dispositivos
                        </span>
                          </div>
                          <span class="[&:not(:last-child)]:border-r border-r-gray-300 my-1"></span>

                          @foreach ($equipmentsCount as $equipment)
                              <div class="grid grid-cols-1 place-content-center flex-1 gap-1 text-center">
                            <span class="text-gray-900 text-2xl lg:text-2.5xl leading-none font-semibold">
                                {{ $equipment->total_count }}
                            </span>
                                  <span class="text-gray-700 text-sm">
                                {{ $equipment->device_name }}
                            </span>
                              </div>
                              @if (!$loop->last)
                                  <span class="[&:not(:last-child)]:border-r border-r-gray-300 my-1">
                            </span>
                              @endif
                          @endforeach
                      </div>
                  </div>
              </div>
          </div>
      </div>





      </br></br>

    <div class="grid gap-5 lg:gap-7.5">
      <div class="card card-grid min-w-full">
        <div class="card-header py-5 flex-wrap">
          <h3 class="card-title">
            Dispositivos
          </h3>
        </div>
        <div class="card-body">
          <div data-datatable="true" data-datatable-page-size="10" class="datatable-initialized">
            <div class="scrollable-x-auto">
              <table class="table table-auto table-border" data-datatable-table="true" id="devices_table">
                <thead>
                  <tr>
                    <th class="w-[60px]">
                      <input class="checkbox checkbox-sm" data-datatable-check="true" type="checkbox">
                    </th>
                    <th class="min-w-[250px]">
                      <span class="sort asc">
                        <span class="sort-label text-gray-700 text-2sm font-normal">
                          Dispositivos
                        </span>
                        <span class="sort-icon">
                        </span>
                      </span>
                    </th>
                    <th class="min-w-[165px]">
                      <span class="sort">
                        <span class="sort-label text-gray-700 text-2sm font-normal">
                          Serial
                        </span>
                        <span class="sort-icon">
                        </span>
                      </span>
                    </th>
                    <th class="min-w-[165px]">
                      <span class="sort">
                        <span class="sort-label text-gray-700 text-2sm font-normal">
                          IP
                        </span>
                        <span class="sort-icon">
                        </span>
                      </span>
                    </th>
                    <th class="min-w-[165px]">
                      <span class="sort">
                        <span class="sort-label text-gray-700 text-2sm font-normal">
                          Data
                        </span>
                        <span class="sort-icon">
                        </span>
                      </span>
                    </th>
                    <th class="min-w-[80px]">
                      <span class="sort">
                        <span class="sort-label text-gray-700 text-2sm font-normal">
                          Garantia
                        </span>
                        <span class="sort-icon">
                        </span>
                      </span>
                    </th>
                    <th class="w-[60px]">
                    </th>
                    <th class="w-[60px]">
                    </th>
                  </tr>
                </thead>

                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                  data-datatable-spinner="true" style="display: none;">
                  <div
                    class="flex items-center gap-2 px-4 py-2 font-medium leading-none text-2sm border border-gray-200 shadow-default rounded-md text-gray-500 bg-light">
                    <svg class="animate-spin -ml-1 h-5 w-5 text-gray-600" xmlns="http://www.w3.org/2000/svg"
                      fill="none" viewBox="0 0 24 24">
                      <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="3">
                      </circle>
                      <path class="opacity-75" fill="currentColor"
                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                      </path>
                    </svg>
                    Carregando...
                  </div>
                </div>
                <tbody>
                    @foreach($equipments as $equipment)
                        <tr>
                            <td>
                                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox"
                                       value="1">
                            </td>
                            <td>
                                <div class="flex items-center gap-4">
                                    <div class="leading-none w-5 shrink-0">
                                        <i class="ki-filled ki-router text-gray-500 text-2xl">
                                        </i>
                                    </div>
                                    <div class="flex flex-col gap-0.5">
                          <span class="leading-none font-medium text-sm text-gray-900">
                            {{ $equipment->device_name }} - {{ $equipment->model }}
                          </span>
                                        <span class="text-2sm text-gray-700 font-normal">
                            {{ $equipment->brand }}
                          </span>
                                    </div>
                                </div>
                            </td>
                            <td class="text-sm text-gray-800 font-normal">
                                {{ $equipment->serial }}
                            </td>
                            <td class="text-sm text-gray-800 font-normal">
                                {{ $equipment->access_ip }}
                            </td>
                            <td class="text-sm text-gray-800 font-normal">
                                {{ $equipment->created_at->format('d/m/Y') }}
                            </td>
                            <td class="text-sm text-gray-800 font-normal">
                      <span class="badge badge-sm badge-outline badge-success">
                        Garantia
                      </span>
                            </td>
                            <td>
                                <a class="btn btn-sm btn-icon btn-clear btn-light" href="#">
                                    <i class="ki-filled ki-notepad-edit">
                                    </i>
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-sm btn-icon btn-clear btn-light" href="#">
                                    <i class="ki-filled ki-trash">
                                    </i>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                  <tr>
                    <td>
                      <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox"
                        value="2">
                    </td>
                    <td>
                      <div class="flex items-center gap-4">
                        <div class="leading-none w-5 shrink-0">
                          <i class="ki-filled ki-wlan text-gray-500 text-2xl">
                          </i>
                        </div>
                        <div class="flex flex-col gap-0.5">
                          <span class="leading-none font-medium text-sm text-gray-900">
                            AP 1230 AC MAX
                          </span>
                          <span class="text-2sm text-gray-700 font-normal">
                            Intelbras
                          </span>
                        </div>
                      </div>
                    </td>
                    <td class="text-sm text-gray-800 font-normal">
                      L56M61202FG5H
                    </td>
                    <td class="text-sm text-gray-800 font-normal">
                      234.0.155.191
                    </td>
                    <td class="text-sm text-gray-800 font-normal">
                      20/01/2010
                    </td>
                    <td class="text-sm text-gray-800 font-normal">
                      <span class="badge badge-sm badge-outline badge-danger">
                        vencida
                      </span>
                    </td>
                    <td>
                      <a class="btn btn-sm btn-icon btn-clear btn-light" href="#">
                        <i class="ki-filled ki-notepad-edit">
                        </i>
                      </a>
                    </td>
                    <td>
                      <a class="btn btn-sm btn-icon btn-clear btn-light" href="#">
                        <i class="ki-filled ki-trash">
                        </i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox"
                        value="2">
                    </td>
                    <td>
                      <div class="flex items-center gap-4">
                        <div class="leading-none w-5 shrink-0">
                          <i class="ki-filled ki-technology-4 text-gray-500 text-2xl">
                          </i>
                        </div>
                        <div class="flex flex-col gap-0.5">
                          <span class="leading-none font-medium text-sm text-gray-900">
                            VIP 1230 B
                          </span>
                          <span class="text-2sm text-gray-700 font-normal">
                            Intelbras
                          </span>
                        </div>
                      </div>
                    </td>
                    <td class="text-sm text-gray-800 font-normal">
                      L56M61202FG5H
                    </td>
                    <td class="text-sm text-gray-800 font-normal">
                      234.0.155.191
                    </td>
                    <td class="text-sm text-gray-800 font-normal">
                      20/01/2010
                    </td>
                    <td class="text-sm text-gray-800 font-normal">
                      <span class="badge badge-sm badge-outline badge-warning">
                        vencendo
                      </span>
                    </td>
                    <td>
                      <a class="btn btn-sm btn-icon btn-clear btn-light" href="#">
                        <i class="ki-filled ki-notepad-edit">
                        </i>
                      </a>
                    </td>
                    <td>
                      <a class="btn btn-sm btn-icon btn-clear btn-light" href="#">
                        <i class="ki-filled ki-trash">
                        </i>
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div
              class="card-footer justify-center md:justify-between flex-col md:flex-row gap-5 text-gray-600 text-2sm font-medium">
              <div class="flex items-center gap-2 order-2 md:order-1">
                Mostrar
                <select class="select select-sm w-16" data-datatable-size="true" name="perpage">
                  <option value="5">5</option>
                  <option value="10">10</option>
                  <option value="20">20</option>
                  <option value="30">30</option>
                  <option value="50">50</option>
                </select>
                por pagina
              </div>
              <div class="flex items-center gap-4 order-1 md:order-2">
                <span data-datatable-info="true">1-10 of 31</span>
                <div class="pagination" data-datatable-pagination="true">
                  <div class="pagination"><button class="btn disabled" disabled=""><i
                        class="ki-outline ki-black-left"></i></button><button class="btn active disabled"
                      disabled="">1</button><button class="btn">2</button><button class="btn">3</button><button
                      class="btn">...</button><button class="btn"><i
                        class="ki-outline ki-black-right"></i></button></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end: grid -->
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
<!-- End of Main -->
