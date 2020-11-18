AWS Parameters
===============

Provide objects for building request parameters to AWS low-level API.

```php
use Aws\DynamoDb\DynamoDbClient;
use GTMC\Aws\Parameters\DynamoDB\Actions\CreateTable;
use GTMC\Aws\Parameters\DynamoDB\DataTypes\AttributeDefinition;
use GTMC\Aws\Parameters\DynamoDB\DataTypes\KeySchemaElement;
use GTMC\Aws\Parameters\DynamoDB\DataTypes\LocalSecondaryIndex;
use GTMC\Aws\Parameters\DynamoDB\DataTypes\Projection;
use GTMC\Aws\Parameters\DynamoDB\DataTypes\ProvisionedThroughput;

$createTable = new CreateTable(
    'Music',
    [
        new AttributeDefinition('Artist', AttributeDefinition::ATTRIBUTE_TYPE_S),
        new AttributeDefinition('SongTitle', AttributeDefinition::ATTRIBUTE_TYPE_S),
        new AttributeDefinition('AlbumYear', AttributeDefinition::ATTRIBUTE_TYPE_N),
    ],
    [
        new KeySchemaElement('Artist', KeySchemaElement::KEY_TYPE_HASH),
        new KeySchemaElement('SongTitle', KeySchemaElement::KEY_TYPE_RANGE)
    ],
    CreateTable::BILLING_MODE_PAY_PER_REQUEST,
    null,
    [
        new LocalSecondaryIndex(
            'localIdx',
            [
            new KeySchemaElement('attName', KeySchemaElement::KEY_TYPE_RANGE)
            ],
            new Projection(
                ['Artist'],
                Projection::PROJECTION_TYPE_KEYS_ONLY
            )
        )
    ],
    new ProvisionedThroughput(10, 5)
);

$dynamoDbClientOptions = [];
$dynamoDbClient = new DynamoDbClient($dynamoDbClientOptions);
$result = $dynamoDbClient->createTable($createTable->toArray());

print_r($result);
```