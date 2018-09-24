@include('students.template.partials.header')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @yield('content')
        </div>
    </div>
</div>
@include('students.template.partials.footer')