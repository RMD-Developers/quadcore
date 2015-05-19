<!--slider-->
<?php foreach($JS_SRC as $j): ?>
<script src="<?php out(getFileVersion($j)); ?>" ></script>
<?php endforeach; ?>
<script>
      $.widget.bridge('uibutton', $.ui.button);
</script>
</body>
</html>