<?php 
/**
 * This class handles the communication with the database for the gallery.
 */
class Gallery_model extends CI_Model {
    /**
     * Folder Path.
     * @var type 
     */
     private $data = array(
        'dir' => array(
            'original' => 'images/gallery/original/',
            'thumb' => 'images/gallery/thumbs/'
        ),
        'total' => 0,
        'images' => array(),
        'error' => ''
     );
    /**
     * Retrieves the album table.
     * @return type 
     */
    function getAlbums() {
		$query = $this->db->order_by('date','desc');
        $query = $this->db->get('album');
        return $query->result_array();
    }
    /**
     * Retrieves all photos in the photo table.
     * @return type 
     */
    function getAllImages() {
            $this->db->select('*');
            $this->db->from('photo');
            $query = $this->db->get();
            return $query->result_array();
    }
    /**
     * Retrieves the information on the specified album.
     * @param type $id
     * @return type 
     */
    function getAlbum($id) {
        $this->db->select('*');
            $this->db->from('album');
            $this->db->where('idalbum', $id);
            $query = $this->db->get();
        return $query->result_array();
    }
    /**
     * Retrieves the photos which belongs to the idalbum
     * @param type $id
     * @return type 
     */
    function getImages($id) {
            $this->db->select('*');
            $this->db->from('photo');
            $this->db->where('idalbum', $id);
            $query = $this->db->get();
            return $query->result_array();
    }
    /**
     * Retrieves the information on a photo.
     * @param type $id
     * @return type 
     */
    function getImage($id) {
            $this->db->select('*');
            $this->db->from('photo');
            $this->db->where('idphoto', $id);
            $query = $this->db->get();
            return $query->result_array();
    }
    /**
     * Retrieves the primary key in the specified table.(album/photo)
     * @param type $table
     * @return type 
     */
    function getLastPk($table) {
        if($table == 'album') {
            $this->db->select('idalbum');
            $this->db->from($table);
            $this->db->order_by("idalbum", "desc");
            $this->db->limit(1);
        } else if($table == 'photo') {
            $this->db->select('idphoto');
            $this->db->from($table);
            $this->db->order_by("idphoto", "desc");
            $this->db->limit(1);
        }
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row)
            {
               if($table == 'album') 
                return $row['idalbum'];
               else if($table == 'photo') 
                return $row['idphoto'];   
            }
        }
        return 0;
//        SELECT id FROM table ORDER BY id DESC LIMIT 2
    }
    /**
     * Adds an album entry.
     * @param type $photoEntry
     * @return type 
     */
    function addAlbum($photoEntry) {
         $user = $this->session->all_userdata();
         $pk = $this->getLastPk('album');
         $pk++;
//         echo 'next pk is: '.$pk.'<br>';
         $data['idalbum'] = $pk;
         $data['iduser'] = $user['iduser'];
         $data['title'] = $this->input->post('title');
         $data['description'] = $this->input->post('description');
         $data['date'] = $this->input->post('datetime');
         $this->db->insert('album', $data); 
//            $data = array(
//                array(
//                  'iduser' => $user['iduser'] ,
//                  'idalbum' => $data['idalbum'] ,
//                  'description' => $this->input->post('photodesc'),
//                  'url' => $this->input->post('url'),
//                  'date' => $this->input->post('date')
//               )
//            );
        $this->db->insert_batch('photo', $photoEntry); 
        // Produces: INSERT INTO mytable (title, name, date) VALUES ('My title', 'My name', 'My date'), ('Another title', 'Another name', 'Another date')
        return $pk;
     }
     /**
      * Adds photo entries in the photo table.
      * @param type $id
      * @param type $photo 
      */
     function addPhoto($photo) {
            $user = $this->session->all_userdata();
            $this->db->insert_batch('photo', $photo); 
//            $data['iduser'] = $user['iduser'];
//            $data['idphoto'] = $this->input->post('book');
//            $data['idalbum'] = $id;
//            $data['description'] = $this->input->post('verse');
//            $data['url'] = $this->input->post('text');
//            $data['date'] = $this->input->post('datetime');
//            $this->db->insert('photo', $data); 
     }
     /**
      * Updates the information of an album.
      * @param type $id
      * @param type $title
      * @param type $description 
      */
     function editAlbum($id, $title, $description) {
         if($title || $description) {
             if($title && $description)
                 $data = array(
                       'title' => $title,
                       'description' => $description,
                    );
             else if($title)
                 $data = array(
                       'title' => $title,
                    );
             else if($description)
                 $data = array(
                       'description' => $description,
                    );

            $this->db->where('idalbum', $id);
            $this->db->update('album', $data); 
         }

        // Produces:
        // UPDATE mytable 
        // SET title = '{$title}', name = '{$name}', date = '{$date}'
        // WHERE id = $id
     }
     /**
      * updates information on an album.
      * @param type $id
      * @param type $description 
      */
     function editPhoto($id, $description) {
         $data = array(
                       'description' => $description,
         );
         $this->db->where('idphoto', $id);
         $this->db->update('photo', $data); 
     }
     /**
      * deletes an album and its contained photos in the database and also in the folder(orig & thumb).
      * @param type $id 
      */
     function delAlbum($id) {
     //unlink photos
        $images = $this->getImages($id);
      foreach($images as $image)
      {
          $orig = $this->data['dir']['original'];
          $thumb = $this->data['dir']['thumb'].'thumb_';
          unlink($orig.$image['url']);    
          unlink($thumb.$image['url']);    
      }  
        $tables = array('album', 'photo');
        $this->db->where('idalbum', $id);
        $this->db->delete($tables);
     }
     /**
      * deletes a photo from the database and also from the folder(orig & thumb).
      * @param type $id 
      */
     function delPhoto($id) {
         //unlink photos
        $image = $this->getImage($id);
              $orig = $this->data['dir']['original'];
              $thumb = $this->data['dir']['thumb'].'thumb_';
              @unlink($orig.$image[0]['url']);    
              @unlink($thumb.$image[0]['url']);    
        $this->db->where('idphoto', $id);
        $this->db->delete('photo'); 
        // Produces:
        // DELETE FROM mytable 
        // WHERE id = $id
     }
     /**
      * Uploads photos/album, also creates thumbnails.
      * @param type $atAlbum
      * @param type $albumId
      * @return boolean 
      */
    function multiple_upload($atAlbum, $albumId=0) {
        $CI =& get_instance();
        $config['upload_path']    = $this->data['dir']['original'];
        $config['allowed_types']  = 'gif|jpg|png|jpeg|x-png';
        $config['max_size']       = '5000';//'500';
        $config['max_width']      = '5000';//'1600';
        $config['max_height']     = '5000';//'1200';
        $config['remove_spaces']  = TRUE;
        $CI->load->library('upload', $config);
//        $CI->upload->initialize($config);
        $error = FALSE;
        $images = array();
        $file_names = array();
        $uploaded = 0;
        $message = array();
//        $tmpfile = $_FILES['userfile'];
        $tmpfile = array();
        foreach($_FILES['userfile']['name'] as $key => $value) {
            $tmpfile[] = array(
                    'name' => $value,
                    'tmp_name' => $_FILES['userfile']['tmp_name'][$key],
                    'size' => $_FILES['userfile']['size'][$key],
                    'type' => $_FILES['userfile']['type'][$key],
                    'error' => $_FILES['userfile']['error'][$key]
                );
        }
//        print('_FILES: <BR>');
//        print_r($_FILES);
//        print('<br><br>');
//        foreach($tmpfile as $key => $value) {
//            $_FILES['userfile'] = array(
//                    'name' => $value['name'],
//                    'tmp_name' => $value['tmp_name'],
//                    'size' => $value['size'],
//                    'type' => $value['type'],
//                    'error' => $value['error']
//                );
//        }
//        print_r($tmpfile);
//        print('<br><br>');
//        print_r($_FILES);
        $ctr = 0;
        foreach($tmpfile as $key => $value)
//        foreach($_FILES['userfile']['name'] as $key => $value)
        {
            if( ! empty($value['name'])) {
                $_FILES['userfile'] = array(
                    'name' => $value['name'],
                    'tmp_name' => $value['tmp_name'],
                    'size' => $value['size'],
                    'type' => $value['type'],
                    'error' => $value['error']
                );
                if(!$CI->upload->do_upload()) {
                    $ctr++;
                    $message[] = ($ctr).'. '.$_FILES['userfile']['name'];
                    $message[] = $CI->upload->display_errors(/*ERR_OPEN, ERR_CLOSE*/); // ERR_OPEN and ERR_CLOSE are error delimiters defined in a config file
                    $error = TRUE;
                    continue;  
                }
                else
                {   $uploaded++;
                   // Build a file array from all uploaded files
                    $images[] = $CI->upload->data();
                    // create thumbnail
                    $ctr = count($images)-1;
                    $new_image = $this->data['dir']['thumb'].'thumb_'.$images[$ctr]['file_name'];
//                    echo $new_image;
                    $c_img_lib = array(
                       'image_library'     => 'gd2',
                       'source_image'      => $images[$ctr]['full_path'],
                       'create_thumb'      => TRUE,
                       'thumb_marker'      => '',
                       'maintain_ratio'    => TRUE,
                       'width'             => 100,
                       'height'            => 100,
                       'new_image'         => $new_image,
                       'overwrite'         => TRUE
                    );
//                    $CI->load->library('image_lib', $c_img_lib);
                    $CI->image_lib->initialize($c_img_lib);
                    if ( ! $CI->image_lib->resize())
                    {
                        $message[] = '-resize error-'.$images[$ctr]['file_name'];
                        $message[] = $CI->image_lib->display_errors();
//                        echo $CI->image_lib->display_errors();
                    } 
                    $CI->image_lib->clear();
                }
            }
        }
        $files['isError'] = $error;
        // There were errors, we have to delete the uploaded files
//        if($error)
//        {                    
//            foreach($images as $key => $file)
//            {
//                @unlink($file['full_path']);    
//                $files['isError'] = TRUE;
//                return $data;
//            }                    
//        }
//        else
        if(empty($images) && empty($message))
        {
            $files['images'] = array();
            $files['file_names'] = array();
            $files['uploadedNum'] = 0;
            $CI->lang->load('upload');
            $message[] = '<p>No selected files to upload.</p>'/*ERR_OPEN.$CI->lang->line('"upload_no_file_selected"').ERR_CLOSE*/;
            $files['message'] = $message;
            $files['isError'] = TRUE;
            return $files;
        }
        $files['images'] = $images;
        $files['file_names'] = $file_names;
        $files['uploadedNum'] = $uploaded;
        $files['message'] = $message;
        if($atAlbum) {
        $albumId = $this->getLastPk('album');
        $albumId++;
        }
        $photoEntries = $this->createPhotoModel($images, $albumId);
        if($atAlbum)
            $files['albumId'] = $this->addAlbum($photoEntries);
        else {
            $this->addPhoto($photoEntries);
        }
        return $files;
    }
    /**
     * Creates a photoentry from the param $images.
     * @param type $images
     * @param type $albumId
     * @return type 
     */
    function createPhotoModel($images, $albumId) {
        $user = $this->session->all_userdata();
        $pk = $this->getLastPk('photo');
        $pk++;
        $photoEntries = array();
        foreach($images as $image) {
            $photoEntries[] = array(
                'idphoto' => $pk,
                'idalbum' => $albumId,
                'iduser' => $user['iduser'],
                'description' => '',
                'url' => $image['file_name'],
                'date' => $this->input->post('datetime')
            );
            $pk++;
        }
        return $photoEntries;
    }
}
?>
