<?
echo $this->form->create();
echo '<pre>find("list",array("fields"=>array("id","name"))</pre>';
echo $this->form->select('vol_types',$MongoTypesSelect);
echo '<pre>find("list",array("fields"=>array("_id","name"))</pre>';
echo $this->form->select('vol_types',$MongoTypesSelectID);
echo '<pre>find("list",array("fields"=>array("name"))</pre>';
echo $this->form->select('vol_types',$MongoTypesSelectName);
echo $this->form->submit('Submit');
echo $this->form->end();
?>