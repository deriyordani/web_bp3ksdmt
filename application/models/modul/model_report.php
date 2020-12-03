<?php 
	class model_report extends CI_model{
		
		function get_report($id_language,$key_report, $limit, $offset){
			$q = $this->db->query("SELECT *
								   FROM
								   setting s
								   JOIN
								   file f ON s.id_table=f.id_kategori_sub
								   JOIN
								   file_language fl ON f.id_file=fl.id_file
								   WHERE 
								   s.key='$key_report' AND fl.id_language=$id_language
								   ORDER BY f.date_update DESC LIMIT $offset, $limit");

			return $q->result();
		}

		function get_report_rows($id_language, $key_report){
			$q = $this->db->query("SELECT *
								   FROM
								   setting s
								   JOIN
								   file f ON s.id_table=f.id_kategori_sub
								   JOIN
								   file_language fl ON f.id_file=fl.id_file
								   WHERE 
								   s.key='$key_report' AND fl.id_language=$id_language");

			return $q->num_rows();
		}

		function get_report_by_id($id_language,$id){
			$q = $this->db->query("SELECT *
								   FROM
								   file f
								   JOIN
								   file_language fl ON f.id_file=fl.id_file
								   WHERE 
								   fl.id_language=$id_language AND f.id_file=$id");

			return $q->row();
		}

		function get_title($id_language,$key_report){
			$q = $this->db->query("SELECT ksl.nama_kategori_sub
								   FROM
								   setting s
								   JOIN
								   kategori_sub_language ksl ON s.id_table=ksl.id_kategori_sub
								   WHERE 
								   s.key='$key_report' AND ksl.id_language=$id_language");

			$get_title = $q->row();

			return $get_title->nama_kategori_sub;
		}

	}

?>