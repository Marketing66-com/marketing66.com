<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 3/20/2018
 * Time: 4:06 PM
 */
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ServiceRepository")
 * @ORM\Table(name="service")
 */
class Service
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */private $id;
    /**
     * @ORM\Column(type="string")
     */private $name;
    /**
     * @ORM\Column(type="string")
     */private $PlainText;


    /**
     * @ORM\Column(type="string")
     */
    private $HighlighText;

    /**
     * @return mixed
     */
    public function getPlainText()
    {
        return $this->PlainText;
    }

    /**
     * @param mixed $plain_text
     */
    public function setPlainText($plain_text)
    {
        $this->PlainText = plain_text;
    }

    /**
     * @return mixed
     */
    public function getHighlightText()
    {
        return $this->HighlighText;
    }

    /**
     * @param mixed $highlight_text
     */
    public function setHighlightText($highlight_text)
    {
        $this->HighlighText = $highlight_text;
    }
    /**
     * @ORM\Column(type="string")
     */
    private $imgUrl;

    /**
     * @return mixed
     */
    public function getImgUrl()
    {
        return $this->imgUrl;
    }

    /**
     * @param mixed $imgUrl
     */
    public function setImgUrl($imgUrl)
    {
        $this->imgUrl = $imgUrl;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

}