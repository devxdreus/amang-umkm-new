<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
  <base href="../">
  <title>Amang UMKM</title>
  <meta charset="utf-8" />
  <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
  <link rel="shortcut icon" href="{{ asset('media/logos/favicon.ico') }}" />
  <!--begin::Fonts-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
  <!--end::Fonts-->
  <!--begin::Page Vendor Stylesheets(used by this page)-->
  <link href="{{ asset('plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('plugins/custom/vis-timeline/vis-timeline.bundle.css') }}" rel="stylesheet" type="text/css" />
  <!--end::Page Vendor Stylesheets-->
  <!--begin::Global Stylesheets Bundle(used by all pages)-->
  <link href="{{ asset('plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
  <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-tablet-and-mobile-fixed aside-enabled">
  <!--begin::Main-->
  <!--begin::Root-->
  <div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
      <!--begin::Aside-->
      <x-layout.admin.aside />
      <!--end::Aside-->
      <!--begin::Wrapper-->
      <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
        <!--begin::Header-->
        <x-layout.admin.header />
        <!--end::Header-->
        <!--begin::Content-->
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
          <!--begin::Toolbar-->
          <div class="toolbar d-flex flex-stack mb-3 mb-lg-5" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack flex-wrap">
              <!--begin::Page title-->
              <div class="page-title d-flex flex-column me-5 py-2">
                <!--begin::Title-->
                <h1 class="d-flex flex-column text-dark fw-bolder fs-3 mb-0">{{ $title }}</h1>
                <!--end::Title-->
              </div>
              <!--end::Page title-->
            </div>
            <!--end::Container-->
          </div>
          <!--end::Toolbar-->
          <!--begin::Post-->
          <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
              <!--begin::Row-->
              {{ $slot }}
              <!--end::Row-->
            </div>
            <!--end::Container-->
          </div>
          <!--end::Post-->
        </div>
        <!--end::Content-->
        <!--begin::Footer-->
        <x-layout.admin.footer />
        <!--end::Footer-->
      </div>
      <!--end::Wrapper-->
    </div>
    <!--end::Page-->
  </div>
  <!--end::Root-->

  <!--begin::Scrolltop-->
  <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
    <span class="svg-icon">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1"
          transform="rotate(90 13 6)" fill="black" />
        <path
          d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
          fill="black" />
      </svg>
    </span>
    <!--end::Svg Icon-->
  </div>
  <!--end::Scrolltop-->

  <!--begin::Javascript-->
  <script>
    var hostUrl = "assets/";
  </script>
  <!--begin::Global Javascript Bundle(used by all pages)-->
  <script src="{{ asset('plugins/global/plugins.bundle.js') }}"></script>
  <script src="{{ asset('js/scripts.bundle.js') }}"></script>
  <!--end::Global Javascript Bundle-->
  <!--begin::Page Vendors Javascript(used by this page)-->
  <script src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}"></script>
  <script src="{{ asset('plugins/custom/vis-timeline/vis-timeline.bundle.js') }}"></script>
  <!--end::Page Vendors Javascript-->
  <!--begin::Page Custom Javascript(used by this page)-->
  <script src="{{ asset('js/widgets.bundle.js') }}"></script>
  <script src="{{ asset('js/custom/widgets.js') }}"></script>
  <script src="{{ asset('js/custom/apps/chat/chat.js') }}"></script>
  <script src="{{ asset('js/custom/utilities/modals/upgrade-plan.js') }}"></script>
  <script src="{{ asset('js/custom/utilities/modals/create-campaign.js') }}"></script>
  <script src="{{ asset('js/custom/utilities/modals/create-app.js') }}"></script>
  <script src="{{ asset('js/custom/utilities/modals/users-search.js') }}"></script>
  <!--end::Page Custom Javascript-->
  <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
