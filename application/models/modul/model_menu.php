<?php 
	class model_menu extends CI_model{
		
		function get_menu($id_language){
			$q = $this->db->query("SELECT *, (SELECT count(*) FROM menu as m1 WHERE m1.id_menu_sub=m.id_menu) as sub_cek
								   FROM
								   setting s
								   JOIN
								   menu m ON s.id_table=m.id_kategori_sub
								   JOIN
								   menu_language ml ON m.id_menu=ml.id_menu
								   LEFT JOIN
								   modul mo ON m.id_jenis=mo.id_modul
								   LEFT JOIN
								   menu_link l ON m.id_jenis=l.id_menu_link
								   WHERE
								   s.key='menu_utama' AND ml.id_language=$id_language AND m.id_menu_sub=0
								   ORDER BY m.sort_order ASC");

			return $q->result();
		}

	}

?>