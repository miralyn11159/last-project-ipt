<nav class="d-flex align-items-center justify-content-around bg-primary">

    <h2 class="p-2 text-white" style="font-size:23px; font-weight:400;">Social App</h2>

    <div class="ctext-white d-flex align-items-center justify-content-around" id="navbarSupportedContent">
        <ul class=" d-flex align-items-center justify-content-around links" style="list-style: none;">
            <li class="nav-item links">
                <a class="nav-link text-white {{ 'dashboard' == request()->path() ? 'active' : '' }}"
                    href="{{ '/dashboard' }}">dashboard</a>
            </li>
            <li class="nav-item links">
                <a class="nav-link text-white {{ 'recent-post' == request()->path() ? 'active' : '' }}"
                    href="{{ '/recent-post' }}">Post</a>
            </li>


            <li class="nav-item">
                <a class="nav-link text-dark" style="color: red" href="{{ '/logout' }}">Sign out</a>
            </li>
    </div>
</nav>

<style>
    .links {
        margin-left: 10px;
        margin-right: 10px;
    }

    #profile-name a {
        text-decoration: none;
        color: rgb(225, 222, 222);
    }

    #profile-name a:hover {
        background-color: rgba(255, 255, 255, 0);

    }

    .navbar-nav a {
        margin-left: 20px;
        margin-right: 20px;
        border-radius: 5px;
        width: 120px;
        margin: 5px;
        text-align: center;
    }

    #select {
        color: dimgray;
    }


    #select2 li:hover {
        background-color: rgb(17, 162, 172);
    }
</style>
