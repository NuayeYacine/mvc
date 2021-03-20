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
    use Doctrine\ORM\Mapping\OneToMany;
    use Doctrine\ORM\Mapping\ManyToMany;
    use Doctrine\ORM\Mapping\JoinTable;

    /**
    * @Entity @Table(name="user")
    **/
    class User
        {
            /** @Id @column(type="integer") @GeneratedValue **/
            private $id;
            /** @column(type="string") **/
            private $nom;
            /** @column(type="string") **/
            private $prenom;
            /** @column(type="string") **/
            private $mail;
            /** @column(type="string") **/
            private $password;
             /**
            * One user has many lieu. This is the inverse side.
            * @OneToMany(targetEntity="Lieu", mappedBy="user")
            */
            private $lieux;
            /**
            * Many Users have Many Roles.
            * @ManyToMany(targetEntity="Roles", inversedBy="users")
            * @JoinTable(name="users_roles")
            */
            private $roles;

            public function __construt()
                {
                    $this->lieux = new ArrayCollection();
                    $this->roles = new ArrayCollection();
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

            public function getPrenom()
                {
                    return $this->prenom;
                }
            public function setPrenom($prenom)
                {
                    $this->prenom = $prenom;
                }

            public function getMail()
                {
                    return $this->mail;
                }
            public function setMail($mail)
                {
                    $this->mail = $mail;
                }
                
            public function getPassword()
                {
                    return $this->password;
                }
            public function setPassword($password)
                {
                    $this->password = $password;
                }

            public function getLieux()
                {
                    return $this->lieux;
                }
            public function setLieux($lieux)
                {
                    $this->lieux = $lieux;
                }
            
            public function getRoles()
                {
                    return $this->roles;
                }
            public function setRoles($roles)
                {
                    $this->roles = $roles;
                }
        }
?>