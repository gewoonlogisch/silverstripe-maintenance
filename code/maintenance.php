<?php
	class maintenance extends DataExtension {
   	
   		static $db = array(
   			'maintenance' => 'boolean'
   		) ;

   		public function updateCMSFields(FieldList $fields) {
		    $fields->addFieldToTab('Root.Main', new CheckBoxField('maintenance', _t("ONDERHOUDSMODE","Maintenance Mode Enabled?")));
		}
	}