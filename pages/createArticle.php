<?php
$pathToIcon = '/Images/monkaH.png';
$title = 'Create Article';
include('../parts/header.php') 
?>
        <div class="register">
        <h1>Create Atricle</h1>
        <br>
        <form action="../phpscripts/createArticleScript.php" method="POST">
            <input  class='art-input' type="text" name="title" id="art-title" placeholder="Title" required autocomplete="off">
            <br>
            <input class='art-input' type="text" name="autor" id="art-autor" placeholder="Autor" required autocomplete="off">
            <br>
            <textarea class='art-textarea' name="articletext" placeholder="Text" required ></textarea>
            <br>
            <button class="submitbtn" type="submit">Create</button>
            <br>
        </form> 
</div>
<?php include('../parts/footer.php') ?>