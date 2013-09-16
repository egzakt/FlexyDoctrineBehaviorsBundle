<?php

namespace Egzakt\DoctrineBehaviorsBundle\ORM\Sluggable;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\QueryBuilder;
use Knp\DoctrineBehaviors\Reflection\ClassAnalyzer;

/**
 * Class SluggableListenerInterface
 */
interface SluggableListenerInterface
{

    /**
     * Get Class Analyzer
     *
     * @return ClassAnalyzer
     */
    public function getClassAnalyzer();

    /**
     * Set Class Analyzer
     *
     * @param ClassAnalyzer $classAnalyzer
     */
    public function setClassAnalyzer(ClassAnalyzer $classAnalyzer);

    /**
     * Get Entity Name
     *
     * Returns the name of the entity having a slug field which to map the SluggableListener
     *
     * @return array
     */
    public function getEntityName();

    /**
     * Set Entity Name
     *
     * @param $entityName
     */
    public function setEntityName($entityName);

    /**
     * Get Select Query Builder
     *
     * Returns the Select QueryBuilder that will check for a similar slug in the table
     * The slug will be valid when the Query returns 0 rows.
     *
     * @param string $slug
     * @param mixed $entity
     * @param EntityManager $em
     *
     * @return QueryBuilder
     */
    public function getSelectQueryBuilder($slug, $entity, EntityManager $em);

}