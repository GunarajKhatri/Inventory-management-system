<!DOCTYPE html>
<html>
<head>
@include('layouts.head')
@section('jqueryfile')
@show
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    @include('layouts.header')
    @section('content')
    @show
    @include('layouts.sidebar')


</div>
@include('layouts.footer')

@include('layouts.jsc')
@section('jquerycontent')
@show

</body>
</html>
