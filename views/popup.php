<div class="ctac" id="popup">
    <?php
    if ($_GET["text"] == "whatisblog") {
        echo "
            <h1>Help: What is a Blog?</h1>
            <p>Blog is short for Web Log. A Blog is like an online diary or journal. You can create your own free Blog and share them with your triends on JeckSpace.</p>
            ";
    }
    ?>
</div>

<script>
    window.location.href = "#popup";
    document.addEventListener("keydown", function(e) {
        if (e.keyCode == 27) {
            window.close();
        }
    });
</script>