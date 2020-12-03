<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->
<head>
	<?php echo $this->load->view($head); ?>


<style type="text/css">
    #wp_petaku{ border:1px solid #ccc; padding: 10px; -webkit-box-shadow:0 0 7px rgba(0,0,0,0.3); -moz-box-shadow:0 0 7px rgba(0,0,0,0.3); box-shadow:0 0 7px rgba(0,0,0,0.3); }
    #petaket{ padding: 15px; border:1px solid #ccc; -webkit-box-shadow:0 0 7px rgba(0,0,0,0.3); -moz-box-shadow:0 0 7px rgba(0,0,0,0.3); box-shadow:0 0 7px rgba(0,0,0,0.3); margin-top: 20px; }
</style>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
//google maps GIS 1.1.b by hari tri untoro
//dibuat tanggal 02 Nop 2012
// var thn = decodeURIComponent("<?php if(isset($thn)){ echo rawurlencode($thn); }else{ echo '0'; } ?>");
// var jns = decodeURIComponent("<?php if(isset($thn)){ echo rawurlencode($jns); }else{ echo '0'; } ?>");
// var cat = decodeURIComponent("<?php if(isset($thn)){ echo rawurlencode($cat); }else{ echo '0'; } ?>");
// var divs = decodeURIComponent("<?php if(isset($thn)){ echo rawurlencode($divs); }else{ echo '0'; } ?>");
// var own = decodeURIComponent("<?php if(isset($thn)){ echo rawurlencode($own); }else{ echo '0'; } ?>");

var peta;
var pertama = 0;
var jenis = "Lain-Lain";
var no_spk = "";
var jenisx = new Array();
var judulx = new Array();
var lokasix = new Array();
var desx = new Array();
var i;
var url;
var gambar_tanda;
function peta_awal(){
    var jakarta = new google.maps.LatLng(-0.5822653680900857, 125.606689453125);
    var petaoption = {
        zoom: 6,
        center: jakarta,
        mapTypeId: google.maps.MapTypeId.ROADMAP
        };
    peta = new google.maps.Map(document.getElementById("petaku"),petaoption);
    google.maps.event.addListener(peta,'click',function(event){
        kasihtanda(event.latLng);
    });
    ambildatabase('awal');
}

function close_deskripsi(){
    $("#jendelainfo").fadeOut();
}

$(document).ready(function(){
    $("#tombol_simpan").click(function(){
        var x = $("#x").val();
        var y = $("#y").val();
        var judul = $("#judul").val();
        var des = $("#deskripsi").val();
        $("#loading").show();
        $.ajax({
            url: "simpanlokasi.php",
            data: "x="+x+"&y="+y+"&judul="+judul+"&des="+des+"&jenis="+jenis,
            cache: false,
            success: function(msg){
                alert(msg);
                $("#loading").hide();
                $("#x").val("");
                $("#y").val("");
                $("#judul").val("");
                $("#deskripsi").val("");
                ambildatabase('akhir');
            }
        });
    });
    $("#tutup").click(function(){
        $("#jendelainfo").fadeOut();
    });
});
// function kasihtanda(lokasi){
//     set_icon(jenis,no_spk);
//     tanda = new google.maps.Marker({
//             position: lokasi,
//             map: peta,
//             icon: gambar_tanda
//     });
//     $("#x").val(lokasi.lat());
//     $("#y").val(lokasi.lng());

// }

function set_icon(jenisnya,no_kt){
	
    gambar_tanda = '<?php echo base_url(); ?>assets/theme1/images/marker.png';

    
}

function ambildatabase(akhir){
    
    url = "<?php echo base_url(); ?>modul/peta_atm/ambildata";
    
    $.ajax({
        url: url,
        dataType: 'json',
        cache: false,
        success: function(msg){
            
            for(i=0;i<msg.wilayah.petak.length;i++){
                jenisx[i] = msg.wilayah.petak[i].jenis;
                judulx[i] = msg.wilayah.petak[i].judul;
                lokasix[i] = msg.wilayah.petak[i].lokasi;
                desx[i] = msg.wilayah.petak[i].deskripsi;

                set_icon(msg.wilayah.petak[i].jenis,msg.wilayah.petak[i].no_kt);
                var point = new google.maps.LatLng(
                    parseFloat(msg.wilayah.petak[i].x),
                    parseFloat(msg.wilayah.petak[i].y));
                tanda = new google.maps.Marker({
                    position: point,
                    map: peta,
                    icon: gambar_tanda,
                    optimized: false
                });
                setinfo(tanda,i);
            }
        }
    });
}

function setjenis(jns){
    jenis = jns;
}

function setinfo(petak, nomor){
    google.maps.event.addListener(petak, 'click', function() {
        $("#jendelainfo").fadeIn();
        $("#teksjenis").html(jenisx[nomor]);
        $("#teksjudul").html(judulx[nomor]);
        $("#tekslokasi").html(lokasix[nomor]);
        $("#teksdes").html(desx[nomor]);
    });
}
</script>
<style>
#jendelainfo{position:absolute;z-index:1000;margin-top:20px;
margin-left:150px;background-color:yellow;display:none;min-width: 300px;
    
    /* css3 drop shadow */
    -webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
    -moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
    
    /* css3 border radius */
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    
    background:#eee;
    /* styling of the dialog box, i have a fixed dimension for this demo  
    width:328px; */

}
#jendelainfo .dialog-content {
    /* style the content */
    text-align:left; 
    padding:10px; 
    margin:13px;
    color:#666; 
    font-family:arial;
    font-size:11px; 
}

#jendelainfo table{
    color:#666; 
    font-family:arial;
    font-size:11px; 
}

#jendelainfo a.button {
    /* styles for button */
    margin:10px auto 0 auto;
    text-align:center;
    display: block;
    width:50px;
    padding: 5px 10px 6px;
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    line-height: 1;
    
    /* button color */
    background-color: #e33100;
    
    /* css3 implementation :) */
    /* rounded corner */
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    
    /* drop shadow */
    -moz-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
    -webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
    
    /* text shaow */
    text-shadow: 0 -1px 1px rgba(0,0,0,0.25);
    border-bottom: 1px solid rgba(0,0,0,0.25);
    position: relative;
    cursor: pointer;
    
}
#jendelainfo a.button:hover {
    background-color: #c33100;    
}
/* extra styling */
#jendelainfo .dialog-content p {
    font-weight:700; margin:0;
}
#jendelainfo .dialog-content ul {
    margin:10px 0 10px 20px; 
    padding:0; 
    height:50px;
}
</style>


</head>
    <body onLoad="peta_awal()">
        <!-- HEADER -->
        <div id="box-header">
            <div class="box-main">
                <?php echo $this->load->view($menu); ?>
            </div>
        </div>
        <!-- [end] HEADER -->

        <!-- CONTENT -->
        <div id="box-content">
            <!-- breadcrumb -->
            <div id="breadcrumb">
                <div class="box-main">
                    <a href="<?php echo base_url()?>"><?php echo $text_home; ?></a> \ <?php echo $text_title; ?>
                </div>
            </div>
            <!-- [end] breadcrumb -->

            <div class="box-main mt-20">
                <div class="box-300 floated-left">
                    <?php foreach($contents_sidebar as $key => $content_sidebar): ?>
            
                    <?php echo ${$content_sidebar}; ?>

                    <?php endforeach ?> 
                </div>

                <div class="box-620 floated-right">
                    <?php echo $this->load->view($content); ?>
                </div>
            </div>
            <div class="klir"></div>
        </div>
        <!-- [end] CONTENT -->

        <!-- FOOTER -->
        <?php echo $this->load->view($footer); ?>
        <!-- [end] FOOTER -->

        <!-- Flexslider -->
        <script src="<?php echo base_url()?>assets/theme2/js/jquery.flexslider.min.js"></script>
        <script type="text/javascript">
        $(window).load(function(){
          $('#slideshow .flexslider').flexslider({
            animation: "slide",
          });
        });
        </script>

    </body>
</html>