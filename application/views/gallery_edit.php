<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="<?php echo base_url()?>js/site.js"></script>
<script src="<?php echo base_url()?>js/ajaxfileupload.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $(".thumbclick").click(function(){
    $("#caption"+"").toggle("normal");
  });
});
</script>-->

<script type="text/javascript">
   function toggle(id, n){
       for(i=0;i<n;i++) {
           var toggleIt = document.getElementById(id+''+i);
           if (toggleIt.style.display == 'none') {
		toggleIt.style.display='';
                document.getElementById('editanchor').style.display = 'none';
            } else {
		toggleIt.style.display='none';
            }
       }
   }
</script>

<span class="title_post"><?php echo anchor("/gallery/","Album: ".$album[0]['title'],"class='gallery_title'"); ?></span>
<span class="body_post">
    <div id="container">
        <form action="<?php echo site_url('gallery/editAlbum'); ?>" method="POST" enctype="multipart/form-data">
           <div class="body_post"><br>
                    <?php
                     $label = array('class' => 'gallery_info');
                     $property_type = array('class' => 'gallery_info', 'name' => 'title', 'value' => $title);
                     echo form_label('Album Title: ', 'title', $label);
                     echo form_input($property_type)."<br>";
                     $property_type = array('class' => 'gallery_info', 'name' => 'description', 'value' => $description);
                     echo form_label('Description: ', 'description', $label);
                     echo form_input($property_type)."<br>";
                    ?>
               <br>
<!--                <input type="hidden" id="datetime" name="datetime" value="" />-->
               
        <!-- Looping Array Image -->
        <div class="imgbox">
            <table><tr>
            <?php $total = 0; $ctr = 0; foreach($photos as $photoEntry) : ?>
            <td><div class="img_edit">
                <img class="thumb" name="thumb" id="thumb_<?php echo $photoEntry['idphoto']; ?>" src="<?php echo base_url().'images/gallery/thumbs/thumb_'.$photoEntry['url'];  ?>"/>
                <div id="caption">
                            <?php
                                $label = array('class' => 'gallery_info');
                                $property_type = array('class' => 'gallery_info', 'name' => 'photo_description_'.$total, 'value' => $photoEntry['description'], 'style' => 'width:100%');
                                echo form_label('Caption: ', 'caption', $label);
                                echo '<br>';
                                echo form_input($property_type)."<br>";
                                echo form_hidden('photoId_'.$total, $photoEntry['idphoto']);
                            ?>
                </div>
                <div id="right" name="deletealbum">
                    <div class="delbox" id ="<?php echo 'delbox'.$total;?>">
                    <?php 
                        $data = array(
                        'name'        => 'checkboxdel[]',
                        'value'       => $photoEntry['idphoto'],
                        'checked'     => FALSE,
                        'style'       => 'margin:10px;',
                        );
                    echo form_checkbox($data); echo 'delete'?>
                    </div>
                </div>
            </div></td>
            <?php $ctr++; $total++;
                if($ctr == 2):
                    $ctr = 0;
                    echo '</tr><tr>';
                endif;
            ?>
            <?php endforeach; ?>
            </tr></table>
        </div>
        <input type="hidden" id="total" name="total" value="<?php echo $total;?>" />
        <input type="hidden" id="datetime" name="datetime" value="" />
        <input type="hidden" id="albumId" name="albumId" value="<?php echo $albumId;?>" />
            </div><br>
           <div class="fileupload-buttonbar" style="float:right; margin:10px">
              <input type="submit" name="update" value="Update" class="galleryUpload"> 
              <input type="submit" name="cancel" value="Cancel" class="galleryUpload"> 
           </div>
        </form>
<!--    <div class="clear"></div>-->
    </div>
</span>

        

        
