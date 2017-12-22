<?php
class Teste_PagLegalModulo_Block_Form_PagLegalModulo extends Mage_Payment_Block_Form
{
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('paglegalmodulo/form/paglegalmodulo.phtml');
    }
}