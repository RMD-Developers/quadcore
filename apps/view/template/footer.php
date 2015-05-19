<!--slider-->
<?php foreach($JS_SRC as $j): ?>
<script src="<?php out(getFileVersion($j)); ?>" ></script>
<?php endforeach; ?>
</body>
</html>