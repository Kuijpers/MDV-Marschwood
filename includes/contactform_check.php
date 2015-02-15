<?php
			$regid		=	time();
	
			$regnr		=	$user_abrev	 ."_". $regid;  // $user_abrev staat vermeld in config/config.php
		
			$date	=	date('Y-m-d');
			
			$time	=	date('H:i:s');
			
			$ip		=	$_SERVER['REMOTE_ADDR'];
				
				
			$name		=	$_POST['naam'];			// verplicht veld
			$email		=	$_POST['email'];		// verplicht veld
			$comment	=	$_POST['message'];		// verplicht veld
			
			if (empty ($_POST['telefoon']))
				{
					$phone	=	"";	
				}
			else
				{
					$phone		=	$_POST['telefoon'];		// niet verplicht veld
				}
				
				
				$error		=	0;
				$emptyerror	=	0;
				$emailerror	=	0;
		
		// CHECK IF ALL REQUIRED FIELDS ARE FILLED
		if (	empty($name) ||
				empty($email) ||
				empty($comment)
				)
		{
			$error		=	1;
			$emptyerror	=	1;
		}
		// CHECK IF EMAIL IS VALID
		if (!empty($email))
			{
				if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", $email)) 
				{
					$emailerror	=	1;
					$error		=	1;
				}
			}
		//IF ERROR SHOW FOLLOWING
		
		
			if ($error == 1)
			{
				// Bepaal class op basis van error of niet
				if(empty($name)){$nameclass	=	"class='errorinfo'";}
				else{$nameclass	=	"class='correct' value='$name' readonly='readonly'";}
				
				if(empty($email)|| $emailerror	== 1){$emailclass	=	"class='errorinfo'";}
				else{$emailclass	=	"class='correct' value='$email' readonly='readonly'";}
				
				if(empty($comment)){$commentclass	=	"<textarea name='message' cols='38' rows='10' class='errorinfo'></textarea>";}
				else{$commentclass	=	"<textarea name='message' cols='38' rows='10' class='correct' readonly='readonly>$comment</textarea>";}
			
?>
				<form action="?m=c" method="post" enctype="application/x-www-form-urlencoded" name="error_contact">
					<table>
                    	<tr>
                        	<th colspan="3">
                            	<h3 class="error">
                                	<?php echo $INPUT['error'] ?>
                                </h3>
                            </th>
                        </tr>
                        <tr>
                        	<th colspan="3" class="error">
                            	<?php echo $INPUT['incomplete'] ?>
                            </th>
                        </tr>
						<tr>
    						<td colspan="4">
        						<i>
        							<?php echo $INPUT['required'] ?>
            					</i>
        					</td>
    					</tr>
						<tr>
    						<td>
        						<?php echo $INPUT['name'] ?>
        					</td>
        					<td>
        						:
        					</td>
        					<td>
        						<input name="naam" type="text" size="50" <?php echo $nameclass ; ?> />
        					</td>
        					<td>
        						*
        					</td>
    					</tr>
    					<tr>
    						<td>
        						<?php echo $INPUT['email'] ?>
        					</td>
        					<td>
        						:
        					</td>
        					<td>
        						<input name="email" type="text" size="50" <?php echo $emailclass ; ?> />
        					</td>
        					<td>
        						*
        					</td>
    					</tr>
    					<tr>
    						<td>
        						<?php echo $INPUT['phone'] ?>
       						</td>
        					<td>
        						:
        					</td>
        					<td>
        						<input name="telefoon" type="text" size="50" value="<?php echo $phone; ?>"/>
        					</td>
    					</tr>
    					<tr>
    						<td valign="top">
        						<?php echo $INPUT['message'] ?>
        					</td>
        					<td valign="top">
        						:
        					</td>
        					<td>
        						<?php echo $commentclass ; ?>
        					</td>
        					<td valign="top">
        						*
        					</td>
    					</tr>
    					<tr>
    						<td colspan="3">
        						<input name="reset" type="reset" value="<?php echo $INPUT['reset'] ?>" />
        						&nbsp;
        						<input name="submit" type="submit" value="<?php echo $INPUT['send'] ?>" />
        					</td>
    					</tr>
					</table> 
				</form>
<?php
			
			}