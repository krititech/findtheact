<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  
class Addvideo extends CI_controller{


/*****************************  Act manager Vedio add controller  ******************************/
public function add_video(){
        if (isset($_FILES['video']['name']) && $_FILES['video']['name'] != '') {
            unset($config);
            $date = date("ymd");
            $configVideo['upload_path'] = 'video';
            $configVideo['max_size'] = '10240';
            $configVideo['allowed_types'] = 'mov|flv|wmv|f4v|mp4';
            $configVideo['overwrite'] = FALSE;
            $configVideo['remove_spaces'] = TRUE;
            $video_name = $date.$_FILES['video']['name'];
            $configVideo['file_name'] = $video_name;
 
            $this->load->library('upload', $configVideo);
            $this->upload->initialize($configVideo);
            if (!$this->upload->do_upload('video')) {
                echo $this->upload->display_errors();
            } else {
                $videoDetails = $this->upload->data();
                echo "Successfully Uploaded";
                $this->load->model('insertvideo');

			if($this->input->post('submit'))
			{
				
				$this->insertvideo->process();                
			}
            }
            redirect("userlogin/addvedio");
        }
        }
        
		
/*****************************  end  ******************************/
        }

/************************************** file path: application/controllers/ ************************************/
?>

