<?php

class document extends CFormModel{
    
   public $serializedocument_id;
   public $type;
   public $document;
   public $id;
   public $version;
   public $outbox;

   public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('document', 'required'),
			array('id', 'numerical', 'integerOnly'=>true),
			array('type', 'length', 'max'=>7),
			array('version', 'length', 'max'=>10),
			array('outbox', 'length', 'max'=>3),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('serializedocument_id, type, document, id, version, outbox', 'safe', 'on'=>'search'),
		);
	}
    
}
?>
