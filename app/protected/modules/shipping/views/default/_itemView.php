<div class="row">

    <div class="col-xs-4">
        <a href="/uploads/<?=$data->image?>" rel="shippings-photos" class="fancybox-image" title="<?=$data->title?>">
            <img src="/uploads/<?=$data->image?>" class="img-responsive" alt="<?=$data->image_attr_alt?>" title="<?=$data->image_attr_title?>">
        </a>
    </div>

    <div class="col-xs-8">
        <div class="font-h3 margin-h3"><?=$data->title?></div>
        <div>
            <?=$data->body?>
        </div>
    </div>

</div>
<hr>