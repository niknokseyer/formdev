<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); $ctr=0; ?>
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
<span class="title_post"><?php echo anchor("/verses/","Verses","class='verses_title'"); ?>
    <div class="container"> 
     <div id="left"></div>
    </div>
</span>

<?php if(isset($pk_verse_add) && $pk_verse_add == true): ?>
<div>
<span class="body_post">
<fieldset class = "verse_info">
    <legend>Add Verse</legend>
    <form action="<?php echo site_url('verses'); ?>" method="POST" enctype="multipart/form-data" name="myform">
    <?php 
            $date = date('Y-m-d H:i:s');
            echo form_hidden('datetime', $date);
            $label = array('class' => 'verse_info');
			
			echo form_hidden('faci', $user['iduser']);
        
            $property_type = array('class' => 'verse_info', 'name' => 'image');
            echo form_label('image: ', 'image', $label);
            echo form_input($property_type)."<br>";
            $property_type = array('class' => 'verse_info', 'name' => 'book');
            echo form_label('book: ', 'book', $label);
            echo form_input($property_type)."<br>";			
            $property_type = array('class' => 'verse_info', 'name' => 'chapter');
            echo form_label('chapter: ', 'chapter', $label);
            echo form_input($property_type)."<br>";
            $property_type = array('class' => 'verse_info', 'name' => 'verse');
            echo form_label('verse: ', 'verse', $label);
            echo form_input($property_type)."<br>";
            $data = array('class' => 'verse_info', 'name' => 'text');
            echo form_label('text: ', 'text', $label);
            echo form_textarea($data)."<br>";
            $data = array('class' => 'verse_info', 'name' => 'application');
            echo form_label('application: ', 'application', $label);
            echo form_textarea($data)."<br>";
//            set as verse of the week.
            
            if(isset($pk_verse_setVW) && $pk_verse_setVW == true) {
            $setAs = array(
            'name'        => 'setVerse',
            'checked'     => FALSE,
            'style'       => 'margin:10px;',
            'onclick'     => 'showGenApp();'
            );
            echo form_checkbox($setAs); echo 'Set as Verse of the Week';
            } ?>
    <?php //$isChecked = false;?>
    <script>
//    if(document.myform.setVerse.checked == true) {
//        <?php $isChecked = true;?>
//    }
    </script>
    <?php //if($isChecked) :?>
<!--        <div id="gen_app" style="display: block">-->
    <?php //else : ?>
        <div id="gen_app" style="display: none">
    <?php //endif; ?>
    </div>
    <div style="text-align: center;"></br>
         <?php echo form_submit('submit', 'Add');?> <br/>
    </div>
    </form>
</fieldset>	
</span>
</div>
<?php else : ?>  
    <span class="body_post"><p>How did you get in here? You can't add a verse, you're not authorized!</p></span>
<?php endif; ?>                    
