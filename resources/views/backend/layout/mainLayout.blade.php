<!DOCTYPE html>
<html lang="en">
<head>
@include('backend.layout.header')
</head>

<body class="sb-nav-fixed">
@include('backend.layout.top-nav')
<div id="layoutSidenav">
@include('backend.layout.side-nav')
    <div id="layoutSidenav_content">
        @include('backend.layout.main-content')

        @include('backend.layout.footer')
    </div>
</div>

@include('backend.layout.script')
</body>
</html>
