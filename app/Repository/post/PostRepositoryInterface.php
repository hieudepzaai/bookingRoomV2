<?php

namespace App\Repository\post;

use App\Repository\CrudRepositoryInterface;

interface PostRepositoryInterface
{
    public function create($data);
    public function get($id);
    public function getAll();
    public function delete($id);
    public function update($id ,  $data);
    public function get8SharedRoomPost() ;
    public function get8ForRentRoomPost() ;
    public function get8LatestPost() ;
    public function get8ForSoldPost() ;
    public function get8FindRoomPost() ;

    public function getSharedRoomPost() ;
    public function getForRentRoomPost() ;
    public function getLatestPost() ;
    public function getForSoldPost() ;
    public function getFindRoomPost() ;

    public function getPostByCategoryId($category_id) ;
    public function getPostByStreetId($street_id) ;
    public function getPostByWardId($street_id) ;
    public function getPostByProvinceId($street_id) ;

}
