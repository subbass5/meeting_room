<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	</head>
	<body>
        <div class="table-responsive">
		     
		<?php include '../connect/class_crud.php';
       
        $crud = new CRUD();
		
		if(isset($_REQUEST['id'])){
		$id = intval($_REQUEST['id']);
		$strQury = "SELECT * FROM users WHERE user_id =".$id.";";
		$res = $crud->ElseCondition($strQury);
			if(mysql_num_rows($res)>0)
			{
				echo '  <form action="manage_user/save_user.php" method="POST">
				        <input type="hidden" name="filename" value="manage_room">
				          <table class="table">';
	                    
				   
				while($obj = mysql_fetch_assoc($res))
				{ 
					
                   echo '    <input type="hidden" name="iduser" value="'.$obj['user_id'].'">
                              <td><p><label>ชื่อผู้ใช้</label></p>
                                 <p><input type="text" name="username" class="form-control" value="'.$obj['username'].'" ></p>
                              </td>

                         </tr>
                              <td><p><label>รหัสผ่าน</label></p>
                                 <p><input type="text" name="password" class="form-control" value="'.base64_decode($obj['password']).'" ></p>
                              </td>
                         </tr>
                         <tr>
                              <td><p><label>สิทธิ์ในการใช้งาน</label></p>
                                 <p><input type="datetime" name="status" class="form-control" value="'.$obj['status'].'" ></p>
                              </td>
                         </tr>
                         ';?>
                        
                         <?php  
				}
              
			}else{
				//header('location:admin.php');
				echo "Work is here.";
			}
			echo "</table>
               <input type='submit' class='btn btn-success' name='submitRoom' value='บันทึกข้อมูล'>
			</form>";
			}


		   

?>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
 		</div>
	</body>
</html>