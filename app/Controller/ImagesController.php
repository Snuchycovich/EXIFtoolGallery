<?php
/**
 * Created by PhpStorm.
 * User: lahbib
 * Date: 21/11/2015
 * Time: 11:56
 */

namespace App\Controller;

require_once("AppController.php");
require_once("Flickr.php");

class ImagesController extends AppController
{
    
    public function __construct($current_action)
    {
        $this->current_action = $current_action;
        $this->actions = array (
            'home' => 'homeAction',
            'download' => "downloadAction",
            'downloadXMP' => "downloadXMPAction",
            'search' => "searchAction",
        );
    }

    public function dispatch()
    {
        if ($this->current_action!==null) {
            if (array_key_exists($this->current_action,$this->actions)) {
                if (method_exists($this,$this->actions[$this->current_action])) {
                    $method = $this->actions[$this->current_action];
                    return $this->$method();
                }
            }
        } else
            return $this->homeAction();
    }

    public function homeAction()
    {
        $images = glob("app/uploads/*.*");
        foreach($images as $img){
            exec("exiftool -xmp -b app/uploads/".$img." -o app/data/xmp/".basename($img).".xmp");

    }
           return $this->render('index',compact('images'));

    }

    public function downloadAction(){
        if (file_exists("app/uploads/".$_GET["img"])) {
            header('Content-Type: image/' . pathinfo($_GET["img"], PATHINFO_EXTENSION));
            header("Content-Disposition: attachment; filename=" . $_GET["img"]);
            print file_get_contents("app/uploads/".$_GET["img"]);
        }else{
            echo($_GET["img"]." not found");
        }
    }

    public function downloadXMPAction(){
        $file_name=basename($_GET["file"],pathinfo($_GET["file"], PATHINFO_EXTENSION))."xmp";
        if (file_exists("app/data/xmp/".$file_name)) {
            header("Content-Disposition: attachment; filename=" . urlencode($file_name));
            header("Content-Type: application/force-download");
            header("Content-Type: application/octet-stream");
            header("Content-Type: application/download");
            header("Content-Description: File Transfer");
            header("Content-Length: " . filesize("app/data/xmp/".$file_name));
            flush(); // this doesn't really matter.

            $fp = fopen("app/data/xmp/".$file_name, "r");
            while (!feof($fp))
            {
                echo fread($fp, 65536);
                flush(); // this is essential for large downloads
            }
            fclose($fp);
        }
    }

    function searchAction(){
        $Flickr = new Flickr('e9d736c6e88d3848b053cf70aa883080');
        $data = $Flickr->search($_GET["q"]);
        $images = $data['photos']['photo'];
        return $this->render('gallery',compact('images'));

    }

}