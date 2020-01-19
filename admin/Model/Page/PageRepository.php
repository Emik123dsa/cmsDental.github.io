<?php 

namespace Admin\Model\Page;

use Engine\Model;

class PageRepository extends Model{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function getPages() {

        $sql =$this->queryBuilder->select()
        ->from('page')
        ->orderBy('id', 'DESC')
        ->sql();
        
        return $this->db->query($sql);
    } 

    

}
?>