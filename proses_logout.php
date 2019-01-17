<?php
session_start();
session_destroy();
session_unset();
clearstatcache();
?>
<script type="text/javascript">
			alert('Anda Berhasil Logout!');
			window.location.href='index.php?home.php';
</script>