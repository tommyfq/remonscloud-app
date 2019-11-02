<?php
class M_home extends CI_Model{

	function getVariabelPohon()
	{
		$sql = "SELECT * FROM setting WHERE `key` = 'variabel_pohon'";
		$result = $this->db->query($sql)->result_array();
		
		return $result[0]['value'];
	}
	
	function getVariabelCO2()
	{
		$sql = "SELECT * FROM setting WHERE `key` = 'variabel_co2'";
		$result = $this->db->query($sql)->result_array();
		
		return $result[0]['value'];
	}
	
	function getJmlPLTS()
	{
		$sql = "select count(*) as jml from ms_plts";
		$result = $this->db->query($sql)->result_array();
		
		return $result[0]['jml'];
	}
	
	function getTotalKapasitas()
	{
		$sql = "select sum(capacity_installed) as total from ms_plts";
		$result = $this->db->query($sql)->result_array();
		
		return $result[0]['total'];
	}
	
	function getLastProcessed()
	{
		$sql = "SELECT last_generate_datalogging as value FROM tr_misc";
		$result = $this->db->query($sql)->result_array();
		
		return $result[0]['value'];
	}
	
	function getSummaryInverter()
	{
		$sql = "select sum(total) as total
				from
				(select sum(total_ac_output) as total from tr_dashboard_recap
				union
				select sum(inv_energy) as total 
				from inverter_log
				where log_date='".date('Y-m-d')."') a";
			
		$result=$this->db->query($sql)->result_array();
		
		return $result[0]['total'];
	}
	
	function getSummaryCharger()
	{
		date_default_timezone_set('Asia/Jakarta');
		$sql = "select sum(total) as total
				from
				(select sum(total_pv_energy) as total from tr_dashboard_recap
				union
				select sum(chg_energy) as total 
				from charger_log
				where log_date='".date('Y-m-d')."') a";
		$result=$this->db->query($sql)->result_array();
		
		return $result[0]['total'];
	}
	
	function getPlts()
	{
		$sql = "select id, description as kode, name as nama, address as alamat, region as kecamatan, state as provinsi, zone as zona, longitude, latitude, ";
		$sql .= "capacity_installed as kapasitas_terpasang, status, cpoperator, mobile_phone as handphone, ";
		$sql .= "contractor as kontraktor, installation_year as tahunpasang from ms_plts order by status desc, kode asc";
		//$sql = "SELECT * FROM plts ORDER BY status DESC, kode ASC";
		
		$result=$this->db->query($sql)->result();
		return $result;
	}
	
	function getWarningAlertInverterStatus1($id)
	{
		date_default_timezone_set('Asia/Jakarta');
		$now = date('Y-m-d H:i:s');
		$sql = "select * from(
				select * 
				from (
					/* connection lost */
					select aa.id, aa.description as kode_plts , concat(bb.log_date,' ',bb.log_time) as data_time, '3' as type, 'System: Connection Lost / Power Lost' as message
					from ms_plts aa
					left join inverter_log_latest_trx bb 
						on aa.id=bb.site_id
					where ( bb.log_date is null or
									abs(TIMESTAMPDIFF(MINUTE,concat(bb.log_date,' ',bb.log_time),'".$now."')) > (select value from setting where id='3'))) a
					UNION
					/* status error / warning */
					select id, kode_plts, data_time, coalesce(type,'4') as type, concat(CAST('INV' AS CHAR CHARACTER SET utf8 ),CAST(inv AS CHAR CHARACTER SET utf8 ),': ',coalesce(status_text,status)) as message
					from(
						select aa.site_id as id, cc.description as kode_plts, aa.inv, concat(aa.log_date,' ', aa.log_time) as data_time, dd.type, dd.status_text, aa.status 
						from(
							SELECT site_id, log_date, log_time, '1' as inv, inv0_status1 as status
							FROM inverter_log_latest_trx
							UNION
							SELECT site_id, log_date, log_time, '2' as inv, inv1_status1 as status
							FROM inverter_log_latest_trx
							UNION
							SELECT site_id, log_date, log_time, '3' as inv, inv2_status1 as status
							FROM inverter_log_latest_trx
							UNION
							SELECT site_id, log_date, log_time, '4' as inv, inv3_status1 as status
							FROM inverter_log_latest_trx
							UNION
							SELECT site_id, log_date, log_time, '5' as inv, inv4_status1 as status
							FROM inverter_log_latest_trx
						)aa
						join ms_plts cc 
							on aa.site_id=cc.id
						left join (select * from status_message where status_active='1') dd 
							on aa.status=dd.status_code
						where aa.inv<=cc.inverter_qty
						order by id
					)ii
					where ((status_text is null and status <> 'null') or (status_text is not null and type in('2','3')))
						and abs(TIMESTAMPDIFF(MINUTE,ii.data_time,'".$now."')) <= (select value from setting where id='3')) tbl where id=coalesce(".$id.",id) 
					order by kode_plts, data_time, message";
		$result=$this->db->query($sql)->result();
		return $result;
	}
	
	function getWarningAlertSolarCharger($id)
	{
		date_default_timezone_set('Asia/Jakarta');
		$now = date('Y-m-d H:i:s');
		$sql = "select * from(
				select * 
				from (
					/* connection lost */
					select aa.id, aa.description as kode_plts , concat(bb.log_date,' ',bb.log_time) as data_time, '3' as type, 'System: Connection Lost / Power Lost' as message
					from ms_plts aa
					left join charger_log_latest_trx bb 
						on aa.id=bb.site_id
					where ( 
							bb.log_date is null 
							or
							abs(TIMESTAMPDIFF(MINUTE,concat(bb.log_date,' ',bb.log_time),'$now')) > (select value from setting where id='3')
						)
					) a
					UNION
					/* status error / warning */
					select id, kode_plts, data_time, coalesce(type,'4') as type, concat(CAST('CHG' AS CHAR CHARACTER SET utf8 ),CAST(chg AS CHAR CHARACTER SET utf8 ),': ',coalesce(status_text,status)) as message
					from(
						select aa.site_id as id, cc.description as kode_plts, aa.chg, concat(aa.log_date,' ', aa.log_time) as data_time, dd.type, dd.status_text, aa.status 
						from(
							SELECT site_id, log_date, log_time, '1' as chg, chg0_status as status
							FROM charger_log_latest_trx
							UNION
							SELECT site_id, log_date, log_time, '2' as chg, chg1_status as status
							FROM charger_log_latest_trx
							UNION
							SELECT site_id, log_date, log_time, '3' as chg, chg2_status as status
							FROM charger_log_latest_trx
							UNION
							SELECT site_id, log_date, log_time, '4' as chg, chg3_status as status
							FROM charger_log_latest_trx
							UNION
							SELECT site_id, log_date, log_time, '5' as chg, chg4_status as status
							FROM charger_log_latest_trx
						)aa
						join ms_plts cc 
							on aa.site_id=cc.id
						left join (select * from status_message where status_active='1') dd 
							on aa.status=dd.status_code
						where aa.chg<=cc.charger_qty
						order by id
					)ii
					where (
							(status_text is null and status <> 'null') 
							or 
							(status_text is not null and type in('2','3'))
						)
						and abs(TIMESTAMPDIFF(MINUTE,ii.data_time,'$now')) <= (select value from setting where id='3')
					) tbl where id = coalesce($id,id)
					order by kode_plts, data_time, message";
		$result=$this->db->query($sql)->result();
		return $result;
	}
}
?>