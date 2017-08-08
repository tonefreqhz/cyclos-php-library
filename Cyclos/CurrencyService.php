<?php namespace Cyclos;

/**
 * @see http://documentation.cyclos.org/4.6/ws-api-docs/org/cyclos/services/banking/CurrencyService.html
 * 
 * Generated with Cyclos 4.6
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class CurrencyService extends Service {

    function __construct() {
        parent::__construct('currencyService');
    }
    
    /**
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.6/ws-api-docs/org/cyclos/services/banking/CurrencyService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->run('getData', array($id));
    }
    
    /**
     * @param params Java type: DP
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.6/ws-api-docs/org/cyclos/services/banking/CurrencyService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->run('getDataForNew', array($params));
    }
    
    /**

     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.6/ws-api-docs/org/cyclos/services/banking/CurrencyService.html#list()
     */
    public function _list() {
        return $this->run('list', array());
    }
    
    /**
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://documentation.cyclos.org/4.6/ws-api-docs/org/cyclos/services/banking/CurrencyService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->run('load', array($id));
    }
    
    /**
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.6/ws-api-docs/org/cyclos/services/banking/CurrencyService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->run('remove', array($id));
    }
    
    /**
     * @param ids Java type: java.util.Collection
     * @see http://documentation.cyclos.org/4.6/ws-api-docs/org/cyclos/services/banking/CurrencyService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->run('removeAll', array($ids));
    }
    
    /**
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.6/ws-api-docs/org/cyclos/services/banking/CurrencyService.html#save(DTO)
     */
    public function save($object) {
        return $this->run('save', array($object));
    }
    
}