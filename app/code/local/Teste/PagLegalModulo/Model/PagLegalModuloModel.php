<?php
class Teste_PagLegalModulo_Model_PagLegalModuloModel extends Mage_Payment_Model_Method_Abstract
{
    protected $_code = 'paglegalmodulo';
    protected $_form = 'paglegalmodulo/form_paglegalmodulo';

    public function assignData($data)
    {
        $info = $this->getInfoInstance();

        if ($data->getCpf())
        {
            $info->setCpf($data->getCpf());
        }

        return $this;
    }

    public function validate()
    {
        parent::validate();
        $info = $this->getInfoInstance();

        if (!$info->getCpf())
        {
            $errorMsg = $this->_getHelper()->__("CPF é obrigatório.\n");
        }

        if ($errorMsg)
        {
            Mage::throwException($errorMsg);
        }

        return $this;
    }

    public function getOrderPlaceRedirectUrl()
    {
        return Mage::getUrl('paglegalmodulo/payment/redirect', array('_secure' => false));
    }

}