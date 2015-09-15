<?php
if ( !defined( 'BASEPATH' ) )
	exit( 'No direct script access allowed' );
class restapi_model extends CI_Model
{
    public function getmultipleoffer($offerid)
    {
        $todaysdate=date("Y-m-d");
        $query['offers']=$this->db->query("SELECT * FROM `offer` WHERE `startdate` <= '$todaysdate' AND `enddate` >= '$todaysdate'")->result();
        $query1=$this->db->query("SELECT * FROM `offer` WHERE `startdate` <= '$todaysdate' AND `enddate` >= '$todaysdate' ORDER BY `timestamp` DESC")->row();
        
        $query['pastoffer']=$this->db->query("SELECT * FROM `offer` WHERE `enddate` < '$todaysdate' ORDER BY `timestamp` DESC")->row();
        
        $query['upcomingoffer']=$this->db->query("SELECT * FROM `offer` WHERE `startdate` > '$todaysdate' ORDER BY `timestamp` DESC")->row();
        $query['offerid']=  $query1->id;
        if($offerid==""){
        $offerid=$query['offerid'];
        }
        
        // PRODUCT IDS
          $getproductids=$this->db->query("SELECT `product` FROM `offerproduct` WHERE `offer`='$offerid'")->result();
          $productids="(";
            foreach($getproductids as $key=>$value){
                
                if($key==0)
                {
                    $productids.=$value->product;
                }
                else
                {
                    $productids.=",".$value->product;
                }
            }
            $productids.=")";
        $query['offerproduct']=$this->db->query("SELECT `product`.`id`,`product`.`name`,`product`.`sku`,`product`.`url`,`product`.`price`
,`product`.`wholesaleprice`,`product`.`firstsaleprice`,`product`.`secondsaleprice`,`product`.`specialpriceto`,`product`.`specialpricefrom`,`image1`.`image` as `image1`,`image2`.`image` as `image2`,`product`.`quantity`,`offerproduct`.`order` FROM `product`  LEFT OUTER JOIN `offerproduct` ON `offerproduct`.`product`=`product`.`id` LEFT OUTER JOIN `productimage` as `image2` ON `image2`.`product`=`product`.`id` AND `image2`.`order`=0 LEFT OUTER JOIN `productimage` as `image1` ON `image1`.`product`=`product`.`id` AND `image1`.`order`=1 WHERE `product`.`visibility`=1 AND `product`.`status`=1 AND `product`.`id` IN $productids GROUP BY `product`.`id` ORDER BY `offerproduct`.`order` ASC")->result();
     
        return $query;
    }	
	
}
?>