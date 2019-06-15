<?php

    namespace SamBenne\Zip;

    use Illuminate\Support\Facades\Facade;

    class ZipFacade extends Facade
    {

        protected static function getFacadeAccessor()
        {
            return 'zip';
        }
    }