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

use MongoDB\BSON\ObjectId;
use MongoDB\BSON\Unserializable;

class UpdateResult implements Unserializable
{
    private int $matchedCount;

    private int $modifiedCount;

    private int $upsertedCount;

    private ObjectId|string|null $upsertedId;

    public function bsonUnserialize(array $data): void
    {
        $this->matchedCount = (int) $data['matchedcount'];
        $this->modifiedCount = (int) $data['modifiedcount'];
        $this->upsertedCount = (int) $data['upsertedcount'];
        $this->upsertedId = $data['upsertedid'];
    }

    public function getUpsertedId(): ObjectId|string|null
    {
        return $this->upsertedId;
    }

    public function getUpsertedCount(): int
    {
        return $this->upsertedCount;
    }

    public function getModifiedCount(): int
    {
        return $this->modifiedCount;
    }

    public function getMatchedCount(): int
    {
        return $this->matchedCount;
    }
}
