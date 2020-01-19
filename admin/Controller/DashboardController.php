<?php 
namespace Admin\Controller;


class DashboardController extends AdminController {
    /**
     * Undocumented function
     *
     * @return void
     */

    public function index() {

       $userModel = $this->load->model('User');

       $this->view->render('dashboard');

    }

}

?>