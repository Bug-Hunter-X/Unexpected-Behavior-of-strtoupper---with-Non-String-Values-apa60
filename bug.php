```php
function processData(array $data): array {
  // Check if the array is empty
  if (empty($data)) {
    return [];
  }

  // Initialize an array to store the processed data
  $processedData = [];

  // Iterate over the data and convert each item to uppercase
  foreach ($data as $item) {
    $processedData[] = strtoupper($item);
  }

  // Return the processed data
  return $processedData;
}

// Example usage:
$data = ['apple', 'banana', 'cherry'];
$processedData = processData($data);
print_r($processedData);
```