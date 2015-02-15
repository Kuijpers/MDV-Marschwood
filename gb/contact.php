<?php

ob_start();//this just buffers the header so that you dont recieve an error for returning to the same page
		$lang	=	"gb";
		
include	('../lang/'.$lang.'/main.php');

include	('../lang/'.$lang.'/arrays.php');

include ('../config/config.php');

include ('../templates/header.php');

include ('../templates/top.php');

include ('../templates/menu.php');

include ('../templates/body_top.php');

?>

            	<h2>Contact pagina</h2>

<table>
	<tr>
    	<td>
        	Marschwood Miniature Show Horses
        </td>
    </tr>
	<tr>
    	<td>
        	Anneke Scholte Albers  &amp;  Hein Marsch
        </td>
    </tr>
	<tr>
    	<td>
        	Hondemotsweg 8
        </td>
    </tr>
	<tr>
    	<td>
        	8101 NJ  Raalte
        </td>
    </tr>
	<tr>
    	<td>
        	Netherlands
        </td>
    </tr>
	<tr>
    	<td>
        	Tel.: +31 (0)572-355766
        </td>
    </tr>
	<tr>
    	<td>
        	Mob.: +31 (0)6-43524713
        </td>
    </tr>
	<tr>
    	<td>
        	E-mail: info@marschwood.nl
        </td>
    </tr>
</table>

     
  	<div id="contact">
    	<div class="field">
<?php
	include ('../lang/'.$lang.'/mail.php');

if (empty($_GET['m']))
	{
		$mode = "";	
	}
else
	{
		$mode = $_GET['m'];
	}

switch($mode)
	{
   
		default:

			include ('../includes/contactform.php');

    	break;

		case 'c':
		
			include ('../includes/contactform_check.php');
			
			if ($error == 0) // Wanneer er geen errors zijn kan de mail verstuurd worden.
				{	
					$comment_mail = nl2br($comment);
				
				
					include ('../includes/send_to.php');
					include ('../includes/send_from.php');
					
					header("Refresh: 0; URL=\"?m=b\"");
				}
		
		break;

		case 'b':
		
		echo nl2br($MAIL['thanks']);
		
		break;
   
	}//end the switch
?>
	</div>
</div>               


<?php

include ('../templates/body_bottom.php');

include ('../templates/footer.php');

ob_flush();

?>