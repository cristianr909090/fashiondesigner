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

.carousel{
    padding-top: 0px;
    width: 400px;
    overflow: hidden;
    height: 108px;
    position: relative;
    left: 50px;
}

.btnPrevious, .btnNext {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: black;
  font-size: 18px;
  transition: 0.1s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  background: white;
  border:none;
}

/* Position the "next button" to the right */
.btnNext {
  right: 0;
  border-radius: 3px 0 0 3px;
}

.btnPrevious {
  left: 0;
  border-radius: 0 3px 3px 0;
}

.carousel ul{
    position: relative;
    list-style: none;
    list-style-type: none;
    margin: 0;
    height: 150px;
    padding: 0;
}

.carousel ul li{
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

.dot {
    width: 40px;
    height: 40px;
    border-radius: 50%;
}

.more-info {
    font-size: 16px;
    margin: auto;
}

.carousel ul li .dot {
    display: block;
}

.carousel ul li .more-info {
    display: none;
}

.carousel ul li.expanded .color_circle{
    border: 2px solid gray;
}

.carousel ul li.expanded .more-info {
    display: block;	
    margin-top: 0px;
}

.slideshow-container2 {
  max-width: 500px;
  position: relative;
  margin: auto;
}

.carousel2{
    padding-top: 0px;
    width: 400px;
    overflow: hidden;
    height: 160px;
    position: relative;
    left: 45px;
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

.carousel2 ul{
    position: relative;
    list-style: none;
    list-style-type: none;
    margin: 0;
    height: 150px;
    padding: 0;
}

.carousel2 ul li{
    height: 80px;
    width: 140px;
    float: left;
    margin-top: 20px;
    margin-right: 1px;
    background: #ffffff;
    text-align: center;
    padding-bottom: 0px;
    border-radius:50%;
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

.carousel2 ul li .dot2 {
    display: block;
}

.carousel2 ul li .more-info2 {
    display: none;
}

.carousel2 ul li.expanded img,
.carousel2 ul li.expanded canvas{
    border: 2px solid gray;
}

.carousel2 ul li.expanded .more-info2 {
    display: block;	
    margin-top: 0px;
}
body * {
    text-align: center;
}
.first_form_part, 
.second_form_part{
    width: 500px;
    display: block;
    margin: 0 auto;
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
@media (min-width: 1000px) {
    .first_form_part, 
    .second_form_part{
        display: inline-block;
        vertical-align: top;
    }
}
</style>


<form action="includes/orderProcessTwo.inc.php" method="post" id="mainForm" name="mainForm">
    <div class="first_form_part">
        <div class="insert">
            <h4>Wähle hier eine passende Farbe aus</h4>
            <div class="inner_container">
                <p style="font-size:12px;">Wähle aus unserem Farbspektrum deine gewünschte Farbe aus.</p>
            </div> 
            
            <div class="slideshow-container">
                <button type="button" class="btnPrevious" onclick="move_carousel_left()">&#10094;</button>
                <button type="button" class="btnNext" onclick="move_carousel_right()">&#10095;</button>
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
            </div>

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

                        $conn = mysqli_connect("127.0.0.1","root","helloworld","myapp_test");
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
    

    <div class="second_form_part">
        <h4>Gib hier deine Maße ein</h4>
        <div class="inner_container">
            <p style="font-size:12px;">Gib in die Felder deine Maße ein, damit das Kleidungsstück perfekt auf dich abgestimmt ist.</p></div> 
            <table style="margin: 35px auto;">
                <tr>
                    <td>Größe (cm):</td>
                    <td><input type="text" name="groesseOrder" placeholder="Deine Größe" style="float:left;width:200px; height: 20px;"></td>
                </tr>
                <tr>
                    <td>Schultern (cm):</td>
                    <td><input type="text" name="schulternOrder" placeholder="Deine Schulterbreite" style="float:left;width:200px; height: 20px;"></td>
                </tr>
                <tr>
                    <td>Brust (cm):</td>
                    <td><input type="text" name="brustOrder" placeholder="Dein Brustumfang" style="float:left;width:200px; height: 20px;"></td>
                </tr>
                <tr>
                    <td>Taille (cm):</td>
                    <td><input type="text" name="tailleOrder" placeholder="Dein Taillenumfang" style="float:left;width:200px; height: 20px;"></td>
                </tr>
                <tr>
                    <td>Hüfte (cm):</td>
                    <td><input type="text" name="huefteOrder" placeholder="Dein Hüftumfang" style="float:left;width:200px; height: 20px;"></td>
                </tr>
            </table>
            <button type="submit" name="orderTwo-submit" style="width:200px;">Weiter</button>
            <br>
        </div>
    </div>

</form>



<script>
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
        console.log(this_id+"///"+id+"///"+(this_id-id));
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
            console.log("#Vorschau_"+javascript_array[i]);
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

$(function(){

    var carousel2 = $('.carousel2 ul');
    var carousel2Child = carousel2.find('li');
    var clickCount2 = 0;
    var canClick2 = true;
    var itemWidth = carousel2Child.first().outerWidth(true); //Including margin
    var lastItem;

    // Get an element in the middle of the visible part of the carousel    
    var getMiddleElement_2 = function($carousel2){
        var carousel2Width = $carousel2.width();
        var $items = $carousel2.find('li');
        var lastVisibleItem = 0;
        $items.each(function(index, el) {
            if ( $(this).position().left >= carousel2Width ) {
                return false;
            }
            lastVisibleItem = index;
        });
        
        return $items.eq(Math.floor(lastVisibleItem/2));
    }; // getMiddleElement
    
    
    //Set Carousel width so it won't wrap
    carousel2.width(itemWidth * carousel2Child.length);
    
    // Expand the middle element
    var $middle2 = getMiddleElement_2($('.carousel2')).toggleClass('expanded');
    
    //Set the event handlers for buttons.
    $('.btnNext2').click(function() {
        if (canClick2) {
            canClick2 = false;
            clickCount2++;
            
            //Animate the slider to left as item width 
            carousel2.stop(false, true).animate({
                    left : '-='+itemWidth
                },200, function(){
                    //Find the first item and append it as the last item.
                    lastItem = carousel2.find('li:first');
                    lastItem.remove().appendTo(carousel2);
                    carousel2.css('left', 0);
                    canClick2 = true;
                    
                    // Collapse the previous middle and expand the new one
                    $middle2.toggleClass('expanded');
                    $middle2 = getMiddleElement_2($('.carousel2')).toggleClass('expanded');
                });
        }
    }); // btnNext
    
    $('.btnPrevious2').click(function() {
        if (canClick2) {
            canClick2 = false;
            clickCount2--;
            
            //Find the first item and append it as the last item.
            lastItem = carousel2.find('li:last');
            lastItem.remove().prependTo(carousel2);
            carousel2.css('left', -itemWidth);
            			
            //Animate the slider to right as item width 
            carousel2.finish(true).animate({
                left: '+='+itemWidth
            },100, function(){
                canClick2 = true;
                
                // Collapse the previous middle and expand the new one
                $middle2.toggleClass('expanded');
                $middle2 = getMiddleElement_2($('.carousel2')).toggleClass('expanded');
            });
        }
    }); // btnPrevious
    
});

</script>





<?php
    // require "upload_footer.php";
?>


