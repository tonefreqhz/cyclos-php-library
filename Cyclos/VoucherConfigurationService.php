<?php namespace Cyclos;

/**
 * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/banking/VoucherConfigurationService.html 
 * WARNING: The API is still experimental, and is subject to change.
 */
class VoucherConfigurationService extends Service {

    function __construct() {
        parent::__construct('voucherConfigurationService');
    }
    
    /**
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/banking/VoucherConfigurationService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->run('getData', array($id));
    }
    
    /**
     * @param params Java type: DP
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/banking/VoucherConfigurationService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->run('getDataForNew', array($params));
    }
    
    /**

     * @return Java type: org.cyclos.model.banking.voucherconfigurations.VoucherConfigurationListData
     * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/banking/VoucherConfigurationService.html#getListData()
     */
    public function getListData() {
        return $this->run('getListData', array());
    }
    
    /**

     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/banking/VoucherConfigurationService.html#list()
     */
    public function _list() {
        return $this->run('list', array());
    }
    
    /**
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/banking/VoucherConfigurationService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->run('load', array($id));
    }
    
    /**
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/banking/VoucherConfigurationService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->run('remove', array($id));
    }
    
    /**
     * @param ids Java type: java.util.Collection
     * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/banking/VoucherConfigurationService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->run('removeAll', array($ids));
    }
    
    /**
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.5.2/ws-api-docs/org/cyclos/services/banking/VoucherConfigurationService.html#save(DTO)
     */
    public function save($object) {
        return $this->run('save', array($object));
    }
    
}