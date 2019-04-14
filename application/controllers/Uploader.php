<?php
class Uploader extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('documents_model');
        
    }

    function index()
    {
        $data['heading'] = 'Upload Documents';
        $data['_view'] = 'upload_files';
        $this->load->view('layouts/main',$data);
    }

public function multiple_files(){
  $this->load->library('upload');
  $image = array();
  $ImageCount = count($_FILES['image_name']['name']);
        for($i = 0; $i < $ImageCount; $i++){
            $_FILES['file']['name']       = $_FILES['image_name']['name'][$i];
            $_FILES['file']['type']       = $_FILES['image_name']['type'][$i];
            $_FILES['file']['tmp_name']   = $_FILES['image_name']['tmp_name'][$i];
            $_FILES['file']['error']      = $_FILES['image_name']['error'][$i];
            $_FILES['file']['size']       = $_FILES['image_name']['size'][$i];

            // File upload configuration
            $uploadPath = './assets/';
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'gif|jpg|jpeg|jpe|png|pdf|doc|docx';

            // Load and initialize upload library
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            // Upload file to server
            if($this->upload->do_upload('file')){
                // Uploaded file data
                $imageData = $this->upload->data();
                 $uploadImgData[$i]['image_name'] = $imageData['file_name'];
print_r($uploadImgData);
            }
        } 

        if( $ImageCount==7)
        $params = array(
        'emp_id' => $_SESSION['emp_id'],
        'Tenth_certificate' => $uploadImgData[0]['image_name'],
        'tenplustwo_certificate' => $uploadImgData[1]['image_name'],
        'AADHAR'=> $uploadImgData[2]['image_name'],
        'PAN_CARD'=> $uploadImgData[3]['image_name'],
        'photo'=> $uploadImgData[4]['image_name'],
        'DEGREE'=> $uploadImgData[5]['image_name'],
        'MASTERS'=> $uploadImgData[6]['image_name'],
        'PHD'=> $uploadImgData[7]['image_name'], 
        );else {
            $params = array(
                'emp_id' => $_SESSION['emp_id'],
                'Tenth_certificate' => $uploadImgData[0]['image_name'],
                'tenplustwo_certificate' => $uploadImgData[1]['image_name'],
                'AADHAR'=> $uploadImgData[2]['image_name'],
                'PAN_CARD'=> $uploadImgData[3]['image_name'],
                'photo'=> $uploadImgData[4]['image_name'],
                'DEGREE'=> $uploadImgData[5]['image_name'],
                'MASTERS'=> $uploadImgData[6]['image_name'],
                'PHD'=> "Not available", 
                ); 
            
        }
        
        $this->documents_model->add_documents($params);
        
        
        
        if(isset($_SESSION['start-adding']))
        {
            $this->session->set_flashdata('success','Data Stored. Go to next page');
            redirect('uploader/index');
        }
        else 
        {
            redirect('faculty_publication/index');
        }

         
  }

}
  ?>