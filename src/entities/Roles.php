<?php
    use Doctrine\ORM\Annotation as ORM;
    use Doctrine\Common\Collections\ArrayCollection;
    use Doctrine\ORM\Mapping\Entity;
    use Doctrine\ORM\Mapping\Table;
    use Doctrine\ORM\Mapping\Id;
    use Doctrine\ORM\Mapping\Column;
    use Doctrine\ORM\Mapping\GeneratedValue;
    use Doctrine\ORM\Mapping\ManyToOne;
    use Doctrine\ORM\Mapping\JoinColumn;
    use Doctrine\ORM\Mapping\ManyToMany;

    /**
    * @Entity @Table(name="roles")
    **/
    class Roles
        {
            /** @Id @column(type="integer") @GeneratedValue **/
            private $id;
            /** @column(type="string") **/
            private $nom;
            /**
            * Many Roles have Many Users.
            * @ManyToMany(targetEntity="User", mappedBy="roles")
            */
            private $users;

            public function __construt()
                {
                    $this->users = new ArrayCollection();
                }
            public function getId()
                {
                    return $this->id;
                }
            public function setId($id)
                {
                    $this->id = $id;
                }

            public function getNom()
                {
                    return $this->nom;
                }
            public function setNom($nom)
                {
                    $this->nom = $nom;
                }

            public function getUsers()
                {
                    return $this->users;
                }
            public function setUsers($users)
                {
                    $this->users = $users;
                }
            
        }
?>