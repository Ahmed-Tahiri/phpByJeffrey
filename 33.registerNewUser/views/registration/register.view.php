<?php
views("partials/head.php");
views("partials/navbar.php");
?>
<main class="form-signin w-100 mt-5">
    <div class="container d-flex justify-content-center align-items-center">
        <form method="POST" action="/register" class="form w-25 d-flex flex-column justify-content-center align-items-center gap-3">
            <h1 class="h3 mb-3 fw-normal text-light">Please Register Here</h1>
            <?php

            if (isset($_SESSION['errors'])) {
                foreach ($_SESSION['errors'] as $err) {
                    echo ' <span class="text-danger">';
                    echo $err;
                    echo '</span>';
                }
            } else {
                echo ' <span class="text-success">';
                echo $_SESSION['success']  ?? '';
                echo '</span>';
            }

            ?>
            <div class="form-floating w-100">
                <input name="username" type="text" class="form-control" id="username" placeholder="e.g, Joe">
                <label for="username">Username</label>
            </div>
            <div class="form-floating w-100">
                <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
                <label for="email">Email address</label>
            </div>
            <div class="form-floating w-100">
                <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                <label for="password">Password</label>
            </div>
            <div class=" mt-3 d-flex justify-content-end align-items-end gap-2 w-100">
                <button class="btn btn-warning fw-semibold py-2 w-100" type="submit">Register</button>
                <a href='/' class="btn btn-danger fw-semibold w-100 py-2">Cancel</a>
            </div>

        </form>
    </div>
</main>
<?php views("partials/footer.php"); ?>