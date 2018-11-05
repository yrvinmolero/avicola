<!-- jQuery-->
<script type="text/javascript" src="/js/template/jquery.min.js"></script>
<!-- Bootstrap JavaScript-->
<script type="text/javascript" src="/js/template/bootstrap.min.js"></script>

<script type="text/javascript" src="/js/template/jquery.mCustomScrollbar.concat.min.js"></script>

<script type="text/javascript" src="/js/template/animo.min.js"></script>

<script type="text/javascript" src="/js/template/bootstrap-progressbar.min.js"></script>

<script type="text/javascript" src="/js/template/jquery.easypiechart.min.js"></script>

<script type="text/javascript" src="/js/template/toastr.min.js"></script>

<script type="text/javascript" src="/js/template/app.js"></script>

<script type="text/javascript" src="/js/template/toastr.js"></script>

<!-- Custom JS-->
<script type="text/javascript" src="/js/template/extra-demo.js"></script>

<script>
    @if (Session::has('message'))
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    var type = "{{ Session::get('alert-type') }}";
    switch (type) {
    case 'info':
            toastr.info("{{ Session::get('message') }}", "{{ Session::get('title') }}");
            break;
            case 'warning':
            toastr.warning("{{ Session::get('message') }}", "{{ Session::get('title') }}");
            break;
            case 'success':
            toastr.success("{{ Session::get('message') }}", "{{ Session::get('title') }}");
            break;
            case 'error':
            toastr.error("{{ Session::get('message') }}", "{{ Session::get('title') }}");
            break;
    }
    @endif

</script>