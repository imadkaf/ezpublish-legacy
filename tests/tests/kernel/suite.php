<?php

class eZKernelTestSuite extends ezpDatabaseTestSuite
{
    public function __construct()
    {
        parent::__construct();

        $this->setName( "eZ Publish Kernel Test Suite" );
        $this->addTest( eZContentObjectRegression::suite() );
        $this->addTest( eZURLAliasMlTest::suite() );
        $this->addTest( eZURLAliasMlRegression::suite() );
        $this->addTest( eZURLTypeRegression::suite() );
        $this->addTest( eZXMLTextRegression::suite() );
    }

    public static function suite()
    {
        return new self();
    }
}

?>