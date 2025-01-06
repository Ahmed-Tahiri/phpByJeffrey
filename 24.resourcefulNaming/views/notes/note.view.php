<?php
require("views/partials/head.php");
require("views/partials/navbar.php");
?>

<div class="p-5 text-center bg-body-tertiary rounded-3">
    <h1 class="text-body-emphasis"><?= $heading ?> Page</h1>
    <div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog" id="modalSheet">
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-4 shadow">
                <div class="modal-header border-bottom-0">
                    <h1 class="modal-title fs-5">Your Note:</h1>
                </div>
                <div class="modal-body py-0">
                    <p><?= htmlspecialchars($note['note']) ?></p>
                </div>
                <div class="modal-footer flex-column align-items-stretch w-100 gap-2 pb-3 border-top-0">
                    <button type="button" class="btn btn-lg btn-secondary" data-bs-dismiss="modal"><a class="nav-link" href="/notes">Close</a></button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require("views/partials/footer.php"); ?>