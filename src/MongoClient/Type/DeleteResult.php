<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf/GoTask.
 *
 * @link     https://www.github.com/hyperf/gotask
 * @document  https://www.github.com/hyperf/gotask
 * @contact  guxi99@gmail.com
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace Hyperf\GoTask\MongoClient\Type;

use MongoDB\BSON\Unserializable;

class DeleteResult implements Unserializable
{
    private int $n;

    public function bsonUnserialize(array $data): void
    {
        $this->n = (int) $data['n'];
    }

    public function getDeletedCount(): int
    {
        return $this->n;
    }
}
