<form action="?m=c" method="post" enctype="application/x-www-form-urlencoded" name="contact_page">
<table>
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
        	<input name="naam" type="text" size="50" class="field"/>
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
        	<input name="email" type="text" size="50" class="field"/>
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
        	<input name="telefoon" type="text" size="50" class="field"/>
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
        	<textarea name="message" cols="38" rows="10"></textarea>
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