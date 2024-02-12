<?php
require 'vendor/autoload.php';

use SRC\DTOs\RoleDTO;
use SRC\DTOs\UserDTO;
use SRC\Requests\UserRequest;

$admin = [
  'id' => 2,
  'description' => 'Administrator',
  'slug' => 'admin',
];

$request = new UserRequest(
  id: 21,
  name: 'Joaquin Phoenix',
  email: 'joa_phoenix@gmail.com',
);

$userDTO = UserDTO::fromRequest(request: $request);
echo $userDTO;

echo "<hr>";

$userDTO->role = RoleDTO::fromArray(data: $admin);
$user = UserDTO::toModel(dto: $userDTO);
echo $user;

echo "<hr>";

$userDTOWithRole = UserDTO::toDTO(model: $user);
echo $userDTOWithRole;
