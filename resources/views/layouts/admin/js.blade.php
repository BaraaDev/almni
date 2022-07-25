<script src="{{asset('admin/vendor/global/global.min.js')}}"></script>
<script src="{{asset('admin/vendor/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>
@yield('js')
<script src="{{asset('admin/js/dashboard/dashboard-1.js')}}"></script>
<script src="{{asset('admin/js/custom.js')}}"></script>
<script src="{{asset('admin/js/dlabnav-init.js')}}"></script>
<script src="{{asset('admin/js/demo.js')}}"></script>
<script src="{{asset('admin/js/styleSwitcher.js')}}"></script>


<script>
    $(document).ready(function(){
        var form = $('#alert-form'),
            original = form.serialize()
        form.submit(function(){
            window.onbeforeunload = null
        })
        window.onbeforeunload = function(){
            if (form.serialize() != original)
                return '{{__('home.alert form')}}'
        }
    })
</script>
