<!-- modernizr js -->
<script src="{{ asset('frontend/js/modernizr-2.8.3.min.js') }}"></script>
<!-- jquery latest version -->
<script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
<!-- Bootstrap v4.4.1 js -->
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<!-- op nav js -->
<script src="{{ asset('frontend/js/jquery.nav.js') }}"></script>
<!-- owl.carousel js -->
<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
<!-- isotope.pkgd.min js -->
<script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
<!-- wow js -->
<script src="{{ asset('frontend/js/wow.min.js') }}"></script>
<!-- Skill bar js -->
<script src="{{ asset('frontend/js/skill.bars.jquery.js') }}"></script>
<!-- imagesloaded js -->
<script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js') }}"></script>
<!-- Slick js -->
<script src="{{ asset('frontend/js/slick.min.js') }}"></script>
<!-- waypoints.min js -->
<script src="{{ asset('frontend/js/waypoints.min.js') }}"></script>
<!-- magnific popup js -->
<script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
<!-- counterup.min js -->
<script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
<!-- contact form js -->
{{-- <script src="{{ asset('frontend/js/contact.form.js') }}"></script> --}}
<!-- main js -->
<script src="{{ asset('frontend/js/main.js') }}"></script>
<script src="{{ asset('js/method.js') }}"></script>
<script src="{{ asset('js/sweetalert.js') }}"></script>
<script>
    $('#contact-form').submit(function(e) {
        e.preventDefault();
        var name = $('#name').val();
        var email = $('#email').val();
        var message = $('#message').val();
        $.ajax({
            url: "{{ route('message') }}",
            type: "POST",
            data: {
                name: name,
                email: email,
                message: message,
            },
            success: function(response) {
                if (response.status == 'success') {
                    $('#contact-form')[0].reset();
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: response.message,
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: response.message,
                    });
                }
            }
        });
    });
</script>
