<?php
if(count($err)>0):?>
<div class=error style="width: 100%; height: 100%;">
<?php foreach($err as $error):?>
    <p style="width: 100%; height: 100%; text-align: right; color: red;"><?php echo $error ?></p>
    <?php endforeach ?>
</div>

<?php endif;?>
