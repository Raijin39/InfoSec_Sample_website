
    <script type="text/javascript">
        $(document).ready(function () {
            $(".col-a").click(function () {
                $('.collapse.show').collapse('hide');
            });
        });
    </script>

    <script>
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        })
    </script>
    <!-- SCRIPTS -->
</body>

</html>