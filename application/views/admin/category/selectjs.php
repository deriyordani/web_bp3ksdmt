
<script type="text/javascript">

    $(document).ready(function() {

        //Display Loading Image
        function Display_Load()
        {
            $("#loading").fadeIn(900, 0);
            $("#loading").html("<img src='<?php echo base_url() ?>img/bigLoader.gif' />");
        }
        //Hide Loading Image
        function Hide_Load()
        {
            $("#loading").fadeOut('normal');
        }
        ;

        //Default Starting Page Results

        $("#pagination li:first").css({'color': '#FF0084'}).css({'border': 'none'});

        Display_Load();

        $("#content").load("<?php echo base_url() ?>admin/menus/select_jenis/pilih", Hide_Load());


        //Pagination Click
        $("#dropdown").click(function() {

            //CSS Styles
            $("#dropdown")

            $(this)

            //Loading Data
            var pageNum = $(this).val();

            $("#content").load("<?php echo base_url() ?>admin/menus/select_jenis/" + pageNum);
        });


    });
</script>

<style>


    #loading { 
        width: 100%; 
        position: absolute;
    }

    #pagination
    {
        text-align:center;


    }
    #pagination li{	
        list-style: none; 
        float: left; 
        margin-right: 16px; 
        padding:5px; 
        border:solid 1px #dddddd;
        color:#0063DC; 
    }
    #pagination li:hover
    { 
        color:#FF0084; 
        cursor: pointer; 
    }


</style>
