AWS Parameters
===============

Provide objects for building request parameters to AWS low-level API.

##### Example:

```php
use Aws\Sdk;
use GTMC\Aws\Parameters\DynamoDB\Actions\CreateTable;
use GTMC\Aws\Parameters\DynamoDB\DataTypes\AttributeDefinition;
use GTMC\Aws\Parameters\DynamoDB\DataTypes\KeySchemaElement;
use GTMC\Aws\Parameters\DynamoDB\DataTypes\ProvisionedThroughput;

$sdk = new Sdk(
    [
        'endpoint' => 'http://localhost:8000',
        'region' => 'us-west-2',
        'version' => 'latest'
    ]
);

$dynamoDb = $sdk->createDynamoDb();
$createTable = new CreateTable(
    'Music',
    [
        new AttributeDefinition('Artist', AttributeDefinition::ATTRIBUTE_TYPE_S),
        new AttributeDefinition('SongTitle', AttributeDefinition::ATTRIBUTE_TYPE_S)
    ],
    [
        new KeySchemaElement('Artist', KeySchemaElement::KEY_TYPE_HASH),
        new KeySchemaElement('SongTitle', KeySchemaElement::KEY_TYPE_RANGE)
    ],
    null,
    null,
    null,
    new ProvisionedThroughput(10, 5)
    );

$result = $dynamoDb->createTable($createTable->toArray());

print_r($result);
```