<?php
include_once 'IObject.php';
class Film implements IObject {
    public $id;
    public $title;
    public $year;
    public $image;
    public $rating;
    public $duration;
    public $country;
    public $genreId;
    public $isPopularId;
    public $memberId;
    public function __construct($id,$title,$country,$duration,$image,$genreId,$year,$rating,$isPopularId,$memberId)
    {
        $this->id=$id;
        $this->title=$title;
        $this->country=$country;
        $this->duration=$duration;
        $this->image=$image;
        $this->genreId=$genreId;
        $this->isPopularId=$isPopularId;
        $this->rating=$rating;
        $this->year=$year;
        $this->memberId=$memberId;
    }
    public function __toString()
    {
        return "ID:".$this->id."Title: ".$this->title."Country: ".$this->country."Duration: ".$this->duration.
            "Image: ".$this->image."Year: ".$this->year."Rating: ".$this->rating."Genre Id: ".$this->genreId.
            "Member Id: ".$this->memberId."is Popular Id: ".$this->isPopularId;
    }

    public function Equals($object)
    {
        if(gettype($object) == gettype($this)){
            if(get_class($object) == get_class($this)){
                if(
                    $this->title == $object->title && $this->year == $object->year
                    && $this->image == $object->image && $this->rating == $object->rating
                    && $this->genreId == $object->genreId && $this->duration == $object->duration
                    && $this->country == $object->country && $this->isPopularId == $object->isPopularId
                    && $this->memberId == $object->memberId
                ){
                    return true;
                }else{
                    return false;
                }
            }
            else{
                return false;
            }
        }
        else{
            return false;
        }
    }
}
?>