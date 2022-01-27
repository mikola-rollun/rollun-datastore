<?php
/**
 * @copyright Copyright © 2014 Rollun LC (http://rollun.com/)
 * @license LICENSE.md New BSD License
 */

namespace rollun\datastore\Rql;

use rollun\datastore\Rql\Node\GroupbyNode;
use Graviton\RqlParser\AbstractNode;
use Graviton\RqlParser\QueryBuilder;

class RqlQueryBuilder extends QueryBuilder
{
    public function __construct()
    {
        $this->query = new RqlQuery();
    }

    public function addNode(AbstractNode $node)
    {
        if ($node instanceof GroupbyNode) {
            return $this->query->setGroupBy($node);
        }
        return parent::addNode($node);
    }
}
