<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <span class="fs-4 text-light"><?php
                                            if (urls('/') || urls('/home')) {
                                                echo "Home Page";
                                            } elseif (urls('/about')) {
                                                echo "About Page";
                                            } elseif (urls('/contact')) {
                                                echo "Contact Page";
                                            } else {
                                                echo "";
                                            }
                                            ?></span>
        </a>

        <ul class="nav nav-pills">
            <li class="nav-item"><a href="/" class="nav-link <?= urls('/') || urls('/home') ? 'active' : '' ?>" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="./about" class="nav-link <?= urls('/about') ? 'active' : ''  ?>">About</a></li>
            <li class="nav-item"><a href="./contact" class="nav-link <?= urls('/contact') ? 'active' : '' ?>">Contact</a></li>
        </ul>
    </header>
</div>