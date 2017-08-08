<?php namespace Cyclos;

/**
 * @see http://documentation.cyclos.org/4.6/ws-api-docs/org/cyclos/services/contentmanagement/DocumentCustomFieldPossibleValueCategoryService.html
 * 
 * Generated with Cyclos 4.6
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class DocumentCustomFieldPossibleValueCategoryService extends Service {

    function __construct() {
        parent::__construct('documentCustomFieldPossibleValueCategoryService');
    }
    
    /**
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.6/ws-api-docs/org/cyclos/services/contentmanagement/DocumentCustomFieldPossibleValueCategoryService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->run('getData', array($id));
    }
    
    /**
     * @param params Java type: DP
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.6/ws-api-docs/org/cyclos/services/contentmanagement/DocumentCustomFieldPossibleValueCategoryService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->run('getDataForNew', array($params));
    }
    
    /**
     * @param customField Java type: org.cyclos.model.system.fields.CustomFieldVO
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.6/ws-api-docs/org/cyclos/services/contentmanagement/DocumentCustomFieldPossibleValueCategoryService.html#list(org.cyclos.model.system.fields.CustomFieldVO)
     */
    public function _list($customField) {
        return $this->run('list', array($customField));
    }
    
    /**
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://documentation.cyclos.org/4.6/ws-api-docs/org/cyclos/services/contentmanagement/DocumentCustomFieldPossibleValueCategoryService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->run('load', array($id));
    }
    
    /**
     * @param id Java type: java.lang.Long     * @param up Java type: boolean
     * @see http://documentation.cyclos.org/4.6/ws-api-docs/org/cyclos/services/contentmanagement/DocumentCustomFieldPossibleValueCategoryService.html#move(java.lang.Long,%20boolean)
     */
    public function move($id, $up) {
        $this->run('move', array($id, $up));
    }
    
    /**
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.6/ws-api-docs/org/cyclos/services/contentmanagement/DocumentCustomFieldPossibleValueCategoryService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->run('remove', array($id));
    }
    
    /**
     * @param ids Java type: java.util.Collection
     * @see http://documentation.cyclos.org/4.6/ws-api-docs/org/cyclos/services/contentmanagement/DocumentCustomFieldPossibleValueCategoryService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->run('removeAll', array($ids));
    }
    
    /**
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.6/ws-api-docs/org/cyclos/services/contentmanagement/DocumentCustomFieldPossibleValueCategoryService.html#save(DTO)
     */
    public function save($object) {
        return $this->run('save', array($object));
    }
    
    /**
     * @param dtos Java type: java.util.List
     * @see http://documentation.cyclos.org/4.6/ws-api-docs/org/cyclos/services/contentmanagement/DocumentCustomFieldPossibleValueCategoryService.html#saveCategories(java.util.List)
     */
    public function saveCategories($dtos) {
        $this->run('saveCategories', array($dtos));
    }
    
    /**
     * @param customFieldCategoryIds Java type: java.util.List
     * @see http://documentation.cyclos.org/4.6/ws-api-docs/org/cyclos/services/contentmanagement/DocumentCustomFieldPossibleValueCategoryService.html#saveOrder(java.util.List)
     */
    public function saveOrder($customFieldCategoryIds) {
        $this->run('saveOrder', array($customFieldCategoryIds));
    }
    
}