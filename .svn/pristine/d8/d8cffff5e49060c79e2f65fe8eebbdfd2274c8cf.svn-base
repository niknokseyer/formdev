<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="<?php echo base_url()?>js/site.js"></script>
<script src="<?php echo base_url()?>js/ajaxfileupload.js"></script>
<script type="text/javascript">
//function displayDate() {
//    document.getElementById("datetime").innerHTML=Date();
//}
/**
 * Displays the files selected for uploading.
 */
function displayFiles() {
    var files = $('input[type="file"]')[0].files;
    document.getElementById("filesSelected").innerHTML= "Selected Files: <br>";
        for (var i = 0; i < files.length; i++)
        {
            document.getElementById("filesSelected").innerHTML += files[i].name + "<br>";
        }
}

$(document).ready(function(){
  $(".fileinput-button").click(function(){
    $("#selectedFiles").show("normal");
  });
});
</script>

<span class="title_post"><?php echo anchor("/gallery/","Gallery","class='gallery_title'"); ?></span>
<span class="body_post">
    <div id="container">
    <div id="imglist">
        <div id="fileupload">
            <form action="gallery" method="POST" enctype="multipart/form-data">
                <div class="body_post"><br>
                <?php
                 $label = array('class' => 'gallery_info');
                 $property_type = array('class' => 'gallery_info', 'name' => 'title', 'value' => '');
                 echo form_label('Album Title: ', 'title', $label);
                 echo form_input($property_type)."<br>";
                 $property_type = array('class' => 'gallery_info', 'name' => 'description', 'value' => '');
                 echo form_label('Description: ', 'description', $label);
                 echo form_input($property_type)."<br>";
                ?>
                <input type="hidden" id="datetime" name="datetime" value="" />
                <br>
                <div class="fileupload-buttonbar">
                    <p>
                        <?php
                            if($error)
                                foreach($error as $curr)
                                    echo $curr;
//                            if(isset ($no))
//                                echo $no;
//                            if(isset ($names))
//                                foreach ($names as $name)
//                                    echo $name;
                        ?>
                    </p>
                    <label class="fileinput-button">
                        <span>Add photos...</span>
                        <input type="file" name="userfile[]" multiple onchange="displayFiles(this.files)"/>
                    </label>
                    <input type="submit" name="upload" value="Start upload" class="galleryUpload">
                </div>
                </div>
            </form>
            <div class="fileupload-content">
                <table class="files"></table>
                <div class="fileupload-progressbar"></div>
            </div>
<!--  style="display: none"          -->
            <div id="selectedFiles">
                <p id="filesSelected"></p>
            </div>
        </div>
        
        <div class="clear"></div>

    </div>

    <div class="clear"></div>

</div>


</span>