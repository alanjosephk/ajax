 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 /**
 *Controller class to handle ajax search
 */
class AjaxSearch extends CI_Controller {
    
    /**
    *function to load view
    *@param void
    *@return void
    */ 
    public function index()
    {
        $this->load->view('searchview');
    }
    /**
    *function to search city
    *@param void
    *@return void
    */ 
    public function emailSearch()
    {
        if ($this->input->post() && $this->input->is_ajax_request()) {
            $credentials=array(
                'email_id' => $this->input->post('email_id'),
            );
        $this->load->model('SearchModel');
        // var_dump($credentials);die();
        $data['result']=$this->SearchModel->searchData($credentials);
        echo json_encode($data);
        }
       
    }
}
?>