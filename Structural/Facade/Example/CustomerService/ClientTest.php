<?php



$customerService = new CustomerServiceFacade();

// order product that has id : 2
$customerService->orderProduct(2);    // easy way for the client part. ( This is the goal of facade )
// order product that has id : 5
$customerService->orderProduct(5);    // easy way for the client part. ( This is the goal of facade )
// order product that has id : 7
$customerService->orderProduct(7);    // easy way for the client part. ( This is the goal of facade )
// order product that has id : 9
$customerService->orderProduct(9);    // easy way for the client part. ( This is the goal of facade )
