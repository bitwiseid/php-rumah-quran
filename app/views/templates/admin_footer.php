<!-- paste script di bawah ini -->
<script>
    function confirmDelete(o, t) {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: !0,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then(e => {
            e.isConfirmed && (window.location.href = "<?= BASEURL_ADMIN ?>/" + o + "/" + t)
        })
    }

    function confirmAction(o, t, e, n) {
        Swal.fire({
            title: "Are you sure?",
            text: e,
            icon: n,
            showCancelButton: !0,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes"
        }).then(e => {
            e.isConfirmed && (window.location.href = "<?= BASEURL_ADMIN ?>/" + o + "/" + t)
        })
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@9.0.3"></script>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
<!-- js -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="<?= BASEURL . "/js/tables.js" ?>"></script>
<script src="<?= BASEURL . "/js/charts.js" ?>"></script>

</body>

</html>