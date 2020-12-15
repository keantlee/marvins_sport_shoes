<div class="container-fluid">
    <div class="row">
        @include('layouts.admin_dashboard_sidebar')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-2">
            {{-- Main Contents --}}
            @yield("contents")

            @include("layouts.dashboard_footer")
        </main>
    </div>
</div>