<?php
class MY_Loader extends CI_Loader {
    public function template($template_name, $vars = array(), $return = FALSE)
    {
        $content  = $this->view('admin/adminInclude/header', $vars, $return);
        $content .= $this->view($template_name, $vars, $return);
        $content .= $this->view('admin/adminInclude/footer', $vars, $return);

        if ($return)
        {
            return $content;
        }
    }
	
	
	public function templatemain($template_name, $vars = array(), $return = FALSE)
    {
        $content  = $this->view('include/header', $vars, $return);
        $content .= $this->view($template_name, $vars, $return);
        $content .= $this->view('include/footer', $vars, $return);

        if ($return)
        {
            return $content;
        }
    }
	
	
}

?>