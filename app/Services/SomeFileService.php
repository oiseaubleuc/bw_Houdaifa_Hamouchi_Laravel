<?php

use App\Services\SomeFileService;

class SomeController extends Controller
{
protected $someFileService;

public function __construct(SomeFileService $someFileService)
{
$this->someFileService = $someFileService;
}

public function someMethod()
{
if ($this->someFileService->exists('path/to/file')) {
// Do something
}
}
}
