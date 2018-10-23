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
                     <style>
                         body{

                            background:url("./img/orderback.jpg");
                            }
                            #heading{	
                            color:white;
                            position: relative;
                           
                            text-align: center;
                            }
                         table{

                             color:white;
                         }   
                        .table{
                           
                            text-align:center;
                        }
                     </style>
                 </head>
                 <body>
                     <br><br><br><br><br>
                 
                    <h2 id="heading">Orders</h2>
                    <?php
                    $userid = $_GET['id'];
                    $displays = "SELECT * from u_registration where id = $userid ";

                    $sqls = mysqli_query( $link, $displays);
                    $rows = mysqli_fetch_array( $sqls );
                    ?>
                    <table class="col-md-10 mx-auto"> 
                        
                            <tr>
                        
                            <th>Name: <?php echo $rows[3] ?></th>

                                <th>E-mail: <?php echo $rows[5] ?></th>
                            
                            </tr>
                            <tr>
                        
                            <th>City: <?php echo $rows[4] ?></th>
                                <th>Mo No: <?php echo $rows[9] ?></th>
                            
                            </tr>
                            
                            </table>
                            <br>
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
                                    
                                    if($userid == null){

                                        ?><script>
									window.location.href = 'index.php';
										</script>
									<?php

                                    }

                                        else{
									$username = $_SESSION['login'];
                                    $id = 0;
                                    $ids = 12;
									$display = "SELECT * from fruitdata";

									$sql = mysqli_query( $link, $display);
									
									//$count = mysqli_num_rows($sql);
									while ( $row = mysqli_fetch_array( $sql ) ) {
                                    $id = $row[0];
                                    $ids++;
                                   if($rows[$ids] > 0)
                                   {
									 echo '
									<tr>
									<th class="record" id="record-">',$id,'</th>
									<td> ',$row[1],'</td>
									<td>',$rows[$ids],' Kg</td>
									
									<td>',$row[5],' Rs</td>
									<td>',$rows[$ids] * $row[5],' Rs</td>
									</tr>
                                    ';
                                    
                                   }
									

								}
                            }
								
							?>
						</tbody>
					</table>
                    </body>
                 </html>   
                    