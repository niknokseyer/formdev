<?php
class Article_model extends CI_Model {
	private $type=1;

	function __construct(){
		parent::__construct();
	}

	function init($type){
		$this->type = $type;
	}

	function get_articles($column='datetime',$order='desc'){
		$this->db->order_by($column,$order);
		$q = $this->db->get_where('articles',array('idtype'=>$this->type));
		return $q->result();
	}

	function get_article_from_url($url_title){
		$this->db->select('*');
		$this->db->where(array('url_title'=>$url_title));
		$this->db->from('articles');
		$this->db->join('user', 'user.iduser = articles.iduser');
		$this->db->join('facilitators', 'user.idprofile = facilitators.id');
		$this->db->join('article_types','article_types.idarticletype = articles.idtype');
		$q = $this->db->get();
		if($q->num_rows() == 1){
			$result = $q->result();
			return $result[0];
		}
		else{
			return false;
		}
	}

	function get_article_from_id($id){
		$this->db->select('*');
		$this->db->from('articles');
		$this->db->where(array('idarticle'=>$id));
		$this->db->join('user', 'user.iduser = articles.iduser');
		$this->db->join('facilitators', 'user.idprofile = facilitators.id');
		$this->db->join('article_types','article_types.idarticletype = articles.idtype');
		$q = $this->db->get();

		if($q->num_rows() == 1){
			$result = $q->result();
			return $result[0];
		}
		else{
			return false;
		}
	}

	function get_articles_lim_by_author($iduser, $limit, $offset, $column='datetime',$order='desc'){
		$this->db->select('*');
		$this->db->where(array('idtype'=>$this->type, 'articles.iduser'=>$iduser));
		$this->db->from('articles');
		$this->db->join('user', 'user.iduser = articles.iduser');
		$this->db->join('facilitators', 'user.idprofile = facilitators.id');
		$this->db->join('article_types','article_types.idarticletype = articles.idtype');
		$this->db->order_by($column,$order);
		$this->db->limit($limit);
		$this->db->offset($offset);
		$q = $this->db->get();
		$result['articles'] = $q->result();

		$this->db->where(array('idtype'=>$this->type, 'articles.iduser'=>$iduser));
		$this->db->from('articles');
		$result['num_rows'] = $this->db->count_all_results();
		return $result;
	}
	
	function get_articles_lim_by_tags($tags, $limit, $offset, $column='datetime',$order='desc'){
		$this->db->select('*');
		$this->db->like('tags',$tags);
		$this->db->from('articles');
		$this->db->join('user', 'user.iduser = articles.iduser');
		$this->db->join('facilitators', 'user.idprofile = facilitators.id');
		$this->db->join('article_types','article_types.idarticletype = articles.idtype');
		$this->db->order_by($column,$order);
		$this->db->limit($limit);
		$this->db->offset($offset);
		$q = $this->db->get();
		$result['articles'] = $q->result();
		
		$this->db->like('tags',$tags);
		$this->db->from('articles');
		$result['num_rows'] = $this->db->count_all_results();
		return $result;
	}
	
	function get_articles_lim($limit, $offset, $column='datetime',$order='desc'){
		$this->db->select('*');
		$this->db->where(array('idtype'=>$this->type));
		$this->db->from('articles');
		$this->db->join('user', 'user.iduser = articles.iduser');
		$this->db->join('facilitators', 'user.idprofile = facilitators.id');
		$this->db->join('article_types','article_types.idarticletype = articles.idtype');
		$this->db->order_by($column,$order);
		$this->db->limit($limit);
		$this->db->offset($offset);
		$q = $this->db->get();
		$result['articles'] = $q->result();

		$this->db->where(array('idtype'=>$this->type));
		$this->db->from('articles');
		$result['num_rows'] = $this->db->count_all_results();
		return $result;
	}
	
	function get_latest_reflection($column='datetime',$order='desc'){
		$this->db->select('*');
		$this->db->where('idtype = 1');
		$this->db->from('articles');
		$this->db->join('user', 'user.iduser = articles.iduser');
		$this->db->join('facilitators', 'user.idprofile = facilitators.id');
		$this->db->join('article_types','article_types.idarticletype = articles.idtype');
		$this->db->order_by($column,$order);
		$this->db->limit(1);
		$this->db->offset(0);
		$q = $this->db->get();
		$result['articles'] = $q->result();

		$this->db->where(array('idtype'=>$this->type));
		$this->db->from('articles');
		$result['num_rows'] = $this->db->count_all_results();
		return $result;
	}

	function generate_summary($content){
		$cut = substr($content,0,500);
		/*$regex = "/<\/?\w+((\s+(\w|\w[\w-]*\w)(\s*=\s*(?:\".*?\"|'.*?'|[^'\">\s]+))?)+\s*|\s*)\/?>/i";*/
		//"/(<([\w]+)[^>]*>)(.*?)(<\/\\2>)/"
		preg_match_all("/(<([\w]+)[^>]*>)(.*?)(<\/\\2>)/", $cut, $matches, PREG_SET_ORDER);
		// echo $cut;
		// echo "<pre>";
		// print_r($matches);
		// echo "</pre>";
		$outer_matches = sizeof($matches)-1;
		$inner_matches = sizeof($matches[$outer_matches])-1;
		$last_closing_tag = $matches[$outer_matches][$inner_matches];
		$last_closing_tag_pos = strrpos($cut, $last_closing_tag);

		$summary = substr($cut, 0, $last_closing_tag_pos);
		return $summary;
	}

	function get_title_end($title, $delim){
		$pos = strrpos($title,$delim);
		if($pos === false){
			return '';
		}
		$end = substr($title, $pos+strlen($delim));
		return $end;
	}

	function generate_slug($title, $id, $replace=array(), $delimiter='-'){
		setlocale(LC_ALL, 'en_US.UTF8');
		if(!empty($replace)) {
			$title = str_replace((array)$replace, ' ', $title);
		}
		$clean = iconv('UTF-8', 'ASCII//TRANSLIT', $title);
		$clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
		$clean = strtolower(trim($clean, '-'));
		$clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);
		$clean = strtolower(trim($clean, '-'));

		$this->db->select('url_title');
		$this->db->where('url_title',$clean);
		$this->db->where('idarticle !=',$id);
		$q1 = $this->db->get('articles');
		if($q1->num_rows() > 0){
			$clean = $clean.$id;
		}
		return $clean;
	}

	function insert_article(){
		//validation. Title and content of the form must be filled in.
		$content = $this->input->post('content');
		$summary = $this->generate_summary($content);
		
		$title = $this->input->post('title');
		$url_title = $this->generate_slug($title,-1);

		$article = array (
			'iduser'=>$this->input->post('iduser'),
			'title'=>$this->input->post('title'),
			'datetime'=>$this->input->post('datetime'),
			'content'=>$this->input->post('content'),
			'summary'=>$summary,
			'edited_date'=>$this->input->post('edited_date'),
			'url_title'=>$url_title,
			'idtype'=>$this->type
		);
		if($this->input->post('tags') != null && $this->input->post('tags') != '')
		{
			$tags = str_replace(', ', ',', $this->input->post('tags'));
			$article['tags'] = $tags;
		}
		else
			$article['tags'] = null;
		$q = $this->db->insert('articles', $article);
		return $q;
	}

	function update_article($single=false){
		//validation. Title and content of the form must be filled in.
		$content = $this->input->post('content');
		$summary = $this->generate_summary($content);
		
		$id = $this->input->post('idarticle');
		$title = $this->input->post('title');
		if($single){
			$url_title = $title;
		}
		else{
			$url_title = $this->generate_slug($title,$id);	
		}
		
		$article = array (
			'idarticle'=>$id,
			'iduser'=>$this->input->post('iduser'),
			'title'=>$this->input->post('title'),
			'content'=>$this->input->post('content'),
			'summary'=>$summary,
			'edited_date'=>$this->input->post('edited_date'),
			'url_title'=>$url_title,
			'idtype'=>$this->type
		);
		if($this->input->post('tags') != null && $this->input->post('tags') != '')
		{
			$tags = str_replace(', ', ',', $this->input->post('tags'));
			$article['tags'] = $tags;
		}
		else
			$article['tags'] = null;
		echo $id;
		$this->db->where('idarticle',$id);
		$q = $this->db->update('articles',$article);
		
	}

	function delete_article($id){
		$this->db->where('idarticle',$id);
		$q = $this->db->delete('articles');
		return $q;
	}
}