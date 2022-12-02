<?php 
        if(get_sub_field('unique_id')){ 
        $unique_id = get_sub_field('unique_id');
        }
        else{ 
            $unique_id = uniqid('dubai_') ;
            }
?>

<section class="Title" id="<?php echo $unique_id ?>">
    <div class="container">
        test
    </div>
</section>

<?php if($styles_code = get_sub_field('styles_code')){ echo('
<style>
'.$styles_code.'
</style>
');
} ?>

<script>
    
    <?php if($pc_indents = get_sub_field('pc_indents')){ ?>
    if($('#<?php echo $unique_id ; ?>').width() > 500){
        <?php if($pc_indents['padding_top']){ ?>$('#<?php echo $unique_id ; ?>').css('padding-top', <?php echo $pc_indents['padding_top']; ?> );<?php } ?>
        <?php if($pc_indents['padding_bottom']){ ?>$('#<?php echo $unique_id ; ?>').css('padding-bottom', <?php echo $pc_indents['padding_bottom']; ?> );<?php } ?>
        <?php if($pc_indents['margin_top']){ ?>$('#<?php echo $unique_id ; ?>').css('margin-top', <?php echo $pc_indents['margin_top']; ?> );<?php } ?>
        <?php if($pc_indents['margin_bottom']){ ?>$('#<?php echo $unique_id ; ?>').css('margin-bottom', <?php echo $pc_indents['margin_bottom']; ?> );<?php } ?>
    }<?php } ?>
    
    <?php if($mob_indents = get_sub_field('mob_indents')){ ?>
    if($('#<?php echo $unique_id ; ?>').width() <= 500){
        <?php if($mob_indents['padding_top']){ ?>$('#<?php echo $unique_id ; ?>').css('padding-top', <?php echo $mob_indents['padding_top']; ?> );<?php } ?>
        <?php if($mob_indents['padding_bottom']){ ?>$('#<?php echo $unique_id ; ?>').css('padding-bottom', <?php echo $mob_indents['padding_bottom']; ?> );<?php } ?>
        <?php if($mob_indents['margin_top']){ ?>$('#<?php echo $unique_id ; ?>').css('margin-top', <?php echo $mob_indents['margin_top']; ?> );<?php } ?>
        <?php if($mob_indents['margin_bottom']){ ?>$('#<?php echo $unique_id ; ?>').css('margin-bottom', <?php echo $mob_indents['margin_bottom']; ?> );<?php } ?>
    }<?php } ?>

</script>