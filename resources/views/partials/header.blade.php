<header>
    <div class="container">
        <div class="row">
            <div class="logo">
                <img class="img-fluid" width="60" src="{{ Vite::asset('resources\img\Netflix-logo-768x432.png') }}"
                    alt="">
            </div>
            <div class="nav">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link text-bg-dark" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-bg-dark" href="{{ route('movies') }}">Movies</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<style scoped>
    header {
        height: 100px;
        background-color: rgb(49, 49, 49);
    }
</style>
