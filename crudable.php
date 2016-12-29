<?php
	class CrudAble{

		public function create($nama,$email,$alamat){
			global $db;
			$sql = "INSERT INTO users SET nama='$nama', email='$email', alamat='$alamat'";
			$result = $db->query($sql);

			if ($result) {
				return $result;
			}else{
				return false;
			}
		}

		public function read(){
			global $db;
			$sql = "SELECT * FROM users ORDER BY id";
			$result = $db->query($sql);

			if ($result->num_rows > 0) {
				$i = 0;
				$list = "";
				while ($row = $result->fetch_assoc()) {
					$list[$i] = $row;
					$i++;
				}
					return $list;
			}else{
					return false;
			}
		}

		public function ambil($id){
			global $db;
			$sql = "SELECT * FROM users WHERE id = '{$id}'";
			$result = $db->query($sql);

			if ($result->num_rows > 0) {
				$row = $result->fetch_assoc();
				return $row;
				}else{
				return false;
				}
			}

		public function update($id,$nama,$email,$alamat){
			global $db;
			$sql = "UPDATE users SET nama='$nama', email='$email', alamat='$alamat' WHERE id='{$id}'";
			$result = $db->query($sql);

			if ($result) {
				return $result;
			}else{
				return false;
			}
		}

		public function delete($id){
			global $db;
			$sql = "DELETE FROM users WHERE id='{$id}'";
			$result = $db->query($sql);
			if ($result) {
				return $result;
			}else{
				return false;
			}

		}
	}
?>