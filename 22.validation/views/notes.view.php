<?php
require("partials/head.php");
require("partials/navbar.php");
?>
<div class="p-5 text-center bg-body-tertiary rounded-3">
    <h1 class="text-body-emphasis"><?= $heading ?> Page</h1>
    <p class="lead">
        "This is Basic Our <?= $heading ?> Page, Here Are Your Written Notes"
    </p>
    <div class="d-flex flex-column p-4 gap-4 py-md-5 align-items-center justify-content-center">
        <button class="btn btn-primary"><a class="nav-link" href="notes/create">Create New Note</a></button>
        <div class="list-group">
            <?php foreach ($notes as $note): ?>
                <a href="/note?id=<?= $note['id'] ?>" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                    <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
                    <div class="d-flex gap-2 w-100 justify-content-between">
                        <div class="d-flex justify-content-start flex-column align-items-start">
                            <h6 class="mb-0">Your Note:</h6>
                            <p class="mb-0 opacity-75"><?= htmlspecialchars($note['note']) ?></p>
                        </div>
                        <small class="opacity-50 text-nowrap">now</small>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php require("partials/footer.php"); ?>