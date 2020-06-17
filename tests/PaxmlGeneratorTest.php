<?php

namespace JGI\Tests\Paxml\Model;

use JGI\Paxml\Model\{Header, Paxml, Person, SalaryTransaction};
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

        $salaryTransaction = new SalaryTransaction('1', '1122334455', '123', 1.2);
        $salaryTransaction->setUnitPrice(1000);
        $paxml->addSalaryTransaction($salaryTransaction);

        $person = new Person();
        $person->setIdentityNumber('1122334455');
        $person->setEmploymentNumber('1');
        $person->setFirstName('Jon');
        $person->setLastName('Gotlin');
        $person->setAddress1('Dalstadsvägen 26');
        $person->setAddress2('c/o');
        $person->setPostalCode('71930');
        $person->setCity('Vintrosa');
        $person->setMobilePhoneNumber('0701111111');
        $person->setHomePhoneNumber('019111111');
        $person->setWorkPhoneNumber('112');
        $person->setHomeEmail('jon@home.se');
        $person->setWorkEmail('jon@work.se');
        $person->setBankClearingNumber('1111');
        $person->setBankAccountNumber('22222222');
        $person->setWorkerType('TJM');

        $paxml->addPerson($person);

        $paxmlDocument = $paxmlGenerator->createPaxmlDocument($paxml);
        $this->assertInstanceOf(PaxmlDocument::class, $paxmlDocument);
        $this->assertXmlStringEqualsXmlFile(__DIR__ . '/expected.xml', $paxmlDocument->saveXML());
    }
}
