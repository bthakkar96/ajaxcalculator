<?php


namespace Ajaxphtml\Controllerphtml\Api\Data;

interface ControllerphtmlInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case.
     */
    const POST_ID = 'post_id';
    const HEIGHT = 'height';
    const WEIGHT = 'weight';
    const UPDATE_AT = 'updated_at';
    const CREATED_AT = 'created_at';

   /**
    * Get EntityId.
    *
    * @return int
    */
    public function getPostId();

   /**
    * Set EntityId.
    */
    public function setPostId($postId);

   /**
    * Get Title.
    *
    * @return varchar
    */
    public function getHeight();

   /**
    * Set Title.
    */
    public function setHeight($height);

   /**
    * Get Content.
    *
    * @return varchar
    */
    public function getWeight();

   /**
    * Set Content.
    */
    public function setWeight($weight);

 

   /**
    * Get UpdateTime.
    *
    * @return varchar
    */
    public function getUpdatedAt();

   /**
    * Set UpdateTime.
    */
    public function setUpdatedAt($updatedAt);

   /**
    * Get CreatedAt.
    *
    * @return varchar
    */
    public function getCreatedAt();

   /**
    * Set CreatedAt.
    */
    public function setCreatedAt($createdAt);
}
