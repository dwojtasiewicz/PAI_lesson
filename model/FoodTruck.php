<?php
/**
 * Created by PhpStorm.
 * User: Dominika W
 * Date: 2019-02-10
 * Time: 21:48
 */

class FoodTruck
{
    private $id;
    private $name;
    private $type;
    private $image;
    private $description;

    public function __construct($name, $type, $image, $description)
    {
        $this->name = $name;
        $this->type = $type;
        $this->image = $image;
        $this->description = $description;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id): void
    {
        $this->id = $id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name): void
    {
        $this->name = $name;
    }
    public function getType()
    {
        return $this->type;
    }
    public function setType($type): void
    {
        $this->type = $type;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function setImage($image): void
    {
        $this->image = $image;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description): void
    {
        $this->description = $description;
    }
}