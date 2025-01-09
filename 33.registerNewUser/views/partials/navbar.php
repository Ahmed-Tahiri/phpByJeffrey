<header class="d-flex flex-wrap justify-content-center">
    <nav class="container border-bottom  py-3 mb-4">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <p class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <i class="bi bi-person-circle text-light fs-2 mx-2"></i>
                <span class="fs-4 text-light">Hello, <?= $_SESSION['name'] ?? 'Guest' ?></span>
            </p>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="/" class="nav-link <?= urls('/') || urls('/home') ? 'active' : '' ?>" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="./about" class="nav-link <?= urls('/about') ? 'active' : ''  ?>">About</a></li>
                <li class="nav-item"><a href="./notes" class="nav-link <?= urls('/notes') || urls('/notes/create') ? 'active' : ''  ?>">Notes</a></li>
                <li class="nav-item"><a href="./contact" class="nav-link <?= urls('/contact') ? 'active' : '' ?>">Contact</a></li>
            </ul>
            <div class="text-end ms-5 <?php echo isset($_SESSION['email']) ? 'd-none' : 'd-block'; ?>">
                <button type="button" class="btn btn-outline-light me-2"><a href="#" class="nav-link">Login</a></button>
                <button type="button" class="btn btn-warning"><a href="/register" class="nav-link">Register</a></button>
            </div>
            <img src="https://github.com/mdo.png" alt="mdo" width="60" height="60" class="ms-3 rounded-circle <?php echo isset($_SESSION['email']) ? 'd-block' : 'd-none'; ?>">
        </div>
    </nav>
</header>