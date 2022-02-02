<?php

namespace Andre\Doctrine\Entity;

/**
 * @Entity
 */
class Aluno
{
  /**
   * @id
   * @GeneratedValue
   * @Column ("integer")
   */
  private $id;
  /**
   * @Column ("string")
   */
  private $name;

  public function getId()
  {
    return $this->id;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setName($name)
  {
    return $this->name = $name;
  }
}
