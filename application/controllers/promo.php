<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class promo extends CI_Controller{

	private $alert = '';
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('promo_model');
	}

	public function index(){
		$data['semua'] = $this->promo_model->all();
		$this->template('promo',$data);
	}

	private function template($content, $data=null){
		$data['content'] = $this->load->view($content, $data, true);
		$this->load->view('template',$data);
	}

	private function alert($open_tag=null,$close_tag=null,$data=null){
		if($data!=null) $data = $open_tag.$data.$close_tag;
		return $data;
	}

	public function promo(){
    if(isset($_POST['btnsave']))
    {
        $tanggal = $_POST['tanggal'];// user name
        $judul = $_POST['judul'];// user email
        $deskripsi = $_POST['deskripsi'];

        $imgFile = $_FILES['user_image']['name'];
        $tmp_dir = $_FILES['user_image']['tmp_name'];
        $imgSize = $_FILES['user_image']['size'];


        if(empty($tanggal)){
            $errMSG = "Please Enter Date.";
        }
        else if(empty($judul)){
            $errMSG = "Please Enter Your Title.";
        }
        else if(empty($deskripsi)){
            $errMSG = "Please Enter Your Description.";
        }
        else if(empty($imgFile)){
            $errMSG = "Please Select Image File.";
        }
        else
        {
            $upload_dir = 'user_images/'; // upload directory

            $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension

            // valid image extensions
            $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions

            // rename uploading image
            $userpic = rand(1000,1000000).".".$imgExt;

            // allow valid image file formats
            if(in_array($imgExt, $valid_extensions)){
                // Check file size '5MB'
                if($imgSize < 5000000)    {
                    move_uploaded_file($tmp_dir,$upload_dir.$userpic);
                }
                else{
                    $errMSG = "Sorry, your file is too large.";
                }
            }
            else{
                $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            }
        }


        // if no error occured, continue ....
        if(!isset($errMSG))
        {

            $stmt = $DB_con->prepare('UPDATE `promo` SET `tanggal`=:tgl,`judul`=:jdl,`deskripsi`=:des,`gambar`=:upic WHERE `id`="1"');

            $stmt->bindParam(':tgl',$tanggal);
            $stmt->bindParam(':jdl',$judul);
            $stmt->bindParam(':des',$deskripsi);
            $stmt->bindParam(':upic',$userpic);

            if($stmt->execute())
            {
                $successMSG = "new record succesfully inserted ...";
                header("refresh:5;index.php"); // redirects image view page after 5 seconds.
            }
            else
            {
                $errMSG = "error while inserting....";
            }
        }
    }
  }
}