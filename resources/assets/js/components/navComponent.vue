<template>
    <nav class="col-md-12 navbar navbar-expand-lg navbar-dark bg-primary">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">PayMatic</a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Monitor <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Device</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Report</a>
                </li>
            </ul>
            <button type="button" class="btn btn-danger">
                Alarm <span class="badge badge-light">4200</span>
            </button>
        </div>
    </nav>
</template>
<script>
    export default {
        name: 'nav-bar',
        props: ['name'],
        mounted: function () {
            console.log('mounted nav header component');
        }

    }
</script>