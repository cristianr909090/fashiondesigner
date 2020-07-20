<?php
require "upload_header_2.php";
// include_once 'includes/dbh_ateliers.inc.php';

//delete files in tmp dir for redo, undo
$files = glob('tmp/*'); // get all file names
foreach($files as $file){ // iterate files
  if(is_file($file))
    unlink($file); // delete file
}

?>

<style>
#pen_1, #pen_2, #pen_3, #pen_4, #pen_5{
    display: block;
    width: 300px;
    height: 50px;
    vertical-align: top;
    margin: 5px;
    border: 1px solid white;
    border-radius: 3px;
    box-shadow: 1px 1px white;
}

.slideshow-container {
    max-width: 500px;
    position: relative;
    margin: auto;
}
  

.carousel,
.carousel2,
.carousel_brush_color{
    padding-top: 0px;
    width: 400px;
    overflow: hidden;
    height: 108px;
    position: relative;
    left: 50px;
}
.carousel_brush_color {
    width: 100px;
    margin: 0 0 -40px;
}
  
.carousel2{
    height: 160px;
    left: 45px;
}
  
.btnPrevious, .btnNext,
.brush_btnPrevious,
.brush_btnNext {
    cursor: pointer;
    position: relative;
    top: -75px;
    left: -200px;
    width: auto;
    padding: 16px;
    color: black;
    font-size: 18px;
    transition: 0.1s ease;
    user-select: none;
    background: none;
    border:none;
}
  
  /* Position the "next button" to the right */
.btnNext {
    left: 200px;
}
.brush_btnPrevious{
    left: 40px;
    top: -76px;
    transform: rotate(90deg);

}
.brush_btnNext {
    left: -9px;
    top: 10px;
    transform: rotate(90deg);
}
  
.carousel ul,
.carousel2 ul,
.carousel_brush_color ul{
    position: relative;
    list-style: none;
    list-style-type: none;
    margin: 0;
    height: 150px;
    padding: 0;
}
  
.carousel ul li,
.carousel2 ul li,
.carousel_brush_color ul li{
    height: 80px;
    width: 80px;
    float: left;
    margin-top: 20px;
    margin-right: 1px;
    background: #ffffff;
    text-align: center;
    padding-bottom: 0px;
    border-radius:50%;
}
.carousel2 ul li{
    width: 140px;
}
.carousel_brush_color ul li{
    margin-top: 40px;
}
  
.dot {
    width: 40px;
    height: 40px;
    border-radius: 50%;
}
  
.more-info {
    font-size: 16px;
    margin: auto;
}
  
  /* .carousel ul li .dot{
    display: block;
} */
  
.carousel ul li .more-info {
    display: none;
}
  
.carousel ul li.expanded .color_circle,
.carousel_brush_color ul li.expanded .color_circle{
    border: 2px solid gray;
}
  
.carousel ul li.expanded .more-info {
    display: block;	
    margin-top: 0px;
}
  
.carousel2 ul li.expanded img,
.carousel2 ul li.expanded canvas{
    border: 2px solid black;
}
  
.slideshow-container2 {
    max-width: 500px;
    position: relative;
    margin: auto;
}
  
.btnPrevious2, .btnNext2 {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    margin-top: -25px;
    padding: 16px;
    color: black;
    font-size: 18px;
    transition: 0.1s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
    text-decoration: none;
}
  /* Position the "next button" to the right */
.btnNext2 {
    right: 0;
    border-radius: 3px 0 0 3px;
}
  
.btnPrevious2 {
    left: 0;
    border-radius: 0 3px 3px 0;
}
  
.dot2 {
    width: 40px;
    height: 40px;
    border-radius: 50%;
}
  
.more-info2 {
    font-size: 16px;
    margin: auto;
}
  
body * {
    text-align: center;
}
.first_form_part,
.second_form_part, 
.third_form_part{
    width: 500px;
    display: block;
    margin: 0px 10px 20px -3px;
    border: 1px solid black;
    border-radius: 10px;
}
.inner_container{
    width: 380px;
    margin: -20px auto;
}
.color_circle{
    width: 40px;
    height: 40px;
    background-color: #b3d9ff;
    border-radius: 50%;
    margin: 0 auto;
}
.form-title{
    margin: -12px auto;
    background: white;
    font-size: 22px;
    width: fit-content;
}
#paint_board { 
    border: 1px solid black; 
    cursor: crosshair;
    margin: 16px 0;
    border-radius: 8px;
}

#pen_1:hover,
#pen_2:hover,
#pen_3:hover,
#pen_4:hover,
#pen_5:hover,
.pen_selected{
    border: 1px solid #bbb!important;
    box-shadow: 1px 1px #bbb!important;
}
#pen_style {
    width: 150px;
    margin: 0 40px 0 0;
    display: inline-block;
    vertical-align: top;
}
/* .form_title {
    background: white;
    margin: -19px auto 5px;
    width: 100px;
    font-size: 30px;
} */
.primary_button {
    background: #54B0B0;
    border: none;
    color: white;
    font-size: 17px;
    border-radius: 3px;
    padding: 5px 150px;
    margin: 14px auto 5px;
    display: block;
}
.insert1 {
    margin-top: -80px;
}
.third_form_part .primary_button{
    display: inline-block;
}
#brush_div {
    width: 300px;
    display: inline-block;
}
.range_2 input[type="range"] {
    transform: rotate(270deg);
    top: -18px;
    left: 60px;
}
.brush-color-slideshow{
    top: 50px;
}
.feature_div div.feature_col{
    display: inline-block;
    border: 1px solid white;
    border-radius: 5px;
}
.feature_div div.feature_col img{
    width: 50px;
    height: 50px;
}
.feature_div div.feature_col:hover{
    cursor:pointer;
    border: 1px solid #bbb;
}
.without_border{
    border: none!important;
    box-shadow: none!important;
}
.right_container {
    padding-top: 120px;
}
.model_div {
    display: inline-block;
    width: 100px;
    height: 800px;
    padding-top: 100px;
}
.model_div img {
    height: 170px;
    width: 100px;
    margin: 10px 0;
}
.picture_include_div {
    display: inline-block;
    vertical-align: top;
}
.sample_icon_div img {
    width: 38px;
}
.sample_icon_div img,
.model_div img {
    border: 1px solid white;
    border-radius: 5px;
}
.sample_icon_div img:hover,
.model_div img:hover {
    border: 1px solid black;
}
.unavailable{
    opacity: 0.2;
    border: none!important;

}
.background_canvas{
    position: absolute;
    top: 83px;
    left: 277px;
}
.save_temp_canvas{
    position: absolute;
    top: 1000px;
    display: none;

}
.canvas-container{
    z-index: 1;
}
@media (min-width: 1000px) {
    .left_container, 
    .right_container{
        display: inline-block;
        vertical-align: top;
    }
}
</style>

<form action="includes/orderProcessTwo.inc.php" method="post" id="mainForm" name="mainForm">
    <div class="left_container">
        <div class="model_div">
            <img src="img/background1.png" onclick="loadbackground(1)">
            <img src="img/background2.png" onclick="loadbackground(2)">
            <img src="img/background3.png" onclick="loadbackground(3)">
            <img src="img/background4.png" onclick="loadbackground(4)">
        </div>
        <div class="picture_include_div">
            <div class="sample_icon_div">
                <img src="img/sample_img_1.png" onclick="loadsample(1)">
                <img src="img/sample_img_2.png" onclick="loadsample(2)">
                <img src="img/sample_img_3.png" onclick="loadsample(3)">
                <img src="img/sample_img_4.png" onclick="loadsample(4)">
                <img src="img/sample_img_5.png" onclick="loadsample(5)">
                <img src="img/sample_img_6.png" onclick="loadsample(6)">
                <img src="img/sample_img_7.png" onclick="loadsample(7)">
                <img src="img/sample_img_8.png" onclick="loadsample(8)">
                <img src="img/sample_img_9.png" onclick="loadsample(9)">
                <img src="img/sample_img_10.png" onclick="loadsample(10)">
                <img src="img/sample_img_11.png" onclick="loadsample(11)">
            </div>
            <canvas id="paint_board" width="500" height="800"></canvas>
            
        </div>
    </div>
    <canvas id="background_canvas" width="500" height="800" class="background_canvas"></canvas>
    <canvas id="save_temp_canvas" width="500" height="800" class="save_temp_canvas"></canvas>
    <div class="right_container">
        <div class="feature_div">
            <div class="feature_col draw_input unavailable" id="undo_img" onclick="feature_undo()">
                <img src="img/undo.png">
            </div>
            <div class="feature_col draw_input unavailable" id="redo_img" onclick="feature_redo()">
                <img src="img/redo.png">
            </div>
            <!-- pen 6 is eraser -->
            <div class="feature_col draw_input" id="pen_6" onclick="pen_selected(6)" >
                <img src="img/eraser.png" style="margin: 0 10px; width: 70px">
            </div>
            <div class="feature_col draw_input" onclick="document.getElementById('image-chooser').click();">
                <img src="img/upload_img.png" style="width: 60px">
            </div>
        </div>
        <div class="first_form_part">
            <!-- <p class="form_title">Brushes</p> -->
            <div id="brush_div">
                <img id="pen_1" src="img/brush1.png" class="draw_input" onclick="pen_selected(1)">
                <img id="pen_2" src="img/brush2.png" class="draw_input" onclick="pen_selected(2)">
                <img id="pen_3" src="img/brush3.png" class="draw_input" onclick="pen_selected(3)">
                <img id="pen_4" src="img/brush4.png" class="draw_input" onclick="pen_selected(4)">
                <img id="pen_5" src="img/brush5.png" class="draw_input" onclick="pen_selected(5)">
            </div>
            <div id="pen_style">
                <div class="slideshow-container brush-color-slideshow" >
                    
                    <!-- <a href="javascript:void(0);" class="btnPrevious">&#10094;</a>
                    <a href="javascript:void(0);" class="btnNext">&#10095;</a> -->
                    <div class="carousel_brush_color">
                        <ul>
                            <li><div class="color_circle" style=" background-color: #1E90FF;"></div></li>
                            <li><div class="color_circle" style=" background-color: #FF3E96;"></div></li>
                            <li><div class="color_circle" style=" background-color: #FFC0CB;"></div></li>
                            <li><div class="color_circle" style=" background-color: #FF3E96;"></div></li>
                            <li><div class="color_circle" style=" background-color: #b3d9ff;"></div></li>
                            <li><div class="color_circle" style=" background-color: #0073e6;"></div></li>
                            <li><div class="color_circle" style=" background-color: #ffb3e6;"></div></li>
                            <li><div class="color_circle" style=" background-color: #b30077;"></div></li>
                            <li><div class="color_circle" style=" background-color: #4d0033;"></div></li>
                            <li><div class="color_circle" style=" background-color: #b82e8a;"></div></li>
                            <li><div class="color_circle" style=" background-color: #f5d6eb;"></div></li>
                            <li><div class="color_circle" style=" background-color: #d98cd9;"></div></li>
                        </ul>
                    </div>
                    <button type="button" id="brush_color_btnPrevious" class="brush_btnPrevious" onclick="move_color_carousel_left()">&#10094;</button>
                    <button type="button" id="brush_color_btnNext" class="brush_btnNext" onclick="move_color_carousel_right()">&#10095;</button>
                </div>
                <div class="range_2">
                    <input id="brush_color_range" type="range" min="0" max="99" value="99" ">
                </div>

                <div class="range_1">
                    <input id="thicknessRange" type="range" min="1" max="10" value="1" onchange="changeThickness(this.value)">
                </div>
                <!-- <input class="jscolor" value="000000" onchange="changeBrushColor(this.value)"> -->
                
            </div>
        </div>
        
        <div class="second_form_part">
            <!-- <p class="form_title">Texture</p> -->
            <div class="insert">
                <!-- <h4>Wähle hier eine passende Farbe aus</h4>
                <div class="inner_container">
                    <p style="font-size:12px;">Wähle aus unserem Farbspektrum deine gewünschte Farbe aus.</p>
                </div>  -->
                
                <div class="slideshow-container">
                    
                    <!-- <a href="javascript:void(0);" class="btnPrevious">&#10094;</a>
                    <a href="javascript:void(0);" class="btnNext">&#10095;</a> -->
                    <div class="carousel">
                        <ul>
                            <li><input type="radio" id="color1" name="color" value="1E90FF" onclick="pattern_color_radio_click(this)"><br><div class="color_circle" style=" background-color: #1E90FF;"></div><span class="more-info">meerblau</span></li>
                            <li><input type="radio" id="color2" name="color" value="FF3E96" onclick="pattern_color_radio_click(this)"><br><div class="color_circle" style=" background-color: #FF3E96;"></div><span class="more-info">fuchsia</span></li>
                            <li><input type="radio" id="color3" name="color" value="FFC0CB" onclick="pattern_color_radio_click(this)"><br><div class="color_circle" style=" background-color: #FFC0CB;"></div><span class="more-info">magnolia</span></li>
                            <li><input type="radio" id="color4" name="color" value="FF3E96" onclick="pattern_color_radio_click(this)"><br><div class="color_circle" style=" background-color: #FF3E96;"></div><span class="more-info">pink</span></li>
                            <li><input type="radio" id="color5" name="color" value="b3d9ff" onclick="pattern_color_radio_click(this)"><br><div class="color_circle" style=" background-color: #b3d9ff;"></div><span class="more-info">lightblue</span></li>
                            <li><input type="radio" id="color6" name="color" value="0073e6" onclick="pattern_color_radio_click(this)"><br><div class="color_circle" style=" background-color: #0073e6;"></div><span class="more-info">royalblau</span></li>
                            <li><input type="radio" id="color7" name="color" value="ffb3e6" onclick="pattern_color_radio_click(this)"><br><div class="color_circle" style=" background-color: #ffb3e6;"></div><span class="more-info">rosa</span></li>
                            <li><input type="radio" id="color8" name="color" value="b30077" onclick="pattern_color_radio_click(this)"><br><div class="color_circle" style=" background-color: #b30077;"></div><span class="more-info">beere</span></li>
                            <li><input type="radio" id="color9" name="color" value="4d0033" onclick="pattern_color_radio_click(this)"><br><div class="color_circle" style=" background-color: #4d0033;"></div><span class="more-info">dark violet</span></li>
                            <li><input type="radio" id="color10" name="color" value="b82e8a" onclick="pattern_color_radio_click(this)"><br><div class="color_circle" style=" background-color: #b82e8a;"></div><span class="more-info">beere</span></li>
                            <li><input type="radio" id="color11" name="color" value="f5d6eb" onclick="pattern_color_radio_click(this)"><br><div class="color_circle" style=" background-color: #f5d6eb;"></div><span class="more-info">puder</span></li>
                            <li><input type="radio" id="color12" name="color" value="d98cd9" onclick="pattern_color_radio_click(this)"><br><div class="color_circle" style=" background-color: #d98cd9;"></div><span class="more-info">taupe</span></li>
                        </ul>
                    </div>
                    <button type="button" class="btnPrevious" onclick="move_carousel_left()">&#10094;</button>
                    <button type="button" class="btnNext" onclick="move_carousel_right()">&#10095;</button>
                </div>
            </div>

            <div class="insert1">
                <!-- <h4>Wähle hier den passenden Stoff aus</h4>
                <div class="inner_container">
                    <p style="font-size:12px;">Wähle aus unserem Stoffsortiment das gewünschte Material aus.</p>
                </div>  -->

                <div class="slideshow-container2" style="border: 0px solid #000;">
                    <a href="javascript:void(0);" class="btnPrevious2" onclick="fabric_slide_move_left()">&#10094;</a>
                    <a href="javascript:void(0);" class="btnNext2" onclick="fabric_slide_move_right()">&#10095;</a>
                    <div class="carousel2">
                        <ul>

                        <?php 
                            $conn = mysqli_connect("127.0.0.1","root","helloworld","tapitap");
                            $sql = "SELECT * FROM stoffe";
                            $result = mysqli_query($conn, $sql);
                            $stoffe = mysqli_fetch_all($result, MYSQLI_ASSOC);
                            $php_array=array();
                            $count_fabric=0;
                            foreach($stoffe as $stoff){
                                
                                echo '<li>
                                            <input type="radio" id="fabrics_'.$count_fabric.'" name="fabrics" value="'.$stoff['idStoff'].'" onclick="fabric_radio_click(this)">
                                            <br>
                                            <img src="ateliers/stoffe/'.$stoff['bildStoff'].'" id="Vorschau_'.$stoff['idStoff'].'" width="100" height="100">
                                            <span class="more-info2">'.$stoff['nameStoff'].'</span>
                                    </li>'; 
                                $count_fabric++;
                                array_push($php_array,$stoff['idStoff']);
                            }
                        ?>
                        </ul>
                    </div>
                </div>

                <input type="hidden" id="this_color" name="this_color" value="">
            </div>
        </div>
        <input type="file" id="image-chooser" style="display:none;">
        <button type="button" class="primary_button" onclick="save_image()">Save</button>
    </div>
</form>

<?php 
    
    echo "<script>
                var background_img_num='".(isset($_GET['bg'])?$_GET['bg']:'')."';
            </script>";
?>

<script>
//action_num saves the numbber of action for redo undo
var action_num=0;
var total_action_num=0;
//falg indicating if save img to temp, as users load fabric background image
var save_flag=false;

//first show fabric js canvas and add image, click drawing button then hidden this canvas
var fabricjs_canvas = new fabric.Canvas('paint_board', {
    width: 500,
    height: 800,
    isDrawingMode: false
});
var background_img='img/background_white.png';
if(background_img_num!='')background_img="img/background"+background_img_num+"_white.png";

// to let drawing at first
$(".upper-canvas").css("display", "none");

///////show normal canvas for drawing
var el = document.getElementById('paint_board');
// rect gets the cavas left top value in browser
var rect = el.getBoundingClientRect();
var ctx = el.getContext('2d');
var isDrawing, pen_type=1;
var color_value='#1E90FF';
var bright_value=99;

ctx.lineJoin = ctx.lineCap = 'round';
ctx.lineWidth = 1;
ctx.strokeStyle=increase_brightness(color_value,1);

/////////////////////////////Load the background image to canvas for erasing//////////////////
var el_back = document.getElementById('background_canvas');
var ctx_back = el_back.getContext('2d');
var img1 = new Image();
img1.onload = function () {
    //draw background image
    ctx_back.drawImage(img1, 0, 0, 500, 800);
};
img1.src = background_img;

var el_tempsave = document.getElementById('save_temp_canvas');
var ctx_tempsave = el_tempsave.getContext('2d');
var img2 = new Image();
img2.onload = function () {
    //draw background image
    ctx_tempsave.drawImage(img2, 0, 0, 500, 800);
};
img2.src = background_img;

////////////////set the brightness range color////////////////////////
$('.range_2 input[type="range"]').css('background', '-webkit-linear-gradient(left, '+color_value+' 0%, '+color_value+' ' + 100 + '%, white ' + 100 + '%)');
$('.range_2 input[type="range"]').on('input', function () {
    var percent = Math.ceil(((this.value - this.min) / (this.max - this.min)) * 100);
    bright_value=this.value;
    ctx.strokeStyle=increase_brightness(color_value,100-bright_value);
    $(this).css('background', '-webkit-linear-gradient(left, '+increase_brightness(color_value,100-this.value)+' 0%, '+increase_brightness(color_value,100-this.value)+' ' + percent + '%, white ' + percent + '%)');
});

function changeThickness(value){
    ctx.lineWidth = value;
}
// function changeBrushColor(value){
//     ctx.strokeStyle = "#"+value;//"rgba(0,0,0,1)";//"rgba(" + opts.color[0] + ", " + opts.color[1] + ", " + opts.color[2] + ", " + opts.brushPressure + ")";
// }
function increase_brightness(hex, percent){
    // strip the leading # if it's there
    hex = hex.replace(/^\s*#|\s*$/g, '');

    // convert 3 char codes --> 6, e.g. `E0F` --> `EE00FF`
    if(hex.length == 3){
        hex = hex.replace(/(.)/g, '$1$1');
    }

    var r = parseInt(hex.substr(0, 2), 16),
        g = parseInt(hex.substr(2, 2), 16),
        b = parseInt(hex.substr(4, 2), 16);

    return '#' +
       ((0|(1<<8) + r + (256 - r) * percent / 100).toString(16)).substr(1) +
       ((0|(1<<8) + g + (256 - g) * percent / 100).toString(16)).substr(1) +
       ((0|(1<<8) + b + (256 - b) * percent / 100).toString(16)).substr(1);
}
/////////////////////////////////////for pen_1///////////////////////////////////
var painters = [];
var mouseX = 250;//opts.screenWidth / 2;
var mouseY = 400;//opts.screenHeight / 2;
var testinterval;

function pen_1_init(){
    painters = [];
    mouseX = 250;//opts.screenWidth / 2;
    mouseY = 400;

            for(var i = 0; i < 20; i++){ //opts.strokes; i++) {
                var ease = Math.random() * 0.05 + 0.7;//opts.easing;
                painters.push({
                    dx : 250, // opts.screenWidth / 2,
                    dy : 400, // opts.screenHeight / 2,
                    ax : 0,
                    ay : 0,
                    div : 0.1,
                    ease : ease
                });
            }
            testinterval = setInterval(update, 30); //opts.refreshRate);
            function update() {
                
                var i;
                for( i = 0; i < painters.length; i++) {
                    ctx.beginPath();
                    var dx = painters[i].dx;
                    var dy = painters[i].dy;
                    ctx.moveTo(dx, dy);
                    var dx1 = painters[i].ax = (painters[i].ax + (painters[i].dx - mouseX) * painters[i].div) * painters[i].ease;
                    painters[i].dx -= dx1;
                    var dx2 = painters[i].dx;
                    var dy1 = painters[i].ay = (painters[i].ay + (painters[i].dy - mouseY) * painters[i].div) * painters[i].ease;
                    painters[i].dy -= dy1;
                    var dy2 = painters[i].dy;
                    ctx.lineTo(dx2, dy2);
                    ctx.stroke();
                }
            }
}
function strokestart(event) {
	mouseX = event.clientX-window.scrollX-rect.left;
    mouseY = event.clientY+window.scrollY-rect.top;
	var i = 0, paintersLen = painters.length;
    for(i; i < paintersLen; i++) {
                painters[i].dx = mouseX;
                painters[i].dy = mouseY;
    }
}

///////////////////////////////////////for pen_2//////////////////////////////////
var points = [ ];

///////////////////////////////////////for pen_3//////////////////////////////////
var brush3_img = new Image();
// brush3_img.src = 'img/brush3_1e90ff.png';
var lastPoint;
////////////////////////////////////////for pen 4//////////////////

var pen5_x_before=0,pen5_y_before=0;
// pen4_size=10;
// pen4_colorGap = pen4_color.map(function (c) {
// 	return (255 - c) / pen4_size;
// });
function hexToRgb(hex) {
  var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
  return result ? {
    r: parseInt(result[1], 16),
    g: parseInt(result[2], 16),
    b: parseInt(result[3], 16)
  } : null;
}

////////////////////////////////////////for pen 5//////////////////
var density = 200;
var pen5_timeout, pen5_x, pen5_y;
function getRandomFloat(min, max) {
  return Math.random() * (max - min) + min;
}
////////////////////////////////////////for pattern/////////
var pattern_points = [ ];
var patternCtx_fillStyle_color="#FFC0CB";

function midPointBtw(p1, p2) {
  return {
    x: p1.x + (p2.x - p1.x) / 2,
    y: p1.y + (p2.y - p1.y) / 2
  };
}


/////////////////////////////////////for fabric//////////////////////
var fabric_img = new Image;
var fabric_img_array=new Array();
fabric_img.src = 'https://i.imgur.com/huy6X9t.png';
var fabric_points = [ ];
function getFabricPattern() {
  return ctx.createPattern(fabric_img, 'repeat');
}


el.onmousedown = function(e) {
    isDrawing = true;
    lastPoint = { x: e.clientX-window.scrollX-rect.left, y: e.clientY+window.scrollY-rect.top };

    //for pen_1
    if(pen_type==1){
        strokestart(e);
    }else if(pen_type==6){
        ctx.beginPath();
        ctx.globalCompositeOperation='destination-out';
        ctx.moveTo(lastPoint.x, lastPoint.y);
    }else if(pen_type==4){
        //alert(hexToRgb(ctx.strokeStyle).r+":"+hexToRgb(ctx.strokeStyle).g+":"+hexToRgb(ctx.strokeStyle).b);
        // rgb_r=hexToRgb(ctx.strokeStyle).r;
        // rgb_g=hexToRgb(ctx.strokeStyle).g;
        // rgb_b=hexToRgb(ctx.strokeStyle).b;

        // pen5_x = e.clientX-window.scrollX-rect.left;
        // pen5_y = e.clientY+window.scrollY-rect.top;

        // // ctx.globalCompositeOperation='source-over';

        // pen4_timeout = setInterval(function draw_pen_4() {
        //     ctx.fillRect(pen5_x,pen5_y,1,1);
        //     pen4_width=20+ctx.lineWidth;
        //     for(i=0;i<=2*pen4_width;i++){
        //         for(j=0;j<=2*pen4_width;j++){
        //             var now_dot_x=pen5_x+i-pen4_width;
        //             var now_dot_y=pen5_y+j-pen4_width;
        //             var temp_distance=Math.pow((i-pen4_width),2)+Math.pow((j-pen4_width),2);
        //             var temp_before_distance=Math.pow((now_dot_x-pen5_x_before),2)+Math.pow((now_dot_y-pen5_y_before),2);
        //             if(temp_distance<temp_before_distance){
        //                 var power_pen4_width=Math.pow((pen4_width),2)
        //                 var proportion=temp_distance/power_pen4_width;
        //                 if(temp_distance<power_pen4_width){
        //                     ctx.fillStyle = "rgba("+(rgb_r+(255-rgb_r)*Math.sqrt(proportion))+","+(rgb_g+(255-rgb_g)*Math.sqrt(proportion))+","+(rgb_b+(255-rgb_b)*Math.sqrt(proportion))+","+(1-proportion)+")";
        //                     if(Math.random() >= Math.pow(proportion,2))ctx.fillRect(now_dot_x,now_dot_y,1,1);
        //                 }
        //             }

        //         }
        //     }
        // },5);
        
    }else if(pen_type==5){
        pen5_x = e.clientX-window.scrollX-rect.left;
        pen5_y = e.clientY+window.scrollY-rect.top;
        ctx.fillStyle = ctx.strokeStyle;
        pen5_timeout = setTimeout(function draw_pen_5() {
            for (var i = density; i--; ) {
                var angle = getRandomFloat(0, Math.PI*2);
                var radius = getRandomFloat(0, ctx.lineWidth+5);
                ctx.fillRect(
                    pen5_x + radius * Math.cos(angle),
                    pen5_y + radius * Math.sin(angle), 
                    1, 1);
            }
            if (!pen5_timeout) return;
            pen5_timeout = setTimeout(draw_pen_5, 5);
        }, 5);
    }

    //for fabric
    fabric_points.push({  x: e.clientX-window.scrollX-rect.left, y: e.clientY+window.scrollY-rect.top  });

};

el.onmousemove = function(e) {

    if (!isDrawing) return;

    var currentPoint = { x: e.clientX-window.scrollX-rect.left, y: e.clientY+window.scrollY-rect.top };
    switch(pen_type){
        case 1:
            mouseX = e.clientX-window.scrollX-rect.left;
            mouseY = e.clientY+window.scrollY-rect.top;
            break;
        case 2:
            points.push(currentPoint);

            ctx.beginPath();
            ctx.moveTo(points[0].x, points[0].y);
            for (var i = 1; i < points.length; i++) {
                ctx.lineTo(points[i].x, points[i].y);
                var nearPoint = points[i-5];
                if (nearPoint) {
                ctx.moveTo(nearPoint.x, nearPoint.y);
                ctx.lineTo(points[i].x, points[i].y);
                }
            }
            ctx.stroke();
            break;
        case 3:
            // for brush 3 first set linewidth as 4
            var temp_ctx_width = ctx.lineWidth;
            ctx.lineWidth = 4;

            ctx.beginPath();
            
            now_X_point = e.clientX-window.scrollX-rect.left;
            now_Y_point = e.clientY+window.scrollY-rect.top;
            ctx.globalAlpha = 1;
            ctx.moveTo(lastPoint.x, lastPoint.y);
            ctx.lineTo(now_X_point, now_Y_point);
            ctx.stroke();
            
            if(temp_ctx_width>6){
                ctx.moveTo(lastPoint.x - 6, lastPoint.y - 6);
                ctx.lineTo(now_X_point - 6, now_Y_point - 6);
                ctx.stroke();
                ctx.moveTo(lastPoint.x + 6, lastPoint.y + 6);
                ctx.lineTo(now_X_point + 6, now_Y_point + 6);
                ctx.stroke();
            }

            if(temp_ctx_width>8){
                ctx.moveTo(lastPoint.x - 8, lastPoint.y - 8);
                ctx.lineTo(now_X_point - 8, now_Y_point - 8);
                // ctx.shadowColor = "rgba(0,255,0, 1)";
                // ctx.shadowOffsetX = 50; 
                // ctx.shadowOffsetY = 50;
                ctx.stroke();
                ctx.moveTo(lastPoint.x + 8, lastPoint.y + 8);
                ctx.lineTo(now_X_point + 8, now_Y_point + 8);
                ctx.stroke();
            }

            if(temp_ctx_width>4){
                ctx.moveTo(lastPoint.x - 4, lastPoint.y - 4);
                ctx.lineTo(now_X_point - 4, now_Y_point - 4);
                ctx.stroke();
                ctx.moveTo(lastPoint.x + 4, lastPoint.y + 4);
                ctx.lineTo(now_X_point + 4, now_Y_point + 4);
                ctx.stroke();
            }
            
            ctx.moveTo(lastPoint.x - 2, lastPoint.y - 2);
            ctx.lineTo(now_X_point - 2, now_Y_point - 2);
            ctx.stroke();
            
            ctx.moveTo(lastPoint.x + 2, lastPoint.y + 2);
            ctx.lineTo(now_X_point + 2, now_Y_point + 2);
            ctx.stroke();
            
            lastPoint = currentPoint;

            ctx.lineWidth = temp_ctx_width;
            break;
        case 4:
            // pen5_x_before=pen5_x;
            // pen5_y_before=pen5_y;
            // pen5_x = e.clientX-window.scrollX-rect.left;
            // pen5_y = e.clientY+window.scrollY-rect.top;
            break;
        case 5: 
            pen5_x = e.clientX-window.scrollX-rect.left;
            pen5_y = e.clientY+window.scrollY-rect.top;
            break;
        case 6://eraser
            //for fabric
            // var temp_ctx_width = ctx.lineWidth;
            var temp_ctx_strokeStyle = ctx.strokeStyle;
            // ctx.lineWidth = 25;
            ctx.strokeStyle = "#fff";
            
            ctx.lineTo(e.clientX-window.scrollX-rect.left, e.clientY+window.scrollY-rect.top);
            ctx.stroke();

            // ctx.lineWidth = temp_ctx_width;
            ctx.strokeStyle = temp_ctx_strokeStyle;
            
            break;
        default:
            //for fabric
            var temp_ctx_width = ctx.lineWidth;
            var temp_ctx_strokeStyle = ctx.strokeStyle;
            ctx.lineWidth = 25;
            ctx.strokeStyle = getFabricPattern();

            fabric_points.push({ x: e.clientX-window.scrollX-rect.left, y: e.clientY+window.scrollY-rect.top });
            
            var p1 = fabric_points[0];
            var p2 = fabric_points[1];
            ctx.beginPath();
            ctx.moveTo(p1.x, p1.y);

            for (var i = 1, len = fabric_points.length; i < len; i++) {
                var midPoint = midPointBtw(p1, p2);
                ctx.quadraticCurveTo(p1.x, p1.y, midPoint.x, midPoint.y);
                p1 = fabric_points[i];
                p2 = fabric_points[i+1];
            }
            ctx.lineTo(p1.x, p1.y);
            ctx.stroke();
            ctx.lineWidth = temp_ctx_width;
            ctx.strokeStyle = temp_ctx_strokeStyle;
            break;
    }
};


el.onmouseup = function() {

    isDrawing = false;
    fabric_points.length=0;
    pattern_points.length = 0;
    points.length = 0;
    clearTimeout(pen5_timeout);
    // if(pen_type==4)clearInterval(pen4_timeout);

    if(pen_type==6) ctx.globalCompositeOperation='source-over';

    //for undo redo action
    action_num++;
    total_action_num=action_num;
    console.log("action_num:"+action_num+" ,total_num"+total_action_num);
    save_temp_image(action_num);
    enable_undoredo("undo");
    disable_undoredo("redo");
    
};


function pen_selected(i){
    pen_type=i;
    for(j=1; j<7; j++){
        $("#pen_"+j).removeClass('pen_selected');
    }
    $("#pen_"+i).addClass('pen_selected');
    
    //because pen_1_init run timeInterval, so click others then stop this interval
    clearInterval(testinterval);
    if(pen_type==1){
        pen_1_init();
    }

    //falg indicating if save img to temp, as users load fabric background image
    if(save_flag==true){
        save_img_to_tmp();
        save_flag=false;
    }
}

//////////////////////////////////////carousel 1 in texture color///////////////////////////
<?php
$js_array = json_encode($php_array);
echo    "var javascript_array = ". $js_array . ";\n
        var count_fabric = ". $count_fabric . ";\n";

?>
    var middle_fabric_option_num=1;//at first select the middle fabric radio num as 1
    var carousel = $('.carousel ul');
    var carouselChild = carousel.find('li');
    var clickCount = 0;
    var canClick = true;
    var itemWidth = carouselChild.first().outerWidth(true); //Including margin
    var lastItem;

    // Get an element in the middle of the visible part of the carousel    
    var getMiddleElement = function($carousel){
        var carouselWidth = $carousel.width();
        var $items = $carousel.find('li');
        var lastVisibleItem = 0;
        $items.each(function(index, el) {
            if ( $(this).position().left >= carouselWidth ) {
                return false;
            }
            lastVisibleItem = index;
        });
        
        return $items.eq(Math.floor(lastVisibleItem/2));
    }; // getMiddleElement

    //Set Carousel width so it won't wrap
    carousel.width(itemWidth * carouselChild.length);
    
    // Expand the middle element
    var $middle = getMiddleElement($('.carousel'));
    $middle.toggleClass('expanded');
    $middle.find("input").prop("checked", true);
    change_color();

    function pattern_color_radio_click(event){
        var this_id=event.id.slice(5);
        var id=$middle.find("input").attr('id').slice(5);
        switch(this_id-id){
            case 1:
            case -11:
                move_carousel_left();
                break;
            case 2:
            case -10:
                move_carousel_left_2();
                break;
            case -1:
            case 11:
                move_carousel_right();
                break;
            case -2:
            case 10:
                move_carousel_right_2();
                break;
            default:
                break;
        }
    }

    //fabric radio is selected
    function fabric_radio_click(event){
        var this_id=event.id.slice(8);

        var minus_value=this_id-middle_fabric_option_num;
        if(minus_value==1 || minus_value==1-count_fabric)fabric_slide_move_left();
        else if(minus_value==-1 || minus_value==count_fabric-1)fabric_slide_move_right();

    }

    function change_color(){
        //select pattern, 1~5 is pen, 999 is pattern with fabric
        pen_selected(999);

        //here you could set the number of images
        var numOfImages=javascript_array.length;

        radVal = document.mainForm.color.value;
        patternCtx_fillStyle_color='#'+radVal;
        document.getElementById('this_color').value = ''+radVal+'';

        for(i=0;i<numOfImages;i++){
            Caman("#Vorschau_"+javascript_array[i], function () {
                this.revert();
                this.brightness(20);
                this.resize({
                    width: 100,
                    height: 100
                });

                this.newLayer(function () {
                    this.setBlendingMode("multiply");
                    this.opacity(90);
                    this.fillColor('#'+radVal+'');
                });

                this.render();
            });
        }
        setTimeout(get_fabric_img, 1000);
    }

    function get_fabric_img(){
        var fabric_canvas_id="Vorschau_"+javascript_array[middle_fabric_option_num];
        fabric_img.src = document.getElementById(fabric_canvas_id).toDataURL();
    }

    //Set the event handlers for buttons.
    function move_carousel_left(){
        if (canClick) {
            canClick = false;
            clickCount++;
            
            //Animate the slider to left as item width 
            carousel.stop(false, true).animate({
                    left : '-='+itemWidth
                },200, function(){
                    //Find the first item and append it as the last item.
                    lastItem = carousel.find('li:first');
                    lastItem.remove().appendTo(carousel);
                    carousel.css('left', 0);
                    canClick = true;
                    
                    // Collapse the previous middle and expand the new one
                    $middle.toggleClass('expanded');
                    $middle = getMiddleElement($('.carousel'));
                    $middle.toggleClass('expanded');
                    $middle.find("input").prop("checked", true);
                    change_color();
                });
        }
    } // btnNext
    
    function move_carousel_left_2(){
        if (canClick) {
            canClick = false;
            clickCount++;
            
            //Animate the slider to left as item width 
            carousel.stop(false, true).animate({
                    left : '-='+itemWidth*2
                },200, function(){
                    //Find the first item and append it as the last item.
                    lastItem = carousel.find('li:first');
                    lastItem.remove().appendTo(carousel);
                    lastItem = carousel.find('li:first');
                    lastItem.remove().appendTo(carousel);
                    carousel.css('left', 0);
                    canClick = true;
                    
                    // Collapse the previous middle and expand the new one
                    $middle.toggleClass('expanded');
                    $middle = getMiddleElement($('.carousel'));
                    $middle.toggleClass('expanded');
                    $middle.find("input").prop("checked", true);
                    change_color();
                });
        }
    } // btnNext
    
    function move_carousel_right(){
        if (canClick) {
            canClick = false;
            clickCount--;
            
            //Find the first item and append it as the last item.
            lastItem = carousel.find('li:last');
            lastItem.remove().prependTo(carousel);
            carousel.css('left', -itemWidth);
            			
            //Animate the slider to right as item width 
            carousel.finish(true).animate({
                left: '+='+itemWidth
            },100, function(){
                canClick = true;
                
                // Collapse the previous middle and expand the new one
                $middle.toggleClass('expanded');
                $middle = getMiddleElement($('.carousel')).toggleClass('expanded');
                $middle.find("input").prop("checked", true);
                change_color();
            });
        }
    } // btnPrevious

    function move_carousel_right_2(){
        if (canClick) {
            canClick = false;
            clickCount--;
            
            //Find the first item and append it as the last item.
            lastItem = carousel.find('li:last');
            lastItem.remove().prependTo(carousel);
            lastItem = carousel.find('li:last');
            lastItem.remove().prependTo(carousel);
            carousel.css('left', -itemWidth*2);
            			
            //Animate the slider to right as item width 
            carousel.finish(true).animate({
                left: '+='+itemWidth*2
            },100, function(){
                canClick = true;
                
                // Collapse the previous middle and expand the new one
                $middle.toggleClass('expanded');
                $middle = getMiddleElement($('.carousel')).toggleClass('expanded');
                $middle.find("input").prop("checked", true);
                change_color();
            });
        }
    } // btnPrevious

//////////////////////////////////////carousel 2 in fabric select///////////////////////////

    var carousel2 = $('.carousel2 ul');
    var carousel2Child = carousel2.find('li');
    var itemWidth_2 = carousel2Child.first().outerWidth(true); //Including margin

    //Set Carousel width so it won't wrap
    carousel2.width(itemWidth_2 * carousel2Child.length);
    
    // Expand the middle element
    var $middle2 = getMiddleElement($('.carousel2')).toggleClass('expanded');
    
    //Set the event handlers for buttons.
    function fabric_slide_move_left(){

        middle_fabric_option_num++;
        if(middle_fabric_option_num==count_fabric)middle_fabric_option_num=0;
        document.getElementById("fabrics_"+middle_fabric_option_num).checked=true;

        //set middle canvas as fabric image
        pen_selected(999);
        get_fabric_img();
        
        if (canClick) {
            canClick = false;
            
            //Animate the slider to left as item width 
            carousel2.stop(false, true).animate({
                    left : '-='+itemWidth_2
                },200, function(){
                    //Find the first item and append it as the last item.
                    lastItem = carousel2.find('li:first');
                    lastItem.remove().appendTo(carousel2);
                    carousel2.css('left', 0);
                    canClick = true;
                    
                    // Collapse the previous middle and expand the new one
                    $middle2.toggleClass('expanded');
                    $middle2 = getMiddleElement($('.carousel2')).toggleClass('expanded');
                });
        }
    } // btnNext
    
    function fabric_slide_move_right(){
        middle_fabric_option_num--;
        if(middle_fabric_option_num<0)middle_fabric_option_num=count_fabric-1;
        document.getElementById("fabrics_"+middle_fabric_option_num).checked=true;

        //set middle canvas as fabric image
        pen_selected(999);
        get_fabric_img();

        if (canClick) {
            canClick = false;
            
            //Find the first item and append it as the last item.
            lastItem = carousel2.find('li:last');
            lastItem.remove().prependTo(carousel2);
            carousel2.css('left', -itemWidth_2);
            			
            //Animate the slider to right as item width 
            carousel2.finish(true).animate({
                left: '+='+itemWidth_2
            },100, function(){
                canClick = true;
                
                // Collapse the previous middle and expand the new one
                $middle2.toggleClass('expanded');
                $middle2 = getMiddleElement($('.carousel2')).toggleClass('expanded');
            });
        }
    } // btnPrevious

//////////////////////////////////////carousel 3 in brush color///////////////////////////
    var carousel_brush_color=$('.carousel_brush_color ul');
    // var $middle_brush_color = getMiddleElement($('.carousel_brush_color'));
    function move_color_carousel_left(){
        if (canClick) {
            canClick = false;
            //Animate the slider to left as item width 
            carousel_brush_color.stop(false, true).animate({
                    left : '-='+itemWidth
                },200, function(){
                    //Find the first item and append it as the last item.
                    lastItem = carousel_brush_color.find('li:first');
                    lastItem.remove().appendTo(carousel_brush_color);
                    carousel_brush_color.css('left', 0);
                    canClick = true;
                    
                    color_value = hexc(carousel_brush_color.find('li:first div').css('backgroundColor'));
                    ctx.strokeStyle=increase_brightness(color_value,1);
                    // brush3_img.src = 'img/brush3_'+color_value.substring(1)+'.png';
                    //set brightness range color
                    $('.range_2 input[type="range"]').val(99);
                    $('.range_2 input[type="range"]').css('background', '-webkit-linear-gradient(left, '+color_value+' 0%, '+color_value+' ' + 100 + '%, white ' + 100 + '%)');
            });
        }
    }
    function move_color_carousel_right(){
        if (canClick) {
            canClick = false;
            
            //Find the first item and append it as the last item.
            lastItem = carousel_brush_color.find('li:last');
            lastItem.remove().prependTo(carousel_brush_color);
            carousel_brush_color.css('left', -itemWidth);
            			
            //Animate the slider to right as item width 
            carousel_brush_color.finish(true).animate({
                left: '+='+itemWidth
            },100, function(){
                canClick = true;
                
                color_value = hexc(carousel_brush_color.find('li:first div').css('backgroundColor'));
                ctx.strokeStyle=increase_brightness(color_value,1);
                // brush3_img.src = 'img/brush3_'+color_value.substring(1)+'.png';

                //set brightness range color
                $('.range_2 input[type="range"]').val(99);
                $('.range_2 input[type="range"]').css('background', '-webkit-linear-gradient(left, '+color_value+' 0%, '+color_value+' ' + 100 + '%, white ' + 100 + '%)');
            });
        }
    } // btnPrevious

    function hexc(colorval) {
        var parts = colorval.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
        delete(parts[0]);
        for (var i = 1; i <= 3; ++i) {
            parts[i] = parseInt(parts[i]).toString(16);
            if (parts[i].length == 1) parts[i] = '0' + parts[i];
        }
        return ('#' + parts.join(''));
    }




function loadbackground(num){
    if (confirm('Are you sure you want to load background without saving this image?')) {
        location.href="index.php?bg="+num;
    } else {
        // Do nothing!
    }
}

function loadsample(num){
    //falg indicating if save img to temp, as users load fabric background image
    if(save_flag==true)save_img_to_tmp();
    save_flag=true;
    // first disable all draw item
    disable_all_draw();
    
    //save image to set background after
    var temp_back_url=document.getElementById('paint_board').toDataURL("image/png");

    fabricjs_canvas.clear();
    fabric.Image.fromURL(
        temp_back_url,
        function(img){
            fabricjs_canvas.setBackgroundImage(img, fabricjs_canvas.renderAll.bind(fabricjs_canvas), {
                scaleX: fabricjs_canvas.width / img.width,
                scaleY: fabricjs_canvas.height / img.height
            });
        }
    );

    fabricjs_canvas.isDrawingMode = false;
    $(".upper-canvas").css("display", "block");
    fabric.Image.fromURL(
        'img/sample_img_'+num+'.png',
        function(img){
            fabricjs_canvas.add(img.scale(0.3).set({ left: 200, top: 300, angle: 0 }));
        }
    );

}

function save_img_to_tmp(){
    //for undo redo action
    action_num++;
    total_action_num=action_num;
    console.log("action_num:"+action_num+" ,total_num"+total_action_num);
    $.ajax({
        type: "POST",
        url: "saveTempImg.php",
        data: { 
            imgBase64: document.getElementById('paint_board').toDataURL("image/png"),
            action_num: action_num
        }
    }).done(function(o) {
        console.log(o); 
    });
    enable_undoredo("undo");
    disable_undoredo("redo");
}
///////////////////output the cavas to server for redo undo////////////////////////////////////////////
function save_temp_image(action_num){
    var dataURL = document.getElementById('paint_board').toDataURL("image/png");
    $.ajax({
        type: "POST",
        url: "saveTempImg.php",
        data: { 
            imgBase64: dataURL,
            action_num: action_num
        }
    }).done(function(o) {
        console.log(o); 
    });
}

function feature_undo(){
    if(action_num>0){
        action_num--;
        enable_undoredo("redo");

        // first disable all draw item
        disable_all_draw();
        
        var temp_back_url='tmp/temp'+action_num+'.png';
        if(action_num==0){
            disable_undoredo("undo");
            temp_back_url='img/background_none.png';
        }


        fabricjs_canvas.clear();
        fabric.Image.fromURL(
            temp_back_url,
            function(img){
                fabricjs_canvas.setBackgroundImage(img, fabricjs_canvas.renderAll.bind(fabricjs_canvas), {
                    scaleX: fabricjs_canvas.width / img.width,
                    scaleY: fabricjs_canvas.height / img.height
                });
            }
        );
        console.log(temp_back_url);
    }
    
}
function feature_redo(){
    action_num++;
    if(action_num<=total_action_num){
        enable_undoredo("undo");

        // first disable all draw item
        disable_all_draw();
        
        var temp_back_url='tmp/temp'+action_num+'.png';

        if(action_num==total_action_num)disable_undoredo("redo");

        fabricjs_canvas.clear();
        fabric.Image.fromURL(
            temp_back_url,
            function(img){
                fabricjs_canvas.setBackgroundImage(img, fabricjs_canvas.renderAll.bind(fabricjs_canvas), {
                    scaleX: fabricjs_canvas.width / img.width,
                    scaleY: fabricjs_canvas.height / img.height
                });
            }
        );

        console.log(temp_back_url);
    }else action_num=total_action_num;
}
function disable_undoredo(type){
    $("#"+type+"_img").addClass("unavailable");
}
function enable_undoredo(type){
    $("#"+type+"_img").removeClass("unavailable");
}
</script>
<script src="js/script.js"></script>
