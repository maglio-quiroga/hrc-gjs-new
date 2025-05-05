@if (session('success'))

<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
</div>

@endif

@if (session('error'))

<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('error') }}
</div>

@endif

<script>

    const alerts = document.querySelectorAll('.alert');

    function dismisibleAlert() {
        alerts.forEach(alert => alert.remove());
    };

    function delaySet(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    };

    async function exec() {
        await delaySet(2500);
        dismisibleAlert();
    }

    exec();

</script>