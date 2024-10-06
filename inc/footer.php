    <hr class="mt-5 border border-light  border-2 opacity-75">
	</main> <!-- /container -->

   
        <footer class="container mt-3">
            <?php $data = new DateTime("now", new DateTimeZone("America/Sao_Paulo"));?>
            <h5 class="text-white">&copy;2024 a <?php echo $data->format("Y"); ?> - Ricardo e Ian</h5>
        </footer>

    <script src="<?php echo BASEURL; ?>js/jquery-3.7.1.min.js"></script>
    <script src="<?php echo BASEURL; ?>js/bootrstap/bootstrap.bundle.min.js"></script>
    <script src="<?php echo BASEURL; ?>js/awesome/all.min.js"></script>
    <script src="<?php echo BASEURL; ?>js/main.js"></script>
</body>
</html>