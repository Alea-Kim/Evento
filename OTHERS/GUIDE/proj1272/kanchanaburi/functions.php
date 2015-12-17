<?php

include('dbInfo.php');

class fnctns{

	private function connect(){
		$db_connection = pg_connect("host=".HOST." dbname=".DATABASE." user=".USER." password=".PASSWORD);
		return $db_connection;
	}


	public function login($username,$password){
		$link = $this->connect();
		// Performing SQL query
		$query = "SELECT * FROM users WHERE email = '".$username."' AND password='" .$password. "'";
		$result = pg_query($link,$query) or die('Query failed: ' . pg_last_error());
		//print $query;
		$line = pg_fetch_array($result, null, PGSQL_ASSOC);
		//print_r($line);
		print count($line);
		
		if(count($line)==4){
			//login success
			header('location:profile.php');
		}else{
			//login failed
			echo "Incorrect Username or Password!";
		}


	}

//	public function logout($)

	public function viewUserProfile($userId){
		$link = $this->connect();

		$query = "SELECT P.\"fullName\",
						P.\"industry\",
						J.\"name\"
				FROM profile P
				INNER JOIN job J
				ON J.jobid = P.jobid
				WHERE userid = '". $userId."'
				LIMIT 1";

		$result = pg_query($link,$query) or die('Query Failed: ' . pg_last_error());

		while($row = pg_fetch_row($result)){
			print "Full Name: ". $row[0] . "<br />";
			print "Industry: ". $row[1] . "<br />";
			print "jobId: ". $row[2] . "<br />";
		}


	}

	public function addUser($email,$password){
		$link = $this->connect();

		$query = "INSERT INTO users(email,password)
					VALUES('".$email."','".$password."') RETURNING userid";

		$result = pg_query($link,$query) or die('Query Failed: ' . pg_last_error());

		$this->addProfile($userid,$fullName,$industry,$jobid);
	}

	public function addProfile($userid,$fullName,$industry,$jobid){
		$link = $this->connect();

		$query = "INSERT INTO profile(userid,fullName,industry,jobid)
					VALUES('".$userid."','".$fullName."',".$industry."',".$jobid."')";

		$result = pg_query($link,$query) or die('Query Failed: ' . pg_last_error());
	}

	
	public function approveUser($userId){
		$link = $this->connect();

		$query = "UPDATE users
				SET activated = 'TRUE'
				WHERE userId = '".$userId."'";

		$result = pg_query($link,$query) or die('Query Failed: ' . pg_last_error());
	}
	
	public function deleteUser($userId){
		$link = $this->connect();

		$query = "DELETE FROM  users
					WHERE userId = '".$userId."'";

		$result = pg_query($link,$query) or die('Query Failed: ' . pg_last_error());
	}


	public function viewAllUsers($filter){
		$link = $this->connect();

		$query = "SELECT * FROM users ". $filter;
		print $query;
		$result = pg_query($link,$query) or die('Query Failed: ' . pg_last_error());

		print "<table>
				<thead>
				<th>USER ID</th>
				<th>EMAIL</th>
				<th>PASSWORD</th>
				<th>ACTIVATED</th>
				<th>ACTION</th>
				</thead>";
		while($row = pg_fetch_row($result)){
			print "<tr>";
			print "<td>". $row[0] . "</td>";
			print "<td>". $row[1] . "</td>";
			print "<td>". $row[2] . "</td>";
			print "<td>". $row[3] . "</td>";
			print "<td><button>X</button></td>";
			print "</tr>";
		}
		print "</table>";


	}
	public function viewAllUsersAjax($filter){
		$link = $this->connect();

		$query = "SELECT * FROM users ".$filter;
		
		print $query;
		$result = pg_query($link,$query) or die('Query Failed: ' . pg_last_error());

		while($row = pg_fetch_row($result)){
			$data[] = array(
						'userid' => $row[0],
						'email' => $row[1],
						'password' => $row[2],
						'activated' => $row[3]
					);
		}

		return $data;


	}





}


?>