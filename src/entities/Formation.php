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

    /**
    * @Entity @Table(name="formation")
    **/
    class Formation
        {
            /** @Id @column(type="integer") @GeneratedValue **/
            private $id;
            /** @column(type="string") **/
            private $nom;
            /** @column(type="string") **/
            private $date;
            /** @column(type="integer") **/
            private $duree;
            /**
            * Many formation have one lieu. This is the owning side.
            * @ManyToOne(targetEntity="Lieu", inversedBy="formations")
            * @JoinColumn(name="lieu_id", referencedColumnName="id")
            */
            private $lieu;
            
            public function __construt()
                {

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

            public function getDate()
                {
                    return $this->date;
                }
            public function setDate($date)
                {
                    $this->date = $date;
                }

            public function getDuree()
                {
                    return $this->duree;
                }
            public function setDuree($duree)
                {
                    $this->duree = $duree;
                }

            public function getLieu()
                {
                    return $this->lieu;
                }
            public function setLieu($lieu)
                {
                    $this->lieu = $lieu;
                }
        }
?>