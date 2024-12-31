<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <span class="fs-4 text-light"><?php
                                            if (urls('/')) {
                                                echo "Home Page";
                                            } elseif (urls('/about.php')) {
                                                echo "About Page";
                                            } elseif (urls('/contact.php')) {
                                                echo "Contact Page";
                                            } else {
                                                echo "";
                                            }
                                            ?></span>
        </a>

        <ul class="nav nav-pills">
            <li class="nav-item"><a href="/" class="nav-link <?= urls('/') ? 'active' : '' ?>" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="./about.php" class="nav-link <?= urls('/about.php') ? 'active' : ''  ?>">About</a></li>
            <li class="nav-item"><a href="./contact.php" class="nav-link <?= urls('/contact.php') ? 'active' : '' ?>">Contact</a></li>
        </ul>
    </header>
</div>