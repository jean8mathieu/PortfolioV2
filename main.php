<?php
/**
 * Created by IntelliJ IDEA.
 * User: Jean-Mathieu
 * Date: 1/17/2016
 * Time: 3:02 PM
 */


include("head.php");
include ("data.php");

?>

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <?php
            $i = 0;
            foreach($data as $d){
                if($d['picture'] != "img/sorry.jpg"){
                    ?>
            <li data-target="#carousel-example-generic" data-slide-to="<?=$i?>" <?php if($i == 0) echo 'class="active"' ?>></li>
            <?php $i++; }} ?>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <?php
            $i = 0;
            foreach($data as $d){ $i++;
                if($d['picture'] != "img/sorry.jpg"){
                ?>

            <div class="item <?php if($i == 1) echo "active" ?>">
                <img src="<?=$d['picture']?>" alt="<?=$d['title']?>">
                <div class="carousel-caption">
                    <?php if($d['link'] != null){ ?>
                    <a href="<?=$d['link']?>" style="text-decoration: none;" target="_blank"><h3><?=$d['title']?></h3></a>
                    <?php }else{ ?>
                        <h3><?=$d['title']?></h3>
                    <?php } ?>
                    <p><?=$d['sub_title']?></p>
                </div>
            </div>
            <?php }
            } ?>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Projects</h1>
            </div>
        </div>
        <!-- /.row -->


        <?php
        $i = 0;
        foreach($data as $d){ $i++?>
        <!-- Project <?=$i?> -->
        <div class="row">
            <div class="col-md-7">
                <img class="img-responsive portfolio" src="<?=$d['picture']?>" alt="">
            </div>
            <div class="col-md-5">
                <h3><?=$d['title']?></h3>
                <h4><?=$d['sub_title']?></h4>
                <p><?=$d['description']?></p>
                <?php if(strlen($d['link']) > 0){ ?>
                <a class="btn btn-primary" href="<?=$d['link']?>" target="_blank">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                <?php } ?>
            </div>
        </div>
        <!-- /.row -->

        <hr>
        <?php } ?>
        <br>
        <p>Last Updated On <?=date ("F d Y H:i:s.", filemtime("main.php"))?></p>
        <hr>
    <?php include ("foot.php");
