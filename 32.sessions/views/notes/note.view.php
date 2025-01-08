<?php
views("partials/head.php");
views("partials/navbar.php");
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
                <div class="modal-footer flex-row flex-wrap justify-content-center align-items-stretch w-100 gap-3 pb-3 border-top-0">
                    <button type="button" class="btn btn-lg btn-secondary" data-bs-dismiss="modal"><a class="nav-link px-2" href="/notes">Close</a></button>
                    <button class="btn m-0 p-0 ">
                        <a href="/note/edit?id=<?= $note['id'] ?>" class="d-flex justify-content-center align-items-center bg-primary text text-center text-light rounded fs-5 px-4 py-2 nav-link">Edit</a></button>
                    <form method="POST" class="form d-flex gap-3 ">
                        <input type='hidden' name="_method" id="method" value="DELETE">
                        <input type='hidden' name="noteId" id="note" value="<?= $_GET['id'] ?>">
                        <button type="submit" class="btn btn-lg btn-danger" data-bs-dismiss="modal">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php views("partials/footer.php"); ?>