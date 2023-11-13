<?php
/**
mod_uddeim_simple_notifier template file bootstrap3-button-glyphicon.php
update 2014-12-28
mod version 3.5
copyrights 2010 - 2014 Michal Prochaczek
licence GNU/GPL2
http://michal.prochaczek.pl
michal (at ) prochaczek ( dot) pl
*/

// No direct access
defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;

//set title - cases adjusted - see language files
	$LabelMessages = Text::plural('MOD_UDDEIM_SIMPLE_NUMBER_OF_MESSAGES', $nomessages);

$ClassText = '<div class="uddeim-notifier' . $moduleclass_sfx . '">';
echo $ClassText;

//displays bootstrap button
if (($id) AND ($nomessages>=0))
	{
		echo '<a href="/index.php?option=com_uddeim" class="btn btn-small" role="button" title="' . $LabelMessages . '">';
		//displays notification bootstrap glyphicon 
		if (($id) AND ($nomessages>0)) {
			echo '<i class="icon-mail"></i>&nbsp';
		}

		//displays number of messages
		if (($DisplayNo) AND ($id) AND ($nomessages>0)) {
				echo '<span class="label label-important">' . $nomessages . ' </span>'; 
			} 
			
		// displays no messages information
		if (($DisplayZero==1) AND !($nomessages)) { 
				echo '<span class="label label-info">' . $LabelMessages . ' </span>'; 
			} 
			elseif (($DisplayZero==2) AND !($nomessages)) {
				echo '<span class="label label-info">' . $nomessages . ' </span>';
			}
	echo '</a>';
	}
	
echo '</div>';

?>