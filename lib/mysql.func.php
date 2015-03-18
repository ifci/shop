<?php
// require_once '../configs/configs.php';
// 
/**
 * 连接数据库的操作
 * @return [type] [description]
 */
function connect(){
	$link = mysql_connect(DB_HOST, DB_USER, DB_PWD) or die("数据库连接失败Error:".mysql_errno().":".mysql_error());
	mysql_set_charset(DB_CHARSET);
	mysql_select_db(DB_DBNAME) or die("指定数据库打开失败");
	return $link;
}


/**
 * 数据插入的方法
 * @param  [string] $table [description]
 * @param  [string] $array [description]
 * @return [type]        [description]
 */
function insert($table, $array){
	$keys = join(",", array_keys($array));
	$vals = "'".join("','", array_values($array))."'";
	$sql = "insert {$table}($keys) values({$vals})";
	mysql_query($sql);
	return mysql_insert_id();
}

/**
 * 数据更新的方法
 * @param  [string] $table [description]
 * @param  [string] $array [description]
 * @param  [string] $where [description]
 * @return [type]        [description]
 */
function update($table, $array, $where = null){
	foreach ($array as $key => $val) {
		if($str == null){
			$sep = "";
		}else{
			$sep = ",";
		}
		$str.=$sep.$key."='".$val."'";
	}
	$sql = "update {$table} set {$str} ".($where == null ? null : "where ".$where);
	mysql_query($sql);
	return mysql_affected_rows();
}

/**
 * 数据删除的方法
 * @param  [string] $table [description]
 * @param  [string] $where [description]
 * @return [type]        [description]
 */
function delete($table, $where = null){
	$where = $where == null ? null : "where ".$where;
	$sql = "delete from {$table} {$where}";
	mysql_query($sql);
	return mysql_affected_rows();
}

/**
 * 查询单条数据的方法
 * @param  [string] $sql         [description]
 * @param  [string] $result_type [description]
 * @return [type]              [description]
 */
function fetchOne($sql, $result_type = MYSQL_ASSOC){
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result, $result_type);
	return $row;
}

/**
 * 得到结果集中所有记录
 * @param  [string] $sql         [description]
 * @param  [string] $result_type [description]
 * @return [type]              [description]
 */
function fetchAll($sql, $result_type = MYSQL_ASSOC){
	$result = mysql_query($sql);
	while (@$row = mysql_fetch_array($result, $result_type)) {
		$rows[] = $row;
	}
	return $rows;
}

/**
 * 得到结果集中记录的条数
 * @param  [string] $sql [description]
 * @return [type]      [description]
 */
function getResultNum($sql){
	$result = mysql_query($sql);
	return mysql_num_rows($result);
}