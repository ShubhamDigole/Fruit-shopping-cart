                <?php
                include("navbar.php");
                session_start();
                
            ?>
                 <html>
                 <head>
                     <meta charset="utf-8" />
                     <meta http-equiv="X-UA-Compatible" content="IE=edge">
                     <title>user orders</title>
                     <meta name="viewport" content="width=device-width, initial-scale=1">
                     <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
                     <script src="main.js"></script>
                 </head>
                 <body>
                     <br><br><br><br><br>
                 
                    
                    <table class="table col-md-11 mx-auto table-bordered">
						<thead class="thead-dark">
							<tr>
								<th scope="col">No.</th>
								<th scope="col">Fruit Name</th>
								<th scope="col">Quantity Baught</th>
								
								<th scope="col">Price per kg</th>
								<th scope="col">Total</th>
								
							</tr>
						</thead>
							
						<tbody>
							<?php
									$userid = $_GET['id'];
									$username = $_SESSION['login'];
                                    $id = 0;
                                    $ids = 12;
									$display = "SELECT * from fruitdata";

									$sql = mysqli_query( $link, $display);
									$displays = "SELECT * from u_registration where id = $userid ";

                                    $sqls = mysqli_query( $link, $displays);
                                    $rows = mysqli_fetch_array( $sqls );
									//$count = mysqli_num_rows($sql);
									while ( $row = mysqli_fetch_array( $sql ) ) {
                                    $id = $row[0];
                                    $ids++;
									 echo '
									<tr>
									<th class="record" id="record-">',$id,'</th>
									<td> ',$row[1],'</td>
									<td>',$rows[$ids],'</td>
									
									<td>',$row[5],'</td>
									<td>',$row[4] + $row[7],'</td>
									</tr>
									';
									

								}
								
								
							?>
						</tbody>
					</table>
                    </body>
                 </html>   
                    