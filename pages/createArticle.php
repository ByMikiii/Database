<?php include('../parts/header.php') ?>
        <div class="register">
        <h1>Create Atricle</h1>
        <br>
        <form action="../phpscripts/createArticleScript.php" method="POST">
            <input type="text" name="title" id="art-title" placeholder="Title" required>
            <br>
            <input type="text" name="autor" id="art-autor" placeholder="Autor" required>
            <br>
            <textarea name="articletext" placeholder="Text"></textarea>
            <br>
            <input id="acticle-submit" type="submit" value="Create Article">
            <br>
        </form> 
</div>
<?php include('../parts/footer.php') ?>