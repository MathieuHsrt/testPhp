<?php


class Tours{

    private $id;
    private $created_at;
    private $updated_at;
    private $title;
    private $slug;

    /*public function __construct($id, $created_at, $updated_at, $title)
    {
        $this->$id = $id;
        $this->$created_at = $created_at;
        $this->$updated_at = $updated_at;
        $this->$title = $title;
    }*/

    public function __construct()
    {
       
    }

    
    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of created_at
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Get the value of updated_at
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     */
    public function setTitle($title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of slug
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set the value of slug
     */
    public function setSlug($slug): self
    {
        $this->slug = $slug;

        return $this;
    }
}