<script
        type="text/javascript">const fiFallbackImage = 'https://party-color-reservation-system.herokuapp.com/uploads/users/default.png';</script>
    <script type="text/javascript" src="https://party-color-reservation-system.herokuapp.com/js/admin.js"></script>
    <script type="text/javascript"
        src="https://party-color-reservation-system.herokuapp.com/js/util/fallback-image.js"></script>
    <script type="text/javascript">

        $(document).ready(function () {
            $(".col-a").click(function () {
                $('.collapse.show').collapse('hide');
            });
        });
    </script>
    <script type="text/javascript"
        src="https://party-color-reservation-system.herokuapp.com/js/util/confirm-leave.js"></script>

    <script>
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        })
    </script>
    <!-- SCRIPTS -->
</body>

</html>