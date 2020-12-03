<?php 
class banner extends CI_model{

	function list_banner(){
		$this->db->select('*');
		$this->db->from('banner');
		$this->db->join('banner_language', 'banner.id_banner = banner_language.id_banner');
		$this->db->join('kategori_sub_language', 'banner.id_kategori_sub = kategori_sub_language.id_kategori_sub');
		$this->db->where(array('banner_language.id_language' => '1'));
		$this->db->order_by('banner.id_banner', 'DESC');
		$q = $this->db->get();
		return $q->result();
	}

	function list_banner_slide(){
		$q = $this->db->query("SELECT * FROM
							   banner b
							   JOIN
							   banner_language bl ON b.id_banner=bl.id_banner
							   JOIN
							   kategori_sub_language ksl ON b.id_kategori_sub = ksl.id_kategori_sub
							   WHERE
							   bl.id_language=1 AND b.id_kategori_sub=4
							   ORDER BY b.id_banner DESC");

		return $q->result();
	}

	function list_banner_gallery($limit, $offset){
		$q = $this->db->query("SELECT * FROM
							   banner b
							   JOIN
							   banner_language bl ON b.id_banner=bl.id_banner
							   JOIN
							   kategori_sub_language ksl ON b.id_kategori_sub = ksl.id_kategori_sub
							   WHERE
							   bl.id_language=1 AND b.id_kategori_sub=10
							   ORDER BY b.id_banner DESC LIMIT $offset, $limit");

		return $q->result();
	}

	function list_banner_arsip($limit, $offset){
		$q = $this->db->query("SELECT * FROM
							   banner b
							   JOIN
							   banner_language bl ON b.id_banner=bl.id_banner
							   JOIN
							   kategori_sub_language ksl ON b.id_kategori_sub = ksl.id_kategori_sub
							   WHERE
							   bl.id_language=1 AND (b.id_kategori_sub=15 OR b.id_kategori_sub=16)
							   ORDER BY b.id_banner DESC LIMIT $offset, $limit");

		return $q->result();
	}

	function list_banner_2($id_language){
		$query = "SELECT ksl.id_kategori_sub, ksl.nama_kategori_sub FROM setting s JOIN kategori_sub ks 
		ON s.id_table = ks.id_kategori JOIN kategori_sub_language ksl ON ks.id_kategori_sub 
		= ksl.id_kategori_sub";
		/*WHERE s.key =  'kategori_page' AND ksl.id_language =$id_language*/
		$sql = $this->db->query($query);
		return $sql->result();
	}

	function get_gallery_rows(){
			$q = $this->db->query("SELECT *
								   FROM
								   setting s
								   JOIN
								   banner b ON s.id_table=b.id_kategori_sub
								   JOIN
								   banner_language bl ON b.id_banner=bl.id_banner
								   WHERE s.key='gallery' AND bl.id_language=1");

			return $q->num_rows();
		}

	function get_arsip_rows(){
			$q = $this->db->query("SELECT * FROM
							   banner b
							   JOIN
							   banner_language bl ON b.id_banner=bl.id_banner
							   JOIN
							   kategori_sub_language ksl ON b.id_kategori_sub = ksl.id_kategori_sub
							   WHERE
							   bl.id_language=1 AND (b.id_kategori_sub=15 OR b.id_kategori_sub=16)");

			return $q->num_rows();
	}

}

?>