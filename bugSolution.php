```php
function processData(array $data): array {
  // Check if the array is empty
  if (empty($data)) {
    return [];
  }

  // Initialize an array to store the processed data
  $processedData = [];

  // Iterate over the data and handle non-string values
  foreach ($data as $item) {
    if (is_string($item)) {
      $processedData[] = strtoupper($item);
    } else {
      // Handle non-string values appropriately
      // For instance, you could skip them, convert them to a string representation or throw an exception.
      $processedData[] = (string)$item; //This converts non-string to string, and handles potential error
    }
  }

  // Return the processed data
  return $processedData;
}

// Example usage:
$data = ['apple', 123, 'cherry', null];
$processedData = processData($data);
print_r($processedData);
```