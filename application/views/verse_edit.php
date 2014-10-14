<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<script type="text/javascript">
    /**
     * toggles the textarea for the general app of the verse.
     */
function showGenApp(){
           var toggleIt = document.getElementById('gen_app');
           if (toggleIt.style.display == 'none') {
		toggleIt.style.display='block';
            } else {
		toggleIt.style.display='none';
            }
}
</script>
<span class="title_post">
Verses
</span>
<br /><br />
<span class="body_post">
<fieldset class = "verse_info">
<legend>Verse Information</legend>
<form action="<?php echo site_url('verses/updateVerse'); ?>" method="POST" enctype="multipart/form-data">
    <?php 
        //      checkbox
        $isVW = false;
        if(isset($verseinfo->isVW) && $verseinfo->isVW == 1) {
            $isVW = true;
        }
        echo form_hidden('datetime', $verseinfo->datetime);
        if($isVW)
          echo form_hidden('seton', $verseinfo->seton);
        else
          echo form_hidden('seton', null);
        echo form_hidden('idverse', $verseinfo->idverse);
        $label = array('class' => 'verse_info');

		$label = array('class' => 'verse_info');
			
		echo form_hidden('idfaci', $user['iduser']);

		$property_type = array('class' => 'verse_info', 'name' => 'image', 'value' => $verseinfo->image);
        echo form_label('image: ', 'image', $label);
        echo form_input($property_type)."<br>";
        $property_type = array('class' => 'verse_info', 'name' => 'book', 'value' => $verseinfo->book);
        echo form_label('book: ', 'book', $label);
        echo form_input($property_type)."<br>";
        $property_type = array('class' => 'verse_info', 'name' => 'chapter', 'value' => $verseinfo->chapter);
        echo form_label('chapter: ', 'chapter', $label);
        echo form_input($property_type)."<br>";
        $property_type = array('class' => 'verse_info', 'name' => 'verse', 'value' => $verseinfo->verse);
        echo form_label('verse: ', 'verse', $label);
        echo form_input($property_type)."<br>";

        $data = array('class' => 'verse_info', 'name' => 'text', 'value' => $verseinfo->text);
        echo form_label('text: ', 'text', $label);
        echo form_textarea($data)."<br>";
        $data = array('class' => 'verse_info', 'name' => 'application', 'value' => $verseinfo->application);
        echo form_label('application: ', 'application', $label);
        echo form_textarea($data)."<br>";
?>
	<div class="fileupload-buttonbar" style="width:100%; padding-left:35px; text-align:center;">
		<input type="submit" id="cancel" name="cancel" value="Cancel" class="galleryUpload" style="color:#fff; height:27px;">
		<input type="submit" id="update" name="update" value="Update" class="galleryUpload" style="color:#fff; height:27px;">
	</div>
</form>
</fieldset>
</span>