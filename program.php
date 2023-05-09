<?php
echo "Nie stać nas na hosting backendu";

$servername = "debil";
$username = "debil";
$password = "Krodofox$";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Shawty bring over the booty";

/*INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, 'Admin', 'admin@arg.gov.af', '$2y$10$LpX3UsKbv.x5AktVcEKvNuP7aP0JQ3gOo1NXCSXelHba7tiMf.E4q', 'fU35IGJsoiqAoa042intLqCQ3Wn3URxwpWqwu7q6y5UzUf7vMGjRlmc8xXi5', NULL, '2019-06-01 01:34:07', '2021-12-26 03:39:05'); */
?>