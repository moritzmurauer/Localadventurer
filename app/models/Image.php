<?php

/*
 *  written by 'John in a Million'
 *  johninamio@gmail.com
 */

/*
 *  FILE
 */
class Image {

    /**************************************************************************/

    /* PRIVATE VARIABLES */

    private $imgDefaultExt      = ".jpg",
            $imgThumbExt        = "-thumb",
            $imgDir             = "";

    /**************************************************************************/

    // PUBLIC STATIC FUNCTION

    /*
     * GET CONTENTS
     * dateiinhalte erhalten
     *
     * @param   $filepath           (string)            [required]
     *
     * @return  $content            (string)
     */
    public static function getContents($filepath){
        return file_get_contents($filepath);
    }

    /*
     * WRITE CONTENTS
     * dateiinhalte schreiben
     *
     * @param   $filepath           (string)            [required]
     *          $content            (string)            [required]
     *
     * @return  true || false       (boolean)
     */
    public static function writeContents($filepath, $content){
        if(is_writable($filepath) && $file = fopen($filepath, "w")){

            if(fwrite($file, $content)){
                $result = true;
            }
            else{
                $result = false;
            }

            fclose($file);
            return $result;

        }else{
            return false;
        }
    }

    /**************************************************************************/

    /* PRIVATE FUNCTION */

    /*
     * CREATE DATE CODED PATH
     * @return  $codedPath          (string)
     */
    private function createDateCodedPath(){
        $date       = date("Y", time());
        $code       = explode(":", $date);
        $codedPath  = "";

        foreach($code as $dir){
            $codedPath .= "$dir/";
        }

        return (string)$codedPath;
    }


    /*
     * CREATE FOLDER
     * @param   $dir                (string)        [required]
     * @return  true || false
     */
    private function createFolder($dir){
        if(!file_exists($dir)){
            return (boolean) mkdir($dir, 0777, true);
        }else{
            return true;
        }
    }

    /*
     * CREATE THUMB
     * @param   $img                (string)        [required]
     *          $thumbPath          (string)        [required]
     *          $width              (int)           [optional]
     *          $height             (int)           [optional]
     * @return  true || false       (boolean)
     */
    private function createThumb($img, $thumbPath, $width = 200, $height = 200){
        if(!$width || !$height){
            return false;
        }

        list($imgWidth, $imgHeight, $imgType) = getimagesize($img);
        switch($imgType){
            case IMAGETYPE_GIF:
                $gdImg  = imagecreatefromgif($img);
            break;
            case IMAGETYPE_JPEG:
                $gdImg  = imagecreatefromjpeg($img);
//              imagealphablending( $gdImg, true );
//                imagesavealpha( $gdImg, true );
            break;
            case IMAGETYPE_PNG:
                $gdImg  = imagecreatefrompng($img);
            break;
            default:
                return false;
        }

        $imgRatio   = $imgWidth / $imgHeight;
        $thumbRatio = $width / $height;

        if($thumbRatio > $imgRatio){
            $thumbWidth          = (int) $height * $imgRatio;
            $thumbHeight         = $height;

        }else{
            $thumbHeight         = (int) $width / $imgRatio;
            $thumbWidth          = $width;
        }


        $gdThumb = imagecreatetruecolor($thumbWidth, $thumbHeight);

        if ( $imgType === IMAGETYPE_PNG ) {
          imagealphablending( $gdThumb, false );
          imagesavealpha( $gdThumb, true );
          imagecopyresampled($gdThumb, $gdImg, 0, 0, 0, 0, $thumbWidth, $thumbHeight, $imgWidth, $imgHeight);
          imagepng( $gdThumb, $thumbPath );
        }
        else {
          imagecopyresampled($gdThumb, $gdImg, 0, 0, 0, 0, $thumbWidth, $thumbHeight, $imgWidth, $imgHeight);
          imagejpeg($gdThumb, $thumbPath, 90);
        }



        imagedestroy($gdImg);
        imagedestroy($gdThumb);

        return true;
    }

    /*
     * GET IMG TYPE
     * @param   $tempImgFile        (string)        [required]
     * @return  $imgType            (string)
     */
    private function getImgType($tempImgFile){
        list( , , $tempImgType) = getimagesize($tempImgFile);
        switch($tempImgType){
            case IMAGETYPE_GIF:
                return ".gif";
            break;
            case IMAGETYPE_ICO:
                return ".ico";
            break;
            case IMAGETYPE_JPEG:
                return ".jpg";
            break;
            case IMAGETYPE_PNG:
                return ".png";
            break;
            default:
                return false;
        }
    }

    /*
     * MOVE FILE
     * @þaram   $file               (string)        [required]
     *          $destination        (string)        [required]
     * @return  true || false       (boolean)
     */
    private function moveFile($file, $destination){
        return (boolean) move_uploaded_file($file, $destination);
    }

    /**************************************************************************/

    /* PUBLIC FUNCTION */

    /*
     * DELETE
     * @param   $file               (string)        [required]
     * @return  true || false       (boolean)
     */
    public function delete($file){
        return (boolean) unlink($file);
    }

    /*
     * UPLOAD IMG
     * @param   $name               (string)        [required]
     *          $path               (string)        [required]
     *          $thumb              (array)         [optional]
     * @return
     * ||       false               (boolean)
     */
    public function uploadImg($name, $path, $thumb = false){
        $tempImgId      = $_FILES["$name"]["name"];
        $tempImgFile    = $_FILES["$name"]["tmp_name"];
        $tempImgArr     = @explode(".", $tempImgId);
        $tempImgCou     = count($tempImgArr);
        $tempImgType    = ".".$tempImgArr[$tempImgCou - 1];
        if($tempImgType === "."){
            return false;
        }

        $imgName        = time()."-".rand(100,999);
        $imgType        = $this->getImgType($tempImgFile);
        if(!$imgType && !$tempImgType){
            $imgType    = $this->imgDefaultExt;
        }else{
            $imgType    = $tempImgType;
        }

        $codedPath          = $this->createDateCodedPath();
        $imgDir             = PUBLICROOT . "$path/$codedPath";
        $imgRelDir          = "$path/$codedPath";

        $imgPath            = "$imgDir$imgName"."$imgType";
        $thumbPath          = "$imgDir$imgName"."$this->imgThumbExt"."$imgType";

        $imgRelPath            = "$imgRelDir$imgName"."$imgType";
        $thumbRelPath          = "$imgRelDir$imgName"."$this->imgThumbExt"."$imgType";

        if($thumb){
            $thumbHeight    = $thumb[1];
            $thumbWidth     = $thumb[0];
        }

        if(!$this->createFolder($imgDir)){
            $error["upload"]    = _("Fehlende Benutzerrechte");
        }
        if(!$this->moveFile($tempImgFile, $imgPath)){
            $error["upload"]    = _("Fehler beim Hochladen der Datei");
        }
        if(!$thumb && !$this->createThumb($imgPath, $thumbPath) || $thumb && !$this->createThumb($imgPath, $thumbPath, $thumbWidth, $thumbHeight)){
            $error["upload"]    = _("Fehler beim erstellen des Thumbnails");
        }

        if(!isset($error)){
            return array("image" => $imgRelPath, "thumbnail" => $thumbRelPath);
        }else{
            return false;
        }
    }

}
