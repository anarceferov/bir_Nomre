<script src="{{asset('back/')}}/vendor/jquery/jquery.min.js"></script>
<script src="{{asset('back/')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('back/')}}/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="{{asset('back/')}}/js/sb-admin-2.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="{{asset('js/app.js')}}"></script>
<script>
    document.addEventListener("turbolinks:load", () => {
        Turbolinks.clearCache();
    })

    document.addEventListener("turbolinks:before-cache", function() {
        Turbolinks.clearCache();

    })

    document.addEventListener("turbolinks:load", function() {
        Turbolinks.clearCache();

})
</script>

@jquery
@toastr_js
@toastr_render
@yield('js')

</body>

</html>