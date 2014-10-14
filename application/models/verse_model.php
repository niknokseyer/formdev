<?php
/**
 * This class handles the communication with the database for verses.
 */
class Verse_model extends CI_Model {
        /**
         * Constructor.
         */
        function __construct()
        {
            // Call the Model constructor
            parent::__construct();
        }
        /**
         * Retrieve all verses from the database.
         * @return type 
         */
	function get_AllVerses() {
            $this->db->select('*');
            $this->db->from('verse');
            $this->db->order_by("datetime", "desc"); 
			$this->db->limit(8);
            $query = $this->db->get();
            return $query->result_array();
        }
		
		function get_other_verses($lim,$offset) {
			$this->db->select('*');
			$this->db->from('verse');
			$this->db->order_by("datetime", "desc"); 
			if($lim > 0)
			{
				$this->db->where('isVW = 0');
				$this->db->limit($lim);
				$this->db->offset($offset);
			}
			$query = $this->db->get();
			$result['verses'] = $query->result();
			
			$this->db->from('verse');
			$result['num_rows'] = $this->db->count_all_results()-1;
			return $result;
		}
		
        /**
         * Check if the current verse of the week is updated.
         * @param type $date
         * @return type 
         */
        function checkVW($date) {
            //get current date
            date_default_timezone_set('GMT');
            $ph_time = time() + 8 * 60 * 60; //sets the current time to philippine time
            $today = date('Y-m-d H:i',$ph_time);
            $day =  date("D",$ph_time);
            $thisweek = $today;
            
            $thisweek = strtotime("last Wednesday");
            if($day == 'Wed') {
                $end = strtotime($today);
            } else {
                $end = strtotime("next Wednesday");
            }
//            echo '<br>'.date('Y-m-d',$thisweek).'===='.strtotime(date('Y-m-d',$thisweek)).'<br>';
            $time = strtotime( $date );
            $myDate = date( 'y-m-d', $time );
//            echo $date.'===='.$time.'=='.$myDate.'<br>';
//            echo date('Y-m-d',$end).'===='.strtotime(date('Y-m-d',$end)).'<br>';
            if($time >= $thisweek && $time < $end) { 
//                echo 'true';
                return true;
            } else {
                return false;
            }
        }
        /**
         * Gets the previous week's verses, relative to wednesday.
         * @return type 
         */
        function getLWV() {
            //get current date
            date_default_timezone_set('GMT');
            $ph_time = time() + 8 * 60 * 60; //sets the current time to philippine time
            $today = date('Y-m-d H:i',$ph_time);
            $day =  date("D",$ph_time);
            $thisweek = $today;
            //get last week's wednesday..
            if($day == 'Thu' || $day == 'Fri' || $day == 'Sat' || $day == 'Sun') {
                $thisweek = date("Y-m-d H:i", strtotime("last Wednesday"));
                $lastweek = date("Y-m-d H:i", strtotime("-1 week last wednesday"));
            } else {
                $lastweek = date("Y-m-d H:i", strtotime("last Wednesday"));
            }
            //get last week's verses
            return $this->getVerses($lastweek, $thisweek);
        }
        /**
         * Randomizes the previous week's verses to select the current verse of the week.
         * @return type 
         */
        function randVerse() {
            $verses = $this->getLWV();
            if(!empty($verses) && count($verses) > 0) {
                //randomize
                $rand = mt_rand(0, count($verses)-1);
//                echo count($verses).':'.$rand;
//                print_r($verses);
//                print_r($verses[$rand]);
                return $verses[$rand];
            }
			else
			{
            return null;
			}
        }
        /**
         * Retrieves the verses posted within the specified dates.
         * @param type $from
         * @param type $to
         * @return type 
         */
        function getVerses($from, $to) {
            $this->db->select('*');
            $this->db->from('verse');
            $this->db->where('datetime >=', $from);
            $this->db->where('datetime <', $to);
            $query = $this->db->get();
            return $query->result_array();
        }
        /**
         * Retrieves verses that were previously selected as the verse of the week.
         * @return type 
         */
        function get_Verses() {
//            $this->db->select('*');
//            $this->db->from('verse');
//            $this->db->join('verse_app', 'verse_app.idverse = verse.idverse', 'left');
//            $this->db->order_by("datetime", "desc"); 
//            $query = $this->db->get();
            $query = $this->db->query("SELECT * FROM verse, verse_app WHERE verse.idverse = verse_app.idverse ORDER BY datetime DESC");
            return $query->result_array();
        } 
        /**
         * Retrieves the verse of the specified idverse.
         * @param type $id
         * @return type 
         */
        function getVerse($id) {
            $this->db->select('*');
            $this->db->from('verse');
            $this->db->where('idverse', $id);
            $query = $this->db->get();
            foreach ($query->result() as $row) {
		return $row;
            }
        }
        /**
         * Retrieves the information about the specified iduser
         * @param type $id
         * @return type 
         */
        function getFaci($id) {
		$this->db->select('*');
		$this->db->where(array('iduser'=>$id));
		$this->db->from('user');
		$this->db->join('facilitators', 'facilitators.id = user.idprofile');
		$q = $this->db->get();
		
		if($q->num_rows() == 1){
		$result = $q->result();
		return $result[0];
		}
        }
        /**
         * Retrieves all users. (used as dropdown)
         * @return type 
         */
        function get_Facis() {
           $this->db->select('*');
            $this->db->from('user');
			$this->db->join('facilitators','user.idprofile = facilitators.id');
            $query = $this->db->get();
            return $query->result_array();
        }
        /**
         * Retrieves the current verse of the week.
         * @return type 
         */
        function get_VerseWeek() {
            $this->db->select('*');
            $this->db->from('verse');
            $this->db->where('isVW', true);
            $query = $this->db->get();
            foreach ($query->result() as $row) {
		return $row;
            }
        } 
        /**
         * Inserts a new verse.
         */
        function insert_Verses() {
            $user = $this->session->all_userdata();
            $data['iduser'] = $user['iduser'];
			$data['image'] = $this->input->post('image');
            $data['book'] = $this->input->post('book');
            $data['chapter'] = $this->input->post('chapter');
            $data['verse'] = $this->input->post('verse');
            $data['text'] = $this->input->post('text');
            $data['datetime'] = $this->input->post('datetime');
            $data['application'] = $this->input->post('application');
            $data['seton'] = $this->input->post('datetime');
			$this->resetVW();
            $data['isVW'] = 1;
            $this->db->insert('verse', $data); 
//            redirect('/verses');
	}
        /**
         * Deletes the specified idverse.
         * @param type $id 
         */
	function delVerse($id) {		
		$this->db->where('idverse', $id);	
		$this->db->delete('verse');
                $this->db->where('idverse', $id);	
		$this->db->delete('verse_app');
	}
        /**
         * Checks if the specified idverse exists in the verse_app table(meaning it was selected as verse of the week before).
         * @param type $id
         * @return type 
         */
        function isExist($id) {
            $this->db->select('*');
            $this->db->from('verse_app');
            $this->db->where('idverse', $id);
            $query = $this->db->get();
            foreach ($query->result() as $row) {
		return true;
            }
        }
        /**
         * This resets all isVW to 0 in verse_app.
         */
        function resetVW() {
            $data = array (
                'isVW' => 0
		);
            $this->db->update('verse', $data);
        }
        /**
         * Updates the information of the current verse of the week.
         * @param type $id 
         */
        function update_VW($id) {
//            echo $id;
            $this->resetVW();
            //get current date
                date_default_timezone_set('GMT');
                $ph_time = time() + 8 * 60 * 60; //sets the current time to philippine time
            if($this->isExist($id)) {
                if(isset($_POST['genapp'.$id])) {
                    $data = array (
                    'idverse' => $id,
                    'application'=>$_POST['genapp'.$id],
                    'seton'=>date('Y-m-d H:i',$ph_time),
                    'isVW' => 1
                    );
                } else {
                    $data = array (
                    'idverse' => $id,
                    'seton'=>date('Y-m-d H:i',$ph_time),
                    'isVW' => 1
		);
                }
		$this->db->where('idverse', $id);
		$this->db->update('verse_app', $data);
            } else {
                if(isset($_POST['genapp'.$id]))
                    $app['application'] = $this->input->post('genapp'.$id);
                $app['idverse'] = $id;
                $app['isVW'] = 1;
                $app['seton'] = date('Y-m-d H:i',$ph_time);
                $this->db->insert('verse_app', $app);
            }
//            if(isset($_POST['genapp'.$id])) {
//                redirect('/verses');
//            }
	}
        /**
         * Updates the current verse of the week.
         * @param type $id
         * @param type $app 
         */
        function updateVW($id, $app) {
            if($app['isVW'] == 1)
                $this->resetVW();
            if($this->isExist($id)) {
		$this->db->where('idverse', $id);
		$this->db->update('verse_app', $app);
            } else {
                $this->db->insert('verse_app', $app);
            }
	}
        /**
         * Updates the specified verse.
         * @param type $id 
         */
	function update_Verses($id) {
		$data = array (
		'image'=>$_POST['image'],
		'book'=>$_POST['book'],
		'chapter'=>$_POST['chapter'],
		'verse'=>$_POST['verse'],
		'text'=>$_POST['text'],
        'application'=>$_POST['application'],
        'iduser' => $_POST['idfaci']
		);
		$this->db->where('idverse', $id);
		$this->db->update('verse', $data);
                
//            redirect('/verses');
	}
}
?>