<?
echo $this->form->create();
echo $this->form->select('vol_types',$MyTypesSelect);
echo $this->form->submit('Submit');
echo $this->form->end();
?>