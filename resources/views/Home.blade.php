<!DOCTYPE html>

<html lang="en">

<head>
    @include('Template.head')
    <title>Laravel Vue</title>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper" id="app">
        @include('Template.navbar')

        @include('Template.sidebar')

        <div class="content-wrapper">
            <div class="content">
                <router-view></router-view>
            </div>

        </div>


        <aside class="control-sidebar control-sidebar-dark">

            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>


        @include('Template.footer')
    </div>
    @include('Template.script')
</body>

</html>
