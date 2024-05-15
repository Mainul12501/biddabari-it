<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Themezhub" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biddabari IT || {{ $title ?? '' }}</title>
    <!-- Custom CSS -->
    <link href="{{asset('frontendAsset')}}/assets/css/styles.css" rel="stylesheet" />
    <style>
        {{--@media (min-width: 993px) {--}}
        {{--    .header.header-transparent .nav-brand, .header.header-transparent .nav-brand:focus, .header.header-transparent .nav-brand:hover, .header.header-transparent .nav-menu>li>a {--}}
        {{--        {{ url()->current() == url('/') ? 'color: #ffffff;' : 'color: #0b0b0b;' }}--}}
        {{--    }--}}
        {{--}--}}
    </style>
    <style>
        .pagination>li>button, .pagination>li>button, .pagination>li>span {
            position: relative;
            float: left;
            padding: 0;
            margin: 5px;
            color: #5a6f7c;
            text-decoration: none;
            background-color: #fff;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            text-align: center;
            line-height: 40px;
            border: 1px solid #eaeff5;
        }
        .page-item { cursor: pointer }

        .property_video:before { background-color: transparent}
        .checkout-form-inputs .form-control {height: 38px}
    </style>

{{--    checkout page css--}}
    <style>
        .payment-method [type="radio"]:checked, [type="radio"]:not(:checked) {
            position: static!important;
        }

        .payment-method [type="radio"]:checked + label, [type="radio"]:not(:checked) + label {
            position: static!important;
            padding-left: 0px!important;
        }
    </style>
    @livewireStyles
</head>

<body>
<div id="main-wrapper">

    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->
    <!-- Start Navigation -->
    @include('front.include.header')
    <!-- End Navigation -->
    <div class="clearfix"></div>
    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->
{{--    @yield('content')--}}

    {{ $slot }}

    <!-- ============================ Footer Start ================================== -->
    <!-- ============================ Call To Action ================================== -->
    @include('front.include.footer')
    <!-- ============================ Footer End ================================== -->


    <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>

</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{asset('frontendAsset')}}/assets/js/jquery.min.js"></script>
<script src="{{asset('frontendAsset')}}/assets/js/popper.min.js"></script>
<script src="{{asset('frontendAsset')}}/assets/js/bootstrap.min.js"></script>
{{--<script src="{{asset('frontendAsset')}}/assets/js/select2.min.js"></script>--}}
<script src="{{asset('frontendAsset')}}/assets/js/slick.js"></script>
<script src="{{asset('frontendAsset')}}/assets/js/moment.min.js"></script>
{{--<script src="{{asset('frontendAsset')}}/assets/js/daterangepicker.js"></script>--}}
{{--<script src="{{asset('frontendAsset')}}/assets/js/summernote.min.js"></script>--}}
<script src="{{asset('frontendAsset')}}/assets/js/metisMenu.min.js"></script>
<script src="{{asset('frontendAsset')}}/assets/js/custom.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->


{{--checkout page js codes starts--}}
<script>
    $(document).on('click', '#checkBtn', function () {
        var couponCode = $('#couponCode').val();
        var courseId = $('input[name="course_id"]').val();
        var currentTotal = $('input[name="total_amount"]').val();
        $.ajax({
            url: "{{ route('front.check-coupon') }}",
            method: "GET",
            data: {coupon_code:couponCode, course_id: courseId, current_total:currentTotal},
            success: function (data) {
                console.log(data);
                if (data.status == 'true')
                {
                    toastr.success(data.message);
                    // $('input[name="total_amount"]').val(data.currentTotal);
                    // $('input[name="used_coupon"]').val(1);
                    $('input[name="coupon_code"]').val(couponCode);
                    $('input[name="coupon_amount"]').val(data.coupon.discount_amount);
                    $('#finalPrice').text(data.currentTotal);
                    $('#couponAmount').text(data.coupon.discount_amount);
                    $('#couponLi').removeClass('d-none');
                } else if (data.status == 'false')
                {
                    toastr.error(data.message);
                }
            }
        })
    })
</script>
<script>
    $(function () {
        showHidePaymentMethod();
    })
    $(document).on('click', 'input[name="payment_method"]', function () {
        showHidePaymentMethod();
    });
    function showHidePaymentMethod() {
        var paymentMethod = $('input[name="payment_method"]:checked').val();
        if (paymentMethod == 'cod')
        {
            if ($('.payment-cod').hasClass('d-none'))
            {
                $('.payment-cod').removeClass('d-none');
            }

        } else if (paymentMethod == 'ssl')
        {
            $('.payment-cod').addClass('d-none');
        }
    }
</script>
<script>
    $(document).on('click', '.show-checkout-form', function () {
        event.preventDefault();
        var authStatus = $(this).attr('data-auth-status');
        if (authStatus == 1)
        {
            $('.checkout-form').removeClass('d-none');
            showHidePaymentMethod();
            $(this).addClass('d-none');
        } else  {
            alert('Please login first to order this course. Thanks....');
        }
    })
</script>
{{--checkout page js codes ends--}}

@livewireScripts
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<x-livewire-alert::scripts />

</body>
</html>
