<?php
require "upload_header_2.php";
// include_once 'includes/dbh_ateliers.inc.php';

?>

<style>
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
    left: -20px;
    top: -30px;
}
.brush_btnNext {
    left:  45px;
    top: -30px;
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
    border: 2px solid gray;
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
    margin: 15px 10px 20px;
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
#pen_1,
#pen_2, 
#pen_3{
    display: inline-block;
    width: 70px;
    height: 300px;
    vertical-align: top;
    margin: 5px;
    border: 1px solid white;
    border-radius: 3px;
    box-shadow: 1px 1px white;
}
#pen_1:hover,
#pen_2:hover,
#pen_3:hover,
.pen_selected{
    border: 1px solid #bbb!important;
    box-shadow: 1px 1px #bbb!important;
}
#pen_style{
    width: 150px;
    margin-top: 70px;
    margin-left: 20px;
    display: inline-block;

}
.form_title {
    background: white;
    margin: -19px auto 5px;
    width: 100px;
    font-size: 30px;
}
.primary_button {
    background: #54B0B0;
    border: none;
    color: white;
    font-size: 17px;
    border-radius: 10px;
    padding: 5px 10px;
    margin: 14px auto 5px;
    display: block;
}
.insert1 {
    margin-top: -80px;
}
.third_form_part .primary_button{
    display: inline-block;
}
.mask-disable{
    display: block;
    position: absolute;
    width: 503px;
    height: 738px;
    background: white;
    opacity: 0.7;
    top: 0;
    left: 50%;
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
        <canvas id="paint_board" width="500" height="800"></canvas>
    </div>

    <div class="right_container">
        <div class="first_form_part">
            <p class="form_title">Brushes</p>
            <img id="pen_1" src="img/1.png" onclick="pen_1_selected()">
            <img id="pen_2" src="img/2.png" onclick="pen_2_selected()">
            <img id="pen_3" src="img/3.png" onclick="pen_3_selected()">
            <div id="pen_style">
                <div class="range_1">
                    <input type="range" min="1" max="10" value="1" onchange="changeThickness(this.value)">
                </div>
                <input class="jscolor" value="000000" onchange="changeBrushColor(this.value)">
                <div class="slideshow-container">
                    
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
                    <button type="button" class="brush_btnPrevious" onclick="move_color_carousel_left()">&#10094;</button>
                    <button type="button" class="brush_btnNext" onclick="move_color_carousel_right()">&#10095;</button>
                </div>
                <div class="range_2">
                    <input type="range" min="0" max="99" value="99" ">
                </div>
            </div>
        </div>
        
        <div class="second_form_part">
            <p class="form_title">Texture</p>
            <div class="insert">
                <h4>Wähle hier eine passende Farbe aus</h4>
                <div class="inner_container">
                    <p style="font-size:12px;">Wähle aus unserem Farbspektrum deine gewünschte Farbe aus.</p>
                </div> 
                
                <div class="slideshow-container">
                    
                    <!-- <a href="javascript:void(0);" class="btnPrevious">&#10094;</a>
                    <a href="javascript:void(0);" class="btnNext">&#10095;</a> -->
                    <div class="carousel">
                        <ul>
                            <li><input type="radio" id="color1" name="color" value="1E90FF" onclick="radio_click(this)"><br><div class="color_circle" style=" background-color: #1E90FF;"></div><span class="more-info">meerblau</span></li>
                            <li><input type="radio" id="color2" name="color" value="FF3E96" onclick="radio_click(this)"><br><div class="color_circle" style=" background-color: #FF3E96;"></div><span class="more-info">fuchsia</span></li>
                            <li><input type="radio" id="color3" name="color" value="FFC0CB" onclick="radio_click(this)"><br><div class="color_circle" style=" background-color: #FFC0CB;"></div><span class="more-info">magnolia</span></li>
                            <li><input type="radio" id="color4" name="color" value="FF3E96" onclick="radio_click(this)"><br><div class="color_circle" style=" background-color: #FF3E96;"></div><span class="more-info">pink</span></li>
                            <li><input type="radio" id="color5" name="color" value="b3d9ff" onclick="radio_click(this)"><br><div class="color_circle" style=" background-color: #b3d9ff;"></div><span class="more-info">lightblue</span></li>
                            <li><input type="radio" id="color6" name="color" value="0073e6" onclick="radio_click(this)"><br><div class="color_circle" style=" background-color: #0073e6;"></div><span class="more-info">royalblau</span></li>
                            <li><input type="radio" id="color7" name="color" value="ffb3e6" onclick="radio_click(this)"><br><div class="color_circle" style=" background-color: #ffb3e6;"></div><span class="more-info">rosa</span></li>
                            <li><input type="radio" id="color8" name="color" value="b30077" onclick="radio_click(this)"><br><div class="color_circle" style=" background-color: #b30077;"></div><span class="more-info">beere</span></li>
                            <li><input type="radio" id="color9" name="color" value="4d0033" onclick="radio_click(this)"><br><div class="color_circle" style=" background-color: #4d0033;"></div><span class="more-info">dark violet</span></li>
                            <li><input type="radio" id="color10" name="color" value="b82e8a" onclick="radio_click(this)"><br><div class="color_circle" style=" background-color: #b82e8a;"></div><span class="more-info">beere</span></li>
                            <li><input type="radio" id="color11" name="color" value="f5d6eb" onclick="radio_click(this)"><br><div class="color_circle" style=" background-color: #f5d6eb;"></div><span class="more-info">puder</span></li>
                            <li><input type="radio" id="color12" name="color" value="d98cd9" onclick="radio_click(this)"><br><div class="color_circle" style=" background-color: #d98cd9;"></div><span class="more-info">taupe</span></li>
                        </ul>
                    </div>
                    <button type="button" class="btnPrevious" onclick="move_carousel_left()">&#10094;</button>
                    <button type="button" class="btnNext" onclick="move_carousel_right()">&#10095;</button>
                </div>
            </div>

            <div class="insert1">
                <h4>Wähle hier den passenden Stoff aus</h4>
                <div class="inner_container">
                    <p style="font-size:12px;">Wähle aus unserem Stoffsortiment das gewünschte Material aus.</p>
                </div> 

                <div class="slideshow-container2" style="border: 0px solid #000;">
                    <a href="javascript:void(0);" class="btnPrevious2">&#10094;</a>
                    <a href="javascript:void(0);" class="btnNext2">&#10095;</a>
                    <div class="carousel2">
                        <ul>

                        <?php 
                            // $conn = mysqli_connect("127.0.0.1","root","helloworld","myapp_test");
                            $conn = mysqli_connect("localhost","root","helloworldzxcvasdfqwer1234Z","test");
                            $sql = "SELECT * FROM stoffe";
                            $result = mysqli_query($conn, $sql);
                            $stoffe = mysqli_fetch_all($result, MYSQLI_ASSOC);
                            $php_array=array();
                            foreach($stoffe as $stoff){
                                echo '<li>
                                            <input type="radio" id="fabrics" name="fabrics" value="'.$stoff['idStoff'].'">
                                            <br>
                                            <img src="ateliers/stoffe/'.$stoff['bildStoff'].'" id="Vorschau_'.$stoff['idStoff'].'" width="100" height="100">
                                            <span class="more-info2">'.$stoff['nameStoff'].'</span>
                                    </li>'; 
                                array_push($php_array,$stoff['idStoff']);
                            }
                        // print_r($php_array);
                        ?>
                        </ul>
                    </div>
                </div>

                <input type="hidden" id="this_color" name="this_color" value="">
            </div>
        </div>

        <div class="third_form_part">
            <p class="form_title">Images</p>
            <button type="button" class="primary_button" onclick="document.getElementById('image-chooser').click();">Add Images to Canvas</button>
            <input type="file" id="image-chooser" style="display:none;">
            <button type="button" id="drawing-mode" class="primary_button">Start Drawing</button>
        </div>
    </div>
    <button type="button" class="primary_button" onclick="save_image()">Save</button>
</form>
<div class="mask-disable"></div>



<script>

//first show fabric js canvas and add image, click drawing button then hidden this canvas
alert("Please add images first, and start your drawing");
var canvas = new fabric.Canvas('paint_board', {
    width: 500,
    height: 800,
    isDrawingMode: false
});
fabric.Image.fromURL(
    'img/background.png', 
    function(img){
        // canvas.add(img.scale(0.54).set({ left: 0, top: 0, angle: 0 }));
        canvas.setBackgroundImage(img, canvas.renderAll.bind(canvas), {
            scaleX: canvas.width / img.width,
            scaleY: canvas.height / img.height
        });
    }
);

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


/////////////////////////////////////////Loading the background image to canvas//////////////////
var img1 = new Image();
//drawing of the test image - img1
img1.onload = function () {
    //draw background image
    ctx.drawImage(img1, 0, 0, 500, 800);
};
img1.src = 'img/background.png';

////////////////set the brightness range color////////////////////////
$('.range_2 input[type="range"]').css('background', '-webkit-linear-gradient(left, '+color_value+' 0%, '+color_value+' ' + 100 + '%, white ' + 100 + '%)');
$('.range_2 input[type="range"]').on('input', function () {
    var percent = Math.ceil(((this.value - this.min) / (this.max - this.min)) * 100);
    console.log(percent);
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
var painters = [], unpainters = [], timers = [];
var mouseX = 250;//opts.screenWidth / 2;
var mouseY = 400;//opts.screenHeight / 2;
var testinterval;

pen_1_init();
function pen_1_init(){

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
                // ctx.strokeStyle = "rgba(0,0,0,1)";//"rgba(" + opts.color[0] + ", " + opts.color[1] + ", " + opts.color[2] + ", " + opts.brushPressure + ")";
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
                    // console.log("updated",dx2, dy2);
                    ctx.stroke();
                }
            }
}
function strokestart(event) {
	mouseX = event.clientX-window.scrollX-rect.left;
    mouseY = event.clientY+window.scrollY-rect.top;
    console.log("started"+mouseX+mouseY);
	var i = 0, paintersLen = painters.length;
    for(i; i < paintersLen; i++) {
                painters[i].dx = mouseX;
                painters[i].dy = mouseY;
    }
    // setInterval(update, 30);
}

///////////////////////////////////////for pen_2//////////////////////////////////
var points = [ ];

///////////////////////////////////////for pen_3//////////////////////////////////
var brush3_img = new Image();
brush3_img.src = 'img/brush3_1e90ff.png';
var lastPoint;
function distanceBetween(point1, point2) {
  return Math.sqrt(Math.pow(point2.x - point1.x, 2) + Math.pow(point2.y - point1.y, 2));
}
function angleBetween(point1, point2) {
  return Math.atan2( point2.x - point1.x, point2.y - point1.y );
}


el.onmousedown = function(e) {
    isDrawing = true;
    console.log(pen_type);
    console.log("scrol value:"+window.scrollX+","+window.scrollY);
    console.log("mouth position in display:"+e.clientX+","+e.clientY);
    lastPoint = { x: e.clientX-window.scrollX-rect.left, y: e.clientY+window.scrollY-rect.top };
    points.push(lastPoint);

    //for pen_1
    if(pen_type==1){
        strokestart(e);
    }
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
            var dist = distanceBetween(lastPoint, currentPoint);
            var angle = angleBetween(lastPoint, currentPoint);
            
            for (var i = 0; i < dist; i++) {
                x = lastPoint.x + (Math.sin(angle) * i) - 25;
                y = lastPoint.y + (Math.cos(angle) * i) - 25;
                ctx.drawImage(brush3_img, x, y);
            }
            
            lastPoint = currentPoint;
            break;
        default:
    }
};

el.onmouseup = function() {
    isDrawing = false;
    points.length = 0;
    // clearInterval(testinterval);
};


function pen_1_selected(){
    pen_type=1;
    $("#pen_1").addClass('pen_selected');
    $("#pen_2").removeClass('pen_selected');
    $("#pen_3").removeClass('pen_selected');
}
function pen_2_selected(){
    pen_type=2;
    $("#pen_2").addClass('pen_selected');
    $("#pen_1").removeClass('pen_selected');
    $("#pen_3").removeClass('pen_selected');
}
function pen_3_selected(){
    pen_type=3;
    $("#pen_3").addClass('pen_selected');
    $("#pen_2").removeClass('pen_selected');
    $("#pen_1").removeClass('pen_selected');
}

//////////////////////////////////////carousel 1 in texture color///////////////////////////
<?php
$js_array = json_encode($php_array);
echo "var javascript_array = ". $js_array . ";\n";
?>
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

    function radio_click(event){
        var this_id=event.id.slice(5);
        var id=$middle.find("input").attr('id').slice(5);
        // console.log(this_id+"///"+id+"///"+(this_id-id));
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

    function change_color(){
        //here you could set the number of images
        var numOfImages=javascript_array.length;

        radVal = document.mainForm.color.value;

        document.getElementById('this_color').value = ''+radVal+'';


        for(i=0;i<numOfImages;i++){
            // console.log("#Vorschau_"+javascript_array[i]);
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
    $('.btnNext2').click(function() {
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
    }); // btnNext
    
    $('.btnPrevious2').click(function() {
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
    }); // btnPrevious

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
                    console.log(color_value);
                    brush3_img.src = 'img/brush3_'+color_value.substring(1)+'.png';
                    console.log('img/brush3_'+color_value.substring(1)+'.png');
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
                brush3_img.src = 'img/brush3_'+color_value.substring(1)+'.png';

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

///////////////////output the cavas to image////////////////////////////////////////////
function save_image(){
    var link = document.createElement('a');
    link.download = 'result.png';
    link.href = document.getElementById('paint_board').toDataURL("image/png");
    link.click();
}


///////////////////////upload the image with button click////////////////////////////////
var file_input = document.getElementById('image-chooser');
file_input.addEventListener('change', handleFiles);

function handleFiles(e) {
    // var img = new Image;
    // img.src = URL.createObjectURL(e.target.files[0]);
    // img.onload = function() {
    //     ctx.drawImage(img, 20,20);
    //     alert('the image is drawn');
    // }
    fabric.Image.fromURL(
        URL.createObjectURL(e.target.files[0]), 
        function(img){
            canvas.add(img.scale(0.3).set({ left: 200, top: 300, angle: 0 }));
        }
  );
}
var drawingModeEl = document.getElementById('drawing-mode');
drawingModeEl.onclick = function() {
    canvas.isDrawingMode = true;
    $(".upper-canvas").css("display", "none");
    $(".mask-disable").css({"top": "738px", "height":"100px"});
};
</script>





<?php
    // require "upload_footer.php";
?>


