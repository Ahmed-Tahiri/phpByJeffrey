<?php
views("partials/head.php");
views("partials/navbar.php");
?>
<div class="container">
    <form method="POST">
        <div class="input-group w-50 d-flex flex-column">
            <label class="text text-light fs-4" for="note">Enter Your Notes Description</label>
            <div class="d-flex flex-column">
                <span class="text-danger"><?= $errors['invalid Input'] ?? '' ?></span>
                <span class="text-success"><?= $successMsg ?></span>
            </div>

            <textarea id="note" name="note" class="w-100 rounded mt-2 py-2 px-3" style="resize: none; height:200px; overflow-y:scroll;" aria-label="With textarea" placeholder="Enter Your Note Here....." value="12"><?= $_POST['note'] ?? "" ?></textarea>
            <div class="mt-3 d-flex flex-row gap-3">
                <button type="submit" class="btn btn-primary w-25 h-100 rounded">Create</button>
                <button type="submit" class="btn btn-secondary w-25 h-100  rounded"> <a class="nav-link" href="/">Return Home</a></button>
            </div>
        </div>
    </form>
</div>
<?php views("partials/footer.php"); ?>