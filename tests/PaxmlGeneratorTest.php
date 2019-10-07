<?php

namespace JGI\Tests\Paxml\Model;

use JGI\Paxml\Model\{Header,Paxml,SalaryTransaction};
use JGI\Paxml\{PaxmlDocument,PaxmlGenerator};

final class PaxmlGeneratorTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function shouldReturnPaxml()
    {
        $paxmlGenerator = new PaxmlGenerator();
        $paxml = new Paxml();
        $header = new Header();
        $paxml->setHeader($header);
        $salaryTransaction = new SalaryTransaction('1122334455', '123', 1.2);
        $salaryTransaction->setUnitPrice(1000);
        $paxml->addSalaryTransaction($salaryTransaction);

        $paxmlDocument = $paxmlGenerator->createPaxmlDocument($paxml);
        $this->assertInstanceOf(PaxmlDocument::class, $paxmlDocument);
        $this->assertXmlStringEqualsXmlFile(__DIR__ . '/expected.xml', $paxmlDocument->saveXML());
    }
}
