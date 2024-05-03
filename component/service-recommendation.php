<?php
    $start = rand(0, count($serviceData));
    for ($i = 0; $i < 5; $i++){
        if($start + $i >= count($serviceData)){
            $usedvalue = $start + $i - count($serviceData);
        }else $usedvalue = $start + $i;
?>
<li>
    <a href="<?php echo $sitehost ?>/<?php echo $serviceData[$usedvalue]["url"] ?>">
        <?php echo $serviceData[$usedvalue]["title"] ?>
        <i class="fa fa-angle-right"></i></a>
</li>
<?php } ?>