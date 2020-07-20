///////////////////////upload the image with button click////////////////////////////////
var file_input = document.getElementById('image-chooser');
file_input.addEventListener('change', handleFiles);

function handleFiles(e) {
    if(save_flag==true)save_img_to_tmp();
    //falg indicating if save img to temp, as users load fabric background image
    save_flag=true;
    // first disable all draw item
    disable_all_draw();
    console.log(URL.createObjectURL(e.target.files[0]));
    
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
        URL.createObjectURL(e.target.files[0]), 
        function(img){
            fabricjs_canvas.add(img.scale(0.3).set({ left: 200, top: 300, angle: 0 }));
        }
    );

}

///////////////////output the cavas to image////////////////////////////////////////////
function save_image(){
    save_img_to_tmp();

    var img3 = new Image();
    img3.onload = function () {
        //draw background image
        ctx_tempsave.drawImage(img3, 0, 0, 500, 800);
    };
    setTimeout(
        function load_tmp_save_img(){
            img3.src = 'tmp/temp'+total_action_num+'.png';
        },
        1000
    );
    
    var filename = prompt("Please enter the file name:", "image1");
    if (filename == null || filename == "") {
        alert("Input the filename to save!")
    } else{
        setTimeout(
            function download_tmp_save_img(){
                // var link = document.createElement('a');
                // link.download = filename+'.png';
                // link.href = document.getElementById('save_temp_canvas').toDataURL("image/png");
                // link.click();
                $.ajax({
                    type: "POST",
                    url: "saveServerImg.php",
                    data: { 
                        imgBase64: document.getElementById('save_temp_canvas').toDataURL("image/png"),
                        imgFilename: filename
                    }
                }).done(function(o) {
                    alert(o.includes("userimg")?"Successfully uploaded image to "+o:o);
                    console.log(o);
                });
            },
            2000
        );

    }
    
}

//when click draw item
$('.draw_input').click(function(){
    $('.draw_input').removeClass("without_border");
    continue_drawing();
});
$('input:radio').change(function(){
    continue_drawing();
});


//disable all draw item
function disable_all_draw(){
    $('.draw_input').addClass("without_border");
    $('input:radio').prop("checked", false);
}

function continue_drawing(){
    fabricjs_canvas.isDrawingMode = true;
    $(".upper-canvas").css("display", "none");
};
