<!DOCTYPE html>
<html lang="en">
    <x-head :page="$page"/>
    <body>
        <x-navbar />
        <div class="page-content">
            <div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">
                <div class="sidebar-content">
                    <x-user />
                    <x-mainmenu :page="$page"/>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="content-inner">
                    <x-header :page="$page" :breadcrumb="$breadcrumb"/>
                    <div class="content">
                        @yield('content')
                    </div>
                    <x-footer />
                </div>
            </div>
        </div>
    </body>
</html>
