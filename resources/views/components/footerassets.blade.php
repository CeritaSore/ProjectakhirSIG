<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="/frontend/vendor/jquery/jquery.min.js"></script>
<script src="/frontend/vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="/frontend/assets/js/isotope.min.js"></script>
<script src="/frontend/assets/js/owl-carousel.js"></script>

<script src="/frontend/assets/js/tabs.js"></script>
<script src="/frontend/assets/js/popup.js"></script>
<script src="/frontend/assets/js/custom.js"></script>

<script>
    setTimeout(function() {
        $('.loader').fadeToggle();
    }, 1500);

    $("a[href='#top']").click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, "slow");
        return false;
    });
</script>
</body>

</html>
