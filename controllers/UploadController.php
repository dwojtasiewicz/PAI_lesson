<?php

class UploadController extends AppController
{
    const MAX_FILE_SIZE = 1024*1024;
    const SUPPORTED_TYPES = ['video/mp4', 'video/mov'];

    private $message = [];

    public function __construct()
    {
        parent::__construct();
    }

    public function upload()
    {
        $sender = new FoodTruckMapper();

        if ($this->isPost() && is_uploaded_file($_FILES['file']['tmp_name']) && $this->validate($_FILES['file'])) {


            if(!empty($_FILES['file']['tmp_name']) && file_exists($_FILES['file']['tmp_name'])) {
                $sender->setFoodtruck($_FILES['file']['name'],$_POST['name'],$_POST['cook_type'],$_POST['description'],$_SESSION['id']);
            }
            move_uploaded_file(
                $_FILES['file']['tmp_name'],
                dirname(__DIR__).self::UPLOAD_DIRECTORY.$_FILES['file']['name']
            );

            $this->message[] = 'File uploaded.';
            $url = "http://$_SERVER[HTTP_HOST]/";
            header("Location: {$url}?page=index");
        }

        $this->render('upload', [ 'message' => $this->message]);
    }

    private function validate(array $file): bool
    {
        if ($file['size'] > self::MAX_FILE_SIZE) {
            $this->message[] = 'File is too large for destination file system.';
            return false;
        }

        if (!isset($file['type']) || !in_array($file['type'], self::SUPPORTED_TYPES)) {
            $this->message[] = 'File type is not supported.';
            return false;
        }

        return true;
    }
}