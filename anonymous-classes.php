<?php
// They can be used to create objects on the fly; they can even extend a base class.
// Here's an example in a test context:
function test_dto_type_checking_with_arrays(): void
{
    $dto = new class(
        ['arrayOfInts' => [1, 2]]
    ) extends DataTransferObject {
        /** @var int[] */
        public array $arrayOfInts;
    };

    // Assertions
}
