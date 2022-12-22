<div id="header">
    <?php //echo "is mobile"; //include("page_mobile.phtml"); ?>
</div>

<!-- <div id="web">
    <?php echo "is web"; //include("page_web.phtml"); ?>
</div> -->

<style>
    /* #web {display: block;} */
    #header {
        width: 100%;
        height: 100%;
        background-color: red;
    }

    @media screen and (min-width: 320px) and (max-width: 760px) {
        /* #web {display: none;} */
        #header {
            background-color: blue;
        }
    }
</style>