<?
echo $this->form->create();
echo $this->form->select('vol_types',$MongoTypesSelect);
echo $this->form->select('vol_types',$MongoTypesSelectID);
echo $this->form->submit('Submit');
echo $this->form->end();
?>